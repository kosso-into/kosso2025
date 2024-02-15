<?php
	include_once('./include/head.php');

	$session_user = $_SESSION['USER'] ?? NULL;
	$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');
	//$session_app_type = 'Y';
	//230714 HUBDNC 앱 로그인 시 파라미터 추가 된 부분
	if(!empty($session_user) && $session_app_type == 'Y') {
		include_once('./include/app_header.php');
	} else {
		include_once('./include/header.php');
	}

	//$language
	$sql_info = "SELECT
						overview_welcome_msg_" . $language . " AS welcome_msg,
						CONCAT(fi_sign.path, '/', fi_sign.save_name) AS fi_sign_url
					FROM info_general as ig
					left join `file` as fi_sign
						on fi_sign.idx = ig.overview_welcome_sign_" . $language . "_img";
	$info = sql_fetch($sql_info);

	$add_section_class = (!empty($session_user) && $session_app_type == 'Y') ? 'app_version' : '';
?>

<!-- app일때 section에 app_version 클래스 추가 -->
<section class="container welcome <?= $add_section_class; ?>">
	<!-- HUBDNCLHJ : app 메뉴 탭 주석 해제 -->
<?php
	if(!empty($session_user) && $session_app_type == 'Y') {
?>
		<div class="app_title_box">
			<h2 class="app_title">춘계학술대회<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev.svg" alt="이전페이지로 이동"></button></h2>
			<!-- [240215] sujeong / APP 메뉴 수정으로 삭제 -->
			<!-- <ul class="app_menu_tab">
				<li class="on"><a href="./welcome.php">초대의 글</a></li>
				 <li><a href="./organizing_committee.php">Organization</a></li>
				<li><a href="./app_overview.php">Overview</a></li> -
				<li><a href="./venue.php">오시는 길</a></li>
			</ul> -->
		</div>
<?php
	} 
?>
<!-- 		<div class="contents_wrap"> -->
<!-- 			<h1 class="page_title">Welcome Message</h1> -->
<!-- 			<div class="inner"> -->
<!-- 				<img class="coming" src="./img/coming.png"> -->
<!-- 			</div> -->
<!-- 		</div> -->
    <div>
		<h1 class="page_title">초대의 글</h1>
        <div class="inner">
			<img class="welcome_header" alt="header" src="./img/welcome_header.png"/>
            <div class="welcome_text_box">
				<h3 class="welcome_title">초대의 글</h3>
				<h6 class="welcome_sub_title">갑진년 푸른용의 해를 맞이하여 건강하고 행복하시길 기원합니다.</h6>
				<p class="welcome_txt">
				비만학회에서 2023년 말에 발간한 Obesity Fact Sheet를 살펴보면 최근 10년간 성인의 비만 유병률은 지속적으로 증가하여 2021년 비만 유병률이 38.4%였고 남성은 49.2%로 높았습니다. 특히 3단계 비만 유병률이 가장 크게 증가하였고, 3단계 비만의 경우에는 20대와 30대 청년층에서 가장 높았고, 남자에서 증가폭이 더 컸습니다. 최근 10년간 소아청소년 비만 유병률도 같은 양상을 보이고 있었습니다. 현재 우리나라의 현 상황을 보면 전 세대에 걸쳐서 꾸준히 비만은 늘고 있으며 초고도비만이라 불리는 3단계 비만이 가장 가파른 상승을 보이고 있다고 요약할 수 있겠습니다. 아울러 위고비, 젭바운드 등 치료에 게임체인져로 등장할 신약도 곧 출시를 앞두고 있습니다. 이런 관점에서 전문가들의 인식의 변화와 사회적 책임 그리고 리더십이 더 중요한 시기가 아닌가 생각됩니다. 
				<br><br>
				이번 춘계학술대회에서는 다양한 분야의 전문가들이 참여하여 의견을 나누는 축제의 장을 준비하였으며 최고의 강사들을 모시고 비만학 전반의 최신 지견을 심도 있게 다룰 예정입니다. ‘The Dawn of a New Era in Obesity Management’ 주제로 새롭게 등장하는 강력한 치료제를 포함하여 새로운 디지털 헬스케어, 그리고 그 근간이 되는 식사 운동 행동요법과 기초의학분야까지 중요한 최신 이슈 및 지견이 포함될 예정입니다. Plenary lecture와 Keynote lecture는 오랜 기간 임상적 경험을 쌓아 오신 이관우, 김경곤 교수께서 비만과 인슐린 저항성, 세로토닌과 대사에 대해 강의를 그리고 임상영양분야의 가장 경험이 많으신 김은미 전 부회장께서 비만치료의 가장 장애물인 성공적인 영양 치료에 대한 강의를 해주실 예정입니다. 빨리 변해가는 비만 분야의 최신 지견을 이번 춘계학술대회에서 업데이트하시고 같이 나눌 수 있는 소통의 장이 되시길 바랍니다.
                <br><br>
				반가운 꽃망울이 봄의 시작을 알리고 우리를 설레게 하듯이 이번 학술대회에서도 많은 반가운 얼굴들을 만나고 학문적 교류의 기회를 가지시길 바랍니다.        
				</p>
			</div>
			<div class="welcome_img_wrap">
					<img src="./img/2024_headman_img.png"/>
			</div>
			<!-- <div class="welcome_img_wrap">
				<div><img src="./img/2024_headman_img_01.png" alt=""></div>
				<div><img src="./img/2024_headman_img_02.png" alt=""></div>
			</div> -->
        </div>
    </div>
	<img class="welcome_footer" alt="footer" src="./img/welcome_footer.svg"/>
</section>

<?php 
    if (!empty($session_app_type) && $session_app_type == 'Y') {
        // mo일때
        include_once('./include/app_footer.php'); 
    }else {
        include_once('./include/footer.php');
    }
?>