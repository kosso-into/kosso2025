<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCAJY : App - Notice 페이지 -->
<section class="container app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			NOTICE
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="app_contents_wrap type3">
				<ul class="app_notice_ul">
					<!-- 고정 게시글인 li에 .fin 클래스 추가 -->
					<li class="fin">
						<a href="javascript:;">
							ICOMES 2023 Welcome Cocktail Party begins soon! 
						</a>
					</li>
					<li class="fin">
						<a href="javascript:;">
							Don't forget to join the Rhythm Pharmaceuticals Satellite Symposium. It takes place at 13:15 / Liffey 1 Hall / 1st floor
						</a>
					</li>
					<li>
						<a href="javascript:;">
							Dear ECO2023 Delegate, we thank you very much for your contributions to ECO2023, your certificate of attendance will be sent to you by e-mail after the Congress. Looking forward to welcome you at ECO24 in Venice!
						</a>
					</li>
					<li>
						<a href="javascript:;">
							Don't forget to join the Rhythm Pharmaceuticals Satellite Symposium. It takes place at 13:15 / Liffey 1 Hall / 1st floor
						</a>
					</li>
					<li>
						<a href="javascript:;">
							Don't miss the Welcome Reception taking place in the Exhibition area at 19:00. Enjoy!
						</a>
					</li>
					<li>
						<a href="javascript:;">
							Don't forget to join the ECO2023 Opening Ceremony. It takes place at 18:30 / Auditorium / 3rd floor
						</a>
					</li>
					<li>
						<a href="javascript:;">
							Don't forget to join the Boehringer Ingelheim Satellite Symposium. It takes place at 16:15 / Liffey 1 Hall / 1st floor
						</a>
					</li>
					<li>
						<a href="javascript:;">
							Don't forget to join the Currax Pharma Satellite Symposium. It takes place at 16:15 / Liffey A Hall / 1st floor
						</a>
					</li>
					<li>
						<a href="javascript:;">
							Only 2 days left until the ECO2023.
						</a>
					</li>
				</ul>
			</div> 
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$(".app_notice_ul > li").click(function(){
			window.location.href="./app_notice_detail.php";
		});
	});
</script>

<?php include_once('./include/app_footer.php');?>