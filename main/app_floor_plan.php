<?php
	include_once('./include/head.php');
	include_once('./include/app_header.php');
?>

<section class="container app_floor_plan app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			Floor Plan
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="container_inner inner">
		<div class="contents_box">
		<!--
			<div class="floor_area">
				<img src="./img/img_floor_test.jpg" alt="">
				<div class="a_wrap">
					<a href="javascript:;"></a>
					<a href="javascript:;"></a>
					<a href="javascript:;"></a>
				</div>
			</div>
		-->
			<div class="floor_area">
				<img src="./img/img_floor_3.png" alt="">
				<div class="a_wrap">
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>3F 1</li>
						<li>3F 1</li>
						<li>3F 1</li>
						<li>3F 1</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>3F 2</li>
						<li>3F 2</li>
						<li>3F 2</li>
						<li>3F 2</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>3F 3</li>
						<li>3F 3</li>
						<li>3F 3</li>
						<li>3F 3</li>
					</ul>
				</div>
				<div class="a_wrap right_bottom">
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>3F 4</li>
						<li>3F 4</li>
						<li>3F 4</li>
						<li>3F 4</li>
					</ul>
				</div>
			</div>
			<div class="floor_area">
				<img src="./img/img_floor_5.png" alt="">
				<div class="a_wrap floor_5">
					<div class="inner_a_wrap">
						<a href="javascript:;"></a>
						<ul class="pop_text">
							<li>5F 1</li>
							<li>5F 1</li>
							<li>5F 1</li>
							<li>5F 1</li>
						</ul>
						<a href="javascript:;"></a>
						<ul class="pop_text">
							<li>5F 2</li>
							<li>5F 2</li>
							<li>5F 2</li>
							<li>5F 2</li>
						</ul>
					</div>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>5F 3</li>
						<li>5F 3</li>
						<li>5F 3</li>
						<li>5F 3</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>5F 4</li>
						<li>5F 4</li>
						<li>5F 4</li>
						<li>5F 4</li>
					</ul>
				</div>
			</div>
			<div class="floor_area">
				<img src="./img/img_floor_6.png" alt="">
				<div class="a_wrap floor_6_1">
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 1</li>
						<li>6F 1</li>
						<li>6F 1</li>
						<li>6F 1</li>
					</ul>
				</div>
				<div class="a_wrap floor_6_2">
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 2</li>
						<li>6F 2</li>
						<li>6F 2</li>
						<li>6F 2</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 3</li>
						<li>6F 3</li>
						<li>6F 3</li>
						<li>6F 3</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 4</li>
						<li>6F 4</li>
						<li>6F 4</li>
						<li>6F 4</li>
					</ul>
				</div>
				<div class="a_wrap floor_6_3">
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 5</li>
						<li>6F 5</li>
						<li>6F 5</li>
						<li>6F 5</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 6</li>
						<li>6F 6</li>
						<li>6F 6</li>
						<li>6F 6</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 7</li>
						<li>6F 7</li>
						<li>6F 7</li>
						<li>6F 7</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 8</li>
						<li>6F 8</li>
						<li>6F 8</li>
						<li>6F 8</li>
					</ul>
					<a href="javascript:;"></a>
					<ul class="pop_text">
						<li>6F 9</li>
						<li>6F 9</li>
						<li>6F 9</li>
						<li>6F 9</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		// var div_height = $(".a_wrap > a").outerHeight();
		$(window).resize(function(){
			$(".a_wrap > a").each(function(){
				var div_height = $(this).outerHeight();
				$(this).siblings("div").outerHeight(div_height);
			});
		});
		$(window).trigger("resize");
		
		$(".a_wrap a").click(function(){
			$(".floor_location_3f_room1").addClass("on");
			var pop_text = $(this).next(".pop_text").clone();
			$(".floor_location_3f_room1 .pop_cont > *").remove();
			$(".floor_location_3f_room1 .pop_cont").append(pop_text);
		});
	});
</script>

<?php
	include_once('./include/popup_app.php');
	include_once('./include/app_footer.php');
?>