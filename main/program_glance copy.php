<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>

<style>
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
</style>

<section class="container program_glance">
    <div class="inner">
        <h1 class="page_title">Program at a glance</h1>
        <!-- <img class="coming" src="./img/coming.png" /> -->
        <div class="program_wrap section">
            <img src="./img/sample/icomes_program.svg" style="max-width:100%;">
            <div class="scroll_table">
                <div class="section_title_wrap2 clearfix2">
                    <h3 class="title red_t">* K=Korean Session</h3>
                    <!-- onclick="javascript:window.open('./download/ICOMES2022_Program at a Glance.pdf')" -->
                    <button onclick="javascript:window.open('./download/icomes2022_program_glance_2.pdf')"
                        class="btn green_btn floatR"><img src="./img/icons/icon_download_yellow.svg" alt=""> Program</a>
                </div>
                <div class="program_table_wrap" id="tab1">
                    <table class="program_table main-table">
                        <colgroup>
                            <col class="program_first_col">
                            <col class="program_first_col">
                        </colgroup>
                        <thead>
                            <tr>
                                <th colspan="2" class="font_big">Time/Location</th>
                                <th>Room 1<br> </th>
                                <th>Room 2</th>
                                <th>Room 3</th>
                                <th>Room 4</th>
                                <th>Room 5</th>
                                <th>Room 6</th>
                                <th>Room 7</th>
                            </tr>
                            <tr>
                                <th colspan="9" class="font_big">Day 1</th>
                            </tr>
                        </thead>
                        <!---------- DAY 1 ---------->
                        <tbody name="day" class="day_1">
                            <tr>
                                <td rowspan="4">2022.9.1 (Thur)</td>
                                <td>17:00~18:30(90")</td>
                                <td class="purple_bg pointer" name="pre_congress_symposium_1">
                                    Pre-congress<br />Symposium 1 <span class="red_t">(K)</span>
                                    <p>30th Anniversary Session of KSSO</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="purple_bg pointer" name="pre_congress_symposium_2">
                                    Pre-congress<br />Symposium 2 <span class="red_t">(K)</span>
                                    <p>KSSO: 2022 National Obesity Strategies and Guideline</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>18:30~19:00(30")</td>
                                <td colspan="2">Break</td>
                                <td rowspan="3" class="green_bg pointer" name="welcome_cocktail_party">
                                    Welcome<br />Cocktail Party
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td colspan="4">Break</td>
                            </tr>
                            <tr>
                                <td>19:00~20:00(60")</td>
                                <td class="yellow_bg pointer" name="satellite_symposium_1">
                                    Satellite<br />Symposium 1
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="yellow_bg pointer" name="satellite_symposium_2">
                                    Satellite<br />Symposium 2
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>20:00~21:00(60")</td>
                                <td></td>
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
                                <th colspan="9" class="font_big">Day 2</th>
                            </tr>
                        </thead>
                        <tbody name="day" class="day_2">
                            <tr>
                                <td rowspan="18">2022.9.2 (Fri)</td>
                                <td>07:30-08:20(50")</td>
                                <td class="yellow_bg pointer" name="breakfast_symposium_1">
                                    Breakfast<br />Symposium 1
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="yellow_bg pointer" name="breakfast_symposium_2">
                                    Breakfast<br />Symposium 2
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>08:20-08:30(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>08:30-09:10(40")</td>
                                <td colspan="3" class="pink_bg green_t pointer" name="plenary_lecture_1">
                                    Plenary Lecture 1
                                    <br>Neural Estimation of Current and Future Physiological States
                                    <p>Mark L. Andermann(Harvard Medical School, USA)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>09:10-09:20(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>09:20~10:50(90")</td>
                                <td class="sky_bg pointer" name="symposium_1">
                                    Symposium 1
                                    <p>Health Consequences of Obesity (1)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="symposium_2">
                                    Symposium 2
                                    <p>Microbiome and Cardiometabolic Diseases</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="symposium_3">
                                    Symposium 3
                                    <p>Neuroscience in Obesity</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="sky_bg pointer" name="symposium_4">
                                    Symposium 4
                                    <p>Diversity and Health Inequalities (AOCO)</p>
                                    <input type="hidden" name="e" value="room4">
                                </td>
                                <td class="yellow_bg pointer" name="sponsored_session_1">Sponsored<br />Session 1
                                    <p>Life-Changing Cardiorenal Protection for T2D Patients</p>
                                    <input type="hidden" name="e" value="room5">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10:50-11:00(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>11:00-11:10(10")</td>
                                <td colspan="3" class="sky_bg pointer" name="opening_address">
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
                                <td colspan="3" rowspan="2" class="green_t pink_bg pointer" name="keynote_lecture_1">
                                    Keynote Lecture 1
                                    <br>Pediatric Metabolic and Bariatric Surgery; Evidence, Outcomes and Ongoing
                                    Challenges
                                    <p>Marc P. Michalsky(Nationwide Children’s Hospital and The Ohio State University,
                                        USA )
                                    </p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11:50-12:00(10")</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:00-13:00(60")</td>
                                <td class="yellow_bg pointer" name="luncheon_symposium_1">
                                    Luncheon<br />Symposium 1
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="yellow_bg pointer" name="luncheon_symposium_2">
                                    Luncheon<br />Symposium 2
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="yellow_bg pointer" name="luncheon_symposium_3">
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
                                <td colspan="3"></td>
                                <td colspan="3" class="green_bg" name="poster_exhibition_d2">
                                    <!-- 	Poster Exhibition -->
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer" name="oral_presentation_1">
                                    Oral presentation 1
                                    <input type="hidden" name="e" value="room4">
                                </td>
                                <td class="green_bg pointer" name="oral_presentation_2">
                                    Oral presentation 2
                                    <input type="hidden" name="e" value="room5">
                                </td>
                                <td></td>
                                <td class="green_bg" name="poster_exhibition_d2_r6">
                                    <!-- 	Poster Exhibition -->
                                    <input type="hidden" name="e" value="room6">
                                </td>
                                <td class="green_bg pointer" name="guided_poster_presentation_1">
                                    Guided Poster<br />Presentation 1
                                    <input type="hidden" name="e" value="room7">
                                </td>
                            </tr>
                            <tr>
                                <td>14:00-15:30(90")</td>
                                <td class="sky_bg pointer" name="symposium_5">
                                    Symposium 5
                                    <p>Drug Treatment of Obesity in Adults</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="symposium_6">
                                    Symposium 6
                                    <p>Exercise</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="symposium_7">
                                    Symposium 7
                                    <p>Adipocyte Biology</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="purple_bg pointer" name="symposium_8">
                                    Symposium 8
                                    <p>GLP-1 Analogues Versus Bariatric and Metabolic Surgery </p>
                                    <input type="hidden" name="e" value="room4">
                                </td>
                                <td class="yellow_bg pointer" name="sponsored_session_2">
                                    Sponsored<br />Session 2
                                    <input type="hidden" name="e" value="room5">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>15:30-15:40(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>15:40-16:20(40")</td>
                                <td colspan="3" class="pink_bg green_t pointer" name="plenary_lecture_2">
                                    Plenary Lecture 2
                                    <br>Efficacy and Safety of Tirzepatide in Obesity Management
                                    <p>Melanie J Davies(Leicester General Hospital, UK)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>16:20-16:30(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>16:30-18:00(90")</td>
                                <td class="sky_bg pointer" name="symposium_9">
                                    Symposium 9
                                    <p>Life Course Approaches in Obesity Care</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="symposium_10">
                                    Symposium 10
                                    <p>Obesity and Neurodegenerative Diseases</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="symposium_11">
                                    Symposium 11
                                    <p>Healthy Low Carbohydrate Diets for Korean</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="sky_bg pointer" name="symposium_12">
                                    Symposium 12 <span class="red_t">(K)</span>
                                    <p>Writing an Excellent Research Paper with JOMES</p>
                                    <input type="hidden" name="e" value="room4">
                                </td>
                                <td></td>
                                <td class="yellow_bg pointer" name="it_융합_대사증후군_위원회_세션">
                                    IT Convergence Metabolic Syndrome Committee <span class="red_t">(K)</span>
                                    Introduction of the Weight Management Application of the KSSO
                                    <input type="hidden" name="e" value="room6">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>18:00~18:30(30")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>18:00~21:30(210")</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="green_bg pointer" name="congress_banquet_ceremony">
                                    Congress Banquet<br />Ceremony
                                    <input type="hidden" name="e" value="room5">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <!---------- DAY 3 ---------->
                        <thead>
                            <tr>
                                <th colspan="9" class="font_big">Day 3</th>
                            </tr>
                        </thead>
                        <tbody name="day" class="day_3">
                            <tr>
                                <td rowspan="19">2022.9.3 (Sat)</td>
                                <td>07:30-08:20(50")</td>
                                <td class="yellow_bg pointer" name="breakfast_symposium_3">
                                    Breakfast<br />Symposium 3
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="yellow_bg pointer" name="breakfast_symposium_4">
                                    Breakfast<br />Symposium 4
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>08:20-08:30(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>08:30-09:10(40")</td>
                                <td class="pink_bg green_t pointer" name="plenary_lecture_3" colspan="3">
                                    Plenary Lecture 3
                                    <br>Healthful Dietary Patterns to Prevent and<br />Treat Cardiovascular Disease and
                                    Obesity
                                    <p>Frank Sacks (Harvard Medical School, USA)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>09:10-09:20(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>09:20-10:50(90")</td>
                                <td class="sky_bg pointer" name="symposium_13">
                                    Symposium 13
                                    <p>Health Consequences of Obesity (2)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="symposium_14">
                                    Symposium 14
                                    <p>Integrative Physiology (2)</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="symposium_15">
                                    Symposium 15
                                    <p>Nutrition: Personalized Nutrition for Obesity</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="sky_bg pointer" name="symposium_16">
                                    Symposium 16
                                    <p>New Behavioral Approaches in Obesity Treatment</p>
                                    <input type="hidden" name="e" value="room4">
                                </td>
                                <td class="yellow_bg pointer" name="sponsored_session_3">
                                    Sponsored<br />Session 3
                                    <p>The New Approach to Obesity Care Beyond SCALE</p>
                                    <input type="hidden" name="e" value="room5">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10:50-11:00(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>11:00-11:40(40")</td>
                                <td class="pink_bg green_t pointer" name="keynote_lecture_2" colspan="3">
                                    Keynote Lecture 2
                                    <br>Chrono-nutrition: Time Restricted Eating to Improve Metabolic Health
                                    <p>John A. Hawley (Australian Catholic University, Australia)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11:40-11:50(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>11:50-12:50(60")</td>
                                <td class="yellow_bg pointer" name="luncheon_symposium_4">
                                    Luncheon<br />Symposium 4
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="yellow_bg pointer" name="luncheon_symposium_5">
                                    Luncheon<br />Symposium 5
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="yellow_bg pointer" name="luncheon_symposium_6">
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
                                <td colspan="3"></td>
                                <td colspan="3" class="green_bg" name="poster_exhibition_d3">
                                    Poster Exhibition
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="green_bg pointer" name="oral_presentation_3">
                                    Oral Presentation 3
                                    <input type="hidden" name="e" value="room4">
                                </td>
                                <td class="green_bg pointer" name="oral_presentation_4">
                                    Oral Presentation 4
                                    <input type="hidden" name="e" value="room5">
                                </td>
                                <td></td>
                                <td class="green_bg" name="poster_exhibition_d3_r6">
                                    Poster Exhibition
                                    <input type="hidden" name="e">
                                </td>
                                <td class="green_bg pointer" name="guided_poster_presentation_2">
                                    Guided Poster<br />Presentation 2
                                    <input type="hidden" name="e" value="room6">
                                </td>
                            </tr>
                            <tr>
                                <td>13:50-14:20(30")</td>
                                <td class="pink_bg green_t pointer" name="keynote_lecture_3" colspan="3">
                                    Keynote Lecture 3
                                    <br>From Obesity to Changes in the Characteristics of Newly Diagnosed Type 2
                                    Diabetes
                                    Patients in Korea
                                    <p>Sung Rae Kim (The Catholic University of Korea, Korea)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14:20-14:30(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>14:30-15:10(40")</td>
                                <td class="pink_bg green_t pointer" name="plenary_lecture_4" colspan="3">
                                    Plenary Lecture 4
                                    <br>Multiple Metabolic Effects of SGLT2 Inhibitor for Obesity Management
                                    <p>Ele Ferrannini (University of Pisa School of Medicine, Italy)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>15:10-15:20(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>15:20-15:50(30")</td>
                                <td class="pink_bg green_t pointer" name="keynote_lecture_4" colspan="3">
                                    Keynote Lecture 4
                                    <br>Strengths and Limitations of Real World Evidence in the Cardiometabolic Field
                                    <p>Sin Gon Kim (Korea University, Korea)</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>15:50-16:00(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>16:00-17:30(90")</td>
                                <td class="sky_bg pointer" name="symposium_17">
                                    Symposium 17
                                    <p>Single-Molecule Combinatorial Therapeutics for Treating Obesity</p>
                                    <input type="hidden" name="e" value="room1">
                                </td>
                                <td class="sky_bg pointer" name="symposium_18">
                                    Symposium 18
                                    <p>Digi-Physical Transformation in Obesity Healthcare</p>
                                    <input type="hidden" name="e" value="room2">
                                </td>
                                <td class="sky_bg pointer" name="symposium_19">
                                    Symposium 19
                                    <p>Perceptions and Reality in Childhood and Adolescence Obesity</p>
                                    <input type="hidden" name="e" value="room3">
                                </td>
                                <td class="sky_bg pointer best_jomes" name="jomes_session">
                                    Best Article in JOMES
                                    <input type="hidden" name="e" value="room4">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>17:30-17:40(10")</td>
                                <td colspan="7">Break</td>
                            </tr>
                            <tr>
                                <td>17:40-18:00(20")</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="light_green_bg pointer" name="closing_award_ceremony">
                                    Closing & Award Ceremony
                                    <input type="hidden" name="e" value="room5">
                                </td>
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
    $("td.pointer").click(function() {
        var e = $(this).find("input[name=e]").val();
        var day = $(this).parents("tbody[name=day]").attr("class");
        var target = $(this)
        var this_name = $(this).attr("name");

        table_location(event, target, e, day, this_name);
    });
});

function table_location(event, _this, e, day, this_name) {
    window.location.href = "./program_detail.php?day=" + day + "&e=" + e + "&name=" + this_name;

}
</script>

<?php include_once('./include/footer.php'); ?>