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
	html {background: url("./img/main_mb.png") no-repeat right /cover}
	html, body {min-height:100%;}
	.rolling_wrap {display:block;}
	body{
		background-color: rgba(0, 0, 0, 0.1);
	}
</style>

<!-- HUBDNCLHJ : app loading 페이지 -->
<section class="container app_version main">
	<div class="app_vsl">
		<img src="./img/img_vsl_text.png" class="text" alt="" >
	</div>
	<button onclick="installPWA()">Install PWA</button>
	<div class="app_main_inner">
		<ul class="app_index_menu">
			<li>
				<a href="/main/welcome.php">
					<img src="./img/icons/app_menu01.svg" alt="">
					<span>KSSO 2024</span>
				</a>
			</li>
			<li>
				<a href="/main/program_glance.php">
					<img src="./img/icons/app_menu02.svg" alt="">
					<span>프로그램</span>
				</a>
			</li>
			<li>
				<a href="/main/app_abstract.php">
					<img src="./img/icons/app_menu03.svg" alt="">
					<span>초록</span>
				</a>
			</li>
			<li>
				<a href="/main/app_invited_speakers.php">
					<img src="./img/icons/app_menu04.svg" alt="">
					<span>INVITED<br/>SPEAKERS</span>
				</a>
			</li>
			<li>
				<a>
				<a href="/main/app_happening_now.php">
					<img src="./img/icons/app_menu05.svg" alt="">
					<span>HAPPENING<br/>NOW</span>
				</a>
			</li>
			<li>
				<a href="/main/app_floor_plan.php">
					<img src="./img/icons/app_menu06.svg" alt="">
					<span>부스 배치도</span>
				</a>
			</li>
			<li>
				<a href="/main/sponsor.php">
					<img src="./img/icons/app_menu07.svg" alt="">
					<span>후원사</span>
				</a>
			</li>
			<li>
				<a href="/main/app_notice.php">
					<img src="./img/icons/app_menu08.svg" alt="">
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
				<a href="https://www.jomes.org/" target="_blank">
					<img src="./img/icons/app_menu09_1.svg" alt="">
					<span>JOMES</span>
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
	function installPWA() {
		if ('serviceWorker' in navigator && 'PushManager' in window) {
			// 'beforeinstallprompt' 이벤트를 기다립니다.
		window.addEventListener('beforeinstallprompt', (event) => {
        // 'beforeinstallprompt' 이벤트를 캐치하면, 버튼을 활성화하고 설치를 유도합니다.
        event.preventDefault();
        const installButton = document.querySelector('button');
        installButton.style.display = 'block';

        installButton.addEventListener('click', () => {
          // 사용자에게 설치를 요청하고, 이벤트를 완료합니다.
          event.prompt();
          event.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
              console.log('User accepted the install prompt');
            } else {
              console.log('User dismissed the install prompt');
            }
          });
        });
      });
    }
  }

</script>

<?php
	include_once('./include/app_footer.php');
?>