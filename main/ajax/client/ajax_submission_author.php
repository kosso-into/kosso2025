<?php include_once("../../common/common.php");?>
<?php include_once("../../common/locale.php");?>

<?php
include_once('../../plugin/google-api-php-client-main/vendor/autoload.php');

$abstract_idx = $_POST["idx"];

// submission_info
$submit_data_query = "SELECT 
							idx, submission_code, nation_no, first_name, last_name, affiliation, email, phone, abstract_title, presentation_type, abstract_category
						FROM request_abstract";
$submit_data = sql_fetch($submit_data_query." WHERE idx = ".$abstract_idx) ?? [];

// presenting_author
$presenting_author_data = get_data($submit_data_query." WHERE (idx=".$abstract_idx." OR parent_author=".$abstract_idx.") AND presenting_author='Y'") ?? [];

// corresponding_author
$corresponding_submit_data = get_data($submit_data_query." WHERE (idx=".$abstract_idx." OR parent_author=".$abstract_idx.") AND corresponding_author='Y'") ?? [];

$result = array(
	"submit_data" => $submit_data, 
	"presenting_author_data" => $presenting_author_data,
	"corresponding_submit_data" => $corresponding_submit_data
);

echo json_encode(array(
	"code"	=> 200,
	"msg"	=> "success",
	"data"	=> $result
));
exit;
?>