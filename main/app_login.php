<?php
	include_once('./include/head.php');
?>
<?php
    if(($_SESSION["USER"])!=[]){
//        echo "<script>location.href='/main/app_index.php'</script>";
        echo "<script>location.replace('/main/app_index.php')</script>";
    }
?>
<script src="./js/script/client/app_login.js"></script>
<style>
	html, body {overflow:hidden; background: #000f32 url("../img/app_login_bg2.jpg") no-repeat center bottom /cover;}
	.app_main_box {min-height:700px;height: 100vh;}
</style>

<!-- HUBDNCLHJ : app login 페이지 -->
<section class="container app_main app_login app_version">
	<div class="app_main_inner">
		<div class="app_main_box" style="height: auto;">
			<div class="app_main_txt">
				<img src="./img/2024_mb_text.svg" alt="">
				<!-- <p>Sep. 7(Thu) ~ Sep. 9(Sat)</p>
				<p>CONRAD Seoul Hotel, Korea</p> -->
			</div>
			<div class="app_login_box">
				<!-- <p>* Please log in using the same ID you used to register on the ICOMES 2023 website.</p> -->
				<ul>
					<li>
						<input id="email" type="text" name="email" placeholder="ID(email)">
					</li>
					<li>
						<input id="password" type="password" name="password" placeholder="비밀번호">
					</li>
				</ul>
				<a href="./app_find_password.php" class="app_find_password">비밀번호 찾기</a>
				<button type="button" class="btn app_login_btn">로그인</button>
			</div>
		</div>
	</div>
</section>

<script>

$(document).ready(function(){
//	var varUA = navigator.userAgent.toLowerCase();
//	if ( varUA.indexOf('android') > -1) {
//		alert("Please update the app.")
//	}

//[230118] sujeong / android 키보드 이벤트
 // 처음 시작시 화면의 사이즈 값을 가진다.
 var originalSize = jQuery(window).width() + jQuery(window).height();
     
     // 창의 사이즈 변화가 일어났을 경우 실행된다.
     jQuery(window).resize(function() {
        
       // 처음 사이즈와 현재 사이즈가 변경된 경우
       // 키보드가 올라온 경우
       if(jQuery(window).width() + jQuery(window).height() != originalSize) {
        $('.app_main_txt').hide();
       }
      
       // 처음 사이즈와 현재 사이즈가 동일한 경우
       // 키보드가 다시 내려간 경우
       else {
        $('.app_main_txt').show();
       }
     });


    let icomes_device = null;
    let icomes_token = null;

    $('input').on('keyup', function(e){
        if(e.keyCode == '13'){
            login();
        }
    });
    $(".app_login_btn").on("click", function(){
        login();
    });

    if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
        try{
            window.AndroidScript.getDeviceToken(); // AndroidBridge.kt 30 줄에서 호출
        } catch (err){
            alert(err);
        }
    } else if (window.webkit && window.webkit.messageHandlers!=null) {
        try{
            window.webkit.messageHandlers.getDeviceToken.postMessage('');
        } catch (err){
            console.log(err);
        }
    }


    /**
     * ViewController.swift 204 줄에서 호출
     * device -> IOS 로 고정
     * deviceToken -> token 값
     */
    
    /**
     * AndroidBridge.kt 30 줄에서 호출
     * device -> AOS 로 고정
     * deviceToken -> token 값
     */
    
    getDeviceTokenCallback = (device, deviceToken) => {
        icomes_device = device;
        icomes_token = deviceToken;
    }

    function login (){
        let email = $("input[name=email]").val();
        let password = $("input[name=password]").val();

        if(email == "") {
            alert(locale(language.value)("check_email"));
            return false;
        } else if(password == "") {
            alert(locale(language.value)("check_password"));
            return false;
        }

        $.ajax({
            url : "./ajax/client/ajax_member.php",
            type : "POST",
            data : {
                flag : "app_login",
                flag2 : "app",
                email : email,
                password : password,
                icomes_device : icomes_device,
                icomes_token : icomes_token
            },
            dataType : "JSON",
            success : function(res){
                if(res.code == 200) {
                    var href_path = "/main/app_index.php";

                    var from = "<?=$_GET['from']?>";
                    if (from != "") {
                        href_path += "/"+from
                    }
                    
                    //쿠키에 멤버 idx와 만료일자 저장
                    var toDate = new Date();
                    toDate.setHours(toDate.getHours() + ((23-toDate.getHours()) + 9));
                    toDate.setMinutes(toDate.getMinutes() + (60-toDate.getMinutes()));
                    toDate.setSeconds(0);
                    document.cookie = "member_idx=" + res.idx + "; path=/; expires=" + toDate.toGMTString() + ";";

                    if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
                        window.AndroidScript.login(res.idx); //AndroidBridge.kt 35 줄에서 호출 -> local db에 저장
                    } else if (window.webkit && window.webkit.messageHandlers!=null) {
                        try{
                            window.webkit.messageHandlers.login.postMessage(res.idx);
                        } catch (err){
                            console.log(err);
                        }
                    }

                    // loginCallback = (res) => {
                    //     const result = Json.parse(res)
                    // }

                    location.href = href_path;
                } else if(res.code == 400) {
                    alert(locale(language.value)("not_matching_email"));
                    return false;
                } else if(res.code == 401) {
                    alert(locale(language.value)("not_matching_password"));
                    return false;
                } else if(res.code == 402) {
                    //alert(locale(language.value)("not_certified_email"));
                    alert("An account confirmation email has been sent to the email address you set during registration. Please check the email sent and verify your account.");
                    return false;
                } else {
                    alert(locale(language.value)("reject_msg"));
                }
            }
        });
    }

});
</script>