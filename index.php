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

<script>
	function installPWA() {
console.log("hi")
		if ('serviceWorker' in navigator && 'PushManager' in window) {

			// 'beforeinstallprompt' �̺�Ʈ�� ��ٸ��ϴ�.
		window.addEventListener('beforeinstallprompt', (event) => {
        // 'beforeinstallprompt' �̺�Ʈ�� ĳġ�ϸ�, ��ư�� Ȱ��ȭ�ϰ� ��ġ�� �����մϴ�.
        event.preventDefault();
        const installButton = document.querySelector('.hi');
        installButton.style.display = 'block';

        installButton.addEventListener('click', () => {
          // ����ڿ��� ��ġ�� ��û�ϰ�, �̺�Ʈ�� �Ϸ��մϴ�.
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