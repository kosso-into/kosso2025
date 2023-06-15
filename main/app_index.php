<?php
	include_once('./include/head.php');
	include_once('./include/app_header.php');
?>

<style>
	html {background:url("./img/img_app_vsl2.jpg") no-repeat center top -30px /cover;}
	html, body {min-height:100%;}
	.rolling_wrap {display:block;}
</style>

<!-- HUBDNCLHJ : app loading 페이지 -->
<section class="container app_version main">
	<div class="app_vsl">
		<img src="./img/img_app_vsl_text.svg" class="text" alt="">
	</div>
	<div class="app_main_inner">
		<ul class="app_index_menu">
			<li>
				<a href="">
					<img src="./img/icons/app_menu01.svg" alt="">
					<span>ICOMES 2023</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="./img/icons/app_menu02.svg" alt="">
					<span>PROGRAM</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="./img/icons/app_menu03.svg" alt="">
					<span>ABSTRACT</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="./img/icons/app_menu04.svg" alt="">
					<span>STAMP TOUR</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="./img/icons/app_menu05.svg" alt="">
					<span>FLOOR PLAN</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="./img/icons/app_menu06.svg" alt="">
					<span>SPONSORSHIP</span>
				</a>
			</li>
		</ul>
	</div>
</section>

<script>
	$(document).ready(function(){
		$(".app_header").addClass("simple");
	});
</script>

<?php
	include_once('./include/app_footer.php');
?>