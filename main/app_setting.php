<?php include_once('./include/head.php');?>
<?php include_once('./include/app_header.php');?>
<script src="./js/script/client/app_setting.js"></script>

<!-- HUBDNCLHJ : app setting 페이지 -->
<section class="container app_setting app_version">
	<div class="app_title_box">
		<h2 class="app_title">
			설정
			<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';">
				<img src="/main/img/icons/icon_arrow_prev.svg" alt="이전페이지로 이동">
			</button>
		</h2>
		<p class="app_setting_desc">제59차 대한비만학회 춘계학술대회 이벤트 정보와 실시간 정보를 모바일 앱 푸시로 받을 수 있습니다.</p>
	</div>
	<div class="container_inner">
		<div class="contents_box">
			<div class="app_push_area">
				<p>푸쉬알림</p>
				<div class="app_push_wrapper">
					<input type="checkbox" id="app_push_switch">
					<label for="app_push_switch" class="app_push_switch_label">
						<span class="app_push_btn"></span>
					</label>
				</div>
			</div>
			<p class="app_setting_desc">iOS 사용자의 경우, 아이폰 > 설정 > 알림 > KSSO 2024 에서 알림 권한을 'ON'으로 변경할 수 있습니다.</p>
		</div>
	</div>
	<button class="btn app_logout_btn">로그아웃</button>
</section>
<script>
    $(".app_logout_btn").on("click", function() {
        $.ajax({
            url: "./ajax/client/ajax_member.php",
            type: "POST",
            data: {
                flag: "app_logout"
            },
            dataType: "JSON",
            success: function() {
                if (typeof(window.AndroidScript) != 'undefined' && window.AndroidScript != null) {
                    window.AndroidScript.logout();
                    window.location.href = '/main/app_login.php';
                }

                if (webkit.messageHandlers!=null) {
                    try{
                        window.webkit.messageHandlers.logout.postMessage('');
                        window.location.href = '/main/app_login.php';
                    } catch (err){
                        console.log(err);
                    }
                }
            },
            error: function() {
                alert("일시적으로 로그아웃 요청이 거절되었습니다.");
            }
        });
    });
</script>

<?php include_once('./include/app_footer.php');?>