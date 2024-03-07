<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<?php
//$today = "2024-03-08";
$today = date("Y-m-d");

$select_program_query = "
                            SELECT p.idx, program_name, program_tag_name, chairpersons, program_place_idx, pp.program_place_name ,program_date, 
                                   date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time,
								   DATE_FORMAT(p.start_time, '%Y-%m-%d %H:%i') as program_start_time, DATE_FORMAT(p.end_time, '%H:%i') as program_end_time,
                                   (CASE
                                       WHEN program_date = '2024-03-08' THEN 'day_1'
                                       WHEN program_date = '2023-09-08' THEN 'day_2'
                                       WHEN program_date = '2023-09-09' THEN 'day_3'
                                       ELSE ''
                                       END
                                   ) as day
                            FROM program p
                            LEFT JOIN program_place pp on p.program_place_idx = pp.idx
                            WHERE p.is_deleted = 'N'
                            AND program_date = '{$today}'
                            ORDER BY program_date, start_time ASC, program_name ASC
                            ";
$program_list = get_data($select_program_query);

?>

<!-- HUBDNCAJY : App - HAPPENING NOW 페이지 -->
<section class="container app_version app_happening app_scientific">
	<div class="app_title_box">
		<h2 class="app_title">
			오늘 프로그램
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="contents_box">
		<div class="schedule_area">
			<!-- 진행중인 세션 있을 시 화면 -->
			<ul class="program_detail_ul">
                <?php
                    if($program_list !== array()){
                        foreach ($program_list as $program){
                ?>
				<li name="<?=$program['program_tag_name']?>" class="<?=$program['day']?>">
					<div class="main">
						<button class="detail_btn"></button>
						<p class="title"><?=$program['program_name']?></p>
                        <?php
                            if($program['chairpersons']!= ""){
                        ?>
						<p class="chairperson"><span class="bold">좌장: </span> <?=$program['chairpersons']?></p>
                        <?php
                        }
                        ?>
						<div class="info">
							<span class="time"><?=$program['start_time']?>-<?=$program['end_time']?></span>
							<span class="branch"><?=$program['program_place_name']?></span>
						</div>
					</div>
					<input type="hidden" name="e" value="<?=$program['program_place_name']?>">
				</li>
                <?php
                    }
                }
                ?>
                <?php
                if($program_list === array()){
                ?>
			</ul>
			<!-- 진행중인 세션 없을 시 화면 -->
			<div class="no_data">
				<img src="/main/img/icons/2024_icon_alarm_clock2.svg" alt="">
				<p>진행 중인 세션이<br>없습니다.</p>
			</div>
            <?php
            }
            ?>
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