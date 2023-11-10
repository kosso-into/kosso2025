<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<?php
//$nation_query = $_nation_query; 

$nation_query = "SELECT
						*
					FROM nation
					ORDER BY 
					idx = 25 DESC, nation_en ASC";

$nation_list = get_data($nation_query);
?>

<style>
/*ldh 작성*/
.red_alert {
    display: none;
}

.mo_red_alert {
    display: none;
}

.red_alert_option {
    /*display:none;*/
}

.korea_only,
.korea_radio {
    display: revert;
}

.korea_only.on,
.korea_radio.on {
    display: revert;
}

.mo_korea_only,
.korea_radio {
    display: revert;
}

.mo_korea_only.on,
.korea_radio.on {
    display: revert;
}

.ksola_signup {
    display: none;
}

.mo_ksola_signup {
    display: none;
}

.ksola_signup.on {
    display: revert;
}

.mo_ksola_signup.on {
    display: revert;
}

/*태그 오른쪽 정렬*/
.checkbox_wrap {
    padding-top: 30px;
}

.checkbox_wrap ul {
    text-align: right;
}

.checkbox_wrap li {
    display: inline-block;
}

.checkbox_wrap li:last-child {
    margin-left: 20px;
}

.mo_other_radio {
    display: none;
}


/*2022-05-09*/
.select_others {
    margin-bottom: 5px;
}

.input_others {
    display: none;
    width: 100px;
    float: right;

}

/* 2022-05-10 HUBDNC LJH2 수정 */
.pc_only input.tel_number {
    width: 96px;
}

.pc_only input.tel_numbers {
    width: 115px;
    margin-left: 2px;
}

.mb_only input.tel_numbers {
    margin-left: 10px;
}

.mb_only input.tel_number,
.mb_only input.tel_numbers.tel_phone {
    width: 100px;
}

.mb_only input.tel_numbers.tel_phone2 {
    width: calc(100% - 220px);
}

@media screen and (max-width: 480px) {

    .mb_only input.tel_number,
    .mb_only input.tel_numbers.tel_phone,
    .mb_only input.tel_numbers.tel_phone2 {
        width: calc(33% - 5px);
    }
}
</style>
<script>
$(document).ready(function() {
    $("#user1").change(function() {
        if ($("#user1").prop('checked') == true) {
            $(".ksola_signup").addClass("on");
        }
    });
    $("#user2").change(function() {
        if ($("#user2").prop('checked') == true) {
            $(".ksola_signup").removeClass("on");
            $("input[name=ksola_member_type]").val("");
        }
    });


    $(".not_checkbox").click(function() {
        var _this = $(this).is(":checked");
        if (_this == true) {
            $(this).next().next().attr("disabled", true);
            $(this).next().next().val("");
            $(this).next().next().next().html("good");
        } else {
            $(this).next().next().attr("disabled", false);
            $(this).next().next().next().html("");
        }
    });

});

function remove_value() {
    $("input[name=affiliation_kor]").val("");
    $("input[name=name_kor]").val("");

    $(".red_alert").eq(0).html("good");
    $(".red_alert").eq(1).html("good");
    $(".red_alert").eq(2).html("good");
    $(".red_alert").eq(3).html("good");
    $(".red_alert").eq(4).html("good");

    $("input[name=licence_number]").val("");
    $("input[name=specialty_number]").val("");
    $("input[name=nutritionist_number]").val("");

}


$(document).ready(function() {

    $("#mo_user1").change(function() {
        if ($("#mo_user1").prop('checked') == true) {
            $(".mo_ksola_signup").addClass("on");

        }
    });
    $("#mo_user2").change(function() {
        if ($("#mo_user2").prop('checked') == true) {
            $(".mo_ksola_signup").removeClass("on");
            $("input[name=ksola_member_type]").val("");
        }
    });

});

function remove_value() {
    $("input[name=mo_affiliation_kor]").val("");
    $("input[name=mo_name_kor]").val("");

    $(".mo_red_alert").eq(0).html("good");
    $(".mo_red_alert").eq(1).html("good");
    $(".mo_red_alert").eq(2).html("good");
    $(".mo_red_alert").eq(3).html("good");
    $(".mo_red_alert").eq(4).html("good");

    $("input[name=mo_licence_number]").val("");
    $("input[name=mo_specialty_number]").val("");
    $("input[name=mo_nutritionist_number]").val("");

}
</script>

<section class="container form_page sign_up">
    <h1 class="page_title">Sign Up</h1>
    <div class="inner">
        <div class="sub_background_box">
            <div class="sub_inner">
                <div>
                    <!-- 브래드스크럼
				<ul>
					<li>Home</li>
					<li>Sign Up</li>
					<li>Sign Up</li>
				</ul>
				-->
                </div>
                <div class="term_wrap">
                    <h3 class="title">Use of Personal Information</h3>
                    <div class="term_box">
                        <strong>Purpose</strong>
                        <p>The Korean Society for the Study of Obesity (KSSO) provides online pre-registration services
                            for ICOMES 2023. Based on your personal information, you can sign up for the conference and
                            complete the payment for registration.</p>
                        <strong>Collecting Personal Information</strong>
                        <p>ICOMES 2023 requires you to provide your personal information to complete pre-registration
                            online. You will be asked to enter your name, ID (email), password, date of birth,
                            institution/organization, department, mobile, and telephone number.</p>
                        <strong>Storing Personal Information</strong>
                        <p>ICOMES 2023 will continue to store your personal information to provide you with useful
                            services, such as conference updates and newsletters.</p>
                    </div>
                    <div class="term_label">
                        <input type="checkbox" class="checkbox input required" data-name="terms 1" id="terms1"
                            name="terms1" value="Y">
                        <label for="terms1">I agree to the collection and use of my personal information.
                            <!-- <a href="javascript:;" class="term1_btn red_txt"> Details &gt;</a> -->
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="title">제 58차 대한비만학회 춘계학술대회 가입을 환영합니다!<span class="mini_alert"> (<span class="red_txt">*</span>는 필수
                항목입니다.) </span></h3>
        <form class="table_wrap">
            <div class="pc_only">
                <table class="table detail_table">
                    <colgroup>
                        <col class="col_th" />
                        <col width="*" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th class="nowrap"><span class="red_txt">*</span>대한비만학회(KSSO) 회원 여부</th>
                            <td>
                                <div class="label_wrap">
                                    <input type="radio" class="new_radio" name="user" id="user1">
                                    <label for="user1"><i></i>회원</label>
                                    <input checked type="radio" class="new_radio" name="user" id="user2">
                                    <label for="user2"><i></i>비회원</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="ksola_signup">
                            <th style="background-color:transparent"></th>
                            <td>
                                <p>대한비만학회 회원 정보로 간편 가입</p>
                                <ul class="simple_join clearfix">
                                    <li>
                                        <label for="">KSSO ID<span class="red_txt">*</span></label>
                                        <input class="email_id" name="kor_id" type="text" maxlength="60">
                                    </li>
                                    <li>
                                        <label for="">KSSO PW<span class="red_txt">*</span></label>
                                        <input class="passwords" name="kor_pw" type="password" maxlength="60">
                                    </li>
                                    <li>
                                        <button onclick="kor_api()" type="button" class="btn">회원인증</button>
                                    </li>
                                </ul>
                                <div class="clearfix2">
                                    <div>
                                        <input type="checkbox" class="checkbox" id="privacy">
                                        <label for="privacy">
                                            제 3자 개인정보 수집에 동의합니다.
                                            <!-- <a href="javascript:;" class="term2_btn red_txt"> Details ></a> -->
                                        </label>
                                    </div>
                                    <a href="https://www.kosso.or.kr/join/search_id.html" target="_blank"
                                        class="id_pw_find">KSSO 회원
                                        ID/PW 찾기</a>
                                </div>

                                <!-- <div> -->
                                <!-- 	<span class="mini_alert red_txt red_api"></span> -->
                                <!-- </div> -->
                            </td>
                        </tr>
                        <tr>
                            <th><span class="red_txt">*</span>ID(E-Mail)</th>
                            <td>
                                <div class="max_long responsive_float">
                                    <input type="text" name="email" class="required" maxlength="50">
                                    <!-- <span class="mini_alert red_txt red_alert"></span> -->
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th><span class="red_txt">*</span><?= $locale("password") ?></th>
                            <td>
                                <div class="max_long">
                                    <input class="passwords" type="password" name="password" class="required"
                                        placeholder="Password" maxlength="60">
                                    <!-- <span class="mini_alert red_txt red_alert"></span> -->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><span class="red_txt">*</span>Password 확인</th>
                            <td>
                                <div class="max_long">
                                    <input class="passwords" type="password" name="password2" class="required"
                                        placeholder="Re-type Password" maxlength="60">
                                    <!-- <span class="mini_alert red_txt red_alert"></span> -->
                                </div>
                            </td>
                        </tr>
                        <!-- Name -->
                        <tr class="korea_only">
                            <th><span class="red_txt">*</span>성명</th>
                            <td class="name_td clearfix">
                                <div class="max_normal">
                                    <input name="first_name_kor" type="text" placeholder="이름" maxlength="60">
                                </div>
                                <div class="max_normal">
                                    <input name="last_name_kor" type="text" placeholder="성" maxlength="60">
                                </div>
                            </td>
                        </tr>

                        <tr class="korea_only">
                            <th><span class="red_txt">*</span>소속</th>
                            <!-- <th><span class="red_txt">*</span><?= $locale("affiliation") ?>(KOR)</th> -->
                            <td>
                                <div class="max_long">
                                    <input type="text" name="affiliation_kor" maxlength="100">
                                    <!-- <span class="mini_alert red_txt red_alert">good</span> -->
                                </div>
                            </td>
                        </tr>
                        <!-- Department -->
                        <tr class="korea_only">
                            <th><span class="red_txt">*</span>부서</th>
                            <!-- <th><span class="red_txt">*</span><?= $locale("department") ?>(KOR)</th> -->
                            <td>
                                <div class="max_long">
                                    <input type="text" name="department_kor" maxlength="100">
                                    <!-- <span class="mini_alert red_txt red_alert"></span> -->
                                </div>
                            </td>

                        </tr>
                        <!--2022-05-09 추가사항-->
                        <tr>
                            <th><span class="red_txt">*</span>휴대폰 번호</th>
                            <td>
                                <input class="tel_number tel_phone" name="telephone" type="text" maxlength="60">
                                <input class="tel_numbers tel_phone" name="telephone1" type="text" maxlength="60">
                                <input class="tel_numbers tel_phone2" name="telephone2" type="text" maxlength="60">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb_only">
                <ul class="sign_list">
                    <li class="korea_radio mo_korea_radio">
                        <p class="label"><span class="red_txt">*</span>대한비만학회(KSSO) 회원 여부</p>
                        <div class="label_wrap">
                            <input type="radio" class="new_radio" name="mo_user" id="mo_user1">
                            <label for="mo_user1"><i></i>회원</label>
                            <input checked type="radio" class="new_radio" name="mo_user" id="mo_user2">
                            <label for="mo_user2"><i></i>비회원</label>
                        </div>
                    </li>
                    <li class="mo_ksola_signup">
                        <p class="mb10">대한비만학회 회원 정보로 간편 가입</p>
                        <ul class="simple_signup mb10">
                            <li>
                                <label for="" class="bold">KSSO ID<span class="red_txt">*</span></label>
                                <input class="email_id passwords" name="mo_kor_id" type="text" maxlength="60">
                            </li>
                            <li>
                                <label for="" class="bold">KSSO PW<span class="red_txt">*</span></label>
                                <input class="passwords" name="mo_kor_pw" type="password" maxlength="60">
                            </li>
                            <li>
                                <button onclick="mo_kor_api()" type="button" class="btn btn_small">회원인증</button>
                            </li>
                        </ul>
                        <div class="clearfix2">
                            <div>
                                <input type="checkbox" class="checkbox" id="mo_privacy">
                                <label for="mo_privacy">
                                    제 3자 개인정보 수집에 동의합니다.
                                    <!-- <a href="javascript:;" class="red_txt"> Details ></a> -->
                                </label>
                            </div>
                            <a href="https://www.kosso.or.kr/join/search_id.html" target="_blank"
                                class="id_pw_find">KSSO 회원
                                ID/PW 찾기</a>
                        </div>
                        <div>
                            <!-- <span class="mini_alert red_txt mo_red_api"></span> -->
                        </div>
                    </li>

                    <li>
                        <p class="label"><span class="red_txt">*</span><?= $locale("id") ?></p>
                        <div>
                            <input type="text" name="mo_email" class="required" maxlength="50">
                            <!-- <span class="mini_alert red_txt mo_red_alert"></span> -->
                        </div>

                    </li>
                    <li>
                        <p class="label"><span class="red_txt">*</span><?= $locale("password") ?></p>
                        <div>
                            <input class="passwords" type="password" name="mo_password" class="required" maxlength="60">
                            <!-- <span class="mini_alert red_txt mo_red_alert"></span> -->
                        </div>
                    </li>
                    <li>
                        <p class="label"><span class="red_txt">*</span>Password 확인</p>
                        <div>
                            <input class="passwords" type="password" name="mo_password2" class="required"
                                maxlength="60">
                            <!-- <span class="mini_alert red_txt mo_red_alert"></span> -->
                        </div>
                    </li>

                    <li class="mo_korea_only">
                        <p class="label"><span class="red_txt">*</span>성명</p>
                        <div>
                            <ul class="half_ul">
                                <li>
                                    <input name="mo_last_name_kor" type="text" class="kor_check" placeholder="성">
                                </li>
                                <li>
                                    <input name="mo_first_name_kor" type="text" class="kor_check" placeholder="이름">
                                </li>
                            </ul>
                            <span class="mini_alert red_txt mo_red_alert">good</span>
                        </div>
                    </li>

                    <li class="mo_korea_only">
                        <p class="label"><span class="red_txt">*</span>소속</p>
                        <div>
                            <input type="text" name="mo_affiliation_kor" maxlength="100" class="kor_check">
                            <span class="mini_alert red_txt mo_red_alert">good</span>
                        </div>
                    </li>

                    <li class="mo_korea_only">
                        <p class="label"><span class="red_txt">*</span>부서</p>
                        <div>
                            <input type="text" name="mo_department_kor" maxlength="100" class="kor_check">
                            <span class="mini_alert red_txt mo_red_alert">good</span>
                        </div>

                    </li>

                    <li>
                        <p class="label"> <span class="red_txt">*</span>휴대폰 번호</p>
                        <div class="phone_form clearfix">
                            <input class="tel_number tel_phone" name="mo_tel_nation_tel" type="text" maxlength="60">
                            <input class="tel_numbers tel_phone" name="mo_telephone1" type="text" maxlength="60">
                            <input class="tel_numbers tel_phone2" name="mo_telephone2" type="text" maxlength="60">
                        </div>

                    </li>


                </ul>
            </div>

            <input type="hidden" name="ksola_member_check">
            <input type="hidden" name="ksola_member_type">
        </form>
        <div class="pc_only">
            <div class="pager_btn_wrap half">
                <button id="submit" type="button" class="btn green_btn">Submit</button>
                <button type="button" class="btn dark_gray_btn">Cancel</button>
            </div>
        </div>
        <div class="mb_only">
            <div class="pager_btn_wrap half">
                <button id="mo_submit" type="button" class="btn green_btn">Submit</button>
                <button type="button" class="btn dark_gray_btn">Cancel</button>
            </div>
        </div>
    </div>

</section>

<?php include_once('./include/footer.php'); ?>

<div class="loading">
    <img src="./img/icons/loading.gif" />
</div>

<!-- Terms&Conditions POP -->
<div class="popup term1">
    <div class="pop_bg"></div>
    <div class="pop_contents terms">
        <h1 class="text_r"><img src="./img/icons/icon_x.png" alt="" class="pop_close"></h1>
        <p class="pre">
            <!--<?= $locale("terms") ?>-->
            <span class="terms_big_title">Standard Terms and Conditions of E-commerce (Internet Cyber Mall)</span>

            Standard Terms No. 10023 (2015. 6. 26. Revision)

            <span>Article 1 (Purpose)</span>

            These Terms and Conditions provided by the ICoLA 2022 homepage (http://icola.org/) (hereinafter called the
            "Society Homepage") operated by the Korean Society of the Study of Lipid & Atherosclerosis (e-commerce
            business), are to regulate the website of the Society and the rights, duty and responsibility of the users
            for the use of internet-related services (hereinafter called "Services").

            These Terms and Conditions shall also apply to electronic commerce using PC communication, wireless, etc.,
            unless it is against its nature.


            <span>Article 2 (Definition)</span>

            (1) "Homepage" refers to a virtual sales office set up to trade materials using information and
            communication facilities such as computers to provide users with the products or services of the Korean
            Society of the Study of Lipid & Atherosclerosis (hereinafter called "products, etc.") and use them as
            meanings of the business who operates the Society's homepage.

            (2) "User" refers to members and non-members who access the "Society Homepage" and receive the services
            provided by the "Society Homepage" in accordance with these Terms and Conditions.

            (3) "Member" means a person who has registered as a member on the "Society Homepage" and who can continue to
            use the services provided by the "Society Homepage".

            (4) "Non-member" refers to a person who uses the services provided by the "Society Homepage" without
            registering as a member.


            <span>Article 3 (Provisions, Explanations and Revisions of Terms and Conditions, etc.)</span>

            (1) The "Society Homepage" shall post on the initial service page (front) of the society's website so that
            users can easily know including the contents of these Terms and Conditions, the name of the company and
            representative, the address of the business location (including the address where consumer complaints can be
            handled), the telephone number, E-mail address, business registration number, telecommunications sales
            business report number, etc.

            (2) The "Society Homepage" shall seek the user's confirmation to the terms and conditions in order for the
            user to understand important contents such as withdrawal of subscription · refund terms, via a separate
            connection screen or pop-up screen prior to agreeing to the terms and conditions.

            (3) The "Society Homepage" may revise these Terms and Conditions to the extent that it does not violate
            applicable laws such as the Act on Consumer Protection in Electronic Commerce, the Act on the Regulation of
            Terms and Conditions, the Electronics and Electronic Transactions Act, the Electronic Financial Transactions
            Act, the Digital Signature Act, the Act on Promotion of Information and Communications Network Use and
            Information Protection, the Act on Door-to-Door Sales, and the Consumer Standards Act.

            (4) If the "Society Homepage" revises the Terms and Conditions, the Company shall specify the date of
            application and the date of revision and notify on the initial page of the Society's website with the
            current terms and conditions from 7 days before the application date to the day before the application date.
            However, if the terms and conditions are altered against the user, the company shall notify the user with a
            grace period of at least 30 days in advance. In this case, the "Society Homepage" clearly compares the
            contents before and after the revision in order for the user to easily understand.

            (5) If the "Society Homepage" revises the Terms and Conditions, the revised terms and conditions shall apply
            only to contracts concluded after the date of application, and the terms and conditions before the revision
            shall apply to contracts already concluded before that. However, if a user who has already entered into a
            contract sends a message that he/she wants to be subject to the revised terms and conditions to the "Society
            Homepage" within the notice period of the revised terms and conditions under paragraph 3, and the revised
            terms and conditions are applied if the consent of the "Society Homepage" is obtained.

            (6) Matters not regulated in these Terms and Conditions and interpretation of these Terms and Conditions
            shall be subject to the Act on Consumer Protection in Electronic Commerce, the Act on The Regulation of
            Terms and Conditions, consumer protection guidelines and related laws or practices in electronic commerce,
            etc. as set forth by the Fair Trade Commission.


            <span>Article 4 (Provision and Change of Services)</span>

            (1) The "Society Homepage" performs the following tasks:

            1. Providing information on the product or service and concluding the purchase contract
            2. Delivery of goods or service with purchase contract
            3. Other tasks set by the "Society Homepage"

            (2) The "Society Homepage" may change the contents of the products or services to be provided by the
            contract concluded in the future in the case of out of stock of the product or service or a change in
            technical specifications. In this case, the contents of the changed product or service and the date of
            delivery will be specified and immediately notified where the contents of the current business or service
            were posted.


            (3) If the contents of the service contracted with the user offered by the "Society Homepage", are changed
            due to out of stock or changes in technical specifications, etc. the reason will be immediately notified to
            the user at the address where it can be notified.

            (4) In the case of the above paragraph, the "Society Homepage" shall compensate the user for the damages
            suffered by this. However, this is not the case if the "Society Homepage" proves that there is no will or
            negligence.


            <span>Article 5 (Suspension of Service)</span>

            (1) The "Society Homepage" can temporarily suspend the service in the event of a maintenance, replacement,
            failure, or communication failure of information and communication facilities such as computers.

            (2) The "Society Homepage" shall indemnity the user or a third party for damages suffered because of the
            temporary suspension of the Service for the reasons of paragraph (1). However, this is not the case if the
            "Society Homepage" proves that there is no will or negligence.

            (3) If the Service is unable to be provided due to the conversion of business items, abandonment of
            business, or integration between companies, the "Society Homepage" shall notify the user in the way set
            forth in Article 8 and compensate the consumer in accordance with the conditions set forth in the "Society
            Homepage". However, if the "Society Homepage" does not provide compensation standards, etc., the mileage or
            reserves of the users shall be paid to the user in cash or in cash corresponding to the currency value
            commonly accepted on the "Society's website".


            <span>Article 6 (Membership Subscription)</span>

            (1) The user shall apply for membership by entering the member information according to the registration
            form set forth by the "Society Homepage" and by agreeing his/her consent to these Terms and Conditions.

            (2) The "Society Homepage" shall register as a member unless the following items apply for applicant as
            shown in Paragraph (1).

            1. If the applicant has previously lost his/her membership under Article 7 (3) of these Terms and
            Conditions, he/she shall be the exception if he/she has obtained approval to register as a member of the
            "Society Homepage" as a member three years after the loss of membership under Article 7 (3).
            2. If there is a false, missing description, or false information in the registration content
            3. If it is determined that registering as a member is significantly in the technical way of the "Society
            Homepage".

            (3) The time of the membership agreement shall be when the approval of the "Society Homepage" reaches the
            member.

            (4) If there is a change in the information registered at the time of membership application, the member
            shall notify the "Society Homepage" within a considerable period by modifying the member information.


            <span>Article 7 (Withdrawal of Membership and Loss of Eligibility, etc.)</span>

            (1) Members may request withdrawal at any time on the "Society Homepage", and the "Society Homepage” shall
            immediately process the withdrawal of membership.

            (2) If the member is in any of the following reasons, the "Society Homepage" may limit or suspend the
            membership.

            1. When false information is registered at the time of application
            2. In case the member does not pay the debts in connection with the payment of the purchased products, etc.
            or other debts using the "Society Homepage" within due dates.
            3. When the e-commerce order is threatened by interfering with the use of other people's "Society Homepage",
            or stealing the information
            4. When using the "Society Homepage" to prohibit laws or these Terms and Conditions or to act against public
            order

            (3) After "Society Homepage" restricts membership, If the same act is repeated more than once after
            suspension or if the reason is not corrected within 30 days, the "Society Homepage” may disqualify its
            membership.

            (4) If the "Society Homepage" disqualifies its membership, the membership registration shall be exalted. In
            this case, the member shall be notified and given the opportunity to speak for at least 30 days before the
            membership registration is exalted.


            <span>Article 8 (Notification to Members)</span>

            (1) If the "Society Homepage" notifies the member, it will be through the designated e-mail address with the
            "Society Homepage" by Member.

            (2) The "Society Homepage" may be allowed as an individual notice by posting it on the "Society Homepage"
            bulletin board. Also, individual notice will be made in case of important personal information regarding the
            transactions of the member.


            <span>Article 9 (Application for Purchase and Consent to Provide Personal Information, etc.)</span>

            (1) The "Society Homepage" user shall apply for purchase on the "Society Homepage" by the following or
            similar method as below, and the "Society Homepage" shall provide the following contents in an
            easy-to-understand way when the user makes an application for purchase.

            1. Search and select products, etc.
            2. Input of the recipient's name, address, telephone number, e-mail address (or mobile phone number), etc.
            3. Terms and conditions, services that restrict subscription reselling, shipping fees, Confirmation of
            contents related to expenses such as installation costs
            4. Signs that accept these Terms and Conditions and confirm or reject the above 3.
            5. Consent to the application for purchase of the products, confirmation of such purchases, or confirmation
            of the "Society Homepage"
            6. Choosing a payment method

            (2) If the "Society Homepage" is required to provide buyer's personal information to a third party, the
            purchaser must be informed and consented to the following: (The same is the case if the consent is changed.)

            1. the recipient of personal information
            2. the purpose of personal information use of the recipient of the personal information
            3. the item of personal information provided
            4. the personal information retention and use period of the person receiving the personal information

            (3) If the "Society Homepage" entrusts a third party with the responsibility of handling the buyer's
            personal information, 1) the person entrusted with handling the personal information and 2) the contents of
            the task of entrusting the handling of personal information, must be known to the buyer and obtain consent.
            (The same is the case if the consent is changed.) However, if it is necessary for the performance of
            contracts concerning the provision of services and related to the promotion of convenience of buyers, it is
            not necessary to go through the notice process and consent process by notification through the Personal
            Information Policy in the way set out in the Act on Promotion of Information and Communications Network Use
            and Information Protection, etc.


            <span>Article 10 (Form of Contract)</span>

            (1) The "Society Homepage" may not accept purchase applications such as Article 9 if they are in any of the
            following sub-articles:

            1. If there is a false, missing description, or false information in the contents of the application
            2. If the company deems that accepting the purchase application is significantly in the technical way of
            "Society Homepage"

            (2) The contract shall be considered to have been established at the time the approval of the "Society
            Homepage" reaches the user in the form of a confirmation of reception as of Article 12 (1).

            (3) The approval of the "Society Homepage" shall include information on the user's confirmation of the
            purchase application, availability of sale, cancellation or correction of the purchase application, etc.


            <span>Article 11 (Payment Method)</span>

            The method of payment for a product or service purchased on the "Society Homepage" may be made in the
            following ways as available. However, the "Society Homepage" may not collect any nominal fee for payment of
            the user's payment method.

            1. Various account transfers such as phone banking, internet banking, mail banking, etc.
            2. Payment of prepaid cards, debit cards, credit cards, etc.
            3. Online deposit without bankbook


            <span>Article 12 (Confirmation notice of Reception· change and cancel the purchase application)</span>

            (1) The "Society Homepage" shall provide the user with a confirmation notice of the reception if there is an
            application for purchase.

            (2) If there is a discrepancy in the confirmation of the information, the user may request the change and
            cancellation of the purchase application immediately after receiving the confirmation of the reception, and
            the "Society Homepage" shall handle without delay if the user requests it before delivery. However, if you
            have already paid, you will be required to do so in accordance with article 15's provisions on the
            re-payment of your purchase.


            <span>Article 13 (Refund)</span>

            "Society Homepage" notifies the user of the reason without delay when the product requested by the user is
            not able to deliver or provide due to reasons such as out of stock, and if the company received payment for
            the product in advance, it shall refund within 3 business days from the date of receiving the payment or
            take the necessary measures for the refund.


            <span>Article 14 (Effect of the withdrawal of agreement)</span>

            (1) The "Society Homepage" shall refund the payment of the products already paid within 3 business days if
            the user returns the products. In this case, if the "Society Homepage" delays the refund of the product to
            the user, the delayed interest rate as set out in Article 21-2 of the Enforcement Decree of the Act on
            Consumer Protection in Electronic Commerce, etc. shall be paid for the delayed period.

            (2) The "Society Homepage" shall request that the company providing the payment method stop or cancel the
            billing of the product without delay when the user has paid the payment of the product by payment method
            such as credit card or electronic money in refunding the above payment.

            (3) In the case of the case of the withdrawal of agreement, the user shall bear the costs necessary for the
            return of the supplied products, etc. The "Society Homepage" does not claim penalties or damages for reasons
            such as withdrawal of the user's agreement. However, If the contract is fulfilled differently than the
            contents of the advertisement or the contents of the contract, the cost necessary for the return of the
            products, etc. will be borne by the "Society Homepage".



            <span>Article 15 (Personal Information Protection)</span>

            (1) The "Society Homepage" collects the minimum amount of personal information necessary for the provision
            of services when collecting personal information of users.

            (2) The "Society Homepage" does not collect the information necessary to enter into a purchase contract at
            the time of membership registration. However, this shall not be the case if identification is required prior
            to the purchase contract in order to comply with the obligations under applicable laws and regulations, and
            the minimum specific personal information is collected.

            (3) When the "Society Homepage" collects and uses personal information of users, the user is notified of the
            purpose and consent is obtained.

            (4) The "Society Homepage" may not use the collected personal information for other than the purpose, and in
            the event of a new purpose of use or when it is provided to a third party, the purpose is to be agreed to by
            the user at the provision stage. However, exceptions shall be made if otherwise provided in the relevant
            laws and regulations.

            (5) If the "Society Homepage" is required to obtain the consent of the user in paragraphs 2 and 3, the
            "Society Homepage" shall specify or give notice of the provisions of Article 22(2) of the Act on Promotion
            of Information and Communications Network Use and Information Protection, etc., such as the identity of the
            person in charge of personal information management (affiliation, name, phone number, other contact
            information), purpose of collection and use of information, and information provision related to a third
            party, and the user may withdraw this consent at any time.

            (6) The user may request to view and correct errors about his/her personal information held by the "Society
            Homepage” at any time, and the "Society Homepage" shall be on duty to take necessary measures without delay.
            If the user requests correction of the error, the "Society Homepage" will not use the personal information
            until the error is corrected.

            (7) The "Society Homepage" shall limit the person handling the user's personal information to a minimum for
            the protection of personal information and shall be responsible for all damages caused by loss, theft,
            outflow, provision of third parties without consent, or alteration of the user's personal information,
            including credit cards, bank accounts, etc.

            (8) The "Society Homepage" or a third party who has received personal information from it will destroy the
            personal information without delay when it has achieved the purpose of collecting or receiving personal
            information.

            (9) The "Society Homepage" do not set the consent column for collection, use and supply of personal
            information provision to be pre-selected. Specifically specify the services that are restricted when the
            user's consent to the provision is rejected, and do not restrict or refuse to provide services such as
            membership due to refusal of consent of users regarding the collection of personal information that is not a
            required collection items, offer.


            <span>Article 16 (Obligation of "Society Homepage")</span>

            (1) The "Society Homepage" does not act against the laws and these Terms and Conditions prohibits or
            violates public order and shall do our best to provide services continuously and stably according to the
            Terms and Conditions.

            (2) The "Society Homepage" shall have a security system to protect the user's personal information
            (including credit information) so that the user can safely use the Internet service.

            (3) "Society Homepage" shall be responsible for compensation about products or services according to The Law
            on the Becoming Fair of Advertising" Article 3 If the user suffers damages by advertising.

            (4) The "Society Homepage" does not send advertising e-mails for commercial purposes that the user does not
            want.


            <span>Article 17 (Obligations on Member's ID and Password)</span>

            (1) The Member shall be responsible for managing the ID and password except in the case of Article 15.

            (2) Members shall not use their ID and password to a third party.

            (3) If a member becomes aware that his/her ID and password have been stolen or used by a third party, he/she
            shall immediately notify the "Society Homepage" and follow the instructions on the "Society Homepage".


            <span>Article 18 (User's Obligation) Users shall not act:</span>

            1. Registration of false information when applying or changing
            2. Stealing other people's information
            3. Changing information posted on the "Society Homepage"
            4. Transmission or posting of information (computer programs, etc.) other than the information set by the
            "Society Homepage"
            5. Infringement of intellectual property rights such as copyrights of "Society Homepage" and other third
            parties
            6. "Society Homepage" or other acts that damage the honor of a third party or interfere with business
            7. Disclosing or posting pornography or violent messages, images, voices, or other information that is
            against public letter and public service on the society's website.


            <span>Article 19 (Relationship between connecting "Society Homepage" and non-connecting "Society
                Homepage")</span>

            (1) If the upper "Society Homepage" and the lower "Society Homepage" are linked by hyperlinks (e.g.,
            hyperlinks include letters, pictures, and fairy tales), the former is connecting "Society Homepage"(website)
            and the latter is called the non-connecting "Society Homepage"(website).

            (2) The connecting "Society Homepage" shall not be responsible for the guarantee of transactions made with
            the user by the products provided independently by the non-connecting "Society Homepage” and shall not be
            responsible for the guarantee of the transaction if it is stated on the initial screen of the connecting
            "Society Homepage" or as a pop-up screen at the time of connection.


            <span>Article 20 (Attribution and Restriction of Use of Copyright)</span>

            (1) Copyrights and other intellectual property rights for works created by the "Society Homepage" belong to
            the "Society Homepage".

            (2) The user shall not use the information of Copyrights and other intellectual property rights for works
            created by the "Society Homepage" obtained by using the "Society Homepage" for commercial purposes or use it
            to a third party by reproduction, transmission, publication, distribution, broadcast, or other means without
            the prior consent of the "Society Homepage" to the "Society Homepage".

            (3) The "Society Homepage" shall notify the user when using the copyright attributed to the user in
            accordance with the agreement.


            <span>Article 21 (Dispute Resolution)</span>

            (1) The "Society Homepage" establishes a damage compensation treatment organization to reflect the
            legitimate opinions or complaints raised by users and to compensate for the damages.

            (2) The "Society Homepage" shall first handle complaints and opinions submitted from users. However, if it
            is difficult to process quickly, the user will be notified immediately of the reason and the date of
            processing.

            (3) If there is an application for damages from the user in connection with an e-commerce dispute between
            user and "Society Homepage", it can be adjusted by the Fair Trade Commission or a dispute coordination
            agency commissioned by city or province government.


            <span>Article 22 (Right to Trial and Compliance Law)</span>

            (1) Any lawsuit concerning an e-commerce dispute between the "Society Homepage" and the user shall be based
            on the address of the user at the time of filing the lawsuit, and in the event of no address, the exclusive
            jurisdiction of the district court in which the lawsuit is located shall be made. However, if the user's
            address or claim is not clear at the time of the lawsuit, or if the user is a foreign resident, it shall be
            filed in the competent court under the Civil Litigation Act.

            (2) Korean law applies to e-commerce lawsuits filed between the "Society Homepage" and the user.
        </p>

    </div>
</div>

<!-- Privacy Policy POP -->
<div class="popup term2">
    <div class="pop_bg"></div>
    <div class="pop_contents terms">
        <h1 class="text_r"><img src="./img/icons/icon_x.png" alt="" class="pop_close"></h1>
        <p class="pre">
            <!--<?= $locale("terms") ?>-->
            <span class="terms_big_title">Privacy Policy </span>

            We, ICoLA 2022 secretariat, collect and use personal information for the following purposes described below.

            <span>1. Collection and Use of Personal Information</span>
            • Personal information is data that can be used to identify or contact a single person.
            • We do not use the personal information for any purpose that disclose such information to any third party
            without the consent of the participant.


            <span>2. What personal information we collect</span>
            • When you create an ICoLA 2022 we may collect a variety of information, including your e-mail, password,
            country, name, organization, phone number, and address information.


            <span>3. Duration of Retention and Use of Personal Information and Destruction</span>
            • As a general rule, the ICoLA 2022 retains and uses participant’s personal information for the notified and
            agreed durations and once the purposes of collection and use of the personal information are achieved, it is
            without delay destroyed.
            • The duration of retention / use of collected personal information will start from when the User Agreement
            is entered into (i.e., signing up for a membership) and end when the User Agreement is terminated
            (including, but not limited to, applying for withdrawal from the membership, and discretionary
            withdrawal/dismissal). Further, in the case of termination of the User Agreement upon mutual agreement, the
            Company will without delay destroy all of your personal information other than contained in materials
            required to retain for a certain period for the afore-mentioned reasons for data retention, and will also
            instruct its third-party service providers to destroy the personal information provided to them for the
            outsourcing of data processing.
            • Your personal information will be destroyed without delay if the purposes of collection and use of the
            personal information are achieved. If printed on paper, your personal information will be destroyed by
            shredding or incinerating the paper documents or otherwise and, if saved in the form of electronic files,
            your personal information will be destroyed by technical means making the records non reproducible.
        </p>
    </div>
</div>

<!-- Use of personal information 미동의 시 팝업 23.05.09 -->
<div class="popup check_agreement">
    <div class="pop_bg"></div>
    <div class="pop_contents terms">
        <h1 class="text_r"><img src="./img/icons/icon_x.png" alt="" class="pop_close"></h1>
        <p class="pre bold">
            Please check the agreement of the using personal information.
        </p>
    </div>
</div>

<script src="./js/script/client/member.js?ver=0.2"></script>
<script>
$(document).ready(function() {
    $(".term1_btn").click(function() {
        $(".popup.term1").show();
    });
    $(".term2_btn").click(function() {
        console.log("hello")
        $(".popup.term2").show();
    });
    $(document).on("keyup", ".kor_check_number", function() {
        var _this = $(this).val();
        if (_this == "") {
            $(this).next().html("");
        } else {
            $(this).next().html("good");
        }
    });

});


function name_check(name, mo) {

    console.log(name);


    first_name = (typeof(first_name) != "undefined") ? first_name : null;

    if (!first_name || first_name_len <= 0) {
        $("input[name=" + name + "]").focus();
        if (mo === "mo") {
            name = name.replace("mo_", "");
        }
        if (name === "short_input") {
            alert("Invalid Others");
        } else {
            if (name == "name_kor") {
                name = "name (KOR)";
            } else if (name == "affiliation_kor") {
                name = "affiliation (KOR)";
            }
            alert("Invalid " + name);
        }
        return false;
    }
    return true;
}

function pw_check(i, password, password2) {
    var pw1 = $("input[name=" + password + "]").val();
    var pw1_len = pw1.trim().length;
    pw1 = (typeof(pw1) != "undefined") ? pw1 : null;

    var pw2 = $("input[name=" + password2 + "]").val();
    var pw2_len = pw2.trim().length;
    pw2 = (typeof(pw2) != "undefined") ? pw2 : null;

    if (i == 1) {
        if (!pw1 || pw1_len <= 0) {
            $("input[name=" + password + "]").focus();
            alert("Invalid passwrod");
            return false;
        }
    } else {
        if (!pw2 || pw2_len <= 0) {
            $("input[name=" + password2 + "]").focus();
            alert("Invalid passwrod");
            return false;
        }
    }
    if (pw1_len > 0 && pw2_len > 0) {
        if (pw1 !== pw2) {
            $("input[name=" + password + "]").focus();
            alert("inconsistency passwrod");
            return false;
        }
    }
}



$(document).on("click", "#mo_submit", function() {

    //var red_alert_option = $(".mo_red_alert_option");

    var value_arr = ["ID(email)", "Password", "Verify Password", "Name(KOR)",
        "Affiliation(KOR)", "Mobile Phone Number"
    ];

    //var red_alert = document.getElementsByClassName("mo_red_alert");

    //국가 유효성




    var check = name_check("mo_email", "mo");

    if (check == false) return;

    check = pw_check(1, "mo_password", "mo_password2");

    if (check == false) return;

    check = pw_check(2, "mo_password", "mo_password2");

    if (check == false) return;


    check = name_check("mo_affiliation", "mo");
    if (check == false) return;

    var department = $("input[name=mo_department]").val();

    if (department == "" || department == null) {
        alert("Invalid " + option_arr[1]);
        return;
    }


    check = name_check("mo_nation_tel", "mo");
    if (check == false) return;
    check = name_check("mo_phone", "mo");
    if (check == false) return;

    var tel_nation_tel = $("input[name=mo_tel_nation_tel]").val();
    var telephone1 = $("input[name=mo_telephone1]").val();
    var telephone2 = $("input[name=mo_telephone2]").val();

    if (telephone1 != "") {
        if (tel_nation_tel == null || tel_nation_tel == "" || telephone2 == null || telephone2 == "") {
            alert("Invalid telephone");
            return;
        }
    }
    if (telephone2 != "") {
        if (tel_nation_tel == null || tel_nation_tel == "" || telephone1 == null || telephone1 == "") {
            alert("Invalid telephone");
            return;
        }
    }



    // kor 필수값 유효성검사
    var first_name_kor = $("input[name=mo_first_name_kor]").val();
    if (first_name_kor == "" || first_name_kor == null) {
        alert("이름을 입력해주세요.");
        return;
    }

    var last_name_kor = $("input[name=mo_last_name_kor]").val();
    if (last_name_kor == "" || last_name_kor == null) {
        alert("성을 입력해주세요.");
        return;
    }

    var affiliation_kor = $("input[name=mo_affiliation_kor]").val();
    if (affiliation_kor == "" || affiliation_kor == null) {
        alert("소속을 입력해주세요.");
        return;
    }

    var department_kor = $("input[name=mo_department_kor]").val();
    if (department_kor == "" || department_kor == null) {
        alert("부서를 입력해주세요.");
        return;
    }


    var phone = $("input[name=mo_phone]").val();


    //이용약관 동의
    var terms1 = $("#terms1").is(":checked");
    //개인정보 동의
    //var terms2 = $("#mo_terms2").is(":checked");

    if (terms1 == false) {
        //alert("Please agree to Terms.");
        //22.04.12 고객사 요청으로 alert 문구 변경 (HUBDNC LJH2)
        //alert("Please agree to Terms & Conditions.");
        //23.05.10 고객사 요청으로 alert 문구 변경 (HUBDNC LHJ)
        alert("Please check the agreement of the using personal information.");
        return;
    }
    //if(terms2 == false) {
    //	alert("Please agree to Privacy Policy.");
    //	return;
    //}

    if (!confirm("Would you like to join?")) return;

    var ksola_member_status = "";
    if ($("#mo_user1").prop('checked') == true) {
        ksola_member_status = 1;
    } else {
        ksola_member_status = 0;
    }

    var email = $("input[name=mo_email]").val();

    var pw = $("input[name=mo_password]").val();
    var pw2 = $("input[name=mo_password2]").val();

    var first_name = $("input[name=mo_first_name]").val();
    var last_name = $("input[name=mo_last_name]").val();


    var affiliation = $("input[name=mo_affiliation]").val();

    var nation_tel = $("input[name=mo_nation_tel]").val();
    var phone = $("input[name=mo_phone]").val();

    var food = $("input[name=mo_food]:checked").val();

    var licence_number3 = $("input[name=mo_licence_number2]").val();
    var specialty_number3 = $("input[name=mo_specialty_number2]").val();
    var nutritionist_number3 = $("input[name=mo_nutritionist_number2]").val();
    var short_input = $("input[name=mo_short_input]").val();


    var ksola_member_check = $("input[name=ksola_member_check]").val();
    var ksola_member_type = $("input[name=ksola_member_type]").val();
    var ksola_member_status = 0;

    if (ksola_member_type == "인터넷회원") {
        ksola_member_status = 3;
    } else if (ksola_member_type == "평생회원") {
        ksola_member_status = 2;
    } else if (ksola_member_type == "정회원") {
        ksola_member_status = 1;
    } else {
        ksola_member_status = 0;
    }

    var data = {
        "flag": "signup",
        "ksola_member_status": ksola_member_status,
        "ksola_member_check": ksola_member_check,
        "email": email,
        "password": pw,
        "first_name_kor": first_name_kor,
        "last_name_kor": last_name_kor,
        "department_kor": department_kor,
        "phone": phone,
        "affiliation_kor": affiliation_kor,
        "terms1": terms1,
        "type": "INSERT",
        "tel_nation_tel": tel_nation_tel,
        "telephone1": telephone1,
        "telephone2": telephone2
    };

    save(data);
});

$(document).on("click", "#submit", function() {
    //var red_alert_option = $(".red_alert_option");

    var value_arr = ["ID(email)", "Password", "Verify Password", "Name(KOR)",
        "Affiliation(KOR)", "Mobile Phone Number"
    ];

    var red_alert = document.getElementsByClassName("red_alert");


    var check = name_check("email");

    if (check == false) return;

    check = pw_check(1, "password", "password2");

    if (check == false) return;

    check = pw_check(2, "password", "password2");

    if (check == false) return;

    check = name_check("nation_tel");
    if (check == false) return;

    check = name_check("phone");
    if (check == false) return;

    var tel_nation_tel = $("input[name=telephone]").val();
    var telephone1 = $("input[name=telephone1]").val();
    var telephone2 = $("input[name=telephone2]").val();

    if (telephone1 != "") {
        if (tel_nation_tel == null || tel_nation_tel == "" || telephone2 == null || telephone2 == "") {
            alert("Invalid telephone");
            return;
        }
    }
    if (telephone2 != "") {
        if (tel_nation_tel == null || tel_nation_tel == "" || telephone1 == null || telephone1 == "") {
            alert("Invalid telephone");
            return;
        }
    }


    // kor 필수값 유효성검사
    var first_name_kor = $("input[name=first_name_kor]").val();
    if (first_name_kor == "" || first_name_kor == null) {
        alert("이름을 입력해주세요.");
        return;
    }

    var last_name_kor = $("input[name=last_name_kor]").val();
    if (last_name_kor == "" || last_name_kor == null) {
        alert("성을 입력해주세요.");
        return;
    }


    // 2023-05-12 휴대폰제약사항
    var phone = $("input[name=phone]").val();
    //이용약관 동의
    var terms1 = $("#terms1").is(":checked");
    //개인정보 동의
    //var terms2 = $("#terms2").is(":checked");

    if (terms1 == false) {
        alert("Please check the agreement of the using personal information.");
        return;
    }

    if (!confirm("Would you like to join?")) return;

    var ksola_member_status = 0;
    if ($("#user1").prop('checked') == true) {
        ksola_member_status = 1;
    }

    var email = $("input[name=email]").val();

    var pw = $("input[name=password]").val();
    var pw2 = $("input[name=password2]").val();

    var nation_tel = $("input[name=nation_tel]").val();

    var ksola_member_check = $("input[name=ksola_member_check]").val();
    var ksola_member_type = $("input[name=ksola_member_type]").val();
    var ksola_member_status = 0;

    if (ksola_member_type == "인터넷회원") {
        ksola_member_status = 3;
    } else if (ksola_member_type == "평생회원") {
        ksola_member_status = 2;
    } else if (ksola_member_type == "정회원") {
        ksola_member_status = 1;
    } else {
        ksola_member_status = 0;
    }

    var data = {
        "flag": "signup",
        "ksola_member_status": ksola_member_status,
        "ksola_member_check": ksola_member_check,
        "email": email,
        "password": pw,
        "first_name_kor": first_name_kor,
        "last_name_kor": last_name_kor,
        "affiliation_kor": affiliation_kor,
        "department_kor": department_kor,
        "nation_tel": nation_tel,
        "phone": phone,
        "terms1": terms1,
        "type": "INSERT",
        "title": title,
        "title_input": title_input,
        "tel_nation_tel": tel_nation_tel,
        "telephone1": telephone1,
        "telephone2": telephone2
    };

    //console.log('data: %o', data);
    save(data)

});


function save(data) {
    $.ajax({
        url: PATH + "ajax/client/ajax_member.php",
        type: "POST",
        data: {
            "flag": data['flag'],
            "data": data
        },
        dataType: "JSON",
        success: success,
        fail: fail,
        error: error
    });

    function success(res) {
        gmailMail(data);
        alert("Your Sign-up is complete.");
        window.location.replace("login.php");
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

// 구글 메일 발송
function gmailMail(data) {
    $.ajax({
        url: PATH + "ajax/client/ajax_gmail.php",
        type: "POST",
        data: {
            "flag": data["flag"],
            "data": data
        },
        dataType: "JSON"
    });
}


//red_api
$("input[name=mo_kor_id]").on("change", function() {
    var _this = $(this);
    _this.val();
    kor_api_check("mo_kor_id", _this.val(), "mo");
});
$("input[name=mo_kor_pw]").on("change", function() {
    var _this = $(this);
    _this.val();
    kor_api_check("mo_kor_password", _this.val(), "mo");
});


$("input[name=kor_id]").on("change", function() {
    var _this = $(this);
    _this.val();
    kor_api_check("kor_id", _this.val());
});
$("input[name=kor_pw]").on("change", function() {
    var _this = $(this);
    _this.val();
    kor_api_check("kor_password", _this.val());
});

function kor_api_check(name, value, mo) {
    var first_name = value;
    var first_name_len = first_name.trim().length;
    first_name = (typeof(first_name) != "undefined") ? first_name : null;

    if (mo === "mo") {
        name = name.replace("mo_", "");
    }

    if (!first_name || first_name_len <= 0) {
        alert("Invalid_" + name);

    }
}

//한국 회원 인증시 api호출
function mo_kor_api() {
    var kor_id = $("input[name=mo_kor_id]").val().trim();
    var kor_pw = $("input[name=mo_kor_pw]").val().trim();
    //제 3자 개인정보 수집에 동의 여부
    var privacy = $("#mo_privacy").is(":checked");

    if (!kor_id) {
        //$(".mo_red_api").eq(0).html("format_id");
        alert("Invalid id");
        return;
    }
    if (!kor_pw) {
        //$(".mo_red_api").eq(0).html("Invalid_password");
        alert("Invalid password");
        return;
    }

    if (privacy == false) {
        alert("Please agree to the collection of personal information.");
        $(".mo_red_api").eq(0).html("Please agree to the collection of personal information.");
        return;
    }

    var data = {
        'id': kor_id,
        'password': kor_pw
    };

    $.ajax({
        url: "signup_api.php",
        type: "POST",
        data: data,
        dataType: "JSON",
        success: success,
        fail: fail,
        error: error
    });

    function success(res) {
        //console.dir(res); return; // null
        var kor_sign = JSON.parse(res.value);
        var user_row = kor_sign.user_row;

        if (kor_sign.code == "N1") {
            alert("아이디를 입력해주세요.");
            //$(".mo_red_api").eq(0).html("아이디를 입력해주세요.");
        } else if (kor_sign.code == "N2") {
            alert("비밀번호를 입력해주세요.");
            //$(".mo_red_api").eq(0).html("비밀번호를 입력해주세요.");
        } else if (kor_sign.code == "N3") {
            alert("가입되지 않은 아이디입니다.");
            //$(".mo_red_api").eq(0).html("가입되지 않은 아이디입니다.");
        } else if (kor_sign.code == "N4") {
            alert("잘못된 비밀번호 입니다.");
            //$(".mo_red_api").eq(0).html("잘못된 비밀번호 입니다.");
        } else if (kor_sign.code == "N5") {
            alert("탈퇴된 아이디 입니다.");
            //$(".mo_red_api").eq(0).html("탈퇴된 아이디 입니다.");
        } else if (kor_sign.code == "N7") {
            alert("이미 인증된 계정입니다.");
            $("[name=kor_id]").val("");
            $("[name=kor_pw]").val("");
            $("#privacy").prop("checked", false);
            $("[name=kor_id]").focus();
        } else if (kor_sign.code == "N6") {
            //$(".mo_red_api").eq(0).html("");
            alert("회원님은 대한비만학회 " + user_row.user_type + " 입니다");

            //이거 실행했을 때도 이메일 중복체크
            var check_email = email_check(kor_sign.email);
            if (check_email == false) {
                return;
            }

            $("input[name=ksola_member_type]").val(user_row.user_type);
            $("input[name=ksola_member_check]").val(user_row.id);



            //select option에 비교해서 selected 처리
            var options = $('#mo_department').find('option').map(function() {
                return $(this).val();
            }).get()
            for (var i = 0; i < options.length; i++) {
                if (options[i] == kor_sign.depart && options[i] !== '') {
                    $("#mo_department option:eq(" + i + ")").attr("selected", "selected");
                }
            }

            $("input[name=mo_licence_number]").val(kor_sign.license_number);
            $("input[name=mo_affiliation_kor]").val(kor_sign.office_name);

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

function kor_api() {
    var kor_id = $("input[name=kor_id]").val().trim();
    var kor_pw = $("input[name=kor_pw]").val().trim();
    //제 3자 개인정보 수집에 동의 여부
    var privacy = $("#privacy").is(":checked");

    if (!kor_id) {
        alert("Invalid id");
        //$(".red_api").eq(0).html("format_id");
        return;
    }
    if (!kor_pw) {
        alert("Invalid password");
        //$(".red_api").eq(0).html("format_password");
        return;
    }

    if (privacy == false) {
        alert("Please agree to the collection of personal information.");
        $(".red_api").eq(0).html("Please agree to the collection of personal information.");
        return;
    }

    var data = {
        'id': kor_id,
        'password': kor_pw
    };

    $.ajax({
        url: "signup_api.php",
        type: "POST",
        data: data,
        dataType: "JSON",
        success: success,
        fail: fail,
        error: error
    });

    function success(res) {
        var kor_sign = JSON.parse(res.value);
        console.log(kor_sign);
        var user_row = kor_sign.user_row;
        //alert(user_row.user_type); return;

        if (kor_sign.code == "N1") {
            alert("아이디를 입력해주세요.");
        } else if (kor_sign.code == "N2") {
            alert("비밀번호를 입력해주세요.");
        } else if (kor_sign.code == "N3") {
            alert("가입되지 않은 아이디입니다.");
        } else if (kor_sign.code == "N4") {
            alert("잘못된 비밀번호 입니다.");
        } else if (kor_sign.code == "N5") {
            alert("탈퇴된 아이디 입니다.");
        } else if (kor_sign.code == "N7") {
            alert("이미 인증된 계정입니다.");
            $("[name=kor_id]").val("");
            $("[name=kor_pw]").val("");
            $("#privacy").prop("checked", false);
            $("[name=kor_id]").focus();
        } else if (kor_sign.code == "N6") {

            alert("회원님은 대한비만학회 " + user_row.user_type + " 입니다");
            //이거 실행했을 때도 이메일 중복체크
            var check_email = email_check(user_row.email);
            if (check_email == false) {
                return;
            }

            $("input[name=ksola_member_type]").val(user_row.user_type);
            $("input[name=ksola_member_check]").val(user_row.id);

            $("input[name=licence_number]").val(kor_sign.license_number);
            $("input[name=affiliation_kor]").val(kor_sign.office_name);


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

//이메일 중복 체크 한국으로 체크시
function email_check(email) {
    $.ajax({
        url: PATH + "ajax/client/ajax_member.php",
        type: "POST",
        data: {
            flag: "id_check",
            email: email
        },
        dataType: "JSON",
        success: function(res) {
            if (res.code == 200) {
                //$(".red_alert").eq(0).html("good");
                //$(".red_alert").eq(0).css('display', 'none');
                //$(".mo_red_alert").eq(0).html("good");
                //$(".mo_red_alert").eq(0).css('display', 'none');
            } else if (res.code == 400) {
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

$(document).ready(function() {

    $(function() {
        $("input[name=first_name_kor]").keyup(function(event) {
            regexp = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
            v = $(this).val();
            if (regexp.test(v)) {
                alert("한글만 입력가능 합니다.");
                $(this).val(v.replace(regexp, ''));
            }
        });
    });

    $(function() {
        $("input[name=last_name_kor]").keyup(function(event) {
            regexp = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
            v = $(this).val();
            if (regexp.test(v)) {
                alert("한글만 입력가능 합니다.");
                $(this).val(v.replace(regexp, ''));
            }
        });
    });


    $(function() {
        $("input[name=phone], input[name=mo_phone]").keyup(function(event) {
            regexp = /[^0-9]/g;
            v = $(this).val();
            if (regexp.test(v)) {
                $(this).val(v.replace(regexp, ''));
            }
        });
    });

    $(function() {
        $("input[name=mo_first_name_kor]").keyup(function(event) {
            regexp = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
            v = $(this).val();
            if (regexp.test(v)) {
                alert("한글만 입력가능 합니다.");
                $(this).val(v.replace(regexp, ''));
            }
        });
    });

    $(function() {
        $("input[name=mo_last_name_kor]").keyup(function(event) {
            regexp = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
            v = $(this).val();
            if (regexp.test(v)) {
                alert("한글만 입력가능 합니다.");
                $(this).val(v.replace(regexp, ''));
            }
        });
    });

});
</script>