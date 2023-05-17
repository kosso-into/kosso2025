<?php
	include_once("../../common/common.php");

	$flag = $_POST["flag"] ?? $_GET["flag"];

	foreach($_POST as $key=>$value){
		$_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
	}

	// 수정(+생성)
	if ($flag === "modify_lecture_speaker") {
		$speaker_idx = $_POST['idx'];

		// lecture
		if ($speaker_idx == "") {

            // 파일업로드 및 유효성 검사(profile)
            $file_profile = 0;
            if($_FILES["file_speaker_profile"]){
                $file_type = explode("/", $_FILES["file_speaker_profile"]["type"])[0];

                if($file_type == "image") {
                    $file_no = upload_image($_FILES["file_speaker_profile"], 8);

                    if ($file_no != "") {
                        $file_profile = $file_no;
                    } else {
                        return_value(500, "파일업로드가 실패했습니다.");
                    }
                } else {
                    return_value(403, "이미지만 등록가능합니다.");
                }
            }

            // 파일업로드 및 유효성 검사(cv)
            $file_cv = 0;
            if($_FILES["file_speaker_cv"]){
                $file_no = upload_file($_FILES["file_speaker_cv"], 7);

                if ($file_no != "") {
                    $file_cv = $file_no;
                } else {
                    return_value(500, "파일업로드가 실패했습니다.");
                }
            }
            
			// 생성
			$sql =	"INSERT INTO
						lecture_speaker
						(
							name_en, affiliation_en, lecture_start_time, lecture_end_time,
                            lecture_title, profile_img, cv_file
						)
					VALUES
						(
							'".$_POST['name_en']."', '".$_POST['affiliation_en']."', '".$_POST['start']."', '".$_POST['end']."', '".$_POST['lecture_title']."','".$file_profile."', '".$file_cv."'
						)
					";
			if (!sql_query($sql)) {
				return_value(500, "Lecture 등록 중 오류가 발생했습니다.\n관리자에게 문의하세요.");
			} else {
				$speaker_idx = sql_insert_id();
			}
		} else {

            // 파일업로드 및 유효성 검사(profile)
            $file_profile = 0;
            if($_FILES["file_speaker_profile"]){
                $file_type = explode("/", $_FILES["file_speaker_profile"]["type"])[0];

                if($file_type == "image") {
                    $file_no = upload_image($_FILES["file_speaker_profile"], 8);

                    if ($file_no != "") {
                        $file_profile = $file_no;
                    } else {
                        return_value(500, "파일업로드가 실패했습니다.");
                    }
                } else {
                    return_value(403, "이미지만 등록가능합니다.");
                }
            }

            // 파일업로드 및 유효성 검사(cv)
            $file_cv = 0;
            if($_FILES["file_speaker_cv"]){
                $file_no = upload_file($_FILES["file_speaker_cv"], 7);

                if ($file_no != "") {
                    $file_cv = $file_no;
                } else {
                    return_value(500, "파일업로드가 실패했습니다.");
                }
            }
			// 수정
			$sql =	"UPDATE lecture_speaker
					SET
						name_en		            = '".$_POST['name_en']."',
						affiliation_en			= '".$_POST['affiliation_en']."',
						lecture_start_time	    = '".$_POST['start']."',
						lecture_end_time		= '".$_POST['end']."',
						lecture_title			= '".$_POST['lecture_title']."',
						profile_img			    = '".$file_profile."',
						cv_file			        = '".$file_cv."'                   
					WHERE idx = '".$speaker_idx."'";
			if (!sql_query($sql)) {
				return_value(500, "Lecture 수정 중 오류가 발생했습니다.\n관리자에게 문의하세요.");
			}
		}

		return_value(200, "완료되었습니다.", array("idx"=>$speaker_idx));
	}

	// 삭제
	else if ($flag === "remove_lecture_speaker") {
		$sql =	"UPDATE lecture_speaker
				SET
					is_deleted = 'Y',
					delete_date = NOW()
				WHERE idx = '".$_POST['idx']."'
				";
		if (sql_query($sql)) {
			return_value(200, "완료되었습니다.");
		} else {
			return_value(500, "오류가 발생했습니다.\n관리자에게 문의하세요.");
		}
	}

	// 결과값 반환 공통화
	function return_value($code, $msg, $arr=array()){
		$arr["code"] = $code;
		$arr["msg"] = $msg;
		echo json_encode($arr);
		exit;
	}