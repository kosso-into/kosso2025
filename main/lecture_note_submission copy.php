<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	// key date
	$sql_key_date =	"SELECT
						idx, `key_date`, contents_".$language." AS contents
					FROM key_date
					WHERE `type` = 'lecture'
					AND `key_date` <> '0000-00-00'
					ORDER BY idx";
	$key_date = get_data($sql_key_date);

	// info
	$sql_info = "SELECT
					note_msg_".$language." AS note_msg,
					formatting_guidelines_".$language." AS formatting_guidelines,
					how_to_modify_".$language." AS how_to_modify
				FROM info_lecture";
	$info = sql_fetch($sql_info);

?>

<section class="container lecture_guideline">
	<div class="inner">
		<h1 class="page_title">Lecture Note Submission</h1>
		<ul class="tab_green">
			<li class="on"><a href="">Lecture Note Submission Guideline</a></li>
			<li><a href="./lecture_submission.php" class="online_submission_alert">Online Submission</a></li>
			<!--
			<li><a href="javascript:;" class="btn active"><?=$locale("lecture_menu1")?></a></li>
			<li><a href="./lecture_submission.php" class="btn"><?=$locale("lecture_menu2")?></a></li>
			<li><a href="./oral_presenters.php" class="btn"><?=$locale("lecture_menu3")?></a></li>
			<li><a href="./eposter_presenters.php" class="btn"><?=$locale("lecture_menu4")?></a></li> -->
		</ul>
		<div class="section section1">
			<!-- 1. Message | start -->
			<div class="details">
				<!-- <?=htmlspecialchars_decode(strip_tags($info['note_msg']))?> -->
				<p>The ICOMES 2022 Organizing Committee would like to express its appreciation to all the invited speakers for their contribution to the Congress. For lecture syllabus submissions, please refer to the below guidelines.</p>
			</div>
			<!-- 1. Message | end -->
			<?php
				if (count($key_date) > 0) {
					$weekday = ["일", "월", "화", "수", "목", "금", "토"];
			?>
			<!-- 2. keydate | start -->
			<div class="section_title_wrap2">
				<h3 class="title"><!--<?=$locale("keydate")?>-->Key Dates</h3>
			</div>
			<div class="table_wrap detail_table_common">
				<table class="c_table detail_table">
					<colgroup>
						<col class="submission_col">
						<col>
					</colgroup>
					<tbody>
						<!-- 기존 개발소스, 문구 변경으로 주석처리함
						<?php
							foreach($key_date as $kd){
						?>
						<tr>
							<th><?=$kd['contents']?></th>
							<td>
								<?php
									if ($language == "en") {
										echo date_format(date_create($kd['key_date']), "F d(D), Y");
									} else {
										echo date_format(date_create($kd['key_date']), "Y년 m월 d일");
										echo "(";
										echo $weekday[(date_format(date_create($kd['key_date']), "w"))];
										echo ")";
									}
								?>
							</td>
						</tr>
						<?php
							}
						?>-->
						<tr>
							<th>Abstract Submission Due</th>
							<td><?= date_format(date_create($key_date[0]['key_date']), "F d(D), Y"); ?></td>
						</tr>
						<tr>
							<th>Registration Due</th>
							<td>July 28(Thu), 2022</td>
						</tr>
						<tr>
							<th>Lecture Video Submission Due 
								<p class="mt10">(Limited to overseas speakers<br/>who are unable to attend on-site)</p>
							</th>
							<td>July 21(Tue), 2022</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- 2. keydate | end -->
			<?php
				}
			?>



			<!-- 3. Lecture Note | start -->
			<div class="section_title_wrap2">
				<h3 class="title"><?=$locale("lecture_note_tit")?></h3>
				<div class="m10">
					<a href="./download/ICOMES_2022_Abstract_Template_Download.docx" class="btn long_btn" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt=""><?=$locale("lecture_note_btn")?></a>
				</div>
			</div>
			<div class="details">
				<p class="pre"><!--<?=$locale("lecture_note_txt")?>-->Each invited speaker is requested to submit a lecture note to be included in Conference Program Book. Please submit your lecture note until June 9 (Thu), 2022 via online website. Please download the “Lecture Note Form and Instruction” for more information.</p>
			</div>
			<!-- 3. Lecture Note | end -->



			<!-- 4. Lecture Video | start 
			<div class="section_title_wrap2">
				<h3 class="title"><?=$locale("lecture_video_tit")?></h3>
				<div class="m10">
					<p class="m10"><?=$locale("lecture_video_btn_des")?></p>
					<!--
					<a href="./download/icomes_making_presentation_mac.pdf" class="btn long_btn" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt=""><?=$locale("lecture_video_btn")?></a>
					<a href="./download/icomes_making_presentation_ppt.pdf" class="btn long_btn" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt=""><?=$locale("lecture_video_btn2")?></a> //
					<a href="./download/ICOMES_2022_Making_Lecture_Video_Guide.pdf" class="btn long_btn" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt="">Making Lecture Video Guide</a>
				</div>
			</div>
			<div class="details">
				<p class="pre"><!-- <?=$locale("lecture_video_txt1")?> //Each invited speaker is requested to submit the video recording of their lecture. Please download the guideline for more information. Submission due of presentation video is August 9(Thu), 2022.<br>**Video files must be saved in (*.mp4).</p>
				<p class="pre"><?=$locale("lecture_video_txt2")?></p>
			</div>-->
			<!--
			<div class="btn_wrap mTop_20">
				<a href="https://www.dropbox.com/request/MU8mnzHk8Wh3V23foa7V" target="_blank" class="btn link_btn"><?=$locale("lecture_video_txt3")?></a>
			</div> -->
			<!-- 4. Lecture Video | end -->



			<!-- 5. Copyright Transfer Agreement | start 
			<div class="section_title_wrap2">
				<h3 class="title"><!--<?=$locale("copyright_tit")?>//VOD Provide Agreement</h3>
				<div class="m10">
					<a href="./download/ICOMES_2022_VOD_Provide_Agreement_Form.docx" class="btn long_btn" target="_blank"><img src="./img/icons/icon_download_yellow.svg" alt=""><!--<?=$locale("lecture_copyright_btn")?>//VOD Provide Agreement Form</a>
				</div>
			</div>
			<div class="details">
				<p class="pre"><!--<?=$locale("lecture_copyright_txt")?>//Please fill out the “VOD provide agreement” and send it to the secretariat via e-mail. After the conference, lecture videos will be provided as a VOD service through the ICOMES 2022 website for members of the society for a certain period of time.</p>
			</div>-->
			<!-- 5. Copyright Transfer Agreement | end -->


			<!-- 6. Speakers Preview room | start -->
			<div class="section_title_wrap2">
				<h3 class="title"><?=$locale("lecture_speakers_tit")?></h3>
			</div>
			<div class="table_wrap preview_room">
				<table class="c_table2 detail_table">
					<thead>
						<tr>
							<th><?=$locale("date")?></th>
							<th><?=$locale("time")?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><!--<?=$locale("lecture_date_txt")?>-->September 1(Thu) ~ 3(Sat), 2022</td>
							<td><?=$locale("lecture_time_txt")?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="details">
				<ul>
					<li>
						<!-- - <?=$locale("lecture_speakers_txt1")?> -->
						- Checking slide-deck(s) at the speaker's preview room is the single most important action you will take to ensure your presentation is a success. It is required to check into the place at least 1 hour before presentation start time.
					</li>
					<li>
						<!-- - <?=$locale("lecture_speakers_txt2")?> -->
						- Authors should make sure all fonts appear as expected and all sound/video clips are working properly while reviewing presentation slides.	
					</li>
					<li>
						<!-- - <?=$locale("lecture_speakers_txt3")?> -->
						- Note: It is possible to bring your slides onto either USB stick	
					</li>
				</ul>
			</div>
			<!-- 6. Speakers Preview room | end -->


		</div>	
	</div>
	<!-- <button type="button" class="fixed_btn" onclick="window.location.href='./lecture_submission.php';"><?=$locale("invited_speakers_btn")?></button> -->
</section>

<?php include_once('./include/footer.php');?>