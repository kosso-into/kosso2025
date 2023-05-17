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
<section class="abstract_submission_guideline container abstract_presentation_guideline">
    <h1 class="page_title">Presentation Guidelines</h1>
    <div class="inner">
        <ul class="tab_green long">
            <li><a href="./abstract_submission_oral.php">Oral Presentation</a></li>
            <li><a href="./abstract_submission_poster.php">Guided Poster Presentation</a></li>
            <li class="on"><a href="./abstract_submission_exhibition.php">Poster Exhibition</a></li>
        </ul>
        <div class="section section1">
            <?php
            if (count($key_date) > 0) {
                $weekday = ["일", "월", "화", "수", "목", "금", "토"];
            ?>
            <!--keydate-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">Key Dates</h3>
                </div>
                <div class="table_wrap detail_table_common">
                    <table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th>Abstract Submission System Open</th>
                            <td class="f_bold">Mid-May</td>
                        </tr>
                        <tr>
                            <th>Abstract Submission Deadline</th>
                            <td><span class="font_inherit red_t f_bold">July 6 (Thu)</span></td>
                        </tr>
                        <tr>
                            <th>Notification of Abstract Acceptance</th>
                            <td class="f_bold">August 8 (Tue)</td>
                        </tr>
                        <tr>
                            <th>Registration Deadline for Approved Abstract Presenters</th>
                            <td class="f_bold">August 24 (Thu)</td>
                        </tr>
                    </table>
                </div>
            </div>
			<!--Schedule of Poster Exhibition-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">Schedule of Poster Exhibition</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
                     <table class="c_table detail_table ">
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tr>
							<th></th>
                            <th class="f_bold text_center">Day 1 <br class="br_mb_only">(Sep. 7)</th>
                            <th class="f_bold text_center">Day 2 <br class="br_mb_only">(Sep. 8)</th>
                            <th class="f_bold text_center">Day 3 <br class="br_mb_only">(Sep. 9)</th>
                        </tr>
						<tr>
							<td class="text_center">Time</td>
							<td class="text_center">TBD</td>
							<td class="text_center">TBD</td>
							<td class="text_center">TBD</td>
						</tr>
						<tr>
							<td class="text_center">Location</td>
							<td class="text_center">TBD</td>
							<td class="text_center">TBD</td>
							<td class="text_center">TBD</td>
						</tr>
                    </table>
                </div>
            </div>
			<!--Submission of Presentation Material-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">Submission of Presentation Material</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• The ICOMES secretariat will be responsible for the printing and display of posters on behalf of the presenter.</li>
						<li>• It is mandatory for all presenters of posters to submit their final presentation materials, including PPT and PDF formats, to the secretariat via email (<a href="mailto:icomes@into-on.com" class="font_inherit link">icomes@into-on.com</a>) before the deadline of <span class="f_bold">August 24(Thu)</span>.</li>
						<li class="f_bold">• Please download the designated poster form below.</li>
						<li>• If presenters fail to submit their posters before the designated deadlines, they may face penalties such as automatic withdrawal of their accepted abstracts. Therefore, it is strongly advised that presenters keep this in mind and submit their posters in a timely manner.</li>
					</ul>
				</div>
				<div class="text_center btn_box mt25">
					<a href="javascript:;" class="btn long_btn" target="_blank" download><img src="./img/icons/icon_download_white.svg" alt="">Poster Form Download</a>
                    <!--
					<a href="javascript:;" class="btn long_btn type2" target="_blank" download="">
						Poster Form Download<img src="./img/icons/icon_download_yellow.svg" alt="">
					</a> -->
                </div>
			</div>
			<!--Poster Panel-->
			<div class="poster_panel">
				<div class="section_title_wrap2">
					<h3 class="title">Poster Panel</h3>
				</div>
				<div class="text_box indent">
					<img src="./img/poster_panel.png" alt="Poster Panel">
					<ul>
						<li>• Poster Panel Size: W100 x H250</li>
						<li>• Paper Size: A0 (W84.1 X H118.9)</li>
					</ul>
				</div>
			</div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


<?php include_once('./include/footer.php'); ?>