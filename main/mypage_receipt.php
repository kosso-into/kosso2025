<?php
include_once('./include/head.php');

// 23.05.19 HUBDNC_NYM PC, MOBILE마크업이 다른 부분이여서 체크 필요
$is_check_mobile = ($_GET["type"] == "pc") ? false : true;

$registration_idx = $_GET["idx"] ?? NULL;
$user_idx = $member["idx"] ?? NULL;

$sql = " SELECT
			reg.idx, reg.banquet_yn, reg.email, reg.nation_no, reg.first_name, reg.last_name, reg.affiliation, reg.phone, reg.department, reg.member_type, reg.occupation_type, DATE(reg.register_date) AS register_date, DATE_FORMAT(reg.register_date, '%m-%d-%Y %H:%i:%s') AS register_date2, reg.status, reg.is_score,
			reg.attendance_type, reg.licence_number, reg.specialty_number, reg.nutritionist_number, reg.dietitian_number, reg.date_of_birth, reg.conference_info, reg.welcome_reception_yn, reg.day2_breakfast_yn, reg.day2_luncheon_yn, reg.day3_breakfast_yn, reg.day3_luncheon_yn, reg.special_request_food,
			reg.payment_methods, reg.price, nation.nation_en, IF(nation.nation_tel = 82, 1, 0) AS is_korea,
			(
				CASE
					WHEN reg.ksso_member_status IS NULL OR reg.ksso_member_status = 0 THEN '비회원'
					WHEN reg.ksso_member_status > 0 THEN '회원'
				END
			) AS ksso_member_status,
			p.idx AS payment_idx, p.`type` AS payment_type, p.total_price_kr, p.total_price_us,
			p.etc2, DATE_FORMAT(p.register_date, '%Y-%m-%d %H:%i:%s') AS payment_register_date
			FROM request_registration reg
			LEFT JOIN payment p
			ON reg.payment_no = p.idx
			LEFT JOIN (
			SELECT idx, nation_en, nation_tel FROM nation
			)AS nation
			ON reg.nation_no = nation.idx
			WHERE reg.register = {$registration_idx}
			AND reg.is_deleted = 'N'";
$data = sql_fetch($sql);

if (!$data) {
	echo "<script>alert('등록 정보를 찾을 수 없습니다.');window.close();</script>";
	exit;
}

// 변수 설정	
//$register_no = !empty($registration_idx) ? "KSSO2024-" . $registration_idx : "-";


if($registration_idx < 10){
	$register_no = !empty($registration_idx) ? "KSSO2024-000" .$registration_idx : "-";
}else if($registration_idx >= 10 && $registration_idx < 100){
	$register_no = !empty($registration_idx) ? "KSSO2024-00" . $registration_idx : "-";
}else if($registration_idx >= 100 && $registration_idx < 1000){
	$register_no = !empty($registration_idx) ? "KSSO2024-0" . $registration_idx : "-";
}else if($registration_idx >= 1000 ){
	$register_no = !empty($registration_idx) ? "KSSO2024-" . $registration_idx : "-";
}

$name = $data["last_name"] . $data["first_name"] ?? "-";
$nation = $data["nation_en"] ?? "-";
$total_price = ($data["nation_no"] == 25) ?   $data["total_price_kr_text"] . "원" : "USD " . $data["total_price_us_text"];
$payment_method = $data["payment_method_txt"] ?? "-";
$payment_date = $data["payment_date_text"] ?? "-";
?>

<div style="max-width:800px;">
	<!-- 영수증 (PC) 
		1121 수정 - 모바일 버전으로 통합 변경 -->
	<?php
	if (!$is_check_mobile) {
	?>
	<div style="max-width:100%;">
			<div>
				<img src="./img/receipt_header.png" alt="" style="width:100%; max-width:100%;">
				<div style="padding:0 24px; margin-top:30px;">
					<table style="border-collapse:collapse; border-spacing:0; width:100%;">
						<tbody>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-top:3px solid #000066; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									결제일</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-top:3px solid #000066; border-bottom:1px solid #000066;">
									<?= $payment_date ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									등록번호</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:1px solid #000066;">
									<?= $register_no ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									성함</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:1px solid #000066;">
									<?= $name ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									등록비</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:1px solid #000066;">
									<?= $total_price ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:3px solid #000066; text-align:left;">
									결제 방법</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:3px solid #000066;">
									<?= $payment_method ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<img src="./img/receipt_footer.png" alt="" style="width:100%; max-width:100%;">
			</div>
		</div>
	<?php
	} else {
	?>
		<!-- 영수증 (MB) -->
		<div style="max-width:100%;">
			<div>
				<img src="./img/receipt_header.png" alt="" style="width:100%; max-width:100%;">
				<div style="padding:0 24px; margin-top:30px;">
					<table style="border-collapse:collapse; border-spacing:0; width:100%;">
						<tbody>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-top:3px solid #000066; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									결제일</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-top:3px solid #000066; border-bottom:1px solid #000066;">
									<?= $payment_date ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									등록번호</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:1px solid #000066;">
									<?= $register_no ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									성함</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:1px solid #000066;">
									<?= $name ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:1px solid #000066; text-align:left;">
									등록비</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:1px solid #000066;">
									<?= $total_price ?></td>
							</tr>
							<tr>
								<th width="135" style="width:135px; padding:12px; font-size:14px; font-weight:800; color:#000000; background-color:#F6F6F6; border-right:1px solid #000066; border-bottom:3px solid #000066; text-align:left;">
									결제 방법</th>
								<td style="padding:12px; font-size:14px; color:#000000; border-bottom:3px solid #000066;">
									<?= $payment_method ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<img src="./img/receipt_footer.png" alt="" style="width:100%; max-width:100%;">
			</div>
		</div>
	<?php
	}
	?>
</div>
<div class="btn_wrap" style="max-width:800px; text-align:center;">
    <button type="button" class="btn update_btn pop_save_btn" onclick="CreatePDFfromHTML()">저장</button>
    <!-- <a class="btn update_btn pop_save_btn" onclick="CreatePDFfromHTML()">Save</a> -->
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script>
    function CreatePDFfromHTML() {
        const buttonBox = document.querySelector(".btn_wrap");
        const button = document.querySelector(".update_btn");

        buttonBox.removeChild(button)
        let doc = new jsPDF('p', 'pt', 'a4');

        doc.addHTML(document.body, function() {
            doc.save('receipt.pdf');
        });
    }
</script>
</html>