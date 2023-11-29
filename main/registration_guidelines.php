<?php
include_once('./include/head.php');
include_once('./include/header.php');

$sql_event =    "SELECT
						period_event_start,
						period_event_end,
						period_event_pre_end
					FROM info_event AS ie";
$event = sql_fetch($sql_event);

$sql_registration =    "SELECT
							bank_name_" . $language . " AS bank_name,
							account_number_" . $language . " AS account_number,
							account_holder_" . $language . " AS account_holder,
							address_" . $language . " AS `address`,
							CONCAT(fi_pop.path, '/', fi_pop.save_name) AS fi_pop_url
						FROM info_registration AS ir
						LEFT JOIN `file` AS fi_pop
							ON fi_pop.idx = ir.score_pop_" . $language . "_img";
$registration = sql_fetch($sql_registration);

$sql_price =    "SELECT
						type_en, 
						off_member_usd, off_guest_usd, on_member_usd, on_guest_usd, 
						off_member_krw, off_guest_krw, on_member_krw, on_guest_krw
					FROM info_event_price
					WHERE is_deleted = 'N'
					ORDER BY off_member_usd DESC, off_guest_usd DESC, on_member_usd DESC, on_guest_usd DESC";
$price = get_data($sql_price);
?>

<section class="container registration">
    <div>
        <h1 class="page_title">등록 접수 가이드</h1>
        <div class="inner">
            <!--1. important dates start-->
            <h3 class="title">사전등록 기간</h3>
            <div class="table_wrap detail_table_common details">
                <table class="c_table detail_table">
                    <colgroup>
                        <col class="submission_col">
                        <col>
                    </colgroup>
                    <tr>
                        <th>등록 접수<br class="br_mb_only">시작일</th>
                        <td class="f_bold">12월 11일 (월)</td>
                    </tr>
                    <!-- <tr>
                        <th class="close_th">Early-bird Registration<br class="br_mb_only"> Deadline</th>
                        <td class="f_bold">June 29 (Thu)</td>
                    </tr> -->
                    <tr>
                        <th>사전 등록 접수<br class="br_mb_only">마감일</th>
                        <td class="f_bold">1월 11일 (목)</td>
                    </tr>
                </table>
            </div>

            <?php
            if (count($price) > 0) {
                $tb_arr = array();
                $i = -1;
                $off_mb = 0;
                $off_gt = 0;
                $on_mb = 0;
                $on_gt = 0;

                $unit = $language == "en" ? "usd" : "krw";
                $unit_upper = strtoupper($unit);

                $off_mb_col = 'off_member_' . $unit;
                $off_gu_col = 'off_guest_' . $unit;
                $on_mb_col = 'on_member_' . $unit;
                $on_gu_col = 'on_guest_' . $unit;

                foreach ($price as $pr) {
                    if (
                        $off_mb != $pr[$off_mb_col]
                        || $off_gt != $pr[$off_gu_col]
                        || $on_mb != $pr[$on_mb_col]
                        || $on_gt != $pr[$on_gu_col]
                    ) {
                        $i++;
                        $off_mb = $pr[$off_mb_col];
                        $off_gt = $pr[$off_gu_col];
                        $on_mb = $pr[$on_mb_col];
                        $on_gt = $pr[$on_gu_col];

                        $tb_arr[$i] = $pr;
                        unset($tb_arr[$i]['type_en']);
                        $tb_arr[$i]['type_arr'] = array();
                    }

                    array_push($tb_arr[$i]['type_arr'], $pr['type_en']);
                }
            ?>
            <!--2. icomes-Air Registration start-->
            <h3 class="title">등록비</h3>
            <div class="details icomes_air">
                <div class="table_wrap x_scroll">
                    <!-- <img class="coming" src="./img/coming.png" /> -->
                    <table class="c_table2 detail_table center">
                        <thead>
                            <tr>
                                <th rowspan=" 2">구분</th>
                                <!-- <th colspan="2">Early-bird Registration</th> -->
                                <th colspan="2">사전 등록 접수</th>
                                <th colspan="2">현장 등록 접수</th>
                            </tr>
                            <tr>
                                <!-- <th><?= $locale("member") ?></th>
                                    <th><?= $locale("non_member") ?></th> -->
                                <th>대한비만학회 정회원</th>
                                <th>대한비만학회 비회원</th>
                                <th>대한비만학회 정회원</th>
                                <th>대한비만학회 비회원</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // foreach ($tb_arr as $tb) {
                                ?>
                            <!-- <tr> -->
                            <!-- <td><?= implode(', ', $tb['type_arr']) ?></td> -->
                            <?php
                                //	if ($tb[$off_mb_col] + $tb[$off_gu_col] + $tb[$on_mb_col] + $tb[$on_gu_col] <= 0) {
                                ?>
                            <!-- <td colspan="2">free</td> -->
                            <?php
                                //} else {
                                ?>
                            <!-- <td><?= $unit_upper . " " . number_format($tb[$off_mb_col]) . " / " . $unit_upper . " " . number_format($tb[$off_gu_col]) ?></td> -->
                            <!-- <td><?= $unit_upper . " " . number_format($tb[$on_mb_col]) . " / " . $unit_upper . " " . number_format($tb[$on_gu_col]) ?></td> -->
                            <?php
                                //}
                                ?>
                            <!-- </tr> -->
                            <?php
                                //}
                                ?>
                            <tr class="text_center">
                                <td>교수, 개원의, 봉직의, 교직의</td>
                                <!-- <td class="closed_td">USD 130<br />KRW 130,000 -->

                                <!-- <img src="./img/icons/icon_closed.png" alt=""> -->
                                <!-- </td> -->
                                <!-- <td>USD 160<br>KRW 160,000</td> -->
                                <td>50,000원</td>
                                <td>80,000원</td>
                                <td>TBD</td>
                                <td>TBD</td>
                            </tr>
                            <tr class="text_center">
                                <td>
                                    전임의, 전공의, 영양사,<br>
                                    운동사, 간호사, 군의관,<br>
                                    공보의, 연구원, 기타<br>

                                    <!--  Military
                                    Pharmacist,
                                    Corporate Member,  -->
                                </td>
                                <!-- <td>USD 65<br>KRW 65,000</td> -->
                                <!-- <td>USD 95<br>KRW 95,000</td> -->
                                <td>30,000원</td>
                                <td>60,000원</td>
                                <td> TBD</td>
                                <td> TBD</td>
                            </tr>
                            <tr class="text_center">
                                <td>학생
                                    <!--, Surgeon (Military),<br>Public Health Doctor-->
                                </td>
                                <td colspan="6">무료등록<br />*행사 당일 학생증 지참 필요</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt10">
                    <ul class="indent_ul">
                        <li>• 등록 완료 시, 등록 확인 메일이 발송 됩니다. (메일을 받지 못한 경우, 운영사무국으로 문의 부탁드립니다.)</li>
                        <li>• 전체 등록비가 지불되기 전까지 등록은 완료로 간주되지 않습니다.</li>
                        <li>• 온라인 등록 페이지는 Google Chrome 및 Microsoft Edge에 최적화되어 있습니다. 온라인 등록에 문제가 발생 할 경우, 운영사무국으로 문의
                            부탁드립니다.
                        </li>
                    </ul>
                </div>
            </div>
            <!--2. icomes-Air Registration end-->
            <?php
            }
            ?>


            <!--3. Methods of Payment start-->
            <h3 class="title">결제 방법</h3>
            <div class="details">
                <!-- <a class="btn long_btn text_long" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt="">Application for cancellation of registration and refund</a> -->
                <div class="details payment_detail mt10">
                    <!-- <p class="pre"><?= $locale("registration_notice_txt") ?></p> -->
                    <div>
                        <ul class="indent_ul">
                            <li style="font-weight: 700;">• 신용카드<br></li>
                            <ul class="indent_ul">
                                <li>• 사전등록 시 카드결제가 가능합니다.</li>
                                <li><br></li>
                            </ul>
                            <li style="font-weight: 700;">• 계좌이체</li>
                            <ul class="indent_ul">
                                <li>• 아래의 계좌로 입금하여 주십시오.</li>
                                <li>• 입금자와 등록자의 성함이 다를 경우, 등록 확인이 불가하니 반드시 등록자의 성함으로 입금 부탁드립니다.</li>
                                <li>• 등록 완료는 결제까지 완료된 상태이며, 사전등록 기간 내 미입금 시 등록이 취소될 수 있음을 안내해 드립니다.</li>
                                <li>• 입금완료 및 등록 완료 확인까지 시일이 소요될 수 있으며, 빠른 확인이 필요하시면 사무국으로 연락 부탁드립니다.</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="table_wrap detail_table_common x_scroll">
                        <table class="c_table detail_table">
                            <colgroup>
                                <col style="width: 30%;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>은행명</th>
                                    <td>하나은행</td>
                                </tr>
                                <tr>
                                    <th>계좌 번호</th>
                                    <td>584-910003-16504</td>
                                </tr>
                                <tr>
                                    <th>예금주</th>
                                    <td>대한비만학회-등록비</td>
                                </tr>
                                <!--
								<tr>
									<th>Address</th>
									<td>Seoul, Mapo Gu, manrijaero 14 Renaissance Tower 1010</td>
								</tr>
								-->
                            </tbody>
                        </table>
                    </div>
                    <div class="m10">
                        <!-- <a 
						href="./download/ICOMES_2022_Application_for_cancellation_of_registration_and_refund.docx"
							class="btn long_btn" target="_blank"> -->
                    </div>
                </div>
            </div>

            <!--3. Methods of Payment end-->


            <!--3. Cancellation & Refund Policy start-->
            <h3 class="title">환불 및 취소 규정</h3>
            <a href="./download/(KSSO)Registration_Cancellation_Request_Form.docx" class="btn long_btn text_long"
                target="_blank"><img src="./img/icons/icon_download_white.svg" alt="">등록 취소 및 환불 신청서</a>
            <div class="details payment_detail mt10">
                <!-- <p class="pre"><?= $locale("registration_notice_txt") ?></p> -->
                <div class="">
                    <ul class="indent_ul">
                        <li>• 등록비 환불 및 등록 취소는 사전등록 기간 내에만 가능하며, 사전등록 마감일 이후에는 환불이 불가합니다.</li>
                        <li>• 환불 및 등록 취소를 위하여 정해진 환불 신청서 양식을 작성하시어 사무국 이메일(<a href="mailto:ksso@into-on.com"
                                class="font_inherit link">ksso@into-on.com</a>)으로 제출 부탁드립니다.</li>
                        <li>• 계좌이체 환불 및 취소 : 환불 처리는 사전등록 기간 이후 처리될 예정이니 이점 유의하시기 바랍니다.</li>
                        <li>• 카드 결제 환불 및 취소 : 결제하신 카드로 취소되며, 은행 및 카드사 사정에 따라 환불 완료까지 일정 기간(2일~5일) 소요됩니다.</li>
                    </ul>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
                    <table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col type2">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>사전등록 기간 (2023년 1월 11일(목) 까지)</th>
                                <td>전액 환불</td>
                            </tr>
                            <tr>
                                <th>사전등록 이후 (2023년 1월 12일(금) 부터)</th>
                                <td>환불 불가</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--3. Cancellation & Refund Policy end-->

            <!--4. Payment Method start-->
            <!-- <h3 class="title"><?= $locale("payment_method_tit") ?></h3>
            <div class="details payment_detail clearfix">
                <p><?= $locale("payment_method_txt") ?></p>
                <div class="payment_wrap">
                    <p class="details_title">* <?= $locale("payment_card_tit") ?></p>
                    <div class="img_wrap">
                      <img src="./img/sample/credit_card.jpg" alt="credit_card_img"> -->
        </div>
    </div>
    <!-- <div class="info_wrap"> -->
    <!-- <p class="details_title">* <?= $locale("payment_bank_tit") ?></p>
                    <ul>
                        <li>- <?= $locale("payment_bank_txt1") ?></li>
                        <li>- <?= $locale("payment_bank_txt2") ?></li>
                        <li>- <?= $locale("payment_bank_txt3") ?></li>
                    </ul> -->
    <!-- <div class="table_wrap"> -->
    <!-- <table class="c_table2 detail_table">
                            <colgroup>
                                <col width="200px">
                                <col>
                            </colgroup>
                            <tr>
                                <th><?= $locale("payment_bank_name_tit") ?></th>
                                <td>
                                    <?= $registration['bank_name'] ?>-->
    <!-- Hana Bank -->
    <!-- </td>
                        </tr>
                        <tr>
                            <th><?= $locale("payment_account_number_tit") ?></th>
                            <td> -->
    <!--<?= $registration['account_number'] ?>-->
    <!-- 584-910003-16504 -->
    <!-- </td>
                        </tr>
                        <tr>
                            <th><?= $locale("payment_account_holder_tit") ?></th>
                            <td> -->
    <!-- <?= $registration['account_holder'] ?> -->
    <!-- 대한비만학회 등록비<br>(International Congress
    on obesity and<br>Metabolic Syndrome) -->
    <!-- </td>
                            </tr>
                            <tr>
                                <th><?= $locale("address") ?></th>
                                <td> -->
    <!-- <?= $registration['address'] ?> -->
    <!-- Seoul, Mapo Gu, manrijaero 14<br>Renaissance
    Tower 1010 -->
    <!-- </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> -->
    <!--4. Payment Method end-->

    <!--5. Cancellation start-->
    <!-- <h3 class="title"><?= $locale("cancellation_tit") ?></h3> -->
    <!-- <div class="details cancel_details"> -->
    <!--     <p class="pre"><?= $locale("cancellation_txt") ?></p> -->
    <!--     <div class="table_wrap"> -->
    <!--         <table class="c_table2 detail_table"> -->
    <!--             <thead> -->
    <!--                 <tr> -->
    <!--                     <th><?= $locale("date") ?></th> -->
    <!--                     <th><?= $locale("cancellation_table_category2") ?></th> -->
    <!--                 </tr> -->
    <!--             </thead> -->
    <!--             <tbody> -->
    <!--                 <tr> -->
    <!--                     <td> -->
    <!--                         <!-- <?= $locale("cancellation_table_data1") ?> -->
    <!--                         Received before Aug 10(Thu), -->
    <!--                         2023(24:00 KST) -->
    <!--                     </td> -->
    <!--                     <td> -->
    <!--                         <!-- <?= $locale("cancellation_table_data1_1") ?> -->
    <!--                         100% Refund -->
    <!--                     </td> -->
    <!--                 </tr> -->
    <!--                 <tr> -->
    <!--                     <td> -->
    <!--                         <!-- <?= $locale("cancellation_table_data2") ?> -->
    <!--                         Received after Aug 10(Thu), -->
    <!--                         2023(24:00 KST) -->
    <!--                     </td> -->
    <!--                     <td> -->
    <!--                         <!-- <?= $locale("cancellation_table_data2_1") ?> -->
    <!--                         Non-Refund -->
    <!--                     </td> -->
    <!--                 </tr> -->
    <!--             </tbody> -->
    <!--         </table> -->
    <!--     </div> -->
    <!-- </div> -->
    <!--Cancellation end-->

    <!--Contact for Registration start-->
    <!-- <h3 class="title"> -->
    <!--     <?= $locale("registration_contact_tit") ?> -->
    <!--     Contact for Registration -->
    <!-- </h3> -->
    <!-- <div class="details details_bg"> -->
    <!--     <p class="pre"><b class="point_txt">TEL : </b><a href="tel:82-2-2285-2582"> +82-2-2285-2582</a> | <b class="point_txt">E-mail : </b><a href="mailto:icomes_registration@into-on.com">: icomes@into-on.com</a> -->
    <!--     </p> -->
    <!-- </div> -->
    <!-- Contact for Registration end -->
    <!-- </div> -->
    <!--//section1-->
    </div>

    <!-- <button type="button" class="fixed_btn" onclick="window.location.href='./registration.php';"> -->
    <!-- 	<?= $locale("registration") ?> -->
    <!-- </button> -->
    <div class="centerT">
        <a href="./registration.php" class="btn long_btn text_long ">온라인 사전등록</a>
    </div>

    <!-- 평점안내 팝업 / 시작 -->
    <div class="popup type2 pop_info rating_new_pop">
        <div class="pop_bg"></div>
        <div class="pop_contents">
            <div class="pop_top_banner">
                <img src="./img/pop_top_banner.jpg" alt="">
                <p>평점안내</p>
            </div>
            <div>
                <div>
                    <img class="coming" src="./img/coming.png" />
                    <!-- <p class="alert red_t">※ 각 협회와 확인 중으로 이후 평점이 변경될 수 있습니다.<br/>추후 안내 예정이오니, 참고 부탁드립니다.</p> -->
                    <!-- <div class="x_scroll">
                        <table class="c_table2">
                            <thead>
                                <tr>
                                    <th class="transparent_bg"></th>
                                    <th>참석날짜</th>
                                    <th>9월 1일(목)</th>
                                    <th>9월 2일(금)</th>
                                    <th>9월 3일(토)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bold">의사</td>
                                    <td class="bold">대한의사협회 연수평점</td>
                                    <td>최대 <span class="bold">2평점</span></td>
                                    <td>최대 <span class="bold">6평점</span></td>
                                    <td>최대 <span class="bold">6평점</span></td>
                                </tr>
                                <tr>
                                    <td class="bold">영양사</td>
                                    <td class="bold">한국영양교육평가원<br />임상영양사<br />전문연수교육(CPD)</td>
                                    <td class="bold" colspan="3">5평점</td>
                                </tr>
                                <tr>
                                    <td class="bold">운동사</td>
                                    <td class="bold">대한운동사협회</td>
                                    <td class="bold" colspan="3">40평점</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <!-- <ul class="info">
                        <li><i></i><span>의사협회 1일 교육상한 점수는 6평점이며, 교육시간이 중복되는 교육 중복 참가는 불인정됩니다.</span></li>
                        <li><i></i><span>모든 참가자에게 비만전문인정의 평점이 부여되며, 기준은 의사협회와 동일합니다.</span></li>
                    </ul>
                </div>
                <div>
                    <div>
                        <div class="pop_title">의협 연수교육 평점 안내</div>
                        <div class="details_bg">
                            <ul>
                                <li>본 학회는 모든 평점사항에 대하여 입, 퇴장 시 1일 2회의 출결확인의무를 시행합니다.<br />학술대회 개최기간 동안 현장에서 입장과 퇴장에 대한
                                    출결 확인 절차가 필요하며, <br />이에 따른 접속시간 별 평점이 인정됩니다.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="x_scroll mt10">
                        <table class="c_table2 layout_fixed">
                            <thead>
                                <tr>
                                    <th>시스템 기록에 따른 이수시간</th>
                                    <th>일반평점</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>교육 이수시간 1시간 미만</td>
                                    <td>X(없음)</td>
                                </tr>
                                <tr>
                                    <td>1시간 이상 ~ 2시간 미만</td>
                                    <td>1평점</td>
                                </tr>
                                <tr>
                                    <td>2시간 이상 ~ 3시간 미만</td>
                                    <td>2평점</td>
                                </tr>
                                <tr>
                                    <td>3시간 이상 ~ 4시간 미만</td>
                                    <td>3평점</td>
                                </tr>
                                <tr>
                                    <td>4시간 이상 ~ 5시간 미만</td>
                                    <td>4평점</td>
                                </tr>
                                <tr>
                                    <td>5시간 이상 ~ 6시간 미만</td>
                                    <td>5평점</td>
                                </tr>
                                <tr>
                                    <td>6시간 이상 ~</td>
                                    <td>6평점(최대)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <!-- <ul class="info">
                        <li><i></i><span>평점 등록을 위하여는 등록 시, 본인 분야에 해당하는 평점신청 및<br />해당 면허 번호를 정확하게 입력해주시기 바랍니다.</span>
                        </li>
                        <li><i></i><span>평점신청을 하신 분들은 현장에서의 입장과 퇴장 시, <br /><span class="red_t underline">반드시 네임택 상의 QR을
                                    태깅 해주시기 바랍니다.</span></span></li>
                        <li><i></i><span>위 부분평점 지침을 참고하시어 불이익을 받는 사례가 없도록 유의하여 주시기 바랍니다.</span></li>
                        <li><i></i><span>학술대회 종료 후, 학회 사무국에서 의사 명단을 의사협회 연수교육 시스템에 등록하게 되면 자동으로 평점이 부여되고 있으며 개인에게 평점카드를
                                발급하지 않습니다. (소요기간 : 약 4주)</span></li>
                    </ul>
                </div>
                <div class="btn_wrap">
                    <div class="half_btn clearfix">
                        <button type="button" class="btn green_btn floatL"
                            onClick="javascript:window.open('http://doc-lic.kma.org/mypage/sub1.asp');">면허신고현황조회
                            바로가기<img src="./img/icons/icon_dubble_arrow.svg" alt=""></button>
                        <button type="button" class="btn green_btn floatR"
                            onClick="javascript:window.open('https://edu.kma.org/dataRoom/drMember.asp');">대한의사협회 안내 공지
                            바로가기<img src="./img/icons/icon_dubble_arrow.svg" alt=""></button>
                    </div>
                    <button type="button" class="btn green_btn"
                        onClick="javascript:window.open('https://edu.kma.org');">대한의사협회 연수교육 필수 평점 이수 내역 확인 바로가기<img
                            src="./img/icons/icon_dubble_arrow.svg" alt=""></button>
                    <ul class="info">
                        <li><i></i><span>대한의사협회 연수교육 필수 평점문의 Tel. 02-6350-6552,</span></li>
                        <li><i></i><span>대한의사협회 면허신고문의 Tel. 02-6350-6610</span></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- 평점안내 팝업 / 끝 -->

</section>

<script>
$('.show_pop').on('click', function() {
    //$('.pop_info').show();
    alert("Coming soon.")
});
$(".rating_new_open").click(function() {
    $(".rating_new_pop").show();
});
</script>

<?php include_once('./include/footer.php'); ?>