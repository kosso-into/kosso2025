<?php
	include_once('./include/head.php');
	include_once('./include/app_header.php');

	if($admin_permission["auth_board_notice"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

    $title = $_GET["app_title"] ?? "";
    $s_date = $_GET["s_date"] ?? "";
    $e_date = $_GET["e_date"] ?? "";

    $where = "";

    if($title != ""){
        $where .= " AND (b.title_en LIKE '%{$title}%') ";
    }

    if($s_date != ""){
        $where .= " AND b.register_date >= '{$s_date}' ";
    }

    if($e_date != ""){
        $where .= " AND b.register_date <= '{$e_date}' ";
    }

    $sql =	"
                SELECT
                    b.idx, b.title_en, b.title_en, f.path, DATE_FORMAT(b.register_date, '%Y-%m-%d') AS register_date
                FROM board AS b
                LEFT JOIN(
                    SELECT
                        idx, CONCAT(path,'/',save_name) AS path
                    FROM `file`
                )AS f
                ON b.thumnail = f.idx
                WHERE b.is_deleted = 'N'
                AND b.`type` = 3
                {$where}
                ORDER BY register_date DESC
                ";

    $list = get_data($sql);
    $total_count = count($list);
?>
<style>
	.register_btn {float: right;}
	.app_add_notice_btn {float: right;}
</style>
	<section class="list app_notice">
		<div class="container">
			<div class="title clearfix">
				<?php
                    if($admin_permission["auth_board_notice"] > 1){
				?>
					<h1 class="font_title">Notice</h1>
					<button type="button" class="btn app_add_notice_btn">Notice 등록</button>
				<?php
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
									<input type="text" name="app_title" value="<?=$title?>" data-type="app_title">
								</td>
								<th>등록일</th>
								<td class="input_wrap"><input type="text" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" name="s_date" value="<?=$s_date?>" data-type="date"> <span>~</span> <input type="text" class="datepicker-here" data-language="en" data-date-format="yyyy-mm-dd" name="e_date" value="<?=$e_date?>" data-type="date"></td>
							</tr>
						</tbody>
					</table>
				   <button type="submit" class="btn search_btn">검색</button>
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
                    <?php
                        foreach ($list as $l) {
                    ?>
						<tr class="tr_center">
 						    <td><?=$l["register_date"]?></td>
							<td class="notice_title"><p class="ellipsis"><?=$l["title_en"]?></p></td>
							<td><button type="button" class="btn app_push_btn app_push_open" name="pop_btn">Push</button></td>	
							<td>
								<button type="button" class="btn app_pin_btn on">Pin</button>
								<button type="button" class="btn app_modify_btn">Modify</button>
								<button type="button" class="btn app_delete_btn">Delete</button>
							</td>	
						</tr>
					</tbody>
                    <?php
                    }
                    ?>
				</table>
			</div>
			<div class="contwrap">
				<p class="table_title">Contents</p>
				<form name="">
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
