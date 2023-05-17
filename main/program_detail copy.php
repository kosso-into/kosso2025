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
							$("html, body").animate({scrollTop: this_top - 150}, 1000);
						}
					  });

				  });
		</script>';


?>



<section class="container program_detail">
    <h1 class="page_title">Scientific Program</h1>
    <div>
        <ul class="tab_green centerT">
            <li id="tab1" class="on"><a href="javascript:;">Sep.7(Thu)
                </a></li>
            <li id="tab2"><a href="javascript:;">Sep.8(Fri)
                </a></li>
            <li id="tab3"><a href="javascript:;">Sep.9(Sat)
                </a></li>
        </ul>
        <div class="tab_wrap">
            <div class="tab_cont on">
                <!-- <img class="coming" src="./img/coming.png" /> -->
                <ul class="tab_li">
                    <li id="tab1" class="on"><a href="javascript:;">Room1(3F)</a></li>
                    <li id="tab2"><a href="javascript:;">Room2(3F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room3(3F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room4(5F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room5(6F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room6(5F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room7(6F)</a></li>
                </ul>
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="pre_congress_symposium_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.7(Thu)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>17:00~18:30(90”)</td>
                                                <td>
                                                    <p class="font_20 bold">Pre-congress Symposium 1 30th Anniversary Session of KSSO (K)</p>
                                                    <p><span class="bold">Chairperson : Young Kil Choi</span> (Kyung Hee University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<span class="bold">Chairperson</span> : Tae sun park (Jeonbuk National University, Korea), Jee-Hyun Kang (Konyang University, Korea)
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>17:00~17:20(20")</td>
                                                                    <td class="bold">
                                                                        Effectiveness of Information and Communications Technology-based Interventions for Obesity and Metabolic Syndrome
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sang Youl Rhee</p>
																		(Kyung Hee University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20~17:40(20")</td>
                                                                    <td class="bold">
                                                                        Female Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yoon Jeong Cho</p>
																		(Daegu Catholic University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:40~18:00(20")</td>
                                                                    <td class="bold">
                                                                        Obesity and Healthy Life Expectancy
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ye Seul Yang</p>
																		(The Catholic University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="3">18:00~18:30(30")</td>
                                                                    <td rowspan="3" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Suk Chon</p>
																		(Kyung Hee University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Beom-Taek Kim</p>
																		(Ajou University, Korea)
                                                                    </td>
                                                                </tr>
																<tr>
                                                                    <td>
                                                                        <p class="bold">Ji Hi Haam</p>
																		(CHA University, Korea)
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
                            <li name="satellite_symposium_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.1(Thu)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>19:00~20:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 1 (Kwangdong)</p>
                                                    <p><span class="bold">Chairperson : Seung Joon Oh </span>(Kyung Hee University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>19:00~20:00(60")</td>
                                                                    <td class="bold">
                                                                        Obesity, a Disease that Requires Long-term
                                                                        Treatment (Efficacy and Safety of COR)
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jae Hyuk Lee</p>(Hanyang
                                                                        University, Korea)
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="pre_congress_symposium_2">
                                <div class="clearfix2 caption">
                                    <span>Sep.1(Thu)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>17:00~18:30(90”)</td>
                                                <td>
                                                    <p class="font_20 bold">Pre-congress Symposium 2 KSSO: 2022 National
                                                        Obesity Strategies and Guideline (K)</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Tae Sun Park</span> (Jeonbuk
                                                        National University, Korea) /
                                                        <span class="bold">Jee-Hyun Kang</span> (Konyang University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>17:00~17:20(20")</td>
                                                                    <td class="bold">
                                                                        Effectiveness of Information and Communications
                                                                        Technology-based Interventions for Obesity and
                                                                        Metabolic Syndrome
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sang Youl Rhee</p>(Kyung Hee
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:20~17:40(20")</td>
                                                                    <td class="bold">
                                                                        Female Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yoon Jeong Cho</p>(Daegu
                                                                        Catholic University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:40~18:00(20")</td>
                                                                    <td class="bold">
                                                                        Obesity and Healthy Life Expectancy
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ye Seul Yang</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="3">18:00~18:30(30")</td>
                                                                    <td rowspan="3" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Suk Chon</p>(Kyung Hee
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Beom-Taek Kim</p>(Ajou
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Ji Hi Haam</p>(CHA University,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>18:30~19:00(30”)</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.1(Thu)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>19:00~20:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Satellite Symposium 2 (Daiichi-Sankyo)</p>
                                                    <p><span class="bold">Chairperson : Minsu Park</span> (Seoul ND
                                                        Clinic, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>19:00~20:00(60")</td>
                                                                    <td class="bold">
                                                                        Update on Evidence-Based Management for High
                                                                        Risk Patients with Olmesartan
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Youngwoo Jang</p>(Gachon
                                                                        University, Korea)
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="welcome_cocktail_party">
                                <div class="clearfix2 caption">
                                    <span>Sep.1(Thu)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="purple_bg">
                                                <td>18:30~21:00(150")</td>
                                                <td>
                                                    <p class="font_20 bold mb_0">Welcome Cocktail Party</p>
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
            <div class="tab_cont">
                <ul class="tab_li">
                    <li id="tab1" class="on"><a href="javascript:;">Room1(3F)</a></li>
                    <li id="tab2"><a href="javascript:;">Room2(3F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room3(3F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room4(5F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room5(6F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room6(5F)</a></li>
                    <li id="tab3"><a href="javascript:;">Room7(6F)</a></li>
                </ul>
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>07:30~08:20(50")</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 1 (CELLTRION PHARM)</p>
                                                    <p><span class="bold">Chairperson : Won Jun Kim</span> (University
                                                        of Ulsan, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30~08:20(50")</td>
                                                                    <td class="bold">
                                                                        Perspective in T2DM Patients with NAFLD:
                                                                        Pioglitazone
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yeon Kyung Choi</p>(Kyungpook
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>08:20~08:30(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="plenary_lecture_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>08:30~09:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Youngkil Choi</span> (Kyung Hee University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30~09:10(40")</td>
                                                                    <td class="bold">
                                                                        Neural Estimation of Current and Future
                                                                        Physiological States
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Mark L. Andermann</p>(Harvard
                                                                        Medical School, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:10~09:20(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="symposium_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 1 : Health Consequences of Obesity (1)</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Dooman Kim</span> (Hallym
                                                        University, Korea) /
                                                        <span class="bold">Kyung-Soo Kim</span> (The Catholic University
                                                        of Korea, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:40(20")</td>
                                                                    <td class="bold">
                                                                        Obesity, Metabolic Syndrome, and Heart Failure 
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Nathan D. Wong</p>(University of
                                                                        California,Irvine, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:40~10:00(20")</td>
                                                                    <td class="bold">
                                                                        Obesity Paradox in Heart Failure
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">ByungSu Yoo</p>(Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:00~10:20(20")</td>
                                                                    <td class="bold">
                                                                        Treatment of Obesity in the Patient with
                                                                        Established HF and CVD
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hyuktae Kwon</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">10:20~10:50(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hae-Jin Ko</p>(Kyungpook
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Jong-Chan Youn</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50~11:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="opening_address">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:00~11:10(10")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address - Korea Society for
                                                        Study of Obesity Chairman Kijin Kim</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10~11:50(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Chang Beom Lee</span> (Hanyang University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:10~11:50(40")</td>
                                                                    <td class="bold">
                                                                        Pediatric Metabolic and Bariatric Surgery;
                                                                        Evidence, Outcomes and Ongoing Challenges
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Marc P. Michalsky</p>
                                                                        (Nationwide Children’s Hospital and The Ohio
                                                                        State University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:50~12:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="luncheon_symposium_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>12:00~13:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 1 (Novo Nordisk)</p>
                                                    <p><span class="bold">Chairperson : Hyung Joon Yoo</span> (CM
                                                        Hospital, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:00~13:00(60")</td>
                                                                    <td class="bold">
                                                                        New Insight on GLP-1 RAs in Managing Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Bumjo Oh</p>(Seoul National
                                                                        University, Korea)
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

                            <li name="poster_exhibition_d2">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00~14:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_5">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>14:00~15:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 5 : Drug Treatment of Obesity in
                                                        Adults</p>
                                                    <p>

                                                        <span class="bold">Chairperson : Jang Won Son</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">Yang Hyun Kim</span> (Korea University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00~14:20(20")</td>
                                                                    <td class="bold">
                                                                        The Efficacy and Safety of Dulaglutide 3.0mg and
                                                                        4.5mg for Treatment of Type 2 Diabetes
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">David A. Cox</p>(Eli Lilly and
                                                                        Company, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20~14:40(20")</td>
                                                                    <td class="bold">
                                                                        Treatment of Obesity with Incretin-based
                                                                        Therapies: Selective GLP-1 Receptor Agonism
                                                                        (Semaglutide) versus Dual Agonism of GIP and
                                                                        GLP-1 Receptors (Tirzepatide)
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Juan Pablo Frias</p>(Velocity
                                                                        Clinical Research, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:40~15:00(20")</td>
                                                                    <td class="bold">
                                                                        SGLT2 Inhibitor Based Obesity Management
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jun Hwa Hong</p>(Eulji
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">15:00~15:30(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Kyung-Hee Park</p>(Hallym
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Jae-Han Jeon</p>(Kyungpook
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30-15:40(10")</td>
                                                                    <td colspan="2">Break</td>
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
                            <li name="plenary_lecture_2">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>15:40~16:20(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Soo Lim</span> (Seoul National University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:40~16:20(40")</td>
                                                                    <td class="bold">
                                                                        Efficacy and Safety of Tirzepatide in Obesity
                                                                        Management
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Melanie J Davies</p>(Leicester
                                                                        General Hospital, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:20~16:30(10")</td>
                                                                    <td colspan="2">Break</td>
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:30~18:00(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 9 : Life Course Approaches in
                                                        Obesity Care </p>
                                                    <p>
                                                        <span class="bold">Chairperson : Young-Sung Suh</span> (Keimyung
                                                        University, Korea) /
                                                        <span class="bold">Kyung-Hee Park</span> (Hallym University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30~16:50(20")</td>
                                                                    <td class="bold">
                                                                        Treatment of Adolescent Obesity: New Therapeutic
                                                                        Options
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Nick Finer</p>(University
                                                                        College London, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:50~17:10(20")</td>
                                                                    <td class="bold">
                                                                        The Truth about Menopause and Weight Gain: How
                                                                        to Manage Obesity in Perimenopausal Women
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jee-Hyun Kang</p>(Konyang
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:10~17:30(20")</td>
                                                                    <td class="bold">
                                                                        Obesity in Older Adults: Sarcopenia and Low
                                                                        Muscle Mass
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ji Yoo</p>(Kirk Kerkorian School
                                                                        of Medicine, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">17:30~18:00(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Bumjo Oh</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Hye Yeon Koo</p>(Seoul National
                                                                        University, Korea)
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_2">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>07:30~08:20(50")</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 2 (LG Chem)</p>
                                                    <p><span class="bold">Chairperson : Jae Hyuk Lee</span> (Hanyang University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30~08:20(50")</td>
                                                                    <td class="bold">
                                                                        The Combination of DPP-4 Inhibitor Plus SGLT2
                                                                        Inhibitor as Attractive Treatment Option: From
                                                                        Rationale to Clinical Aspects
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Suk Chon</p>(Kyung Hee
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>08:20-08:30(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>08:30~09:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Youngkil Choi</span> (Kyung Hee University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30~09:10(40")</td>
                                                                    <td class="bold">
                                                                        Neural Estimation of Current and Future
                                                                        Physiological States
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Mark L. Andermann</p>(Harvard
                                                                        Medical School, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:10~09:20(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 2 : The Gut Microbiome in Health:
                                                        Beyond Obesity</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Changhee Jung</span>
                                                        (University of Ulsan, Korea) /
                                                        <span class="bold">Wook Song</span> (Seoul National University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:40(20")</td>
                                                                    <td class="bold">
                                                                        Gut Microbiota-Adipokine Axis as Molecular
                                                                        Transducers of Exercise in Diabetes Prevention
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Aimin Xu</p>(The University of
                                                                        Hong Kong, New Zealand)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:40~10:00(20")</td>
                                                                    <td class="bold">
                                                                        An Integrated Understanding of the Holobiome of
                                                                        Korean Population with Type 2 Diabetes
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sunjae Lee</p>(Gwangju Institute
                                                                        of Science and Technology, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:00~10:20(20")</td>
                                                                    <td class="bold">
                                                                        Understanding Microbiome for Human Health and
                                                                        Diseases
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Bong-Soo Kim</p>(Hallym
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">10:20~10:50(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jang Won Son</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Ara Koh</p>(Postech, Korea)
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:00~11:10(10")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address - Korea Society for
                                                        Study of Obesity Chairman Kijin Kim</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10~11:50(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Chang Beom Lee</span> (Hanyang University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:10~11:50(40")</td>
                                                                    <td class="bold">
                                                                        Pediatric Metabolic and Bariatric Surgery;
                                                                        Evidence, Outcomes and Ongoing Challenges
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Marc P. Michalsky</p>(Nationwide
                                                                        Children’s Hospital and The Ohio State
                                                                        University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:50~12:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>12:00~13:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 2 (MSD)</p>
                                                    <p><span class="bold">Chairperson : Yongseong Kim</span> (Design Hospital, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:00~13:00(60")</td>
                                                                    <td class="bold">
                                                                        How to Find the Optimal Combination Therapy for
                                                                        Patients with Type 2 Diabetes
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Il Seong Nam-Goong</p>
                                                                        (University of Ulsan, Korea)
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

                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00~14:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li name="symposium_6">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>14:00~15:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 6 : Exercise</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Kijin Kim</span> (Keimyung
                                                        University, Korea) /
                                                        <span class="bold">Sewon Lee</span> (Incheon National
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00~14:20(20")</td>
                                                                    <td class="bold">
                                                                        Lifestyle Intervention Therapies to Improve
                                                                        Functional Status of Older Adults with Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Dennis T. Villareal</p>(Baylor
                                                                        College of Medicine, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20~14:40(20")</td>
                                                                    <td class="bold">
                                                                        Exercise in the Prevention of Obesity: Metabolic
                                                                        Health and Appetite Regulation
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Masashi Miyashita</p>(Waseda
                                                                        University, Japan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:40~15:00(20")</td>
                                                                    <td class="bold">
                                                                        Physical Activity Promotion to Prevent Obesity
                                                                        in Individuals with Disabilities
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jooyeon Jin</p>(University of
                                                                        Seoul, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">15:00~15:30(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hyuntae Park</p>(Dong-A
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Justin Y. Jeon</p>(Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30~15:40(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>15:40~16:20(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Soo Lim</span> (Seoul National
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:40~16:20(40")</td>
                                                                    <td class="bold">
                                                                        Efficacy and Safety of Tirzepatide in Obesity
                                                                        Management
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Melanie J Davies</p>(Leicester
                                                                        General Hospital, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30~15:40(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:30~18:00(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 10 : Obesity and Neurodegenerative
                                                        Diseases</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Sung Soo Kim</span> (Chungnam
                                                        National University, Korea) /
                                                        <span class="bold">Sangmo Hong</span> (Hanyang University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30~16:50(20")</td>
                                                                    <td class="bold">
                                                                        Obesity, Cognitive Function, and Mortality
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hannah Oh</p>(University of
                                                                        California, Irvine, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:50~17:10(20")</td>
                                                                    <td class="bold">
                                                                        Overweight, Obesity and Parkinson's Disease:
                                                                        Neglected Issues
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jin-Sun Jun</p>(Hallym
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:10~17:30(20")</td>
                                                                    <td class="bold">
                                                                        New Clinical Uses of GLP-1 Agonist
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Dong Wook Kim</p>(Boston
                                                                        University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">17:30~18:00(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ji Won Yoon</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Kye-Yeung Park</p>(Hanyang
                                                                        University, Korea)
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>08:30~09:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Youngkil Choi</span> (Kyung Hee University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30~09:10(40")</td>
                                                                    <td class="bold">
                                                                        Neural Estimation of Current and Future
                                                                        Physiological States
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Mark L. Andermann</p>(Harvard
                                                                        Medical School, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:10-09:20(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 3 : Neuroscience in Obesity</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Min-Seon Kim</span> (University
                                                        of Ulsan, Korea) /
                                                        <span class="bold">Ja-Hyun Baik</span> (Korea University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:40(20")</td>
                                                                    <td class="bold">
                                                                        Neural Mechanism of Hunger-gated Food-seeking
                                                                        and Interacting
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hyung Jin Choi</p>(Seoul
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:40~10:00(20")</td>
                                                                    <td class="bold">
                                                                        Ontogeny of Hunger
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Marcelo Dietrich</p>(Yale
                                                                        University School of Medicine, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:00~10:20(20")</td>
                                                                    <td class="bold">
                                                                        Hypothalamic Glucagon Like Peptide-1 Regulates
                                                                        Food Intake and Glucose Metabolism
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ji Liu</p>(University of Science
                                                                        and Technology of China, China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="3">10:20~10:50(30")</td>
                                                                    <td rowspan="3" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ki Woo Kim</p>(Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Jong-Woo Sohn</p>(KIST, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Jae Geun Kim</p>(Incheon
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>11:00~11:10(10")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Opening Address - Korea Society for
                                                        Study of Obesity Chairman Kijin Kim</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:10~11:50(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 1</p>
                                                    <p><span class="bold">Chairperson : Chang Beom Lee</span> (Hanyang University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:10~11:50(40")</td>
                                                                    <td class="bold">
                                                                        Pediatric Metabolic and Bariatric Surgery;
                                                                        Evidence, Outcomes and Ongoing Challenges
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Marc P. Michalsky</p>(Nationwide
                                                                        Children’s Hospital and The Ohio State
                                                                        University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:50-12:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>12:00~13:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 3 (Chong Kun Dang Pharm)
                                                    </p>
                                                    <p><span class="bold">Chairperson : Kyu Rae Lee</span> (Gachon
                                                        University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:00~13:00(60")</td>
                                                                    <td class="bold">
                                                                        Is There a More Effective Treatment for Obese
                                                                        Patients Who have Increased Due to COVID-19?
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yang Im Hur</p>(CHA University,
                                                                        Korea)
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00~14:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="symposium_7">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>14:00~15:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 7 : Adipocyte Biology</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Cheol-Young Park</span>
                                                        (Sungkyunkwan University, Korea) /
                                                        <span class="bold">Yun-Hee Lee</span> (Seoul National
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00~14:20(20")</td>
                                                                    <td class="bold">
                                                                        Analysis of Cold-Induced Brown Adipogenesis at
                                                                        Single Cell Resolution
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">James Granneman</p>(Wayne State
                                                                        University, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20~14:40(20")</td>
                                                                    <td class="bold">
                                                                        New Insights into Adipose Tissue Heterogeneity
                                                                        and Plasticity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Christian Wolfrum</p>(ETH
                                                                        Zürich, Schwerzenbach, Germany)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:40~15:00(20")</td>
                                                                    <td class="bold">
                                                                        Metabolic Flux in Brown Fat and Its Regulation
                                                                        by Nutrient Sensing Pathways
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Su Myung Jung</p>(Sungkyunkwan
                                                                        University , Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:00~15:30(30")</td>
                                                                    <td class="bold">

                                                                    </td>
                                                                    <!-- <td> -->
                                                                    <!-- <p class="bold">Yun-Hee Lee</p>(Seoul National University, Korea) -->
                                                                    <!-- <p class="bold">Chang-Myung Oh</p>(Gwangju Institute of Science and Technology (GIST), Korea) -->
                                                                    <!-- </td>
                                            </tr> -->
                                                                    <!-- <tr> -->
                                                                    <!-- 	<td> -->
                                                                    <!-- 		<p class="bold">Chang-Myung Oh</p>(Gwangju Institute of Science and Technology (GIST), Korea) -->
                                                                    <!-- 	</td> -->
                                                                    <!-- </tr> -->
                                                                    <!-- <tr> -->
                                                                    <!-- 	<td>15:30-15:40(10")</td> -->
                                                                    <!-- 	<td class="bold" colspan="2"> -->
                                                                    <!-- 		Break -->
                                                                    <!-- 	</td> -->
                                                                    <!-- </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>15:40~16:20(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 2</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Soo Lim</span> (Seoul National
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:40~16:20(40")</td>
                                                                    <td class="bold">
                                                                        Efficacy and Safety of Tirzepatide in Obesity
                                                                        Management
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Melanie J Davies</p>(Leicester
                                                                        General Hospital, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:20-16:30(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:30~18:00(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 11 : Healthy Low Carbohydrate
                                                        Diets for Obesity</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Kyeong Sook Yim</span> (The
                                                        University of Suwon, Korea) /
                                                        <span class="bold">YoonJu Song</span> (The Catholic University
                                                        of Korea, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30~16:50(20")</td>
                                                                    <td class="bold">
                                                                        Healthy Low-carbohydrate Weight Loss Diets for
                                                                        Diabetes
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Patti Urbanski</p>(St. Luke’s
                                                                        Hospital, Duluth MN, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:50~17:10(20")</td>
                                                                    <td class="bold">
                                                                        Dietary Patterns, Obesity, and CVD Risk in Asian
                                                                        Populations
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Rob M. Van Dam</p>(George
                                                                        Washington University, Netherlands)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:10~17:30(20")</td>
                                                                    <td class="bold">
                                                                        Meal Planning Guidelines for Healthy Low CHO
                                                                        Diet
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yeon Hee Lee</p>(Ajou
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30~17:50(20")</td>
                                                                    <td class="bold">
                                                                        Application of Healthy Low Carbohydrate Diet in
                                                                        Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yun Mi Cho</p>(Chungnam National
                                                                        University Hospitial, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:50~18:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Discussion
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_4">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 4 : Diversity and Health
                                                        Inequalities (AOCO)</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Kyoung-Kon Kim</span> (Gachon
                                                        University, Korea) /
                                                        <span class="bold">Mohd Ismail Noor</span> (University
                                                        Kebangsaan Malaysia, Malaysia)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:40(20")</td>
                                                                    <td class="bold">
                                                                        Socioeconomic Inequalities in Obesity in
                                                                        Malaysia
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Geeta Appannah</p>(University
                                                                        Putra Malaysia, Malaysia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:40~10:00(20")</td>
                                                                    <td class="bold">
                                                                        Treaties and Inequities: Health Inequalities of
                                                                        Obesity and Co-morbidities in Aotearoa New
                                                                        Zealand
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Geoffrey Kira</p>(Massey
                                                                        University, New Zealand)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:00~10:20(20")</td>
                                                                    <td class="bold">
                                                                        Non-Communicable Disease Risk Factors in Asian
                                                                        Migrants in Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">BeLong Cho</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">10:20~10:50(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Seo Young Kang</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Jung Ha Park</p>(Jeju National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-13:00(130")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="oral_presentation_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00~14:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Oral presentation 1</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Yeongsook Yoon</span> (Inje
                                                        Univeristy, Korea) /
                                                        <span class="bold">Jin Wook Kim</span> (Eulji University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:00~13:10(10")</td>
                                                                    <td class="bold">Morphological Changes in Skeletal
                                                                        Muscles with Age and the Preventive Effect of
                                                                        Endurance Exercise on Sarcopenic Overweight</td>
                                                                    <td>
                                                                        <p class="bold">Fujue Ji</p>(Hanyang University,
                                                                        China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10~13:20(10")</td>
                                                                    <td class="bold">Factors Associated with Healthy
                                                                        Metabolic Transition Among Overweight/Obese
                                                                        Non-Shift Workers</td>
                                                                    <td>
                                                                        <p class="bold">Fatin Hanani Mazri</p>
                                                                        (University Kebangsaan Malaysia, Malaysia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20~13:30(10")</td>
                                                                    <td class="bold">Title Effect of Walking Steps
                                                                        Measured by a Wearable Activity Tracker on
                                                                        Improving Components of Metabolic Syndrome: A
                                                                        Prospective Study</td>
                                                                    <td>
                                                                        <p class="bold">Jae Min Park</p>(Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30~13:40(10")</td>
                                                                    <td class="bold">Metabolic Syndrome and Dietary
                                                                        Intake are Associated with Health-related
                                                                        Quality of Life in Kidney Transplant Recipients
                                                                        in Vietnam</td>
                                                                    <td>
                                                                        <p class="bold">Nguyen ThuHa</p>(Universiti
                                                                        Kebangsaan Malaysia, Malaysia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40~13:50(10")</td>
                                                                    <td class="bold">Mobile Health Intervention on
                                                                        Glycemic Control and Quality of Life in Type 1
                                                                        Diabetes Mellitus</td>
                                                                    <td>
                                                                        <p class="bold">Md Azharuddin</p>(Jamia Hamdard
                                                                        University, India)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:50~14:00(10")</td>
                                                                    <td class="bold">Mobile Health Intervention on
                                                                        Glycemic Control and Quality of Life in Type 1
                                                                        Diabetes Mellitus</td>
                                                                    <td>
                                                                        <p class="bold">Md Azharuddin</p>(Jamia Hamdard
                                                                        University, India)
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>14:00~15:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 8 : GLP-1 Analogues Versus
                                                        Bariatric and Metabolic Surgery</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Sang Kuon Lee</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">Yoon Baek Choi</span> (University of Ulsan,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00~14:20(20")</td>
                                                                    <td class="bold">
                                                                        Overview of Semaglutide 2.4 mg (STEP) Clinical
                                                                        Trial Program
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">David C. W. Lau</p>(University
                                                                        of Calgary, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20~14:40(20")</td>
                                                                    <td class="bold">
                                                                        GLP-1 Analogues Versus Bariatric and Metabolic
                                                                        Surgery; Physician’s View
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sang Yeoup Lee</p>(Pusan
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:40~15:00(20")</td>
                                                                    <td class="bold">
                                                                        GLP-1 Analogues Versus Bariatric and Metabolic
                                                                        Surgery; Surgeon’s View
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yong Jin Kim</p>(H Plus Yangji
                                                                        Hospital, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">15:00~15:30(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Youngsuk Park</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Yoona Chung</p>(H Plus Yangji
                                                                        Hospital, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">TBA</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30-16:30(60")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:30~18:00(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 12 : Writing an Excellent Research
                                                        Paper with JOMES (K)</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Eun-Jung Rhee</span>
                                                        (Sungkyunkwan University, Korea) /
                                                        <span class="bold">Kyung Mook Choi</span> (Korea University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30~16:50(20")</td>
                                                                    <td class="bold">
                                                                        How to Write a Peer Review
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Seung-Kwon Myung</p>(National
                                                                        Cancer Center, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:50~17:10(20")</td>
                                                                    <td class="bold">
                                                                        Text Recycling Research Project Policy"를 우리 학술지는
                                                                        어느 수준으로 도입할 것인가?
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sun Huh</p>(Hallym University,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:10~17:30(20")</td>
                                                                    <td class="bold">
                                                                        Common Mistakes to Avoid When Writing a
                                                                        Scientific Paper
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yunhee Whang</p>(Compecs Inc,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="4">17:30~18:00(30")</td>
                                                                    <td rowspan="4" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Bo Kyung Koo</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Chang Hee Jung</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Da Young Lee</p>(Korea
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Ga Eun Nam</p>(Korea University,
                                                                        Korea)
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>17:30~18:00(30")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="sponsored_session_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 1
                                                        (Astrazeneca) :
                                                        Life-Changing Cardiorenal Protection for T2D
                                                        Patients</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Kiyoung Lee</span>
                                                        (Gachon
                                                        University, Korea) /
                                                        <span class="bold">Yang Im Hur</span> (CHA
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:50(30")</td>
                                                                    <td class="bold">
                                                                        The Role of Dapagliflozin in T2D ;
                                                                        DECLARE
                                                                        (Cardiorenal Benefit on T2D; from Prevention to
                                                                        Treatment) </td>
                                                                    <td>
                                                                        <p class="bold">Eun-Jung Rhee</p>
                                                                        (Sungkyunkwan
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50~10:20(30")</td>
                                                                    <td class="bold">
                                                                        The Role of Dapagliflozin in Heart
                                                                        Failure;
                                                                        DAPA-HF
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Won Jae Lee</p>
                                                                        (Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:20~10:50(30")</td>
                                                                    <td class="bold">
                                                                        The Role of Dapagliflozin in Chronic
                                                                        Kidney
                                                                        Disease; DAPA-CKD
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jang-Hee Cho</p>
                                                                        (Kyungpook
                                                                        National University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-15:40(300")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00~14:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Oral presentation 2</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Hae-Jin Ko</span>
                                                        (Kyungpook
                                                        National University, Korea) /
                                                        <span class="bold">Beom-Taek Kim</span> (Ajou
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:00~13:10(10")</td>
                                                                    <td class="bold">Predicted Inflammatory
                                                                        Status and
                                                                        Non-alcoholic Fatty Liver Disease
                                                                        among Korean
                                                                        Adults</td>
                                                                    <td>
                                                                        <p class="bold">Akinkunmi Okekunle
                                                                        </p>(Seoul
                                                                        National University, Nigeria)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10~13:20(10")</td>
                                                                    <td class="bold">Macrophage-Specific
                                                                        Connexin 43
                                                                        Knockout Protects Mice from
                                                                        Obesity-Induced
                                                                        Inflammation and Metabolic
                                                                        Dysfunction</td>
                                                                    <td>
                                                                        <p class="bold">CheolJun Choi</p>
                                                                        (Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20~13:30(10")</td>
                                                                    <td class="bold">MicroRNA 302a Modulates
                                                                        Cholesterol
                                                                        Homeostasis and Atherosclerosis</td>
                                                                    <td>
                                                                        <p class="bold">William Boisvert</p>
                                                                        (University
                                                                        of Hawaii, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30~13:40(10")</td>
                                                                    <td class="bold">Vutiglabridin Modulates
                                                                        Paraoxonase-2 and Reduces Body
                                                                        Weight in a
                                                                        Manner Complementary to Semaglutide
                                                                        in DIO Mouse
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">HyungSoon Park</p>
                                                                        (Glaceum
                                                                        incorporation, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40~13:50(10")</td>
                                                                    <td class="bold">Protective Effect of
                                                                        Hesperidin
                                                                        Against High Fat Diet Induced Obese
                                                                        Diabetic
                                                                        Wistar Rats via Reduction of
                                                                        Cytokines and Nrf2
                                                                        Pathway</td>
                                                                    <td>
                                                                        <p class="bold">Vikas Kumar</p>(King
                                                                        Abdulaziz
                                                                        University, India)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:50~14:00(10")</td>
                                                                    <td class="bold">Semaglutide 2.4 mg and
                                                                        Intensive
                                                                        Behavioral Therapy in Subjects With
                                                                        Overweight
                                                                        or Obesity (STEP 3)</td>
                                                                    <td>
                                                                        <p class="bold">Yousun Ha</p>(Novo
                                                                        Nordisk
                                                                        Pharma Korea, UK)
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
                            <li name="sponsored_session_2">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>14:00~15:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 2 (Alvogen) :
                                                        Opportunity
                                                        for Managing Obesity in New Area</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Sung Hoon Yu</span>
                                                        (Hanyang
                                                        University, Korea) /
                                                        <span class="bold">Jung Hwan Park</span> (Hanyang
                                                        University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:00~14:30(30")</td>
                                                                    <td class="bold">
                                                                        Phentermine/Topiramate for the
                                                                        Treatment of
                                                                        Adolescent
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hyun Wook Chae</p>
                                                                        (Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:30~15:00(30")</td>
                                                                    <td class="bold">
                                                                        Phentermine/Topiramate ER for the
                                                                        Patients with
                                                                        Type 2 Diabetes and Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Da Hea Seo</p>(Inha
                                                                        University,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:00~15:30(30")</td>
                                                                    <td class="bold">
                                                                        Case Sharing of Empowering Weight
                                                                        Management
                                                                        Using Phentermine/Topiramate ER
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yu-Jin Kwon</p>
                                                                        (Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:30~16:30(60")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>18:00~21:30(210")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Congress Banquet Ceremony
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
                            <li name="congress_banquet_ceremony">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>18:00~21:30(210")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Congress Banquet</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">

                            <li name="poster_exhibition_d2_r6">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00~14:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="it_융합_대사증후군_위원회_세션">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room6(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:30~18:00(90")</td>
                                                <td>
                                                    <p class="font_20 bold">IT Convergence Metabolic
                                                        Syndrome Committee
                                                        (K) : Introduction of the Weight Management
                                                        Application of the
                                                        KSSO</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Young Seol
                                                            Kim</span> (Kyung
                                                        Hee University, Korea) /
                                                        <span class="bold">Seon Mee Kim</span> (Korea
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:30~16:50(20")</td>
                                                                    <td class="bold">
                                                                        Possibility of IT-based Technology
                                                                        for Treatment
                                                                        and Management of Obesity and
                                                                        Metabolic Syndrome
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sunyoung Kim</p>
                                                                        (Kyung Hee
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:50~17:10(20")</td>
                                                                    <td class="bold">
                                                                        Limitations of IT-based Technology
                                                                        for Treatment
                                                                        and Management of Obesity and
                                                                        Metabolic Syndrome
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hun-Sung Kim</p>(The
                                                                        Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:10~17:30(20")</td>
                                                                    <td class="bold">
                                                                        Introduction of the Weight
                                                                        Management
                                                                        Application of the KSSO
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Doo-ah Choi</p>
                                                                        (Huraypositive,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30~17:50(20")</td>
                                                                    <td class="bold">
                                                                        Development Direction of the Weight
                                                                        Management
                                                                        Application of the KSSO
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Bo-Yeon Kim</p>
                                                                        (Soonchunhyang
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:50~18:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Discussion
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="guided_poster_presentation_1">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                    <span>Room7(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>13:00~14:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Guided Poster Presentation 1
                                                    </p>
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
            <div class="tab_cont">
                <ul class="tab_li">
                    <li class="on"><a href="javascript:;">Room1(3F)</a></li>
                    <li><a href="javascript:;">Room2(3F)</a></li>
                    <li><a href="javascript:;">Room3(3F)</a></li>
                    <li><a href="javascript:;">Room4(5F)</a></li>
                    <li><a href="javascript:;">Room5(6F)</a></li>
                    <li><a href="javascript:;">Room6(5F)</a></li>
                    <li><a href="javascript:;">Room7(6F)</a></li>
                </ul>
                <div class="tab_wrap">
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_3">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>07:30~08:20(50")</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 3 (SANOFI)</p>
                                                    <p><span class="bold">Chairperson : Jae-Heon Kang</span>
                                                        (Sungkyunkwan University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30~08:20(50")</td>
                                                                    <td class="bold">
                                                                        Fixed-ratio Combinations of Basal Insulin (BI)
                                                                        and GLP-1RA in Patients with Type 2 Diabetes
                                                                        Inadequately Controlled on BI Therapy
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jang Won Son</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:10-09:20(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="plenary_lecture_3">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>08:30~09:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30~09:10(40")</td>
                                                                    <td class="bold">
                                                                        Healthful Dietary Patterns to Prevent and Treat
                                                                        Cardiovascular Disease and Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Frank M. Sacks</p>(Harvard
                                                                        Medical School, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:30-10:40(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="symposium_13">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 13 : Health Consequences of
                                                        Obesity(2)</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Sung Rae Kim</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">JungHwan Kim</span> (Eulji University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:40(20")</td>
                                                                    <td class="bold">
                                                                        Metabolic Dysfunction Associated Fatty Liver
                                                                        Disease (MAFLD): What We can Do Right Here?
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold"> Jun Sung Moon</p>(Yeungnam
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:40~10:00(20")</td>
                                                                    <td class="bold">
                                                                        Obesity and Sleep Problems
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Alice Pik-Shan Kong</p>(The
                                                                        Chinese University of Hong Kong, China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:00~10:20(20")</td>
                                                                    <td class="bold">
                                                                        Obesity in Type 1 Diabetes, beyond BMI
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Erika B. Parente</p>(University
                                                                        of Helsinki, Brazil)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">10:20~10:50(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jun Hwa Hong</p>(Eulji
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Yun Kyung Cho</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="keynote_lecture_2">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:00~11:40(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee
                                                        University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:00~11:40(40")</td>
                                                                    <td class="bold">
                                                                        Chrono-nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">John A. Hawley</p> (Australian
                                                                        Catholic University, New Zealand)
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
                            <li name="luncheon_symposium_4">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:50~12:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 4 (Alvogen)</p>
                                                    <p><span class="bold">Chairperson : Hyun Ho Shin</span> (Asan
                                                        Chungmu Hospital, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:50~12:50(60")</td>
                                                                    <td class="bold">
                                                                        Phentermine/Topiramate Extended Release for the
                                                                        Treatment of Obesity
                                                                        : A Randomized, Placebo-Controlled Trial
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Aaron S. Kelly</p>(University of
                                                                        Minnesota Medical School, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20-14:30(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="poster_exhibition_d3">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50~13:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li name="keynote_lecture_3">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>13:50~14:20(30")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Hye Soon Park</span> (University of Ulsan, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:50~14:20(30")</td>
                                                                    <td class="bold">
                                                                        From Obesity to Changes in the Characteristics
                                                                        of Newly Diagnosed Type 2 Diabetes Patients in
                                                                        Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sung Rae Kim</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:10-15:20(10")</td>
                                                                    <td colspan="2">Break</td>
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
                            <li name="plenary_lecture_4">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>14:30~15:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:30~15:10(40")</td>
                                                                    <td class="bold">
                                                                        Relationships of SGLT-2 Treatment with Body
                                                                        Weight
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ele Ferrannini</p>(University of
                                                                        Pisa School of Medicine, Italy)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:50-16:00(10")</td>
                                                                    <td colspan="2">Break</td>
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
                            <li name="keynote_lecture_4">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:20~15:50(30")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20~15:50(30")</td>
                                                                    <td class="bold">
                                                                        Strengths and Limitations of Real-World Evidence
                                                                        in the Cardiometabolic Field
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sin Gon Kim</p>(Korea
                                                                        University, Korea)
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
                            <li name="symposium_17">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room1(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:00~17:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 17 : Single-Molecule Combinatorial Therapeutics for Treating Obesity</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Soon Jib Yoo</span> (The
                                                        Catholic University of Korea, Korea) /
                                                        <span class="bold">Sang Woo Oh</span> (Dongguk University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:00~16:20(20")</td>
                                                                    <td class="bold">
                                                                        Current and Emerging Pharmacotherapy for Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">David C.W. Lau</p>(University of
                                                                        Calgary, Canada)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:20~16:40(20")</td>
                                                                    <td class="bold">
                                                                        Upcoming New Combinations of Anti-Obesity Drugs
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Young Min Cho</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:40~17:00(20")</td>
                                                                    <td class="bold">
                                                                        GLP-1/GLP-2 Receptor Dual Agonist: Targeting the
                                                                        Gut-liver Axis and Microbiome to Treat NASH
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yong-ho Lee</p>(Yonsei
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">17:00~17:30(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Chang Hee Jung</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Kyuho Kim</p>(The Catholic
                                                                        University of Korea, Korea)
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="breakfast_symposium_4">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>07:30~08:20(50")</td>
                                                <td>
                                                    <p class="font_20 bold">Breakfast Symposium 4 (ORGANON)</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Dae Jung Kim</span> (Ajou
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>07:30~08:20(50")</td>
                                                                    <td class="bold">
                                                                        Early & Lower for Longer ; A to Z about Treating
                                                                        Dyslipidemia in Diabetes Patients
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Su Jin Jeong</p>(Sejong General
                                                                        Hospital, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>08:20-08:30(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>08:30~09:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30~09:10(40")</td>
                                                                    <td class="bold">
                                                                        Healthful Dietary Patterns to Prevent and Treat
                                                                        Cardiovascular Disease and Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Frank M. Sacks</p>(Harvard
                                                                        Medical School, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:10-09:20(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="symposium_14">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 14 : Integrative Physiology(2)</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Il-Young Kim</span> (Gachon University, Korea) /
                                                        <span class="bold">Sang-Yong Kim</span> (Chosun University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:50(30")</td>
                                                                    <td class="bold">
                                                                        The Importance of Muscle in Maintaining Healthy
                                                                        Metabolic State
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Robert R. Wolfe</p> (University
                                                                        of Arkansas for Medical Sciences, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50~10:10(20")</td>
                                                                    <td class="bold">
                                                                        Timing of Exercise to Improve Metabolic Health
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">John Hawley</p> (Australian
                                                                        Catholic University, New Zealand)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:10~10:30(20")</td>
                                                                    <td class="bold">
                                                                        Integrative Understanding of Substrate
                                                                        Metabolism In Vivo Using Stable Isotope Tracers
                                                                        – Basic Tracer Model Structures
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Il-Young Kim</p> (Gachon
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">10:30~10:50(20")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Tae-Nyun Kim</p> (Inje
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Jae Myoung Suh</p> (KAIST, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00(10")</td>
                                                                    <td colspan="2" class="bold">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:00~11:40(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:00~11:40(40")</td>
                                                                    <td class="bold">
                                                                        Chrono-Nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">John A. Hawley</p>(Australian
                                                                        Catholic University, New Zealand)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="luncheon_symposium_5">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:50~12:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 5 (HK inno.N Corp.)</p>
                                                    <p><span class="bold">Chairperson : Sang Yeoup Lee</span> (Pusan National University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:50~12:50(60")</td>
                                                                    <td class="bold">
                                                                        New Paradigm of Glycemic Variability: EVERGREEN
                                                                        Study
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yun Kyung Cho</p>(University of
                                                                        Ulsan, Korea)
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

                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50~13:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>13:50~14:20(30")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Hye Soon Park</span>
                                                        (University of Ulsan, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:50~14:20(30")</td>
                                                                    <td class="bold">
                                                                        From Obesity to Changes in the Characteristics
                                                                        of Newly Diagnosed Type 2 Diabetes Patients in
                                                                        Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sung Rae Kim</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14:20-14:30(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>14:30~15:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:30~15:10(40")</td>
                                                                    <td class="bold">
                                                                        Relationships of SGLT-2 Treatment with Body
                                                                        Weight
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ele Ferrannini</p>(University of
                                                                        Pisa School of Medicine, Italy)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:10-15:20(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:20~15:50(30")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 4</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20~15:50(30")</td>
                                                                    <td class="bold">
                                                                        Strengths and Limitations of Real-World Evidence
                                                                        in the Cardiometabolic Field
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sin Gon Kim</p>(Korea
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:50-16:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="symposium_18">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room2(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:00~17:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 18 : Digi-Physical Transformation
                                                        in Obesity Healthcare</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Sang Youl Rhee </span> (Kyung Hee University, Korea) /
                                                        <span class="bold">Hyuk-Sang Kwon</span> (The Catholic
                                                        University of Korea, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:00~16:25(25")</td>
                                                                    <td class="bold">
                                                                        Development and Validation of Artificial
                                                                        Intelligence-Based Weight Management Prediction
                                                                        Model
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yera Choi</p>(NAVER healthcare
                                                                        AI, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:25~16:50(25")</td>
                                                                    <td class="bold">
                                                                        Application of Hybrid AI Model for Chronic
                                                                        Disease Management
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hafiz Syed Muhammad Bilal</p>
                                                                        (NUST University, Pakistan)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:50~17:15(25")</td>
                                                                    <td class="bold">
                                                                        Research of mHealth-based Chronic Disease
                                                                        Prevention and Management
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Youfa Wang</p>(Xi’an Jiaotong
                                                                        University, China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">17:15~17:30(15")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sang Youl Rhee</p>(Kyung Hee
                                                                        University, Korea)
                                                                        <p class="bold">Byoungduck Han</p>(Korea
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Byoungduck Han</p>(Korea
                                                                        University, Korea)
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>08:30~09:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Kwang-Won Kim</span> (Gachon University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>08:30~09:10(40")</td>
                                                                    <td class="bold">
                                                                        Healthful Dietary Patterns to Prevent and Treat
                                                                        Cardiovascular Disease and Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Frank M. Sacks</p>(Harvard
                                                                        Medical School, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:10-09:20(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="symposium_15">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 15 : Nutrition: Personalized Nutrition for Obesity</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Oran Kwon</span> (Ehwa Womans University, Korea) /
                                                        <span class="bold">Young Min Cho</span> (Seoul National
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:40(20")</td>
                                                                    <td class="bold">
                                                                        Genetic Factors for Personalized Nutrition and
                                                                        Change in Dietary Intake
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Tao Huang</p>(Peking University,
                                                                        China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:40~10:00(20")</td>
                                                                    <td class="bold">
                                                                        Toward Personalized Weight-loss Interventions
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Lu Qi</p>(Tulane University,
                                                                        China)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:00~10:20(20")</td>
                                                                    <td class="bold">
                                                                        In-Vitro Based Personalized Microbiome Solution
                                                                        Using Metabolic Biomarkers
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yosep Ji</p>(HEM Pharma, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">10:20~10:50(30")</td>
                                                                    <td rowspan="2" class="bold">
                                                                        Panel Discussion
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sung Nim Han</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="bold">Sang Woon Choi</p>(CHA
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:30-10:40(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>11:00~11:40(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 2</p>
                                                    <p><span class="bold">Chairperson : Jeong-Taek Woo</span> (Kyung Hee University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:00~11:40(40")</td>
                                                                    <td class="bold">
                                                                        Chrono-Nutrition: Time Restricted Eating to
                                                                        Improve Metabolic Health
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">John A. Hawley</p>(Australian
                                                                        Catholic University, New Zealand)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="luncheon_symposium_6">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>11:50~12:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Luncheon Symposium 6 (DAEWOONG)</p>
                                                    <p><span class="bold">Chairperson : Ga Eun Nam</span> (Korea University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>11:50~12:50(60")</td>
                                                                    <td class="bold">
                                                                        Utilizing CGM to Empower T2 DM Obese Patients
                                                                        For Better Glycemic Management
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Glen F. Maberly</p> (University
                                                                        Sydney Public Health School, Australia)
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

                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50~13:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>13:50~14:20(30")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 3</p>
                                                    <p><span class="bold">Chairperson : Hye Soon Park</span> (University of Ulsan, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>13:50~14:20(30")</td>
                                                                    <td class="bold">
                                                                        From Obesity to Changes in the Characteristics
                                                                        of Newly Diagnosed Type 2 Diabetes Patients in
                                                                        Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sung Rae Kim</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>14:30~15:10(40")</td>
                                                <td>
                                                    <p class="font_20 bold">Plenary Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Moon-Kyu Lee</span> (Eulji University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>14:30~15:10(40")</td>
                                                                    <td class="bold">
                                                                        Relationships of SGLT-2 Treatment with Body
                                                                        Weight
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Ele Ferrannini</p>(University of
                                                                        Pisa School of Medicine, Italy)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11:40-11:50(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li>
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="pink_bg">
                                                <td>15:20~15:50(30")</td>
                                                <td>
                                                    <p class="font_20 bold">Keynote Lecture 4</p>
                                                    <p><span class="bold">Chairperson : Kwan Woo Lee</span> (Ajou University, Korea)</p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>15:20~15:50(30")</td>
                                                                    <td class="bold">
                                                                        Strengths and Limitations of Real-World Evidence
                                                                        in the Cardiometabolic Field
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sin Gon Kim</p>(Korea
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15:50-16:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="symposium_19">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room3(3F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:00~17:30(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 19 : Perceptions and Reality in Childhood and Adolescence Obesity</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Sochung Chung</span> (Konkuk University, Korea) /
                                                        <span class="bold">Young-Jun Rhie</span> (Korea University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:00~16:30(30")</td>
                                                                    <td class="bold">
                                                                        Recent Studies on Perceptions of Childhood
                                                                        Obesity in Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">JiEun Lee</p>(Inje University,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:30~17:00(30")</td>
                                                                    <td class="bold">
                                                                        ACTION TEENS: Rationale and Methodology
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Abdullah Bereket</p>(Marmara
                                                                        University, Turkey)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:00~17:30(30")</td>
                                                                    <td class="bold">
                                                                        ACTION TEENS: The Findings
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jason Halford</p>(University of
                                                                        Leeds, UK)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:20-16:30(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="symposium_16">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Symposium 16 : New Behavioral Approaches in Obesity Treatment</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Tae Kyung Lee</span> (Chuncheon National Hospital, Korea) /
                                                        <span class="bold">Sang Kyu Lee</span> (Hallym University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:50(30")</td>
                                                                    <td class="bold">
                                                                        Alterations in Brain and Behavior Contributing
                                                                        to Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Carrie R. Ferrario</p>
                                                                        (University of Michigan, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50~10:20(30")</td>
                                                                    <td class="bold">
                                                                        How to Recover from Food Addiction as a New
                                                                        Piece of the Obesity Framework
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Carolyn C. Ross</p>(University
                                                                        of Arizona, USA)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:20~10:50(30")</td>
                                                                    <td class="bold">
                                                                        A Pilot Study of the Effect of Transcranial
                                                                        Direct Current Stimulation (tDCS) on Food
                                                                        Craving and Eating in Individuals with
                                                                        Overweight and Obesity
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Jo-Eun Jeong</p>(The Catholic
                                                                        University of Korea, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="oral_presentation_3">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50~13:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 3</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Jinkyung Cho</span> (Korea
                                                        Institute of Sport Science, Korea) /
                                                        <span class="bold">You-Cheol Hwang</span> (Kyung Hee University,
                                                        Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:50~13:00(10")</td>
                                                                    <td class="bold">
                                                                        Lifestyle Factors Associated to Adiposity Among
                                                                        Adult Women in Malaysia
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Norsham Juliana</p>(University
                                                                        Sains Islam Malaysia, Malaysia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:00~13:10(10")</td>
                                                                    <td class="bold">
                                                                        Associations Between Physical Activity Level,
                                                                        Physical Fitness, Energy Intake, Macronutrients
                                                                        Intake and Muscle-Fat Ratio among the Primary
                                                                        School Children in Malaysia
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold"> Mun Hong Joseph Cheah</p>
                                                                        (University Putra Malaysia, Malaysia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10~13:20(10")</td>
                                                                    <td class="bold">
                                                                        12-OAHSA is a Component of Olive Oil and
                                                                        Mitigates Obesity-induced Inflammation
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Shindy Soedono</p>(Soonchunhyang
                                                                        University, Indonesia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20~13:30(10")</td>
                                                                    <td class="bold">
                                                                        Semaglutide 2.4 mg Induces Weight Loss and
                                                                        Improves Body Composition Across Age Groups in
                                                                        Adults With Overweight or Obesity: Post-Hoc
                                                                        Analysis of the STEP 1 Trial
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sidi Mohamed El Amine Taha
                                                                            Dahaoui</p>(Novo Nordisk Pharma Korea,
                                                                        Algeria)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30~13:40(10")</td>
                                                                    <td class="bold">
                                                                        Study of Gastric Bypass Versus Gastric
                                                                        Restrictive Surgery in Obese Patients with Type
                                                                        2 Diabetes
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Pardeep Kumar</p>(Shri MMVD
                                                                        Institute, India)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40~13:50(10")</td>
                                                                    <td class="bold">
                                                                        A Phased Study of Bariatric Surgery in Variable
                                                                        Obesity Phenotypes
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Sukrat Sinha</p>(Manipal
                                                                        University, India)
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
                            <li name="jomes_session">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room4(5F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="sky_bg">
                                                <td>16:00~17:00(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Best Article in JOMES</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Eun-Jung Rhee</span>
                                                        (Sungkyunkwan University, Korea) /
                                                        <span class="bold">Won-Young Lee</span> (Sungkyunkwan
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>16:00~16:15(15")</td>
                                                                    <td class="bold">
                                                                        Effect of Sodium-Glucose Cotransporter 2
                                                                        Inhibitors on Weight Reduction in Overweight and
                                                                        Obese Populations without Diabetes: A Systematic
                                                                        Review and a Meta-Analysis
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yun Kyung Cho</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:15~16:30(15")</td>
                                                                    <td class="bold">
                                                                        Impact of COVID-19 and Associated Preventive
                                                                        Measures on Cardiometabolic Risk Factors in
                                                                        South Korea
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Soo Lim</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:30~16:45(15")</td>
                                                                    <td class="bold">
                                                                        Factors Associated with Body Weight Gain among
                                                                        Korean Adults during the COVID-19 Pandemic
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Yang Im Hur</p>(CHA University,
                                                                        Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16:45~17:00(15")</td>
                                                                    <td class="bold">
                                                                        Award
                                                                    </td>
                                                                    <td>
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
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="sponsored_session_3">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="yellow_bg">
                                                <td>09:20~10:50(90")</td>
                                                <td>
                                                    <p class="font_20 bold">Sponsored Session 3 (Novo Nordisk) : The New Approach to Obesity Care Beyond SCALE</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Dae Jung Kim</span> (Ajou
                                                        University, Korea)
                                                        <span class="bold">Chairperson : Dae Jung Kim</span> (Ajou
                                                        University, Korea) /
                                                        <span class="bold">Seung-Hwan Lee</span> (The Catholic
                                                        University of Korea, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>09:20~09:50(30")</td>
                                                                    <td class="bold">
                                                                        Obesity and White Adipose Tissue- Links to
                                                                        Comorbidities
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold"> Mikael Ryden</p>(Karolinska
                                                                        University, Sweden)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>09:50~10:20(30")</td>
                                                                    <td class="bold">
                                                                        Benefits Beyond Weight Loss with GLP-1RA
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Chang Hee Jung</p>(University of
                                                                        Ulsan, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:20~10:50(30")</td>
                                                                    <td class="bold">
                                                                        GLP-1RA for Obesity Management, How can We
                                                                        Maximize Its Clinical Value?
                                                                    </td>
                                                                    <td>
                                                                        <p class="bold">Hyuktae Kwon</p>(Seoul National
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10:50-11:00(10")</td>
                                                                    <td class="bold" colspan="2">
                                                                        Break
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
                            <li name="oral_presentation_4">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common x_scroll">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50~13:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold">Oral Presentation 4</p>
                                                    <p>
                                                        <span class="bold">Chairperson : Young-Jun Rhie</span> (Korea University, Korea) /
                                                        <span class="bold">Joung Hee Lee</span> (Kunsan National
                                                        University, Korea)
                                                    </p>
													<button class="btn gray2_btn program_detail_btn">Preview </button>
                                                </td>
                                            </tr>
											<tr>
												<td colspan="2" class="program_detail_td">
													테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x테스트x
												</td>
											</tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div>
                                                        <table class="c_table detail_table padding_0">
                                                            <colgroup>
                                                                <col class="col_date">
                                                                <col>
                                                            </colgroup>
                                                            <tbody>
                                                                <tr>
                                                                    <td>12:50~13:00(10")</td>
                                                                    <td class="bold">Prevalence of Obesity and
                                                                        Overweight Children in South Korea During
                                                                        COVID-19: Korean National Health and Nutrition
                                                                        Examination Survey 2018-2020</td>
                                                                    <td>
                                                                        <p class="bold">Ji Won Park</p>(Korea
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:00~13:10(10")</td>
                                                                    <td class="bold">The COVID-19 Pandemics Affects
                                                                        Prevalence of Obesity and Metabolic Syndrome of
                                                                        Children and Adolescents in Korea using the
                                                                        KNHANES 2019-2020</td>
                                                                    <td>
                                                                        <p class="bold">Jung Eun Choi</p>(Ewha Womans
                                                                        University, Korea)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:10~13:20(10")</td>
                                                                    <td class="bold">Comparison of siMS Score by
                                                                        Sociodemographic Characteristics and Nutritional
                                                                        Status among Children aged 6.0-12.9 years in
                                                                        Malaysia</td>
                                                                    <td>
                                                                        <p class="bold">Kuan Chiet Teh</p>(University
                                                                        Kebangsaan Malaysia, Malaysia)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:20~13:30(10")</td>
                                                                    <td class="bold">6-month Outcome of an Adapted US
                                                                        Clinic-community Model to an Online Intervention
                                                                        for Childhood Obesity in Singapore- a Pilot
                                                                        Randomized Controlled Trial </td>
                                                                    <td>
                                                                        <p class="bold">Elaine Chew</p>(Duke University,
                                                                        Singapore)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:30~13:40(10")</td>
                                                                    <td class="bold">Study of Relationship Between Rates
                                                                        of Mental Health Evaluation among Adolescents
                                                                        Receiving Sleeve Gastrectomy in Jaipur City,
                                                                        India</td>
                                                                    <td>
                                                                        <p class="bold">Vikas Sharma</p>(SN Medical
                                                                        College, India)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13:40~13:50(10")</td>
                                                                    <td class="bold"></td>
                                                                    <td>
                                                                        <p class="bold">TBA</p>()
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:30-17:40(10")</td>
                                                                    <td class="bold" colspan="2">Break</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17:40-18:00(20")</td>
                                                                    <td class="bold" colspan="2">Closing & Award
                                                                        Ceremony</td>
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
                            <li name="closing_award_ceremony">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room5(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="light_green_bg">
                                                <td>17:40~18:00(20")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Closing & Award Ceremony - Korea Society for Study of Obesity President Chang Beom Lee</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="poster_exhibition_d3_r6">
                                <div class="clearfix2 caption">
                                    <span>Sep.2(Fri)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50~13:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Poster Exhibition</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="guided_poster_presentation_2">
                                <div class="clearfix2 caption">
                                    <span>Sep.3(Sat)</span>
                                    <span>Room7(6F)</span>
                                </div>
                                <div class="table_wrap detail_table_common border_bottom_000">
                                    <table class="c_table detail_table">
                                        <colgroup>
                                            <col class="col_date">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr class="green_bg">
                                                <td>12:50~13:50(60")</td>
                                                <td>
                                                    <p class="font_20 bold mb0">Guided Poster Presentation 2</p>
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
        $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
            $(this).next("tr").next("tr").children("td").children("div").slideToggle();
        });
        $(".tab_green li, .tab_li li").click(function() {
            var i = $(this).index();
            $(this).parent("ul").next(".tab_wrap").children(".tab_cont").removeClass("on");
            $(this).parent("ul").next(".tab_wrap").children(".tab_cont").eq(i).addClass("on");
            $(this).siblings("li").removeClass("on");
            $(this).addClass("on");
        });

		$(".program_detail_btn").click(function(event){
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