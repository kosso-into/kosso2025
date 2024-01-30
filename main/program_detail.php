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
            <li id="special_lecture_1"><a href="javascript:;">Award Lecture</a></li>
            <li id="special_lecture_2"><a href="javascript:;">Scientific Session</a></li>
            <li id="pre_congress_symposium"><a href="javascript:;">Committee Session</a></li>
            <li id="symposium"><a href="javascript:;">Symposium</a></li>
            <li id="oral_presentation"><a href="javascript:;">Oral Presentation</a></li>
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
                                    <p class="font_16 bold">ROOM 1~3</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <!-- [240129] sujeong / 학회팀 요청 좌장 선생님 주석  -->
                                                    <p><span class="bold">좌장 : 김광원</span>(가천의대 내분비내과)</p>
                                                    <button class="btn gray2_btn program_detail_btn">세션소개</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <ul>
                                                        <li>금번 Plenary Lecture에서 이관우 교수는 지속 연구로 진행해오고 있는 비만, 인슐린 저항성의 발병 원인 규명, 항비만 물질 및 인슐린 저항성 억제제 관련된 연구를 주제로 강연할 예정입니다. 임상 연구로는 비만 환자의 효과적인 비만 치료에 대한 다기관 임상 연구 중심으로, 기초 연구로는 근육세포 및 혈관 세포에서 지방 독성 기작을 분자 세포생물학적으로 밝히고 병증을 억제하는 그동안의 연구결과를 중심으로, 실제로 성공적인 항비만 물질, 인슐린 저항성 억제제, 그리고 인슐린 저항성과 연관된 근감소증에 대하여 시행해온 연구 결과들을 바탕으로 강의할 예정입니다. </li>
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
                                                                    <td>12:40-13:10</td>
                                                                    <td class="bold">
                                                                    Obesity and Insulin Resistance
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이관우</p>(아주의대 내분비대사내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10-13:20</td>
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
                                    <p class="font_16 bold">ROOM 1</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:10</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">좌장 : 이규래</span>(가천의대 가정의학과)</p>
                                                    <button class="btn gray2_btn program_detail_btn">세션소개</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <ul>
                                                        <li>최근 비만 치료는 비록 여러 가지 장 호르몬에 기반을 둔 펩타이드들에 대다수 사람들의 관심이 모아지고 있지만, 오래전부터 비만 치료에 세로토닌은 중추적인 역할을 해 왔고 세로토닌을 기반으로 한 약제들이 비만 치료에 사용되었던 적도 있었습니다. 본 세션에서는 체내에서 세로토닌의 다양한 역할을 에너지 대사 측면에서 살펴보고 세로토닌의 대사질환 치료제로서의 가능성을 살펴보고자 합니다.</li>
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
                                                                    <td>15:40-16:00</td>
                                                                    <td class="bold">Serotonin and Metabolism</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김경곤</p>
                                                                        (가천의대 가정의학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:00-16:10</td>
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
                                    <p class="font_16 bold">ROOM 2</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:10</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 1</p> -->
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <p><span class="bold">좌장 : 김영설</span>(경희의대 내분비대사내과)</p>
                                                    <button class="btn gray2_btn program_detail_btn">세션소개</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <ul>
                                                        <li>성공적인 비만치료를 위해서는 다양한 치료적 접근이 필요하며, 영양치료는 비만치료에서 핵심적인 부분을 차지하고 있습니다. 영양치료와 관련하여 다양한 방법들이 시도되고 있고, 이와 관련된 연구 결과들이 보고되고 있습니다. 비만치료의 성공률이 높지 않은 현실에서, 성공적인 영양치료를 위해 고려해야 할 사항들을 살펴보고자 합니다.</li>
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
                                                                    <td>15:40-16:00</td>
                                                                    <td class="bold">The Keys to Successful Nutrition Therapy for Persons with Obesity or Overweight</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김은미</p>(강북삼성병원 영양팀)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:00-16:10</td>
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

                        
            <!-- Award Lecture -->
            
            <div class="tab_cont">
                <ul class="program_detail_ul">
                        <li name="special_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">ROOM 1~3</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>13:20-13:50</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">문석학술상</p>
                                                    <p><span class="bold">좌장 : 김성래</span>(가톨릭의대 내분비내과)</p>
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
                                                                <!-- <tr>
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
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </li>
                            <li name="special_lecture_2">
                                <div class="program_header">
                                    <p class="font_16 bold">ROOM 3</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p><span class="bold">좌장 : 손장원</span>(가톨릭의대 내분비내과)</p>
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
                                                                <!-- <tr>
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
                                                                </tr> -->
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
     
                 <!-- Scientific Session -->
            
                    <div class="tab_cont">
                    <ul class="program_detail_ul">
                        <li name="special_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">ROOM 1</p>
                                    <span class="font_16 bold">3월 8일(금)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>15:00-16:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Scientific Session 1</p>
                                                    <p><span class="bold">좌장 : 이창범</span>(한양의대 내분비대사내과),<span class="bold">이상열</span>(경희의대 내분비대사내과)</p>
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
                                                                    <td>15:00-15:25</td>
                                                                    <td class="bold">
                                                                    Continuous Glucose Monitoring : Paradigm Change of Chronic Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">황희</p>(카카오헬스케어)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:25-15:50</td>
                                                                    <td class="bold">
                                                                    Update of CGM Device
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">류영상</p>(조선의대 내분비대사내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:50-16:15</td>
                                                                    <td class="bold">
                                                                    New Anti-obesity Medication
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Julie Broe Honore</p>(노보노디스크)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:15-16:30</td>
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
                            <li name="special_lecture_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>16:40-18:10</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Scientific Session 2</p>
                                                    <p><span class="bold">좌장 : 우정택</span>(경희의대 내분비대사내과),<span class="bold">권혁상</span>(가톨릭의대 내분비내과)</p>
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
                                                                    <td>16:40-17:05</td>
                                                                    <td class="bold">
                                                                    TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">채유나</p>(동아ST)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:05-17:30</td>
                                                                    <td class="bold">
                                                                    TBD
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김종균</p>(프로젠)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-17:55</td>
                                                                    <td class="bold">
                                                                    Paradigm Shift in Obesity Therapeutics : Where We Are and Where to Go?
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">신민정</p>(고려대 바이오시스템의과학부/<br/>㈜메디엔진)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:55-18:10</td>
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

                     <!-- Committee Session -->
            
                     <div class="tab_cont">
                     <ul class="program_detail_ul">
                        <li name="special_lecture_1">
                                <div class="program_header">
                                    <p class="font_16 bold">ROOM 3</p>
                                    <span class="font_16 bold">3월 8일(금)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>15:00-16:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Committee Session 1</p>
                                                    <!-- <p><span class="bold">좌장 : 박철영</span> (TBD)</p> -->
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
                                                                <!-- <tr>
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
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </li>
                            <li name="special_lecture_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>16:40-18:10</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Committee Session 2</p>
                                                    <!-- <p><span class="bold">좌장 : TBD</span> (TBD)</p> -->
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
                                                                <!-- <tr>
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
                                                                </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="special_lecture_2">
                            <div class="program_header">
                                    <p class="font_16 bold">ROOM 2</p>
                                    <span class="font_16 bold">3월 8일(금)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_orange_bg">
                                                <td>16:40-18:10</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 3</p> -->
                                                    <p class="font_20 bold">Committee Session 3</p>
                                                    <!-- <p><span class="bold">좌장 : TBD</span> (TBD)</p> -->
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
                                                                <!-- <tr>
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
                                                                </tr> -->
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
                                    <p class="font_16 bold">ROOM 1</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p class="font_20 bold">Symposium 1 : Treatment of Obesity - Here and Now</p>
                                                    <p><span class="bold">좌장 : 김두만</span>(한림의대 내분비내과),<span class="bold">강지현</span>(건양의대 가정의학과)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : 문준성, 박경희</p>
                                                    <ul>
                                                        <li>(Symposium 1 Detail)</li>
                                                        <li>(Symposium 1 Detail)</li>
                                                        <li>(Symposium 1 Detail)</li>
                                                    </ul>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <!-- [240104] sujeong / 학회팀 요청, symposium 1, 7, 8, 9, 11 주석  -->
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
                                                                    <td>08:30-08:55</td> 
                                                                    <td class="bold">Emerging Incretin-Based Therapies Under Research for Obesity Management: A Look at Novel, Yet-to-be-Approved Treatments</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">손장원</p>(가톨릭의대 내분비내과)
                                                                    </td> 
                                                               </tr>
                                                                <tr>
                                                                    <td>08:55-09:20</td>
                                                                    <td class="bold">The Long and Winding Road: How long does it maintain the pharmacotherapy?</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김진화</p>(조선의대 내분비대사내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">The beneficial effect of SGLT2i and Phentermine-topiramate FDC Combination Therapy</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">홍준화</p>(을지의대 내분비내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">박정환</span>(한양의대 내분비대사내과)<br/>
                                                                        <span class="bold">고혜진</span>(경북의대 가정의학과)
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
                                                    <p class="font_20 bold">Symposium 4 : Exploring the Interplay of Environment, Genetics, and Obesity</p>
                                                    <p><span class="bold">좌장 : 박혜순</span>(울산의대 가정의학과),<span class="bold">김대중</span>(아주의대 내분비대사내과)</p> 
                                                    <button class="btn gray2_btn program_detail_btn">세션소개</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <!-- <p class="bold">Organizer: 배재현(고려의대), 조윤정(대구가톨릭의대)</p> -->
                                                    <ul>
                                                        <li>비만은 다양한 요인들이 상호작용하여 발생하고 진행하는 복잡한 질환입니다. 본 세션에서는 환경, 유전, 그리고 비만 간의 관계에 중점을 두어 살펴보고자 합니다. 먼저 고려의대의 이다영 교수는 하루 주기와 수면이 비만에 미치는 영향에 대해 발표할 것입니다. 국립암센터의 김현진 박사는 환경오염과 대사 질환의 관련성에 대해 고찰할 예정이며, 마지막으로 KAIST의 손종우 교수는 항정신병약물이 체중 변화에 미치는 영향과 이에 대한 치료 전략에 대해 발표할 것입니다.</li>
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
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">Circadian Rhythms, Sleep, and Obesity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이다영</p>(고려의대 내분비내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-11:00</td>
                                                                    <td class="bold">The Impact of Air Pollution on Metabolic Diseases</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김현진</p>(국립암센터 암관리학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:00-11:25</td>
                                                                    <td class="bold">Novel Strategies to Combat Obesity Associated with the Use of Atypical Antipsychotics</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">손종우</p>(KAIST 생명과학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:25-11:40</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">조윤정</span>(대구가톨릭의대 가정의학과)<br/>
                                                                        <span class="bold">배재현</span>(고려의대 내분비내과)
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
                                                    <p class="font_20 bold">Symposium 7 : New Anti-obesity Drugs</p>
                                                    <p><span class="bold">좌장 : 유순집</span>(가톨릭의대 내분비내과), <span class="bold">김성수</span>(충남의대 가정의학과)
                                                </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 이승환, 남가은</p>
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
                                                                    <td>14:00-14:25</td> 
                                                                   <td class="bold">Efficacy and Safety of Once-Weekly Semaglutide Update</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">남가은</p>(고려의대 가정의학과)
                                                                    </td>
                                                               </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td> 
                                                                   <td class="bold">GIPR/GLP-1R Co-Agonists</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">배재현</p>(고려의대 내분비내과)
                                                                    </td> 
                                                             </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td> 
                                                                  <td class="bold">Daily Oral GLP-1 Receptor Agonists</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">노은</p>(한림의대 내분비내과)
                                                                    </td>
                                                              </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">이승환</span>(가톨릭의대 내분비내과)<br/>
                                                                        <span class="bold">김휘승</span>(중앙의대 내분비내과)
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
                                                    <p class="font_20 bold">Symposium 10 : Focus on Women's Health</p>
                                                    <p><span class="bold">좌장 : 권혁태</span>(서울의대 가정의학과), <span class="bold">이창현</span>(서울행복내과)
                                                </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 윤지완, 오범조</p>
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
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">Obesity as Disruptor of The Female Fertility</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">정선화</p>(두번째봄 산부인과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-17:00</td>
                                                                    <td class="bold">Obesity and Polycystic Ovary Syndrome</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김진주</p>(서울의대 산부인과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:00-17:25</td>
                                                                    <td class="bold">Childhood Obesity and Central Precocious Puberty</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">양아람</p>(성균관의대 소아청소년과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:25-17:40</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">오범조</span>(서울의대 가정의학과)<br/>
                                                                        <span class="bold">이경애</span>(전북의대 내분비대사내과)
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
                                    <p class="font_16 bold">ROOM 2</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p class="font_20 bold">Symposium 2 : Targeting Molecular Pathways in Obesity: Insights from Recent Research</p>
                                                    <p><span class="bold">좌장 : 황유철</span>(경희의대 내분비대사내과), <span class="bold">김기우</span>(연세치대 구강생물학교실)</p>
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
                                                                    <td>08:30-08:55</td>
                                                                    <td class="bold">Reduction of Adipokine SPARC Protects Against Obesity by Integration 
of Immune-metabolic Response</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">유승진</p>(한림의대 약리학교실)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>08:55-09:20</td>
                                                                    <td class="bold">Therapeutic Strategy for Obesity Based on p62-mediated Lipophagy</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">박주원</p>(이화여대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">HMBA Ameliorates Diet-induced Obesity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김은경</p>(DGIST 뇌과학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">송도경</span>(이화의대 내분비내과)<br>
                                                                        <span class="bold">김형석</span>(충남의대)
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
                                                    <p class="font_20 bold">Symposium 5 : Diverse Pathways in Regulation of Obesity and Related Diseases</p>
                                                    <p><span class="bold">좌장 : 김상용</span>(조선의대 내분비대사내과), <span class="bold">조계원</span>(순천향의생명연구원)</p>
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
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">The Significance of Ascorbic Acid in Regulating Thermogenesis and Energy Metabolism</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이봉기</p>(부경대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-11:00</td>
                                                                    <td class="bold">TANK-Binding Kinase 1 Serves as a Key Regulator of Hepatocyte Fitness in MAFLD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">허진영</p>(서강대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:00-11:25</td>
                                                                    <td class="bold">How Diets Regulate MASH Development. Casp2-S1P: The New Hepatic Lipid Regulator</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김주연</p>(한양대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:25-11:40</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">이현승</span>(충남의대)<br/>
                                                                        <span class="bold">김민수</span>(KIST)
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
                                                    <p><span class="bold">좌장 : 서영성</span>(계명의대 가정의학과), <span class="bold">한상문</span>(서울의료원 외과)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 한상문</p>
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
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">Pre and post-operative management of hypertension and cardiovascular disease</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김경희</p>(세종병원 심장내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">Pre and Post-Operative Management of Type 2 Diabetes</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">박형규</p>(순천향의대 내분비대사내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">Patient Care Before and After Bariatric Surgery</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">권영근</p>(고려의대 위장관외과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">김은영</span>(가톨릭의대 위장관외과/비만외과)<br/>
                                                                        <span class="bold">이상일</span>(충남의대 외과)
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
                                                    <p><span class="bold">좌장 : 강재헌</span>(성균관의대 가정의학과), <span class="bold">한경도</span>(숭실대 정보통계보험수리학과)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 이상열, 한경도</p>
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
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김선영</p>(경희의대 가정의학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-17:00</td>
                                                                    <td class="bold">Obesity Fact Sheet for 2023</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">정수민</p>(서울의대 가정의학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:00-17:25</td>
                                                                    <td class="bold">Obesity research using data from the National Health Insurance Service</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">정진형</p>(성균관의대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:25-17:40</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">연동건</span>(경희의대 디지털헬스센터)<br/>
                                                                        <span class="bold">이유빈</span>(성균관의대 내분비대사내과)
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
                                    <p class="font_16 bold">ROOM 3</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p class="font_20 bold">Symposium 3 : Ultra-processed Foods and Cardiometabolic Health</p>
                                                    <p><span class="bold">좌장 : 이기영</span>(가천의대 내분비대사내과), <span class="bold">김오연</span>(동아대 식품영양학과)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 임현정, 김오연, 송수진</p>
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
                                                                    <td>08:30-08:55</td>
                                                                    <td class="bold">Estimation of Ultra-processed Food Intake among Korean Adults</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">박소현</p>(한림대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>08:55-09:20</td>
                                                                    <td class="bold">Ultra-processed Food Consumption and Obesity</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">심지선</p>(연세대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">Serum Metabolomic Signatures of Ultra-processed Food Consumption and Cancer-related Hormones</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이상아</p>(강원대)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">임현정</span>(경희대 의학영양학과)<br>
                                                                        <span class="bold">권유진</span>(연세의대 가정의학과)
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
                                                    <p class="font_20 bold">Symposium 6 : Time Restricted Eating: What We Know & Where the Field is Going</p>
                                                    <p><span class="bold">좌장 : 김성훈</span>(미즈메디병원 내분비내과), <span class="bold">임정현</span>(서울대병원 급식영양과)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 임현정, 김오연, 송수진</p>
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
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">Circadian Rhythm, Obesity, and Intermittent Fasting</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">권오빈</p>(서울의대 생화학교실)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-11:00</td>
                                                                    <td class="bold">Chrononutrition and TRE's Effect on Metabolic Health</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">송윤주</p>(가톨릭대 식품영양학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:00-11:25</td>
                                                                    <td class="bold">Time-Restricted Eating-Integrating The What with The When</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이연희</p>(아주대병원 영양팀)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:25-11:40</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">권혁태</span>(서울의대 가정의학과)<br>
                                                                        <span class="bold">송수진</span>(한남대 식품영양학과)
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
                                                    <p class="font_20 bold">Symposium 9: Obesogens & Obesogenic environment in pediatric obesity</p>
                                                    <p><span class="bold">좌장 : 이기형</span>(고려의대 소아청소년과), <span class="bold">정소정</span>(건국의대 소아청소년과)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">미리보기</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <p class="bold">Organizer: 홍용희</p>
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
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">Causal Links between Chemical Exposures and Obesity in Childhood and Adolescence</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김신혜</p>(인제의대 소아청소년과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">TBD</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">방은옥</p>(질병관리청 만성질환예방과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">Obesogenic Environment: How Can Government Policy Make a Healthy Environment for Pediatric Obesity?</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김태환</p>(교육부 학생건강정책과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">홍용희</span>(순천향의대 소아청소년과)<br>
                                                                        <span class="bold">김재현</span>(서울의대 소아청소년과)
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
                                                    <p class="font_20 bold">Symposium 12 : Effects of Exercise and Nutrition on Obesity-related Cardiometabolic Dysfunction</p>
                                                    <p><span class="bold">좌장 : 신윤아</span>(단국대 국제스포츠학부), <span class="bold">이세원</span>(인천대 체육학부)</p>
                                                    <button class="btn gray2_btn program_detail_btn">세션소개</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                <!-- <p class="bold">Organizer: 이세원, 이민철, 김일영</p> -->
                                                    <ul>
                                                        <li>비만은 다양한 대사 및 심혈관계 질환과 밀접한 관련이 있습니다. 이를 극복하기 위해 운동과 영양이 중요한 역할을 하며 많은 연구들이 수행되고 있습니다. 본 세션에서는 기전 및 임상 연구 등을 바탕으로 비만을 포함한 대사 및 심•뇌혈관계 질환에 대한 운동의 역할에 대한 최신 지견을 논의할 예정입니다. </li>
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
                                                                    <td>16:10-16:35</td>
                                                                    <td class="bold">Potential Restorative Effects of Exercise for Peripheral Skeletal Neuropathy and Bone Loss in a High-fat Diet-induced Type II Diabetes Model</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이승용</p>(인천대 체육교육과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:35-17:00</td>
                                                                    <td class="bold">How Effectively Can Regular Exercise Improve Our Cardiovascular and Brain Health?</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">하민성</p>(서울시립대 스포츠과학과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:00-17:25</td>
                                                                    <td class="bold">Exploring In Vivo Metabolic Fluxes Behind Insulin Resistance: Therapeutic Role of Exercise and Essential Amino Acids</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김일영</p>(가천의대 의예과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:25-17:40</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <span class="bold">이민철</span>(차의대 스포츠의학과)<br/>
                                                                        <span class="bold">문효열</span>(서울대 체육교육과)
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

                    <!-- Oral Presentation -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                        <li name="oral_presentation_1">
                                <div class="program_header">
                                    <p class="font_16 bold">ROOM 4</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>08:30-10:00</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 4</p> -->
                                                    <p class="font_20 bold">Oral Presentation 1</p>
                                                    <p>
                                                        <span class="bold">좌장 : 정창희</span>(울산의대 내분비내과), <span class="bold">이윤희</span>(서울대 약대)
                                                    </p>
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
                                                                <!-- <tr>
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
                                                                </tr> -->
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
                                            <tr class="purple_bg">
                                                <td>10:10-11:40</td>
                                                <td>
                                                    <!-- <p class="font_16 font_pink">2024.03.09. ROOM 4</p> -->
                                                    <p class="font_20 bold">Oral Presentation 2</p>
                                                    <p>
                                                        <span class="bold">좌장 : 박경희</span>(한림의대 가정의학과), <span class="bold">박정환</span>(한양의대 내분비대사내과)
                                                    </p>
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
                                                                <!-- <tr>
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
                                                                </tr> -->
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
                                    <p class="font_16 bold">ROOM 1</p>
                                    <span class="font_16 bold">3월 8일(금)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>18:30-19:30</td>
                                                <td>
                                                    <!-- <p class="font_16 font_blue">2024.03.08. ROOM 1</p> -->
                                                    <p class="font_20 bold">Satellite Symposium</p>
                                                    <p><span class="bold">좌장 : 김종화</span>(부천세종병원 내분비대사내과),<span class="bold">김정환</span>(을지의대 가정의학과)</p>
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
                                                                    <td class="bold">Statin for Primary Prevention in elderly Patients</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이상열</p>(경희의대 내분비대사내과)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>19:00-19:30</td>
                                                                    <td class="bold">Empagliflozin, Expanding horizons for the treatment of CRM</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">양여리</p>(가톨릭의대 내분비내과)
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
                                    <p class="font_16 bold">ROOM 1</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p><span class="bold">좌장 : 오승준</span>(경희의대 내분비대사내과)</p>
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
                                                                    <td class="bold">Effectiveness and Safety of SGLT2i+DPP4i FDC Combination Therapy in HbA1c and Weight on T2DM Patients</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">류영상</p>(조선의대 내분비대사내과)
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
                                    <p class="font_16 bold">ROOM 2</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p><span class="bold">좌장 : 김용성</span>(대자인병원 내분비내과)</p>
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
                                                                    <td class="bold">Cutting Edge Care of Pitavastatin with Ezetimibe Combination Therapy</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김경수</p>(차의대 내분비내과)
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
                                    <p class="font_16 bold">ROOM 3</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p><span class="bold">좌장 : 김경수</span>(가톨릭의대 가정의학과)</p>
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
                                    <p class="font_16 bold">ROOM 1</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p><span class="bold">좌장 : 이문규</span>(을지의대 내분비대사내과)</p>
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
                                                                    <td class="bold">The Past, Present and Future of Obesity Treatment Paradigm - GLP-1 Heritage</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">권혁상</p>(가톨릭의대 내분비내과)
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
                                    <p class="font_16 bold">ROOM 2</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p><span class="bold">좌장 : 유형준</span>(CM병원 내분비내과)</p>
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
                                                                    <td class="bold">What’s New in T2D? Dapa+Sita Combination!</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">정창희</p>(울산의대 내분비내과)
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
                                    <p class="font_16 bold">ROOM 3</p>
                                    <span class="font_16 bold">3월 9일(토)</span>
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
                                                    <p class="font_20 bold">Luncheon Symposium 3</p>
                                                    <p><span class="bold">좌장 : 신현호</span>(아산충무병원 심장내과)</p>
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
                                                                    <td class="bold">SGLT2i; Paradigm Shift in T2DM Treatment</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">홍준화</p>(을지의대 내분비내과)
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