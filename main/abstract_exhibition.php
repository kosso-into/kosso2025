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
            <!-- <li><a href="./abstract_submission_poster.php">Guided Poster Presentation</a></li> -->
            <li class="on"><a href="./abstract_exhibition.php">포스터 전시</a></li>
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
					<button type="button" onClick="javascript:window.open('./download/Oral Presentation_0830.pdf')"><img src="./img/icons/download_w.svg" />구연 발표</button>
					<!-- <button type="button" onClick="javascript:window.open('./download/Guided Poster Presentation_0817.pdf')"><img src="./img/icons/download_w.svg" />Guided Poster Presentation</button> -->
					<button type="button" onClick="javascript:window.open('./download/Poster Exhibition_0817_v2.pdf')"><img src="./img/icons/download_w.svg" />포스터 전시</button>
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
                            <td><span class="font_inherit red_t f_bold">1월 9일(화)</span></td>
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
			<!--Schedule of Poster Exhibition-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">포스터전시 일정</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
				   <table class="c_table detail_table">
					   <colgroup>
						   <col>
						   <col>
						   <col>
					   </colgroup>
					   <tr>
						   <th></th>
						   <th class="f_bold text_center">3월 8일(금)</th>
						   <th class="f_bold text_center">3월 9일(토)</th>
					   </tr>
					<tr>
						<td class="text_center">장소</td>
						<td class="text_center">TBD</td>
						<td class="text_center">TBD</td>
					</tr>
					<tr>
						<td class="text_center">시간</td>
						<td class="text_center">TBD</td>
						<td class="text_center">TBD</td>
					</tr>
				   </table>
                </div>
            </div>
			<!-- <p class="mt10">* September 7th is closed for poster installation. </p> -->
			<!--Submission of Presentation Material-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">전시 안내</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• 반드시 본인의 포스터 판넬에 본인의 포스터를 부착하여야 합니다.</li>
						<li>• 포스터 채택자는 정해진 포스터 사이즈에 맞추어 제작하여 직접 인쇄 및 현장에서 부착하여야 합니다. (학회에서 인쇄 및 부착 진행하지 않습니다.)</li>
						<li>• 포스터 게시는 학회 종료 시까지 반드시 유지하여야 합니다. 게시가 누락되는 일이 없도록 협조해 주십시오.</li>
						<li class="f_bold">• 부착 및 철거 시간을 반드시 엄수해 주십시오. 심사 시작 이후 포스터 부착 시 포스터 심사에서 제외될 수 있습니다.</li>
					</ul>
				</div>
				<!-- <div class="text_center btn_box mt25">
					<a href="./download/ICOMES_2023_Poster_template.pptx" class="btn long_btn" target="_blank" download><img src="./img/icons/icon_download_white.svg" alt="">Poster Form Download</a>
                
					<a href="javascript:;" class="btn long_btn type2" target="_blank" download="">
						Poster Form Download<img src="./img/icons/icon_download_yellow.svg" alt="">
					</a> 
                </div> -->
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