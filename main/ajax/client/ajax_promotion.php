<?php include_once("../../common/common.php");?>
<?php
    if($_POST["flag"] == "select") {
        $promotion_code=$_POST["promotion_code"];

        $sql ="
					SELECT idx, promotion_code, discount_rate, count_limit
                    FROM promotion_code
                    WHERE promotion_code = {$promotion_code}
                    AND count_limit = 1;
				  ";

        $result = sql_fetch($sql);

        if($result) {
            $res = [
                code => 200,
                msg => "success",
                result => $result
            ];
            echo json_encode($res);
            exit;
        } else {
            $res = [
                code => 400,
                msg => "update query error"
            ];
            echo json_encode($res);
            exit;
        }

    } else if($_POST["flag"] == "regist"){
        $member_idx = $_SESSION["USER"]["idx"];
        $promotion_code_idx = $_POST["result"]["idx"];
        $recommender = $_POST["recommender"];

        $sql =	"
					INSERT management_promotion_code
					SET
						member_idx = {$member_idx},
						promotion_code_idx = {$promotion_code_idx},
						recommender = {$recommender},
						regist_date = NOW()
					";

        $result = sql_query($sql);

        if($result) {
            $res = [
                code => 200,
                msg => "success"
            ];
            echo json_encode($res);
            exit;
        } else {
            $res = [
                code => 400,
                msg => "update query error"
            ];
            echo json_encode($res);
            exit;
        }
    }
?>