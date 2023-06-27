<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- App - Invited Speakers 페이지 -->
<section class="container app_version app_invited_speakers">
	<div class="app_title_box">
		<h2 class="app_title">Invited Speakers</h2>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="app_search_area">
				<p class="f_bold">Please enter keywords</span></p>
				<div class="search_input">
					<input type="text" placeholder="Search">
					<button type="button" class="search_icon"></button>
				</div>
			</div>
			<div class="speakers_area">
				<!-- My Favorite -->			
				<p class="category">My Favorite</p>
				<ul class="speakers_list">
					<!-- speaker08 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_speakers08.jpg" alt="">
								<p>Jae Myoung Suh</p>
							</div>
						</a>
						<button type="button" class="favorite_btn on"></button>
					</li>
				</ul>
				<!-- J -->			
				<p class="category">J</p>
				<ul class="speakers_list">
					<!-- speaker08 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_speakers08.jpg" alt="">
								<p>Jae Myoung Suh</p>
							</div>
						</a>
						<button type="button" class="favorite_btn on"></button>
					</li>
					<!-- speaker04 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_prof_jae_Heon_Kang.png" alt="">
								<p>Jae-Heon Kang</p>
							</div>
						</a>
						<button type="button" class="favorite_btn"></button>
					</li>
					<!-- speaker07 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_speakers07.jpg" alt="">
								<p>John Wilding</p>
							</div>
						</a>
						<button type="button" class="favorite_btn"></button>
					</li>
				</ul>
				<!-- M -->			
				<p class="category">M</p>
				<ul class="speakers_list">
					<!-- speaker02 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_prof_Matthias_Bluher.png" alt="">
								<p>Matthias Blüher</p>
							</div>
						</a>
						<button type="button" class="favorite_btn"></button>
					</li>
				</ul>
				<!-- R -->			
				<p class="category">R</p>
				<ul class="speakers_list">
					<!-- speaker01 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_prof_Robert_R_Wolfe.jpg" alt="">
								<p>Robert R. Wolfe</p>
							</div>
						</a>
						<button type="button" class="favorite_btn"></button>
					</li>
				</ul>
				<!-- T -->			
				<p class="category">T</p>
				<ul class="speakers_list">
					<!-- speaker05 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_prof_Thiruma_V_Arumugam.jpg" alt="">
								<p>Thiruma V. Arumugam</p>
							</div>
						</a>
						<button type="button" class="favorite_btn"></button>
					</li>
				</ul>
				<!-- Z -->			
				<p class="category">Z</p>
				<ul class="speakers_list">
					<!-- speaker03 -->
					<li>
						<a href="./app_invited_speakers_detail.php">
							<div class="speakers_info">
								<img src="./img/img_prof_Zachary A_Knight.png" alt="">
								<p>Zachary Knight</p>
							</div>
						</a>
						<button type="button" class="favorite_btn"></button>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$(".favorite_btn").click(function(){
			$(this).toggleClass("on");
		})
	});
</script>

<?php include_once('./include/app_footer.php');?>