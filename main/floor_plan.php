<?php include_once('./include/head.php'); 

$session_user = $_SESSION['USER'] ?? NULL;
$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');
//$session_app_type = 'Y';

//230714 HUBDNC 앱 로그인 시 파라미터 추가 된 부분
if (!empty($session_user) && $session_app_type == 'Y') {
    include_once('./include/app_header.php');
} else {
    include_once('./include/header.php');
}

$language = isset($_SESSION["language"]) ? $_SESSION["language"] : "en";
$locale = locale($language);
$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? 'app_version' : '';
?>
<!-- HUBDNCAJY : App 일 경우 padding/margin을 조정하는 app_version 클래스가 container에 들어가야 함 -->
<!-- <section class="container sponsor"> -->
<section class="container sponsor <?= $add_section_class; ?>">
	<!-- HUBDNCAJY : App 일 경우 타이틀 영역 입니다. -->
	<!-- <div class="app_title_box">
	 	<h2 class="app_title">Floor Plan</h2>
	</div> -->
    <?php
	if(!empty($session_user) && $session_app_type == 'Y') {
?>
		<div class="app_title_box">
			<h2 class="app_title">춘계학술대회<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev.svg" alt="이전페이지로 이동"></button></h2>
			<!-- [240215] sujeong / APP 메뉴 수정으로 삭제 -->
			<ul class="app_menu_tab">
                <li><a href="./venue.php">오시는 길</a></li>
                <li class="on"><a href="./floor_plan.php">층별 안내</a></li>
                <li><a>부스 배치도</a></li>
            </ul>
		</div>
<?php
	} 
?>
	<h1 class="page_title">층별 안내</h1>
    <div class="inner type2">
		<!--
        <div class="sub_banner">
            <h1>Floor Plan</h1>
        </div> -->
        <div class="section section1">
            <div class="img_wrap">
                <img class="floor_map" src="./img/2024_floor_plan_v5.jpg"/>            
            </div>
        </div>
    </div>
</section>
<?php 
    if (!empty($session_app_type) && $session_app_type == 'Y') {
        // mo일때
        include_once('./include/app_footer.php'); 
    }else {
        include_once('./include/footer.php');
    }
?>