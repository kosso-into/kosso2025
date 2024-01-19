<?php
include_once('./include/head.php');
include_once('./include/header.php');

// key date
$sql_key_date =    "SELECT
						idx, `key_date`, contents_" . $language . " AS contents
					FROM key_date
					WHERE `type` = 'lecture'
					AND `key_date` <> '0000-00-00'
					ORDER BY idx";

$key_date = get_data($sql_key_date);

// info
$sql_info = "SELECT
					note_msg_" . $language . " AS note_msg,
					formatting_guidelines_" . $language . " AS formatting_guidelines,
					how_to_modify_" . $language . " AS how_to_modify
				FROM info_lecture";
$info = sql_fetch($sql_info);

?>
<section class="abstract_submission_guideline container">
    <h1 class="page_title">초록 안내</h1>
    <div class="inner">
        <ul class="tab_green long abstract_submission">
            <li class="on"><a href="./abstract_submission_guideline.php">초록 안내</a></li>
            <li><a href="./abstract_submission.php" class="">초록 접수</a></li>
            <!-- <li><a href="./abstract_submission_oral.php">Oral Presenters</a></li> -->
            <!-- <li><a href="./abstract_submission_exhibition.php">Poster Exhibition</a></li> -->
            <li><a href="./abstract_submission_award.php">Awards & Grants</a></li>
        </ul>
        <div class="section section1">
            <div>
                <div class="sponsor_grade">
                    <p class="grade_title purple_bg03">초록접수기간: 2023년 12월 11일(월) ~ 2024년 2월 12일(월)</p>
                </div>

                <!-- <a href="./download/ICOMES_2022_Abstract_template.docx" class="btn long_btn" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt="">Abstract Template Download</a></div> -->
            </div>
            <!-- <div class="details"> -->
            <!-- 	<?= htmlspecialchars_decode(strip_tags($info['note_msg'])) ?> -->
            <!-- </div> -->
            <?php
            if (count($key_date) > 0) {
                $weekday = ["일", "월", "화", "수", "목", "금", "토"];
            ?>
            <!--keydate start-->
            <!-- <div>
                <div class="section_title_wrap2">
                    <h3 class="title"> -->
                        <!-- <?= $locale("keydate") ?>일정 안내 -->
                    <!-- </h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
                    <table class="c_table detail_table td_nowrap_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th>초록 접수<br class="br_mb_only"> 시스템 오픈</th>
                            <td class="f_bold">12월 초</td>
                        </tr>
                        <tr> -->
                            <!--class="close_th" close 이미지 삽입시 th테그에 삽입-->
                            <!-- <th>초록 접수<br class="br_mb_only"> 마감일</th>
                            <td><span class="font_inherit f_bold red_t">TBD</span></td>
                        </tr>
                        <tr>
                            <th>채택된<br class="br_mb_only"> 초록 공지</th>
                            <td class="f_bold">TBD</td>
                        </tr>
                        <tr>
                            <th>채택된 발표자<br class="br_mb_only"> 등록 마감일</th>
                            <td class="f_bold">TBD</td>
                        </tr>
                    </table> -->
                    <!--
                        <table class="c_table detail_table">
                            <colgroup>
                                <col class="submission_col">
                                <col>
                            </colgroup>
                            <tr>
                                <th>Early May</th>
                                <td>Abstract submission system open</td>
                            </tr>
                            <tr>
                                <th>July <span class="font_inherit red_t">6</span> (Thu)</th>
                                <td>Abstract submission deadline</td>
                            </tr>
                            <tr>
                                <th>August 14(Mon)</th>
                                <td>Notification of abstract acceptance</td>
                            </tr>
                            <tr>
                                <th>August 24(Thu)</th>
                                <td>Registration deadline for approved abstract presenters</td>
                            </tr>
                            <tr>
                                <th>Sep 7(Thu) ~ 9 (Sat), 2023</th>
                                <td>ICOMES 2023</td>
                            </tr>
                        </table>
						-->
                <!-- </div>
            </div> -->
            <!--keydate end-->
            <?php
            }
            ?>
            <!--Presentation Type start-->
            <!--<div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("presentation_type") ?></h3>
                </div>
                <div class="text_box">
                    When you submit the abstract, select the possibility regarding the Oral presentation on the abstract
                    submission page. It will be posted in the form of an Poster or given the oral presentation according
                    to the selection.
                    <div>
                        <button type="button">Oral Presentation</button>
                        <button type="button">Poster Exhibition</button>
                    </div>
                </div>
            </div>-->
            <!--Presentation Type end-->
            <!--Steps for Abstract Submission start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">
                        <!--?= $locale("steps_for_abstract_submission") ?-->초록 접수 안내
                    </h3>
                </div>
                <div class="steps_area five_steps">
                    <ul class="clearfix">
                        <li>
                            <p>Step 1</p>
                            <p class="sm_txt">회원가입 및 로그인</p>
                        </li>
                        <li>
                            <p>Step 2</p>
                            <p class="sm_txt">초록 양식 다운로드</p>
                        </li>
                        <li>
                            <p>Step 3</p>
                            <p class="sm_txt">초록 양식 작성 및 파일 업로드</p>
                        </li>
                        <li>
                            <p>Step 4</p>
                            <p class="sm_txt">발표 유형, 주제 카테고리, 제목 등 저자 정보와 초록 섹션을 입력</p>
                        </li>
                        <li>
                            <p>Step 5</p>
                            <p class="sm_txt">초록 접수 완료</p>
                        </li>
                    </ul>
                </div>
                <div class="text_center btn_box mt25">
                    <!-- <a href="https://image.webeon.net/icomes/ICOMES%202023_Abstract%20template_ver1.docx" class="btn long_btn" target="_blank" download><img src="./img/icons/icon_download_yellow.svg" alt="">Abstract Template Download</a> -->
                    <a href="./download/(KSSO)Abstract_Form.docx" class="btn long_btn" target="_blank" download><img
                            src="./img/icons/icon_download_white.svg" alt="">초록 양식 다운로드</a>
                    <a href="./abstract_submission.php" class="btn long_btn yellow_btn">초록 접수 바로가기</a>
                </div>
            </div>
            <!--Steps for Abstract Submission end-->
            <!--Topic Categories start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">
                        <!--?= $locale("topic_categories") ?-->초록 카테고리
                    </h3>
                </div>
                <div class="text_box">
                    <ul>
                        <li class="f_bold"><span class="bold">1. </span>Behavior and Public Health for Obesity</li>
                        <li class="f_bold"><span class="bold">2. </span>Nutrition, Education and Exercise for Obesity
                        </li>
                        <li class="f_bold"><span class="bold">3. </span>Epidemiology of Obesity and Metabolic Syndrome
                        </li>
                        <li class="f_bold"><span class="bold">4. </span>Digital Therapeutics and Big Data Study</li>
                        <li class="f_bold"><span class="bold">5. </span>Diabetes and Obesity</li>
                        <li class="f_bold"><span class="bold">6. </span>Dyslipidemia, Hypertension and Obesity</li>
                        <li class="f_bold"><span class="bold">7. </span>Other Comorbidities of Obesity and Metabolic
                            Syndrome</li>
                        <li class="f_bold"><span class="bold">8. </span>Pathophysiology of Obesity and Metabolic
                            Syndrome</li>
                        <li class="f_bold"><span class="bold">9. </span>Therapeutics of Obesity and Metabolic Syndrome
                        </li>
                        <li class="f_bold"><span class="bold">10. </span>Metabolic and Bariatric Surgery</li>
                        <li class="f_bold"><span class="bold">11. </span>Obesity and Metabolic Syndrome in Children and
                            Adolescents</li>
                    </ul>
                </div>
            </div>
            <!--Topic Categories end-->
            <!--Instructions start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">
                        <!--?= $locale("instructions") ?-->접수 방법 안내
                    </h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
                    <table class="c_table detail_table abstract_table">
                        <colgroup>
                            <col class="submission_col type2">
                            <col>
                        </colgroup>
                        <tr>
                            <th>발표 형식</th>
                            <td>
                                <p>초록 접수 시, 선호하는 발표 형식 선택(구연 또는 포스터 전시)</p>
                                <p>* 심사를 통해 최종 발표 형식이 지정 될 예정입니다.</p>
                                <p>** 구연으로 접수 시, 수상 가능성이 높아집니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>언어</th>
                            <td>국문 또는 영문(혼용 불가)</td>
                        </tr>
                        <tr>
                            <th>양식</th>
                            <td> 
                                <p>• 홈페이지에서 정해진 초록 작성 양식(MS word) 다운로드 후 작성 및 제출</p>
                                <p>• 파일은 10MB 이하로 제출 가능합니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>초록 구성</th>
                            <td>
                                <p>• <span style="font-weight:bold">제목</span>: 30단어 이내의 영문으로 작성</p>
                                <p>• <span style="font-weight:bold">본문</span>: 국문 800~1000자, 영문 300단어 이내로 작성</p>
                                <p>• <span style="font-weight:bold;">필수 요소</span>: Background, methods & materials, results, conclusions</p>
                                <p>• <span style="font-weight:bold">선택사항</span>: Keywords</p>

                            </td>
                        </tr>
                        <tr>
                            <th>Figure / Table</th>
                            <td>
                                <p>• 1 figure in 1 abstract: 허용</p>
                                <p>• 1 table in 1 abstract: 허용</p>
                                <p>• 1 figure & 1 table in 1 abstract: 불가</p>
                                <p>* 첨부 이미지는 50단어로 계산합니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th>초록 제출 방법</th>
                            <td>홈페이지 접수(Fax 또는 Email 제출 불가)</td>
                        </tr>
                        <tr>
                            <th>초록 수정</th>
                            <td>접수된 초록은 접수 마감일까지 마이페이지에서 조회 및 수정 제출 가능합니다.</td>
                        </tr>
                        <tr>
                            <th>초록 철회 및 문의</th>
                            <td><p>초록 철회 및 관련 문의 사항은 운영사무국으로 연락 부탁드립니다.</p><p>- 운영사무국: <a href="mailto:ksso@into-on.com" class="link">ksso@into-on.com</a></p>
                        </tr>
                        <tr>
                            <th>초록 채택</th>
                            <td>제출 마감일 이후 학술위원회의 심사를 통하여 채택될 예정이며, 채택 여부는 초록 제출자의 개별 메일로 통보됩니다.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--Instructions end-->
            <!--Originality & Eligibility start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">채택 공지</h3>
                </div>
                <div class="text_box indent">
                    <ul>
                        <li>• 제출된 모든 초록은 학술위원회의 심사를 통해 채택 여부가 결정되며, 발표 저자와 교신저자에게 채택/미 채택 결과를 메일로 안내를 드립니다.</li>
                        <li>• 초록 관련 변경 또는 공지 사항은 웹사이트나 뉴스레터를 통해 안내 드릴 예정입니다.</li>
                    </ul>
                </div>
            </div>
            <!--Notification of Acceptance start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">철회 규정</h3>
                </div>
                <div class="text_box indent">
                    <ul>
                        <li>• 등록 마감일까지 등록이 완료 되지 않은 경우, 초록이 자동으로 철회됩니다.</li>
                    </ul>
                </div>
            </div>
            <!--Notification of Acceptance end-->
            <!--Withdrawal Policy start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">Originality & Eligibility</h3>
                </div>
                <div class="text_box indent">
                    <ul>
                        <li>• 초록이 규정된 형식에 부합하지 않거나 목적에서 벗어나는 경우 학술위원회의 결정에 의해 거절될 수 있습니다.</li>
                        <li>• 제출 및 채택된 초록은 대한비만학회 홈페이지, 초록집, 기타 인쇄물 등에 게재될 수 있습니다.</li>
                        <li>• 관련 문의가 있으신 경우, 운영 사무국으로 연락 부탁드립니다. </li>
                        <li style="margin-left:20px;">- 운영사무국: <a href="mailto:ksso@into-on.com" class="link font_inherit" >ksso@into-on.com</a></li>
                    </ul>
                </div>
            </div>
            <!--Withdrawal Policy end-->
            <!--Contact for Abstract start-->
            <!--
			<div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("contact_for_abstract") ?></h3>
                </div>
                <div class="text_box contact">
                    <ul class="devide_ul">
                        <li><span class="green_t bold">TEL :</span> +82-2-2285-2582</li>
                        <li><span class="green_t bold">E-mail :</span> icomes_abstracts@into-on.com</li>
                    </ul>
                </div>
            </div>
			-->
            <!--Contact for Abstract end-->
        </div>
        <!--//section1-->

    </div>
    <!-- <button type="button" class="fixed_btn" onclick="window.location.href='./abstract_submission.php';"><?= $locale("abstract_submission_btn") ?></button> -->
</section>

<?php include_once('./include/footer.php'); ?>