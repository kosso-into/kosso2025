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
    <h1 class="page_title">발표 안내</h1>
    <div class="inner">
        <ul class="tab_green long presentation">
            <li><a href="./abstract_submission_oral.php">구연 발표</a></li>
            <li class="on"><a href="./abstract_submission_poster_sj.php">포스터 구연</a></li>
            <li><a href="./abstract_exhibition.php">포스터 전시</a></li>
        </ul>
        <div class="section section1">
            <?php
            if (count($key_date) > 0) {
                $weekday = ["일", "월", "화", "수", "목", "금", "토"];
            ?>
            <!--List of Accepted Abstract-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">채택된 초록 목록</h3>
                </div>
                <div class="list_accepted_abstract_btn">
                <button type="button"  class="not_yet"><img src="./img/icons/download_w.svg" />구연 발표</button>
					<button type="button" class="not_yet"><img src="./img/icons/download_w.svg" />포스터 구연</button>
					<button type="button"class="not_yet" ><img src="./img/icons/download_w.svg" />포스터 전시</button>
					<!-- <button type="button" onClick="javascript:window.open('./download/Oral Presentation_0830.pdf')"><img src="./img/icons/download_w.svg" />구연 발표</button>
					<button type="button" onClick="javascript:window.open('./download/Guided Poster Presentation_0817.pdf')"><img src="./img/icons/download_w.svg" />포스터 구연</button>
					<button type="button" onClick="javascript:window.open('./download/Poster Exhibition_0817_v2.pdf')"><img src="./img/icons/download_w.svg" />포스터 전시</button> -->
                </div>
            </div>
            <!--keydate-->
            <div>
            <div class="section_title_wrap2">
                    <h3 class="title">주요 날짜</h3>
                </div>
                <div class="table_wrap detail_table_common">
                    <table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th>초록 접수 오픈</th>
                            <td class="f_bold">12월 11일</td>
                        </tr>
                        <tr>
                            <th>초록 접수 마감</th>
                            <td><span class="font_inherit red_t f_bold">1월 18일(목)</span></td>
                        </tr>
                        <tr>
                            <th>초록 채택 안내</th>
                            <td class="f_bold">TBD</td>
                        </tr>
                        <tr>
                            <th>채택된 초록 발표자의 등록 마감일</th>
                            <td class="f_bold">TBD</td>
                        </tr>
                    </table>
                </div>
            </div>
			<!--session information-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">세션 정보</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
				<table class="c_table detail_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th>진행 장소</th>
                            <td class="f_bold">VISTA HALL</td>
                        </tr>
                        <tr>
                            <th>진행 시간</th>
							<td class="f_bold">3월 9일(토) 12:10-12:40</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
			<!--Language & Length of Presentation-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">발표 시간</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• 발표 인원은 3명입니다.</li>
						<li>• 각 발표자에게 5분의 시간이 주어집니다</li>
					</ul>
				</div>
			</div>
			<!--Submission of Presentation Material-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">발표 자료 제출</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• 제59차 대한비만학회 춘계학술대회 사무국은 발표자를 대신하여 포스터 인쇄 및 전시를 담당합니다.</li>
						
                        <!-- [240112] sujeong / 마감날짜 몰라서 주석 -->
                        <!-- <li>• 모든 포스터 발표자는 PPT, PDF 형식을 포함한 최종 발표 자료를 <span class="f_bold italic">August 24 (Thu)</span>까지 운영사무국 <a href="mailto:ksso@into-on.com" class="parentheses">(<span class="font_inherit link">ksso@into-on.com</span>)</a>으로 제출해야 합니다.</li> -->
                        <li>• 모든 포스터 발표자는 PPT, PDF 형식을 포함한 최종 발표 자료를 운영사무국<a href="mailto:ksso@into-on.com" class="parentheses">(<span class="font_inherit link">ksso@into-on.com</span>)</a>으로 제출해야 합니다.</li>
						<li class="f_bold">• 아래의 지정 포스터 양식을 다운로드 하시기 바랍니다.</li>
						<li>• 발표자가 지정된 마감일까지 포스터를 제출하지 않을 경우 접수된 초록이 자동 철회되는 등의 처벌을 받을 수 있습니다. 따라서 발표자는 이 점을 염두에 두고 적시에 포스터를 제출할 것을 강력히 권장합니다.</li>
					</ul>
				</div>
				<div class="text_center btn_box mt25">
					<a class="btn long_btn not_yet"><img src="./img/icons/icon_download_white.svg" alt="">포스터 양식 다운로드</a>
                    <!-- <a href="./download/ICOMES_2023_Poster_template.pptx" class="btn long_btn" target="_blank" download><img src="./img/icons/icon_download_white.svg" alt="">Poster Form Download</a> -->
					<!--
                    <a href="javascript:;" class="btn long_btn type2" target="_blank" download="">
						Poster Form Download<img src="./img/icons/icon_download_yellow.svg" alt="">
					</a> -->
                </div>
			</div>
			<!--Poster Panel-->
			<div class="poster_panel">
				<div class="section_title_wrap2">
					<h3 class="title">포스터 판넬 및 포스터 사이즈</h3>
				</div>
				<div class="text_box indent">
					<img src="./img/poster_panel.png" alt="Poster Panel">
					<ul>
						<li>• 포스터 판넬 사이즈: W100 x H250 cm</li>
						<li>• 포스터 사이즈: A0 (W84.1 x H118.9 cm)</li>
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