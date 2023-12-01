<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<?php
//	print_r2($_SERVER); exit;

// [22.04.25] 미로그인시 처리
if ($_SESSION["USER"]) {
	echo "<script>alert('이미 로그인이 되었습니다.'); location.replace(PATH+'mypage.php');</script>";
	exit;
}
?>
<section class="container login_form form_layout login bg style_2023">
    <!-- 백그라운드 이미지 slick -->
    <!--container -->
    <div>
        <a href="./index.php" class="logo"><img src="./img/app_loading_logo.png"></a>
        <form>
            <ul>
                <li>
                    <input type="text" name="email" placeholder="<?= $locale("id") ?>">
                </li>
                <li>
                    <input type="password" name="password" placeholder="<?= $locale("password") ?>">
                </li>
            </ul>
            <!-- <div class="text_r"> -->
            <!-- 	<a href="./find_password.php"><?= $locale("find_password") ?> ></a> -->
            <!-- </div> -->
            <button type="button" class="btn login_btn main_btn">로그인</button>
            <div class="btn_wrap clearfix2">
                <button type="button" class="btn gray_line_btn"
                    onclick="window.location.href='./find_password.php';">비밀번호 찾기</button>
                <button type="button" class="btn gray_line_btn"
                    onclick="window.location.href='./signup.php';">회원가입</button>
            </div>
        </form>
    </div>
</section>

<script>
$(document).ready(function() {
    $('input').on('keyup', function(e) {
        if (e.keyCode == '13') {
            login();
        }
    });
    $(".login_btn").on("click", function() {
        login();
    });
});

// login
function login() {
    var email = $("input[name=email]").val();
    var password = $("input[name=password]").val();

    if (email == "") {
        alert("ID(email)을 입력해주세요.");
        return false;
    } else if (password == "") {
        alert("비밀번호를 입력해주세요.");
        return false;
    }

    $.ajax({
        url: "./ajax/client/ajax_member.php",
        type: "POST",
        data: {
            flag: "login",
            email: email,
            password: password
        },
        dataType: "JSON",
        success: function(res) {
            if (res.code == 200) {
                var href_path = "/main";

                var from = "<?= $_GET['from'] ?>";
                if (from != "") {
                    href_path += "/" + from
                }

                var toDate = new Date();
                toDate.setHours(toDate.getHours() + ((23 - toDate.getHours()) + 9));
                toDate.setMinutes(toDate.getMinutes() + (60 - toDate.getMinutes()));
                toDate.setSeconds(0);
                document.cookie = "member_idx=" + res.idx + "; path=/; expires=" + toDate.toGMTString() +
                    ";";

                location.href = href_path;
            } else if (res.code == 400) {
                alert("이메일을 확인해주세요.");
                return false;
            } else if (res.code == 401) {
                alert("비밀번호를 확인해주세요.");
                return false;
            } else if (res.code == 402) {
                //alert(locale(language.value)("not_certified_email"));
                alert(
                    "회원 가입 시 설정한 이메일 주소로 계정 확인 이메일이 전송되었습니다. 받은 이메일을 확인하고 계정을 인증해 주세요."
                );
                return false;
            } else {
                alert(locale(language.value)("reject_msg"));
            }
        }
    });
}
</script>
<?php include_once('./include/footer.php'); ?>