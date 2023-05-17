<?php
// main
$img_col_name = check_device() ? "mo_" : "pc_";
$img_col_name .= $language . "_img";
$banner_query =	"SELECT
						b.idx,
						CONCAT(fi_img.path, '/', fi_img.save_name) AS fi_img_url
					FROM banner AS b
					LEFT JOIN `file` AS fi_img
						ON fi_img.idx = b." . $img_col_name . "
					WHERE b." . $img_col_name . " > 0";
$banner = get_data($banner_query);
$banner_cnt = count($banner);

// event
$info_query =	"SELECT
						ie.title AS event_title,
						ie.period_event_start,
						ie.period_event_end,
						igv.name_" . $language . " AS venue_name
					FROM info_event AS ie
					,info_general_venue igv";
$info = sql_fetch($info_query);

//key date
$key_date_query =	"SELECT
							`key_date`,
							contents_" . $language . " AS contents
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
.index_sponsor_wrap {
    display: block;
}

.footer_wrap {
    display: none;
}

.fixed_btn_wrap {
    bottom: 32px !important;
}
</style>

<section class="main_section">
    <div class="section_bg">
        <div class="video_wrap" style="position:fixed; top:0; left:0; width:100%; height:100%;">
            <div class="dim"></div>
            <!-- <img src="https://velog.velcdn.com/images/crystal025/post/d903e8b2-ff90-4f18-aa11-5003c7b08739/image.png" alt="background" class="index_back" /> -->
            <!-- <video src="https://player.vimeo.com/progressive_redirect/playback/685374881/rendition/1080p?loc=external&signature=0f96f408d54e4adfe00f0f0a8b8c6a593fa2ecb767763e3709010a574d1a8a3f" autoplay="autoplay" muted="muted" playsinline id="main_2023_video_bg" loop></video> -->
        </div>
        <div class="container">
            <!-- 상단 타이틀 -->
            <div class="txt_wrap">
                <h5><strong>Now is the Time to Conquer Obesity
                    </strong></h5>
                <h1 class="e_title"><?= substr($info['event_title'], 0, 7) ?><span>2023</span></h1>
                <p class="e_fullname">2023 <b class="point_txt f_bold">I</b>nternational <b
                        class="point_txt f_bold">C</b>ongress on <b class="point_txt f_bold">O</b>besity and <b
                        class="point_txt f_bold">ME</b>tabolic <b class="point_txt f_bold">S</b>yndrome hosted by KSSO
                </p>
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
                    SEP 7<span>(Thu)</span>-9<span>(Sat)</span>, 2023 / CONRAD Seoul Hotel, Korea
                </p>
                <div class="board_area box2">
                    <!--
					<div class="clearfix2">
						<div>
							<div class="top clearfix2">
								<h6>KEY DATES</h6>
								<!--<a href="">More +</a>
							</div>
							<ul class="list">
														<li class="clearfix2"><span class="ellipsis"></span> <strong> ~ Jul 21(Thu)</strong></li>
														<li class="clearfix2"><span class="ellipsis"></span> <strong> ~ Jul 29(Fri)</strong></li>
														<li class="clearfix2"><span class="ellipsis"></span> <strong> ~ May 19(Thu)</strong></li>
														<li class="clearfix2"><span class="ellipsis"></span> <strong> ~ Aug 11(Thu)</strong></li>
													</ul>
						</div>
						<div>
							<div class="top clearfix2">
								<h6>NOTICE</h6>
								<a href="./board_notice.php">More +</a>
							</div>
							<ul class="list">
														<li><a href="./board_notice_detail.php?no=1&p=1" class="ellipsis">test</a></li>
														<!--<li><a href="" class="ellipsis">뉴스레터 19차 (온라인 참석자)</a></li>
							</ul>
						</div>
					</div>
					-->

                    <div>
                        <h1 class="board_title slider-for slick-initialized slick-slider">Key Dates<div
                                class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 0px;"></div>
                            </div>
                        </h1>
                        <ul class="dates_list">
                            <li>
                                <span class="yellow_txt">July 6(Thu)</span>
                                <p><a href="javascript:;">Abstract Submission Deadline</a></p>
                            </li>
                            <li>
                                <span class="yellow_txt">August 8(Thu)</span>
                                <p><a href="javascript:;">Notification of Acceptance</a></p>
                            </li>
                            <li>
                                <span class="yellow_txt">June 2(Fri)</span>
                                <p><a href="javascript:;">Early-bird Registration Deadline</a></p>
                            </li>
                            <li>
                                <span class="yellow_txt">August 10(Thu)</span>
                                <p><a href="javascript:;">Pre-registration Deadline</a></p>
                            </li>
                        </ul>
                        <ul class="main_page_btn half_ul">
                            <li>
                                <button type="button" class="board_btn"
                                    onclick="javascript:window.location.href='./abstract_submission_guideline.php';">Call
                                    for Abstracts</button>
                            </li>
                            <li>
                                <button type="button" class="board_btn"
                                    onclick="javascript:window.location.href='./registration_guidelines.php';">Go to
                                    Registration</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div>
						<h1 class="board_title slider-for slick-initialized slick-slider">Key Dates<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 0px;"></div></div></h1>
						<ul class="dates_list">
							<li>
								<span class="yellow_txt">July 6(Thu)</span>
								<p><a href="javascript:;">Abstract Submission Deadline</a></p>
							</li>	
							<li>
								<span class="yellow_txt">August 8(Tue)</span>
								<p><a href="javascript:;">Notification of Acceptance</a></p>
							</li>	
							<li>
								<span class="yellow_txt">June 2(Fri)</span>
								<p><a href="javascript:;">Early-bird Registration Deadline</a></p>
							</li>	
							<li>
								<span class="yellow_txt">August 10(Thu)</span>
								<p><a href="javascript:;">Pre-registration Deadline</a></p>
							</li>	
						</ul>
						<ul class="main_page_btn half_ul">
							<li>
								<button type="button" class="board_btn" onclick="javascript:window.location.href='./abstract_submission_guideline.php';">Call for Abstracts</button>
							</li>
							<li>
								<button type="button" class="board_btn" onclick="javascript:window.location.href='./registration_guidelines.php';">Go to Registration</button>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->

</section>
<div class="fixed_btn_wrap">
    <ul class="toolbar_wrap">
        <li><button type="button" onclick="location.href='/main/board_notice.php'"><i><img
                        src="/main/img/icons/tool_faq.svg" alt=""></i>Notice</button></li>
        <li><button type="button" onclick="location.href='/main/registration.php'"><i><img
                        src="/main/img/icons/tool_regist.svg" alt=""></i>Registration</button></li>
        <li><button type="button" onclick="location.href='/main/abstract_submission.php'"><i><img
                        src="/main/img/icons/tool_abstract.svg" alt=""></i>Abstract</button></li>
        <li><button type="button" onclick="alert('Need to login.')"><i><img src="/main/img/icons/tool_mypage.svg"
                        alt=""></i>My page</button></li>

    </ul>
    <button type="button" class="btn_top" style="display: inline-block;"><img src="/main/img/icons/icon_top_btn.svg"
            alt=""></button>
</div>
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
$('document').ready(function() {
    $('.main_speaker2').slick({
        dots: false,
        navigation: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        responsive: [{
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

$(document).ready(function() {
    $(window).resize(function() {
        var content_height = $(".main_section .container").outerHeight();
        $(".video_wrap").css("min-height", content_height - 130);
    });
    $(window).trigger("resize");
});
</script>