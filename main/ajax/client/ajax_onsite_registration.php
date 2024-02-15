<?php include_once("../../common/common.php");?>
<?php
if($_POST["flag"] === "onsite") {
    $data = isset($_POST["data"]) ? $_POST["data"] : "";

    // ksso 회원 상태(0:비회원, 1:정회원, 2:평생회원)
    $ksso_member_status = $data["ksso_member_status"] ?? "0";
    // ksso 회원 id
    $ksso_member_check = $data["ksso_member_check"] ?? "";

    // member
    $nation_no = $data["nation_no"] ?? "";
    $email = $data["email"] ?? "";
    $password = $data["password"] ?? "";
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $first_name = $data["first_name"] ?? "";
    $first_name_kor = $data["first_name"] ?? "";
    $last_name = $data["last_name"] ?? "";
    $last_name_kor = $data["last_name"] ?? "";
    $affiliation = $data["affiliation"] ?? "";
    $affiliation_kor = $data["affiliation"] ?? "";
    $department = $data["department"] ?? "";
    $department_kor = $data["department"] ?? "";
    $phone = $data["phone"] ?? "";
    $telephone = $data["telephone"] ?? "";
    $date_of_birth = $data["date_of_birth"] ?? "";

    // registration
    $participation_type = $data["participation_type"] ?? "";

    $occupation = $data["occupation"] ?? "";
    $occupation_other_type = $data["occupation_other_type"] ?? "";
    $member_type = $data["member_type"] ?? "";
    $member_other_type = $data["member_other_type"] ?? "";
    $is_score = $data["is_score"] ?? "";
    $etc4 = $data["etc4"] ?? "";
    $licence_number = $data["licence_number"] ?? "";
    $nutritionist_number = $data["nutritionist_number"] ?? "";
    $dietitian_number = $data["dietitian_number"] ?? "";
    $specialty_number = $data["specialty_number"] ?? "";

    $welcome_reception_yn = $data["welcome_reception_yn"] !== null ? "Y" : "N";
    $day2_breakfast_yn    = $data["day2_breakfast_yn"] !== null ? "Y" : "N";
    $day2_luncheon_yn     = $data["day2_luncheon_yn"] !== null ? "Y" : "N";
    $day3_breakfast_yn    = $data["day3_breakfast_yn"] !== null ? "Y" : "N";
    $day3_luncheon_yn     =  "N";

    $conference_info = implode("*", $data["conference_info_arr"]);
    $price = $data["price"] ?? "";
    $fee= str_replace(",","",$price);

    $insert_member_query =	"
                                INSERT member
                                SET
                                    nation_no = {$nation_no},
                                    email = '{$email}',
                                    password = '{$password_hash}',
                                    last_name = '{$last_name}',
                                    first_name = '{$first_name}',
                                    affiliation = '{$affiliation}',
                                    department = '{$department}',
                                    phone = '{$phone}', 
                                    telephone = '{$telephone}', 
                                    terms_access = 'Y',
                                    terms_access_date = NOW(),
                                    privacy_access = 'Y',
                                    privacy_access_date = NOW(),
                                    email_certified = 'Y',
                                    ksola_member_status = '{$ksso_member_status}'
                            ";

    // 국내 일 때
    if($nation_no == 25) {
        $insert_member_query .= ", last_name_kor = '{$last_name}' ";
        $insert_member_query .= ", first_name_kor = '{$first_name}' ";
        $insert_member_query .= ", affiliation_kor = '{$affiliation}' ";
        $insert_member_query .= ", department_kor = '{$department}' ";
    }

    if($ksso_member_status == 1 || $ksso_member_status == 2) {
        $insert_member_query .= ", ksola_member_check = '{$ksso_member_check}' ";
    }

    sql_query($insert_member_query);
    $insert_member =  sql_insert_id();

    $member_idx = $insert_member;

    $insert_registration_query =	"
                                        INSERT request_registration
                                        SET
                                            status = 5,
                                            attendance_type = '{$attendance_type}',
                                            is_score = '{$is_score}',
                                            etc4 = '{$etc4}',
                                            ksso_member_status = '{$ksso_member_status}',
                                            email = '{$email}',
                                            nation_no = '{$nation_no}',
                                            last_name = '{$last_name}',
                                            first_name = '{$first_name}',
                                            phone = '{$phone}',
                                            affiliation = '{$affiliation}',
                                            department = '{$department}',
                                            member_type = '{$member_type}',
                                            occupation_type = '{$occupation}',
                                            register_path = 'onsite',
                                            register = '{$member_idx}',
                                            conference_info = '{$conference_info}',
                                            welcome_reception_yn = '{$welcome_reception_yn}',
                                            day2_breakfast_yn = '{$day2_breakfast_yn}',
                                            day2_luncheon_yn = '{$day2_luncheon_yn}',
                                            day3_breakfast_yn = '{$day3_breakfast_yn}',
                                            day3_luncheon_yn = 'N',
                                            special_request_food = 'N',
                                            payment_methods = 2,
                                            price = '{$fee}'
                                    ";

    if(!empty($member_other_type)){
        $insert_registration_query .= ", member_other_type = '{$member_other_type}' ";
    } else {
        $insert_registration_query .= ", member_other_type = NULL ";
    }

    if(!empty($occupation_other_type)){
        $insert_registration_query .= ", occupation_other_type = '{$occupation_other_type}' ";
    } else {
        $insert_registration_query .= ", occupation_other_type = NULL ";
    }

    if(!empty($licence_number)){
        $insert_registration_query .= ", licence_number = '{$licence_number}' ";
    }
    if(!empty($nutritionist_number)){
        $insert_registration_query .= ", nutritionist_number = '{$nutritionist_number}' ";
    }
    if(!empty($dietitian_number)){
        $insert_registration_query .= ", dietitian_number = '{$dietitian_number}' ";
    }
    if(!empty($specialty_number)){
        $insert_registration_query .= ", specialty_number = '{$specialty_number}' ";
    }
    if(!empty($date_of_birth)){
        $insert_registration_query .= ", date_of_birth = '{$date_of_birth}' ";
    }

    $insert_registration = sql_query($insert_registration_query);

    // reg2. users insert 230822
    $select_registration_sql = "
                                SELECT rr.idx, email, nation_no, nation_en
                                FROM request_registration rr
                                JOIN nation n ON n.idx = rr.nation_no
                                WHERE email = '{$email}'
                                ";
    $users_registration = sql_fetch($select_registration_sql);
    $registration_idx = $users_registration['idx'];
    $nation_eng = $users_registration['nation_en'];
    $registration_no = 'KSSO2024-0'.$registration_idx;
    $name_kor = $first_name_kor.$last_name_kor;

    $ksso_member_status_text="";
    switch($ksso_member_status) {
        case 0:
            $ksso_member_status_text = "비회원";
            break;
        case 1:
            $ksso_member_status_text = "정회원";
            break;
        case 2:
            $ksso_member_status_text = "평생회원";
            break;
    }

    $is_score_text="";
    switch($is_score) {
        case 0 :
            $is_score_text = "미신청";
            break;
        case 1 :
            $is_score_text = "신청";
            break;
    }
    $etc4_text="";
    switch($etc4) {
        case 0 :
            $etc4_text = "미신청";
            break;
        case 1 :
            $etc4_text = "신청";
            break;
    }

    
$member_type_text = "-";
switch ($member_type) {
	case "Professor":
		$member_type_text = "교수";
		break;
	case "Certified M.D.":
		$member_type_text = "개원의";
		break;
	case "Public Health Doctor":
		$member_type_text = "봉직의";
		break;
	case "Corporate Member":
		$member_type_text = "교직의";
		break;
	case "Fellow":
		$member_type_text = "전임의";
		break;
	case "Resident":
		$member_type_text = "전공의";
		break;
	case "Nutritionist":
		$member_type_text = "영양사";
		break;
	case "Exercise Specialist":
		$member_type_text = "운동사";
		break;
	case "Nurse":
		$member_type_text = "간호사";
		break;
	case "Researcher":
		$member_type_text = "연구원";
		break;
	case "Student":
		$member_type_text = "학생";
		break;
	case "Press":
		$member_type_text = "기자";
		break;   
	case "Others":
		$member_type_text = "기타";
		break;   
	case "Intern":
		$member_type_text = "수련의";
		break;  
	case "Military Surgeon(군의관)":
		$member_type_text = "군의관";
		break;
	case "Pharmacist":
		$member_type_text = "공보의";
		break;     
	case "Booth":
		$member_type_text = "전시(부스)";
		break;   
}

$attendance_type_text = "-";
switch ($participation_type) {
	case 0:
		$attendance_type_text = "임원";
		break;
	case 1:
		$attendance_type_text = "연자";
		break;
	case 2:
		$attendance_type_text = "좌장";
		break;
	case 3:
		$attendance_type_text = "패널";
		break;
	case 4:
		$attendance_type_text = "일반참석자";
		break;
	case 5:
		$attendance_type_text = "고객사";
		break;
    case 6:
        $attendance_type = "기자";
        break;
    case 7:
        $attendance_type = "심사";
        break;
}
    $time = date("Y-m-d");
    $nick_name = $first_name .  $last_name;
    $insert_reg_user_sql = "
                        INSERT reg1.users
                        SET
                            registration_no = '{$registration_no}',
                            time = '{$time}',
                            nick_name = '{$nick_name}',
                            email = '{$email}',
                            member = '{$ksso_member_status_text}',
                            phone = '{$telephone}',
                            org = '{$affiliation}',
                            org_nametag = '{$affiliation}',
                            department = '{$department}',
                            attendance_type = '{$attendance_type_text}',
                            member_type = '{$member_type_text}',
                            type1 = '{$occupation}',
                            fee = '{$fee}',
                            is_score = '{$is_score_text}',
                            is_score1 = '{$etc4_text}',
                            conference_info = '{$conference_info}',
                            welcome_reception_yn = '{$welcome_reception_yn}',
                            satellite_yn = '{$day2_breakfast_yn}',
                            breakfast_yn = '{$day2_luncheon_yn}',
                            luncheon_yn = '{$day3_breakfast_yn}',
                            date_of_birth = '{$date_of_birth}',
                            onsite_reg = '1',
                            deposit = '결제대기'
                    ";

    if(!empty($licence_number)){
        $insert_reg_user_sql .= ", licence_number = '{$licence_number}' ";
    }
    if(!empty($nutritionist_number)){
        $insert_reg_user_sql .= ", nutritionist_number = '{$nutritionist_number}' ";
    }
    if(!empty($dietitian_number)){
        $insert_reg_user_sql .= ", dietitian_number = '{$dietitian_number}' ";
    }
    if(!empty($specialty_number)){
        $insert_reg_user_sql .= ", specialty_number = '{$specialty_number}' ";
    }


    $insert_reg_user = sql_query($insert_reg_user_sql);

    if($insert_reg_user) {
        $res = [
            'code' => 200,
            'msg' => "onsite_registration success"
        ];
        echo json_encode($res);
    } else {
        $res = [
            'code' => 400,
            'msg' => "onsite_registration error"
        ];
        echo json_encode($res);
    }
    exit;
} else if($_POST["flag"] === "calc_fee"){

    $ksso_member_status = $_POST["ksso_member_status"];
    $category = $_POST["category"];
    $country = $_POST["country"] ?? "";

    $result = calcFee($ksso_member_status,$category, $country);

    if($result>=0) {
        $res = [
            code => 200,
            msg => "success",
            data => $result,
            country => $country
        ];
        echo json_encode($res);
        exit;

    } else {
        $res = [
            code => 400,
            msg => "error",
        ];
        echo json_encode($res);
        exit;

    }
}

function calcFee($ksso_member_status, $category, $country){

    // 카테고리별 상품금액 조회
    $calc_fee_query =	"
								SELECT
									off_member_usd, off_guest_usd, off_member_krw, off_guest_krw
								FROM info_event_price
								WHERE type_en = '{$category}';
							";

    $calc_fee = sql_fetch($calc_fee_query);

    if($country == 25){
        if($ksso_member_status >= 1){
            $result = $calc_fee["off_member_krw"];
        }else{
            $result = $calc_fee["off_guest_krw"];
        }
    }else{
        if(($ksso_member_status && !isset($calc_fee["off_member_usd"])) || (!$ksso_member_status && !isset($calc_fee["off_guest_usd"]))){
            echo json_encode(array("code"=>403, "msg"=>"Not invalid price type"));
            exit;
        }

        if($ksso_member_status >= 1){
            $result = $calc_fee["off_member_usd"];
        }else{
            $result = $calc_fee["off_guest_usd"];
        }
    }

    return $result;
}

?>