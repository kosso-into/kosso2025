<?php include_once("../../common/common.php");?>
<?php include_once('../../push_library/push.php'); ?>
<?php

if($_POST["flag"]==="modal"){
    $program_idx = $_POST["idx"];
    $select_query = "
    SELECT p.idx, p.program_name,  p.chairpersons,  p.preview, ppc.title, pp.program_place_name,
        DATE_FORMAT(p.start_time, '%Y-%m-%d %H:%i') as start_time, DATE_FORMAT(p.end_time, '%H:%i') as end_time,
        program_idx, pc.contents_title, isp.first_name, isp.last_name, isp.affiliation, pc.speaker,
        date_format(pc.start_time, '%H:%i') as contents_start_time, date_format(pc.end_time, '%H:%i') as contents_end_time
        FROM program as p
        LEFT JOIN program_contents pc ON p.idx = pc.program_idx
        LEFT JOIN invited_speaker isp ON isp.idx = pc.speaker_idx
        LEFT JOIN program_place pp ON pp.idx = p.program_place_idx
        LEFT JOIN program_category ppc ON ppc.idx = p.program_category_idx
        WHERE p.idx = {$program_idx}
        ORDER BY contents_start_time;
                ";

    $push_list = get_data($select_query);

if(!empty($push_list)){
    $res = [
        'code' => 200,
        'msg' => "success",
        'data' => $push_list 
    ];
    echo json_encode($res);
    exit;
}else {
    $res = [
        'code' => 400,
        'msg' => "error",
        'data' => null
    ];
    echo json_encode($res);
    exit;
}
}
else if($_POST["flag"]==="detail"){
    $category_idx = $_POST["idx"];
    $select_query = "
    SELECT p.idx, p.program_name,  p.chairpersons,  p.preview, ppc.title, pp.program_place_name,
        DATE_FORMAT(p.start_time, '%Y-%m-%d %H:%i') as start_time, DATE_FORMAT(p.end_time, '%H:%i') as end_time,
        program_idx, pc.contents_title, isp.first_name, isp.last_name, isp.affiliation, pc.speaker,
        date_format(pc.start_time, '%H:%i') as contents_start_time, date_format(pc.end_time, '%H:%i') as contents_end_time
        FROM program_category AS ppc
        LEFT JOIN program p ON ppc.idx = p.program_category_idx
        LEFT JOIN program_contents pc ON p.idx = pc.program_idx
        LEFT JOIN invited_speaker isp ON isp.idx = pc.speaker_idx
        LEFT JOIN program_place pp ON pp.idx = p.program_place_idx
        WHERE ppc.idx = {$category_idx};
                ";

    $push_list = get_data($select_query);


if(!empty($push_list)){
    $res = [
        'code' => 200,
        'msg' => "success",
        'data' => $push_list 
    ];
    echo json_encode($res);
    exit;
}else {
    $res = [
        'code' => 400,
        'msg' => "error",
        'data' => null
    ];
    echo json_encode($res);
    exit;
}
}
?>