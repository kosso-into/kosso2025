<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCAJY : App - STAMP TOUR > My Stamp 페이지 -->
<section class="container app_version app_my_stamp">
	<div class="app_title_box">
		<h2 class="app_title">STAMP TOUR</h2>
		<ul class="app_menu_tab langth_3">
			<li><a href="./app_stamp_guidelines.php">Stamp Tour Guidelines</a></li>
			<li class="on"><a href="./app_my_stamp.php">My Stamp</a></li>
			<li><a href="./app_tour_map.php">Tour Map</a></li>
		</ul>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="stamp_count">
				<div class="stamp_collect">
					<p class="f_bold">Count of stamps collected: <span class="f_inherit red_txt">3</span></p>
					<button type="button" class="refresh_btn"><img src="./img/icons/icon_refresh.png" alt="새로고침"></button>
				</div>
			</div>
			<div class="sponsor_grade">
				<p class="grade_title purple_bg">Poster Zone</p>
				<ul class="grade_wrap length_1">
					<li>
						<a href="javascript:;" class="poster_zone">POSTER ZONE</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
				</ul>
				<p class="grade_title pink_bg">Platinum</p>
				<ul class="grade_wrap">
					<li>
						<a href="javascript:;" class="kyowa_kirin">KYOWA KIRIN</a>
						<div class="location on">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li class="complete_stamp">
						<a href="javascript:;" class="sanofi">sanofi</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li>
						<a href="javascript:;" class="janssen">Janssen</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li>
						<a href="javascript:;" class="astellas">astellas</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li>
						<a href="javascript:;" class="handok">HANDOK</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li>
						<a href="javascript:;" class="novartis">NOVARTIS</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li>
						<a href="javascript:;" class="msd">MSD</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li>
						<a href="javascript:;" class="bristol_myers_squibb">Bristol Myers Squibb</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
				</ul> 
				<p class="grade_title gold_bg">Gold</p>
				<ul class="grade_wrap">
					<li>
						<a href="javascript:;" class="pharmaceutical">Pharmaceutical</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
					<li>
						<a href="javascript:;" class="gc_biopharma">GC Biopharma</a>
						<div class="location">Location: Lobby, 3F<br>Booth No. 13 ~ 15</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="qr_code_fixed">
		<a href="javascript:;">	
			<p class="qr_code_fixed_txt">Please scan the <span>QR CODE</span> of each loacation</p>
			<div class="qr_code_fixed_wrap">SCANNER</div>
		</a>	
	</div>
</section>

<!-- Stamp Tour > My Stamp 최종 완료 팝업 -->
<div class="pop_wrap stamp_complete_pop on">
	<div class="pop_dim"></div>	
	<div class="pop_cont transparent">
		<p class="white_t center_t">Thank you for your participation!</p>
	</div>
</div>

<?php include_once('./include/app_footer.php');?>