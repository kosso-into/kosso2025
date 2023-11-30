<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>



<?php

$type = $_GET['type'];
$e = $_GET['e'];
$day = $_GET['day'];
$e_num = $e[-1];
$d_num = $day[-1];

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
					  }
					  $(".tab_green li:nth-child(' . $d_num . ')").addClass("on");
					  $(".tab_green + .tab_wrap > .tab_cont").removeClass("on");
					  $(".tab_green + .tab_wrap > .tab_cont:nth-child(' . $d_num . ')").addClass("on");
					  //작은탭
					  $(".tab_green + .tab_wrap .tab_cont .tab_li li").removeClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_li li:nth-child(' . $e_num . ')").addClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_cont").removeClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_cont:nth-child(' . $e_num . ')").addClass("on");

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
        <!-- <ul class="tab_green long centerT detail_program">
            <li id="tab1" class="on"><a href="javascript:;">Sep.7 (Thu)
                </a></li>
            <li id="tab2"><a href="javascript:;">Sep.8 (Fri)
                </a></li>
            <li id="tab3"><a href="javascript:;">Sep.9 (Sat)
                </a></li>
        </ul> -->
        <div class="tab_wrap">
            <div class="tab_cont on">
                <!-- <img class="coming" src="./img/coming.png" /> -->
                <ul class="tab_li">
                    <li id="tab1" class="on"><a href="javascript:;">Plenary Lecture</a></li>
                    <li id="tab2"><a href="javascript:;">Keynote Lecture</a></li>
                    <li id="tab3"><a href="javascript:;">Symposium</a></li>
                    <li id="tab3"><a href="javascript:;">Satellite Symposium</a></li>
                    <li id="tab3"><a href="javascript:;">Breakfast Symposium</a></li>
                    <li id="tab3"><a href="javascript:;">Luncheon Lecture</a></li>
                    <!-- <li id="tab3"><a href="javascript:;">All Categories</a></li> -->
                </ul>
                <!-- <div class="program_category">
                  <div class="sub_category">
                    <div id="tab1" class="on">Plenary Lecture</div>
                    <div id="tab2">Keynote Lecture</div>
                  </div>
                  
                  <div class="sub_category"> 
                    <div id="tab3">Symposium</div>
                    <div id="tab4">Satellite Symposium</div>
                  </div>

                  <div class="sub_category">
                    <div id="tab5">Breakfast Symposium</div>
                    <div id="tab6">Luncheon Lecture</div>
                  </div>

                  <div id="tab7">All Categories</div>
                </div> -->
                <div class="tab_wrap">

                <!-- Plenary lecture -->

                
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="pre_congress_symposium_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>15:00-16:45</td>
                                                <td>
                                                    <p class="font_20 bold">Pre-congress Symposium 1 : 적절한 비만관리를 위한 정책적
                                                        논의</p>
                                                    <p><span class="bold">Chairpersons : 김성수</span> (대한비만학회 회장), <span
                                                            class="bold">김종화</span> (부천세종병원 내분비내과)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td>15:00-15:05</td>
                                                                    <td class="bold">
                                                                        개회사
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">박철영</p>(대한비만학회 이사장)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:05-15:10</td>
                                                                    <td class="bold">
                                                                        축사
                                                                    </td>
                                                                    <td class="text_r"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:10-15:25</td>
                                                                    <td class="bold">
                                                                        학회에서 바라는 비만 관리를 위한 정부 정책 방향
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">김경곤</p>(대한비만학회 부회장)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:25-15:45</td>
                                                                    <td class="bold">
                                                                        비만대사수술 청구 현황 분석 및 제언
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">박정혜</p>(건강보험심사평가원 심사운영부 부장)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:45-16:05</td>
                                                                    <td class="bold">
                                                                        소아청소년 비만 관리 제언
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">홍용희</p>(대한비만학회 소아청소년위원회 이사)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:05-16:45</td>
                                                                    <td class="bold">
                                                                        패널토의
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">이충헌</p>(KBS 기자),<br>
                                                                        <p class="bold">정연희</p>(보건복지부 건강증진과 과장),<br>
                                                                        <p class="bold">한병덕</p>(고려의대 가정의학과 교수),<br>
                                                                        <p class="bold">한상문</p>(대한비만학회 비만대사수술위원회 이사)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td></td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="satellite_symposium_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>18:00-18:30</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 1</p>
                                                    <p><span class="bold">Chairperson : Sang Yeoup Lee</span> (Pusan
                                                        National University, Republic of Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td>18:00-18:30</td>
                                                                    <td class="bold">
                                                                        Empagliflozin, Treatment of T2D patients
                                                                        Considering Renal Function
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yong-ho Lee</p>(Yonsei
                                                                        University, Republic of Korea)
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
                                                <td>18:30-19:00</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 2</p>
                                                    <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td class="bold">Hypertension Management in Older
                                                                        Persons: Intensive vs Standard Treatment</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Won Yoon Suh</p>(Chungnam
                                                                        National University, Republic of Korea)
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


                    <!-- Keynote lecture -->


                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">


                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:45-17:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                                            <tr class="purple_bg">
                                                <td>17:00-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Pre-congress Symposium 2 : Obesity in
                                                        Asia-Pacific – Is It Different from Rest of the World?</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Kyu Rae Lee</span> (Gachon
                                                        University, Republic of Korea), <br><span class="bold">Koutaro
                                                            Yokote</span> (Chiba University, Japan)
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td>17:00-17:20</td>
                                                                    <td class="bold">Prevalence and Trends of Obesity
                                                                        and Metabolic Syndrome in the Asia-pacific
                                                                        Region</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jun-Hyuk Lee</p>(Eulji
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:40</td>
                                                                    <td class="bold">Perspective on Diagnostic Criteria
                                                                        for Obesity in Asia and Global</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hyuktae Kwon</p>(Seoul National
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:40-18:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Gaga Irawan Nugraha</p>(Faculty
                                                                        of Medicine, Universitas Padjadjaran,
                                                                        Indonesia),<br>
                                                                        <p class="bold">Daruneewan Warodomwichit</p>
                                                                        (Ramathibodi Hospital, Mahidol University,
                                                                        Thailand),<br>
                                                                        <p class="bold">Sang Yeoup Lee</p>(Pusan
                                                                        National University, Republic of Korea),<br>
                                                                        <p class="bold">Wen-Yuan Lin</p>(China Medical
                                                                        University and Hospital, Taiwan),<br>
                                                                        <p class="bold">Kwang Wei Tham</p>(Woodlands
                                                                        Health, Singapore)
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
                            <li name="satellite_symposium_3">
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
                                                    <p class="font_20 bold">Satellite Symposium 3</p>
                                                    <p><span class="bold">Chairperson : Bom Taeck Kim</span> (Ajou
                                                        University, Republic of Korea)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td class="bold">Atorvastatin/Ezetimibe Treatment
                                                                        for the Dyslipidemia in Patients with Type 2
                                                                        Diabetes</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Chang Hee Jung</p>(University of
                                                                        Ulsan, Republic of Korea)
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
                            <li name="welcome_cocktail_party">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">


                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>19:00-21:00</td>
                                                <td>
                                                    <p class="font_20 bold mb_0">Welcome Cocktail Party</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon
                                                        University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of
                                                        Korea, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Thiruma V. Arumugam, a distinguished researcher in
                                                            the fields of physiology and pharmacology at La Trobe
                                                            University, Australia, is pushing the boundaries of
                                                            neuroscience and metabolism. In his upcoming lecture, he
                                                            will discuss how his work on intermittent metabolic
                                                            switching has enhanced our comprehension of its effect on
                                                            brain health, paving the way for potential therapeutic
                                                            interventions.</li>
                                                        <li>His recent publication in Theranostics, titled
                                                            "Time-restricted feeding modulates the DNA methylation
                                                            landscape, attenuates hallmark neuropathology and cognitive
                                                            impairment in a mouse model of vascular dementia," has
                                                            presented novel insights into the therapeutic potential of
                                                            intermittent metabolic switching, offering promising
                                                            strategies for managing and potentially reversing cognitive
                                                            impairment in dementia.</li>
                                                        <li>Further expanding our understanding, Professor Arumugam's
                                                            article in Cell Metabolism, "Hallmarks of Brain Aging:
                                                            Adaptive and Pathological Modification by Metabolic States,"
                                                            continues to revolutionize our perspective on the role of
                                                            metabolism in brain aging.</li>
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
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        Intermittent Metabolic Switching and Brain
                                                                        Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe
                                                                        University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                           
                            <li name="symposium_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 1 : Obesity and Cancer</p>
                                                    <p><span class="bold">Chairpersons : Sung Rae Kim</span> (The
                                                        Catholic University of Korea, Republic of Korea), <br><span
                                                            class="bold">Yoon-Sok Chung</span> (Ajou University,
                                                        Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Seung-Hwan Lee (The Catholic University
                                                        of Korea, Republic of Korea), Jae Hyun Bae (Korea University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Obesity is strongly associated with increased incidence and
                                                            progression of cancers, significantly contributing to
                                                            cancer-related mortality. This session will delve into the
                                                            latest perspectives on the relationship between obesity and
                                                            cancer. Professor Yun Kyung Cho will present epidemiological
                                                            studies that elucidate the impact of obesity on cancer risk.
                                                            Professor Haejin Yoon will explore the regulation of
                                                            mitochondrial metabolism and its role in metabolic diseases.
                                                            Professor Annie Anderson will discuss evidence-based
                                                            strategies to effectively address excess body fatness in
                                                            cancer survivors.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Cho YK, Lee J, Kim HS, et al. Metabolic health is a
                                                            determining factor for incident colorectal cancer in the
                                                            obese population: A nationwide population-based cohort
                                                            study. Cancer Med. 2021;10(1):220-229.<br />
                                                            2. Yoon H, Spinelli JB, Zaganjor E, et al. PHD3 loss
                                                            promotes exercise capacity and fat oxidation in skeletal
                                                            muscle. Cell Metab. 2020;32(2):215-228.<br />
                                                            3. Anderson AS, Martin RM, Renehan AG, et al. Cancer
                                                            survivorship, excess body fatness and weight-loss
                                                            intervention-where are we in 2020? Br J Cancer.
                                                            2021;124(6):1057-1065
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
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        Obesity and the Risk of Cancer: Key Lessons from
                                                                        Epidemiologic Studies
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yun Kyung Cho</p>(University of
                                                                        Ulsan, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        Dynamic Regulation of Mitochondrial Metabolism
                                                                        in Metabolic Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Haejin Yoon</p>(UNIST, Republic
                                                                        of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        Obesity Care in Cancer Survivors
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Annie Anderson</p>(University of
                                                                        Dundee, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae Hyun Bae</p>(Korea
                                                                        University, Republic of Korea),<br>
                                                                        <p class="bold">You-Bin Lee</p>(Sungkyunkwan
                                                                        University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="opening_address">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
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
                                                                    <td>11:10-11:40</td>
                                                                    <td class="bold">
                                                                        Adipose Tissue – A Treasure Box for Discoveries
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Matthias Blüher</p>
                                                                        (University of Leipzig, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:50-12:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_1">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 1</p>
                                                    <p><span class="bold">Chairperson : Bumjo Oh</span> (Seoul National
                                                        University, Republic of Korea)</p>
                                                    <!-- [↓] 확정 시 까지 버튼 숨김 -->
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview </button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td>12:00-13:00</td>
                                                                    <td class="bold">
                                                                        The Cardio-Renal Benefits of Dapagliflozin and
                                                                        Combination Therapy
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Eun Young Lee</p>(The Catholic
                                                                        University of Korea, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 5 : Emerging Anti-obesity Drugs: Expectations and Apprehensions</p>
                                                    <p><span class="bold">Chairperson : Young Seol Kim</span> (Kyung Hee University, Republic of Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Kyung Hee Park (Hallym University,
                                                        Republic of Korea), Jin-Wook Kim (Hippocrata Clinic), Yoon Jeong
                                                        Cho (Daegu Catholic University, Republic of Korea)</p>
                                                    <ul>
                                                        <li>The development of new drugs for treating obesity is
                                                            ongoing, and more potent medications are being introduced.
                                                            Among them, semaglutide and tirzepatide will soon be
                                                            available in Korea, and their efficacy has been proven based
                                                            on various clinical trials. In Symposium 5, we will discuss
                                                            the efficacy of semaglutide and tirzepatide, as well as
                                                            expectations and side effects associated with their use. In
                                                            line with this, we will explore the safety and status of
                                                            drug abuse when using anti-obesity drugs, which should be
                                                            considered as important as their efficacy. This symposium
                                                            will provide an opportunity for us to collectively
                                                            contemplate the direction for optimal treatment in this
                                                            field.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. J Obes Metab Syndr. 2023 Jun 30; 32(2): 121–129.
                                                            Diagnosis of Obesity: 2022 Update of Clinical Practice
                                                            Guidelines for Obesity by the Korean Society for the Study
                                                            of Obesity<br />
                                                            2. Lancet Diabetes Endocrinol 2022; 10: 193–206. Semaglutide
                                                            once a week in adults with overweight or obesity, with or
                                                            without type 2 diabetes in an east Asian population (STEP
                                                            6): a randomised, double-blind, double-dummy,
                                                            placebo-controlled, phase 3a trial<br />
                                                            3. Diabetes Obes Metab. 2023 Apr;25(4):1056-1067. Safety and
                                                            efficacy analyses across age and body mass index subgroups
                                                            in East Asian participants with type 2 diabetes in the phase
                                                            3 tirzepatide studies (SURPASS programme)<br />
                                                            4. Diabetes Obes Metab.2021;23:1232–1241.Cardiovascular
                                                            safety of evogliptin in patients with type 2 diabetes: A
                                                            nationwide cohort study.
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
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">
                                                                        STEP Up Your Weight Management with Semaglutide
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Bom Taeck Kim</p>(Ajou
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                        Safety and Abuse of Anti-obesity Drugs
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ju Young Shin</p>(Sungkyunkwan
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                        The Metabolic Effects of Tirzepatide, especially
                                                                        in East-Asian Patients from the SURPASS Program
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert J. Heine</p>(Eli Lilly,
                                                                        USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jin-Wook Kim</p>(Hippocrata
                                                                        Clinic, Republic of Korea), <br>
                                                                        <p class="bold">Seo Young Kang</p>(Eulji
                                                                        University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee
                                                        University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Il-Young Kim (Gachon University, Republic
                                                        of Korea)</p>
                                                    <ul>
                                                        <li>Prof. Wolfe is widely respected as the world’s foremost
                                                            authority on stable isotope tracer methodology and on amino
                                                            acid/protein nutrition. His research focuses on the
                                                            regulation of muscle metabolism, particularly as affected by
                                                            aging, obesity, insulin resistance, and stressors such as
                                                            sepsis and cancer in humans. Prof. Wolfe has developed
                                                            numerous metabolic tracing models using stable isotope
                                                            tracers to quantify a variety of metabolic processes in
                                                            humans, which has formed the foundation of our understanding
                                                            of many aspects of normal and abnormal metabolism of
                                                            glucose, fatty acid, and amino acid/protein in humans. In
                                                            his plenary lecture, the particular emphasis will be placed
                                                            on the response of fatty acid kinetics to different
                                                            conditions (exercise, glucose intake, obesity) in the
                                                            context of the triglyceride-fatty acid cycle, with his more
                                                            than 50 years of experience in the human metabolic research.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Kim IY et al., Tracing metabolic flux in vivo: basic
                                                            model structures of tracer methodology. 2022
                                                            Sep;54(9):1311-1322. doi: 10.1038/s12276-022-00814-z.<br />
                                                            2. Miyoshi H et al., Hormonal control of substrate cycling
                                                            in humans, J Clin Invest. 1988. 1988 May;81(5):1545-55. doi:
                                                            10.1172/JCI113487.<br />
                                                            3. Sidossis LS, Wolfe RR. Glucose and insulin-induced
                                                            inhibition of fatty acid oxidation: the glucose-fatty acid
                                                            cycle reversed. Am J Physiol. 1996 Apr;270(4 Pt 1):E733-8.
                                                            doi: 10.1152/ajpendo.1996.270.4.E733. PMID: 8928782.
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
                                                                    <td>15:40-16:10</td>
                                                                    <td class="bold">
                                                                        Understanding Human Metabolic Dysregulation in
                                                                        Vivo Using Stable Isotope Tracers: More than 50
                                                                        Years of Experience
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert R. Wolfe</p>(University
                                                                        of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:20</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:20-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 9 : Obesity in Special Conditions
                                                    </p>
                                                    <p><span class="bold">Chairpersons : Moon-Kyu Lee</span> (Eulji
                                                        University, Republic of Korea), <br><span class="bold">In Ju
                                                            Kim</span> (Pusan National University, Republic of Korea)
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Yun-Hee Lee (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>The topic of this session is “Obesity in special
                                                            conditions”. Beyond recognizing obesity as the same disease
                                                            condition, we would like to have time to look at cases with
                                                            various accompanying diseases. The first speaker, Dicky L.
                                                            Tahapary, will discuss the diagnosis and treatment of obese
                                                            patients with diabetes. The second speaker, Wen-Yuan Lin,
                                                            will introduce studies related to obesity with sarcopenia.
                                                            The last speaker, Professor Tae Nyun Kim, will discuss the
                                                            new concept of osteoporosis-sarcopenic obesity.</li>
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
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        Diabesity: From Disease Mechanism to Clinical
                                                                        Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dicky L. Tahapary</p>
                                                                        (Cardiovascular and Research
                                                                        Centre-IMERI(Indonesia Medical Education and
                                                                        Research Institute), Indonesia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                        Sarcopenia and Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Wen-Yuan Lin</p>(China Medical
                                                                        University and Hospital, Taiwan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        Osteo-Sarcopenic Obesity: A New Concept of an
                                                                        Old Problem
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Tae Nyun Kim</p>(Inje
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Bumjo Oh</p>(Seoul National
                                                                        University, Republic of Korea), <br>
                                                                        <p class="bold">Hyon-Seung Yi</p>(Chungnam
                                                                        National University, Republic of Korea)
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
                </div>
            </div>
           
            <!-- Breakfast Symposium -->

                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_1">
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
                                                    <p class="font_20 bold">Breakfast Symposium 1</p>
                                                    <p><span class="bold">Chairperson : Kiyoung Lee</span> (Gachon
                                                        University, Republic of Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td class="bold">
                                                                        Optimizing Combination Therapy for Type 2
                                                                        Diabetes
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jae Hyun Bae</p>(Korea
                                                                        University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_1_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon
                                                        University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of
                                                        Korea, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Thiruma V. Arumugam, a distinguished researcher in
                                                            the fields of physiology and pharmacology at La Trobe
                                                            University, Australia, is pushing the boundaries of
                                                            neuroscience and metabolism. In his upcoming lecture, he
                                                            will discuss how his work on intermittent metabolic
                                                            switching has enhanced our comprehension of its effect on
                                                            brain health, paving the way for potential therapeutic
                                                            interventions.</li>
                                                        <li>His recent publication in Theranostics, titled
                                                            "Time-restricted feeding modulates the DNA methylation
                                                            landscape, attenuates hallmark neuropathology and cognitive
                                                            impairment in a mouse model of vascular dementia," has
                                                            presented novel insights into the therapeutic potential of
                                                            intermittent metabolic switching, offering promising
                                                            strategies for managing and potentially reversing cognitive
                                                            impairment in dementia.</li>
                                                        <li>Further expanding our understanding, Professor Arumugam's
                                                            article in Cell Metabolism, "Hallmarks of Brain Aging:
                                                            Adaptive and Pathological Modification by Metabolic States,"
                                                            continues to revolutionize our perspective on the role of
                                                            metabolism in brain aging.</li>
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
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        Intermittent Metabolic Switching and Brain
                                                                        Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe
                                                                        University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 2 : Obesity and Neurodegenerative
                                                        Diseases</p>
                                                    <p><span class="bold">Chairpersons : Jaetaek Kim</span> (Chung-Ang
                                                        University, Republic of Korea), <br><span class="bold">Ki Woo
                                                            Kim</span> (Yonsei University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of
                                                        Korea, Republic of Korea), Kyung Ae Lee (Jeonbuk National
                                                        University)</p>
                                                    <ul>
                                                        <li>In this session, Professor Thiruma V. Arumugam will
                                                            elucidate on the transformative effects of dietary
                                                            restriction on vascular dementia, providing invaluable
                                                            insights into how our eating habits can directly impact our
                                                            cognitive health. Following him, Professor Dong Gyu Jo will
                                                            elaborate on adiponectin's role in Alzheimer's Disease,
                                                            offering clues for potential therapeutic strategies. Lastly,
                                                            Professor Theresia Handayani Mina will explore the link
                                                            between body fat, metabolic risks, and cognitive function.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Hallmarks of Brain Aging: Adaptive and Pathological
                                                            Modification by Metabolic States. Cell Metab. 2018 Jun
                                                            5;27(6):1176-1199.<br />
                                                            2. Physiology and pharmacology of amyloid precursor protein.
                                                            Pharmacol Ther. 2022 Jul;235:108122.<br />
                                                            3. Adiposity impacts cognitive function in Asian
                                                            populations: an epidemiological and Mendelian Randomization
                                                            study. Lancet Reg Health West Pac. 2023 Feb 14;33:100710.
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
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        Dietary Restriction and Vascular Dementia
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe
                                                                        University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        Role of Adiponectin Signaling in Alzheimer's
                                                                        Disease
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dong-Gyu Jo</p>(Sungkyunkwan
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        The Impact of Adiposity and Cognitive Function:
                                                                        Closer than You Think
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Theresia Handayani Mina</p>
                                                                        (Nanyang Technological University, Singapore)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jang Won Son</p>(The Catholic
                                                                        University of Korea, Republic of Korea), <br>
                                                                        <p class="bold">Kyung Ae Lee</p>(Jeonbuk
                                                                        National University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="opening_address_2">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_1_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
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
                                                                    <td>11:10-11:40</td>
                                                                    <td class="bold">
                                                                        Adipose Tissue – A Treasure Box for Discoveries
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Matthias Blüher</p>
                                                                        (University of Leipzig, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:50-12:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 2</p>
                                                    <p><span class="bold">Chairperson : Kyung-Soo Kim</span> (The
                                                        Catholic University of Korea, Republic of Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td>12:00-13:00</td>
                                                                    <td class="bold">
                                                                        Novel Enhanced SGLT2 Inhibitor 'Enavogliflozin'
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yun Kyung Cho</p>(Univeristy of
                                                                        Ulsan, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                                                <td>14:00-15:30</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 6 : Clinical Exercise with Obesity
                                                    </p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Hyo Youl Moon</span> (Seoul
                                                        National University, Republic of Korea),<br />
                                                        <span class="bold">Minchul Lee</span> (CHA University, Republic
                                                        of Korea)
                                                    </p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td class="bold">
                                                                        Mild Exercise May Alleviate Memory Dysfunction
                                                                        and Regulate Hippocampal Lactate Metabolism in
                                                                        Type II Diabetic Rats
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hideaki Soya</p>(University of
                                                                        Tsukuba, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                        Beyond Weight Loss: Unveiling the Vital Roles of
                                                                        Exercise in Conquering Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sukho Lee</p>(Texas A & M
                                                                        University, USA)
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                        From Exercise to Lifestyle Coaching: A Data
                                                                        based Wellness Coaching System
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Jung Gi Hong</p>(CHA University,
                                                                        Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <!-- <td class="text_r panels">
                                                                        <p><span class="bold">Kyeongho Byun</span> (Incheon National University, Republic of Korea),</p>
                                                                        <p><span class="bold">Min-Seong Ha</span> (University of Seoul, Republic of Korea)</p>
                                                                    </td> -->
                                                                    <td class="text_r">
                                                                        <p class="bold">Kyeongho Byun</p>(Incheon
                                                                        National University, Republic of Korea),<br>
                                                                        <p class="bold">Min-Seong Ha</p>(University of
                                                                        Seoul, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_2_2">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee
                                                        University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Il-Young Kim (Gachon University, Republic
                                                        of Korea)</p>
                                                    <ul>
                                                        <li>Prof. Wolfe is widely respected as the world’s foremost
                                                            authority on stable isotope tracer methodology and on amino
                                                            acid/protein nutrition. His research focuses on the
                                                            regulation of muscle metabolism, particularly as affected by
                                                            aging, obesity, insulin resistance, and stressors such as
                                                            sepsis and cancer in humans. Prof. Wolfe has developed
                                                            numerous metabolic tracing models using stable isotope
                                                            tracers to quantify a variety of metabolic processes in
                                                            humans, which has formed the foundation of our understanding
                                                            of many aspects of normal and abnormal metabolism of
                                                            glucose, fatty acid, and amino acid/protein in humans. In
                                                            his plenary lecture, the particular emphasis will be placed
                                                            on the response of fatty acid kinetics to different
                                                            conditions (exercise, glucose intake, obesity) in the
                                                            context of the triglyceride-fatty acid cycle, with his more
                                                            than 50 years of experience in the human metabolic research.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Kim IY et al., Tracing metabolic flux in vivo: basic
                                                            model structures of tracer methodology. 2022
                                                            Sep;54(9):1311-1322. doi: 10.1038/s12276-022-00814-z.<br />
                                                            2. Miyoshi H et al., Hormonal control of substrate cycling
                                                            in humans, J Clin Invest. 1988. 1988 May;81(5):1545-55. doi:
                                                            10.1172/JCI113487.<br />
                                                            3. Sidossis LS, Wolfe RR. Glucose and insulin-induced
                                                            inhibition of fatty acid oxidation: the glucose-fatty acid
                                                            cycle reversed. Am J Physiol. 1996 Apr;270(4 Pt 1):E733-8.
                                                            doi: 10.1152/ajpendo.1996.270.4.E733. PMID: 8928782.
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
                                                                    <td>15:40-16:10</td>
                                                                    <td class="bold">
                                                                        Understanding Human Metabolic Dysregulation in
                                                                        Vivo Using Stable Isotope Tracers: More than 50
                                                                        Years of Experience
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert R. Wolfe</p>(University
                                                                        of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:20</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:20-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 10 : Neuropsychological Aspect of Obesity</p>
                                                    <p><span class="bold">Chairpersons : Kyu Chang Won</span> (Yeungnam University, Republic of Korea), <br><span class="bold">Min-Seon Kim</span> (University of Ulsan, Republic of Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
													<p class="bold">Organizer: Hyung Jin Choi (Seoul National University, Republic of Korea)</p>
													<ul>
														<li>In this session, we will delve into the intricate interplay between neuropsychology and obesity. Dr. Yun Ha Jeong from the Korea Brain Research Institute will discuss the impact of obesity and HDL concentration on the pathology of Alzheimer's disease (AD). Through an analysis of AD pathological changes in 5XFAD mice after obesity induction through a high-fat diet, Dr. Jeong presents a noteworthy phenomenon where the increase in HDL and APOA-I serum levels mitigates AD features, offering a potential avenue for novel therapeutic strategies.</li>
														<li>Subsequently, Professor Kwang Wei Tham from  Singapore Woodlands Health will elucidate how weight-related biases affect the physical, mental health, and obesity management of individuals. Lastly, Professor Youn Huh from Eulji University will explore the link between type 2 diabetes and dementia, emphasizing the growing relevance of preventing and managing these conditions, and discussing how type 2 diabetes escalates dementia risks, urging the derivation of preventive strategies based on research findings in light of the increasing prevalence of both diseases.</li>
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
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        The Effect of Obesity and HDL Concentration on
                                                                        AD Pathology
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Yun Ha Jeong</p>(Korea Brain
                                                                        Research Institute (KBRI), Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                        Weight Bias and Stigma: The Occult Barrier in
                                                                        Obesity Care
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Kwang Wei Tham</p>(Woodlands
                                                                        Health, Singapore)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        Type 2 Diabetes and Dementia
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Youn Huh</p>(Eulji University,
                                                                        Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ga Eun Nam</p>(Korea University,
                                                                        Republic of Korea),<br />
                                                                        <p class="bold">Young Sang Lyu</p>(Chosun
                                                                        University, Republic of Korea)
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
                            <li name="breakfast_symposium_2">
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
                                                    <p class="font_20 bold">Breakfast Symposium 2</p>
                                                    <p><span class="bold">Chairperson : Changhyun Lee</span> (Seoul
                                                        Happiness Clinic of Internal Medicine)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td class="bold">
                                                                        Bupropion+Naltrexone: Using a Phenotype-guided
                                                                        Approach for the Treatment of Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seo Young Kang</p> (Eulji
                                                                        University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>08:20-08:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_1_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>08:30-09:10</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon
                                                        University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Jang Won Son (The Catholic University of
                                                        Korea, Republic of Korea)</p>
                                                    <ul>
                                                        <li>Professor Thiruma V. Arumugam, a distinguished researcher in
                                                            the fields of physiology and pharmacology at La Trobe
                                                            University, Australia, is pushing the boundaries of
                                                            neuroscience and metabolism. In his upcoming lecture, he
                                                            will discuss how his work on intermittent metabolic
                                                            switching has enhanced our comprehension of its effect on
                                                            brain health, paving the way for potential therapeutic
                                                            interventions.</li>
                                                        <li>His recent publication in Theranostics, titled
                                                            "Time-restricted feeding modulates the DNA methylation
                                                            landscape, attenuates hallmark neuropathology and cognitive
                                                            impairment in a mouse model of vascular dementia," has
                                                            presented novel insights into the therapeutic potential of
                                                            intermittent metabolic switching, offering promising
                                                            strategies for managing and potentially reversing cognitive
                                                            impairment in dementia.</li>
                                                        <li>Further expanding our understanding, Professor Arumugam's
                                                            article in Cell Metabolism, "Hallmarks of Brain Aging:
                                                            Adaptive and Pathological Modification by Metabolic States,"
                                                            continues to revolutionize our perspective on the role of
                                                            metabolism in brain aging.</li>
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
                                                                    <td>08:30-09:00</td>
                                                                    <td class="bold">
                                                                        Intermittent Metabolic Switching and Brain
                                                                        Health
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Thiruma V. Arumugam</p>(La Trobe
                                                                        University, Australia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:00-09:10</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>09:10-09:20</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>09:20-10:50</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 3 : Digital Therapeutics</p>
                                                    <p>
                                                        <span class="bold">Chairpersons : Won Young Lee</span>
                                                        (Sungkyunkwan University, Republic of Korea),<br />
                                                        <span class="bold">Sang-Yong Kim</span> (Chosun University,
                                                        Republic of Korea)
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Sang Youk Rhee (Kyung Hee University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>This session aims to explore the latest status of
                                                            intervention methodology based on Information and
                                                            Communication Technologies (ICTs) for the management of
                                                            diverse chronic diseases, such as obesity and metabolic
                                                            syndrome. First, Professor Ki-Hyun Jeon from Seoul National
                                                            University will open the session by introducing the latest
                                                            research advancements in the related field, including his
                                                            own studies. Doctor Laura Falvey from Reset Health will then
                                                            present highly reliable evidence for the remarkable effects
                                                            of digital treatment methods based on the results of
                                                            randomized controlled trials (RCTs) from the Roczen
                                                            Programme, which were recently released at the European
                                                            Congress on Obesity. Lastly, Professor Sang Youl Rhee from
                                                            Kyung Hee University will discuss the effectiveness of the
                                                            ICT-based intervention and the necessary approaches for
                                                            their wide use in various chronic disease patients in the
                                                            future, drawing on a wealth of literature introduced thus
                                                            far, including systematic literature reviews.</li>
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
                                                                    <td>09:20-09:45</td>
                                                                    <td class="bold">
                                                                        The Role of Digital Innovations in Obesity and
                                                                        Metabolic Syndrome Treatment
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ki-Hyun Jeon</p>(Seoul National
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:45-10:10</td>
                                                                    <td class="bold">
                                                                        The Roczen Programme: A Digitally-Enabled,
                                                                        Medically Led Intervention for Obesity and T2DM
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Laura Falvey</p>(Reset Health,
                                                                        UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10-10:35</td>
                                                                    <td class="bold">
                                                                        Management of Obesity and Metabolic Diseases
                                                                        through Digital Intervention: Current Evidence
                                                                        and Future Prospects
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sunyoung Kim</p>(Kyung Hee
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:35-10:50</td>
                                                                    <td class="bold">Panel Discussion</td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Sang Youl Rhee</p>(Kyung Hee
                                                                        University, Republic of Korea),
                                                                        <p class="bold">Hyunji Sang</p>(Kyung Hee
                                                                        University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>10:50-11:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li class="opening_address_3">
                                <div class="table_wrap detail_table_common x_scroll border_bottom_70">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:00-11:10</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_1_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10-11:50</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Soo Lim (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>Matthias Blüher is Head of the Obesity Outpatient Clinic for
                                                            Adults at the University of Leipzig Department of Medicine
                                                            in Leipzig, Germany. He is Professor of Molecular
                                                            Endocrinology, with board certifications in Internal
                                                            Medicine, Endocrinology and Diabetology. From 2006 to 2012,
                                                            Professor Blüher served as Head of the Clinical Research
                                                            Group ‘Atherobesity,’ and since 2013, he has been Speaker of
                                                            the Collaborative Research Center on obesity mechanisms.
                                                        </li>
                                                        <li>Professor Blüher has won several awards, including the
                                                            Obesity Research Award of the German Society for the Study
                                                            of Obesity, the Ferdinand-Bertram-Prize of the German
                                                            Diabetes Association, and the Rising Star Lecture at the
                                                            44th European Association for the Study of Diabetes (EASD)
                                                            meeting. More recently, he received the Hans Christian
                                                            Hagedorn Award from the German Diabetes Association in 2011
                                                            and the Minkowski Award from the EASD in 2015.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji
                                                            L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New
                                                            insights into the treatment of obesity. Diabetes Obes Metab.
                                                            2023 Apr 13. doi: 10.1111/dom.15077.<br />
                                                            2. Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020
                                                            May 1;41(3):bnaa004.
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
                                                                    <td>11:10-11:40</td>
                                                                    <td class="bold">
                                                                        Adipose Tissue – A Treasure Box for Discoveries
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Matthias Blüher</p>
                                                                        (University of Leipzig, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>11:50-12:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="luncheon_symposium_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>12:00-13:00</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 3</p>
                                                    <p><span class="bold">Chairperson : Jae-Heon Kang</span>
                                                        (Sungkyunkwan University, Republic of Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td>12:00-13:00</td>
                                                                    <td class="bold">
                                                                        Optimum Clinical Approach to Combination-Use of
                                                                        SGLT2i+DPP4i for T2D Patients with Sidapvia
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Soo Kyoung Kim</p>(Gyeongsang
                                                                        National University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>13:00-14:00</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                                                    <p class="font_20 bold">Symposium 7 : Metabolic Signaling in
                                                        Obesity-related Diseases</p>
                                                    <p><span class="bold">Chairpersons : Chul Sik Kim</span> (Yonsei
                                                        University, Republic of Korea), <br><span class="bold">Yun-Hee
                                                            Lee</span> (Seoul National University, Republic of Korea)
                                                    </p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer : Yun-Hee Lee (Seoul National University,
                                                        Republic of Korea)</p>
                                                    <ul>
                                                        <li>This conference session will explore the intriguing topic of
                                                            "Metabolic Signaling in Obesity-related Diseases." Our
                                                            esteemed speakers will present cutting-edge research and
                                                            share their valuable insights. Our first speaker, Dr. Zach
                                                            Gerhart-Hines, will showcase his recent accomplishments in
                                                            the exploration of novel GPCR pathways for the treatment of
                                                            obesity and type 2 diabetes. </li>
                                                        <li>Next, we have Dr. EH Koh, who will enlighten the audience
                                                            about the pivotal role of the NLRP3 inflammasome in adipose
                                                            tissue. Lastly, our final speaker Dr. JK Seong will delve
                                                            into the metabolic roles of the microbiota in obesity mouse
                                                            models., offering potential avenues for future research and
                                                            treatment options.</li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br>
                                                            1. Gerhart-Hines Z et al. Lipolysis drives expression of the
                                                            constitutively active receptor GPR3 to induce adipose
                                                            thermogenesis. Cell. 2021 Jun 24;184(13):3502-3518.e33.<br>
                                                            2. Koh EH, Lee KU et al. Mitophagy deficiency increases
                                                            NLRP3 to induce brown fat dysfunction in mice. Autophagy.
                                                            2021 May;17(5):1205-1221.<br>
                                                            3. Seong JK. et al. Bifidobacterial carbohydrate/nucleoside
                                                            metabolism enhances oxidative phosphorylation in white
                                                            adipose tissue to protect against diet-induced obesity.
                                                            Microbiome. 2022 Nov 4;10(1):188.
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
                                                                    <td>14:00-14:25</td>
                                                                    <td class="bold">
                                                                        Uncovering Novel GPCR Pathways for the Treatment
                                                                        of Obesity and Type 2 Diabetes
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Zachary Gerhart-Hines</p>
                                                                        (University of Copenhagen, Denmark)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:25-14:50</td>
                                                                    <td class="bold">
                                                                        The Double-edged Role of the NLRP3 Inflammasome
                                                                        in Adipose Tissue
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Eun Hee Koh</p>(University of
                                                                        Ulsan, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:50-15:15</td>
                                                                    <td class="bold">
                                                                        Microbiota in Obesity-related Metabolic Diseases
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Je Kyung Seong</p>(Seoul
                                                                        National University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:15-15:30</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Dughyun Choi</p>(Soonchunhyang
                                                                        University, Republic of Korea),<br />
                                                                        <p class="bold">Hye Yeon Koo</p>(Seoul National
                                                                        University, Republic of Korea)
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>15:30-15:40</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="plenary_lecture_2_3">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:40-16:20</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee
                                                        University, Republic of Korea)</p>
                                                    <button class="btn gray2_btn program_detail_btn">Preview</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    <p class="bold">Organizer: Il-Young Kim (Gachon University, Republic
                                                        of Korea)</p>
                                                    <ul>
                                                        <li>Prof. Wolfe is widely respected as the world’s foremost
                                                            authority on stable isotope tracer methodology and on amino
                                                            acid/protein nutrition. His research focuses on the
                                                            regulation of muscle metabolism, particularly as affected by
                                                            aging, obesity, insulin resistance, and stressors such as
                                                            sepsis and cancer in humans. Prof. Wolfe has developed
                                                            numerous metabolic tracing models using stable isotope
                                                            tracers to quantify a variety of metabolic processes in
                                                            humans, which has formed the foundation of our understanding
                                                            of many aspects of normal and abnormal metabolism of
                                                            glucose, fatty acid, and amino acid/protein in humans. In
                                                            his plenary lecture, the particular emphasis will be placed
                                                            on the response of fatty acid kinetics to different
                                                            conditions (exercise, glucose intake, obesity) in the
                                                            context of the triglyceride-fatty acid cycle, with his more
                                                            than 50 years of experience in the human metabolic research.
                                                        </li>
                                                        <li>
                                                            <span class="font_inherit bold">• References</span><br />
                                                            1. Kim IY et al., Tracing metabolic flux in vivo: basic
                                                            model structures of tracer methodology. 2022
                                                            Sep;54(9):1311-1322. doi: 10.1038/s12276-022-00814-z.<br />
                                                            2. Miyoshi H et al., Hormonal control of substrate cycling
                                                            in humans, J Clin Invest. 1988. 1988 May;81(5):1545-55. doi:
                                                            10.1172/JCI113487.<br />
                                                            3. Sidossis LS, Wolfe RR. Glucose and insulin-induced
                                                            inhibition of fatty acid oxidation: the glucose-fatty acid
                                                            cycle reversed. Am J Physiol. 1996 Apr;270(4 Pt 1):E733-8.
                                                            doi: 10.1152/ajpendo.1996.270.4.E733. PMID: 8928782.
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
                                                                    <td>15:40-16:10</td>
                                                                    <td class="bold">
                                                                        Understanding Human Metabolic Dysregulation in
                                                                        Vivo Using Stable Isotope Tracers: More than 50
                                                                        Years of Experience
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Robert R. Wolfe</p>(University
                                                                        of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:10-16:20</td>
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
                            <li name="break" class="border_bottom_70">
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_gray_bg">
                                                <td>16:20-16:30</td>
                                                <td>
                                                    <p class="font_20 bold">Break</p>
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
                                                <td>16:30-18:00</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 11 : Social and Environmental
                                                        Determinants: Nutritional View of Obesity</p>
                                                    <p><span class="bold">Chairpersons : Cho-il Kim</span> (Seoul
                                                        National University, Republic of Korea), <br><span
                                                            class="bold">Eun Mi Kim</span> (Kangbuk Samsung Hospital,
                                                        Republic of Korea)</p>
                                                    <!-- <button class="btn gray2_btn program_detail_btn">Preview</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="program_detail_td">
                                                    will be updated.
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
                                                                    <td>16:30-16:55</td>
                                                                    <td class="bold">
                                                                        Social Determinants of Health and Obesity and
                                                                        Approaches to Obesity Prevention and Management
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Seung-Yeon Lee</p>(University of
                                                                        Cincinnati, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:55-17:20</td>
                                                                    <td class="bold">
                                                                        Influence of Social and Environmental Factors on
                                                                        Nutrition and Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Ji-Yun Hwang</p>(Sangmyung
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20-17:45</td>
                                                                    <td class="bold">
                                                                        Socioeconomic Inequalities in Obesity
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Hyeon Chang Kim</p>(Yonsei
                                                                        University, Republic of Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:45-18:00</td>
                                                                    <td class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td class="text_r">
                                                                        <p class="bold">Oh Yoen Kim</p>(Dong-A
                                                                        University, Republic of Korea),<br />
                                                                        <p class="bold">Min-Jeong Shin</p>(Korea
                                                                        University, Republic of Korea)
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
                  
                </div>
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