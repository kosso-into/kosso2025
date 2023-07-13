<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCLHJ : app setting 페이지 -->
<section class="container app_setting app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			Setting
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';">
				<img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동">
			</button>
		</h2>
		<p class="app_setting_desc">ICOMES 2023 event information and real-time information can be received by mobile app push.</p>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="app_push_area">
				<p>PUSH</p>
				<div class="app_push_wrapper">
					<input type="checkbox" id="app_push_switch">
					<label for="app_push_switch" class="app_push_switch_label">
						<span class="app_push_btn"></span>
					</label>
				</div>
			</div>
			<p class="app_setting_desc">If your iOS user does not receive the PUSH notification, please proceed as follows: iPhone > Settings > Notification > ICOMES 2023. Change the notification permission to ‘ON’</p>
		</div>
	</div>
</section>

<?php include_once('./include/app_footer.php');?>