<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<script src="./js/script/client/app_invited_speakers.js"></script>

<?php
$member_idx = $_SESSION["USER"]["idx"];

$select_invited_speaker_query = "
                                SELECT isp.idx, program_contents_idx, last_name, first_name, nation_no, affiliation, LEFT(first_name, 1) AS initial,
                                    (CASE
                                         WHEN fisp.idx IS NULL THEN 'N'
                                         ELSE 'Y'
                                            END
                                    ) AS favorite_check
                                FROM invited_speaker isp
                                LEFT JOIN(
                                    SELECT fisp.idx, member_idx, invited_speaker_idx
                                    FROM favorite_invited_speaker fisp
                                    WHERE is_deleted = 'N'
                                    AND member_idx = '{$member_idx}'
                                ) fisp ON isp.idx=fisp.invited_speaker_idx
                                WHERE isp.is_deleted = 'N'
                                ";

$invited_speaker_list = get_data($select_invited_speaker_query);

$select_initial_query = "
                            SELECT DISTINCT LEFT(first_name, 1) AS initial
                            FROM invited_speaker
                            WHERE is_deleted='N'
                            ORDER BY initial ASC;
                        ";
$initial_list = get_data($select_initial_query);
?>

<!-- App - Invited Speakers 페이지 -->
<section class="container app_version app_invited_speakers">
	<div class="app_title_box">
		<h2 class="app_title">
			Invited Speakers
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="app_search_area">
				<!-- <p class="f_bold">Please enter keywords</span></p> -->
				<div class="search_input">
					<input id="keywords" type="text" placeholder="Please enter keywords">
					<button type="button" class="search_icon"></button>
				</div>
			</div>
			<div class="speakers_area">
				<!-- My Favorite -->			
				<p class="category">My Favorite</p>
				<ul class="speakers_list">
                    <?php
                        foreach ($invited_speaker_list as $isl){
                            if($isl['favorite_check']==='Y'){
                    ?>
					<li>
						<a href="./app_invited_speakers_detail.php?idx=<?=$isl['idx']?>">
							<div class="speakers_info">
								<img src="./img/img_speakers08.jpg" alt="">
								<p><?=$isl['first_name']?> <?=$isl['last_name']?></p>
							</div>
						</a>
						<button type="button" class="favorite_btn on" value="<?=$isl['idx']?>"></button>
					</li>
                    <?php
                        }
                    }
                    ?>
				</ul>
				<!-- J -->
                <?php
                    foreach ($initial_list as $ini){
                ?>
				<p class="category"><?=$ini['initial']?></p>
                <ul class="speakers_list">
                <?php
                    foreach ($invited_speaker_list as $isl){
                        if($isl['favorite_check']==='Y'){
                            $favorite = "on";
                        } else {
                            $favorite = "";
                        }
                        if($isl['initial']==$ini['initial']){
                            if($isl['favorite_check']==='N'){
                ?>
					<li>
						<a href="./app_invited_speakers_detail.php?idx=<?=$isl['idx']?>">
							<div class="speakers_info">
								<img src="./img/img_speakers08.jpg" alt="">
								<p><?=$isl['first_name']?> <?=$isl['last_name']?></p>
							</div>
						</a>
						<button type="button" class="favorite_btn <?=$favorite?>" value="<?=$isl['idx']?>"></button>
					</li>
                <?php
                            }
                        }
                    }
                }
                ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$(".favorite_btn").click(function(e){
            favorite(e);
		})

        $(".search_icon").click(function(){
            selectFavorite();
        })
	});
</script>

<?php include_once('./include/app_footer.php');?>