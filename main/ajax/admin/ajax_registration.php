<?php
    include_once("../../common/common.php");

    $flag = $_POST["flag"] ?? $_GET["flag"];


    //2021_06_18 HUBDNC_KMJ 관리자회원수정
//    if($flag == "registration_update"){
//        $registration_idx = isset($_POST["idx"]) ? $_POST["idx"] : "";
//        $submit_type = isset($_POST["type"]) ? $_POST["type"] : "";
//        $data = isset($_POST["data"]) ? $_POST["data"] : "";
//
//        $attendance_type = isset($data["attendance_type"]) ? $data["attendance_type"] : "";
//        
//        if($submit_type == "update_attendance_type") {
//            $cols = "";
//            
//            $cols .= "attendance_type = '{$attendance_type}'";
//
//            $update_query = "UPDATE request_registration
//                            SET
//                                {$cols}
//                            WHERE idx = {$idx}";
//
//            $registration_update = sql_query($update_query);
//
//            if(!$registration_update) {
//                $res = [
//                    code => 400,
//                    msg => "request registration query error"
//                ];
//                echo json_encode($res);
//                exit;
//            }
//
//            $res = array(
//                "code"=>200,
//                "msg"=>"ok" 
//            );
//            
//            echo json_encode($res);
//            exit;
//        }
//    }
    if($flag == "registration_update"){
        $registration_idx = isset($_POST["idx"]) ? $_POST["idx"] : "";
        $submit_type = isset($_POST["type"]) ? $_POST["type"] : "";
        $data = isset($_POST["data"]) ? $_POST["data"] : "";

        $attendance_type = isset($data["attendance_type"]) ? $data["attendance_type"] : "";
        $registration_type = isset($data["registration_type"]) ? $data["registration_type"] : "";
        $rating = isset($data["rating"]) ? $data["rating"] : "";
        $member_status = isset($data["member_status"]) ? $data["member_status"] : "";
        $member_type = isset($data["member_type"]) ? $data["member_type"] : "";
        $result_org = isset($data["result_org"]) ? $data["result_org"] : "";
        

        $update_registration_query =  "
                                            UPDATE request_registration
                                            SET
                                        ";

        if($attendance_type != "") {
            $update_registration_query .= " attendance_type = '{$attendance_type}', ";
        }

        if($registration_type != "") {
            $update_registration_query .= " registration_type = '{$registration_type}', ";
        }

        if($rating != "") {
            $update_registration_query .= " is_score = '{$rating}', ";
        }

        if($member_status != "") {
            $update_registration_query .= " member_status = '{$member_status}', ";
        }

        if($member_type != "") {
            $update_registration_query .= " member_type = '{$member_type}', ";
        }

        if($result_org != "") {
            $update_registration_query .= " etc2 = '{$result_org}', ";
        }
        
        $update_registration_query = substr($update_registration_query, 0, -2);

        $update_registration_query .= " WHERE idx = '{$idx}' ";
 
        $registration_update = sql_query($update_registration_query);

        if(!$registration_update) {
            $res = [
                code => 400,
                msg => "update registration query error"
            ];
            echo json_encode($res);
            exit;
        }

        $res = [
            code => 200,
            msg => "success"
        ];
        echo json_encode($res);
        exit;
    }


?>