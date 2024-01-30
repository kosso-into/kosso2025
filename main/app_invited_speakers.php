<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<script src="./js/script/client/app_invited_speakers.js?ver=0.1"></script>

<?php
$member_idx = $_SESSION["USER"]["idx"];

$select_invited_speaker_query = "
			SELECT DISTINCT
				CASE
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '가' AND '낗' THEN 'ㄱ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '나' AND '닣' THEN 'ㄴ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '다' AND '딯' THEN 'ㄷ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '라' AND '맇' THEN 'ㄹ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '마' AND '밓' THEN 'ㅁ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '바' AND '삫' THEN 'ㅂ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '사' AND '앃' THEN 'ㅅ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '아' AND '잏' THEN 'ㅇ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '자' AND '찧' THEN 'ㅈ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '차' AND '칳' THEN 'ㅊ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '카' AND '킿' THEN 'ㅋ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '타' AND '팋' THEN 'ㅌ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '파' AND '핗' THEN 'ㅍ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '하' AND '힣' THEN 'ㅎ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN 'A' AND 'Z' THEN 'A-Z'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN 'a' AND 'z' THEN 'A-Z'
				ELSE NULL
				END AS initial,
				isp.idx,
				program_contents_idx,
				last_name,
				first_name,
				affiliation,
				(CASE WHEN fisp.idx IS NULL THEN 'N' ELSE 'Y' END) AS favorite_check,
				image_path,
				cv_path,
				nation
				FROM invited_speaker isp
				LEFT JOIN (
				SELECT fisp.idx, member_idx, invited_speaker_idx
				FROM favorite_invited_speaker fisp
				WHERE is_deleted = 'N'
				AND member_idx = '{$member_idx}'
				) fisp ON isp.idx=fisp.invited_speaker_idx
				WHERE isp.is_deleted = 'N'
				ORDER BY binary(first_name) ASC;
                                ";

$invited_speaker_list = get_data($select_invited_speaker_query);

//한글버전
$select_initial_query = "
SELECT DISTINCT
			CASE
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '가' AND '낗' THEN 'ㄱ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '나' AND '닣' THEN 'ㄴ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '다' AND '딯' THEN 'ㄷ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '라' AND '맇' THEN 'ㄹ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '마' AND '밓' THEN 'ㅁ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '바' AND '삫' THEN 'ㅂ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '사' AND '앃' THEN 'ㅅ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '아' AND '잏' THEN 'ㅇ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '자' AND '찧' THEN 'ㅈ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '차' AND '칳' THEN 'ㅊ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '카' AND '킿' THEN 'ㅋ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '타' AND '팋' THEN 'ㅌ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '파' AND '핗' THEN 'ㅍ'
				WHEN CAST(LEFT(first_name, 1) AS CHAR CHARACTER SET utf8mb4) BETWEEN '하' AND '힣' THEN 'ㅎ'
			ELSE NULL
			END AS initial
			FROM invited_speaker
			WHERE is_deleted='N'
			ORDER BY binary(initial) ASC;
";
						
$initial_list = get_data($select_initial_query);
?>

<!-- App - Invited Speakers 페이지 -->
<section class="container app_version app_invited_speakers">
	<div class="app_title_box">
		<h2 class="app_title">
			초청 연자
			<button type="button" class="app_title_prev" onclick="javascript:history.back();"><img src="/main/img/icons/icon_arrow_prev.svg" alt="이전페이지로 이동"></button>
		</h2>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="app_search_area fix_cont">
				<!-- <p class="f_bold">Please enter keywords</span></p> -->
				<div class="search_input">
					<p>Please enter keywords</p>
					<div>
						<input id="keywords" type="text" placeholder="Search" oninput="selectKeywords();">
						<button type="button" class="search_icon"></button>
					</div>
				</div>
			</div>
			<div class="speakers_area">
				<!-- My Favorite -->			
				<p class="category favorite_list_type">즐겨찾기</p>
				<ul class="speakers_list ajax_favorite_list">
                    <?php
                        foreach ($invited_speaker_list as $isl){
                            if($isl['favorite_check']==='Y'){
								
							// [231227] sujeong 
							if($isl['image_path']){
								$is_profile_img = $isl['image_path'];
							}else{
								$is_profile_img =  '/main/img/profile_empty.png';
							}

                    ?>
								<li>
									<a href="./app_invited_speakers_detail.php?idx=<?=$isl['idx']?>">
										<div class="speakers_info">
										<!-- <img src="/main/img/profile_empty.png" alt="profile_img"> -->
											<img src="<?= $is_profile_img ?>" alt="profile_img">
											<p>
												<!-- [231204] sujeong / 주석 -->
												<?=$isl['first_name']?> <?=$isl['last_name']?> <span class="sub"><?=$isl['affiliation']?></span>
											</p>
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
				<div class="ajax_speakers_list">
                <?php
                    foreach ($initial_list as $ini){
                ?>
					
					<div>
						<p class="category"><?=$ini['initial']?></p>
						<ul class="speakers_list">
                <?php
						foreach ($invited_speaker_list as $isl){
							if($isl['favorite_check']==='Y'){
								$favorite = "on";
							} else {
								$favorite = "";
							}

							// [231227] sujeong 
							if($isl['image_path']){
								$is_profile_img = $isl['image_path'];
							}else{
								$is_profile_img =  '/main/img/profile_empty.png';
							}
							//$is_profile_img = ($isl['image_path'] ?? '/main/img/profile_empty.png');

							if($isl['initial']==$ini['initial']){
                ?>
								<li>
									<a href="./app_invited_speakers_detail.php?idx=<?=$isl['idx']?>">
										<div class="speakers_info">
											<img src="<?= $is_profile_img ?>" alt="profile_img">
											<p>
												<!-- TBD -->
												<!-- [231204] sujeong / 주석 -->
												<?=$isl['first_name']?> <?=$isl['last_name']?> <span class="sub"><?=$isl['affiliation']?></span>
											</p>
										</div>
									</a>
									<button type="button" class="favorite_btn <?=$favorite?>" value="<?=$isl['idx']?>"></button>
								</li>
                <?php
							}
						}
				?>
						</ul>
					</div>
				<?php
					}
                ?>
				</div>
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
            selectKeywords();
        })
	});
</script>

<?php include_once('./include/app_footer.php');?>