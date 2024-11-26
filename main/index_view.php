<?php
// main
$img_col_name = check_device() ? "mo_" : "pc_";
$img_col_name .= $language . "_img";
$banner_query =    "SELECT
						b.idx,
						CONCAT(fi_img.path, '/', fi_img.save_name) AS fi_img_url
					FROM banner AS b
					LEFT JOIN `file` AS fi_img
						ON fi_img.idx = b." . $img_col_name . "
					WHERE b." . $img_col_name . " > 0";
$banner = get_data($banner_query);
$banner_cnt = count($banner);

// event
$info_query =    "SELECT
						ie.title AS event_title,
						ie.period_event_start,
						ie.period_event_end,
						igv.name_" . $language . " AS venue_name
					FROM info_event AS ie
					,info_general_venue igv";
$info = sql_fetch($info_query);

//key date
$key_date_query =    "SELECT
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
						LIMIT 5";
$notice_list = get_data($notice_list_query) ?? [];
$total_notice = count($notice_list);

//230519 HUBDNC_NYM Newsletter 쿼리
$newsletter_list_query = "	SELECT
									idx,
									title_en,
									title_ko,
									DATE_FORMAT(register_date, '%Y-%m-%d') AS date_ymd
								FROM board
								WHERE `type` = 0
								AND is_deleted = 'N'
								ORDER BY register_date DESC
								LIMIT 5";
$newsletter_list = get_data($newsletter_list_query) ?? [];
$total_newsletter = count($newsletter_list) ?? 0;
?>

<style>
/* body {
    background-color: rgba(234, 234, 234, 0.45);
} */

.index_sponsor_wrap {
    display: block;
}
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
			<div class="main_img_wrap"><img src="<?= $bn['fi_img_url'] ?>"></div>
			<?php
            }
            ?>
		</div>
	</div>
	-->
    <div class="section_bg">

        <!-- <div class="video_wrap"> -->
        <!-- <div class="dim"></div> -->
        <!-- <video src="https://player.vimeo.com/progressive_redirect/playback/685374881/rendition/1080p?loc=external&signature=0f96f408d54e4adfe00f0f0a8b8c6a593fa2ecb767763e3709010a574d1a8a3f" autoplay="autoplay" muted="muted" playsinline id="main_2023_video_bg" loop></video> -->
        <!-- </div> -->
        <div class="container">
            <img src="/main/img/main_txt.png" class="pc_only img_vsl_text" alt="">
            <div class="mb_only img_vsl_text" style="">
                <img src="/main/img/2024_mb_text.png" alt="">
                <!-- <p>Sep. 7(Thu) ~ Sep. 9(Sat)</p>
                <p>CONRAD Seoul Hotel, Korea</p> -->
            </div>
            <!-- 상단 타이틀 -->
            <div class="txt_wrap">
                <!-- <h5><strong>Now is the Time to Conquer Obesity -->
                <!-- 	</strong></h5> -->
                <!-- <h1 class="e_title"><?= substr($info['event_title'], 0, 7) ?><span>2023</span></h1> -->
                <!-- <p class="e_fullname">2023 <b class="point_txt f_bold">I</b>nternational <b -->
                <!-- 		class="point_txt f_bold">C</b>ongress on <b class="point_txt f_bold">O</b>besity and <b -->
                <!-- 		class="point_txt f_bold">ME</b>tabolic <b class="point_txt f_bold">S</b>yndrome hosted by KSSO</p> -->
                <!-- <p class="e_place"> -->
                <?php
                /*$date_start = date_create($info['period_event_start']);
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
					$venue_text = $info['venue_name'];*/
                ?>
                <!-- <?= $date_text ?>&nbsp;/&nbsp;<?= $venue_text ?> -->
                <!-- SEP 7<span>(Thu)</span>-9<span>(Sat)</span>, 2023 / CONRAD Seoul Hotel, Korea -->
                <!-- </p> -->
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
        <div class="dates_area">
            <ul>
                <li>
                    <a href="/main/abstract_submission.php" class="online_submission_alert">
                        <!-- <img src="./img/2024_dates_area_1.png"/> -->
                        <h2>2024년 2월 12일<span>(월)</span></h2>
                        <p>초록 접수<br />마감</p>
                        <!-- <h2><span>2023년 12월 11일(월)</span></h2> --> 
                        <!-- <i><img src="/main/img/icons/icon_report.svg" alt=""></i> -->
                        <!-- <p>등록/초록 접수<br />오픈</p> -->
                    </a>
                </li>
                <li>
                    <!-- [240224] sujeong / 학회팀 요청 close -->
                    <!-- <a href="/main/registration.php"> -->
                    <a href="/main/registration.php" class="online_registration_alert">
                        <!-- <img src="./img/2024_dates_area_2.png"/> -->
                        <!-- [240119]sujeong / 학회팀 요청 날짜-->
                        <h2><span>2024년 2월 22일(목)</span></h2>
                        <!-- <i><img src="/main/img/icons/icon_letter.svg" alt=""></i> -->
                        <p>사전 등록 접수 <br />마감</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="/main/registration.php">
                        <h2><span>2024년 2월 22일(목)</span></h2>
                      <i><img src="/main/img/icons/icon_calendar.svg" alt=""></i> 
                        
                    </a>
                </li> -->
                <!-- <li>
                    <a href="">
                        <h2>TBD</h2>
                        <h2>TBD</h2>
                        <i><img src="/main/img/img_trophy.svg" alt=""></i>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>

</section>

<!-- Plenary Speakers -->
<!-- [240104] sujeong / 학회팀 요청 공개 -->
 <div class="speakers_wrap">
    <div class="container">
        <h3 class="title" style="color:#fff">주요 세션 소개</h3>
        <div class="main_speaker_container">
            <div class="main_speaker_wrap">
                <div class="main_speaker_header speaker_1">Plenary Lecture</div>
                <div>
                    <img src="/main/img/2024_img_speakers01.png"/>
                </div>
                <div class="main_speaker_box speaker_1_box">
                    <h3><span class="bold">이관우</span>(아주의대)</h3>
                </div>
                <div class="main_speaker_box speaker_1_box">
                    <h6>3월 9일(토) 12:40 - 13:20<br/><span class="bold">Room 1</span></h6>
                </div>
                <div class="main_speaker_box speaker_1_box">
                    <p>Obesity and<br/>Insulin Resistance</p>
                </div>
            </div>
            <div class="main_speaker_wrap">
                <div class="main_speaker_header">Keynote Lecture 1</div>
                <div>
                    <img src="/main/img/2024_img_speakers02.png"/>
                </div>
                <div class="main_speaker_box">
                    <h3><span class="bold">김경곤</span>(가천의대)</h3>
                </div>
                <div class="main_speaker_box">
                    <h6>3월 9일(토) 15:40 - 16:10<br/><span class="bold">Room 1</span></h6>
                </div>
                <div class="main_speaker_box">
                    <p>Serotonin and<br/>Metabolism</p>
                </div>
            </div>
            <div class="main_speaker_wrap">
                <div class="main_speaker_header">Keynote Lecture 2</div>
                <div>
                    <img src="/main/img/2024_img_speakers03_v_2.png"/>
                </div>
                <div class="main_speaker_box">
                    <h3><span class="bold">김은미</span>(강북삼성병원)</h3>
                </div>
                <div class="main_speaker_box">
                    <h6>3월 9일(토) 15:40 - 16:10<br/><span class="bold">Room 2</span></h6>
                </div>
                <div class="main_speaker_box">
                    <p>The Keys to Successful<br/>Nutrition Therapy for<br/>Persons with Obesity or<br/>Overweight</p>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- Key dates & News,Notice -->

<section>
    <div class="container">
        <div class="noti_wrap"> 
<!-- 2022년 버전에 뉴스레터 없어서 테스트 텍스트로 넣어놓음 -->
<div class="noti_area">
                <h3 class="title">뉴스레터<a href="/main/board_newsletter.php" class="moreview_btn">+</a></h3>
                <ul>
                    <?php
                    if ($total_newsletter > 0) {
                        foreach ($newsletter_list as $newsletter) {
                    ?>
                    <li><a href="/main/board_newsletter_detail.php?no=<?= $newsletter["idx"] ?>">
                            <p><?= $newsletter["title_en"] ?></p><span><?= $newsletter["date_ymd"] ?? "-" ?></span>
                        </a></li>
                    <?php
                        }
                    } else {
                        ?>
                    <li>
                        <div class='no_data'>준비 중입니다.</div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div> 
<!-- 2022년 버전에 공지사항 없어서 테스트 텍스트로 넣어놓음 -->
 <div class="noti_area">
                <h3 class="title">공지사항<a href="/main/board_notice.php" class="moreview_btn">+</a></h3>
                <ul>
                    <?php if (count($notice_list) > 0) { ?>
                    <?php
                        for ($i = 0; $i < count($notice_list); $i++) {
                            $notice = $notice_list[$i];
                        ?>
                    <li><a href="/main/board_notice_detail.php?no=<?= $notice["idx"] ?>&i=<?= $total_notice - $i ?>">
                            <p><?= $notice["title_en"] ?? "" ?></p><span><?= $notice["date_ymd"] ?? "" ?></span>
                        </a></li>
                    <?php } ?>
                    <?php } else { ?>
                    <li>
                        <div class='no_data'>준비 중입니다.</div>
                    </li>
                    <?php } ?>
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
<!---->
<div class="popup pop_2023" style="display:none;">
	<div class="pop_bg"></div>
	<div class="pop_contents">
		<img src="/main/img/2024_ksso_pop_240304.png" class="bg" alt="">
		<div class="close_area">
			<div>
				<input type="checkbox" id="today_check" class="checkbox input required">
				<label for="today_check">오늘 다시 열지 않음</label>
			</div>
			<a href="javascript:;" class="pop_close">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
	</div>
</div>


<!-- ICOMES 2023 Main 팝업 
<div class="popup last_breaking_pop">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<a href="/main/abstract_submission.php"><img src="/main/img/Last_Breaking_popup_230731.png" alt=""></a>
        <div class="pop_bottoms">
			<button type="button" class="pop_close bold">Close</button>
        </div>
    </div>
</div>
-->

<!-- 2023/08/16 팝업 -->
<!-- <div class="popup notification_pop" style="display:block;">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<div class="top">Notification of Acceptance</div>
		<div class="inner">
			<ul>
				<li>
					<button type="button" onClick="javascript:window.open('/main/download/Oral Presentation_0824.pdf')">Oral Presentation List<img src="/main/img/icons/download_w2.svg" /></button>			
				</li>
				<li>
					<button type="button" onClick="javascript:window.open('/main/download/Guided Poster Presentation_0824.pdf')">Guided Poster Presentation List<img src="/main/img/icons/download_w2.svg" /></button>			
				</li>
				<li>
					<button type="button" onClick="javascript:window.open('/main/download/Poster Exhibition_0824.pdf')">Poster Exhibition List<img src="/main/img/icons/download_w2.svg" /></button>
				</li>
			</ul>
		</div>
		<div class="close_area">
			<div>
				<input type="checkbox" id="today_check" name="hidden" class="checkbox input required">
				<label for="today_check">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="pop_close" onclick="closeWin()">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
    </div>
</div> -->

<!-- 230831 팝업 1/2 -->
<!-- <div class="popup main_pop application_pop" style="display:block;">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<img src="/main/img/230831_pop01.png" alt="">
		<div class="close_area">
			<div>
				<input type="checkbox" id="today_check2" name="hidden" class="checkbox input required">
				<label for="today_check2">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="pop_close" onclick="closeWin()">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
    </div>
</div>

230831 팝업 2/2
<div class="popup main_pop symposium_pop" style="display:block;">
    <div class="pop_bg"></div>
    <div class="pop_contents">
		<img src="/main/img/230831_pop02.png" alt="">
		<a href="https://forms.gle/dvj5zCac9edUhBjR8" target="_blank">
            <img src="/main/img/230831_pop02_btn.png" alt="" class="main_pop_btn">        
        </a>
		<div class="close_area">
			<div>
				<input type="checkbox" id="today_check1" name="hidden" class="checkbox input required">
				<label for="today_check1">Do not open this window for 24 hours.</label>
			</div>
			<a href="javascript:;" class="pop_close" onclick="closeWin()">Close <img src="/main/img/main_pop_close.png" alt=""></a>
		</div>	
    </div>
</div> -->


<script>
    // 쿠키 가져오기
    var getCookie = function (cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
        }
        return "";
    }

    // 24시간 기준 쿠키 설정하기  
    var setCookie = function (cname, cvalue, exdays) {
        var todayDate = new Date();
        todayDate.setTime(todayDate.getTime() + (exdays*24*60*60*1000));    
        var expires = "expires=" + todayDate.toUTCString(); // UTC기준의 시간에 exdays인자로 받은 값에 의해서 cookie가 설정 됩니다.
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    var couponClose = function(){
        if($("#today_check").is(":checked") == true){
            setCookie("close","Y",1);   //기간( ex. 1은 하루, 7은 일주일)
        }
        $(".pop_2023").hide();
    }
    
    $(document).ready(function(){
        var cookiedata = document.cookie;
        // if(cookiedata.indexOf("close=Y")<0){
        //     $(".pop_2023").show();
        // }else{
        //     $(".pop_2023").hide();
        // }
        // $(".pop_2023 .pop_close").click(function(){
        //     couponClose();
        // });
    });
</script>
