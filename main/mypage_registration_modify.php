<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<?php
$nation_query = "SELECT
							*
						FROM nation
						ORDER BY 
						idx = 25 DESC, nation_en ASC";
$nation_list_query = $nation_query;
$nation_list = get_data($nation_list_query);

$user_info = $member;

// [22.04.25] 미로그인시 처리
if (!$user_info) {
	echo "<script>alert('로그인이 필요합니다.'); location.replace(PATH+'login.php');</script>";
	exit;
}

//var_dump($user_info); exit;

$user_idx = $member["idx"] ?? -1;
$registration_idx = $_GET["idx"] ?? NULL;

$sql_during =	"SELECT
						IF(DATE(NOW()) >= '2023-09-07', 'Y', 'N') AS yn
					FROM info_event";
$during_yn = sql_fetch($sql_during)['yn'];

$only_sql = " SELECT
				reg.idx, reg.banquet_yn, reg.email, reg.nation_no, reg.first_name, reg.last_name, reg.affiliation, reg.phone, reg.department, reg.member_type, reg.occupation_type, DATE(reg.register_date) AS register_date, DATE_FORMAT(reg.register_date, '%m-%d-%Y %H:%i:%s') AS register_date2, reg.status, reg.is_score,
				reg.attendance_type, reg.licence_number, reg.specialty_number, reg.nutritionist_number, reg.dietitian_number, reg.date_of_birth, reg.conference_info, reg.welcome_reception_yn, reg.day2_breakfast_yn, reg.day2_luncheon_yn, reg.day3_breakfast_yn, reg.day3_luncheon_yn, reg.special_request_food,
				reg.payment_methods, reg.price, nation.nation_en, IF(nation.nation_tel = 82, 1, 0) AS is_korea,
				(
					CASE
						WHEN reg.ksso_member_status IS NULL OR reg.ksso_member_status = 0 THEN '비회원'
						WHEN reg.ksso_member_status > 0 THEN '회원'
					END
				) AS ksso_member_status,
				p.idx AS payment_idx, p.`type` AS payment_type, p.total_price_kr, p.total_price_us,
				p.etc2, DATE_FORMAT(p.register_date, '%Y-%m-%d %H:%i:%s') AS payment_register_date
				FROM request_registration reg
				LEFT JOIN payment p
				ON reg.payment_no = p.idx
				LEFT JOIN (
				SELECT idx, nation_en, nation_tel FROM nation
				)AS nation
				ON reg.nation_no = nation.idx
				WHERE reg.register = {$user_idx}
				AND reg.is_deleted = 'N'";

$data = sql_fetch($only_sql);

$registration_idx = $data['idx'];

if($registration_idx < 10){
	$register_no = !empty($registration_idx) ? "KSSO2024-000" .$registration_idx : "-";
}else if($registration_idx >= 10 && $registration_idx < 100){
	$register_no = !empty($registration_idx) ? "KSSO2024-00" . $registration_idx : "-";
}else if($registration_idx >= 100 && $registration_idx < 1000){
	$register_no = !empty($registration_idx) ? "KSSO2024-0" . $registration_idx : "-";
}else if($registration_idx >= 1000 ){
	$register_no = !empty($registration_idx) ? "KSSO2024-" . $registration_idx : "-";
}

if (!$data) {
	echo "<script>alert('등록 정보를 찾을 수 없습니다.');location.replace(PATH+'mypage.php');</script>";
	exit;
}

$member_type = $data["member_type"] ?? "-";
switch ($member_type) {
	case "Professor":
		$member_type = "교수";
		break;
	case "Certified M.D.":
		$member_type = "개원의";
		break;
	case "Public Health Doctor":
		$member_type = "봉직의";
		break;
	case "Corporate Member":
		$member_type = "교직의";
		break;
	case "Fellow":
		$member_type = "전임의";
		break;
	case "Resident":
		$member_type = "전공의";
		break;
	case "Nutritionist":
		$member_type = "영양사";
		break;
	case "Exercise Specialist":
		$member_type = "운동사";
		break;
	case "Nurse":
		$member_type = "간호사";
		break;
	case "Researcher":
		$member_type = "연구원";
		break;
	case "Student":
		$member_type = "학생";
		break;
	case "Press":
		$member_type = "기자";
		break;   
	case "Others":
		$member_type = "기타";
		break;   
	case "Intern":
		$member_type = "수련의";
		break;  
	case "Military Surgeon(군의관)":
		$member_type = "군의관";
		break;
	case "Pharmacist":
		$member_type = "공보의";
		break;     
	case "Booth":
		$member_type = "전시(부스)";
		break;   
}

$attendance_type = $data["attendance_type"] ?? "-";
switch ($attendance_type) {
	case 0:
		$attendance_type = "임원";
		break;
	case 1:
		$attendance_type = "연자";
		break;
	case 2:
		$attendance_type = "좌장";
		break;
	case 3:
		$attendance_type = "패널";
		break;
	case 4:
		$attendance_type = "일반참석자";
		break;
	case 5:
		$attendance_type = "고객사";
		break;
}
?>
<style>
	/*2022-04-13 ldh 추가*/
	.form_btn {
		font-size: 18px;
		height: 50px;
		width: 100%;
		color: #fff;
		border-radius: 30px;
		margin-top: 100px;
	}

	/*2022-09-08 ldh 추가*/
	.mypage .tab_green2 {
		text-align: center;
		white-space: nowrap;
	}

	.tab_green2 {
		display: flex;
		justify-content: center;
		margin-bottom: 37px;
	}

	.tab_green2 li.on {
		border-bottom: 2px solid #10BF99;
	}

	.tab_green2 li:not(:last-of-type) {
		margin-right: 40px;
	}

	.mypage .tab_green2 li {
		display: inline-block;
	}

	.tab_green2 li a {
		font-size:
			/*30px*/
			24px;
		font-weight: 400;
		color: #CCCCCC;
	}

	.tab_green2 li.on a {
		font-weight: bold;
		color: #10BF99;
	}
	label {
		margin-right: 10px;
	}
</style>

<section class="container form_section mypage">
	<h1 class="page_title">등록 수정 페이지</h1>
	<div class="inner">
		<!-- <ul class="tab_green">
			<li class="on"><a href="./mypage.php">개인 정보</a></li>
			<li><a href="./mypage_registration.php">등록</a></li>
			<li><a href="./mypage_abstract.php">초록</a></li>
		</ul> -->
		<div>
			<!-- 230824 다운로드 버튼 추가 -->
			<!-- 231121 학회팀 요청으로 주석 
			<?php
			if ($_SESSION["USER"]["regi_status"] == 2 || $_SESSION["USER"]["regi_status"] == 5) {
			?>
				<div class="down_btns">
					<button class="btn blue_btn nowrap book"><img src="./img/icons/icon_download_white.svg" alt="">
						<a href="http://184a8b4a1a076d93.kinxzone.com/Abstractbook.pdf" target="_blank">Abstract Book
							Download</a>
					</button>
					<button class="btn blue_btn nowrap book"><img src="./img/icons/icon_download_white.svg" alt="">
						<a href="http://184a8b4a1a076d93.kinxzone.com/Programbook.pdf" target="_blank">Program Book
							Download</a>
					</button>
				</div>
			<?php
			}
			?>-->
			<form class="table_wrap" name="modify_form">
				<div class="x_scroll">
					<table class="table detail_table">
						<colgroup>
							<col class="col_th">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>등록번호</th>
								<td>
									<div class="max_normal">
										<input type="text" name="register_no" value="<?= $register_no  ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>성함</th>
								<td>
									<div class="max_normal">
										<input type="text" name="name" value="<?= $data['last_name'] . $data['first_name'];  ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>소속</th>
								<td>
									<div class="max_normal">
										<input type="text" name="affiliation" value="<?= $data['affiliation']   ?>" readonly>
									</div>
								</td>
							</tr>
							<?php
							if ($user_info["nation_no"] == "25") {
								if ($user_info["ksola_member_status"] == "1" || $user_info["ksola_member_status"] == "2") {
									$mem_chk = "checked";
									$mem_chk2 = "";
								} else {
									$mem_chk = "";
									$mem_chk2 = "checked";
								}
							?>
								<tr name="ksola_tr" id="ksola_tr">
									<th class="nowrap">대한비만학회 회원 여부</th>
									<td>
										<div class="max_normal">
											<input type="checkbox" class="checkbox" id="membership_status1" disabled <?= $mem_chk ?>>
											<label for="membership_status1"><i></i>회원</label>
											<input type="checkbox" class="checkbox" id="membership_status2" disabled <?= $mem_chk2 ?>>
											<label for="membership_status2"><i></i>비회원</label>
										</div>
									</td>
								</tr>
							<?php
							}
							?>

							<tr>
								<th>참가 유형</th>
								<td>
									<div class="max_normal">
										<input type="text" name="name" value="<?= $attendance_type  ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>분야 구분</th>
								<td>
									<div class="max_normal">
										<input type="text" name="name" value="<?= $data['occupation_type']   ?>" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<th>참석 구분</th>
								<td>
									<div class="max_normal">
										<input type="text" name="member_type" value="<?= $member_type;  ?>" readonly>
									</div>
								</td>
							</tr>
							<?php
							if ($data["is_score"] == "0" || $data["is_score"] == "1") {
									$is_score = "checked";
									$is_score2 = "";
								} else {
									$is_score = "";
									$is_score2 = "checked";
								}
								?>
							<tr>
								<th>평점 신청</th>
								<td>
									<div class='radio_wrap'>
										<ul class='flex'>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio1'
													name='review' value='1' <?= ($data["is_score"] == 1 ? "checked" : "") ?>>
												<label for='radio1'><i></i>필요</label>
											</li>
											<li>
												<input type='radio' class='new_radio registration_check' id='radio2'
													name='review' value='0' <?= ($data["is_score"] == 0 ? "checked" : "") ?>>
												<label for='radio2'><i></i>불필요
												</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr class="review">
								<th>의사 면허번호</th>
								<td>
									<div class="max_normal review">
										<input type="text" name="licence_number" value="<?= $data['licence_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr class="review">
								<th>전문의 번호</th>
								<td>
									<div class="max_normal ">
										<input type="text" name="specialty_number" value="<?= $data['specialty_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr class="review">
								<th>영양사 면허번호</th>
								<td>
									<div class="max_normal ">
										<input type="text" name="nutritionist_number" value="<?= $data['nutritionist_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr class="review">
								<th>임상영양사 자격번호</th>
								<td>
									<div class="max_normal ">
										<input type="text" name="dietitian_number" value="<?= $data['dietitian_number']   ?>" >
									</div>
								</td>
							</tr>
							<tr class="review">
								<th>생년월일</th>
								<td>
									<div class="max_normal ">
										<input id="datepicker" type="text" name="date_of_birth" value="<?= $data['date_of_birth'] ?>"
										onKeyup="birthChk(this)">
									</div>
								</td>
							</tr>
							<tr>
								<th>기타</th>
								<td>
									<div class="max_normal">
									<table class="c_table detail_table" id="othersList_table" name=" othersList_table">
                                <colgroup>
                                    <col class="submission_col">
                                    <col>
                                </colgroup>
                                <tbody id="othersList">
                                    <?php
                                        $others_arr = array(
                                            "Satellite Symposium",
                                            "Welcome Reception",
                                            "Breakfast Symposium",
                                            "Luncheon Symposium"
                                        );
                                        $other_date_arr = array(
                                            "3월 8일(금) 18:30~19:40",
                                            "3월 8일(금) 19:40~",
                                            "3월 9일(토) 08:00~08:45",
                                            "3월 9일(토) 12:00~13:00"
                                        );

                                        $prev_data_arr = [];
                                        if ($data["day2_breakfast_yn"] == "Y") {
                                            array_push($prev_data_arr, 1);
                                        }
                                        if ($data["welcome_reception_yn"] == "Y") {
                                            array_push($prev_data_arr, 2);
                                        }
                                        if ($data["day2_luncheon_yn"] == "Y") {
                                            array_push($prev_data_arr, 3);
                                        }
                                        if ($data["day3_breakfast_yn"] == "Y") {
                                            array_push($prev_data_arr, 4);
                                        }
                                      

                                        for ($i = 1; $i <= count($others_arr); $i++) {
                                            $valueType = "";
                                            $content = $others_arr[$i - 1];

                                            $is_yes = in_array($i, $prev_data_arr);

                                            echo "<tr style='border:none;'>
													<th style='background-color:#FFF;border:none;' class='border_r_none'>" . $others_arr[$i - 1] . "</th>
													<th style='background-color:#FFF;border:none;'>" . $other_date_arr[$i - 1] . "</th>
													<td style='background-color:#FFF;border:none;'>
														<div class='radio_wrap' id='focus_others' tabindex='0'>
															<ul class='flex'>
																<li>
																	<input type='radio' id='yes" . $i . "' class='new_radio' name='others" . $i . "' value='" . $others_arr[$i - 1] . $other_date_arr[$i - 1] . "' " . ($is_yes ? "checked" : "") . ">
																	<label for='yes" . $i . "'>
																		<i></i> Yes
																	</label>
																</li>
																<li>
																<input type='radio' id='no" . $i . "' class='new_radio' name='others" . $i . "' value='" . $others_arr[$i - 1] . $other_date_arr[$i - 1] . "' " . ($is_yes ? "" : "checked") . ">
																	<label for='no" . $i . "'>
																		<i></i> No
																	</label>
																</li>
															</ul>
														</div>
													</td>
												</tr>";
                                        }
                                        ?>
                                			</tbody>
                            			</table>
									</div>
								</td>
							</tr>

							<tr style="display: none;">
								<th>특이식단</th>
								<td>
									<div class="max_normal ">
									<ul class="chk_list info_check_list flex_center type2">
                         
                            <li>
                                <input type="radio" class='checkbox' id="special_request1" name='special_request' checked
                                    value="0" <?= $data["special_request_food"] === '0' ? "checked" : "" ?> />
                                <label for="special_request1"><i></i>해당 없음</label>
                            </li>
                            <li>
                                <input type="radio" class='checkbox' id="special_request2" name='special_request'
                                    value="1" <?= $data["special_request_food"] === '1' ? "checked" : "" ?> />
                                <label for="special_request2"><i></i>Vegetarian</label>
                            </li>
                            <li>
                                <input type="radio" class='checkbox' id="special_request3" name='special_request'
                                    value="2" <?= $data["special_request_food"] === '2' ? "checked" : "" ?> />
                                <label for="special_request3"><i></i>Halal</label>
                            </li>
                        </ul>
									</div>
								</td>
							</tr>
							<tr>
								<th>유입경로</th>
								<td>
									<div class="max_normal ">
									<ul class="chk_list info_check_list">
                            <?php
                                $conference_info_arr = array(
                                    "대한비만학회 홈페이지",
                                    "대한비만학회 홍보 이메일",
                                    "관련 학회의 광고 이메일 또는 게시판",
                                    "제휴 회사/기관에 관한 정보",
                                    "발표자, 모더레이터 및 토론 참가자로 초청",
                                    "교수님의 추천",
                                    "지인의 추천",
                                    "제약회사",
                                    "의료 커뮤니티 (MEDI:GATE, Dr.Ville 등)",
                                    "의학 뉴스 및 저널"
                                );

                                $prev_list = explode("*", $data["conference_info"] ?? "");

                                for ($i = 1; $i <= count($conference_info_arr); $i++) {
                                    $content = $conference_info_arr[$i - 1];
                                    $checked = "";

                                    if ($content && in_array($content, $prev_list)) {
                                        $checked = "checked";
                                    }

                                    echo "
										<li>
											<input type='checkbox' class='checkbox' id='list" . $i . "' name='list' value='" . $conference_info_arr[$i - 1] . "' " . $checked . ">
											<label for='list" . $i . "'>
												<i></i>" . $conference_info_arr[$i - 1] . "
											</label>
										</li>
										";
                                }
                                ?>

                        </ul>
									</div>
								</td>
							</tr>
							<tr>
								<th>등록비</th>
								<td>
									<div class="max_normal ">
									<input type="text" name="fee" value="<?= number_format($data['price']) ,'원'?>" readonly>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="btn_wrap">
						<button type="button" class="btn green_btn long_btn submit_btn" id="pc_submit">수정</button>
					</div>
				</div>
				
				<input type="hidden" name="ksola_member_check">
			</form>
			<input type="hidden" name="nation_tel" value="<?= $nation_tel ?>">
			<input type="hidden" name="check_type" value="1">
		</div>
	</div>
</section>
<script src="./js/script/client/member.js"></script>
<script>

	$(".review").addClass("hidden");
	
	window.onload = ()=>{
		checkIsScore();
	}

		$('input[name=review]').on("change", function() {
        if ($('input[name=review]:checked').val() == '1') {
            $(".review").removeClass("hidden");
        } else {
            // init
            $(".review_sub_list input[type=text]").val("");
            $(".review_sub_list input[type=checkbox]").prop("checked", false);

            if (!$(".review").hasClass("hidden")) {
                $(".review").addClass("hidden");
            }
        }
    });


	$('#nutritionist_number').on("input", ()=>{
        $("#date_of_birth").show();
    })

    $('#dietitian_number').on("input", ()=>{
        $("#date_of_birth").show();
    })

    if($('#nutritionist_number').val() !== ""){
        $("#date_of_birth").show();
    }
    
    if($('#dietitian_number').val() !== ""){
        $("#date_of_birth").show();
    }

	/**유입 경로 체크시 다른 체크 풀기 */
	$("input[name=list]").on("change", function() {
        const checked = $(this).is(":checked");
        if (checked) {
			$("input[name='list']").not(this).prop("checked", false);
        }
    });

$(document).on("click", "#pc_submit", function() {
		const licence_number = $('input[name=licence_number]').val();
		const specialty_number = $('input[name=specialty_number]').val();
		const nutritionist_number = $('input[name=nutritionist_number]').val();
		const dietitian_number = $('input[name=dietitian_number]').val();

		const date_of_birth = $('input[name=date_of_birth]').val();

		const prev_no = <?php echo $data['idx']; ?>;
		const nation = "Republic of Korea";
		const participation_type = <?php echo $data['attendance_type']; ?>;
		const occupation =  '<?php echo $data['occupation_type']; ?>';
		const category =  '<?php echo $data['member_type']; ?>';
		const reg_fee = <?php echo $data['price']; ?>;
		const total_reg_fee = <?php echo $data['price']; ?>;

		let review = "";

		let others1 = "";
		let others2 = "";
		let others3 = "";
		let others4 = "";

		let special_request = "";

		let conference_info_arr = [];

		const anyChecked = $("input[name='list']:checked").length > 0;

        if (!anyChecked) {
            alert("유입경로를 선택하세요.");
			return;
        }

		if($("#radio1").is(":checked") && nutritionist_number !== "" && $('#datepicker').val() === ""){
			$('#datepicker').focus()
			alert("생년월일을 입력해주세요.")
			return;
		}

		if($("#radio1").is(":checked") && dietitian_number !== "" && $('#datepicker').val() === "" ){ 
			$('#datepicker').focus()
			alert("생년월일을 입력해주세요.")
			return;
		}

		/**is_score */
		if($("#radio1").is(":checked") && !$("#radio2").is(":checked")){
			 review = "1";
		}
		else if(!$("#radio1").is(":checked") && $("#radio2").is(":checked")){
			 review = "0";
		}

		/**others 1 */
		if($("#yes1").is(":checked") && !$("#no1").is(":checked")){
			 others1 = "Satellite Symposium3월 8일(금) 18:30~19:40";
		}
		else if(!$("#yes1").is(":checked") && $("#no1").is(":checked")){
			 others1 = "no";
		}
		/**others 2 */
		if($("#yes2").is(":checked") && !$("#no2").is(":checked")){
			 others2 = "Welcome Reception3월 8일(금) 19:40~";
		}
		else if(!$("#yes2").is(":checked") && $("#no2").is(":checked")){
			 others2 = "no";
		}
		/**others 3 */
		if($("#yes3").is(":checked") && !$("#no3").is(":checked")){
			 others3 = "Breakfast Symposium3월 9일(토) 08:00~08:45";
		}
		else if(!$("#yes3").is(":checked") && $("#no3").is(":checked")){
			 others3 = "no";
		}
		/**others 4 */
		if($("#yes4").is(":checked") && !$("#no4").is(":checked")){
			 others4 = "Luncheon Symposium3월 9일(토) 12:00~13:00";
		}
		else if(!$("#yes4").is(":checked") && $("#no4").is(":checked")){
			 others4 = "no";
		}

		/**특이식단 */
		/** 해당 없음 */
		if($("#special_request1").is(":checked") && !$("#special_request2").is(":checked") && !$("#special_request3").is(":checked") ){
			 special_request = "0";
		}
		// Vegetarian
		else if(!$("#special_request1").is(":checked") && $("#special_request2").is(":checked") && !$("#special_request3").is(":checked") ){
			 special_request = "1";
		}
		// halal
		else if(!$("#special_request1").is(":checked") && !$("#special_request2").is(":checked") && $("#special_request3").is(":checked") ){
			 special_request = "2";
		}

		//유입경로
		if($("#list1").is(":checked")){
			conference_info_arr = ["대한비만학회 홈페이지"];
		}
		else if($("#list2").is(":checked")){
			conference_info_arr = ["대한비만학회 홍보 이메일"];
		}
		else if($("#list3").is(":checked")){
			conference_info_arr = ["관련 학회의 광고 이메일 또는 게시판"];
		}
		else if($("#list4").is(":checked")){
			conference_info_arr = ["제휴 회사/기관에 관한 정보"];
		}
		else if($("#list5").is(":checked")){
			conference_info_arr = ["발표자, 모더레이터 및 토론 참가자로 초청"];
		}
		else if($("#list6").is(":checked")){
			conference_info_arr = ["교수님의 추천"];
		}
		else if($("#list7").is(":checked")){
			conference_info_arr = ["지인의 추천"];
		}
		else if($("#list8").is(":checked")){
			conference_info_arr = ["제약회사"];
		}
		else if($("#list9").is(":checked")){
			conference_info_arr = ["의료 커뮤니티 (MEDI:GATE, Dr.Ville 등)"];
		}
		else if($("#list10").is(":checked")){
			conference_info_arr = ["의학 뉴스 및 저널"];
		}

			var formData = {
				"licence_number": licence_number,
				"specialty_number": specialty_number,
				"nutritionist_number": nutritionist_number,
				"dietitian_number": dietitian_number,
				"date_of_birth": date_of_birth,
				"prev_no": prev_no,
				"nation": nation,
				"participation_type": participation_type,
				"occupation": occupation,
				"category": category,
				"reg_fee": reg_fee,
				"total_reg_fee": total_reg_fee,
				"review": review,
				"others1": others1,
				"others2": others2,
				"others3": others3,
				"others4": others4,
				"special_request": special_request,
				conference_info_arr:conference_info_arr
			};

		

			if (confirm("계정 정보를 수정하시겠습니까?")) {
				$.ajax({
					url: PATH + "ajax/client/ajax_registration.php",
					type: "POST",
					data: {
						flag: "registration",
						data: formData
					},
					dataType: "JSON",
					success: function(res) {
						if (res.code == 200) {
							alert("수정 완료되었습니다.");
							location.reload();
						} else if (res.code == 400) {
							alert(locale(language.value)("error_account_modify"));
							return false;
						} else {
							alert(locale(language.value)("reject_msg"))
							return false;
						}
					}
				});
			}
		});

	function checkIsScore(){
		if($("#radio1").is(":checked")){
			$(".review").removeClass("hidden");
		}
		if($("#radio2").is(":checked")){
			$(".review").addClass("hidden");
		}
	}

	function birthChk(input) {

		var value = input.value.replace(/[^0-9]/g, "").substr(0, 8); // 입력된 값을 숫자만 남기고 모두 제거
		if (value.length === 8) {
			var regex = /^(\d{4})(\d{2})(\d{2})$/;
			var formattedValue = value.replace(regex, "$1-$2-$3");
			input.value = formattedValue;
		} else {
			input.value = value;
		}

	}
</script>
<?php include_once('./include/footer.php'); ?>