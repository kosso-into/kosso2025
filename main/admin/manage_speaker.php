<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	if($admin_permission["auth_live_lecture"] == 0){
		echo	'<script>
					alert("권한이 없습니다.");
					history.back();
				</script>';
	}

	// lecture list
	$where = "";
	$add = "";

	// 이름
	if ($_GET['name_en'] != "") {
		$where .= " AND ls.name_en LIKE '%".$_GET['name_en']."%'";
		$add .= "&title=".$_GET['title'];
	}

	// 등록일 (시작일)
	if ($_GET["str"] && $_GET["str"] != "") {
		$where .= (($_GET["str"] <= 0) ? "" : " AND DATE(ls.register_date) >= '{$_GET['str']}'");
		$add .= "&str=".$_GET['str'];
	}
	// 등록일 (종료일)
	if ($_GET["end"] && $_GET["end"] != "") {
		$where .= " AND DATE(ls.register_date) < DATE_ADD('{$_GET['end']}', INTERVAL +1 day)";
		$add .= "&end=".$_GET['end'];
	}

	$sql_list =	"SELECT
					ls.idx,
                    ls.name_en,
                    ls.affiliation_en,
					CONCAT(DATE_FORMAT(ls.lecture_start_time, '%y-%m-%d %H:%i'), ' ~ ', DATE_FORMAT(ls.lecture_end_time, '%H:%i')) AS lecture_time_text,
                    ls.lecture_title,
                    CONCAT(fi_profile.path, '/', fi_profile.save_name) AS fi_profile_path,
                    CONCAT(fi_cv.path, '/', fi_cv.save_name) AS fi_cv_path,
                    fi_cv.original_name as fi_cv_name,
					DATE_FORMAT(ls.register_date, '%y-%m-%d') AS register_date
				FROM lecture_speaker AS ls
                LEFT JOIN `file` AS fi_profile
                    ON fi_profile.idx = ls.profile_img
                LEFT JOIN `file` AS fi_cv
                    ON fi_cv.idx = ls.cv_file
				WHERE ls.is_deleted = 'N'
				".$where."
				ORDER BY ls.lecture_start_time";
	$list = get_data($sql_list);
	$total_count = count($list);
	//echo "<pre>{$sql_list}</pre>";

	$can_modify = ($admin_permission["auth_live_lecture"] > 1);
?>
<section class="list">
	<div class="container">
		<!----- 타이틀 ----->
		<div class="title clearfix2">
			<h1 class="font_title">Speaker 관리</h1>
		</div>
		<!----- 검색조건박스 ----->
		<div class="contwrap centerT has_fixed_title">
			<form>
				<table>
					<colgroup>
						<col width="10%">
						<col width="40%">
						<col width="10%">
						<col width="40%">
					</colgroup>
					<tbody>
						<tr>
							<th>이름</th>
							<td>
								<input type="text" name="name_en" value="<?=$_GET['name_en']?>">
							</td>
							<th>등록일</th>
							<td class="input_wrap">
								<input type="text" class="datepicker-here" data-date-format="yyyy-mm-dd" data-type="date" data-language="en" name="str">
								<span>~</span>
								<input type="text" class="datepicker-here" data-date-format="yyyy-mm-dd" data-type="date" data-language="en" name="end">
							</td>
						</tr>
					</tbody>
				</table>
				<button class="btn search_btn">검색</button>
			</form>
		</div>
		<!----- 컨텐츠 ----->
		<div class="contwrap" style="width: 100%;">
			<div class="clearfix">
				<?php
					if($can_modify){
				?>
				<div class="floatR">
					<button type="button" class="btn search_btn" onclick="location.href='./manage_speaker_detail.php'">Speaker 등록</button>
				</div>
				<?php
					}
				?>
			</div>
			<p class="total_num">총 <?=number_format($total_count)?>개</p>
			<table id="datatable" class="list_table lec_listToDetail">
				<colgroup>
					<col width="20%">
					<col width="20%">
					<col width="*">
					<col width="10%">
					<col width="10%">
					<col width="10%">
				</colgroup>
				<thead>
					<tr class="tr_center">
					    <th>Speaker 이름(영문)</th>
					    <th>Speaker 소속</th>
					    <th>강의 제목</th>
						<th>Time(강의일시)</th>
						<th>이미지</th>
						<th>CV</th>
						<th>등록일</th>
					</tr>
				</thead>
				<tbody class=""><!-- no1_td_left -->
					<?php
						if ($total_count > 0) {
							foreach($list as $ls){
								foreach($ls as $key=>$value){
									$ls[$key] = htmlspecialchars_decode($value);
								}
					?>
					<tr class="tr_center">
						<td><a href="./manage_speaker_detail.php?idx=<?=$ls['idx']?>"><?=$ls['name_en']?></a></td>
						<td><?=$ls['affiliation_en']?></td>
						<td><?=$ls['lecture_title']?></td>
						<td><?=$ls['lecture_time_text']?></td>
                        <td><img style="max-width:80px;" src="<?=$ls['fi_profile_path']?>" alt="" onError="javascript:this.src='http://via.placeholder.com/80';" class="thumbnail"></td>
                        <td><a href="<?=$ls['fi_cv_path']?>" target="_blank"><?=$ls['fi_cv_name']?></a></td>
						<td><?=$ls['register_date']?></td>
					</tr>
					<?php
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>

<script>

	// ** DOCUMENT ** //
	$(document).ready(function() {
		// 자동완성 안됨
		$('input').attr('autocomplete', 'off');

		// datepicker 데이터 세팅
		var pt_start = "<?=$_GET['str']?>";
		if (pt_start) {
			$('[name=str]').datepicker().data('datepicker').selectDate(new Date(pt_start));
		}
		var pt_end = "<?=$_GET['end']?>";
		if (pt_end) {
			$('[name=end]').datepicker().data('datepicker').selectDate(new Date(pt_end));
		}
	});
</script>
<?php include_once('./include/footer.php');?>