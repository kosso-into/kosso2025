<?php
	include_once('./include/head.php');
?>
<?php
    if(($_SESSION["USER"])!=[]){
        echo "<script>location.href='/main/app_index.php'</script>";
    }
?>

<style>
	html, body {overflow:hidden; background: #000f32 url("../img/app_login_bg2.jpg") no-repeat center bottom /cover;}
</style>

<!-- HUBDNCLHJ : app login 페이지 -->
<section class="container app_main app_login app_version">
	<div class="app_main_inner">
		<div class="app_main_box">
			<div class="app_main_txt">
				<img src="./img/app_main_txt.svg" alt="">
				<p>Sep. 7(Thu) ~ Sep. 9(Sat)</p>
				<p>CONRAD Seoul Hotel, Korea</p>
			</div>
			<div class="app_login_box">
				<p>* Please log in using the same ID you used to register on the ICOMES 2023 website.</p>
				<ul>
					<li>
						<input type="text" name="email" placeholder="ID(email)">
					</li>
					<li>
						<input type="password" name="password" placeholder="Password">
					</li>
				</ul>
				<a href="./find_password.php" class="app_find_password">Find password</a>
				<button type="button" class="btn app_login_btn">Log in</button>
			</div>
		</div>
	</div>
</section>

<script>
    $(document).ready(function(){
        $('input').on('keyup', function(e){
            if(e.keyCode == '13'){
                login();
            }
        });
        $(".app_login_btn").on("click", function(){
            login();
        });
    });

    // login
    function login(){
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();

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
                password : password
            },
            dataType : "JSON",
            success : function(res){
                if(res.code == 200) {
                    var href_path = "/main/app_index.php";

                    var from = "<?=$_GET['from']?>";
                    if (from != "") {
                        href_path += "/"+from
                    }

                    var toDate = new Date();
                    toDate.setHours(toDate.getHours() + ((23-toDate.getHours()) + 9));
                    toDate.setMinutes(toDate.getMinutes() + (60-toDate.getMinutes()));
                    toDate.setSeconds(0);
                    document.cookie = "member_idx=" + res.idx + "; path=/; expires=" + toDate.toGMTString() + ";";

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
</script>