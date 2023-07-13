<?php include_once("../../common/common.php");?>
<?php
if($_POST["flag"] == "select") {
    $member_idx = $_SESSION["USER"]["idx"];
    $date = $_POST["data"]["date"] ?? "";
    $option_room = $_POST["data"]["option_room"] ?? "";
    $option_category = $_POST["data"]["option_category"] ?? "";

    $row_sql="";
    $row_sql2="";

    switch ($date){
        case "1" : $program_date = "2023-09-07";
            break;
        case "2" : $program_date = "2023-09-08";
            break;
        case "3" : $program_date = "2023-09-09";
            break;
    }

    if($date != ""){
        $row_sql .= " AND program_date = '{$program_date}' ";
        $row_sql2 = " AND start_time >= '{$program_date}' ";
    }

    if($option_room != ""){
        $row_sql .= " AND program_place_idx = $option_room ";
    }

    if($option_category != ""){
        $row_sql .= " AND program_category_idx = $option_category ";
    }

    $select_program_list = "
                            SELECT p.idx, program_name, chairpersons, preview, program_place_idx, pp.program_place_name ,program_category_idx, program_date, 
                                   date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time,
                                   (CASE
                                       WHEN s.idx IS NULL THEN 'N'
                                       ELSE 'Y'
                                       END
                                   ) as schedule_check
                            FROM program p
                            LEFT JOIN program_place pp on p.program_place_idx = pp.idx
                            LEFT JOIN(
                                SELECT s.idx, member_idx, s.program_idx, s.register_date, s.is_deleted
                                FROM schedule s
                                WHERE member_idx='{$member_idx}'
                            )s on s.program_idx=p.idx
                            WHERE p.is_deleted = 'N'
                            {$row_sql}
                            ";
    $program_list = get_data($select_program_list);

    $select_contents_list = "
                             SELECT idx, program_idx, contents_title, SUBSTRING_INDEX(speaker,'&^',1) AS speaker, SUBSTRING_INDEX(speaker,'&^',-1) AS speaker_aff, 
                                    date_format(start_time, '%H:%i') as start_time, date_format(end_time, '%H:%i') as end_time
                             FROM program_contents
                             WHERE is_deleted = 'N'
                             {$row_sql2}
                            ";
    $contents_list = get_data($select_contents_list);

    $resultObj = [];
    foreach($program_list as $pl){
        $pl_idx = $pl['idx'];

        $resultObj[$pl_idx] = [
            'idx' => $pl_idx,
            'program_name' => $pl['program_name'],
            'chairpersons' => $pl['chairpersons'],
            'preview' => $pl['preview'],
            'program_place_name' => $pl['program_place_name'],
            'program_category_idx' => $pl['program_category_idx'],
            'program_date' => $pl['program_date'],
            'start_time' => $pl['start_time'],
            'end_time' => $pl['end_time'],
            'contents' => [],
            'schedule_check' => $pl['schedule_check']
        ];

        foreach ($contents_list as $cl){
            $program_idx = $cl['program_idx'];
            $cl_info = [
                'cl_idx' => $cl['idx'],
                'program_idx' => $program_idx,
                'contents_title' => $cl['contents_title'],
                'speaker' => $cl['speaker'],
                'speaker_aff' => $cl['speaker_aff'],
                'start_time' => $cl['start_time'],
                'end_time' => $cl['end_time']
            ];

            if($pl_idx === $program_idx){
                $resultObj[$pl_idx]['contents'][]=$cl_info;
            }
        }
    }

    if (isset($resultObj)) {
        $res = [
            code => 200,
            msg => "success",
            result => $resultObj
        ];
        echo json_encode($res);
        exit;
    } else {
        $res = [
            code => 400,
            msg => "select program error"
        ];
        echo json_encode($res);
        exit;
    }

} else if($_POST["flag"] == "schedule"){
    $member_idx = $_SESSION["USER"]["idx"];
    $program_idx = $_POST['program_idx'] ?? "";
    $check_schedule = $_POST['check_schedule'];

    if($check_schedule==0){
        $is_deleted = 'Y';
    } else if($check_schedule==1){
        $is_deleted = 'N';
    }

    $select_schedule_query = " 
                                SELECT idx, member_idx, program_idx, register_date, is_deleted
                                FROM schedule
                                WHERE member_idx = '{$member_idx}'
                                AND program_idx = '{$program_idx}'
                            ";
    $select_schedule = sql_fetch($select_schedule_query);

    if(isset($select_schedule)){
        $update_schedule_query = "
                            UPDATE schedule
                            SET
                                is_deleted = '{$is_deleted}'
                            WHERE member_idx = '{$member_idx}'
                            AND program_idx = '{$program_idx}'
                        ";
        $update_schedule = sql_query($update_schedule_query);

        if($update_schedule){
            $res = [
                code => 200,
                msg => "success"
            ];
            echo json_encode($res);
            exit;
        } else {
            $res = [
                code => 400,
                msg => "update schedule error"
            ];
            echo json_encode($res);
            exit;
        }
    } else {
        $insert_schedule_query = "
                                        INSERT schedule
                                        SET
                                            member_idx = '{$member_idx}',
                                            program_idx = '{$program_idx}'         
                                    ";
        $insert_schedule = sql_query($insert_schedule_query);

        if($insert_schedule){
            $res = [
                code => 200,
                msg => "success"
            ];
            echo json_encode($res);
            exit;
        }else {
            $res = [
                code => 400,
                msg => "insert schedule error"
            ];
            echo json_encode($res);
            exit;
        }
    }
}



