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
            <li class="on"><a href="./abstract_submission_poster_sj.php">포스터 구연발표</a></li>
            <li><a href="./abstract_exhibition.php">포스터 전시</a></li>
        </ul>
        <div class="section section1">
            <?php
            if (count($key_date) > 0) {
                $weekday = ["일", "월", "화", "수", "목", "금", "토"];
            ?>
            <!--List of Accepted Abstract-->
             <!-- [240117] sujeong 학회팀 요청 주석 -->
            <!-- <div>
                <div class="section_title_wrap2">
                    <h3 class="title">채택된 초록 목록</h3>
                </div>
                <div class="list_accepted_abstract_btn">
              	 <button type="button" onClick="javascript:window.open('./download/Oral Presentation_0830.pdf')" class="not_yet"><img src="./img/icons/download_w.svg" />구연 발표</button>
				 <button type="button" onClick="javascript:window.open('./download/Guided Poster Presentation_0817.pdf')"><img src="./img/icons/download_w.svg" />Guided Poster Presentation</button>
					<button type="button"class="not_yet" onClick="javascript:window.open('./download/Poster Exhibition_0817_v2.pdf')"><img src="./img/icons/download_w.svg" />포스터 전시</button>
                </div>
            </div> -->
            <!--keydate-->
             <!-- [240117] sujeong 학회팀 요청 삭제 -->
            <!-- <div>
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
            </div> -->
			<!--session information-->
            <div>
                <div class="section_title_wrap2">
                    <h3 class="title">세션 안내</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
				<table class="c_table detail_table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <tr>
                            <th class="text_center">구분</th>
                            <th class="text_center">Guided Poster Presentation</th>
                        </tr>
                        <tr>
                            <td class="text_center">날짜</td>
							<td class="text_center">3월 9일(토)</td>
                        </tr>
                        <tr>
                            <td class="text_center">시간</td>
                            <td class="text_center">12:15-12:30</td>
                        </tr>
                        <tr>
                            <td class="text_center">장소</td>
                            <td class="text_center">비스타홀 통로 포스터존(B2)</td>
                        </tr>
                    </table>
                </div>
            </div>
			<!--Language & Length of Presentation-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">포스터 구연발표 안내</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• 발표는 한국어로 진행됩니다.</li>
						<li>• 각 발표는 5분의 시간이 주어집니다.(질의응답 포함)</li>
					</ul>
				</div>
			</div>
			<!--Submission of Presentation Material-->
			<div>
				<div class="section_title_wrap2">
					<h3 class="title">전시 안내</h3>
				</div>
				<div class="text_box indent">
					<ul>
						<li>• 부착 전 포스터 번호를 꼭 확인하신 후, 배정된 판넬에 부착하여 주십시오.</li>
                        <li>• 포스터는 정해진 사이즈에 맞추어 직접 제작 및 현장 부착을 하여야 합니다.</li>
						<li>• 포스터 게시는 학회 종료 시까지 반드시 유지하여야 합니다. 게시가 누락되는 일이 없도록 협조해 주십시오.</li>
						<li class="f_bold">• 부착 및 철거 시간을 반드시 지켜주십시오. 시간을 지키지 않은 경우, 심사에서 제외될 수 있습니다. </li>
					</ul>
				</div>
				<div class="text_center btn_box mt25">
					<!-- <a class="btn long_btn not_yet"><img src="./img/icons/icon_download_white.svg" alt="">포스터 양식 다운로드</a> -->
                    <!-- <a href="./download/ICOMES_2023_Poster_template.pptx" class="btn long_btn" target="_blank" download><img src="./img/icons/icon_download_white.svg" alt="">Poster Form Download</a> -->
					<!--
                    <a href="javascript:;" class="btn long_btn type2" target="_blank" download="">
						Poster Form Download<img src="./img/icons/icon_download_yellow.svg" alt="">
					</a> -->
                </div>
			</div>
            <!--설치 및 철거 시간 -->
            <div>
            <div class="section_title_wrap2">
                    <h3 class="title">설치 및 철거 시간</h3>
                </div>
                <div class="table_wrap detail_table_common x_scroll">
				   <table class="c_table">
					   <colgroup>
						   <col>
						   <col>
						   <col>
					   </colgroup>
					   <tr>
                            <th></th>	 
						   <th class="f_bold text_center">설치</th>
						   <th class="f_bold text_center">철거</th>
					   </tr>
					<tr>
                        <td class="text_center" >날짜 / 시간</td>
						<td class="text_center">3월 9일(토)<br>07:30 - 10:00</td>
						<td class="text_center">3월 9일(토)<br>16:30 - 18:00</td>
					</tr>
                    <tr>
                        <td class="text_center" >장소</td>
						<td class="text_center" colspan="2">비스타홀2 통로 포스터존(B2)</td>
					</tr>
					<tr>
						<td class="text_center" colspan="3">3월 9일 18:00이후 부착되어 있는 포스터는 임의로 철거됩니다</td>	
					</tr>
				   </table>
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
						<li>• 포스터 판넬 사이즈(cm): W100 x H250</li>
						<li>• <span class="bold">포스터 사이즈(cm): A0</span>(W84.1 x H118.9)</li>
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