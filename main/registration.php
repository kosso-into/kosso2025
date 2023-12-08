<?php
include_once('./include/head.php');
include_once('./include/header.php');

$_POST = [];                                            // 해당페이지는 정식 API 가 아니기에 예외처리
include_once('./ajax/client/ajax_registration.php');    // 요금관련 함수 호출을 위해 import (calcFee)

$registrationNo = preg_replace("/[^0-9]*/s", "", $_GET["idx"] ?? "");
$prev = NULL;

if ($registrationNo) {
    $sql = "SELECT * FROM request_registration WHERE is_deleted = 'N' AND idx = {$registrationNo}";
    $prev = sql_fetch($sql);

    $registrationNo = $prev["idx"] ?? "";

    if ($registrationNo) {
        $register = $prev["register"] ?? 0;
        $category = $prev["member_type"] ?? "";
        $occupation = $prev["occupation_type"] ?? "";
        $nation_no = $prev["nation_no"] ?? "";

        if ($prev["attendance_type"] == 4 || $prev["attendance_type"] == 5) {
            $calc_fee = calcFee($register, $category, $nation_no);
        } else {
            $calc_fee = 0;
        }
        //$calc_fee = $prev["attendance_type"] == 4 ? calcFee($register, $category, $nation_no) : 0;
        $prev["calc_fee"] = $calc_fee;
    }
}else{

    /**이미 등록한 회원 마이페이지로 이동하기
     * idx를 가지고 오면 수정하기 가능
     */
    $member_idx = $_SESSION["USER"]['idx'];
    $registration_info = "
                        SELECT
							*
						FROM request_registration
						WHERE request_registration.register = {$member_idx} AND is_deleted = 'N' 
    ";
    $register_data = get_data($registration_info);

    if(count($register_data) > 0){
        foreach($register_data as $data){
            if($data['status'] != 0 && $data['status'] != 4){
                echo "<script>alert('등록된 회원입니다.'); window.location.replace(PATH+'mypage_registration.php');</script>";
                // echo "<script>console.log(".$data['status'] .")</script>";
                exit;
            }
        }
    }
}

//경로 주의
if ($_SERVER["HTTP_HOST"] == "www.kosso.org") {
    echo "<script>location.replace('https://kosso.org/main/registration.php')</script>";
}


$sql_during =    "SELECT
						IF(NOW() BETWEEN '2022-08-18 17:00:00' AND '2024-02-24 23:59:59', 'Y', 'N') AS yn
					FROM info_event";
$during_yn = sql_fetch($sql_during)['yn'];
//!=="Y"
if ($during_yn !== "Y") {

?>

<section class="submit_application container">
    <div class="inner">
        <div class="sub_banner">
            <h1>Online Registration</h1>
        </div>
        <section class="coming">
            <img class="coming" src="./img/coming.png" />
            <div class="container">
                <div class="sub_banner">
                    <h5>Pre-Registration<br>has been closed</h5>
                </div>
            </div>
        </section>
    </div>
</section>

<?php
} else {
    $nation_query = "SELECT
							*
						FROM nation
						ORDER BY 
						idx = 25 DESC, nation_en ASC";
    //$nation_list_query = $_nation_query;
    $nation_list_query = $nation_query;
    $nation_list = get_data($nation_list_query);

    if (!empty($_SESSION["USER"])) {
        $user_info = $_SESSION["USER"];
    } else {
        echo "<script>alert('로그인을 해주세요.'); window.location.replace(PATH+'login.php');</script>";
        exit;
    }

    $_arr_phone = explode("-", $user_info["phone"]);
    $nation_tel = $_arr_phone[0];
    $phone = implode("-", array_splice($_arr_phone, 1));

    $sql_price =    "SELECT
							type_en, idx
						FROM info_event_price
						WHERE is_deleted = 'N'
						ORDER BY FIELD(idx, 1,2,3,4,5,6,7,8,9,10,12,11)";
    $price = get_data($sql_price);

    $member_idx = $_SESSION["USER"]['idx'];
    $sql_info = "
				SELECT
					m.email, m.first_name, m.last_name, m.first_name_kor, m.last_name_kor, n.nation_en, m.affiliation, m.department, m.phone, m.ksola_member_status, m.nation_no, m.affiliation_kor, m.department_kor
				FROM member m
				LEFT JOIN nation n
				ON m.nation_no = n.idx
				WHERE m.idx = {$member_idx}
				";
    $member_data = sql_fetch($sql_info);
    $phone = substr($member_data['phone'], 0, 3). '-' .  substr($member_data['phone'], 3, 4). '-' .substr($member_data['phone'], 7);

?>
<style>
/*2022-04-14 ldh 추가*/
.gray_btn {
    pointer-events: none;
}

.is_scroe_txt {
    font-size: 24px;
}

.korea_only,
.usd_only {
    display: none;
}

.korea_only.on,
.usd_only.on {
    display: revert;
}
</style>

<!-- <section class="container online_register submit_application"> -->
<section class="container online_register abstract_online_submission">
    <h1 class="page_title">사전 등록</h1>
    <div class="inner">
        <!-- <div class="sub_banner"> -->
        <!--     <h1>Online Registration</h1> -->
        <!-- </div> -->
        <div class="input_area">
            <h3 class="title">
                참가자 정보
                <p class="mt10"><span class="red_txt">*</span> '마이 페이지 - 개인 정보'에서 개인 정보를 수정할 수 있습니다</p>
            </h3>
            <div class="table_wrap detail_table_common x_scroll">
                <table class="c_table detail_table">
                    <colgroup>
                        <col class="submission_col">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>ID(email)</th>
                            <td><a href="mailto:<?= $member_data['email'] ?>"
                                    class="font_inherit link"><?= $member_data['email'] ?></a></td>
                        </tr>

                        <?php
                            $name_kor_cont = "<tr> 
												<th>성명</th>
												<td>" . $member_data['last_name_kor'] . "" . $member_data['first_name_kor'] . "</td>
											</tr>";
                            if ($member_data['nation_en'] === "Republic of Korea") {
                                echo $name_kor_cont;
                            }
                            ?>

                        <tr>
                            <th>소속</th>
                            <td><?= $member_data['affiliation_kor'] ?></td>
                        </tr>
                        <tr>
                            <th>부서</th>
                            <td><?= $member_data['department_kor'] ?></td>
                        </tr>
                        <tr>
                            <th>휴대폰 번호</th>
                            <td><?= $phone?></td>
                        </tr>
                        <?php if ($member_data['nation_en'] === "Republic of Korea") { ?>
                        <tr>
                            <th>대한비만학회 회원여부</th>
                            <td id='ksola_member_status'>
                                <?= $member_data['ksola_member_status'] == 0 ? '비회원' : '정회원' ?></td>
                        </tr>
                        <?php } ?>
                        <!-- <tr> -->
                        <!-- 	<th>Member of KSSO</th> -->
                        <!-- 	<td><?= $member_data['ksola_member_status'] == 0 ? '비회원' : '정회원' ?></td> -->
                        <!-- </tr> -->
                    </tbody>
                </table>
            </div>
            <form name="registration_form" class="registration_form">
                <input type="hidden" name="prev_no" value="<?= $registrationNo ?>" />
                <input type="hidden" id="nation" name="nation" value="<?= $member_data['nation_en'] ?>">
                <!-- onsubmit="return false" -->
                <ul class="basic_ul">
                    <li>
                        <p class="mb10"><span class="red_txt">*</span> 는 필수 입력입니다.</p>
                        <p class="label">참가 유형<span class="red_txt">*</span>
                        </p>
                         <select id="participation_type" name="participation_type" onChange="calc_fee(this)"
                            <?= $prev["status"] == 2 || $prev["status"] == 3 ? "readonly disabled" : "" ?>>
                            <option value="" selected hidden>필수 선택</option>
                            <?php
								        $attendance_arr = array();

                                        $attendance_arr[0]['name'] = "일반참석자";
                                        $attendance_arr[0]['value'] = "4";

                                        $attendance_arr[1]['name'] = "임원";
                                        $attendance_arr[1]['value'] = "0";

                                        $attendance_arr[2]['name'] = "좌장";
                                        $attendance_arr[2]['value'] = "2";

                                        $attendance_arr[3]['name'] = "연자";
                                        $attendance_arr[3]['value'] = "1";

                                        $attendance_arr[4]['name'] = "패널";
                                        $attendance_arr[4]['value'] = "3";
                                                                       
                                    foreach ($attendance_arr as $a_arr) {
                                        $selected =  $prev["attendance_type"] == $a_arr['value'] ? "selected" : "";
                                        echo '<option value="'.$a_arr['value'].'" '.$selected.'>'.$a_arr['name'].'</option>';
                                    }
								
							?> 
                        </select>
                    </li>
                    <li>
                        <p class="label">분야 구분 <span class="red_txt">*</span></p>
                        <ul class="half_ul">
                            <li>
                                <select id="occupation" name="occupation">
                                    <option value="Medical" selected hidden>필수 선택</option>
                                    <?php
                                        $occupation_arr = array("의료", "영양", "운동", "기타", "전시(부스)");

                                        foreach ($occupation_arr as $a_arr) {
                                            $selected = $prev["occupation_type"] === $a_arr ? "selected" : "";

                                            echo '<option value="' . $a_arr . '" ' . $selected . '>' . $a_arr . '</option>';
                                        }
                                        ?>
                                </select>
                            </li>
                            <!-- 'Other' 선택시, ▼ li.hide_input에 'on' 클래스 추가 -->
                            <li class="hide_input <?= $prev["occupation_type"] === "기타" ? "on" : "" ?>">
                                <input type="hidden" name="occupation_prev_input"
                                    value="<?= $prev["occupation_other_type"] ?? "" ?>" />
                                <input type="text" id="occupation_input" name="occupation_input"
                                    value="<?= $prev["occupation_other_type"] ?? "" ?>">
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p class="label">참석 구분<span class="red_txt">*</span>
                        </p>
                        <ul class="half_ul">
                            <li>
                               <select id="category" name="category" onChange="calc_fee(this)"
                                    <?= $prev["status"] == 2 || $prev["status"] == 3 ? "readonly disabled" : "" ?>>
                                    <option value="" selected hidden>필수 선택</option>
                                    <?php
                                        $participation_arr = array();

                                        $participation_arr[0]['name'] = "교수";
                                        $participation_arr[0]['value'] = "Professor";

                                        $participation_arr[1]['name'] = "개원의";
                                        $participation_arr[1]['value'] = "Certified M.D.";

                                        $participation_arr[2]['name'] = "봉직의";
                                        $participation_arr[2]['value'] = "Public Health Doctor";

                                        $participation_arr[3]['name'] = "교직의";
                                        $participation_arr[3]['value'] = "Corporate Member";

                                        $participation_arr[4]['name'] = "전임의";
                                        $participation_arr[4]['value'] = "Fellow";
                                        
                                        $participation_arr[5]['name'] = "수련의";
                                        $participation_arr[5]['value'] = "Intern";

                                        $participation_arr[6]['name'] = "전공의";
                                        $participation_arr[6]['value'] = "Resident";

                                        $participation_arr[7]['name'] = "영양사";
                                        $participation_arr[7]['value'] = "Nutritionist";

                                        $participation_arr[8]['name'] = "운동사";
                                        $participation_arr[8]['value'] = "Exercise Specialist";

                                        $participation_arr[9]['name'] = "간호사";
                                        $participation_arr[9]['value'] = "Nurse";

                                        $participation_arr[10]['name'] = "군의관";
                                        $participation_arr[10]['value'] = "Military Surgeon(군의관)";

                                        $participation_arr[11]['name'] = "공보의";
                                        $participation_arr[11]['value'] = "Pharmacist";

                                        $participation_arr[12]['name'] = "연구원";
                                        $participation_arr[12]['value'] = "Researcher";

                                        $participation_arr[13]['name'] = "학생";
                                        $participation_arr[13]['value'] = "Student";

                                        $participation_arr[14]['name'] = "기타";
                                        $participation_arr[14]['value'] = "Others";

                                        foreach ($participation_arr as $a_arr) {
                                            $selected =  $prev["member_type"] == $a_arr['value'] ? "selected" : "";
                                            echo '<option value="'.$a_arr['value'].'" '.$selected.'>'.$a_arr['name'].'</option>';
                                        }
                                        ?>
                                </select>
                            </li>
                            <!-- 'Other' 선택시, ▼ li.hide_input에 'on' 클래스 추가 -->
                            <li class="hide_input <?= $prev["member_type"] === "Others" ? "on" : "" ?>">
                                <input type="hidden" name="title_prev_input"
                                    value="<?= $prev["member_other_type"] ?? "" ?>" />
                                <input type="text" id="title_input" name="title_input"
                                    value="<?= $prev["member_other_type"] ?? "" ?>">
                            </li>
                        </ul>
                    </li>

                    <?php if ($member_data['nation_en'] == "Republic of Korea") { ?>
                    <li id='chk_org'>
                        <p class='label'>평점신청 <span class='red_txt'>*</span></p>
                        <div>
                            <div class='radio_wrap'>
                                <ul class='flex'>
                                    <li>
                                        <input type='radio' class='new_radio registration_check' id='radio1'
                                            name='review' value='1' <?= ($prev["is_score"] == 1 ? "checked" : "") ?>>
                                        <label for='radio1'><i></i>필요</label>
                                    </li>
                                    <li>
                                        <input type='radio' class='new_radio registration_check' id='radio2'
                                            name='review' value='0' <?= ($prev["is_score"] == 0 ? "checked" : "") ?>>
                                        <label for='radio2'><i></i>불필요
                                            <!-- <span class='is_scroe_txt red_txt'>(Overseas participants, please check '미신청').</span> -->
                                        </label>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- review_sub_list 클래스는 개발에서 show/hide 기능 대상 클래스로 사용하고 있습니다. -->
                    <li class="review_sub_list <?= ($prev["is_score"] == 1 ? "" : "hidden") ?>">
                        <p class="label">
                            의사 면허번호 <span class="red_txt">*</span>
                            <input type="checkbox" id="app1" class="checkbox"
                                <?= $prev["is_score"] == 1  && !$prev["licence_number"] ? "checked" : "" ?>>
                            <label for="app1">
                                <i></i> <?= $locale("not_applicable") ?>
                            </label>
                        </p>
                        <input type="text" name="licence_number" id="licence_number" class="under_50 input_license"
                            value="<?= $prev["is_score"] == 1 ? $prev["licence_number"] ?? "" : "" ?>">
                    </li>
                    <li class="review_sub_list <?= ($prev["is_score"] == 1 ? "" : "hidden") ?>">
                        <p class="label">
                            전문의 번호 <span class="red_txt">*</span>
                            <input type="checkbox" id="app2" class="checkbox"
                                <?= $prev["is_score"] == 1  && !$prev["specialty_number"] ? "checked" : "" ?>>
                            <label for="app2">
                                <i></i> <?= $locale("not_applicable") ?>
                            </label>
                        </p>
                        <input type="text" name="specialty_number" id="specialty_number" class="under_50 input_license"
                            value="<?= $prev["is_score"] == 1 ? $prev["specialty_number"] ?? "" : "" ?>">
                    </li>
                    <li class="review_sub_list <?= ($prev["is_score"] == 1 ? "" : "hidden") ?>">
                        <p class="label">
                            영양사 면허번호 <span class="red_txt">*</span>
                            <input type="checkbox" id="app3" class="checkbox"
                                <?= $prev["is_score"] == 1  && !$prev["nutritionist_number"] ? "checked" : "" ?>>
                              
                            <label for="app3">
                                <i></i> <?= $locale("not_applicable") ?>
                            </label>
                        </p>
                        <input type="text" name="nutritionist_number" id="nutritionist_number" class="under_50 input_license"
                            value="<?= $prev["is_score"] == 1 ? $prev["nutritionist_number"] ?? "" : "" ?>">
                      
                    </li>
                    <li class="review_sub_list <?= ($prev["is_score"] == 1 ? "" : "hidden") ?>">
                        <p class="label">
                            임상영양사 자격번호 <span class="red_txt">*</span>
                            <input type="checkbox" id="app4" class="checkbox"
                                <?= $prev["is_score"] == 1  && !$prev["dietitian_number"] ? "checked" : "" ?>>
                            <label for="app4">
                                <i></i> <?= $locale("not_applicable") ?>
                            </label>
                        </p>
                        <input type="text" name="dietitian_number" id="dietitian_number" class="under_50 input_license"
                            value="<?= $prev["is_score"] == 1 ? $prev["dietitian_number"] ?? "" : "" ?>">
                            
                    </li>
                    <li id="date_of_birth" class="review_sub_list <?= ($prev["is_score"] == 1 ? "" : "hidden") ?>">
                        <p class="label">
                        생년월일<span class="red_txt">*</span>
                        </p>
                            <input name="date_of_birth" pattern="^[0-9]+$" type="text" placeholder="yyyy-mm-dd"
                                        id="datepicker" onKeyup="birthChk(this)" 
                                        value="<?= $prev["is_score"] == 1 ? $prev["date_of_birth"] ?? "" : "" ?>"
                                        />
                    </li>
                    <?php } ?>
                    <li>
                        <p class="label type2">기타<span class="red_txt">*</span></p>
                        <p class="mb10">다음 행사에 대한 참석 여부를 확인해 주세요. </p>
                        <div class="table_wrap detail_table_common x_scroll">
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
                                        if ($prev["day2_breakfast_yn"] == "Y") {
                                            array_push($prev_data_arr, 1);
                                        }
                                        if ($prev["welcome_reception_yn"] == "Y") {
                                            array_push($prev_data_arr, 2);
                                        }
                                        if ($prev["day2_luncheon_yn"] == "Y") {
                                            array_push($prev_data_arr, 3);
                                        }
                                        if ($prev["day3_breakfast_yn"] == "Y") {
                                            array_push($prev_data_arr, 4);
                                        }
                                      

                                        for ($i = 1; $i <= count($others_arr); $i++) {
                                            $valueType = "";
                                            $content = $others_arr[$i - 1];

                                            $is_yes = in_array($i, $prev_data_arr);

                                            echo "<tr>
													<th class='border_r_none'>" . $others_arr[$i - 1] . "</th>
													<th>" . $other_date_arr[$i - 1] . "</th>
													<td>
														<div class='radio_wrap' id='focus_others' tabindex='0'>
															<ul class='flex'>
																<li>
																	<input type='radio' id='yes" . $i . "' class='new_radio' name='others" . $i . "' value='" . $others_arr[$i - 1] . $other_date_arr[$i - 1] . "' " . ($is_yes ? "checked" : "") . ">
																	<label for='yes" . $i . "'>
																		<i></i> Yes
																	</label>
																</li>
																<li>
																	<input type='radio' id='no" . $i . "' class='new_radio' name='others" . $i . "' value='no' " . ($is_yes || !$prev ? "" : "checked") . ">
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
                    </li>
                    <li>
                        <p class="label">특이 식단 <span class="red_txt">*</span></p>
                        <ul class="chk_list info_check_list flex_center type2">
                            <!-- <?= $prev["special_request_food"] === '0' ? "selected" : "" ?> -->
                            <li>
                                <input type="radio" class='checkbox' id="special_request1" name='special_request'
                                    value="0" <?= $prev["special_request_food"] === '0' ? "checked" : "" ?> />
                                <label for="special_request1"><i></i>해당 없음</label>
                            </li>
                            <li>
                                <input type="radio" class='checkbox' id="special_request2" name='special_request'
                                    value="1" <?= $prev["special_request_food"] === '1' ? "checked" : "" ?> />
                                <label for="special_request2"><i></i>Vegetarian</label>
                            </li>
                            <li>
                                <input type="radio" class='checkbox' id="special_request3" name='special_request'
                                    value="2" <?= $prev["special_request_food"] === '2' ? "checked" : "" ?> />
                                <label for="special_request3"><i></i>Halal</label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p class="label">
                            개최 정보는 어디에서 얻었나요? <span class="red_txt">*</span>
                        </p>
                        <!-- info_check_list 클래스는 개발에서 checkbox의 box wrap을 감지하기 위한 수단으로 이용하고 있습니다. -->
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

                                $prev_list = explode("*", $prev["conference_info"] ?? "");

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
                    </li>
                    <?php if ($prev["status"] != 2 && $prev["status"] != 3) { ?>
                    <li>
                        <p class="label type2">결제</p>
                        <div class="table_wrap detail_table_common x_scroll">
                            <table class="c_table detail_table">
                                <colgroup>
                                    <col class="col_th_s" width="30%">
                                    <col>
                                </colgroup>
                                <tbody>
                                    <tr style="display:none;">
                                        <th>등록비</th>
                                        <td class="regi_fee">
                                            <!-- USD / KRW -->
                                            <div class="fee_chk">
                                                <?php
                                                        if ($member_data['nation_no'] == 25) {
                                                        ?>
                                                <p class="korea_only on">KRW</p>
                                                <?php
                                                        } else {
                                                        ?>
                                                <p class="usd_only on">USD</p>
                                                <?php
                                                        }
                                                        ?>
                                            </div>
                                            <input type="text" id="reg_fee" name="reg_fee" placeholder="0" readonly
                                                value="<?= $prev["calc_fee"] || $prev["calc_fee"] == 0 ? number_format($prev["calc_fee"]) : "" ?>">
                                        </td>
                                    </tr>
                                    <!-- 프로모션 코드 
                                        1117 학회팀 요청으로 주석-->
                                  <tr style="display:none;">
                                        <th>프로모션 코드</th>
                                        <td>
                                            <ul class="half_ul" style="min-width:300px;">
                                                <li>
                                                    <input type="text" placeholder="Promotion code"
                                                        name="promotion_code"
                                                        value="<?= $prev["promotion_code_number"] ?? "" ?>">
                                                    <input type="hidden" name="promotion_confirm_code"
                                                        value="<?= $prev["promotion_code"] ?? "" ?>" />
                                                </li>
                                                <li><input type="text" placeholder="Recommended by"
                                                        name="recommended_by"
                                                        value="<?= $prev["recommended_by"] ?? "" ?>" maxlength="100"
                                                        onkeyup="checkRegExp(this);" onchange="checkRegExp(this);"></li>
                                                <li class="flex_none">
                                                    <button type="button"
                                                        class="btn gray2_btn form_btn apply_btn">Apply</button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr> 
                                            <tr>
                                                <th class="red_txt">총 등록비</th>
                                                <td><input type="text" id="total_reg_fee" name="total_reg_fee" placeholder="0" value="<?= $prev["price"] || $prev["price"] == 0 ? number_format($prev["price"]) : "" ?>" readonly></td>
                                            </tr>
                                    <!-- payment_method_wrap 클래스는 개발에서 결제수단을 히든처리 및 이벤트 트리거로 이용하고 있습니다. -->
                                    <tr class="payment_method_wrap">
                                        <th>결제 방법</th>
                                        <td>
                                            <div class="radio_wrap">
                                                <ul class="flex">
                                                    <li>
                                                        <input type="radio" id="credit" class="new_radio"
                                                            name="payment_method" value="credit"
                                                            <?= isset($prev["payment_methods"]) && $prev["payment_methods"] !== '1' ? "checked" : "" ?>>
                                                        <label for="credit">
                                                            <i></i>신용카드
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="bank" class="new_radio"
                                                            name="payment_method" value="bank"
                                                            <?= isset($prev["payment_methods"]) && $prev["payment_methods"] === '1' ? "checked" : "" ?>>
                                                        <label for="bank">
                                                            <i></i>계좌이체
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="payment_method_wrap" id="bank_detail" style="display: none;">
                                        <th>이체 정보</th>
                                        <td>
                                            
                                            <div class="payment_bank">
                                                <div>은행명 : 하나은행</div>
                                                <div>계좌 번호 : 584-910003-16504</div>
                                                <div>예금주 : 대한비만학회-등록비</div>
                                           </div>
                                        </td>
                                    </tr>
                                    <!-- <tr class="payment_method_wrap" id="bank_detail">
                                        <th>이체 정보</th>
                                        <td>
                                            <div class="payment_bank">
                                                <?php if(isset($prev["etc6"])){
                                                    $bankNameArray = explode('(', $prev["etc6"]);
                                                    $bankName = $bankNameArray[0];
                                                    
                                                    $bankNumArray = explode(")", $bankNameArray[1]);
                                                    $bankNum = $bankNumArray[0];
                                                }
                                                ?>
                                                
                                                <input name="bank" placeholder="은행명" value="<?php echo isset($prev["etc6"]) ? $bankName : ""; ?>" />
                                                <input name="number" class="bank_number" placeholder="계좌번호" value="<?php echo isset($prev["etc6"]) ? $bankNum : ""; ?>"/>
                                           </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

            </form>
            <div class="btn_wrap gap">
                <!-- 활성화 시, gray_btn 제거 & blue_btn 추가 -->
                <button type="button" class="btn online_btn <?= $registrationNo ? "" : "gray_btn" ?> prev_btn pointer">
                    이전으로
                </button>
                <button type="button" class="btn online_btn <?= $registrationNo ? "green_btn" : "" ?> next_btn pointer">
                    <?= $registrationNo ? "수정" : "접수" ?>
                </button>
            </div>
        </div>
    </div>
</section>

<script src="./js/script/client/registration.js?v=0.3"></script>
<script src="./js/script/client/promotion.js?v=0.3"></script>
<!-- <script src="./js/script/client/registration.js"></script> -->
<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>


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

$(document).ready(function() {
    // alert("등록 접수 준비중입니다.");
    // window.history.back();
    // window.location.href = "/main/index.php";
    // return;

    $('.etc1').hide();
    $("#date_of_birth").hide();
    // $(document).ready( function() {
    //     if ($('#bank').is(':checked') == true) {
    //         $('#bank_detail').show();
    //     } else {
    //         $('#bank_detail').hide();
    //     }
    // });
    if($('#bank').is(':checked') == true){
        $("#bank_detail").show();
    }else{
        $("#bank_detail").hide();
    }

    $(document).on("click", "#license_checkbox", function() {
        //console.log($(this).is(':checked'));
        if ($(this).is(':checked') == true) {
            $("input[name=licence_number]").attr("disabled", true);
            $("input[name=licence_number]").val("");
        } else {
            $("input[name=licence_number]").attr("disabled", false);

            $("#submit_btn").removeClass("submit_btn");
            $("#submit_btn").addClass("gray_btn");
        }
    });

    $('input[name=review]').on("change", function() {
        if ($('input[name=review]:checked').val() == '1') {
            $(".review_sub_list").removeClass("hidden");
        } else {
            // init
            $(".review_sub_list input[type=text]").val("");
            $(".review_sub_list input[type=checkbox]").prop("checked", false);

            if (!$(".review_sub_list").hasClass("hidden")) {
                $(".review_sub_list").addClass("hidden");
            }
        }
    });

    $(".review_sub_list input[type=checkbox]").on("change", function() {
        const checked = $(this).is(":checked");

        if (checked) {
            $(this).parent().next('input').val("");
        }
    });

    $(".input_license").on("keyup", function() {
        let v = $(this).val();

        v = v.replace(/[^0-9]/gi, "").substring(0, 50);

        if (v.length > 0) {
            $(this).prev().find('input[type=checkbox]').prop("checked", false);
        }

        $(this).val(v);
    });

     /**계좌 번호 
     * 숫자와 - 허용
     */
    // $(".bank_number").on("keyup", function() {
    //     let value = $(this).val();
    //     value = value.replace(/[^0-9-]/g, "");
    //     $(this).val(value);
    // });


    $("#bank").on("click", function() {
        $("#bank_detail").show();
    });
   
    $("#credit").on("click", function() {
        $("#bank_detail").hide();
    });


    /*
    $(".apply_btn").on("click", function(){
    	const promotionCode = $("input[name=promotion_code]").val();
    	const recommendBy = $("input[name=recommended_by]").val();

    	if(!promotionCode){
    		 $("input[name=promotion_code]").focus();
    		alert("Please Enter the code.");
    		return
    	}

    	if(!recommendBy){
    		$("input[name=recommended_by]").focus();
    		alert("Please Enter the recommender.");
    		return
    	}


    	if(promotionCode == 0){
    		$("input[name=promotion_confirm_code]").val(0).change();
    	}else if(promotionCode == 1){
    		$("input[name=promotion_confirm_code]").val(1).change();
    	}
    });
    */

    $(".next_btn").on("click", function() {
        if (!$("input[name=others1]").is(":checked") | !$("input[name=others2]").is(":checked") |
            !$("input[name=others3]").is(":checked") | !$("input[name=others4]").is(":checked")) {
            $("#focus_others").focus();
            alert("기타를 모두 체크해 주세요.");
            return false;
        }

        if($("#radio1").is(":checked")){
            if($("input[name=licence_number]").val() === "" && $("input[name=specialty_number]").val() === ""  && $("input[name=nutritionist_number]").val() === ""  && $("input[name=dietitian_number]").val() === ""){
            $("input[name=licence_number]").focus();
            alert("면허번호를 입력해 주세요.");
            return false;
            }
        }
           /**1121 계좌 이체 선택시 
         * 은행과 계좌번호 받는 코드(필수)
        //  */
        // if(!$("#credit").is(":checked") && $("#bank").is(":checked") && !$(".bank_number").val() ){
        //     alert("은행과 계좌번호를 입력해주세요.");
        //     return false;
        // }
        // if(!$("#credit").is(":checked") && $("#bank").is(":checked") && !$("input[name=bank]").val() ){
        //     alert("은행과 계좌번호를 입력해주세요.");
        //     return false;
        // }

        /**1129 영양사 면허번호, 임상영양사 자격번호 받을 경우
         * 생년월일 받는 코드(필수)
        //  */
        if($("#radio1").is(":checked") && $('#nutritionist_number').val() !== "" && $('#datepicker').val() === ""){
 
                alert("생년월일을 입력해주세요.")
                return false;
            }
        
        if($("#radio1").is(":checked") && $('#dietitian_number').val() !== "" && $('#datepicker').val() === "" ){ 
                alert("생년월일을 입력해주세요.")
                return false;
        }
    });

    /**[231205] sujeong / 영양사 면허번호 또는 임상영양사 자격번호 입력시 생년월일 보이도록 */
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

    $("select[name=category]").on("change", function() {
        const val = $(this).val();
        const prevTitle = $("input[name=title_prev_input]").val() ?? "";

        if (val === 'Others') {
            if (!$(this).parent("li").next('.hide_input').hasClass("on")) {
                $(this).parent("li").next('.hide_input').addClass("on");
            }
        } else {
            $(this).parent("li").next('.hide_input').removeClass("on");
            $("input[name=title_input]").val(prevTitle);
        }
    });

    $("select[name=occupation]").on("change", function() {
        const val2 = $(this).val();
        const prevTitle2 = $("input[name=occupation_prev_input]").val() ?? "";

        if (val2 === '기타') {
            if (!$(this).parent("li").next('.hide_input').hasClass("on")) {
                $(this).parent("li").next('.hide_input').addClass("on");
            }
        } else {
            $(this).parent("li").next('.hide_input').removeClass("on");
            $("input[name=occupation_input]").val(prevTitle2);
        }
    });

    $("input[name=reg_fee], input[name=promotion_confirm_code]").on("change", function() {
        const status = $("input[name=promotion_confirm_code]").val() ?? "";
        let v = $("input[name=reg_fee]").val();

        v = (v != "") ? parseFloat(v.replace(/[^0-9.]/gi, "")) : 0;

        if (status !== "") {
            if (status == 0) {
                v = v - (v * 1.0);
            } else if (status == 1) {
                v = v - (v * 0.5);
            } else if (status == 2) {
                v = v - (v * 0.3);
            }
        }

        $("input[name=total_reg_fee]").val(comma(v));

        if (v < 1) {
            if (!$(".payment_method_wrap").hasClass("hidden")) {
                $(".payment_method_wrap").addClass("hidden");
            }
            $(".payment_method_wrap li input[name=payment_method]:eq(0)").prop("checked", true);
            // 0628 추가
            $(".online_btn.next_btn").addClass("green_btn");
        } else {
            $(".payment_method_wrap").removeClass("hidden");
            $(".payment_method_wrap li input[name=payment_method]").prop("checked", false);
        }
    })
});
</script>
<?php
}
include_once('./include/footer.php');

?>