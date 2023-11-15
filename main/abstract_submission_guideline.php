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
    <h1 class="page_title">초록 접수 안내</h1>
    <div class="inner">
        <ul class="tab_green long abstract_submission">
            <li class="on"><a href="./abstract_submission_guideline.php">초록 접수 가이드</a></li>
            <li><a href="./abstract_submission.php" class="">Online Submission</a></li>
            <!-- <li><a href="./abstract_submission_oral.php">Oral Presenters</a></li> -->
            <!-- <li><a href="./abstract_submission_exhibition.php">Poster Exhibition</a></li> -->
            <li><a href="./abstract_submission_award.php">Awards & Grants</a></li>
        </ul>
        <div class="section section1">
            <div>
                <div class="text_box">
                    <ul>
                        <li>2024 대한비만학회 춘계학술대회에서는 구두 발표, 포스터 전시를 위한 초록 제출을 정중히 요청합니다.</li>
                        <li>모든 초록은 해당 사이트를 통해 제출되어야 합니다.<br/>초록을 제출하기 전에 지침을 읽어보시기 바랍니다.</li>
                        <!--
						<li class="f_bold">• If you are selected by submitting an abstract, 100% of the registration fee can be reduced.</li>
						<li>• The reduction is based on the payment of the pre-registration fee, and only the submitter will receive a refund within 2 weeks after the congress.</li>
						-->
                    </ul>
                </div>
                <div class="text_center btn_box mt25">
                    <!-- <a href="https://image.webeon.net/icomes/ICOMES%202023_Abstract%20template_ver1.docx" class="btn long_btn" target="_blank" download><img src="./img/icons/icon_download_yellow.svg" alt="">Abstract Template Download</a> -->
					<a href="./download/ICOMES_2023_Abstract_form.docx" class="btn long_btn" target="_blank" download><img src="./img/icons/icon_download_white.svg" alt="">초록 양식 다운로드</a>
                    <a href="./abstract_submission.php" class="btn long_btn yellow_btn">초록 접수 바로가기</a>
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
                <div>
                    <div class="section_title_wrap2">
                        <h3 class="title"><!--<?= $locale("keydate") ?>-->일정 안내</h3>
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
							<tr>
                                <!--class="close_th" close 이미지 삽입시 th테그에 삽입-->
								<th >초록 접수<br class="br_mb_only"> 마감일</th>
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
						</table>
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
                            <!--<tr>
                                <th>Sep 7(Thu) ~ 9 (Sat), 2023</th>
                                <td>ICOMES 2023</td>
                            </tr>
                        </table>
						-->
                </div>
            </div>
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
                    <h3 class="title"><!--?= $locale("steps_for_abstract_submission") ?-->초록 접수 안내</h3>
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
            </div>
            <!--Steps for Abstract Submission end-->
            <!--Topic Categories start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><!--?= $locale("topic_categories") ?-->초록 카테고리</h3>
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
                    <h3 class="title"><!--?= $locale("instructions") ?-->접수 방법 안내</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
                    <table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col type2">
                            <col>
                        </colgroup>
                        <tr>
                            <th>Presentation Type </th>
                            <td>
                                <p>1) Oral Presentation</p>
                                <p>2) Poster Exhibition</p>
                                <p>3) Guided Poster Presentation <br />
                                    (*Scientific committee may change the presentation type by review.)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>Language</th>
                            <td>English</td>
                        </tr>
                        <tr>
                            <th>Length of Title</th>
                            <td>No longer than 30 words</td>
                        </tr>
                        <tr>
                            <th>Method of Submission</th>
                            <td>Online submission via the website.</td>
                        </tr>
                        <tr>
                            <th>Format</th>
                            <td>
                                <p>Download and use the official abstract form. <br />Contain 4 sections: background,
                                    methods & materials, results, and conclusions. <br />(keywords are optional)</p>
                            </td>
                        </tr>
                        <tr>
                            <th>Length of body</th>
                            <td>No longer than 300 words</td>
                        </tr>
                        <tr>
                            <th>Figure / Table</th>
                            <td>
                                <p>- 1 figure in 1 abstract: Allowed</p>
                                <p>- 1 table in 1 abstract: Allowed</p>
                                <p>- 1 figure & 1 table in 1 abstract: Not allowed <br />
                                    (*Each figure or table will be counted as 50 words.)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>Modification</th>
                            <td>Abstract review or modification will be available until the deadline.</td>
                        </tr>
                        <tr>
                            <th>Withdrawal</th>
                            <td>Request to the secretariat via email (icomes_abstracts@into-on.com)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--Instructions end-->
			<!--Originality & Eligibility start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">Originality & Eligibility</h3>
                </div>
                <div class="text_box indent">
                    <ul>
                        <li>• 제출물이 규정된 형식에 부합하지 않거나 본 회의의 기본 목적에서 벗어나는 경우 과학 프로그램 위원회의 재량에 따라 거부될 수 있습니다.</li>
                        <li>• 초록의 주제는 미발표 연구결과로 제한되며, 이전에 타 학회에서 발표된 내용을 편집하여 투고하는 것은 허용되지 않습니다.</li>
                        <li>• 제출 및 승인된 초록은 대한비만학회 홈페이지, 지원서, 초록집, 기타 인쇄물에 게재될 수 있습니다.</li>
						<li>• 관련 문제가 발생할 경우 운영 사무국에 문의하시기 바랍니다. <a href="mailto:TBD@into-on.com" class="link">TBD@into-on.com.</a></li>
                    </ul>
                </div>
            </div>
            <!--Notification of Acceptance start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("notification_of_acceptance") ?></h3>
                </div>
                <div class="text_box indent">
                    <ul>
                        <li>• 과학 위원회가 제출한 모든 초록 제출물을 평가한 후, 발표저자와 교신저자는 제출물 수락에 관한 이메일 알림을 받게 됩니다.</li>
                        <li>• 모든 발표자는 등록 마감일인 <span class="bold">2024년 0월 0일</span>까지 등록 절차를 완료하고 등록비 전액을 지불해야 합니다. 등록비는 컨퍼런스 종료 후 전액 환불됩니다.</li>
                        <li>• 제출 마감일이 변경되면 합격 통지도 변경됩니다. 웹사이트나 뉴스레터를 통해 사무국에서 통보됩니다.</li>
                    </ul>
                </div>
            </div>
            <!--Notification of Acceptance end-->
            <!--Withdrawal Policy start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("withdrawal_policy") ?></h3>
                </div>
                <div class="text_box indent">
                    <ul>
                        <li>• 발표자 등록 마감일까지 등록하지 않으면 최종 프로그램에서 승인된 초록이 자동으로 철회됩니다.</li>
                        <li>• 초록 철회를 요청하려면 최대한 빠른 시일 내에 KSSO 2024 사무국(<a href="mailto:TBD@into-on.com" class="link font_inherit">TBD@into-on.com</a>)으로 이메일을 보내주세요</li>
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