<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	$total_count = 0;
	$current_page = $_GET["page"] ? @(int) $_GET["page"] : 0;
	$current_page = ($current_page > 0) ? $current_page : 1;
	$start = 10 * ($current_page-1);

	$sql =	"
			SELECT
				b.idx, b.title_en, b.title_ko, f.path, DATE_FORMAT(b.register_date, '%Y-%m-%d') AS register_date, b.view
			FROM board AS b
			LEFT JOIN(
				SELECT
					idx, CONCAT(path,'/',save_name) AS path
				FROM `file`
			)AS f
			ON b.thumnail = f.idx
			WHERE b.is_deleted = 'N'
			AND b.`type` = 0
			";

	$total_count = count(get_data($sql));

	$sql .= " ORDER BY b.register_date DESC LIMIT {$start}, 10 ";
	$list = get_data($sql);
?>

<section class="container board">
	<h1 class="page_title">뉴스레터</h1>
	<div class="inner">
		<?php
			if(count($list) > 0){
		?>
		<div>
            <ul class="clearfix photo_list">
                <?php
				foreach ($list as $li) {
					$i = 0;
					echo "<li><div class='img_wrap' data-index='" . $i . "'><img src='https://kosso.org" . $li['path'] . "' width='100%' height='100%'></div></li>";
					$slider_inner .= "<li><div class='img_wrap'><img src='" . $url . "' width='100%' height='100%'></div></li>";

					$i++;
				}
				?>
			</ul>
		</div>
		<?php
			} else {
		?>
			<!-- <div class="inner"> -->
				<!-- <img class="coming" src="./img/coming.png" /> -->
				<!-- <div class="not_ready">Will be updated soon</div> -->
				<!-- <img class="coming" src="./img/coming.png"> -->
			<!-- </div> -->
			<div class="table_wrap x_scroll">
				<table class="table_vertical notice_table">
					<colgroup>
						<col class="col_date" />
						<col width="*" />
						<col class="col_date" />
						<col class="col_date" />
					</colgroup>
					<thead>
						<tr>
							<?php
								$table_title_arr = ($language == "ko") ? ["번호", "제목", "작성일", "조회수"] : ["번호", "제목", "작성일", "조회수"];
								foreach($table_title_arr as $th_text){
							?>
							<th><?=$th_text?></th>
							<?php
								}
							?>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="4"> 준비 중입니다. </td>
						</tr>
					</tbody>
				</table>
			</div>
		<?php
			}
		?>

		<div class="pagination">
			<ul class="clearfix">
				<?php 
					$total_page = ($total_count % 10 != 0) ? intval($total_count/10) + 1 : intval($total_count/10);
					
					$pagination_raw = 10;
					$pagination_total_page = ($total_page % $pagination_raw != 0) ? intval($total_page/$pagination_raw) + 1 : intval($total_page/$pagination_raw);
					$pagination_current_page = ($current_page % $pagination_raw == 0) ? intval($current_page/$pagination_raw) - 1 : intval($current_page/$pagination_raw) + 1;
					$pagination_current_page = ($pagination_current_page > 1) ? $pagination_current_page : 1; 

					$url = "?page=";

					// 이전페이지
					if($pagination_current_page > 1){
						echo "<li><a href='./board_newsletter.php".($url.($pagination_raw * ($pagination_current_page - 1)))."'><img src='./img/icons/arrows_left.png'></a></li>";
					}

					$max = $pagination_raw > $total_page ? $total_page : $pagination_raw;
					for($a = 0; $a < $max; $a++){
						$page = ($pagination_raw * ($pagination_current_page - 1)) + 1 + $a;
						$on = ($current_page == $page) ? "on" : "";

						echo "<li class='".$on."'><a href='./board_newsletter.php".($url.$page)."'>".$page."</a></li>";
					}

					// 다음페이지
					if($pagination_total_page > $current_page){
						echo "<li><a href='./board_newsletter.php".($url.($page+1))."'><img src='./img/icons/arrows_right.png'></a></li>";
					}
				?>
			</ul>
		</div>
	</div>

</section>

<?php include_once('./include/footer.php');?>