<?php include_once('./include/head.php'); ?>
<?php include_once('./include/app_header.php'); ?>
<script src="./js/script/client/app_program_detail.js?v=0.3"></script>

<?php

$type = $_GET['type'];
$e = $_GET['e'] ?? 'room1';
$day = $_GET['day'] ?? 'day_tbody_day_1';
$e_num = $e[-1];
$d_num = $day[-1];

$name = $_GET['name'] ?? 'pre_congress_symposium_1';

// echo $e_num;
// echo $d_num;

//kcode == 116 새로고침

echo '<script type="text/javascript">
				  $(document).ready(function(){
					  //탭 활성화
					  //큰탭
					  $(".app_tab li").removeClass("on");
					  if ("' . $day . '" === "") {
						$(".app_tab li:first-child").addClass("on");
						$(".app_tab li:nth-child(1)").trigger("click");
					  }

						// Room Select Tab 초기화 / 클릭 스크립트 수정
						$(".app_tab li").click(function(){
//							$(".sort_select").each(function(){
//								var i = $(this).val();
//								if (i === "all"){
//									$(this).parents(".tab_cont").find(".tab_cont").addClass("on");
//								} else {
//									i = (i - 1);
//									$(this).parents(".tab_cont").find(".tab_cont").removeClass("on");
//									$(this).parents(".tab_cont").find(".tab_cont").eq(i).addClass("on");
//									console.log(i)
//								}
//							});
							var date = $(".program > .on").val();
							$("input[name=program_date]").val(date);
							
							selectProgram();
						});

					  $(".app_tab li:nth-child(' . $d_num . ')").addClass("on");
					  $(".app_tab + .inner .tab_wrap > .tab_cont").removeClass("on");
					  $(".app_tab + .inner .tab_wrap > .tab_cont:nth-child(' . $d_num . ')").addClass("on");
					  //작은탭
					  $(".app_tab + .inner .tab_wrap > .tab_cont .tab_cont").removeClass("on");
					  $(".app_tab + .inner .tab_wrap > .tab_cont.on .tab_cont").eq(' . $e_num . ' - 1).addClass("on");

					  window.onkeydown = function() {
					  	var kcode = event.keyCode;
						if(kcode == 116) {
							history.replaceState({}, null, location.pathname);
							window.scrollTo({top:0, left:0, behavior:"auto"});
						}
					  }

					  //스크롤 위치 & 액션
					  $(".program_detail_ul li").each(function(){
						if("' . $name . '" === $(this).attr("name")) {
							var this_top = $(this).offset().top;
							$("html, body").animate({scrollTop: this_top - 70}, 1000);
							console.log("scrollTop: ", this_top - 150)
						}
					  });

				  });
		</script>';

?>

<?php
    $program_date       = $_GET["program_date"] ?? "";
    $option_room		= $_GET["option_room"] ?? "";
    $option_category	= $_GET["option_category"] ?? "";

    $row_sql = "";

    switch ($program_date){
        case "1" : $program_date = "2023-09-07";
            break;
        case "2" : $program_date = "2023-09-08";
            break;
        case "3" : $program_date = "2023-09-09";
            break;
    }

    if($program_date != ""){
        $row_sql .= " AND program_date = '$program_date' ";
    }

    if($option_room != ""){
        $row_sql .= " AND program_place_idx = $option_room ";
    }

    if($option_category != ""){
        $row_sql .= " AND program_category_idx = $option_category ";
    }

    $select_place_sql = " SELECT * FROM program_place ";
    $place_list = get_data($select_place_sql);

    $select_category_sql = " SELECT * FROM program_category ";
    $category_list = get_data($select_category_sql);

    $select_program_list = "
                            SELECT p.idx, program_name, program_place_idx, pp.program_place_name ,program_category_idx, program_date, 
                                   date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time
                            FROM program p
                            LEFT JOIN program_place pp on p.program_place_idx = pp.idx
                            WHERE is_deleted = 'N'
                            AND program_date = '2023-09-07'
                            {$row_sql}
                            ";
    $program_list = get_data($select_program_list);

    $select_contents_list = "
                             SELECT idx, program_idx, contents_title, author, date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time
                             FROM program_contents
                             WHERE is_deleted = 'N'
                            ";
    $contents_list = get_data($select_contents_list);

    $resultObj = [];
    foreach($program_list as $pl){
        $pl_idx = $pl['idx'];

        $resultObj[$pl_idx] = [
            'idx' => $pl_idx,
            'program_name' => $pl['program_name'],
            'program_place_name' => $pl['program_place_name'],
            'program_category_idx' => $pl['program_category_idx'],
            'program_date' => $pl['program_date'],
            'start_time' => $pl['start_time'],
            'end_time' => $pl['end_time'],
            'contents' => []
        ];

        foreach ($contents_list as $cl){
            $program_idx = $cl['program_idx'];
            $cl_info = [
                'cl_idx' => $cl['idx'],
                'program_idx' => $program_idx,
                'contents_title' => $cl['contents_title'],
                'author' => $cl['author'],
                'start_time' => $cl['start_time'],
                'end_time' => $cl['end_time']
            ];

            if($pl_idx === $program_idx){
                $resultObj[$pl_idx]['contents'][]=$cl_info;
            }
        }
    }

?>


<section class="container app_version app_scientific">
	<div class="app_title_box">
		<h2 class="app_title">
			PROGRAM
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
		<ul class="app_menu_tab langth_2">
			<li><a href="./program_glance.php">Program at a Glance</a></li>
			<li class="on"><a href="./app_program_detail.php">Scientific Program</a></li>
		</ul>
	</div>
    <form name="select_form">
	<ul class="app_tab program center_t">
		<li value="1" class="on"><a href="javascript:;">Sep.7(Thu)</a></li>
		<li value="2"><a href="javascript:;">Sep.8(Fri)</a></li>
		<li value="3"><a href="javascript:;">Sep.9(Sat)</a></li>
        <input type="hidden" name="program_date">
	</ul>
    <div class="inner">
        <div class="tab_wrap">
			<!-----------------
				Day 1
			------------------->
            <div class="tab_cont on">

                <ul class="app_sort_form app_half_ul">
					<li>
						<select name="option_room" id="option_room" class="sort_select" onchange="selectProgram();">
							<option value="" hidden="">Select Room</option>
							<option value="" selected>All</option>
                            <?php
                                foreach($place_list as $place){
                            ?>
									<option value="<?=$place['idx']?>" <?= !empty($option_room) && $place['idx'] == $option_room ? "selected" : "" ?>><?=$place['program_place_name']?></option>
                            <?php
								}
                            ?>
						</select>
					</li>
					<li>
						<select name="option_category" id="option_category" class="" onchange="selectProgram();">
                            <option value="" hidden="">Select Category</option>
                            <option value="">All</option>
                            <?php
                                foreach($category_list as $category){
                            ?>
									<option value="<?=$category['idx']?>" <?= !empty($option_category) && $category['idx'] == $option_category ? "selected" : "" ?>><?=$category['title']?></option>
                            <?php
								}
                            ?>
						</select>
					</li>
				</ul>
                </form>
                <div class="tab_wrap on">
					<!-----------------
						Day 1 > Room 1
					------------------->
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
                            <?php
                                foreach ($resultObj as $program){
                            ?>
							<li name="">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title"><?=$program['program_name']?></p>
                                    <p class="chairperson"><span class="bold">Chairpersons:</span> Yong-ho Lee (Yonsei University, Republic of Korea)</p>
									<div class="info">
										<button value="<?=$program['idx']?>"></button>
										<span class="time"><?=$program['start_time']?>-<?=$program['end_time']?></span>
										<span class="branch"><?=$program['program_place_name']?></span>
									</div>
								</div>
<!--								<div class="detail_text">will be updated.</div>-->
								<div class="detail">
									<?php
                                        foreach ($program['contents'] as $contents){
                                    ?>
                                    <div>
										<p class="title"><?=$contents['contents_title']?></p>
										<p class="chairperson">
											<span class="bold"><?=$contents['author']?></span> (Chungnam National University, Republic of Korea)
										</p>
										<div class="info">
											<span class="time"><?=$contents['start_time']?>-<?=$contents['end_time']?></span>
                                            <?php
                                                if($contents['author']!=null){
                                            ?>
                                            <a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
                                            <?php
                                            }
                                            ?>
										</div>
									</div>
                                    <?php
                                    }
                                    ?>
								</div>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="popup bottom program_alarm_pop">
	<div class="pop_bg"></div>	
	<div class="pop_contents">
		<ul class="list_style_none">
			<li>Do you want to set an alarm 10 minutes before the start?</li>
			<li>Yes</li>
			<li>No</li>
		</ul>
		<!-- 팝업창 문구 -->
		<span class="tags">Add alarm complete</span>
		<!-- <span class="tags">Complete</span> -->
		<!-- <span class="tags">Remove alarm complete</span> -->
		<!-- <span class="tags">Cancle</span> -->
	</div>
</div>

<script>
    $(document).ready(function() {
        $(".program_detail_btn").click(function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
        });

		$(".popup.bottom .pop_contents li").click(function(){
			$(this).parents(".popup").hide();
		});

		// $(".sort_select").change(function(){
		// 	var i = $(this).val();
		// 	if (i === "all"){
		// 		$(this).parents(".tab_cont").find(".tab_cont").addClass("on");
		// 	} else {
		// 		i = (i - 1);
		// 		$(this).parents(".tab_cont").find(".tab_cont").removeClass("on");
		// 		$(this).parents(".tab_cont").find(".tab_cont").eq(i).addClass("on");
		// 		// console.log(i)
		// 	}
		// });
		$(".chairperson").parent("div").append("<button class='preview_btn'>Preview</button>");
		$(".preview_btn").on("click", function(event){
			event.preventDefault();
            event.stopPropagation();
			$(this).parent(".main").siblings(".detail_text").stop().slideToggle();	
			$(this).toggleClass("on");	
		});
    });

</script>
<style>
	div.detail button.preview_btn {display: none;}
	.app_scientific .preview_btn.on {background-image: url('./img/icons/icon_minus_white.svg');}
</style>
<?php include_once('./include/app_footer.php'); ?>
