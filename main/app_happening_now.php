<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- HUBDNCAJY : App - HAPPENING NOW 페이지 -->
<section class="container app_version app_happening app_scientific">
	<div class="app_title_box">
		<h2 class="app_title">
			HAPPENING NOW
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='javascript:;';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="contents_box">
		<div class="schedule_area">
			<!-- 진행중인 세션 있을 시 화면 -->
			<ul class="program_detail_ul">
				<li name="plenary_lecture_1" class="day_2">
					<div class="main">
						<button class="detail_btn"></button>
						<p class="title">Plenary Lecture 1</p>
						<p class="chairperson"><span class="bold">Chairpersons:</span> Thiruma V. Arumugam (La Trobe University, Australia), <br>Thiruma V. Arumugam (La Trobe University, Australia)</p>
						<div class="info">
							<span class="time">08:30-09:10</span>	
							<span class="branch">Room 1</span>	
						</div>
					</div>
					<input type="hidden" name="e" value="room1">
				</li>
				<li name="plenary_lecture_1_2" class="day_2">
					<div class="main">
						<button class="detail_btn"></button>
						<p class="title">Plenary Lecture 1</p>
						<p class="chairperson"><span class="bold">Chairpersons:</span> Thiruma V. Arumugam (La Trobe University, Australia), <br>Thiruma V. Arumugam (La Trobe University, Australia)</p>
						<div class="info">
							<span class="time">08:30-09:10</span>	
							<span class="branch">Room 2</span>	
						</div>
					</div>
					<input type="hidden" name="e" value="room2">
				</li>
				<li name="plenary_lecture_1_3" class="day_2">
					<div class="main">
						<button class="detail_btn"></button>
						<p class="title">Plenary Lecture 1</p>
						<p class="chairperson"><span class="bold">Chairpersons:</span> Thiruma V. Arumugam (La Trobe University, Australia), <br>Thiruma V. Arumugam (La Trobe University, Australia)</p>
						<div class="info">
							<span class="time">08:30-09:10</span>	
							<span class="branch">Room 3</span>	
						</div>
					</div>
					<input type="hidden" name="e" value="room3">
				</li>
			</ul>
			<!-- 진행중인 세션 없을 시 화면 -->
			<!--	<div class="no_data">
				<img src="/main/img/icons/icon_alarm_clock2.svg" alt="">
				<p>To be<br>announced</p>
			</div> -->
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$(".program_detail_ul > li").click(function() {
			var e = $(this).find("input[name=e]").val();
			var day = $(this).attr("class");
			var target = $(this)
			var this_name = $(this).attr("name");

			table_location(event, target, e, day, this_name);
		});

		function table_location(event, _this, e, day, this_name) {
			//window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
			window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
		};
    });
</script>

<?php include_once('./include/app_footer.php');?>