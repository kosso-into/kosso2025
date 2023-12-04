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
            <li class="on"><a href="./abstract_submission_oral.php">구연 발표</a></li>
            <!-- <li><a href="./abstract_submission_poster.php">Guided Poster Presentation</a></li> -->
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
					<!-- <button type="button" onClick="javascript:window.open('./download/Guided Poster Presentation_0817.pdf')"><img src="./img/icons/download_w.svg" />Guided Poster Presentation</button> -->
					<button type="button"class="not_yet" ><img src="./img/icons/download_w.svg" />포스터 전시</button>
              	<!--  <button type="button" onClick="javascript:window.open('./download/Oral Presentation_0830.pdf')" class="not_yet"><img src="./img/icons/download_w.svg" />구연 발표</button>
				 <button type="button" onClick="javascript:window.open('./download/Guided Poster Presentation_0817.pdf')"><img src="./img/icons/download_w.svg" />Guided Poster Presentation</button>
					<button type="button"class="not_yet" onClick="javascript:window.open('./download/Poster Exhibition_0817_v2.pdf')"><img src="./img/icons/download_w.svg" />포스터 전시</button> -->
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
			<!--session information-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">세션 정보</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
                     <table class="c_table">
                        <colgroup>
                            <col class="submission_col">
                            <col>
                        </colgroup>
                        <tr>
                            <th class="centerT f_bold text_center"></th>
                            <th class="centerT f_bold">Oral Presentation 1</th>
                            <th class="centerT f_bold">Oral Presentation 2</th>
                            <!-- <th class="centerT f_bold">Oral Presentation 3</th>
                            <th class="centerT f_bold">Oral Presentation 4</th> -->
                        </tr>
						<tr>
							<td class="text_center">날짜 / 시간</td>
							<td class="text_center">3월 8일</td>
							<!-- <td class="text_center">3월 8일</td> -->
							<td class="text_center">3월 9일</td>
							<!-- <td class="text_center">3월 9일</td> -->
						</tr>
						<tr>
							<td class="text_center">장소</td>
							<td class="text_center">TBD</td>
							<td class="text_center">TBD</td>
							<!-- <td class="text_center">TBD</td>
							<td class="text_center">TBD</td> -->
						</tr>
                    </table>
                </div>
            </div>
			<!--Language & Length of Presentation-->
			<!-- <div>
				<div class="section_title_wrap2">
					<h3 class="title">Language & Length of Presentation</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• Language: English</li>
						<li>• Each presenter will be given 10 minutes. (7 minutes talk / 3 minutes Q&A)</li>
					</ul>
				</div>
			</div> -->
			<!--Preview Room-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">프리뷰 룸</h3>
					<p>
                    세션에 앞서 모든 발표자는 반드시 프리뷰 룸을 방문하여 프레젠테이션 파일을 확인하고 업로드해야 합니다.
					</p>
				</div>
				<div class="table_wrap detail_table_common">
                       <table class="c_table detail_table">
                           <colgroup>
                               <col>
                               <col>
                               <col>
                           </colgroup>
                           <tr>
                               <th></th>
<!--                                <th class="f_bold text_center">Sep. 7 (Thu)</th> -->
                               <th class="f_bold text_center">3월 8일(금)</th>
                               <th class="f_bold text_center">3월 9일(토)</th>
                           </tr>
						<tr>
							<td class="text_center">위치</td>
<!-- 							<td class="text_center">Dressing Room, 3F</td> -->

                            <td class="text_center">TBD</td></td>
							<td class="text_center">TBD</td>
							<!-- <td class="text_center">Park Studio, 5F</td>
							<td class="text_center">Park Studio, 5F</td> -->
						</tr>
						<tr>
							<td class="text_center">운영 시간</td>
<!-- 							<td class="text_center">14:00 - 19:00</td> -->
							<td class="text_center">TBD</td>
							<td class="text_center">TBD</td>
						</tr>
                       </table>
                   </div>
			</div>
			<!--Presentation Material-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">발표 안내</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• 각 발표 당 7분 발표 및 3분 토의, 총 10분의 시간이 주어집니다.</li>
						<li>• 발표 자료는 16:9 비율의 파워포인트 슬라이드로 작성하시어 PPT, PDF 파일 2종을 사무국 이메일 <a href="mailto:ksso@into-on.com" class="parentheses">(<span class="font_inherit link">ksso@into-on.com</span>)</a> 로 제출해 주십시오.</li>
						<li>• 맥북 사용자라면 애플 어댑터(연결 케이블)를 지참해 주시기 바랍니다.</li>
						<li>• 세션 시작 1시간 전, 등록 데스크에서 등록 절차 완료 후 프리뷰룸에 반드시 방문하여 최종 발표 자료를 확인해 주십시오.</li>
                        <li>• 자료에 동영상이나 음성 파일이 있다면 작동이 안 될 경우를 대비해 각 파일을 추가로 지참해 주시기 바랍니다.</li>
						 <li>• MS에서 제공하지 않는 폰트를 사용하는 경우, 폰트 파일을 파일에 저장해 주세요.</li>
						<!--<li>• If you have videos or voice files in your materials, please bring each file additionally in case it does not work.</li>
						<li>• If you use fonts that are not offered by MS, please save the font file in the file.</li>
						<li>• If you are a MacBook user, please bring Apple adapters (connecting cables).</li>
						<li>• Operating staff will be assigned to each room to assist you with any technical issues.</li> -->
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