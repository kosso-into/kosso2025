<?php
include_once('./include/head.php');

// abstract
$sql_abstract =    "SELECT
						*
					FROM request_abstract
					WHERE is_deleted = 'N'
                    ";

$abstract = get_data($sql_abstract);

?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-full flex items-center justify-center">
    <div>
        <p></p>
        <input/>
    </div>
    <div>
        <p></p>
        <input/>
    </div>
    <button>체점하기</button>
</div>