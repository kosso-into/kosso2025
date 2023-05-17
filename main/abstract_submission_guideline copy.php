<?php
include_once('./include/head.php');
include_once('./include/header.php');

// key date
$sql_key_date =	"SELECT
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
    <div class="inner">
        <h1 class="page_title">Abstract Submission</h1>
        <ul class="tab_green long">
            <li class="on"><a href="./abstract_submission_guideline.php">Abstract Submission Guideline</a></li>
            <li><a href="./abstract_submission.php" class="online_submission_alert">Online Submission</a></li>
            <li><a href="./abstract_submission_oral.php">Oral Presenters</a></li>
            <li><a href="./abstract_submission_exhibition.php">Poster Exhibition</a></li>
            <li><a href="./abstract_submission_award.php">Awards & Grants</a></li>
        </ul>
        <div class="section section1">
            <div>
                <div class="text_box">
                    <ul>
                        <li>• The ICOMES 2023 Organizing Committee sincerely invites you to submit abstracts for your
                            oral presentation and poster exhibition.</li>
                        <li>• All abstracts must be submitted online through the “Online Submission System”. Please read
                            the guidelines before submitting your abstract.</li>
                        <!--
						<li class="f_bold">• If you are selected by submitting an abstract, 100% of the registration fee can be reduced.</li>
						<li>• The reduction is based on the payment of the pre-registration fee, and only the submitter will receive a refund within 2 weeks after the congress.</li>
						-->
                    </ul>
                </div>
                <div class="text_center btn_box mt25">
                    <a href="./upload/ICOMES 2023_Abstract template.docx" class="btn long_btn" target="_blank"><img
                            src="./img/icons/icon_download_yellow.svg" alt="">Abstract Template
                        Download</a>
                </div>
                <!-- <a href="./download/ICOMES_2022_Abstract_template.docx" class="btn long_btn" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt="">Abstract Template Download</a></div> -->
            </div>
            <!-- <div class="details"> -->
            <!-- 	<?= htmlspecialchars_decode(strip_tags($info['note_msg'])) ?> -->
            <!-- </div> -->
            <!--Topic Categories start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("topic_categories") ?></h3>
                </div>
                <div class="text_box">
                    <img class="coming" src="./img/coming.png" />
                    <!-- <ul>
                        <li class="f_bold"><span class="bold">1. </span>Behavior and Public Health for Obesity</li>
                        <li class="f_bold"><span class="bold">2. </span>Nutrition, Education and Exercise for Obesity
                        </li>
                        <li class="f_bold"><span class="bold">3. </span>Epidemiology of Obesity and Metabolic Syndrome
                        </li>
                        <li class="f_bold"><span class="bold">4. </span>COVID-19 and Obesity </li>
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
                    </ul> -->
                </div>
            </div>
            <!--Topic Categories end-->
            <?php
			if (count($key_date) > 0) {
				$weekday = ["일", "월", "화", "수", "목", "금", "토"];
			?>
            <!--keydate start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">
                        <!--<?= $locale("keydate") ?>-->Key Dates
                    </h3>
                </div>
                <div class="table_wrap detail_table_common">
                    <table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th>TBD</th>
                            <td>Abstract submission system open</td>
                        </tr>
                        <?php
							foreach ($key_date as $k => $kd) {
							?>
                        <tr>
                            <th>

                                <?php
												if ($language == "en") {
													if ($k == 2) {
														echo date_format(date_create($kd['key_date']), "F d(D), Y");
													} else {
														echo date_format(date_create($kd['key_date']), "F d(D)");
													}
												} else {
													echo date_format(date_create($kd['key_date']), "Y년 m월 d일");
													echo "(";
													echo $weekday[(date_format(date_create($kd['key_date']), "w"))];
													echo ")";
												}
												?>
                                <?php
										if ($k == 0) {
										?>
                                <br />
                                <!-- <del class="table_in_del">JUL 6 (Thu)</del> -->
                                <?php
										} else if ($k == 1) {
										?>
                                <br />
                                <!-- <del class="table_in_del">JUN 30(THU)</del> -->
                                <?php
										}
										?>
                            </th>
                            <?php
									if ($k == 0) {
										if ($during_yn !== "Y") {
									?>
                            <td class="table_extension"><img src="./img/icons/icon_closed.png"
                                    alt=""><?= $kd['contents'] ?></td>
                            <?php
										} else {
										?>
                            <td class="table_extension"><img src="./img/icons/icon_extension.png"
                                    alt=""><?= $kd['contents'] ?></td>
                            <?php
										}
									} else {
										?>
                            <td><?= $kd['contents'] ?></td>
                            <?php
									}
									?>
                        </tr>
                        <?php
							}
							?>
                        <tr>
                            <th>Sep 7(Thu) ~ 9 (Sat), 2023</th>
                            <td>ICOMES 2023</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--keydate end-->
            <?php
			}
			?>
            <!--Instructions start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("instructions") ?></h3>
                </div>
                <div class="table_wrap detail_table_common">
                    <table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th>Language</th>
                            <td>English</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>A concise title not exceeding 30 words recommended</td>
                        </tr>
                        <tr>
                            <th>Submission</th>
                            <td>Online via the website only</td>
                        </tr>
                        <tr>
                            <th>Format</th>
                            <td>
                                <p>Must be including below 4 parts of your abstract</p>
                                <p>1) Background</p>
                                <p>2) Method</p>
                                <p>3) Results</p>
                                <p>4) Conclusions</p>
                            </td>
                        </tr>
                        <tr>
                            <th>Length of body</th>
                            <td>300 words<br />(*If you include a picture, it will count as 50 words and will therefore
                                reduce your word count)</td>
                        </tr>
                        <tr>
                            <th>Template</th>
                            <td>Abstracts must be submitted by MS word(.doc or .docx)</td>
                        </tr>
                        <tr>
                            <th>Number of Abstracts</th>
                            <td>No limitation</td>
                        </tr>
                        <tr>
                            <th>Modification</th>
                            <td>Until the deadline for abstract submission</td>
                        </tr>
                        <tr>
                            <th>Withdrawal of Abstracts</th>
                            <td>Written request by email fully required August. 5(Fri), 2022</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--Instructions end-->
            <!--Presentation Type start-->
            <div>
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
            </div>
            <!--Presentation Type end-->
            <!--Steps for Abstract Submission start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("steps_for_abstract_submission") ?></h3>
                </div>
                <div>
                    <ul class="step_list">
                        <li>
                            <div class="circle_step">Step 1</div>
                            <div>
                                Sign up and Log-in to the ICOMES 2022 website
                            </div>
                        </li>
                        <li class="step2">
                            <div class="circle_step">Step 2</div>
                            <div>
                                Read through the Submission Guideline
                            </div>
                        </li>
                        <li class="step3">
                            <div class="circle_step">Step 3</div>
                            <div>
                                Click the ‘Abstract Submission’ Button
                            </div>
                        </li>
                        <li class="step4">
                            <div class="circle_step">Step 4</div>
                            <div>
                                Complete Abstract Submission including Author’s Information
                                <p>• It is the Author’s responsibility to review and amend the submission. The submitter
                                    is responsible for any typos in the abstract.</p>
                                <p>• Be sure to check the preview page when submitting your abstract.</p>
                                <p>• Please make sure that you have received the confirmation email after submitting the
                                    abstract.</p>
                                <p>• Files submitted after abstract submissions can be modified in My Page before the
                                    due date.</p>
                            </div>
                        </li>
                        <li class="step5">
                            <div class="circle_step">Step 5</div>
                            <div>
                                Registration completed before the deadline for abstract submission
                                <p>• Only those who have completed registration can submit abstracts.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Steps for Abstract Submission end-->
            <!--Notification of Acceptance start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("notification_of_acceptance") ?></h3>
                </div>
                <div class="text_box">
                    <ul>
                        <li>• All submitted abstracts will be reviewed by the Scientific Program Committee according to
                            reviewing procedures.</li>
                        <li>• Notification of acceptance will be emailed to applicants in early July 2022.</li>
                        <li>• Presentation authors must submit final paper on July 28th(Thu), 2022.</li>
                        <li>• If the Notification of Acceptance date is delayed, the submission date may also change.
                            Any changes will be notified on the ICOMES 2022 website.</li>
                    </ul>
                </div>
            </div>
            <!--Notification of Acceptance end-->
            <!--Withdrawal Policy start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("withdrawal_policy") ?></h3>
                </div>
                <div class="text_box">
                    <ul>
                        <li>• If the presenting author of the accepted abstract does not register by the deadline for
                            presenter registration, the abstract will be automatically withdrawn from the final program.
                        </li>
                        <li>• If you would like to withdraw an abstract, please request to have it withdrawn by sending
                            an email to the ICOMES 2022 secretariat as soon as possible.</li>
                    </ul>
                </div>
            </div>
            <!--Withdrawal Policy end-->
            <!--Contact for Abstract start-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title"><?= $locale("contact_for_abstract") ?></h3>
                </div>
                <div class="text_box contact">
                    <ul class="devide_ul">
                        <li><span class="green_t bold">TEL :</span> +82-2-2039-5704</li>
                        <li><span class="green_t bold">E-mail :</span> icomes_abstracts@into-on.com</li>
                    </ul>
                </div>
            </div>
            <!--Contact for Abstract end-->
        </div>
        <!--//section1-->

    </div>
    <!-- <button type="button" class="fixed_btn" onclick="window.location.href='./abstract_submission.php';"><?= $locale("abstract_submission_btn") ?></button> -->
</section>



<?php include_once('./include/footer.php'); ?>