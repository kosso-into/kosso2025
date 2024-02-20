<!-- [240220] sujeong / 세로버전 참석확인증 -->
<?php include_once("./common/common.php");?>
<?php
$first_name=$_SESSION["USER"]["first_name"];
$last_name=$_SESSION["USER"]["last_name"];
$affiliation=$_SESSION["USER"]["affiliation"];
$nation_no=$_SESSION["USER"]["nation_no"];

$sql="
        SELECT idx, nation_en
        FROM nation
        WHERE idx={$nation_no}
    ";
$nation_en=sql_fetch($sql)["nation_en"];
?>
<html>

<style>
    @page {
        size: A4 portrait;
        margin: 0;
    }
    @media print {
        html, body {width: 792px; height: 1121px;}
    }
	@media print {
		.no_print { display:none }
	}
    @font-face {
        font-family: 'ChosunKm';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-04@1.0/ChosunKm.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }
</style>
<body style="width:792px; height:1121px; margin:0; padding:0; border:0;">
<div style="width:100%; height:100%; box-sizing:border-box; padding:71px 50px 66px; margin:0; position:relative;" id="pdfDiv">
    <img src="./img/2024_certificate_of_attendance.png" alt="" style="width:100%; height:100%; position:absolute; left:0; top:0; z-index:-1;">

    <div style="text-align:center; margin:290px 0 47px;">
        <p style="font-family: 'ChosunKm', sans-serif; font-size:66px; line-height:64px; letter-spacing: 30px; color:#000000; margin: 0 0 0 30px;"><!--성명--><?=$last_name?><?=$first_name?></p>
        <p style="font-family: 'ChosunKm', sans-serif; font-size:35px; line-height:37px; letter-spacing:0; color:#000000; margin:12px 0 40px;"><!--소속--><?=$affiliation?></p>
    </div>
</div>
<div class="no_print btn_wrap" style="width:700px; text-align:center; margin-top:20px;">
	<button id="savePdf" type="button" style="margin:0; vertical-align:middle; cursor:pointer; background:transparent; min-width:150px; height:62px; font-size:20px; font-weight:600; padding:0 30px; border:1px solid #585859; color:#000000;">Save</button>
</div>
</body>
</html>
<script src="/main/js/jquery-3.6.0.min.js"></script>
<!--<script src="./plugin/jspdf/html2canvas.js"></script>-->
<!--<script src="./plugin/jspdf/jspdf.min.js"></script>-->
<script>
    $(document).ready(function() {
        $('#savePdf').click(function() { // pdf저장 button id
            window.print();
            // html2canvas($('#pdfDiv')[0]).then(function(canvas) { //저장 영역 div id
            //
            //     // 캔버스를 이미지로 변환
            //     var imgData = canvas.toDataURL('image/png');
            //     var imgWidth = 195*1.414; // 이미지 가로 길이(mm) A4 기준
            //     var imgHeight = 195;
            //     var margin = 10; // 출력 페이지 여백설정
            //     // var doc = new jsPDF('p', 'mm');
            //     const doc = new jsPDF({
            //         format: "a4",
            //         orientation: "landscape"
            //     });
            //     var position = 0;
            //
            //     // 첫 페이지 출력
            //     doc.addImage(imgData, 'PNG', margin, position, imgWidth, imgHeight);
            //
            //     // 파일 저장
            //     doc.save('file-name.pdf');
            // });
        });
    })
</script>

