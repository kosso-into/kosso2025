<?php
	include_once('./include/head.php');

	$session_user = $_SESSION['USER'] ?? NULL;
	$session_app_type = (!empty($_SESSION['APP']) ? 'Y' : 'N');

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
			<h2 class="app_title">KSSO 2024<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
			<ul class="app_menu_tab">
				<li class="on"><a href="./welcome.php">모시는 글</a></li>
				<!-- <li><a href="./organizing_committee.php">Organization</a></li> -->
				<!-- <li><a href="./app_overview.php">Overview</a></li> -->
				<!-- <li><a href="./venue.php">Venue</a></li> -->
			</ul>
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
		<h1 class="page_title">모시는 글</h1>
        <div class="inner">
            <div>
				<h3 class="title icon_none">회원 여러분 안녕하십니까?</h3>
				<p class="welcome_txt">

                지금은 코로나19를 포함한 감염질환과 비만을 비롯한 만성질환의 위험도가 동시에 증가하는 유례없는 시대입니다.<br><br>

                질병관리청의 국민 건강영양조사 결과를 기반으로 한 비만 심층 보고서에 따르면 19세 이상 성인 남성은 전 연령에서 2008년 이후 매년 비만 유병률이 약 2%씩, 2단계 이상의 비만 유병률은 약 6%씩 증가하는 것으로 나타났습니다. 이처럼 코로나19의 긴 터널을 지나오면서 비만은 우리의 일상에 심각한 문제로 대두되고 있습니다.<br><br>

                대한비만학회는 지난해 30주년을 맞이하여 「사회적 책임을 다하는 비만 연구」와 「치료의 세계적 리더」라는 비전을 제시하였습니다. 이를 위해 우리 학회는 향후 다양한 분야의 전문가들이 참여하여 의견을 나누는 축제의 장을 만들고자 합니다.<br><br>

                이번 춘계 학술대회에서는 최고의 강사들을 모시고 비만학 전반의 최신 지견을 심도 있게 다룰 예정입니다.<br><br>
                
                본 프로그램에는 비만의 신경 내분비 대가이신 김민선 교수님의 Plenary Lecture를 중심으로 소아청소년 및 운동 비만연구 분야에서 오랜 기간 연구해오신 정소정, 신윤아 교수님의 Keynote Lecture가 준비되어 있습니다. 또한 역학 및 기초연구 분야뿐만 아니라 약물, 식사, 운동, 행동 치료의 최신 내용들도 망라하였습니다.<br><br>

                반가운 꽃망울이 봄의 시작을 알리고 우리를 설레게 하듯이 이번 학술대회에서도 많은 회원들이 참석하여 반가운 얼굴들을 만나고 학문적 교류의 기회를 가지시길 바랍니다.
				</p>
			</div>
            <div class="head_profile">
				<div class="headman">
					<div class="headman_l"><img src="./img/headman_img1.png" alt=""></div>
					<div class="headman_r">
						<!-- <h5>Name</h5> -->
						<h1>김 성 수</h1>
						<p>대한비만학회 회장</p>
						<div class="headman_sign"><img src="./img/headman_sign1.png" alt=""></div>
					</div>
				</div>
				<div class="headman">
					<div class="headman_l"><img src="./img/headman_img2.png" alt=""></div>
					<div class="headman_r">
						<!-- <h5>Name</h5> -->
						<h1>박 철 영</h1>
						<p>대한비만학회 이사장</p>
						<div class="headman_sign"><img src="./img/headman_sign2_1.png" alt=""></div>
					</div>
				</div>
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