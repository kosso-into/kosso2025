<?php include_once('./include/head.php');?>

<style>
	.ksola_signup {
		display:none;
	}
	.ksola_signup.on {
		display:revert;
	}
	.radio_list li:not(:first-child){
		margin-top:8px;
	}
	.section_div {
		margin-top:60px;
	}
</style>

<img src="./img/img_onsite_registration.png" class="w100" alt="">
<section class="container window_open">
	<div class="">
		<div class="term_wrap">
			<h3 class="title">Use of Personal Information</h3>
			<div class="term_box">
				<strong>Purpose</strong>
				<p>The Korean Society for the Study of Obesity (KSSO) provides online pre-registration services for ICOMES 2023. Based on your personal information, you can sign up for the conference and complete the payment for registration.</p>
				<strong>Collecting Personal Information</strong>
				<p>ICOMES 2023 requires you to provide your personal information to complete pre-registration online. You will be asked to enter your name, ID (email), password, date of birth, institution/organization, department, mobile, and telephone number.</p>
				<strong>Storing Personal Information</strong>
				<p>ICOMES 2023 will continue to store your personal information to provide you with useful services, such as conference updates and newsletters.</p>
			</div>
			<div class="term_label">
				<input type="checkbox" class="checkbox input required" data-name="terms 1" id="terms1" name="terms1" value="Y">
				<label for="terms1">I agree to the collection and use of my personal information. </label>
			</div>	
		</div>
		<div class="section_div">
			<h3 class="title">Participant Information<span class="mini_alert"><span class="red_txt font_inherit">*</span>All requested field (<span class="red_txt font_inherit">*</span>) should be completed.</span></h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th><span class="red_txt">*</span> Country</th>
							<td>
								<div class="max_normal">
									<select id="nation_no" name="nation_no" class="required"> 
										<option value="" selected hidden>Choose</option>
									<?php
										foreach($nation_list AS $n) {
											if($language == "ko") {
												$nation = $n["nation_ko"];
											} else {
												$nation = $n["nation_en"];
											}
									?>
										<option data-nt="<?= $n['nation_tel']; ?>" value="<?=$n["idx"]?>" <?=$select_option?>><?=$nation?></option>
									<?php
										}	
									?>
									</select>
								</div>
							</td>
						</tr>
						<tr class="korea_radio">
							<th class="nowrap"><span class="red_txt">*</span> 대한비만학회(KSSO) 회원 여부</th>
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
										</label>
									</div>
									<a href="https://www.kosso.or.kr/join/search_id.html" target="_blank" class="id_pw_find">KSSO 회원 ID/PW 찾기</a>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> ID(email)</th>
							<td>
								<div class="max_long responsive_float">
									<input type="text" name="email" class="required" maxlength="50">
								</div>
								<span class="mini_alert brown_txt">Please make sure you have entered your ID correctly as you can't modify it later.</span>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Password</th>
							<td>
								<div class="max_long">
									<input class="passwords" type="password" name="password" class="required" placeholder="Password" maxlength="60">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Verify Password</th>
							<td>
								<div class="max_long">
									<input class="passwords" type="password" name="password2" class="required" placeholder="Re-type Password" maxlength="60">
								</div>
							</td>
						</tr>
						<!-- Name -->
						<tr>
							<th><span class="red_txt">*</span> Name</th
							>
							<td class="name_td clearfix">
								<div class="max_normal">
									<input name="first_name" type="text" placeholder="First name" maxlength="60">
								</div>
								<div class="max_normal">
									<input name="last_name" type="text" placeholder="Last name" maxlength="60">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span> 성명</th>
							<td class="name_td clearfix">
								<div class="max_normal">
									<input name="first_name_kor" type="text" placeholder="이름" maxlength="60">
								</div>
								<div class="max_normal">
									<input name="last_name_kor" type="text" placeholder="성" maxlength="60">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Affiliation (Institute)</th>
							<td>
								<div class="max_long">
									<input type="text" name="affiliation" maxlength="100">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>소속</th>
							<td>
								<div class="max_long">
									<input type="text" name="affiliation_kor" maxlength="100">
								</div>
							</td>
						</tr>
						<!-- Department -->
						<tr>
							<th><span class="red_txt">*</span> Department</th>
							<td>
								<div class="max_long">
									<input type="text" name="department" maxlength="100">
								</div>
							</td>
						</tr>
						<tr class="korea_only">
							<th><span class="red_txt">*</span>부서</th>
							<td>
								<div class="max_long">
									<input type="text" name="department_kor" maxlength="100">
								</div>
							</td>
						</tr>
						<tr>
							<th rowspan = "2"><span class="red_txt">*</span>Mobile Phone Number</th>
							<td>
								<div class="max_normal phone">
									<input class="numbers" name="nation_tel" type="text" maxlength="60" readonly>
									<input name="phone" id="phone" type="text" maxlength="15">
								</div>
							</td>
						</tr>
						<tr>
							<td class="font_small brown_txt">Please enter your phone number including the country codes.<br/>(Example: 82 1012341234)</td>
						</tr>
						<!--2022-05-09 추가사항-->
						<tr>
							<th><span class="red_txt">*</span>Date of Birth</th>
							<td>
								<div class="max_normal">
									<input name="date_of_birth" pattern="^[0-9]+$"  type="text" placeholder="dd-mm-yyyy" id="datepicker" onKeyup="birthChk(this)"/>
									<!-- <span class="mini_alert red_txt red_alert">good</span> -->
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="section_div">
			<h3 class="title">Registration Information</h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th><span class="red_txt">*</span> Type of Participation</th>
							<td>
								<div class="max_normal">
									<select id="nation_no" name="nation_no" class="required"> 
										<option value="" selected>Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Type of Occupation</th>
							<td>
								<div class="max_normal">
									<select id="nation_no" name="nation_no" class="required"> 
										<option value="" selected>Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Category</th>
							<td>
								<div class="max_normal">
									<select id="nation_no" name="nation_no" class="required"> 
										<option value="" selected>Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
										<option value="">Choose</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> 평점 신청</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="apply" id="apply1">
									<label for="apply1"><i></i>신청함</label>	
									<input checked="" type="radio" class="new_radio" name="apply" id="apply2">
									<label for="apply2"><i></i>신청 안 함</label>	
								</div>
							</td>
						</tr>
						<tr>
							<th>의사 면허번호</th>
							<td>
								<div class="max_normal">
									<input type="text">
								</div>
							</td>
						</tr>
						<tr>
							<th>영양사 면허번호</th>
							<td>
								<div class="max_normal">
									<input type="text">
								</div>
							</td>
						</tr>
						<tr>
							<th>임상영양사 자격번호</th>
							<td>
								<div class="max_normal">
									<input type="text">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Others</th>
							<td>
								<ul class="radio_list">
									<li>
										<input type="radio" class="new_radio" name="other" id="other1">
										<label for="other1"><i></i>Welcome Reception</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="other" id="other2">
										<label for="other2"><i></i>Day 2 Breakfast Symposium</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="other" id="other3">
										<label for="other3"><i></i>Day 2 Luncheon Symposium</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="other" id="other4">
										<label for="other4"><i></i>Day 3 Breakfast Symposium</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="other" id="other5">
										<label for="other5"><i></i>Day 3 Luncheon Symposium</label>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> Where did you get the information about the ICOMES 2023?</th>
							<td>
								<ul class="radio_list">
									<li>
										<input type="radio" class="new_radio" name="information" id="information1">
										<label for="information1"><i></i>Website of the Korea Society of Obesity</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information2">
										<label for="information2"><i></i>Promotional email from the Korea Society of Obesity</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information3">
										<label for="information3"><i></i>Advertising email or the bulletin board from the relevant society</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information4">
										<label for="information4"><i></i>Information about affiliated companies/organizations</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information5">
										<label for="information5"><i></i>Invited as a speaker, chairperson, and panelist</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information6">
										<label for="information6"><i></i>Recommended by a professor</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information7">
										<label for="information7"><i></i>Recommended by acquaintances</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information8">
										<label for="information8"><i></i>Pharmaceutical company</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information9">
										<label for="information9"><i></i>Medical community (MEDI:GATE, Dr.Ville, etc.)</label>
									</li>
									<li>
										<input type="radio" class="new_radio" name="information" id="information10">
										<label for="information10"><i></i>Medical news and journals</label>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="section_div">
			<h3 class="title">Registration fee</h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th>Total</th>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="pager_btn_wrap half">
			<button id="submit" type="button" class="btn green_btn">Submit</button>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$("#user1").change(function(){
			if($("#user1").prop('checked') == true) {
				$(".ksola_signup").addClass("on");
			}
		});
		$("#user2").change(function(){
			if($("#user2").prop('checked') == true) {
				$(".ksola_signup").removeClass("on");
				$("input[name=ksola_member_type]").val("");
			}
		});
	});
</script>