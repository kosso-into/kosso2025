<?php include_once('./include/head.php');?>
<?php include_once('./include/header.php');?>
<?php
	$nation_query = "SELECT
							*
						FROM nation
						ORDER BY 
						idx = 25 DESC, nation_en ASC";
	$nation_list_query = $nation_query;
	$nation_list = get_data($nation_list_query);

	$user_info = $member;

	if($user_info["phone"]) {
		$_arr_phone = explode("-",$user_info["phone"]);
		$nation_tel = $_arr_phone[0];
		$phone = implode("-",array_splice($_arr_phone, 1));
	}

	// [22.04.25] 미로그인시 처리
	if(!$user_info) {
		echo "<script>alert('로그인이 필요합니다.'); location.replace(PATH+'login.php');</script>";
		exit;
	}

	$user_idx = $member["idx"] ?? -1;

	$sql_during =	"SELECT
						IF(DATE(NOW()) >= '2022-09-12', 'Y', 'N') AS yn
					FROM info_event";
	$during_yn = sql_fetch($sql_during)['yn'];

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
	/*2022-04-13 ldh 추가*/
	.form_btn {
		font-size: 18px;
		height: 50px;
		width: 100%;
		color: #fff;
		border-radius: 30px;
		margin-top: 100px;
	}
	/*2022-09-08 ldh 추가*/
	.mypage .tab_green2 {
		text-align: center;
		white-space: nowrap;
	}
	.tab_green2 {
		display: flex;
		justify-content: center;
		margin-bottom: 37px;
	}
	.tab_green2 li.on {
		border-bottom: 2px solid #10BF99;
	}
	.tab_green2 li:not(:last-of-type) {
		margin-right: 40px;
	}
	.mypage .tab_green2 li {
		display: inline-block;
	}
	.tab_green2 li a {
		font-size: /*30px*/ 24px;
		font-weight: 400;
		color: #CCCCCC;
	}
	.tab_green2 li.on a {
		font-weight: bold;
		color: #10BF99;
	}
	
</style>

<section class="container form_section mypage">
    <h1 class="page_title">Mypage</h1>
	<div>
		<ul class="tab_green">
			<li class="on"><a href="./mypage.php">Account</a></li>
			<li><a href="./mypage_registration.php">Registration</a></li>
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
		<div>
			<form class="table_wrap">
			<div class="pc_only">
				<table class="table detail_table">
					<colgroup>
						<col class="col_th">
						<col width="*">
					</colgroup>
					<tbody>
						<tr>
							<th><?=$locale("id")?></th>
							<td>
								<div class="max_normal">
									<input type="text" name="email" value="<?=$user_info["email"]?>" readonly>
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><?=$locale("password")?></th>
							<td>
								<div class="max_normal">
									<input class="passwords" type="password" id="password" placeholder="Password">
								</div>
							</td>
						</tr>
						<tr>
							<!-- <th class="nowrap"><?=$locale("re_type_password")?></th> -->
							<th class="nowrap">Verify password</th>
							<td>
								<div class="max_normal">
									<input class="passwords" type="password" id="re_password" placeholder="Re-type password">
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span><?=$locale("country")?></th>
							<td>
								<div class="max_normal">
									<select name="nation_no" class="required">
										<option value="" selected hidden>Choose </option>
									<?php
										foreach($nation_list AS $list) {
											$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
											if($user_info["nation_no"] == $list["idx"]) {
												echo "<option value='".$list["idx"]."' selected>".$nation."</option>";
											} else {
												echo "<option value='".$list["idx"]."'>".$nation."</option>";
											}
										}
									?>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap">대한비만학회 회원 여부</th>
							<td>
								<div class="max_normal">
									<input type="checkbox" class="checkbox" id="membership_status1" disabled checked>
									<label for="membership_status1"><i></i>회원</label>
									<input type="checkbox" class="checkbox" id="membership_status2" disabled>
									<label for="membership_status2"><i></i>비회원</label>
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span><?=$locale("name")?></th>
							<td>
								<div class="max_normal">
									<ul class="half_ul">
										<li><input type="text" name="first_name" class="required" value="<?=$user_info["first_name"]?>" placeholder="First Name"></li>	
										<li><input type="text" name="last_name" class="required" value="<?=$user_info["last_name"]?>" placeholder="Last Name"></li>	
									</ul>
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>성명</th>
							<td>
								<div class="max_normal">
									<ul class="half_ul">
										<li><input name="first_name_kor" type="text" placeholder="이름" maxlength="60"></li>	
										<li><input name="last_name_kor" type="text" placeholder="성" maxlength="60"></li>	
									</ul>
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span>Title</th>
							<td>
								<div class="max_normal">
									<select name="title" class="required">
										<option value="">Professor </option>
										<option value="">Professor </option>
										<option value="">Professor </option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span><?=$locale("affiliation")?></th>
							<td>
								<div class="max_normal">
									<input type="text" name="affiliation" value="<?=$user_info["affiliation"]?>">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>소속</th>
							<td>
								<div class="max_normal">
									<!-- <input type="text" name="affiliation" value="<?=$user_info["affiliation"]?>"> -->
									<input type="text" name="affiliation_kor" value="ICOMES 2023 사무국">
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span><?=$locale("department")?></th>
							<td>
								<div class="max_normal">
									<input type="text" name="department" value="<?=$user_info["department"]?>">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>부서</th>
							<td>
								<div class="max_normal">
									<!-- <input type="text" name="department" value="<?=$user_info["department"]?>"> -->
									<input type="text" name="department_kor" value="인투온">
								</div>
							</td>
						</tr>
						<tr>
							<!-- <th class="nowrap"><span class="red_txt">*</span><?=$locale("phone")?></th> -->
							<th class="nowrap"><span class="red_txt">*</span>Mobile Phone Number</th>
							<td>
								<div class="max_normal">
									<ul class="half_ul">
										<li style="max-width:80px;">
											<select name="nation_tel" class="required"> 
												<option value="" selected hidden>select</option>
												<?php
													if($nation_tel) {
														echo "<option selected>".$nation_tel."</option>";
													}
												?>
											</select>
										</li>
										<li>										
											<input type="text" name="phone" class="required" placeholder="010-0000-0000" value="<?=$phone?>"></td>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span>Telephone Number</th>
							<td>
								<div class="max_normal">
									<ul class="half_ul">
										<li style="max-width:80px;">
											<select name="nation_tel" class="required"> 
												<option value="" selected hidden>select</option>
												<?php
													if($nation_tel) {
														echo "<option selected>".$nation_tel."</option>";
													}
												?>
											</select>
										</li>
										<li>										
											<ul class="half_ul">
												<li><input type="text" name="telephone_num1" class="required" value="02"></li>
												<li><input type="text" name="telephone_num2" class="required" value="22852568"></li>
											</ul>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>Date of Birth</th>
							<td>
								<div class="max_normal">
									<input maxlength="10" name="date_of_birth" type="text" placeholder="YYYY-MM-DD" id="datepicker">
								</div>
							</td>
						</tr>
					</tbody>
				</table>	
			</div>
			<!--
			<div class="checkbox_wrap pc_only">
				<ul>
					<li>
						<input type="checkbox" class="checkbox input required" data-name="terms 1" id="terms1" name="terms1" value="Y">
						<label for="terms1">Terms & Conditions
							<a href="javascript:;" class="term1_btn red_txt"> Details ></a>
						</label>
					</li>
					<li>
						<input type="checkbox" class="checkbox input required" data-name="terms 2" id="terms2" name="terms2" value="Y">
						<label for="terms2"> Privacy Policy 
							<a href="javascript:;" class="term2_btn red_txt"> Details ></a>
						</label>
					</li>
				</ul>
			</div>
			-->
			<div class="mb_only">
				<ul class="sign_list">
					<li>
						<p class="label"><?=$locale("id")?></p>
						<div>
							<input type="text" name="email" value="<?=$user_info["email"]?>" readonly>
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("password")?></p>
						<div>
							<input class="passwords" type="password" id="password" placeholder="Password">
						</div>
					</li>
					<li>
						<!-- <p class="label"><?=$locale("re_type_password")?></p> -->
						<p class="label">Verify password</p>
						<div>
							<input class="passwords" type="password" id="re_password" placeholder="Re-type password">
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("country")?></p>
						<div><select name="nation_no" class="required">
								<option value="" selected hidden>Choose </option>
							<?php
								foreach($nation_list AS $list) {
									$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
									if($user_info["nation_no"] == $list["idx"]) {
										echo "<option value='".$list["idx"]."' selected>".$nation."</option>";
									} else {
										echo "<option value='".$list["idx"]."'>".$nation."</option>";
									}
								}
							?>
							</select>
						</div>
					</li>
					<li>
						<p class="label">대한비만학회 회원 여부</p>
						<div>
							<input type="checkbox" class="checkbox" id="membership_status1" disabled checked>
							<label for="membership_status1"><i></i>회원</label>
							<input type="checkbox" class="checkbox" id="membership_status2" disabled>
							<label for="membership_status2"><i></i>비회원</label>
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("name")?></p>
						<div>
							<ul class="half_ul">
								<li>
									<input type="text" name="first_name" class="required" value="<?=$user_info["first_name"]?>" placeholder="First Name">
								</li>
								<li>
									<input type="text" name="last_name" class="required" value="<?=$user_info["last_name"]?>" placeholder="Last Name">
								</li>
							</ul>
						</div>
					</li>
					<li class="mo_korea_only">
						<p class="label"><span class="red_txt">*</span>성명</p>
						<div>
							<ul class="half_ul">
								<li>
									<input name="first_name_kor" type="text" placeholder="이름" maxlength="60">
								</li>
								<li>
									<input name="last_name_kor" type="text" placeholder="성" maxlength="60">
								</li>
							</ul>
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span>Title</p>
						<div>
							<select name="title" class="required">
								<option value="">Professor </option>
								<option value="">Professor </option>
								<option value="">Professor </option>
							</select>
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("affiliation")?></p>
						<div>
							<input type="text" name="affiliation" value="<?=$user_info["affiliation"]?>">
						</div>
					</li>
					<li class="mo_korea_only">
						<p class="label"><span class="red_txt">*</span>소속</p>
						<div>
							<input type="text" name="affiliation_kor" value="ICOMES 2023 사무국">
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("department")?></p>
						<div>
							<input type="text" name="department" value="<?=$user_info["department"]?>">
						</div>
					</li>
					<li class="mo_korea_only">
						<p class="label"><span class="red_txt">*</span>부서</p>
						<div>
							<input type="text" name="department_kor" value="인투온">
						</div>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span><?=$locale("phone")?></p>
						<ul class="half_ul">
							<li style="max-width:80px;">
								<select name="nation_tel" class="required"> 
									<option value="" selected hidden>select</option>
								<?php
									if($nation_tel) {
										echo "<option selected>".$nation_tel."</option>";
									}
								?>
								</select>
							</li>
							<li>
								<input type="text" name="phone" class="required" placeholder="010-0000-0000" value="<?=$phone?>"></td>
							</li>
						</ul>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span>Telephone Number</p>
						<ul class="half_ul">
							<li style="max-width:80px;">
								<select name="nation_tel" class="required"> 
									<option value="" selected hidden>select</option>
								<?php
									if($nation_tel) {
										echo "<option selected>".$nation_tel."</option>";
									}
								?>
								</select>
							</li>
							<li>
								<ul class="half_ul">
									<li><input type="text" name="telephone_num1" class="required" value="02"></li>
									<li><input type="text" name="telephone_num2" class="required" value="22852568"></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<p class="label"><span class="red_txt">*</span>Date of Birth</p>
						<div>
							<input maxlength="10" name="mo_date_of_birth" type="text" placeholder="YYYY-MM-DD" id="mb_datepicker">
						</div>
					</li>
				</ul>
			</div>
			<!--
			<div class="checkbox_wrap mb_only">
				<ul>
					<li>
						<input type="checkbox" class="checkbox input required" data-name="terms 1" id="mo_terms1" name="mo_terms1" value="Y">
						<label for="mo_terms1">Terms & Conditions
							<a href="javascript:;" class="term1_btn red_txt"> Details ></a>
						</label>
					</li>
					<li>
						<input type="checkbox" class="checkbox input required" data-name="terms 2" id="mo_terms2" name="mo_terms2" value="Y">
						<label for="mo_terms2"> Privacy Policy 
							<a href="javascript:;" class="term2_btn red_txt"> Details ></a>
						</label>
					</li>
				</ul>
			</div>
			-->
			<div class="btn_wrap">	
				<button type="button" class="btn green_btn long_btn submit_btn"><?=$locale("edit_btn")?></button>
			</div>
			<input type="hidden" name="ksola_member_check">
		</form>
			<input type="hidden" name="check_type" value="1">	
			<!--
			<form name="modify_form">
				<ul class="signup_list">
					<li>
						<p class="label"><?=$locale("id")?>*</p>
						<div>
							<input type="text" name="email" value="<?=$user_info["email"]?>" readonly>
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("password")?>*</p>
						<div>
							<input class="passwords" type="password" id="password" placeholder="Password">
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("re_type_password")?>*</p>
						<div>
							<input class="passwords" type="password" id="re_password" placeholder="Re-type password">
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("country")?>*</p>
						<div>
							<select name="nation_no" class="required">
								<option value="" selected hidden>Choose </option>
							<?php
								foreach($nation_list AS $list) {
									$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
									if($user_info["nation_no"] == $list["idx"]) {
										echo "<option value='".$list["idx"]."' selected>".$nation."</option>";
									} else {
										echo "<option value='".$list["idx"]."'>".$nation."</option>";
									}
								}
							?>
							</select>
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("name")?>*</p>
						<div class="name_div clearfix2">
							<input type="text" name="first_name" class="required" value="<?=$user_info["first_name"]?>" placeholder="First Name">
							<input type="text" name="last_name" class="required" value="<?=$user_info["last_name"]?>" placeholder="Last Name">
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("affiliation")?>*</p>
						<div>
							<input type="text" name="affiliation" value="<?=$user_info["affiliation"]?>">
						</div>
					</li>
					<li class="">
						<p class="label"><?=$locale("phone")?>*</p>
						<div>
							<div class="phone_div clearfix2">
								<select name="nation_tel" class="required"> 
									<option value="" selected hidden>select</option>
								<?php
									if($nation_tel) {
										echo "<option selected>".$nation_tel."</option>";
									}
								?>
								</select>
								<input type="text" name="phone" class="required" placeholder="010-0000-0000" value="<?=$phone?>"></td>
							</div>
						</div>
					</li>
					<li>
						<p class="label"><?=$locale("department")?></p>
						<div>
							<input type="text" name="department" value="<?=$user_info["department"]?>">
						</div>
					</li>
				</ul>
				<div class="btn_wrap">	
					<button type="button" class="form_btn submit_btn"><?=$locale("edit_btn")?></button>
				</div>
			</form>
			-->
		</div>
	</div>
</section>
<script src="./js/script/client/member.js"></script>
<script>
$(document).ready(function(){
	//비밀번호 입력 시 비밀번호 필수값으로 전환
	$("#password, #re_password").on("change", function(){
		$(this).attr("name", $(this).attr("id"));
		$("#password, #re_password").addClass("required");
	});

	$(".korean_only").on("click", function(){
		var url = "./pre_registration_korean_only.php";
		window.open(url,"Registration Receipt","width=793, height=2000, top=30, left=30");
	});

	$(document).on("click", ".submit_btn", function(){

		var formData = $("form[name=modify_form]").serializeArray();

		var process = inputCheck(formData,checkType);

		var data = process.data;

		var status = process.status;
        if(status) {

			//유효성
			//var licence_number = $("input[name=licence_number]").val();
			//var licence_number_len = licence_number.trim().length;
			//licence_number = (typeof(licence_number) != "undefined") ? licence_number : null;

			//if($("#license_checkbox").is(':checked') == false) {
			//	if(!licence_number || licence_number_len <= 0) {
			//		alert("Please enter the licence_number.");
			//		return;
			//	}
			//}

			//if(data.license_checkbox == "on") {
			//	data.licence_number = "Not applicable";
			//}

            if(confirm(locale(language.value)("account_modify_msg"))) {
                $.ajax({
                    url : PATH+"ajax/client/ajax_member.php",
                    type : "POST",
                    data : {
                        flag : "update",
                        data : data
                    },
                    dataType : "JSON",
                    success : function(res){
                        if(res.code == 200) {
                            alert(locale(language.value)("complet_account_modify"));
                            location.reload();
                        } else if(res.code == 400) {
                            alert(locale(language.value)("error_account_modify"));
                            return false;
                        } else {
                            alert(locale(language.value)("reject_msg"))
                            return false;
                        }
                    }
                });
		    }
        }
	});
});
</script>
<?php include_once('./include/footer.php');?>