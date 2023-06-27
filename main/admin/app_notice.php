<?php
	include_once('./include/head.php');
	include_once('./include/app_header.php');

	if($admin_permission["auth_account_member"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

	$id		= isset($_GET["id"])		? $_GET["id"]		: "";
	$name	= isset($_GET["name"])		? $_GET["name"]		: "";
	$phone	= isset($_GET["phone"])		? $_GET["phone"]	: "";
	$s_date = isset($_GET["s_date"])	? $_GET["s_date"]	: "";
	$e_date = isset($_GET["e_date"])	? $_GET["e_date"]	: "";
	$for_offline = ($_GET["for"] == "offline");
	//$for_offline = True;

	$where = "";

	if($id != ""){
		$where .= " AND m.email LIKE '%".$id."%' ";
	}

	if($name != ""){
		$where .= " AND CONCAT(m.first_name, ' ', m.last_name) LIKE '%".$name."%' ";
	}

	if($phone != ""){
		$where .= " AND m.phone LIKE '%".$phone."%' ";
	}

	if($s_date != ""){
		$where .= " AND DATE(m.regist_date) > '".$s_date."' ";
	}

	if($e_date != ""){
		$where .= " AND DATE(DATE_ADD(m.regist_date, INTERVAL 1 DAY)) LIKE < '".$e_date."' ";
	}

	$join_req_type = "LEFT";
	if ($for_offline) {
		$join_req_type = "INNER";
	}

	$select_member_list_query = "
									SELECT
										m.idx, 
										m.email, 
										m.nation_no, n.nation_en, 
										m.first_name, m.last_name, 
										m.first_name_kor, m.last_name_kor,
										m.phone, m.title, m.title_option,
										(
											CASE
												WHEN m.ksola_member_status = 0 THEN '비회원'
												WHEN m.ksola_member_status = 1 THEN '정회원'
												WHEN m.ksola_member_status = 2 THEN '평생회원'
												WHEN m.ksola_member_status = 3 THEN '인터넷회원'
												WHEN m.ksola_member_status IS NULL THEN '비회원'
											END
										)AS ksola_member_status,
										IF(m.telephone IS NULL, '-', m.telephone) AS telephone, 
										IF(m.affiliation IS NULL, '-', m.affiliation) AS affiliation, 
										IF(m.affiliation_kor IS NULL, '-', m.affiliation_kor) AS affiliation_kor, 
										IF(m.department IS NULL, '-', m.department) AS department, 
										IF(m.department_kor IS NULL, '-', m.department_kor) AS department_kor, 
										#IF(req.idx IS NULL, 'N', 'Y') AS printable_nametag_yn,
										IF(mb_idx IS NULL, 'N', 'Y') AS printable_nametag_yn,
										IFNUll(m.date_of_birth, '-') AS date_of_birth,
										DATE_FORMAT(m.register_date, '%y-%m-%d') AS regist_date
									FROM member m
									{$join_req_type} JOIN (
										SELECT
											rr.idx, rr.register
										FROM request_registration AS rr
										INNER JOIN payment AS pmt
											ON pmt.idx = rr.payment_no
										WHERE rr.`status` = 2 AND
                                              rr.is_deleted = 'N' AND
                                              pmt.payment_status = 2
									) AS req
										ON req.register = m.idx
									LEFT JOIN nation n
									ON m.nation_no = n.idx
									LEFT JOIN(
										SELECT
											mb_idx
										FROM score_second
									) AS s
									ON s.mb_idx = m.idx
									WHERE is_deleted = 'N'
									{$where}
									GROUP BY m.idx
									ORDER BY m.register_date DESC
								";
	$member_list = get_data($select_member_list_query);

	$html = '<table id="datatable" class="list_table">';
	$html .= '<thead>';
	$html .= '<tr class="tr_center">';
	$html .= '<th>No</th>';
	$html .= '<th>Date of Sign-up</th>';
	$html .= '<th>ID(Email)</th>';
	$html .= '<th>국내/국외</th>';
	$html .= '<th>Country(ENG)</th>';
	$html .= '<th>KSSO 회원 여부</th>';
	$html .= '<th>Name</th>';
	$html .= '<th>First Name</th>';
	$html .= '<th>Last Name</th>';
	$html .= '<th>성명(국문)</th>';
	$html .= '<th>Title</th>';
	$html .= '<th>Affiliation(Institution)</th>';
	$html .= '<th>소속</th>';
	$html .= '<th>Affiliation(Department)</th>';
	$html .= '<th>부서</th>';
	$html .= '<th>Phone Number</th>';
	$html .= '<th>Telephone Number</th>';
	$html .= '<th>Date of Birth</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	foreach($member_list as $mk => $ml){
		$nation_type = ($ml["nation_no"] == 25) ? "국내" : "국외";
		$name_kor = ($ml["nation_no"] == 25) ? $ml["first_name_kor"].$ml["last_name_kor"] : "-";

		if (!empty($ml['title_option'])) {
			switch($ml['title_option']) {
				case '0':
					$title_option_txt = "Professor";
				break;
				case '1':
					$title_option_txt = "Dr.";
				break;
				case '2':
					$title_option_txt = "Mr.";
				break;
				case '3':
					$title_option_txt = "Ms.";
				break;
				case '4':
					$title_option_txt = $ml['title'];
				break;
			}
		} else {
			$title_option_txt = "-";
		}

		$html .= '<tr class="tr_center">';
		$html .= '<td>'.($mk+1).'</td>';
		$html .= '<td>'.$ml["regist_date"].'</td>';
		$html .= '<td><a href="./member_detail.php?idx='.$ml["idx"].'">'.$ml["email"].'</a></td>';
		$html .= '<td>'.$nation_type.'</td>';
		$html .= '<td>'.$ml["nation_en"].'</td>';
		$html .= '<td>'.$ml["ksola_member_status"].'</td>';
		$html .= '<td>'.$ml["first_name"]." ".$ml["last_name"].'</td>';
		$html .= '<td>'.$ml["first_name"].'</td>';
		$html .= '<td>'.$ml["last_name"].'</td>';
		$html .= '<td>'.$name_kor.'</td>';
		$html .= '<td>'.$title_option_txt.'</td>';
		$html .= '<td>'.$ml["affiliation"].'</td>';
		$html .= '<td>'.$ml["affiliation_kor"].'</td>';
		$html .= '<td>'.$ml["department"].'</td>';
		$html .= '<td>'.$ml["department_kor"].'</td>';
		$html .= '<td>'.$ml["phone"].'</td>';
		$html .= '<td>'.$ml["telephone"].'</td>';
		$html .= '<td>'.$ml["date_of_birth"].'</td>';
		$html .= '</tr>';
	}
	$html .= '</tbody>';
	$html .= '</table>';

	$html = str_replace("'", "\'", $html);
	$html = str_replace(array("\r\n","\r","\n"),'',$html);
	$count = count($member_list);
?>
<style>
	.register_btn {float: right;}
	.app_add_notice_btn {float: right;}
</style>
	<section class="list app_notice">
		<div class="container">
			<div class="title clearfix">
				<?php
					if ($for_offline) {
				?>
					<h1 class="font_title">일반 회원 (오프라인 회원만 보기)</h1>
					<button class="btn register_btn" onclick="javascript:window.open('./member_nametag.php?idx=all')">전체 네임택 보기</button>
				<?php
					} else {
						if($admin_permission["auth_account_member"] > 1){
				?>
					<h1 class="font_title">Notice</h1>
					<button type="button" class="btn app_add_notice_btn">Notice 등록</button>
				<?php
						}
					}
				?>
			</div>
			<div class="contwrap centerT has_fixed_title">
				<form name="search_form">
					<table>
						<colgroup>
							<col width="10%">
							<col width="40%">
							<col width="10%">
							<col width="40%">
						</colgroup>
						<tbody>
							<tr>
								<th>제목</th>
								<td>
									<input type="text" name="app_title" value="" data-type="app_title">
								</td>
								<th>등록일</th>
								<td class="input_wrap"><input type="text" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" name="s_date" value="<?=$s_date?>" data-type="date"> <span>~</span> <input type="text" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" name="e_date" value="<?=$e_date?>" data-type="date"></td>
							</tr>
						</tbody>
					</table>
				   <button type="button" class="btn search_btn">검색</button>
			   </form>
			</div>
			<div class="contwrap">
				<p class="table_title">List</p>
<!-- 				<table id="datatable" class="list_table"> -->
				<table class="list_table app">
					<colgroup>
						<col width="10%">
						<col width="60%">
						<col width="10%">
						<col width="20%">
					</colgroup>
					<thead>
						<tr class="tr_center">
							<th>Date</th>
							<th>Title</th>
							<th>Push</th>
							<th>Management</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tr_center">
<!-- 						<td><?=$list["regist_date"]?></td> -->
							<td>2023-09-07</td>
							<td class="notice_title"><p class="ellipsis">ICOMES 2023 Welcome Cocktail Party begins soon!</p></td>
							<td><button type="button" class="btn app_push_btn app_push_open" name="pop_btn">Push</button></td>	
							<td>
								<button type="button" class="btn app_pin_btn on">Pin</button>
								<button type="button" class="btn app_modify_btn">Modify</button>
								<button type="button" class="btn app_delete_btn">Delete</button>
							</td>	
						</tr>
						<tr class="tr_center">
							<td>2023-09-07</td>
							<td class="notice_title"><p class="ellipsis">Don’t forget to joint the satellite symposium. It takes place at ~</p></td>
							<td><button type="button" class="btn app_push_btn app_push_open" name="pop_btn">Push</button></td>
							<td>
								<button type="button" class="btn app_pin_btn">Pin</button>
								<button type="button" class="btn app_modify_btn">Modify</button>
								<button type="button" class="btn app_delete_btn">Delete</button>
							</td>	
						</tr>
						<tr class="tr_center">
							<td>2023-09-08</td>
							<td class="notice_title"><p class="ellipsis">ICOMES 2023 Welcome Cocktail Party begins soon!</p></td>
							<td><button type="button" class="btn app_push_btn app_push_open" name="pop_btn">Push</button></td>
							<td>
								<button type="button" class="btn app_pin_btn">Pin</button>
								<button type="button" class="btn app_modify_btn">Modify</button>
								<button type="button" class="btn app_delete_btn">Delete</button>
							</td>	
						</tr>
					</tbody>
				</table>
			</div>
			<div class="contwrap">
				<p class="table_title">Contents</p>
				<form name="search_form">
					<table class="overview">
						<colgroup>
							<col width="10%">
							<col width="*">
							<col width="200px">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>Date</th>
								<td>2023-09-07</td>
							</tr>
							<tr>
								<th>Title</th>
								<td>ICOMES 2023 Welcome Cocktail Party begins soon!</td>
							</tr>
							<tr>
								<th>Contents</th>
								<td colspan="3">
									editor area
								</td>
							</tr>
						</tbody>
					</table>
					<div class="btn_wrap leftT">
						<button type="button" class="btn" name="save">Complete</button>
					</div>
				</form>
			</div>
		</div>
	</section>

<!-- Push popup -->
<div class="pop_wrap app_push_pop">
	<div class="pop_dim"></div>
	<div class="pop_cont">
		<div class="pop_title">Push
			<button type="button" class="pop_close"></button>
		</div>
		<div class="pop_inner center_t">
			<p class="pop_inner_title">title</p>
			<div class="text_area">
				<textarea name="notice_title" id="notice_title" cols="30" rows="10">[Notice] ICOMES 2023 Welcome Cocktail Party begins soon!</textarea>			
			</div>

			<ul class="flex app_date_ul">
				<li class="flex">
					<span>Date</span>
					<input type="text" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" name="s_date" value="" data-type="date">
				</li>
			<!-- 23-06-12 예약발송 제외하기로 함 -->
			<!--
				<li class="flex">
					<span>Time</span>
					<input type="text" name="time">
				</li> -->
			</ul> 
		</div>
		<p class="center_t bold">Would you like to proceed with the app push?</p>
		<div class="btn_wrap center_t">
			<button type="button" class="btn pop_close">No</button>
			<button type="button" class="btn pop_close">Yes</button>
		</div>
	</div>
</div>

<script src="./js/common.js"></script>
<script>
	var html = '<?=$html?>';

	$(document).ready(function(){
		$(".app_nav li").eq(0).addClass("on");
	});
	$(".app_pin_btn").on("click",function(){
		$(this).toggleClass("on");
	});
</script>
<?php include_once('./include/footer.php');?>
