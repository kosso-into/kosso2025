<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>



<?php

$type = $_GET['type'];
$e = $_GET['e'];
$day = $_GET['day'];
$e_num = $e[-1];
$d_num = $day[-1];
$category = $_GET['category'];

$name = $_GET['name'];

//echo 'asdasd', $e_num;

//kcode == 116 새로고침

echo '<script type="text/javascript">
				  $(document).ready(function(){
					  //탭 활성화
					  //큰탭
					  $(".tab_green li").removeClass("on");
					  if ("' . $day . '" === "") {
						$(".tab_green li:first-child").addClass("on");
					  }else{
                         $(".tab_li li").removeClass("on")
                         $("#'.$category.'").addClass("on")
                         var index = $("#'.$category.'").index();

					     $(".tab_wrap > .tab_cont").removeClass("on");
					     $(".tab_wrap > .tab_cont").eq(index).addClass("on");
                      }

					  window.onkeydown = function() {
					  	var kcode = event.keyCode;
						if(kcode == 116) {
							history.replaceState({}, null, location.pathname);
							window.scrollTo({top:0, left:0, behavior:"auto"});
						}
					  }

					  //스크롤 위치 & 액션
					  $(".program_detail_ul li").each(function(){
						if("' . $name . '" === $(this).attr("name")) {
							var this_top = $(this).offset().top;
							$("html, body").animate({scrollTop: this_top - 400}, 1000);
							console.log("scrollTop: ", this_top - 150)
						}
					  });

				  });
		</script>';


?>



<section class="container program_detail">
    <h1 class="page_title">Program Details</h1>
    <div class="inner">
        <!-- <ul class="tab_green long centerT detail_program"> -->
        <ul class="tab_li">
            <li id="plenary_lecture" class="on"><a href="javascript:;">Plenary Lecture</a></li>
            <li id="keynote_lecture"><a href="javascript:;">Keynote Lecture</a></li>
            <li id="special_lecture_1"><a href="javascript:;">문석학술상</a></li>
            <li id="special_lecture_2"><a href="javascript:;">젊은연구자상</a></li>
            <li id="oral_presentation"><a href="javascript:;">Oral Presentation</a></li>
            <li id="pre_congress_symposium"><a href="javascript:;">Pre-congress Symposium</a></li>
            <li id="symposium"><a href="javascript:;">Symposium</a></li>
            <li id="satellite_symposium"><a href="javascript:;">Satellite Symposium</a></li>
            <li id="breakfast_symposium"><a href="javascript:;">Breakfast Symposium</a></li>
            <li id="luncheon_symposium"><a href="javascript:;">Luncheon Lecture</a></li>
        </ul>
        <div class="tab_wrap">
            
            <!-- Plenary lecture -->
            
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            
                            <li name="plenary_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1, 2, 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>12:40-13:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1, 2, 3</p> -->
                                                    <p class="font_20 bold">Plenary Lecture</p>
                                                    <!-- <p><span class="bold">Chairperson : 최영길/김광원</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이관우</p>(아주의대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>


            <!-- Keynote lecture -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="keynote_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <!-- <p><span class="bold">Chairperson : 이규래</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김경곤</p>
                                                                        (가천의대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <!-- <p><span class="bold">Chairperson : 이문규</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 2 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김은미</p>(강북삼성병원)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        Q&A
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                        
            <!-- 문석학술상 -->
            
            <div class="tab_cont">
                <ul class="program_detail_ul">
                        <li name="special_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>12:40-13:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">문석학술상</p>
                                                    <!-- <p><span class="bold">Chairperson : 박철영</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </li>
                </ul>
            </div>
     
                 <!-- 젊은연구자상-->
            
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="special_lecture_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1, 2, 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>15:40-16:10</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">젊은연구자상</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                        <li>(Plenary Lecture Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                                <!-- Oral Presentation -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                        <li name="oral_presentation_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 4</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 4</p> -->
                                                    <p class="font_20 bold">Oral Presentation 1</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairpersons : 정창희</span> (TBD), <br>
                                                        <span class="bold">고혜진</span> (TBD)
                                                    </p> -->
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기 </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="oral_presentation_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 4</p> -->
                                                    <p class="font_20 bold">Oral Presentation 2</p>
                                                    <!-- <p>
                                                        <span class="bold">Chairpersons : 박정환</span> (TBD), <br><span
                                                            class="bold">남가은</span> (TBD)
                                                    </p> -->
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기 </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                        <li>(Oral Presentation 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                  

            <!-- Pre-congress Symposium -->

            <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="pre_congress_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 8일(금)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>14:50-16:20</td>
                                                <td> 
                                                    <!-- <p class="font_16 font_pink">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Pre-congress Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>(Keynote Lecture 1 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>
                                                                        (TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Q&A</td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="pre_congress_symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>16:30-18:05</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Pre-congress Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Keynote Lecture 2 Detail)</li>
                                                        <li>
                                                            <span class="font_inherit bold">• 참고자료</span><br />
                                                            1.TBD<br />
                                                            2.TBD
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        Q&A
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"></p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

                   
            <!-- Symposium -->

            <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 1 : Treatment of obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 이창범</span> (TBD), <br><span
                                                            class="bold">강지현</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 1 Detail)</li>
                                                        <li>(Symposium 1 Detail)</li>
                                                        <li>(Symposium 1 Detail)</li>
                                                    </ul>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Novel (non-approved) incretin-based therapies under investigation</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">손장원</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">윤지완</p>(서울의대 강남센터 내분비),<br>
                                                                        <p class="bold">이경애</p>(전북의대 내분비내과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_4">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>10:10-11:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 4 : Environmental, genetics and obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 박혜순</span> (TBD), <br><span
                                                            class="bold">김대중</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 4 Detail)</li>
                                                        <li>(Symposium 4 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">양예슬</p>(서울의대 내분비내과),<br>
                                                                        <p class="bold">서원윤</p>(충남의대 가정의학과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_7">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 7 : New Antiobesity Drug</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김성수</span> (TBD), <br><span
                                                            class="bold">권혁태</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 7 Detail)</li>
                                                        <li>(Symposium 7 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Once-weekly Semaglutide and</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">남가은</p>(고려의대 가정의학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Tirzepatide</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">배재현</p>(고려의대 내분비내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Daily oral GLP-1 receptor agonists</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">노은</p>(한림의대 내분비내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이승환</p>(가톨릭의대 내분비내과),<br>
                                                                        <p class="bold">조윤정</p>(대구가톨릭의대 가정의학과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_10">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:10-17:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Symposium 10 : Cormobidity of obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김선미</span> (TBD), <br><span
                                                            class="bold">황유철</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 10 Detail)</li>
                                                        <li>(Symposium 10 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이창현</p>(서울행복내과),<br>
                                                                        <p class="bold">김진욱</p>(을지의대 가정의학과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                                
                            <li name="symposium_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 2 : Integrative physiology and molecular mechanisms of obesity</p>
                                                    <!-- <p><span class="bold">Chairpersons : 유순집</span> (TBD), <br><span
                                                            class="bold">김기우</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 2 Detail)</li>
                                                        <li>(Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold"> Reduction of SPARC protects mice against NLRP3 inflammasome activation and obesity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">유승진</p>(한림의대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold"> The N-degron pathway mediates lipophagy: The chemical modulation of lipophagy in obesity and NAFLD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">박주원</p>(이화여대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">HMBA ameliorates obesity by MYH9- and ACTG1-dependent regulation of hypothalamic neuropeptides </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김은경</p>(DGIST)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">송도경</p>(이화여대)<br>
                                                                        <p class="bold">김형석</p>(충남의대)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_5">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>10:10-11:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 5 : Gut microbiome</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김상용</span> (TBD), <br><span
                                                            class="bold">손장원</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 4 Detail)</li>
                                                        <li>(Symposium 4 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이봉기</p>(부경대학교)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">허진영</p>(서강대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김주연</p>(한양대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이현승</p>(충남의대),<br>
                                                                        <p class="bold">김민수</p>(KIST)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                                                        
                            <li name="symposium_8">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 8 : Metabolic Surgery</p>
                                                    <!-- <p><span class="bold">Chairpersons : 한상문</span> (TBD), <br><span
                                                            class="bold">김경곤</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 8 Detail)</li>
                                                        <li>(Symposium 8 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD),<br>
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                           
                            <li name="symposium_11">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:10-17:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Symposium 11 : Big Data in Obesity Research+Digital Therapeutics in Obesity Management</p>
                                                    <!-- <p><span class="bold">Chairpersons : 강재헌</span> (TBD), <br><span
                                                            class="bold">이상열</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 10 Detail)</li>
                                                        <li>(Symposium 10 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">구혜연</p>(서울의대 가정의학과),<br>
                                                                        <p class="bold">류영상</p>(조선의대 내분비내과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_3">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 3 : Postprandial glycemic response and Continuous Glucose Monitoring</p>
                                                    <!-- <p><span class="bold">Chairpersons : 김은미</span> (TBD), <br><span
                                                            class="bold">임정현</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 3 Detail)</li>
                                                        <li>(Symposium 3 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Estimation of Ultra-processed Food Intake among Korean adults</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">박소현</p>(한림대학교)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Ultra-processed foods intakes and obesity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">심지선</p>(연세대학교)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Ultra-processed foods intake and all-cause and cardiovascular mortality</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이상아</p>(강원대학교)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold"><p class="bold">임현정</p>(경희대학교 의학영양학과),<br>
                                                                        <p class="bold">권유진</p>(용인세브란스 가정의학과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                         
                            <li name="symposium_6">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>10:10-11:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 6 : TBD</p>
                                                    <!-- <p><span class="bold">Chairpersons : 이관우</span> (TBD), <br><span
                                                            class="bold">강준구</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 6 Detail)</li>
                                                        <li>(Symposium 6 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Circadian rhythm, obesity, and intermittent fasting</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">권오빈</p>(서울대학교 의학과 생화학교실)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Chrononutrition and TRE's Effect on Metabolic Health</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">송윤주</p>(가톨릭대학교 식품영양학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Time-Restricted Eating-Integrating the What with the When</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이연희</p>(아주대학교병원 영양팀)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">권혁태</p>(서울의대 가정의학과),<br>
                                                                        <p class="bold">송수진</p>(한남대학교 식품영양학과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_9">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 9 : Obesity treatment in adolescent</p>
                                                    <!-- <p><span class="bold">Chairpersons : 이기형 or 정소정 </span> (TBD), <br><span
                                                            class="bold">홍용희</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 9 Detail)</li>
                                                        <li>(Symposium 9 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">한병덕</p>(고려의대 가정의학과),<br>
                                                                        <p class="bold">양아람</p>(성균관의대 소아청소년과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_12">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>16:10-17:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_green">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Symposium 12 : Exercise, Obesity, and Metabolic Dysfunction</p>
                                                    <!-- <p><span class="bold">Chairpersons : 신윤아</span> (TBD), <br><span
                                                            class="bold">김종희</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Symposium 12 Detail)</li>
                                                        <li>(Symposium 12 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Potential restorative effects of exercise for peripheral skeletal neuropathy and bone loss in a high-fat diet-induced type II diabetes model</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이승용</p>(인천대학교 체육교육과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Regular exercise can how effectively transform our cardiovascular and brain health?</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">하민성</p>(서울시립대학교 스포츠과학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">Exploring In Vivo Metabolic Fluxes Behind Insulin Resistance: Therapeutic Role of Exercise and Essential Amino Acids</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김일영</p>(가천대학과 의예과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이민철</p>(차의과학대학교 스포츠의학과),<br>
                                                                        <p class="bold">문효열</p>(서울대학교 체육교육과)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>


            <!-- Satellite Symposium -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="satellite_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 8일(금)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>18:30-19:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Satellite Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Satellite Symposium 1 Detail)</li>
                                                        <li>(Satellite Symposium 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>18:30-19:00</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="satellite_symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>19:10-19:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Satellite Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: TBD (TBD), TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Satellite Symposium 2 Detail)</li>
                                                        <li>(Satellite Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>19:10-19:40</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>



            <!-- Breakfast Symposium -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                        <li name="breakfast_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Breakfast Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : 오승준</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Breakfast Symposium 1 Detail)</li>
                                                        <li>(Breakfast Symposium 1 Detail)</li>
                                                        <li>(Breakfast Symposium 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="breakfast_symposium_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Breakfast Symposium 2</p> 
                                                    <!-- <p><span class="bold">Chairperson : 김용성</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Breakfast Symposium 2 Detail)</li>
                                                        <li>(Breakfast Symposium 2 Detail)</li>
                                                        <li>(Breakfast Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p> (TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="breakfast_symposium_3">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>07:30-08:20</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Breakfast Symposium 3</p>
                                                    <!-- <p><span class="bold">Chairperson : 김경수</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Breakfast Symposium 3 Detail)</li>
                                                        <li>(Breakfast Symposium 3 Detail)</li>
                                                        <li>(Breakfast Symposium 3 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30-08:20</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>

            <!-- Luncheon Lecture -->

               <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="luncheon_symposium_1">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 1</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Luncheon Symposium 1</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기 </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Luncheon Symposium 1 Detail)</li>
                                                        <li>(Luncheon Symposium 1 Detail)</li>
                                                        <li>(Luncheon Symposium 1 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:40-12:40</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_2">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 2</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 2</p> -->
                                                    <p class="font_20 bold">Luncheon Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:40-12:40</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_3">
                                <div class="program_header">
                                    <p class="font_16 bold">3월 9일(토)</p>
                                    <span class="font_16 bold">ROOM 3</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:40-12:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Luncheon Symposium 2</p>
                                                    <!-- <p><span class="bold">Chairperson : TBD</span> (TBD)</p> -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : TBD (TBD)</p>
                                                    <ul>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                        <li>(Luncheon Symposium 2 Detail)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="on">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:40-12:40</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">TBD</p>(TBD)
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                </div>

            <!-- </div> -->
        </div>
</section>

<script>
$(document).ready(function() {
    // 모든 세션의 내용 숨김처리 후, 펼칠 세션의 td에 on 클래스를 붙여 해당 세션의 내용만 펼칩니다.
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td").children("div").css("display", "none");
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td.on").children("div").css("display", "block");

    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
        $(this).next("tr").next("tr").children("td.on").children("div").slideToggle();
    });

    // $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
    //     $(this).next("tr").next("tr").children("td").children("div").slideToggle();
    // });

    $(".tab_green li, .tab_li li").click(function() {
        var i = $(this).index();
        $(this).parent("ul").next(".tab_wrap").children(".tab_cont").removeClass("on");
        $(this).parent("ul").next(".tab_wrap").children(".tab_cont").eq(i).addClass("on");
        $(this).siblings("li").removeClass("on");
        $(this).addClass("on");
    });

    $(".program_detail_btn").click(function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
    });
    //$('.toggle_title').click(function(e) {
    //	if($(this).hasClass('has_contents')){
    //		e.preventDefault();
    //		var notthis = $('.toggle_contents_wrap2 .has_contents .active').not(this);
    //		notthis.toggleClass('active').next('.toggle_contents2').slideToggle(300);
    //		$(this).toggleClass('active').next().slideToggle("fast");
    //	}
    //});
    //$('.tab_area2 li').on('click',function(){
    //	var idx = $(this).index();
    //	$('.tab_area2 li').removeClass('active');
    //	$(this).addClass('active');
    //	$('.tab_contents').hide();
    //	$('.tab_contents').eq(idx).show();
    //})
    // $('.toggle_title').addClass('active');
    // $('.toggle_contents2').attr('style','display:block;');

    // var hash_parts = location.hash.split('&', 2); 
    // var tab        = hash_parts[0]; 
    // var anc        = hash_parts[1];
    // var tabId      = tab;
    // var idx = $(tabId).index();

    // if(tab){
    //     $('.tab_area2 li').removeClass('active');
    //     $(tabId).addClass('active');
    //     $('.tab_contents').hide();
    //     $('.tab_contents').eq(idx).show();
    //     $('html, body').animate({'scrollTop': ($(anc).offset().top-223)}, 1000); // Animated scroll to anchor.
    //     
    // }
    //var i = 1;
    // $('li.date').each(function(){ 
    //    if ($(this).html() == '　'){
    //        $(this).addClass('no_cont')
    //    }
    // });
});
</script>

<?php include_once('./include/footer.php'); ?>