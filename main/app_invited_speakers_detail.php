<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>

<!-- App - Invited Speakers 페이지 -->
<section class="container app_version app_scientific app_invited_speakers_detail">
	<div class="app_title_box">
		<h2 class="app_title">
			Invited Speakers
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_invited_speakers.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="inner">
		<ul class="speaker_list_wrap">
			<li class="speaker08 on">
				<div class="speakers_detail">
					<img src="./img/img_speakers08.jpg" alt="">
					<div class="detail_box">
						<p>Jae Myoung Suh<span>KAIST, Republic of Korea</span></p>
						<a href="javascript:;" class="download_btn">CV</a>
					</div>
				</div>
				<div class="schedule_area">
					<ul class="program_detail_ul">
						<li name="keynote_lecture_2" class="day_3">
							<div class="main">
								<button class="detail_btn"></button>
								<p class="title">Keynote Lecture 2</p>
								<p class="chairperson"><span class="bold">Chairpersons:</span> Jae Myoung Suh (KAIST, Republic of Korea)</p>
								<div class="info">
									<span class="time">11:00-11:40</span>	
									<span class="branch">Room 1</span>	
								</div>
							</div>
							<input type="hidden" name="e" value="room1">
						</li>
						<li name="keynote_lecture_2_2" class="day_3">
							<div class="main">
								<button class="detail_btn"></button>
								<p class="title">Keynote Lecture 2</p>
								<p class="chairperson"><span class="bold">Chairpersons:</span> Jae Myoung Suh (KAIST, Republic of Korea)</p>
								<div class="info">
									<span class="time">11:00-11:40</span>	
									<span class="branch">Room 2</span>	
								</div>
							</div>
							<input type="hidden" name="e" value="room2">
						</li>
						<li name="keynote_lecture_2_3" class="day_3">
							<div class="main">
								<button class="detail_btn"></button>
								<p class="title">Keynote Lecture 2</p>
								<p class="chairperson"><span class="bold">Chairpersons:</span> Jae Myoung Suh (KAIST, Republic of Korea)</p>
								<div class="info">
									<span class="time">11:00-11:40</span>	
									<span class="branch">Room 3</span>	
								</div>
							</div>
							<input type="hidden" name="e" value="room3">
						</li>
					</ul>
				</div>
			</li>
			<li class="speaker01">
				<!-- 해당 speaker01 content -->
			</li>
			<li class="speaker02">
				<!-- 해당 speaker02 content -->
			</li>
			<li class="speaker03">
				<!-- 해당 speaker03 content -->
			</li>
			<li class="speaker04">
				<!-- 해당 speaker04 content -->
			</li>
			<li class="speaker05">
				<!-- 해당 speaker05 content -->
			</li>
			<li class="speaker06">
				<!-- 해당 speaker06 content -->
			</li>
		</ul>
	</div>
</section>

<script>
	$(document).ready(function() {

		$(".program_detail_ul > li").click(function() {
			var e = $(this).find("input[name=e]").val();
			var day = $(this).attr("class");
			var target = $(this)
			var this_name = $(this).attr("name");
			/*console.log(event, "event")
			console.log(target, "target")
			console.log(e, "e")
			console.log(day, "day")
			console.log(this_name, "this_name")*/
			table_location(event, target, e, day, this_name);

			
		});

	});

	function table_location(event, _this, e, day, this_name) {
		// window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
		window.location.href = "./app_program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;
	}

/*
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
*/
</script>

<?php include_once('./include/app_footer.php');?>