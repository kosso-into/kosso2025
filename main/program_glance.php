<?php
include_once('./include/head.php');
// HUBDNCHYJ : app 일 경우 전용 헤더 app_header 사용필요 
$session_user = $_SESSION['USER'] ?? NULL;
$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

if (!empty($session_user) && $session_app_type == 'Y') {
    include_once('./include/app_header.php');
} else {
    include_once('./include/header.php');
}

$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? 'app_version' : '';
?>

<style>
section.app_version .inner {
    padding-top: 0 !important;
}
</style>

<!-- HUBDNCHYJ : App 일 경우 padding/margin을 조정하는 app_version 클래스가 container에 들어가야 함 -->
<section class="container program_glance <?= $add_section_class; ?>">
    <!-- HUBDNCHYJ : App 일 경우 타이틀 영역 입니다. -->
    <?php
    if (!empty($session_app_type) && $session_app_type == 'Y') {
        // mobile일때
    ?>
    <div class="app_title_box">
        <h2 class="app_title">Program<button type="button" class="app_title_prev"
                onclick="javascript:window.location.href='./app_index.php';"><img
                    src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
        <ul class="app_menu_tab langth_2">
            <li class="on"><a href="./program_glance.php">Program at a Glance</a></li>
            <li><a href="./app_program_detail.php">Scientific Program</a></li>
        </ul>
    </div>
    <?php
    } else {
        // pc일때
    ?>
    <h1 class="page_title">Program at a Glance</h1>
    <?php
    }
    ?>
    <!-- HUBDNCHYJ : App 에서는 이 클래스 사용하시면 됩니다. -->
    <?php
    if (!empty($session_app_type) && $session_app_type == 'Y') {
        // mobile일때
    ?>
    <div class="app_tab_wrap fix_cont">
        <ul class="app_tab program glance">
            <li class="row2 all_days on"><a href="javascript:;">All Days</a></li>
            <li><a href="javascript:;">Sep.7(Thu)</a></li>
            <li><a href="javascript:;">Sep.8(Fri)</a></li>
            <li style="margin-right:5px;"><a href="javascript:;">Sep.9(Sat)</a></li>
        </ul>
    </div>
    <?php
    }
    ?>
    <div class="inner">
        <div class="program_wrap section">
            <div class="scroll_table">
                <?php
                if (!empty($session_app_type) && $session_app_type == 'N') {
                    // pc일때
                ?>
                <ul class="tab_green long centerT program_glance">
                    <li class="on"><a href="javascript:;">3월 8일(금) ~ 9(토)</a></li>
                    <li><a href="javascript:;">3월 8일 (금)</a></li>
                    <li><a href="javascript:;">3월 9일 (토)</a></li>
                </ul>
                <?php
                }
                ?>
                <!-- HUBDNCHYJ : App 일때 하위 마크업 주석처리 필요 -->
                <?php
                if (!empty($session_app_type) && $session_app_type == 'N') {
                    // pc일때
                ?>
				<!--231130 sujeong 다운로드 주석-->
                <!-- <div class="rightT mb20">
                    <button 
					 onclick="javascript:window.open('./download/2023 ICOMES_Program at a glance_0901.pdf')" 
                        class="btn blue_btn nowrap"><img src="./img/icons/icon_download_white.svg" alt="">Program at a
                        Glance Download</a>
                </div> -->

				<div class="rightT mb20">
                    <button class="btn blue_btn nowrap not_yet"><img src="./img/icons/icon_download_white.svg" alt="">Program at a
                        Glance Download</a>
                </div>
                <?php
                }
                ?>
                <div class="program_table_wrap">
                    <table class="program_table main-table">
                        <colgroup>
                            <col class="program_first_col" width="8%">
                            <col width="18%">
							<col width="18%">
							<col width="18%">
                            <col width="18%">
							<col width="18%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="font_big" style="background-color: #F4F4F4;">Time/Location</th>
                                <th style="background-color: #F4F4F4;">Room 1<br> </th>
                                <th style="background-color: #F4F4F4;">Room 2</th>
                                <th style="background-color: #F4F4F4;">Room 3</th>
                                <th style="background-color: #F4F4F4;">Room 4</th>
                                <th style="background-color: #F4F4F4;">Room 5</th>
                            </tr>
                            <tr>
                                <th style="background-color: #FFFF99;" colspan="6" class="font_big day_tbody day_1">
                                    <div class="dots_div">Day 1 - 2024<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />03<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />08<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" /> (금)</div>
                                </th>
                            </tr>
                        </thead>
                        <!---------- DAY 1 ---------->
                        <tbody name="day" class="day_tbody day_1">
                            <tr>
                                <td>
                                    <div class="colons_div">14:50-16:20</div>
                                </td>
                                <td class="purple_bg pointer modal" name="pre_congress_symposium_1" data-id="1">
                                    Pre-congress<br />Symposium 1<p>
                                        <!-- 적절한 비만관리를 위한 정책적 논의 -->
                                    </p>
                                </td>
                                <td></td>
								<td></td>
                                <td></td>
								<td class="no_right_border"></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">16:20-16:30</div>
                                </td>
                                <td class="light_gray_bg">Break</td>
                                <td></td>
                                <td></td>
                                <td></td>
								<td class="no_right_border"></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">16:30-18:05</div>
                                </td>
                                <td class="purple_bg pointer modal" name="pre_congress_symposium_2" data-id="2">
                                    Pre-congress<br />Symposium 2<p>
                                        <!-- Obesity in Asia-Pacific – Is It Different from Restv of the World? -->
                                    </p>
                                        <input type="hidden" name="e" value="room2">
                                    </td>
                                <td></td>
                                <td></td>
                                <td></td>
								<td class="no_right_border"></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">18:05-18:30</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                                <td></td>
                                <td class="no_right_border"></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">18:30-19:00</div>
                                </td>
                                <td class="sky_bg pointer modal" name="satellite_symposium_1" data-id="3">
                                    Satellite<br />Symposium 1
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
								<td class="no_right_border"></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">19:00-19:10</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                                <td></td>
                                <td class="no_right_border"></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">18:30-19:00</div>
                                </td>
                                <td class="sky_bg pointer modal" name="satellite_symposium_2" data-id="4">
                                    Satellite<br />Symposium 2
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
								<td class="no_right_border"></td>
                            </tr>
                           
                        </tbody>
                        <!---------- DAY 2 ---------->


                        <thead>
                            <tr>
                                <th colspan="6" class="font_big day_tbody day_2">
                                    <div class="dots_div">Day 2 - 2024<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />03<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />09<img src="./img/icons/icon_dots.svg"
                                            class="dots_img" />(토)</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody name="day" class="day_tbody day_2">
                            <tr>
                                <td>
                                    <div class="colons_div">07:30-08:20</div>
                                </td>
                                <td class="sky_bg pointer modal" name="breakfast_symposium_1" data-id="5">
                                    Breakfast<br />Symposium 1
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer modal" name="breakfast_symposium_2" data-id="6">
                                    Breakfast<br />Symposium 2
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="sky_bg pointer modal" name="breakfast_symposium_2" data-id="7">
                                    Breakfast<br />Symposium 3
                                    <input type="hidden" name="e" value="room3">
                                </td>
								<td></td>
                                <td rowspan="14" class="no_right_border light_orange_bg" >POSTER EXHIBITION</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">08:25-08:30</div>
                                </td>
                                <td colspan="3" class="yellow_bg pointer">Opening</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">08:30-10:00</div>
                                </td>
                                <td class="green_bg pointer modal" name="symposium_1" data-id="6">
                                    Symposium 1(임상) <p>Treatment of obesity</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_2" data-id="7">
                                    Symposium 2(기초) <p>Integrative physiology and molecular mechanisms of obesity</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_3" data-id="8">
                                    Symposium 3(영양) <p>Postprandial glycemic response and Continuous Glucose Monitoring</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="light_orange_bg">Oral presentation 1</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">10:00-10:10</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                                <td></td>
	                        </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">10:10-11:40</div>
                                </td>
                                <td class="green_bg pointer modal" name="symposium_5" data-id="9">
                                    Symposium 4(임상) <p>Environmental, genetics and obesity</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_6" data-id="10">
                                    Symposium 5(기초) <p>Gut microbiome</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_7" data-id="11">
                                    Symposium 6(영양) <p></p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">11:40-12:40</div>
                                </td>
                                <td colspan="3" class="sky_bg pointer modal" name="keynote_lecture_1" data-id="12">
                                    Luncheon Lecture 1, 2
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">12:40-13:20</div>
                                </td>
                                <td colspan="3" class="pink_bg pointer modal" name="plenary_lecture_2" data-id="13">
                                    Plenary Lecture
                                    <!-- <p class="bold">Understanding Human Metabolic Dysregulation in Vivo Using Stable
                                        Isotope Tracers: More than 50 Years of Experience</p>
                                    <p>Robert R. Wolfe <br />(University of Arkansas for Medical Sciences, USA)</p> -->
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">13:20-13:50</div>
                                </td>
                                <td colspan="3" class="light_orange_bg pointer modal" data-id="14">문석학술상</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">13:50-14:00</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">14:00-15:30</div>
                                </td>
                                <td class="green_bg pointer modal" name="symposium_5" data-id="15">
                                    Symposium 7(임상) <p>New Antiobesity Drug</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_6" data-id="16">
                                    Symposium 8(비만대사수술) <p>Metabolic Surgery</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_7" data-id="17">
                                    Symposium 9(소아) <p>Obesity treatment in adolescent</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="light_orange_bg">Oral presentation 2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">15:30-15:40</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Break</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">15:40-16:10</div>
                                </td>
                                <td class="pink_bg pointer modal" name="luncheon_symposium_1" data-id="18">
                                    Keynote lecture 1 
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="pink_bg pointer modal" name="luncheon_symposium_2" data-id="19">
                                    Keynote lecture 2
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="light_orange_bg pointer modal" name="luncheon_symposium_3" data-id="20">
                                    젊은연구자상
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td></td>
                            </tr>
                           
                            <tr>
                                <td>
                                    <div class="colons_div">16:10-17:40</div>
                                </td>
                                <td class="green_bg pointer modal" name="symposium_9" data-id="21">
                                    Symposium 10(임상) <p>Cormobidity of obesity</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_10" data-id="22">
                                    Symposium 11(빅데이터) <p>Big Data in Obesity Research<br>+Digital Therapeutics in Obesity Management</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="green_bg pointer modal" name="symposium_11" data-id="23">
                                    Symposium 12(운동, 행동) <p>Exercise, Obesity, and Metabolic Dysfunction</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="colons_div">17:40-18:00</div>
                                </td>
                                <td colspan="3" class="light_gray_bg">Award & Closing</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--//section1-->

    </div>

</section>

<!-- program modal -->
<div class="modal_background" style="display: none;"></div>
<div class="detail_modal" style="display: none;">
	<div class="modal_container">
		<button class="modal_close" onclick="modal_close()">close<img src="./img/icons/icon_x.png" /></button>
		<div class="modal_header">
			<h1 class="modal_title"></h1>
			<h6 class="modal_subtitle"></h6>
			<div class="modal_sub_header">
				<div>
                    <b class="modal_title_day"></b>
					<p class="modal_title_time"></p>
					<p class="modal_title_room"></p>
				</div>
				<div>
					<p class="program_modal_chair">Chair Person</p>
					<div class="program_modal_person">
					</div>
				</div>
			</div>
		</div>
		<div class="content_container">	
		</div>
	</div>
</div>
<!-- //program modal -->

<!-- HUBDNCHYJ : App 일때만 노출되는 팝업 입니다. -->
<?php
if (!empty($session_app_type) && $session_app_type == 'Y') {
    // mo일때
?>
<div class="popup hold_pop" style="display:block;">
    <!-- -->
    <div class="pop_bg"></div>
    <div class="pop_contents transparent center_t">
        <img src="./img/icons/icon_resize.png" alt="">
        <p class="white_t center_t">Touch on a session to check the details. <br />Use your fingers to zoom in/out</p>
    </div>
</div>
<?php
}
?>
<input type="hidden" name="session_app_type" value="<?= $session_app_type ?>">
<script>
    /** program_modal */
    const modalTd = document.querySelectorAll(".modal")

    modalTd.forEach((td)=>{
        td.addEventListener("click", (e)=>{
            let id = e.target.dataset.id;

            /** td 내부 선택할 경우 */
            if(!id){
                id = e.target.parentElement.dataset.id;
            }
    
    $.ajax({
        url: PATH + "ajax/client/ajax_program_modal.php",
        type: "POST",
        data: {
            flag: "modal",
            idx: id
        },
        dataType: "JSON",
        success: function (res) {
            // console.log(res.data)
            if (res.code == 200) {
                show_modal(res.data) 
            } else {
                return;
            }
        }
    });
        })
    })

//모달 보여주기
function show_modal(data) {
    const detailModal = document.querySelector(".detail_modal");
    const background = document.querySelector(".modal_background");
    detailModal.style.display = "";
    background.style.display = "";
    writeModal(data)
}

//모달 창 닫기
function modal_close() {
    const detailModal = document.querySelector(".detail_modal")
    const background = document.querySelector(".modal_background")
    const contentsWrap =  document.querySelector(".content_container");

    detailModal.style.display = "none";
    background.style.display = "none";
    contentsWrap.innerHTML = "";

}

//모달 안 내용 채우기
function writeModal(data){
    const modalTitle = document.querySelector(".modal_title");
    const modalSubTitle = document.querySelector(".modal_subtitle");
    const modalTitleDay = document.querySelector(".modal_title_day");
    const modalTitleTime = document.querySelector(".modal_title_time");
    const modalTitleRoom = document.querySelector(".modal_title_room");
    const modalChairPerson = document.querySelector(".program_modal_person");
    const contentsWrap =  document.querySelector(".content_container");

    let title = "";
    let subTitle = "";
    let titleDay = "";
    let titleTime = "";
    let titleRoom = "";
    let chairperson = "";

    data.map((t, i)=>{
        const contents = document.createElement("div")
        title = t.title;
        subTitle = t.program_name;
        titleRoom = t.program_place_name;
        const startDay = t.start_time.split(" ")[0];
        const startTime = t.start_time.split(" ")[1];
        const speakerName = t.speaker?.split("(")[0];
        const speakerOrg = t.speaker?.split("(")[1].split(")")[0];

        titleDay = `${startDay.split("-")[0]}년 ${startDay.split("-")[1]}월 ${startDay.split("-")[2]}일`;
        titleTime = startTime + '-' + t.end_time;
        chairperson = t.chairpersons;
        contents.className = "content";

        /**speaker가 있을 경우 */
        if(t.speaker){

             /**speaker가 한 명일 경우 */
            if(!t.speaker?.includes(",")){
                contents.innerHTML =  `
                                        <div class="content_time">${t.contents_start_time}-${t.contents_end_time}</div>
                                        <div>${t.contents_title}</div>
                                        <div class="content_1 content_person">
                                            <b>${speakerName}</b>
                                            <p>${speakerOrg}</p>
                                        </div>
                                    `
            }
                /**speaker가 여러 명일 경우 */
            else{
                contents.innerHTML =  `
                                        <div class="content_time">${t.contents_start_time}-${t.contents_end_time}</div>
                                        <div>${t.contents_title}</div>
                                        <div class="content_1 content_person">
                                            <p>${t.speaker}</p>
                                        </div>
                                    `
            }
        }
         /**speaker가 없을 경우 */
        else{
            contents.innerHTML =  `
                                    <div class="content_time">${t.contents_start_time}-${t.contents_end_time}</div>
                                    <div>${t.contents_title}</div>
                                    <div>
                                        <p> </p>
                                    </div>
                                `
        }
       
        contentsWrap.append(contents)
    })

    modalTitle.innerText = title;
    modalSubTitle.innerText = subTitle;
    modalTitleDay.innerText = titleDay;
    modalTitleTime.innerText = titleTime;
    modalTitleRoom.innerText = titleRoom
    modalChairPerson.innerText = chairperson;
}

$(document).ready(function() {
    /*$(window).resize(function(){
    	if ($(window).width() <= 480) {
    		var table_width = 1200 * 0.71;
    		var table_height = $(".program_table").height() * 0.71;
    		$(".program_table_wrap").css({"height":table_height});

    		console.log(table_width);
    		// $(".program_table_wrap").css({"width":table_width, "height":table_height});
    	} else {
    		$(".program_table_wrap").css({"width":"auto", "height":"auto"});
    	}
    });
    $(window).trigger("resize");*/

    $(".hold_pop .pop_contents").click(function() {
        $(".hold_pop").hide();
    });

    /* td 클릭 시 페이지 이동 */
    $("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        //table_location(event, target, e, day, this_name);
    });

    /* tab 클릭 시 랜더링 변경 */
    $(".tab_green li, .app_tab li").click(function() {
        var this_index = $(this).index();
        if (!this_index == 1) {
            $(".day_tbody").show();
        } else {
            $(".day_tbody").hide();
            $(".day_tbody.day_" + this_index + "").show();
        }

    });



    // Program At a Glance 줌 스크립트

    var height_array = [];
    var tbody_height;
    var table_width = $(".program_table").outerWidth();

    $(".program_table tbody").each(function() {
        tbody_height = $(this).outerHeight();
        height_array.push(tbody_height)

        $(".app_tab.glance li").click(function() {
            var i = $(this).index() - 1;
            $(".program_table").css({
                "width": "auto",
                "height": "auto"
            })
            // $(".program_table").css({"width":table_width, "height":height_array[i]})
            $(".program_table td, .program_table th").css({
                "font-size": "8px",
                "line-height": "12px"
            })
            $(".program_table td p").css({
                "font-size": "6px",
                "line-height": "10px"
            })

            // $(".program_table").trigger("touchmove");

            //alert(table_width)
            //alert(table_Height)
            //alert(table_font_size)
            //alert(table_font_size_p)
            console.log(height_array[i]);

        });
    });

    //pinch 진행 상태
    let scaling = false;
    //pinch 초기 거리
    let setDist = 0;

    $(document).on("touchstart", ".program_table", function(event) {
        if (event.originalEvent.touches.length === 2) {
            scaling = true;
        }
    })

    var table_font_size = $(".program_table td").css("font-size");
    var table_font_size_p = $(".program_table td p").css("font-size")
    var table_line_height = $(".program_table td").css("line-height");

    $(document).on("touchmove", ".program_table", function(event) {
        if (scaling) {
            var dist = Math.hypot(
                event.originalEvent.touches[0].pageX - event.originalEvent.touches[1].pageX,
                event.originalEvent.touches[1].pageY - event.originalEvent.touches[1].pageY
            );
            dist = Math.floor(dist / 20);
            if (setDist == 0) setDist = dist;
            fontSize = $(".program_table td").css("font-size");
            fontSizeP = $(".program_table td p").css("font-size")
            imgWidth = $(".program_table")[0].clientWidth;
            imgHeight = $(".program_table")[0].clientHeight;
            // alert(parseInt(fontSize))
            if (setDist < dist) {
                if (parseInt(fontSize) <= 16) {
                    $(this).css("width", 1.1 * parseFloat(imgWidth));
                    $(this).css("height", 0.8 * parseFloat(imgHeight));
                    $(this).find("td").css({
                        "font-size": 1.1 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("th").css({
                        "font-size": 1.1 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("td").find("p").css({
                        "font-size": 1.1 * parseFloat(fontSizeP),
                        "line-height": 2 + parseFloat(fontSizeP) + "px"
                    });
                    setDist = dist;
                }
            } else if (setDist > dist) {
                if (parseInt(fontSize) >= 8) {
                    $(this).css("width", 0.9 * parseFloat(imgWidth));
                    $(this).css("height", 0.5 * parseFloat(imgHeight));
                    $(this).find("td").css({
                        "font-size": 0.9 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("th").css({
                        "font-size": 0.9 * parseFloat(fontSize),
                        "line-height": 2 + parseFloat(fontSize) + "px"
                    });
                    $(this).find("td").find("p").css({
                        "font-size": 0.9 * parseFloat(fontSizeP),
                        "line-height": 2 + parseFloat(fontSizeP) + "px"
                    });
                    setDist = dist;
                }
            }
        }
    })
});



function table_location(event, _this, e, day, this_name) {
    var session_app_type = $("[name=session_app_type]").val();

    // if (session_app_type != "" && session_app_type == 'N') {
    //     window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
    // } else {
    //     window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
    // }
}
</script>

<?php
if (!empty($session_app_type) && $session_app_type == 'Y') {
    // mo일때
    include_once('./include/app_footer.php');
} else {
    include_once('./include/footer.php');
}
?>