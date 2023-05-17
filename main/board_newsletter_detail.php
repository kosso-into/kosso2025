<?php
	include_once('./include/head.php');
	include_once('./include/header.php');
?>

<section class="container board_detail">
	<!-- <div class="sub_banner">
		<h1>FAQ & Notice</h1>
	</div> -->
	<!-- <div class="tab_green">
		<ul class="clearfix">
			<li><a href="./board_faq.php">FAQ</a></li>
			<li class="on"><a href="./board_notice.php">Notice</a></li>
		</ul>
	</div> -->
	<h1 class="page_title">Newsletter</h1>
	<div class="inner">
		<!-- 내용 -->
		<table>
			<colgroup>
				<col width="100px" class="num_td">
				<col>
				<col width="120px" class="date_td pc_only">
			</colgroup>
			<thead>
				<tr>
					<th>16</th>
					<td class="board_title">
						<h5>
							[ICoLA 2022 with APSAVD]  ICoLA AWARDS ANNOUNCEMENT<p class="mb_only">2022-09-26</p>
						</h5>
					</td>
					<td class="pc_only">2022-09-26</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="3">
						<p>
							<img src="./img/sample_img.png" title="test.png">
							<br />
							test
						</p>
					</td>
				</tr>
			</tbody>
		</table>
		<!-- 첨부파일 -->
		<table>
			<colgroup>
				<col width="100px" class="num_td">
				<col>
				<col width="120px" class="date_td">
			</colgroup>
			<tbody>
				<tr>
					<th>첨부파일1</th>
					<td class="board_title downloads">
						<a href="./download/(Final) ICoLA 2022_Program Book.pdf" download="">(Final) ICoLA 2022_Program Book.pdf (다운 160회)</a>
					</td>
					<td class="pc_only"></td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<?php
	include_once('./include/footer.php');
?>