<?php include_once('./include/head.php');?>

<?php
    $nation_query = "SELECT
                                *
                            FROM nation
                            ORDER BY 
                            idx = 25 DESC, nation_en ASC";
    $nation_list_query = $nation_query;
    $nation_list = get_data($nation_list_query);
?>
<script src="./js/script/client/onsite_registration.js"></script>
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
    .korea_only, .korea_radio{
        display:none;
    }
    .korea_only.on, .korea_radio.on{
        display:revert;
    }
    .mo_korea_only, .korea_radio{
        display:none;
    }
    .mo_korea_only.on, .korea_radio.on{
        display:revert;
    }
	input.tel_number {
    width: 32%;
	}

	input.tel_numbers {
		width: 32%;
		margin-left: 2px;
	}
</style>

<img src="./img/img_onsite_registration.jpg" class="onsite_main_img" alt="">
<section class="container window_open onsite_register">
	<div class="">
		<div class="term_wrap">
			<h3 class="title">개인정보 수집 및 이용에 관한 안내</h3>
			<div class="term_box">
			<strong>목적</strong>
                        <p>대한비만학회(KSSO)는 춘계학술대회를 위한 온라인 현장 등록 서비스를 제공합니다. 귀하의 개인정보를 기반으로 회원가입 및 등록 비용 결제를 완료할 수 있습니다.</p>
                        <strong>개인정보 수집</strong>
                        <p>대한비만학회 춘계학술대회에서는 온라인 현장 등록을 완료하기 위해 귀하께서 개인정보를 제공하셔야 합니다. 이름, 신분증(ID) 이메일, 비밀번호, 생년월일, 소속 기관/단체, 부서, 휴대전화 및 전화번호를 입력하도록 요청됩니다.</p>
                        <strong>개인정보 보관</strong>
                        <p>대한비만학회 춘계학술대회는 귀하에게 회의 업데이트 및 뉴스레터와 같은 유용한 서비스를 제공하기 위해 귀하의 개인정보를 저장할 것입니다.</p>
			</div>
			<div class="term_label">
				<input type="checkbox" class="checkbox input required" data-name="terms 1" id="terms1" name="terms1" value="Y">
				<label for="terms1" id="terms">개인정보 수집 및 이용에 동의합니다. </label>
			</div>	
		</div>
		<div class="section_div">
			<h3 class="title">개인정보<span class="mini_alert"><span class="red_txt">*</span>는 필수 입력입니다.</span></h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table abstract_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th class="nowrap"><span class="red_txt">*</span> 대한비만학회(KSSO) 회원 여부</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="user" id="user1" value="1">
									<label for="user1"><i></i>회원</label>
									<input checked type="radio" class="new_radio" name="user" id="user2" value="0">
									<label for="user2"><i></i>비회원</label>
                                    <input type="hidden" name="ksso_member_check">
                                    <input type="hidden" name="ksso_member_type">
								</div>
							</td>
						</tr>
						<tr class="ksola_signup">
							<th style="background-color:transparent"></th>
							<td>
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
								<span class="mini_alert brown_txt">가입 이후 수정이 불가능합니다. ID를 정확히 입력했는지 확인 부탁드립니다.</span>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>비밀번호</th>
							<td>
								<div class="max_long">
									<input class="passwords" type="password" name="password" class="required" placeholder="비밀번호" maxlength="60">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>비밀번호 재확인</th>
							<td>
								<div class="max_long">
									<input class="passwords" type="password" name="password2" class="required" placeholder="비밀번호 재확인" maxlength="60">
								</div>
							</td>
						</tr>
						<!-- Name -->
						<tr>
							<th><span class="red_txt">*</span> 성명</th>
							<td class="clearfix">
								<div class="max_long">
									<input name="first_name" type="text" placeholder="성명" maxlength="60">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>소속</th>
							<td>
								<div class="max_long">
									<input type="text" name="affiliation" maxlength="100">
								</div>
							</td>
						</tr>
						<!-- Department -->
						<tr>
							<th><span class="red_txt">*</span>부서</th>
							<td>
								<div class="max_long">
									<input type="text" name="department" maxlength="100">
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>휴대폰 번호</th>
							<td>
								<div class="max_long">
                                    <input class="tel_number tel_phone" name="telephone" type="text" maxlength="60">
                                    <input class="tel_numbers tel_phone" name="telephone1" type="text" maxlength="60">
                                    <input class="tel_numbers tel_phone2" name="telephone2" type="text" maxlength="60">
                                </div>
							</td>
						</tr>
					
					</tbody>
				</table>
			</div>
		</div>
		<div class="section_div">
			<h3 class="title">등록정보<span class="mini_alert"><span class="red_txt">*</span>는 필수 입력입니다.</span></h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table abstract_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th><span class="red_txt">*</span>참가 유형</th>
							<td>
								<div class="max_normal">
									<select id="participation_type" name="participation_type" class="required" onChange="calc_fee()">
									<option value="" selected hidden>필수 선택</option>
                            <?php
								        $attendance_arr = array();

                                        $attendance_arr[0]['name'] = "일반참석자";
                                        $attendance_arr[0]['value'] = "4";

                                        $attendance_arr[1]['name'] = "임원";
                                        $attendance_arr[1]['value'] = "0";

                                        $attendance_arr[2]['name'] = "좌장";
                                        $attendance_arr[2]['value'] = "2";

                                        $attendance_arr[3]['name'] = "연자";
                                        $attendance_arr[3]['value'] = "1";

                                        $attendance_arr[4]['name'] = "기자";
                                        $attendance_arr[4]['value'] = "6";
                                                                       
                                    foreach ($attendance_arr as $a_arr) {
                                        $selected =  $prev["attendance_type"] == $a_arr['value'] ? "selected" : "";
                                        echo '<option value="'.$a_arr['value'].'" '.$selected.'>'.$a_arr['name'].'</option>';
                                    }
								
							?> 
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>분야 구분</th>
							<td>
								<ul class="max_normal flex_hide">
                                    <li>
                                        <select id="occupation" name="occupation" class="required">
                                            <option value="" selected hidden>필수 선택</option>
                                            <?php
                                            $occupation_arr = array("의료", "영양", "운동", "기타", "전시(부스)");

                                            foreach($occupation_arr as $a_arr) {
                                                $selected = $prev["occupation_type"] === $a_arr ? "selected" : "";

                                                echo '<option value="'.$a_arr.'" '.$selected.'>'.$a_arr.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </li>
                                    <!-- 'Other' 선택시, ▼ li.hide_input에 'on' 클래스 추가 -->
                                    <li class="hide_input <?=$prev["occupation_type"] === "기타" ? "on" : ""?>">
                                        <input type="hidden" name="occupation_prev_input" value="<?=$prev["occupation_other_type"] ?? ""?>"/>
                                        <input type="text" id="occupation_input" name="occupation_input" value="<?=$prev["occupation_other_type"] ?? ""?>">
                                    </li>
								</ul>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span>참석 구분</th>
							<td>
								<ul class="max_normal flex_hide">
                                    <li>
                                        <select id="category" name="category" class="required" onChange="calc_fee()">
										<option value="" selected hidden>필수 선택</option>
                                    <?php
                                        $participation_arr = array();

                                        $participation_arr[0]['name'] = "교수";
                                        $participation_arr[0]['value'] = "Professor";

                                        $participation_arr[1]['name'] = "개원의";
                                        $participation_arr[1]['value'] = "Certified M.D.";

                                        $participation_arr[2]['name'] = "봉직의";
                                        $participation_arr[2]['value'] = "Public Health Doctor";

										//[240112] sujeong / 학회팀 요청 주석
                                        // $participation_arr[3]['name'] = "교직의";
                                        // $participation_arr[3]['value'] = "Corporate Member";

                                        $participation_arr[4]['name'] = "전임의";
                                        $participation_arr[4]['value'] = "Fellow";
                                        
                                        $participation_arr[5]['name'] = "수련의";
                                        $participation_arr[5]['value'] = "Intern";

                                        $participation_arr[6]['name'] = "전공의";
                                        $participation_arr[6]['value'] = "Resident";

                                        $participation_arr[7]['name'] = "영양사";
                                        $participation_arr[7]['value'] = "Nutritionist";

                                        $participation_arr[8]['name'] = "운동사";
                                        $participation_arr[8]['value'] = "Exercise Specialist";

                                        $participation_arr[9]['name'] = "간호사";
                                        $participation_arr[9]['value'] = "Nurse";

                                        $participation_arr[10]['name'] = "군의관";
                                        $participation_arr[10]['value'] = "Military Surgeon(군의관)";

                                        $participation_arr[11]['name'] = "공보의";
                                        $participation_arr[11]['value'] = "Pharmacist";

                                        $participation_arr[12]['name'] = "연구원";
                                        $participation_arr[12]['value'] = "Researcher";

                                        $participation_arr[13]['name'] = "학생";
                                        $participation_arr[13]['value'] = "Student";

                                        $participation_arr[14]['name'] = "전시(부스)";
                                        $participation_arr[14]['value'] = "Booth";

                                        $participation_arr[15]['name'] = "기타";
                                        $participation_arr[15]['value'] = "Others";

                                        foreach ($participation_arr as $a_arr) {
                                            $selected =  $prev["member_type"] == $a_arr['value'] ? "selected" : "";
                                            echo '<option value="'.$a_arr['value'].'" '.$selected.'>'.$a_arr['name'].'</option>';
                                        }
                                        ?>
                                        </select>
                                    </li>
                                    <!-- 'Other' 선택시, ▼ li.hide_input에 'on' 클래스 추가 -->
                                    <li class="hide_input <?=$prev["member_type"] === "Others" ? "on" : ""?>">
                                        <input type="hidden" name="title_prev_input" value="<?=$prev["member_other_type"] ?? ""?>"/>
                                        <input type="text" id="title_input" name="title_input" value="<?=$prev["member_other_type"] ?? ""?>">
                                    </li>
								</ul>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> 평점 신청</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="review" id="review1" value="1">
									<label for="review1"><i></i>신청함</label>
									<input checked="" type="radio" class="new_radio" name="review" id="review2" value="0">
									<label for="review2"><i></i>신청 안 함</label>
								</div>
							</td>
						</tr>
						
						<tr class="review_sub_list">
							<th>의사 면허번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="licence_number" id="licence_number">
								</div>
							</td>
						</tr>
						<tr class="review_sub_list">
							<th>전문의 번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="specialty_number" id="specialty_number">
								</div>
							</td>
						</tr>
						<tr class="review_sub_list">
							<th>영양사 면허번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="nutritionist_number" id="nutritionist_number">
								</div>
							</td>
						</tr>
						<tr class="review_sub_list">
							<th>임상영양사 자격번호</th>
							<td>
								<div class="max_normal">
									<input type="text" name="dietitian_number" id="dietitian_number">
								</div>
							</td>
						</tr>
						
						<tr class="review_sub_list">
							<th>생년월일</th>
							<td>
								<div class="max_normal">
									<input name="date_of_birth" pattern="^[0-9]+$"  type="text" placeholder="yyyy-mm-dd" id="datepicker" onKeyup="birthChk(this)"/>
									<!-- <span class="mini_alert red_txt red_alert">good</span> -->
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">* </span>운동사 평점신청</th>
							<td>
								<div class="label_wrap">
									<input type="radio" class="new_radio" name="review3" id="review3" value="1">
									<label for="review3"><i></i>신청함</label>
									<input checked="" type="radio" class="new_radio" name="review3" id="review4" value="0">
									<label for="review4"><i></i>신청 안 함</label>
								</div>
							</td>
						</tr>
						<tr>
							<th><span class="red_txt">*</span> 기타</th>
							<td>
								<ul class="radio_list">
                                    <?php
                                        $others_arr = array(
											"Satellite Symposium",
                                            "Welcome Reception",
                                            "Breakfast Symposium",
                                            "Luncheon Symposium"
										);

                                        for($i = 1; $i <= count($others_arr); $i++) {
                                            $content = $others_arr[$i-1];
                                            $checked = "";

                                            if($content && in_array($content, $prev_list)){
                                                $checked = "checked";
                                            }

                                            echo "
                                            <li>
                                                <input type='checkbox' class='checkbox' id='others".$i."' name='others' value='".$others_arr[$i-1]."' ".$checked.">
                                                <label for='others".$i."'>
                                                    <i></i>".$others_arr[$i-1]."
                                                </label>
                                            </li>
                                            ";

                                        }
                                    ?>
								</ul>
							</td>
						</tr>
                      
						<tr>
							<th><span class="red_txt">*</span>개최 정보는 어디에서 얻었나요?</th>
							<td>
								<ul class="radio_list">
                                    <?php
                                        $conference_info_arr = array(
                                            "대한비만학회 홈페이지",
                                            "대한비만학회 홍보 이메일",
                                            "관련 학회의 광고 이메일 또는 게시판",
                                            "제휴 회사/기관에 관한 정보",
                                            "발표자, 모더레이터 및 토론 참가자로 초청",
                                            "교수님의 추천",
                                            "지인의 추천",
                                            "제약회사",
                                            "의료 커뮤니티 (MEDI:GATE, Dr.Ville 등)",
                                            "의학 뉴스 및 저널"
                                        );

                                        $prev_list = explode("*", $prev["conference_info"] ?? "");

                                        for($i = 1; $i <= count($conference_info_arr); $i++) {
                                            $content = $conference_info_arr[$i-1];
                                            $checked = "";

                                            if($content && in_array($content, $prev_list)){
                                                $checked = "checked";
                                            }

                                            echo "
                                            <li>
                                                <input type='checkbox' class='checkbox' id='list".$i."' name='list' value='".$conference_info_arr[$i-1]."' ".$checked.">
                                                <label for='list".$i."'>
                                                    <i></i>".$conference_info_arr[$i-1]."
                                                </label>
                                            </li>
                                            ";

                                        }
                                    ?>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="section_div">
			<h3 class="title">등록비</h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="table detail_table">
					<colgroup>
						<col class="col_th"/>
						<col width="*"/>
					</colgroup>
					<tbody>
						<tr>
							<th>총 등록요금</th>
							<td><input type="text" id="reg_fee" name="reg_fee" style="border: none; background: transparent;" placeholder="0" readonly value="<?=$prev["calc_fee"] || $prev["calc_fee"] == 0 ? number_format($prev["calc_fee"]) : ""?>"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="pager_btn_wrap half">
			<button id="submit" type="button" class="btn green_btn" onclick="submit()">제출하기</button>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
        $("select[name=nation_no]").change(function(){

            var value = $(this).val();

            if (value == 25){

                $(".korea_only").addClass("on");
                $(".korea_radio").addClass("on");
            } else {
                $(".korea_radio").removeClass("on");
                $(".korea_only").removeClass("on");
                $(".ksola_signup").removeClass("on");

                remove_value();
                $("#user2").prop('checked', true);
            }

            var nt = $("#nation_no option:selected").data("nt");
            $("input[name=nation_tel]").val(nt);
            $("input[name=tel_nation_tel]").val(nt);


            $("input[name=ksso_member_type]").val('');
            $("input[name=ksso_member_check]").val('');

        });

        $("input[name='user']:radio").change(function (){
            calc_fee();
        });

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

        $("select[name=category]").on("change", function(){
            const val = $(this).val();
            const prevTitle = $("input[name=title_prev_input]").val() ?? "";

            if(val == 'Others'){
                if(!$(this).parent("li").next('.hide_input').hasClass("on")){
                    $(this).parent("li").next('.hide_input').addClass("on");
                }
            }else{
                $(this).parent("li").next('.hide_input').removeClass("on");
                $("input[name=title_input]").val(prevTitle);
            }
        });

        $("select[name=occupation]").on("change", function(){
            const val2 = $(this).val();
            const prevTitle2 = $("input[name=occupation_prev_input]").val() ?? "";

            if(val2 == 'Others'){
                if(!$(this).parent("li").next('.hide_input').hasClass("on")){
                    $(this).parent("li").next('.hide_input').addClass("on");
                }
            }else{
                $(this).parent("li").next('.hide_input').removeClass("on");
                $("input[name=occupation_input]").val(prevTitle2);
            }
        });
	});
</script>