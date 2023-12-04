<?php
/*
		include_once('./main/include/head.php');
		include_once('./main/include/header.php');
		include_once('./main/index_view.php');
		include_once('./main/include/footer.php');
	 */
?>
<?php 
include_once('./main/include/head.php');
?>
<img src="./main/img/underconst.gif" />
<button class="hi" onclick="installPWA()">Install PWA</button>
<script>
	function installPWA() {
console.log("hi")
		if ('serviceWorker' in navigator && 'PushManager' in window) {

			// 'beforeinstallprompt' 이벤트를 기다립니다.
		window.addEventListener('beforeinstallprompt', (event) => {
        // 'beforeinstallprompt' 이벤트를 캐치하면, 버튼을 활성화하고 설치를 유도합니다.
console.log("hello");
        event.preventDefault();
        const installButton = document.querySelector('.hi');
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