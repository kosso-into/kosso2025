<?php include_once("../../common/common.php");?>
<?php
    if($_POST["flag"] == "onsite") {
        $data = isset($_POST["data"]) ? $_POST["data"] : "";

        // common
        $ksso_member_status = isset($data["ksso_member_status"]) ?? "";

        // member
        $nation_no = $data["nation_no"] ?? "";
        $email = $data["email"] ?? "";
        $password = $data["password"] ?? "";
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $first_name = $data["first_name"] ?? "";
        $first_name_kor = $data["first_name_kor"] ?? "";
        $last_name = $data["last_name"] ?? "";
        $last_name_kor = $data["last_name_kor"] ?? "";
        $affiliation = $data["affiliation"] ?? "";
        $affiliation_kor = $data["affiliation_kor"] ?? "";
        $department = $data["department"] ?? "";
        $department_kor = $data["department_kor"] ?? "";
        $phone = $data["phone"] ?? "";
        $date_of_birth = $data["date_of_birth"] ?? "";

        // registration
        $participation_type = isset($data["participation_type"]) ?? "";
        switch($participation_type){
            case "Committee":
                $attendance_type = 0;
                break;
            case "Speaker":
                $attendance_type = 1;
                break;
            case "Chairperson":
                $attendance_type = 2;
                break;
            case "Panel":
                $attendance_type = 3;
                break;
            case "Participants":
                $attendance_type = 4;
                break;
            case "Sponsor":
                $attendance_type = 5;
                break;
        }
        $occupation = $data["occupation"] ?? "";
        $occupation_other_type = $data["occupation_other_type"] ?? "";
        $member_type = $data["member_type"] ?? "";
        $member_other_type = $data["member_other_type"] ?? "";
        $is_score = $data["is_score"] ?? "";
        $licence_number = $data["licence_number"] ?? "";
        $nutritionist_number = $data["nutritionist_number"] ?? "";
        $dietitian_number = $data["dietitian_number"] ?? "";

        $welcome_reception_yn = $data["welcome_reception_yn"] !== null ? "Y" : "N";
        $day2_breakfast_yn    = $data["day2_breakfast_yn"] !== null ? "Y" : "N";
        $day2_luncheon_yn     = $data["day2_luncheon_yn"] !== null ? "Y" : "N";
        $day3_breakfast_yn    = $data["day3_breakfast_yn"] !== null ? "Y" : "N";
        $day3_luncheon_yn     = $data["day3_luncheon_yn"] !== null ? "Y" : "N";
        $conference_info = implode("*", $data["conference_info_arr"]);
        $price = $data["price"] ?? "";

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
										date_of_birth = '{$date_of_birth}',
										privacy_access = 'Y',
										privacy_access_date = NOW(),
								";

        // 국내 일 때
        if($nation_no == 25) {
            $insert_member_query .= ", last_name_kor = '{$last_name_kor}' ";
            $insert_member_query .= ", first_name_kor = '{$first_name_kor}' ";
            $insert_member_query .= ", affiliation_kor = '{$affiliation_kor}' ";
            $insert_member_query .= ", department_kor = '{$department_kor}' ";

            $insert_member_query .= ", is_score = '{$department_kor}' ";
        }

        if($ksso_member_status == 1) {
            $insert_member_query .= ", ksola_member_status = {$ksso_member_status}";
        }

//        if($ksola_member_check != "") {
//            // 중복 체크용 id 저장
//            $insert_member_query .= ", ksola_member_check = '{$ksola_member_check}' ";
//        } else {
//            $insert_member_query .= ", ksola_member_check = NULL ";
//        }

        $insert_member = sql_query($insert_member_query);

        $member_idx = $insert_member;

        $insert_registration_query =	"
                                            INSERT request_registration
                                            SET
                                                status = 5,
                                                attendance_type = {$attendance_type},
                                                is_score = '{$is_score}',
                                                ksso_member_status = '{$ksso_member_status}',
                                                email = '{$email}',
                                                last_name = '{$last_name}',
										        first_name = '{$first_name}',
                                                nation_no = '{$nation_no}',
                                                phone = '{$phone}',
                                                affiliation = '{$affiliation}',
                                                department = '{$department}',
                                                phone = '{$phone}', 
                                                member_type = '{$member_type}',
                                                occupation_type = '{$occupation}'
                                                register_path = 'onsite',
                                                register = '{$member_idx}',
                                                conference_info = '{$conference_info}'
                                                welcome_reception_yn = '{$welcome_reception_yn}',
                                                day2_breakfast_yn = '{$day2_breakfast_yn}',
                                                day2_luncheon_yn = '{$day2_luncheon_yn}',
                                                day3_breakfast_yn = '{$day3_breakfast_yn}',
                                                day3_luncheon_yn = '{$day3_luncheon_yn}',
                                                payment_methods = 2,
                                                price = '{$price}'
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
            $insert_member_query .= ", licence_number = '{$licence_number}' ";
        } else {
            $insert_member_query .= ", licence_number = NULL ";
        }
        if(!empty($nutritionist_number)){
            $insert_member_query .= ", nutritionist_number = '{$nutritionist_number}' ";
        } else {
            $insert_member_query .= ", nutritionist_number = NULL ";
        }
        if(!empty($dietitian_number)){
            $insert_member_query .= ", dietitian_number = '{$dietitian_number}' ";
        } else {
            $insert_member_query .= ", dietitian_number = NULL ";
        }

        $insert_registration = sql_query($insert_member_query);

        if($insert_member && $insert_registration) {
            $res = [
                code => 200,
                msg => "onsite_registration success"
            ];
            exit;
        } else {
            $res = [
                code => 400,
                msg => "onsite_registration error"
            ];
            //echo json_encode($res);
            exit;
        }
    }
?>