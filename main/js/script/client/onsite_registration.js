$(document).ready(function(){
    $(".review_sub_list").addClass("hidden");

    
    //[240109] sujeong 평점신청시에만 면허번호 칸 보이도록
    //평점신청
    $('input[name=review]').on("change", function() {
        if ($('input[name=review]:checked').val() == '1') {
            $(".review_sub_list").removeClass("hidden");
        } else {
            // init
            $(".review_sub_list input[type=text]").val("");
            $(".review_sub_list input[type=checkbox]").prop("checked", false);

            if (!$(".review_sub_list").hasClass("hidden")) {
                $(".review_sub_list").addClass("hidden");
            }
        }
    });

    //이메일 중복 검증
    $("input[name=email]").on("change", function(){
        var email = $(this).val();
        var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

        if(email.match(regExp) != null) {
            $.ajax({
                url : PATH+"ajax/client/ajax_member.php",
                type : "POST",
                data :  {
                    flag : "id_check",
                    email : email
                },
                dataType : "JSON",
                success : function(res){
                    if(res.code == 200) {
                    } else if(res.code == 400) {
                        alert(locale(language.value)("used_email_msg"));
                        $("input[name=email]").val("").focus();
                        return;
                    } else {
                        alert(locale(language.value)("reject_msg"))
                        return;
                    }
                }
            });
        } else {
            alert(locale(language.value)("format_email"));
            $(this).val("").focus();
            return;
        }
    });

    //비밀번호 띄어쓰기 막기
    $(".passwords").on("keyup", function(){
        $(this).val($(this).val().replace(/[\s]/g,""));
    });

    //이름 유효성
    $("input[name=first_name], input[name=mo_first_name]").on("change keyup", function(key){
        const regexp = /[ \[\]{}()<>?|`~!@#$%^&*_+=,.;:\"'\\]/g;
        var _this = $(this);
        if(key.keyCode != 8) {
            var first_name = _this.val().replace(regexp, '');
            _this.val(first_name);
        }
    });

    //소속 유효성
    $("input[name=affiliation], input[name=mo_affiliation]").on("change keyup", function(key){
        var regexp = /[\[\]{}<>|;`\"'\\]/g;
        var _this = $(this);
        if(key.keyCode != 8) {
            var first_name = _this.val().replace(regexp, '');
            _this.val(first_name);
        }
    });

    $("input[name=department], input[name=mo_department]").on("change keyup", function(key){
        var regexp = /[\[\]{}<>|;`\"'\\]/g;
        var _this = $(this);
        if(key.keyCode != 8) {
            var first_name = _this.val().replace(regexp, '');
            _this.val(first_name);
        }
    });

    //자격번호 숫자만
    $("input[name=licence_number]").on("keyup", function(){
        $(this).val($(this).val().replace(/[^0-9]/g,""));
    });

    //국가 선택 시 국가번호 append
    $("select[name=nation_no]").on("change", function(){
        var nation = $(this).find("option:selected").val();
        var nation_tel_length = $("select[name=nation_tel] option").length;
        $.ajax({
            url : PATH+"ajax/ajax_nation.php",
            type : "POST",
            data : {
                flag : "nation_tel",
                nation : nation
            },
            dataType : "JSON",
            success : function(res) {
                if(res.code == 200) {
                    if(nation_tel_length => 2) {
                        $("select[name=nation_tel] option").not(":eq(0)").detach();
                        $("select[name=nation_tel]").append("<option selected>"+res.tel+"</option>");
                    } else {
                        $("select[name=nation_tel]").append("<option selected>"+res.tel+"</option>");
                    }
                }
            }
        });
    });

});

//핸드폰 유효성
$(document).on('change keyup', "input[name=phone]",function(key){
    var _this = $(this);
    if(key.keyCode != 8) {
        var phone = _this.val().replace(/[^0-9||-]/gi,'');
        _this.val(phone);
    }
});

// 생일 입력 정규표현식 유효성검사
function birthChk(input) {

    var value = input.value.replace(/[^0-9]/g, "").substr(0,8); // 입력된 값을 숫자만 남기고 모두 제거
    if (value.length === 8) {
        var regex = /^(\d{4})(\d{2})(\d{2})$/;
        var formattedValue = value.replace(regex, "$1-$2-$3");
        input.value = formattedValue;
    }else{
        input.value = value;
    }

}


// 요금계산(프로모션 적용X)
function calc_fee(){
    // if(obj.name == "participation_type"){
    //     var participation_type = obj.value;
    //     var category = document.getElementById("category").value;
    //     if(category == ""){
    //         return;
    //     }
    // }else if (obj.name == "category"){
    //     var category = obj.value;
    //     var participation_type = document.getElementById("participation_type").value;
    //     if(participation_type == ""){
    //         return;
    //     }
    // }

    var category = document.getElementById("category").value;
    var participation_type = document.getElementById("participation_type").value;
    console.log("category", category)
    console.log("participation",participation_type)

    if(category == ""){
        return;
    }
    if(participation_type==""){
        return;
    }

    var country =  25;

    if(participation_type == 4){
        // if(participation_type == "Sponsor"){
        //     category="Others";
        // }

        var ksso_member_type = $("input[name=ksso_member_type]").val();
        var ksso_member_status = 0;

        if(ksso_member_type == "평생회원"){
            ksso_member_status = 2;
        }else if(ksso_member_type == "정회원"){
            ksso_member_status = 1;
        }else {
            ksso_member_status = 0; //비회원
        }

        $.ajax({
            url : PATH+"ajax/client/ajax_onsite_registration.php",
            type : "POST",
            data : {
                flag : "calc_fee",
                category : category,
                country : country,
                ksso_member_status : ksso_member_status
            },
            dataType : "JSON",
            success : function(res){
                if(res.code == 200) {
                    $("input[name=reg_fee]").val(comma(res.data)).change();
                } else if(res.code == 400){
                    alert(locale(language.value)("error_registration"));
                    return false;
                } else if(res.code == 401){
                    alert(locale(language.value)("already_registration"));
                    window.location.replace(PATH+"mypage_registration.php");
                    return false;
                }
            }
        });
    }else{
        $("input[name=reg_fee]").val(0).change();
        return;
    }
}

function remove_value() {
    $("input[name=affiliation_kor]").val("");
    $("input[name=name_kor]").val("");
    $("input[name=licence_number]").val("");
    $("input[name=specialty_number]").val("");
    $("input[name=nutritionist_number]").val("");
}

function submit(){
    if(requiredCheck()!=false){
        if(confirm("기입하신 정보로 현장등록을 하시겠습니까?")){
            onsite_submit();
        } else {
            return;
        }
    }
}
function onsite_submit(){
    var nation_no = 25;
    var email = $("input[name=email]").val();
    var password = $("input[name=password]").val();
    var first_name = $("input[name=first_name]").val().slice(1);
    var last_name = $("input[name=first_name]").val().slice(0, 1);
    var affiliation = $("input[name=affiliation]").val();
    var department = $("input[name=department]").val();
    var nation_tel = 82;
    var phone = $("input[name=telephone]").val() +  $("input[name=telephone1]").val() +  $("input[name=telephone2]").val();
    
    var participation_type = $('#participation_type > option:selected').val();
    var occupation = $('#occupation > option:selected').val();
    var occupation_other_type = $("input[name=occupation_input]").val();
    var member_type = $('#category > option:selected').val();
    var member_other_type = $("input[name=title_input]").val();
    var is_score = $('input[name=review]:checked').val();
    var licence_number = $("input[name=licence_number]").val();
    var nutritionist_number = $("input[name=nutritionist_number]").val();
    var dietitian_number = $("input[name=dietitian_number]").val();
    var specialty_number = $("input[name=specialty_number]").val();
    var date_of_birth = $("input[name=date_of_birth]").val();

    var welcome_reception_yn = $("input:checkbox[id='others2']:checked").val()
    var day2_breakfast_yn = $("input:checkbox[id='others1']:checked").val()
    var day2_luncheon_yn = $("input:checkbox[id='others3']:checked").val()
    var day3_breakfast_yn = $("input:checkbox[id='others4']:checked").val()
    var day3_luncheon_yn = 'N'

    const conference_info_arr=[];
    var info = $("input[name='list']:checked");
    $(info).each(function (){
        conference_info_arr.push($(this).val());
    });

    var price = $("input[name=reg_fee]").val();
    var etc4 = $('input[name=review3]:checked').val();
    // ksso api 연동 id
    var ksso_member_check = $("input[name=ksso_member_check]").val();
    // ksso 회원 유형
    var ksso_member_type = $("input[name=ksso_member_type]").val();
    var ksso_member_status = 0;

    if(ksso_member_type == "평생회원"){
        ksso_member_status = 2;
    }else if(ksso_member_type == "정회원"){
        ksso_member_status = 1;
    }else {
        ksso_member_status = 0; //비회원
    }

    var data = {
        nation_no : nation_no,
        ksso_member_check : ksso_member_check,
        ksso_member_status : ksso_member_status,
        email : email,
        password : password,
        first_name : first_name,
        last_name : last_name,
        affiliation : affiliation,
        department : department,
        phone : phone,
        date_of_birth : date_of_birth,
        participation_type : participation_type,
        occupation : occupation,
        occupation_other_type : occupation_other_type,
        member_type : member_type,
        member_other_type : member_other_type,
        is_score : is_score,
        etc4:etc4,
        licence_number : licence_number,
        nutritionist_number : nutritionist_number,
        specialty_number : specialty_number,
        dietitian_number : dietitian_number,
        welcome_reception_yn : welcome_reception_yn,
        day2_breakfast_yn : day2_breakfast_yn,
        day2_luncheon_yn : day2_luncheon_yn,
        day3_breakfast_yn : day3_breakfast_yn,
        day3_luncheon_yn : day3_luncheon_yn,
        conference_info_arr : conference_info_arr,
        price : price
    };

    $.ajax({
        url : PATH+"ajax/client/ajax_onsite_registration.php",
        type : "POST",
        data : {
            flag : "onsite",
            data : data
        },
        dataType : "JSON",
        success : function(res){
            if(res.code == 200) {
                console.log(res);
                alert("현장등록이 완료되었습니다.\n" +
                    "등록데스크에 방문하여 등록비를 결제해주세요.");
                window.location.replace(PATH+"onsite_registration.php");
            } else {
                alert("현장등록에 실패하셨습니다.");
                return;
            }
        }
    });
}


function requiredCheck(){
    // Terms
    if(!$('#terms1').is(':checked')) {
        alert("개인정보 수집 및 이용에 동의해주세요.");
        $("html, body").animate({scrollTop: 0}, 400);
        $("#terms").addClass("red_txt");
        return false;
    // Email
    } else if(!$("input[name=email]").val()) {
        alert("이메일을 확인해주세요.");
        $("input[name=email]").focus()
        return false;
    // Password
    } else if(!$("input[name=password]").val()) {
        alert("비밀번호를 확인해주세요.");
        $("input[name=password]").focus()
        return false;
    // Password match
    } else if($("input[name=password]").val()!=$("input[name=password2]").val()) {
        alert("비밀번호를 확인해주세요.\n" +
            "비밀번호가 서로 일치하지 않습니다.");
        $("input[name=password2]").focus()
        return false;

    // Fisrt name
    } else if(!$("input[name=first_name]").val()) {
        alert("성명을 확인해주세요.");
        $("input[name=first_name]").focus()
        return false; 
    // Affiliation
    } else if(!$("input[name=affiliation]").val()) {
        alert("소속을 확인해주세요.");
        $("input[name=affiliation]").focus()
        return false;
    // Department
    } else if(!$("input[name=department]").val()) {
        alert("부서를 확인해주세요.");
        $("input[name=department]").focus()
        return false;
    // Phone
    } else if(!$("input[name=telephone]").val() || !$("input[name=telephone1]").val() ||!$("input[name=telephone2]").val()) {
        alert("휴대폰 번호를 확인해주세요");
        $("input[name=telephone]").focus()
        return false;
    // Paticipation type
    } else if(!$('#participation_type > option:selected').val()) {
        alert("참가 유형을 확인해주세요.");
        $("#participation_type").focus()
        return false;
    // Occupation type
    } else if(!$('#occupation > option:selected').val()) {
        alert("분야 구분을 확인해주세요.");
        $("#occupation").focus()
        return false;
    // Category
    } else if(!$('#category > option:selected').val()) {
        alert("참석 구분을 확인해주세요.");
        $("#category").focus()
        return false;
    // Others
    } else if(others_check()==false){
        $("input[name=others]").focus()
        return false;

    // Information
    } else if(info_check()==false){
        $("input[name=list]").focus()
        return false;
    }else if($('input[name=review]:checked').val() == 1){
        if(!$("input[name=licence_number]").val() && !$("input[name=specialty_number]").val() && !$("input[name=nutritionist_number]").val() && !$("input[name=dietitian_number]").val()){
            alert("면허번호를 입력해주세요.");
            $("input[name=licence_number]").focus()
            return false;
        }else if($("input[name=nutritionist_number]").val() || $("input[name=dietitian_number]").val()){
            // Date of birth
            if(!$("input[name=date_of_birth]").val()) {
                alert("생년월일을 입력해주세요.");
                return false;
            }
        }
    }
    
}

// Others 리스트 체크
function others_check(){
    var list_others = document.querySelectorAll('input[name="others"]:checked').length;
    if(list_others==0){
        alert("기타를 확인해주세요.");
        return false;
    }
}


// information 리스트 체크
function info_check(){
    var list_info = document.querySelectorAll('input[name="list"]:checked').length;
    if(list_info==0){
        alert("유입 경로를 확인해주세요.");
        return false;
    }
}

//이메일 중복 체크 한국으로 체크시
function email_check(email) {
    $.ajax({
        url : PATH+"ajax/client/ajax_member.php",
        type : "POST",
        data :  {
            flag : "id_check",
            email : email
        },
        dataType : "JSON",
        success : function(res){
            if(res.code == 200) {
                //$(".red_alert").eq(0).html("good");
                //$(".red_alert").eq(0).css('display', 'none');
                //$(".mo_red_alert").eq(0).html("good");
                //$(".mo_red_alert").eq(0).css('display', 'none');
            } else if(res.code == 400) {
                alert("used_email_msg");
                $("input[name=email]").val("");
                $("input[name=mo_email]").val("");
                //$(".mo_red_alert").eq(0).html("used_email_msg");
                //$(".mo_red_alert").eq(0).css('display', 'block');
                return false;
            } else {
                //alert("reject_msg");
                //$(".mo_red_alert").eq(0).html("reject_msg");
                //$(".mo_red_alert").eq(0).css('display', 'block');
                return false;
            }
        }
    });
}

function kor_api() {
    var kor_id = $("input[name=kor_id]").val().trim();
    var kor_pw = $("input[name=kor_pw]").val().trim();
    //제 3자 개인정보 수집에 동의 여부
    var privacy = $("#privacy").is(":checked");

    if(!kor_id) {
        alert("ID를 확인해주세요.");
        //$(".red_api").eq(0).html("format_id");
        return;
    }
    if(!kor_pw) {
        alert("비밀번호를 확인해주세요.");
        //$(".red_api").eq(0).html("format_password");
        return;
    }

    if(privacy == false) {
        alert("Please agree to the collection of personal information.");
        $(".red_api").eq(0).html("Please agree to the collection of personal information.");
        return;
    }

    var data = {
        'id' : kor_id,
        'password' : kor_pw
    };

    $.ajax({
        url			: PATH+"/signup_api.php",
        type		: "POST",
        data		: data,
        dataType	: "JSON",
        success		: success,
        fail		: fail,
        error		: error
    });

    function success(res) {
        var kor_sign = JSON.parse(res.value);
        //console.log(kor_sign);
        var user_row = kor_sign.user_row;
        //alert(user_row.user_type); return;

        if(kor_sign.code == "N1") {
            alert("아이디를 입력해주세요.");
        } else if(kor_sign.code == "N2") {
            alert("비밀번호를 입력해주세요.");
        } else if(kor_sign.code == "N3") {
            alert("가입되지 않은 아이디입니다.");
        } else if(kor_sign.code == "N4") {
            alert("잘못된 비밀번호 입니다.");
        } else if(kor_sign.code == "N5") {
            alert("탈퇴된 아이디 입니다.");
        } else if(kor_sign.code == "N7") {
            alert("이미 인증된 계정입니다.");
            $("[name=kor_id]").val("");
            $("[name=kor_pw]").val("");
            $("#privacy").prop("checked", false);
            $("[name=kor_id]").focus();
        } else if(kor_sign.code == "N6") {
            alert("회원님은 대한비만학회 " + user_row.user_type + " 입니다");
            var check_email= email_check(user_row.email);
            if(check_email == false) {
                return;
            }

            $("input[name=ksso_member_type]").val(user_row.user_type);
            $("input[name=ksso_member_check]").val(user_row.id);

            $("input[name=licence_number]").val(kor_sign.license_number);
            $("input[name=affiliation_kor]").val(kor_sign.office_name);

            calc_fee();
        }

    }
    function fail(res) {
        alert("Failed.\nPlease try again later.");
        return false;
    }
    function error(res) {
        alert("An error has occurred. \nPlease try again later.");
        return false;
    }
}
