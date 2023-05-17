<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	$member_idx = $_GET["idx"];
	if(!$member_idx) {
		echo"<script>alert('비정상적인 접근 방법입니다.'); window.location.replace('./member_list.php');</script>";
		exit;
	}
	if($admin_permission["auth_account_member"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

	$select_abstract_query =	"
									SELECT
										ra.idx, ra.abstract_title, DATE_FORMAT(ra.register_date, '%y-%m-%d') AS regist_date, c.title_en AS abstract_category, f.original_name, CONCAT(f.path,'/',f.save_name) AS file_path
									FROM request_abstract ra
									LEFT JOIN file f
									ON ra.abstract_file = f.idx
									LEFT JOIN (
										SELECT
											title_en, idx
										FROM info_poster_abstract_category
										WHERE is_deleted = 'N'
									) AS c
									ON ra.abstract_category = c.idx
									WHERE ra.is_deleted = 'N'
									AND ra.`type` = 0
									AND ra.register = {$member_idx}
									AND ra.parent_author IS NULL
								";
	$member_abstracts = get_data($select_abstract_query);
?>
<style>
	.no_data {font-size: 18px; text-align: center;}
</style>
	<section class="detail">
		<div class="container">
			<div class="title clearfix2">
				<h1 class="font_title">일반회원</h1>
			</div>
			<div class="contwrap has_fixed_title">
				<?php include_once("./include/member_nav.php");?>
				<table class="list_table">
					<thead>
						<tr class="tr_center">
							<th>Title</th>
							<th>파일명</th>
							<th>Category</th>
							<th>등록일</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if(count($member_abstracts) <= 0) {
							echo "<tr><td class='no_data' colspan='4'>No Data</td></tr>";
						} else {
							foreach($member_abstracts as $ab){
								$ext = strtolower(end(explode(".",$ab["file_path"])));
					?>
						<tr class="tr_center">
							<td><a href="./abstract_application_detail.php?idx=<?=$ab["idx"]?>" class="leftT"><?=$ab["abstract_title"]?></a></td>
							<td>
							<?php
								if($ext == "pdf") {
							?>
								<a href="./pdf_viewer.php?path=<?=$ab["file_path"]?>" target="_blank"><?=$ab["original_name"]?></a>
							<?php
								} else {
							?>
								<a href="<?=$ab["file_path"]?>" download><?=$ab["original_name"]?></a>
							<?php
								}
							?>
							</td>
							<td><?=$ab["abstract_category"]?></td>
							<td><?=$ab["regist_date"]?></td>
						</tr>
					<?php
							}
						}
					?>
					</tbody>
				</table>
				<div class="btn_wrap">
					<button type="button" class="border_btn" onclick="location.href='./member_list.php'">목록</button>
				</div>
			</div>
		</div>
	</section>
<script>
$(document).ready(function(){
	$(".tab_wrap").children("li").eq(1).addClass("active");
});
</script>
<?php include_once('./include/footer.php');?>