<?php
	include_once('./include/head.php');
	include_once('./include/app_header.php');
?>
<?php
    if(empty($_SESSION["USER"])){
        echo "
                <script>
                    if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
                        window.AndroidScript.logout();
                    }
                
                    if (webkit.messageHandlers!=null) {
                        try{
                            window.webkit.messageHandlers.logout.postMessage('');
                        } catch (err){
                            console.log(err);
                        }
                    }
                </script>
        ";
    }
?>

<style>
	html {background: url("./img/2024_app_bg.png") no-repeat center /cover}
	html, body {min-height:100%;}
	.rolling_wrap {display:block; z-index: -999;}
	/* body{
		background-color: rgba(0, 0, 0, 0.1);
	} */
</style>

<!-- HUBDNCLHJ : app loading 페이지 -->
<section class="container app_version main">
	<div class="app_vsl">
		<img src="./img/img_vsl_text.svg" class="text" alt="" >
	</div>
	
	<div class="app_main_inner">
		<ul class="app_index_menu">
			<li>
				<a href="/main/welcome.php">
					<img src="./img/icons/2024_app_menu01.svg" alt="">
					<span>춘계학술대회</span>
				</a>
			</li>
			<li>
				<a href="/main/program_glance.php">
					<img src="./img/icons/2024_app_menu02.svg" alt="">
					<span>프로그램</span>
				</a>
			</li>
			<li>
				<a href="/main/app_abstract.php">
					<img src="./img/icons/2024_app_menu03.svg" alt="">
					<span>초록보기</span>
				</a>
			</li>
			<li>
				<a href="/main/app_invited_speakers.php">
					<img src="./img/icons/2024_app_menu04.svg" alt="">
					<span>연자 소개</span>
				</a>
			</li>
			<li>
				<a>
				<a href="/main/app_happening_now.php">
					<img src="./img/icons/2024_app_menu05.svg" alt="">
					<span>진행세션</span>
				</a>
			</li>
			<li>
				<a>
					<img src="./img/icons/2024_app_menu06.svg" alt="">
					<span>행사장 안내</span>
				</a>
				<!-- <a href="/main/app_floor_plan.php">
					<img src="./img/icons/2024_app_menu06.svg" alt="">
					<span>행사장 안내</span>
				</a> -->
			</li>
			<li>
				<a href="/main/sponsor.php">
					<img src="./img/icons/2024_app_menu07.svg" alt="">
					<span>고객사</span>
				</a>
			</li>
			<li>
				<a href="/main/app_notice.php">
					<img src="./img/icons/2024_app_menu08.svg" alt="">
					<span>공지사항</span>
				</a>
			</li>
			<!-- <li>
				<a href="https://www.kosso.or.kr/">
					<img src="./img/icons/app_menu09.svg" alt="">
					<span>KSSO</span>
				</a>
			</li> -->
			<li>
				<a href="/main/app_site.php">
					<img src="./img/icons/2024_app_menu09.svg" alt="">
					<span>대한비만학회</span>
				</a>
			</li>
		</ul>
	</div>
</section>

<script>
	$(document).ready(function(){
//		var varUA = navigator.userAgent.toLowerCase();
//		if ( varUA.indexOf('android') > -1) {
//			alert("Please update the app.")
//		}
		$(".app_header").addClass("simple");
		$(".app_nav_btn img").attr("src", "/main/img/icons/m_nav.png");
	});
	//webView.evaluateJavaScript("document.documentElement.style.webkitUserSelect='none'")

</script>

<?php
	include_once('./include/app_footer.php');
?>