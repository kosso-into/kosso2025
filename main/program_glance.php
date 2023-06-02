<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>

<style>
/*
.best_jomes {
    padding-bottom: 43px !important;
}

.best_jomes:after {
    content: '';
    display: block;
    width: 100%;
    height: 32px;
    background-color: #fff;
    position: absolute;
    left: 0;
    bottom: 0;
}
*/
</style>

<section class="container program_glance">
    <h1 class="page_title">Program at a Glance</h1>
    <div class="inner">
        <!-- <img class="coming" src="./img/coming.png" /> -->
        <div class="program_wrap section">
            <!-- <img src="./img/sample/icomes_program.svg" style="max-width:100%;"> -->
            <div class="scroll_table">
                <ul class="tab_green long centerT program_glance">
					<li class="on"><a href="javascript:;">All Days<br/>September 7(Thu) ~ 9(Sat)</a></li>
					<li><a href="javascript:;">Sep.7(Thu)</a></li>
					<li><a href="javascript:;">Sep.8(Fri)</a></li>
					<li><a href="javascript:;">Sep.9(Sat)</a></li>
				</ul>
				<div class="rightT mb20">
                    <!-- <h3 class="title red_t">* K=Korean Session</h3> -->
                    <!-- onclick="javascript:window.open('./download/ICOMES2022_Program at a Glance.pdf')" -->
                    <!-- onclick="javascript:window.open('./download/icomes2022_program_glance_2.pdf')" -->
                    <button onclick="javascript:window.open('./download/ICOMES_2023_Program_at_a_glance.xlsx')"
                        class="btn blue_btn nowrap"><img src="./img/icons/icon_download_white.svg" alt="">Program at a Glance Download</a>
                </div>
				<div class="program_table_wrap">
					<table class="program_table main-table">
						<colgroup>
							<col class="program_first_col">
							<col class="program_first_col">
						</colgroup>
						<thead>
							<tr>
								<th class="font_big">Time/Location</th>
								<th>Room 1<br> </th>
								<th>Room 2</th>
								<th>Room 3</th>
								<th>Room 4</th>
								<th>Room 5</th>
								<th>Room 6</th>
								<th>Room 7</th>
							</tr>
							<tr>
								<th colspan="8" class="font_big day_tbody day_1">Day 1 - 2023.9.7 (Thu)</th>
							</tr>
						</thead>
						<!---------- DAY 1 ---------->
						<tbody name="day" class="day_tbody day_1">
							<tr>
								<td>17:00-18:30(90")</td>
								<td class="purple_bg pointer" name="pre_congress_symposium_1">
									Pre-congress<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="purple_bg pointer" name="pre_congress_symposium_2">
									Pre-congress<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>18:30-19:00(30")</td>
								<td colspan="2" class="light_gray_bg">Break</td>
								<td rowspan="3" class="yellow_bg pointer" name="welcome_cocktail_party">
									Welcome<br />Cocktail Party
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>19:00-20:00(60")</td>
								<td class="sky_bg pointer" name="satellite_symposium_1">
									Satellite<br />Symposium 1, 2
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="satellite_symposium_2">
									Satellite<br />Symposium 3
									<input type="hidden" name="e" value="room2">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>20:00-21:00(60")</td>
								<td></td>
								<!--
								<td class="yellow_bg pointer" name="satellite_symposium_3">
									Satellite<br />Symposium 3
									<input type="hidden" name="e" value="room1">
								</td> -->
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
						<!---------- DAY 2 ---------->
						<thead>
							<tr>
								<th colspan="8" class="font_big day_tbody day_2">Day 2 - 2023.9.8 (Fri)</th>
							</tr>
						</thead>
						<tbody name="day" class="day_tbody day_2">
							<tr>
								<td>07:30-08:20(50")</td>
								<td class="sky_bg pointer" name="breakfast_symposium_1">
									Breakfast<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_2">
									Breakfast<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_3">
									Breakfast<br />Symposium 3
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>08:20-08:30(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>08:30-09:10(40")</td>
								<td colspan="3" class="pink_bg pointer" name="plenary_lecture_1">
									Plenary Lecture 1 <br/>Intermittent Metabolic Switching and Brain Health
									<p>Thiruma V. Arumugam <br/>(La Trobe University, Centre for Cardiovascular Biology and Disease Research, Australia)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>09:10-09:20(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>09:20-10:50(90")</td>
								<td class="green_bg pointer" name="symposium_1">
									Symposium 1 <br/>Obesity and Cancer
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_2">
									Symposium 2 <br/>Obesity and Neurodegenerative Diseases
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_3">
									Symposium 3 <br/>Digital Therapeutics in Obesity Management
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_4">
									Symposium 4 <br/>The Myosteatosis: Novel Aspect of Sarcopenia and Obesity
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer" name="sponsored_session_1">Sponsored<br />Session 1
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="purple_bg pointer" name="joint_symposium_easo">
									Joint Symposium EASO
									<input type="hidden" name="e" value="room6">
								</td>
								<td></td>
							</tr>
							<tr>
								<td>10:50-11:00(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>11:00-11:10(10")</td>
								<td colspan="3" class="yellow_bg pointer" name="opening_address">
									Opening Address
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:10-11:50(40")</td>
								<td colspan="3" class="pink_bg pointer" name="keynote_lecture_1">
									Keynote Lecture 1 <br/>Adipocyte Biology
									<p>Matthias Blüher Matthias Blüher <br/>(University of Leipzig, Germany)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:50-12:00(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>12:00-13:00(60")</td>
								<td class="sky_bg pointer" name="luncheon_symposium_1">
									Luncheon<br />Symposium 1
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_2">
									Luncheon<br />Symposium 2
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_3">
									Luncheon<br />Symposium 3
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>13:00-14:00(60")</td>
								<!-- <td colspan="3" class="green_bg" name="poster_exhibition_d2"> -->
								<!-- 	<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e" value="room1"> -->
								<!-- </td> -->
								<td></td>
								<td></td>
								<td></td>
								<td class="light_orange_bg pointer" name="oral_presentation_1">
									Oral presentation 1
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="light_orange_bg pointer" name="oral_presentation_2">
									Oral presentation 2
									<input type="hidden" name="e" value="room5">
								</td>
								<!-- <td class="green_bg" name="poster_exhibition_d2_r6"> -->
								<!-- 	<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e" value="room6"> -->
								<!-- </td> -->
								<td></td>
								<td class="light_orange_bg pointer" name="guided_poster_presentation_1">
									Guided Poster<br />Presentation 1
									<input type="hidden" name="e" value="room7">
								</td>
							</tr>
							<tr>
								<td>14:00-15:30(90")</td>
								<td class="green_bg pointer" name="symposium_5">
									Symposium 5 <br/>Emerging Anti-obesity Drugs: Expectations and Apprehensions
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_6">
									Symposium 6 <br/>TBD
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_7">
									Symposium 7 <br/>Metabolic Signaling in Obesity-Related Diseases
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_8">
									Symposium 8 <br/>TBD
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer" name="sponsored_session_2">
									Sponsored<br />Session 2
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="purple_bg pointer" name="joint_symposium_aoaso_1">
									Joint Symposium<br/>AOASO 1
									<input type="hidden" name="e" value="room6">
									</td>
								<td></td>
							</tr>
							<tr>
								<td>15:30-15:40(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>15:40-16:20(40")</td>
								<td colspan="3" class="pink_bg pointer" name="plenary_lecture_2">
									Plenary Lecture 2 <br/>Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience
									<p>Robert R. Wolfe  <br/>(University of Arkansas for Medical Sciences, USA)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>16:20-16:30(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>16:30-18:00(90")</td>
								<td class="green_bg pointer" name="symposium_9">
									Symposium 9 <br/>Obesity in Special Conditions
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_10">
									Symposium 10 <br/>TBD
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_11">
									Symposium 11 <br/>Social and Environmental Determinants: Nutritional View of Obesity
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_12">
									Symposium 12 <br/>Obesity: Transition from Adolescence to Young Adult
									<input type="hidden" name="e" value="room4">
								</td>
								<!--<td class="purple_bg" name="joint_symposium_aoaso_2">Joint Symposium<br/>AOASO 2</td>-->
								<!-- <td class="yellow_bg pointer" name="it_융합_대사증후군_위원회_세션"> -->
								<!-- 	IT Convergence Metabolic Syndrome Committee <span class="red_t">(K)</span> -->
								<!-- 	Introduction of the Weight Management Application of the KSSO -->
								<!-- 	<input type="hidden" name="e" value="room6"> -->
								<!-- </td> -->
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>18:00-18:30(30")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>18:30-21:30(180")</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="yellow_bg pointer" name="congress_banquet_ceremony">
									Congress Banquet
									<input type="hidden" name="e" value="room6">
								</td>
								<td></td>
							</tr>
						</tbody>
						<!---------- DAY 3 ---------->
						<thead>
							<tr>
								<th colspan="8" class="font_big day_tbody day_3">Day 3 - 2023.9.9 (Sat)</th>
							</tr>
						</thead>
						<tbody name="day" class="day_tbody day_3">
							<tr>
								<td>07:30-08:20(50")</td>
								<td class="sky_bg pointer" name="breakfast_symposium_4">
									Breakfast<br />Symposium 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_5">
									Breakfast<br />Symposium 5
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="breakfast_symposium_6">
									Breakfast<br />Symposium 6
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>08:20-08:30(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>08:30-09:10(40")</td>
								<td class="pink_bg pointer" name="plenary_lecture_3" colspan="3">
									Plenary Lecture 3
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>09:10-09:20(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>09:20-10:50(90")</td>
								<td class="green_bg pointer" name="symposium_13">
									Symposium 13 <br/>Obesity Co-morbidity
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_14">
									Symposium 14 <br/>Promoting Healthy Muscle and Liver Metabolism
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_15">
									Symposium 15 <br/>Community-based Nutrition Interventions and Approaches for Vulnerable Groups
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_16">
									Symposium 16 <br/>International Obesity Research Group
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer" name="sponsored_session_3">
									Sponsored<br />Session 3
									<input type="hidden" name="e" value="room5">
								</td>
								<td class="purple_bg pointer" name="joint_symposium_tos">
									Joint Symposium TOS
									<input type="hidden" name="e" value="room6">
								</td>
								<td></td>
							</tr>
							<tr>
								<td>10:50-11:00(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>11:00-11:40(40")</td>
								<td class="pink_bg pointer" name="keynote_lecture_2" colspan="3">
									Keynote Lecture 2
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:40-11:50(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>11:50-12:50(60")</td>
								<td class="sky_bg pointer" name="luncheon_symposium_4">
									Luncheon<br />Symposium 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_5">
									Luncheon<br />Symposium 5
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="sky_bg pointer" name="luncheon_symposium_6">
									Luncheon<br />Symposium 6
									<input type="hidden" name="e" value="room3">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>12:50-13:50(60")</td>
								<!-- <td colspan="3" class="green_bg" name="poster_exhibition_d3"> -->
								<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e" value="room1"> -->
								<!-- </td> -->
								<td></td>
								<td></td>
								<td></td>
								<td class="light_orange_bg pointer" name="oral_presentation_3">
									Oral Presentation 3
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="light_orange_bg pointer" name="oral_presentation_4">
									Oral Presentation 4
									<input type="hidden" name="e" value="room5">
								</td>
								<!-- <td class="green_bg" name="poster_exhibition_d3_r6"> -->
								<!-- 	Poster Exhibition -->
								<!-- 	<input type="hidden" name="e"> -->
								<!-- </td> -->
								<td></td>
								<td class="light_orange_bg pointer" name="guided_poster_presentation_2">
									Guided Poster<br />Presentation 2
									<input type="hidden" name="e" value="room7">
								</td>
							</tr>
							<tr>
								<td>13:50-14:20(30")</td>
								<td class="pink_bg pointer" name="keynote_lecture_3" colspan="3">
									Keynote Lecture 3
									<p>Dopamine Subsystems that Track Internal States Zachary Knight <br/>(University of California, San Francisco, USA)</p>
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>14:20-14:30(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>14:30-15:10(40")</td>
								<td class="pink_bg pointer" name="plenary_lecture_4" colspan="3">
									Plenary Lecture 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>15:10-15:20(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>15:20-15:50(30")</td>
								<td class="pink_bg pointer" name="keynote_lecture_4" colspan="3">
									Keynote Lecture 4
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>15:50-16:00(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>16:00-17:30(90")</td>
								<td class="green_bg pointer" name="symposium_17">
									Symposium 17 <br/>The Power of Synergy: Optimizing Anti-Obesity Treatment with Combination Pharmacotherapy
									<input type="hidden" name="e" value="room1">
								</td>
								<td class="green_bg pointer" name="symposium_18">
									Symposium 18 <br/>Neuroscience
									<input type="hidden" name="e" value="room2">
								</td>
								<td class="green_bg pointer" name="symposium_19">
									Symposium 19 <br/>Perceptions and Reality in Childhood and Adolescence Obesity
									<input type="hidden" name="e" value="room3">
								</td>
								<td class="green_bg pointer" name="symposium_20">
									Symposium 20
									<input type="hidden" name="e" value="room4">
								</td>
								<td class="sky_bg pointer best_jomes" name="jomes_session">
									Best Article in JOMES
									<input type="hidden" name="e" value="room5">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>17:30-17:40(10")</td>
								<td colspan="7" class="light_gray_bg">Break</td>
							</tr>
							<tr>
								<td>17:40-18:00(20")</td>
								<td class="yellow_bg pointer" name="closing_ceremony" colspan="3">
									Closing Ceremony
									<input type="hidden" name="e" value="room1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
            </div>
        </div>
        <!--//section1-->

    </div>

</section>

<script>
$(document).ready(function() {
	/*$("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        table_location(event, target, e, day, this_name);
    });*/
	$("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        table_location(event, target, e, day, this_name);
    });
	$(".tab_green li").click(function(){
		var this_index = $(this).index();
		if (!this_index == 1){
			$(".day_tbody").show();
		}else {
			$(".day_tbody").hide();
			$(".day_tbody.day_"+this_index+"").show();
		}

	});
});

function table_location(event, _this, e, day, this_name) {
    window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;

}
</script>

<?php include_once('./include/footer.php'); ?>