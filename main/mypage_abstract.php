<?php include_once('./include/head.php');?>
<?php include_once('./include/header.php');?>
<?php
    $user_idx = $member["idx"] ?? -1;
	
	// [22.04.25] 미로그인시 처리
	if($user_idx <= 0) {
		echo "<script>alert('Need to login'); location.replace(PATH+'login.php');</script>";
		exit;
	}
    
    $my_submission_list_query = " 
                                SELECT
                                        ra.idx, ra.submission_code, DATE_FORMAT(ra.register_date, '%Y-%m-%d') AS regist_date, `type`,
                                        (CASE
                                            WHEN `type` = 0
                                            THEN abstract_title
                                            WHEN `type` = 1
                                            THEN cv.original_name
                                            ELSE ''
                                        END) AS title, 
                                        (CASE
                                            WHEN `type` = 0
                                            THEN 'Abstract'
                                            WHEN `type` = 1
                                            THEN 'Lecture'
                                            ELSE ''
                                        END) AS `type_name`,
                                        (CASE
                                            WHEN ra.is_presentation = '0'
                                            THEN 'In Process'
                                            WHEN ra.is_presentation = '1'
                                            THEN 'Completed'
                                            ELSE '-'
                                        END) AS status,
										lecture.original_name AS lecture_file_name, CONCAT(lecture.path,'/',lecture.save_name) AS lecture_path,
										cv.original_name AS cv_file_name, CONCAT(cv.path,'/',cv.save_name) AS cv_path
                                    FROM request_abstract as ra
									LEFT JOIN file lecture
										ON ra.notice_file = lecture.idx
									LEFT JOIN file cv
										ON ra.cv_file = cv.idx
										WHERE ra.is_deleted = 'N'
                                        AND ra.register = {$user_idx}
										AND ra.parent_author IS NULL
										ORDER BY ra.register_date DESC;";

    $submission_list = get_data($my_submission_list_query);

	$total_count = count($submission_list);
	$write_page = 10;
	$write_row = 20;
	$cur_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$total_page = ceil($total_count / $write_row);
	$url = $_SERVER['REQUEST_URI'];
	
	$paging_admin = get_paging_arrow($write_row, $write_page, $cur_page, $total_count, $total_page, $url, $add);

	$paging_html = $paging_admin['html'];

	$start_row = $paging_admin['start_row'];
	$end_row = $paging_admin['end_row'];


	$sql_during =	"SELECT
						IF(DATE(NOW()) >= '2022-09-12', 'Y', 'N') AS yn
					FROM info_event";
	$during_yn = sql_fetch($sql_during)['yn'];

	$only_sql = "SELECT
					MAX(rr.idx) AS idx
				FROM request_registration AS rr
				LEFT JOIN member AS mb
					ON mb.idx = rr.register
				LEFT JOIN payment AS pa
					ON pa.idx = rr.payment_no
				WHERE rr.register = {$user_idx}
				AND rr.is_deleted = 'N'
				AND rr.`status` = 2
				GROUP BY rr.idx";

	$only_idx = sql_fetch($only_sql)['idx'];

	$score_sql = "SELECT
						*
					FROM score_second
					WHERE mb_idx = '{$user_idx}'";

	$score_detail = sql_fetch($score_sql);
			
	// abstract_category
	$info_poster_abstract_category_sql = "SELECT 
												idx, title_en, title_ko
											FROM info_poster_abstract_category
											WHERE is_deleted = 'N'";
	$info_poster_abstract_category_data = get_data($info_poster_abstract_category_sql);
	$poster_category_map = [];

	foreach($info_poster_abstract_category_data as $obj) {
		$poster_category_map[$obj["idx"]] = $obj["title_en"];
	}

	// toffic
	$presentation_type_arr = array("Oral Presentation", "Poster Exhibition", "Guided Poster Presentation");

	// Position
	$position_arr = array("Professor", "Physician", "Researcher", "Student", "Other");

	// nation
	$nation_query = "SELECT *
					FROM nation";
	$nation_list = get_data($nation_query);
	$nation_map = [];

	foreach($nation_list as $obj) {
		$nation_map[$obj["idx"]] = $obj["nation_en"];
	}
?>

<section class="container mypage">
    <h1 class="page_title">Mypage</h1>
	<ul class="tab_green">
		<li><a href="./mypage.php">Account</a></li>
		<li><a href="./mypage_registration.php">Registration</a></li>
		<li class="on"><a href="./mypage_abstract.php">Abstract</a></li>
		<?php
			//if($during_yn == 'N') {
		?>
			<!-- <li class="text_center"><a href="javascript:;" onclick="javascript:alert('행사 종료 후 9월 12일(월)부터 확인 가능합니다.');">평점 확인 (Korean Only)</a></li> -->
			<!-- <li class="text_center"><a href="javascript:;" onclick="javascript:alert('행사 종료 후 9월 12일(월)부터 확인 가능합니다.');">Certification of Completion</a></li> -->
		<?php
			//}
			//if(!empty($score_detail)) {
		?>
			<!-- <li class="text_center"><a href="./mypage_score.php">평점 확인 (Korean Only)</a></li> -->
		<?php
			//}
			//if(!empty($only_idx)) {
		?>
			<!-- <li class="text_center"><a href="./mypage_certification.php">Certification of Completion</a></li> -->
		<?php
			//} 
		?>
	</ul>
	<div class="inner">
		<!-- <img class="coming" src="./img/coming.png" /> -->
		<!-- <div class="not_ready">Will be updated soon</div> -->
		<img class="coming" src="./img/coming.png">
	</div>
		
</section>

<script>
	$(document).ready(function(){
		$(".delete_btn").on("click", function(){
			const idx = $(this).parent().data("idx");
			if(confirm(locale(language.value)("submission_cancel_msg"))) {
				$.ajax({
					url : PATH+"ajax/client/ajax_submission.php",
					type : "POST",
					data : {
						flag : "submission_delete",
						idx : idx
					},
					dataType : "JSON",
					success : function(res){
						if(res.code == 200) {
							alert(locale(language.value)("complet_submission_cancel"));
							location.reload();
						} else if(res.code == 400) {
							alert(locale(language.value)("error_submission_cancel"));
							return false;
						} else {
							alert(locale(language.value("reject_msg")));
							return false;
						}
					}
				});
			}
		});
		
		$(".modify_btn").on("click", function(){
			const idx = $(this).parent().data("idx");
			window.location.href="./abstract_submission.php?idx="+idx;
		})

		$(".review_regi_open").click(function(){
			const idx = $(this).parent().data("idx");

			$.ajax({
				url : PATH+"ajax/client/ajax_submission_author.php",
				type : "POST",
				data : {idx : idx},
				dataType : "JSON",
				success : function(res){
					if(res.code == 200) {
						setReviewPop(res.data);
						$(".review_regi_pop").show();
					} else {
						alert(locale(language.value("reject_msg")));
						return false;
					}
				}
			});
		});
	});

	$(".korean_only").on("click", function(){
		var url = "./pre_registration_korean_only.php";
		window.open(url,"Registration Receipt","width=793, height=2000, top=30, left=30");
	});

	function setReviewPop(data) {
		const submit_data = data.submit_data;
		const presenting_author_data = data.presenting_author_data ?? [];
		const corresponding_author_data = data.corresponding_author_data ?? [];

		if(presenting_author_data.length < 1) {
			console.log();
			$("#presenting_author_title").remove();
		}

		if(corresponding_author_data.length < 1) {
			$("#corresponding_author_title").remove();
		}
	}
</script>

<?php include_once('./include/footer.php');?>