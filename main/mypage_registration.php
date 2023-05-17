<?php include_once('./include/head.php');?>
<?php include_once('./include/header.php');?>
<?php
    $user_idx = $member["idx"] ?? -1;

	$sql_during =	"SELECT
						IF(DATE(NOW()) >= '2022-09-12', 'Y', 'N') AS yn
					FROM info_event";
	$during_yn = sql_fetch($sql_during)['yn'];


	// [22.04.25] 미로그인시 처리
	if($user_idx <= 0) {
		echo "<script>alert('Need to login'); location.replace(PATH+'login.php');</script>";
		exit;
	}

    $nation_list = get_data($_nation_query);
    $select_user_registration_query = "
        SELECT
            reg.idx, reg.banquet_yn, reg.email, reg.nation_no, reg.first_name, reg.last_name, reg.affiliation, reg.phone, reg.department, reg.member_type, DATE(reg.register_date) AS register_date, DATE_FORMAT(reg.register_date, '%m-%d-%Y %H:%i:%s') AS register_date2, reg.status,
			reg.attendance_type, reg.licence_number, reg.specialty_number, reg.nutritionist_number, 
			reg.conference_info, reg.welcome_reception_yn, reg.day2_breakfast_yn, reg.day2_luncheon_yn, reg.day3_breakfast_yn, reg.day3_luncheon_yn, 
			reg.payment_methods, reg.price, nation.nation_en, IF(nation.nation_tel = 82, 1, 0) AS is_korea,
            p.idx AS payment_idx, p.`type` AS payment_type, p.total_price_kr, p.total_price_us,
            p.etc2, DATE_FORMAT(p.register_date, '%Y-%m-%d %H:%i:%s') AS payment_register_date
        FROM request_registration reg
        LEFT JOIN payment p
        ON reg.payment_no = p.idx
		LEFT JOIN (
			SELECT idx, nation_en, nation_tel FROM nation
		)AS nation
		ON reg.nation_no = nation.idx
        WHERE reg.register = {$user_idx}
        AND reg.is_deleted = 'N'
        ORDER BY reg.register_date DESC
    ";

    $registration_list = get_data($select_user_registration_query);

	$sql_event =	"SELECT
						period_event_start,
						period_event_end,
						period_event_pre_end
					FROM info_event AS ie";
	$event = sql_fetch($sql_event);

	$only_sql = "SELECT
					MAX(rr.idx) AS idx
				FROM request_registration AS rr
				LEFT JOIN member AS mb
					ON mb.idx = rr.register
				LEFT JOIN payment AS pa
					ON pa.idx = rr.payment_no
				WHERE rr.register = {$user_idx}
				AND rr.is_deleted = 'N'
				AND rr.`status` = 2
				GROUP BY rr.idx";

	$only_idx = sql_fetch($only_sql)['idx'];

	$score_sql = "SELECT
						*
					FROM score_second
					WHERE mb_idx = '{$user_idx}'";

	$score_detail = sql_fetch($score_sql);

?>
<style>
	/*2022-05-11 ldh 추가*/
	.c_table td:last-of-type, .c_table2 td:last-of-type  {
		text-align:left;
		padding-left:10px;
	}
	.banquet_label {
		padding-right:20px;
	}
</style>
<section class="mypage container">
    <h1 class="page_title">Mypage</h1>
    <div>
		<ul class="tab_green">
			<li><a href="./mypage.php">Account</a></li>
			<li class="on"><a href="./mypage_registration.php">Registration</a></li>
			<li><a href="./mypage_abstract.php">Abstract</a></li>
			<?php
				//if($during_yn == 'N') {
			?>
				<!-- <li class="text_center"><a href="javascript:;" onclick="javascript:alert('행사 종료 후 9월 12일(월)부터 확인 가능합니다.');">평점 확인 (Korean Only)</a></li> -->
				<!-- <li class="text_center"><a href="javascript:;" onclick="javascript:alert('행사 종료 후 9월 12일(월)부터 확인 가능합니다.');">Certification of Completion</a></li> -->
			<?php
				//}
				//if(!empty($score_detail)) {
			?>
				<!-- <li class="text_center"><a href="./mypage_score.php">평점 확인 (Korean Only)</a></li> -->
			<?php
				//}
				//if(!empty($only_idx)) {
			?>
				<!-- <li class="text_center"><a href="./mypage_certification.php">Certification of Completion</a></li> -->
			<?php
				//} 
			?>
		</ul>
		<div class="inner">
            <!-- <img class="coming" src="./img/coming.png" /> -->
            <!-- <div class="not_ready">Will be updated soon</div> -->
            <img class="coming" src="./img/coming.png">
        </div>
    </div>
</section>


<script src="./js/script/client/registration.js"></script>
<script>
    $(document).ready(function(){
        $(window).off("beforeunload");
		
		$(document).on("click", "#license_checkbox", function(){
			//console.log($(this).is(':checked'));
			if($(this).is(':checked') == true) {
				$("input[name=licence_number]").attr("disabled", true);
				$("input[name=licence_number]").val("");
			} else {
				$("input[name=licence_number]").attr("disabled", false);
							
				$("#submit_btn").removeClass("submit_btn");
				$("#submit_btn").addClass("gray_btn");
			}
		});
		
		$(".online_regi_open").click(function(){
			$(".online_regi_pop").show();
		});

		$(".review_regi_open").click(function(){
			const html = $(this).siblings(".review_data").find('.detail_table tbody').children().clone();
			$(".review_regi_pop tbody").html(html);
			
			$(".review_regi_pop").show();
		});
    });

    $('.revise_pop_btn').on('click',function(){
        var idx = $(this).data("idx");
        $.ajax({
            url : PATH+"ajax/client/ajax_registration.php",
            type : "POST",
            data : {
                flag : "registration_information",
                idx : idx
            },
            dataType : "JSON",
            success : function(res) {
                if(res.code == 200 && res.data) {
                    var nation_tel = res.data.phone.split("-")[0];
                    var _phone = res.data.phone.split("-");
                    var _remove = _phone.splice(0,1);
                    var phone = _phone.join("-");
                    if(res.data.payment_status == 0 || res.data.payment_status == 3 || res.data.payment_status == 4) {
                        $(".revise_pop input").attr("readonly", true);
                        $(".revise_pop select").attr("disabled", true);
                        $(".update_btn").attr("disabled", true);
                    } else {
                        $(".update").attr("readonly", false);
                        $(".revise_pop select").attr("disabled", false);
                        $(".update_btn").attr("disabled", false);
                    }
                    $("input[name=registration_idx]").val(res.data.idx);
                    $("input[name=email]").val(res.data.email);
                    $("option[value="+res.data.nation_no+"]").attr("selected", true);
                    $("input[name=first_name]").val(res.data.first_name);
                    $("input[name=last_name]").val(res.data.last_name);
                    $("select[name=nation_tel] option").val(nation_tel).text(nation_tel);
                    $("input[name=phone]").val(phone);
                    $("input[name=affiliation]").val(res.data.affiliation);
                    $("input[name=department]").val(res.data.department);
					
					//if(res.data.banquet_yn == "Y") {
					//	$("#banquet1").prop("checked", true);
					//} else {
					//	$("#banquet2").prop("checked", true);
					//}

					if(res.data.licence_number == "Not applicable") {
						$("#license_checkbox").prop("checked", true);
						$("input[name=licence_number]").attr("disabled", true);
					} else {
						$("input[name=licence_number]").val(res.data.licence_number);
					}

					//2022-05-18
					if(res.data.member_status == 1) {
						$("#member").prop("checked", true);
					} else {
						$("#non_member").prop("checked", true);
					}

					var orgs = "";
					var org = res.data.etc2;
					//console.log(org);
					if(org) {
						$(".org").removeClass("tab_contents");
						orgs = org.split(",");
						
						for(var i=0; i<orgs.length; i++) {
							
							if(orgs[i] == 1) {
								$("#checkbox1").prop("checked", true);
							} else if (orgs[i] == 3) {
								$("#checkbox3").prop("checked", true);
							} else if(orgs[i] == 4) {
								$("#checkbox4").prop("checked", true);
							}
						}
					} else {
						$(".org").addClass("tab_contents");
						$("#checkbox1").prop("checked", false);
						$("#checkbox3").prop("checked", false);
						$("#checkbox4").prop("checked", false);
					}

					if(res.data.is_score == 1) {
						$("#applied").prop("checked", true);
						$(".org").removeClass("tab_contents");
					} else {
						$("#not_applied").prop("checked", true);
					}
                   
                    //$("input[name=academy_number]").val(res.data.academy_number);
                    $('.revise_pop').show();
                } else if(res.code == 400) {
                        return false;
                }
            }
        });
        
    });

    $(".update_btn").on("click", function(){

        var idx = $("input[name=registration_idx]").val();
        var process = inputCheck("update");
        var status = process.status;
        var data = process.data;

		data.flag = "update";
		data.idx = idx;

		var etc2 = "";

		$('input:checkbox[name="org"]').each(function() {

			if(this.checked == true) {
				etc2 += this.value+",";	
			} 
		});
		etc2 = etc2.substring(0, etc2.length - 1);
		
		data.etc2 = etc2;

		//유효성
		var licence_number = $("input[name=licence_number]").val();
		var licence_number_len = licence_number.trim().length;
		licence_number = (typeof(licence_number) != "undefined") ? licence_number : null;

		if($("#license_checkbox").is(':checked') == false) {
			if(!licence_number || licence_number_len <= 0) {
				alert("Please enter the licence number.");
				return;
			}
		}

		if(data.license_checkbox == "on") {
			data.licence_number = "Not applicable";
		}

        if(confirm(locale(language.value)("registration_modify_msg"))) {
            if(status) {
                $.ajax({
                    url : PATH+"ajax/client/ajax_registration.php",
                    type : "POST",
                    data : data,
                    dataType : "JSON",
                    success : function(res) {
                        if(res.code == 200) {
                            alert(locale(language.value)("complet_registration_modify"));
                            location.reload();
                        } else if(res.code == 401) {
                            alert(locale(language.value)("error_registration_modify"));
                            return false;
                        } else if(res.code == 400) {
                            alert(locale(language.value)("error_registration_modify"));
                            return false;
                        } else {
                            alert(locale(language.value)("reject_msg"));
                            return false;
                        }
                    }
                });
            }
        }
    });

	$(document).on("change", "#applied", function(){
		
		var _this = $(this).is(":checked");
		if(_this) {
			
			$(".org").removeClass("tab_contents");
		}
	});
	$(document).on("change", "#not_applied", function(){
		
		var _this = $(this).is(":checked");
		if(_this) {
			$(".org").addClass("tab_contents");
			$("#checkbox1").prop("checked", false);
			$("#checkbox3").prop("checked", false);
			$("#checkbox4").prop("checked", false);
		}
	});


    $(".payment_btn").on("click",function(){
        var paymentUrl = $(this).data("url");
        window.location.href = paymentUrl;
    });

	$(".certificate_brn").on("click", function(){
		alert("행사가 종료후 공개될 예정입니다.");
	});

    $(".cancel_btn").on("click",function(){
        var idx = $(this).data("idx");
        if(confirm(locale(language.value)("registration_cancel_msg"))) {
            $.ajax({
                url : PATH+"ajax/client/ajax_registration.php",
                type : "POST",
                data : {
                    flag : "cancel",
                    idx : idx
                },
                dataType : "JSON",
                success : function(res) {
                    if(res.code == 200) {
                        alert(locale(language.value)("complet_registration_cancel"));
                        location.reload();
                    } else if(res.code == 400) {
                        alert(locale(language.value)("error_registration_cancel"));
                        return false;
                    } else if(res.code == 401) {
                        alert(locale(language.value)("invalid_auth"));
                        return false;
                    } else if(res.code == 402) {
                        alert(locale(language.value)("invalid_registration_status"));
                        return false;
                    } else {
                    alert(locale(language.value)("reject_msg"));
                    return false;
                    }
                }
            });
        }
    });

    $(".refund_btn").on("click", function(){
        var payment_status = $(this).data("status");
        var idx = $(this).data("idx");
        if(confirm(locale(language.value)("registration_refund_msg"))) {
            $.ajax({
                url : PATH+"ajax/client/ajax_registration.php",
                type : "POST",
                data : {
                    flag : "refund",
                    payment_status : payment_status,
                    idx : idx
                },
                dataType : "JSON",
                success : function(res) {
                    if(res.code == 200) {
                        alert(locale(language.value)("complet_registration_refund"));
                        location.reload();
                    } else if(res.code == 400) {
                        alert(locale(language.value)("error_registration_refund"));
                        return false;
                    } else if(res.code == 401) {
                        return false;
                    } else if(res.code == 402) {
                        return false;
                    } else {
                        alert(locale(language.value)("reject_msg"));
                        return false;
                    }
                }
            });
        }
    });

	// registration receipt
	$(".registration_receipt_btn").on("click", function(){
		//$(".receipt_pop").show();
		var idx = $(this).data("idx");
		var url = "./pre_registration_confirm.php?idx="+idx;
		window.open(url,"Registration Receipt","width=793, height=2000, top=30, left=30");
	});

	$(".korean_only").on("click", function(){
		var url = "./pre_registration_korean_only.php";
		window.open(url,"Registration Receipt","width=793, height=2000, top=30, left=30");
	});


	// payment receipt
	$(".payment_receipt_btn").on("click", function(){
		var tid = $(this).data("tid");
		var url = "https://iniweb.inicis.com/DefaultWebApp/mall/cr/cm/mCmReceipt_head.jsp?noTid=" + tid + "&noMethod=1";
		window.open(url);
	});

	$("input[name=affiliation]").on("change keyup", function(key){
		var pattern_eng = /[^a-zA-Z\s]/gi;
		var _this = $(this);
		if(key.keyCode != 8) {
			var first_name = _this.val().replace(pattern_eng, '');
			_this.val(first_name);
		}
	});
	$("input[name=department]").on("change keyup", function(key){
		var pattern_eng = /[^a-zA-Z\s]/gi;
		var _this = $(this);
		if(key.keyCode != 8) {
			var first_name = _this.val().replace(pattern_eng, '');
			_this.val(first_name);
		}
	});
	$("input[name=licence_number]").on("change keyup", function(key){
		var pattern_eng = /[^0-9]/gi;
		var _this = $(this);
		if(key.keyCode != 8) {
			var first_name = _this.val().replace(pattern_eng, '');
			_this.val(first_name);
		}
	});
	$("input[name=academy_number]").on("change keyup", function(key){
		var pattern_eng = /[^a-zA-Z||0-9\s]/gi;
		var _this = $(this);
		if(key.keyCode != 8) {
			var first_name = _this.val().replace(pattern_eng, '');
			_this.val(first_name);
		}
	});
	//$("input[name=banquet_yn]").on("change keyup", function(key){
	//	var pattern_eng = /[^a-zA-Z||0-9\s]/gi;
	//	var _this = $(this);
	//	if(key.keyCode != 8) {
	//		var first_name = _this.val().replace(pattern_eng, '');
	//		_this.val(first_name);
	//	}
	//});
</script>
<?php include_once('./include/footer.php');?>