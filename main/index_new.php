<?php
	// 23.05.08 임시로 오픈 hubdncnym
	include_once('./include/head.php');
	include_once('./include/header.php');

	// main
	$img_col_name = check_device() ? "mo_" : "pc_";
	$img_col_name .= $language."_img";
	$banner_query =	"SELECT
						b.idx,
						CONCAT(fi_img.path, '/', fi_img.save_name) AS fi_img_url
					FROM banner AS b
					LEFT JOIN `file` AS fi_img
						ON fi_img.idx = b.".$img_col_name."
					WHERE b.".$img_col_name." > 0";
	$banner = get_data($banner_query);
	$banner_cnt = count($banner);

	// event
	$info_query =	"SELECT
						ie.title AS event_title,
						ie.period_event_start,
						ie.period_event_end,
						igv.name_".$language." AS venue_name
					FROM info_event AS ie
					,info_general_venue igv";
	$info = sql_fetch($info_query);

	//key date
	$key_date_query =	"SELECT
							`key_date`,
							contents_".$language." AS contents
						FROM key_date
						WHERE `type` = 'poster'
						#AND DATE(`key_date`) >= DATE(NOW())
						AND DATE(`key_date`) <> '0000-00-00'
						ORDER BY `key_date`
						LIMIT 4";
	$key_date = get_data($key_date_query);
	$key_date_cnt = count($key_date);

	//2021_06_23 HUBDNC_KMJ NOTICE 쿼리
	$notice_list_query = "SELECT
							idx,
							title_en,
							title_ko,
							DATE_FORMAT(register_date, '%Y-%m-%d') AS date_ymd
						FROM board
						WHERE `type` = 1
						AND is_deleted = 'N'
						ORDER BY register_date DESC
						LIMIT 3";
	$notice_list = get_data($notice_list_query);

	//$notice_cnt = count($notice_list);
?>

<style>
	.index_sponsor_wrap {display:block;}
</style>

<section class="main_section">
	<!-- 배경이미지
	<div class="bg_wrap">
		<div class="dim"></div>
		<div class="main_bg_slider">
			<div class="video_wrap">
				<video src="https://player.vimeo.com/external/595050190.hd.mp4?s=f5a9471e806bff619dc115c9dfc5db80d5df87fb&profile_id=174" autoplay="autoplay" muted="muted" playsinline id="main_video_bg" loop></video>
			</div>
			<?php
				foreach ($banner as $bn) {
			?>
			<div class="main_img_wrap"><img src="<?=$bn['fi_img_url']?>"></div>
			<?php
				}
			?>
		</div>
	</div>
	-->
	<div class="section_bg">
		<div class="video_wrap">
			<div class="dim"></div>
			<video src="https://player.vimeo.com/progressive_redirect/playback/685374881/rendition/1080p?loc=external&signature=0f96f408d54e4adfe00f0f0a8b8c6a593fa2ecb767763e3709010a574d1a8a3f"
                    autoplay="autoplay" muted="muted" playsinline id="main_2023_video_bg" loop></video>
		</div>
		<div class="container">
			<!-- 상단 타이틀 -->
			<div class="txt_wrap">
				<h5><strong>Now is the Time to Conquer Obesity
					</strong></h5>
				<h1 class="e_title"><?= substr($info['event_title'], 0, 7) ?><span>2023</span></h1>
				<p class="e_fullname">2023 <b class="point_txt f_bold">I</b>nternational <b
						class="point_txt f_bold">C</b>ongress on <b class="point_txt f_bold">O</b>besity and <b
						class="point_txt f_bold">ME</b>tabolic <b class="point_txt f_bold">S</b>yndrome hosted by KSSO</p>
				<p class="e_place">
					<?php
					$date_start = date_create($info['period_event_start']);
					$date_end = date_create($info['period_event_end']);

					$format_start = "M d(D)";
					$format_end = "d(D), Y";

					if (date_format($date_start, 'Y') != date_format($date_end, 'Y')) {
						$format_start = "M d(D), Y";
						$format_end = "M d(D), Y";
					} else if (date_format($date_start, 'F') != date_format($date_end, 'F')) {
						$format_end = "M d(D), Y";
					}

					$date_text = date_format($date_start, $format_start) . "-" . date_format($date_end, $format_end);
					$venue_text = $info['venue_name'];
					?>
					<!-- <?= $date_text ?>&nbsp;/&nbsp;<?= $venue_text ?> -->
					SEP 7<span>(Thu)</span>-9<span>(Sat)</span>, 2023 / CONRAD Seoul Hotel, Korea
				</p>
				<!-- <p class="sub_section_title main_theme"><?= $locale("theme_txt") ?></p> -->
				<!-- <div class="clearfix2">
					<div class="live_btn">
						<p class="live_tit">Registration Information</p>
						<p class="onair_btn w1024"> ON-AIR <span>Technical Support - Tel. +82-2-2039-7802,  +82-2-6959-4868, +82-2-3275-3028</span></p>
						<button type="button" class="sub_section_title main_theme liveenter_btn"
							onClick="javascript:window.location.href='/main/registration_guidelines.php';">Register
							Now</button>
					</div>
				</div> -->
			</div>
		</div>
		<div class="main_btn_wrap">
			<button type="button" class="btn_circle_arrow"></button>
		</div>
	</div>
</section>
<div class="dates_wrap">
	<div class="container">
		<div class="dates_area">
			<ul>
				<li>
					<a href="/main/abstract_submission_guideline.php">
						<h2>Jul. 6(Thu)</h2>
						<!-- <i><img src="/main/img/icons/icon_report.svg" alt=""></i> -->
						<p>Abstract Submission<br/>Deadline</p>
					</a>
				</li>
				<li>
					<a href="/main/abstract_submission_guideline.php">
						<h2>Aug. 7(Mon)</h2>
						<!-- <i><img src="/main/img/icons/icon_letter.svg" alt=""></i> -->
						<p>Notification of<br/>Acceptance</p>
					</a>
				</li>
				<li>
					<a href="/main/registration_guidelines.php">
						<h2>Jun. 2(Fri)</h2>
						<!-- <i><img src="/main/img/icons/icon_calendar.svg" alt=""></i> -->
						<p>Early-bird Registration<br/>Deadline</p>
					</a>
				</li>
				<li>
					<a href="/main/abstract_submission_award.php">
						<!-- <h2>2 Jun</h2> -->
						<h2>Awards &amp;<br/>Grants</h2>
						<i><img src="/main/img/icons/icon_calendar.svg" alt=""></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- Plenary Speakers -->
<div class="speakers_wrap">
	<div class="container">
		<h1 class="speakers_wrap_title">Plenary &amp; Keynote Speakers</h1>
		<div class="speakers_slick">
			<ul class="main_speaker2 slick-slider">
				<li class="index_speaker1">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">TDB</h5>
					<!-- <div class="career">Seoul National University,<br>Republic of Korea</div> -->
				</li>
				<li class="index_speaker2">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">TDB</h5>
					<!-- <div class="career">Seoul National University,<br>Republic of Korea</div> -->
				</li>
				<li class="index_speaker3">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">TDB</h5>
					<!-- <div class="career">Seoul National University,<br>Republic of Korea</div> -->
				</li>
				<li class="index_speaker4">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">TDB</h5>
					<!-- <div class="career">Seoul National University,<br>Republic of Korea</div> -->
				</li>
				<li class="index_speaker5">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">TDB</h5>
					<!-- <div class="career">Seoul National University,<br>Republic of Korea</div> -->
				</li>
				<li class="index_speaker6">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">TDB</h5>
					<!-- <div class="career">Seoul National University,<br>Republic of Korea</div> -->
				</li>
				<!--
				<li class="index_speaker1">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">Sekar Kathiresan</h5>
					<div class="career">Verve therapeutics,<br>USA</div>
				</li>
				<li class="index_speaker2">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">Brian Tomlinson</h5>
					<div class="career">Macau University of Science &<br>Technology, China</div>
				</li>
				<li class="index_speaker3">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">Martin Bennett</h5>
					<div class="career">University of Cambridge,<br>UK</div>
				</li>
				<li class="index_speaker4">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">Sergio Fazio</h5>
					<div class="career">Regeneron Pharmaceuticals,<br>USA</div>
				</li>
				<li class="index_speaker5">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">Hidenori Arai</h5>
					<div class="career">National Center for Geriatrics<br>and Gerontology, Japan</div>
				</li>
				<li class="index_speaker6">
					<div class="profile_circle"><div class="profile_wrap"></div></div>
					<h5 class="title">Maria Teresa Abola</h5>
					<div class="career">University of the Philippines,<br>Philippines</div>
				</li>
				-->
			</ul>
		</div>
	</div>
</div>
<!-- Key dates & News,Notice -->
<section>
	<div class="container">
		<div class="noti_wrap">
			<!-- 2022년 버전에 뉴스레터 없어서 테스트 텍스트로 넣어놓음 -->
			<div class="noti_area">
				<h1 class="noti_wrap_title">
					Newsletter
					<a href="/main/board_newsletter.php" class="moreview_btn">+</a>
				</h1>
				<ul>
					<li><a href="javascript:;"><p>Test Text</p><span>2022.02.18</span></a></li>
					<li><a href="javascript:;"><p>Test Text</p><span>2022.02.18</span></a></li>
					<li><a href="javascript:;"><p>Test Text</p><span>2022.02.18</span></a></li>
				</ul>
			</div>
			<!-- 2022년 버전에 공지사항 없어서 테스트 텍스트로 넣어놓음 -->
			<div class="noti_area">
				<h1 class="noti_wrap_title">
					Notice
					<a href="/main/board_notice.php" class="moreview_btn">+</a>
				</h1>
				<ul>
					<li><a href="javascript:;"><p>Test Text</p><span>2022.02.18</span></a></li>
					<li><a href="javascript:;"><p>Test Text</p><span>2022.02.18</span></a></li>
					<li><a href="javascript:;"><p>Test Text</p><span>2022.02.18</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- fixed_btn : register > 실제 등록 가능기간이기 전까지 주석처리 ()
<button type="button" class="btn_fixed_triangle"><span>Register<br>Now</span></button>-->
<!-- page loading bar 주석-->
<div class="page_loading">
	<video id="vid_auto" preload="auto" muted="muted" volume="0" playsinline autoplay onended="myFunction()"></video>
</div>
<!-- 2023 팝업 -->
<!--
<div class="popup pop_2023" style="display:block;">
	<div class="pop_bg"></div>
	<div class="pop_contents">
		<img src="./img/pop_2023_bg.png" class="bg" alt="">
		<img src="./img/pop_2023_line.png" class="line" alt="">
		<div class="pop_text_box">
			<h1>
				<p>See you on the next</p>
				<p>ICoLA 2023</p>
				<p>Seoul, Korea</p>
			</h1>
			<div class="btns">
				<button>September 14(Thu) - 16(Sat), 2023</button>
			</div>
		</div>
		<div class="close_area clearfix2">
			<div>
				<input type="checkbox" id="today_check" class="checkbox input required">
				<label for="today_check">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="">Close <img src="./img/main_pop_close.png" alt=""></a>
		</div>	
	</div>
</div>
-->
<script>
	$('document').ready(function(){
		$('.main_speaker2').slick({
			dots: false,
			navigation: true,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 6000,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 850,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 0,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});
</script>