<?php
include_once('./include/head.php');
include_once('./include/header.php');


//경로 주의
if ($_SERVER["HTTP_HOST"] == "www.icomes.or.kr") {
	echo "<script>location.replace('https://icomes.or.kr/main/registration.php')</script>";
}


$sql_during =	"SELECT
						IF(NOW() BETWEEN '2022-08-18 17:00:00' AND '2022-08-18 22:00:00', 'Y', 'N') AS yn
					FROM info_event";
$during_yn = sql_fetch($sql_during)['yn'];
//!=="Y"
if ($during_yn !== "Y") {

$member_idx = $_SESSION["USER"]['idx'];
$sql_info = "
			SELECT
				m.email, m.first_name, m.last_name, m.first_name_kor, m.last_name_kor, n.nation_en, m.affiliation, m.department, m.phone, m.ksola_member_status
			FROM member m
			LEFT JOIN nation n
			ON m.nation_no = n.idx
			WHERE m.idx = {$member_idx}
			";
$member_data = sql_fetch($sql_info);
?>

<!-- <section class="submit_application container"> -->
<!--     <div class="inner"> -->
<!--         <div class="sub_banner"> -->
<!--             <h1>Online Registration</h1> -->
<!--         </div> -->
<!--         <section class="coming"> -->
<!--             <img class="coming" src="./img/coming.png" /> -->
<!--             <!-- <div class="container"> -->
<!--                 <div class="sub_banner"> -->
<!-- 					<h5>Pre-Registration<br>has been closed</h5> -->
<!-- 				</div> -->
<!--             </div> -->
<!--         </section> -->
<!--     </div> -->
<!-- </section> -->

<section class="container online_register submit_application">
	<h1 class="page_title">Online Registration</h1>
    <div class="inner">
        <!-- <div class="sub_banner"> -->
        <!--     <h1>Online Registration</h1> -->
        <!-- </div> -->
        <div class="input_area">
            <h3 class="title">
				<?= $locale("participant_tit") ?>
				<p class="mt10"><span class="red_txt">*</span> In the "My Page - Account" section, users have the ability to edit their personal information.</p>
			</h3>
			<div class="table_wrap detail_table_common x_scroll">
				<table class="c_table detail_table">
					<colgroup>
						<col class="submission_col">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th>ID(email)</th>
							<td><a href="mailto:<?= $member_data['email']?>" class="font_inherit link"><?= $member_data['email'] ?></a></td>
						</tr>
						<tr>
							<th>Name</th>
							<td><?= $member_data["first_name"]." ".$member_data["last_name"]?></td>
						</tr>
						<tr>
							<th>성명</th>
							<td><?= $member_data['last_name_kor']." ".$member_data['first_name_kor']?></td>
						</tr>
						<tr>
							<th>Country</th>
							<td><?= $member_data['nation_en']?></td>
						</tr>
						<tr>
							<th>Affiliation</th>
							<td><?= $member_data['department']?> of , <?= $member_data['affiliation']?></td>
						</tr>
						<tr>
							<th>Phone Number</th>
							<td><?= $member_data['phone']?></td>
						</tr>
						<tr>
							<th>Member of KSSO</th>
							<td><?= $member_data['ksola_member_status'] == 0 ? 'Not Member' : 'Member'?></td>
						</tr>
					</tbody>
				</table>
			</div>
            <form name="registration_form" class="registration_form">
			<!-- onsubmit="return false" -->
                <ul class="basic_ul">
                    <li>
						<p class="mb10"><span class="red_txt">*</span> All requested filed(<span class="red_txt">*</span>) should be completed</p>
                        <p class="label">Type of Participation <span class="red_txt">*</span></p>
                        <select id="participation" >
							<option value="" selected hidden>Choose</option>
							<?php
								$participation_arr = array("Committee", "Speaker", "ChairPerson", "Panel", "Participants");
								foreach($participation_arr as $a_arr) {
									echo '<option value="'.$a_arr.'">'.$a_arr.'</option>';
								}
							?>
                        </select>
                    </li>
                    <li>
                        <p class="label">Category<span class="red_txt">*</span></p>
                        <select id="category" name="category" onchange="test3()">
							<option value="" selected hidden>Choose</option>
							<?php
								$category_arr = array("Certified M.D.", "Professor", "Fellow", "Resident", "Researcher", "Nutritionist", "Exercise Specialist", "Nurse", "Pharmacist", "Surgeon(Military)", "Public Health Doctor", "Corporate Member", "Student", "Others");

								foreach($category_arr as $a_arr) {
									echo '<option value="'.$a_arr.'">'.$a_arr.'</option>';
								}
							?>
                        </select>
                    </li>
                    <li id="chk_org">
                        <p class="label">평점신청 <span class="red_txt">*</span></p>
                        <div>
                            <div class="radio_wrap">
                                <ul class="flex">
                                    <li>
                                        <input type="radio" class="new_radio registration_check" id="radio1" name="rating" value="1">
										<label for="radio1"><i></i>필요</label>
                                    </li>
                                    <li>
                                        <input type="radio" class="new_radio registration_check" id="radio2" name="rating" value="0">
										<label for="radio2"><i></i>불필요
											<!-- <span class="is_scroe_txt red_txt">(Overseas participants, please check '미신청').</span> -->
										</label>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="label">
							의사면허번호 <span class="red_txt">*</span>
							<input type="checkbox" id="app1" class="checkbox">
							<label for="app1">
								<i></i> Not applicable
							</label>
						</p>
                        <input type="text">
                    </li>
                    <li>
                        <p class="label">
							전문의번호 <span class="red_txt">*</span>
							<input type="checkbox" id="app2" class="checkbox">
							<label for="app2">
								<i></i> Not applicable
							</label>
						</p>
                        <input type="text">
                    </li>
                    <li>
                        <p class="label">
							영양사 면허번호 <span class="red_txt">*</span>
							<input type="checkbox" id="app3" class="checkbox">
							<label for="app3">
								<i></i> Not applicable
							</label>
						</p>
                        <input type="text">
                    </li>
                    <li>
                        <p class="label type2">Others <span class="red_txt">*</span></p>
                        <div class="table_wrap detail_table_common x_scroll">
							<table class="c_table detail_table">
								<colgroup>
									<col class="submission_col">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th class="border_r_none">Welcome Reception</th>
										<th>September 7(Thu)</th>
										<td>
											<div class="radio_wrap">
												<ul class="flex">
													<li>
														<input type="checkbox" id="yes1" class="checkbox" name="row1">
														<label for="yes1">
															<i></i> Yes
														</label>
													</li>
													<li>
														<input type="checkbox" id="no1" class="checkbox" name="row1">
														<label for="no1">
															<i></i> No
														</label>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<th class="border_r_none">Day 2 Breakfast Symposium</th>
										<th>September 8(Fri)</th>
										<td>
											<div class="radio_wrap">
												<ul class="flex">
													<li>
														<input type="checkbox" id="yes2" class="checkbox" name="row2">
														<label for="yes2">
															<i></i> Yes
														</label>
													</li>
													<li>
														<input type="checkbox" id="no2" class="checkbox" name="row2">
														<label for="no2">
															<i></i> No
														</label>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<th class="border_r_none">Day 2 Luncheon Symposium</th>
										<th>September 8(Fri)</th>
										<td>
											<div class="radio_wrap">
												<ul class="flex">
													<li>
														<input type="checkbox" id="yes3" class="checkbox" name="row3">
														<label for="yes3">
															<i></i> Yes
														</label>
													</li>
													<li>
														<input type="checkbox" id="no3" class="checkbox" name="row3">
														<label for="no3">
															<i></i> No
														</label>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<th class="border_r_none">Day 3 Breakfast Symposium</th>
										<th>September 9(Sat)</th>
										<td>
											<div class="radio_wrap">
												<ul class="flex">
													<li>
														<input type="checkbox" id="yes4" class="checkbox" name="row4">
														<label for="yes4">
															<i></i> Yes
														</label>
													</li>
													<li>
														<input type="checkbox" id="no4" class="checkbox" name="row4">
														<label for="no4">
															<i></i> No
														</label>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<th class="border_r_none">Day 3 Luncheon Symposium</th>
										<th>September 9(Sat)</th>
										<td>
											<div class="radio_wrap">
												<ul class="flex">
													<li>
														<input type="checkbox" id="yes5" class="checkbox" name="row5">
														<label for="yes5">
															<i></i> Yes
														</label>
													</li>
													<li>
														<input type="checkbox" id="no5" class="checkbox" name="row5">
														<label for="no5">
															<i></i> No
														</label>
													</li>
												</ul>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
                    </li>
                    <li>
                        <p class="label">
							Where did you get the information about the conference? <span class="red_txt">*</span>
						</p>
                        <ul class="chk_list">
							<li>
								<input type="checkbox" class="checkbox" id="list1">
								<label for="list1">
									<i></i>Website of the Korea Society of Obesity
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list2">
								<label for="list2">
									<i></i>Promotional email from the Korea Society of Obesity
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list3">
								<label for="list3">
									<i></i>Advertising email or the bulletin board from the relevant society
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list4">
								<label for="list4">
									<i></i>Information about affiliated companies/organizations
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list5">
								<label for="list5">
									<i></i>Invited as a speaker, moderator, and panelist
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list6">
								<label for="list6">
									<i></i>Recommended by a professor
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list7">
								<label for="list7">
									<i></i>Recommended by acquaintances
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list8">
								<label for="list8">
									<i></i>Pharmaceutical company
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list9">
								<label for="list9">
									<i></i>Medical community (MEDI:GATE, Dr.Ville, etc.)
								</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="list10">
								<label for="list10">
									<i></i>Medical News and Journals
								</label>
							</li>
                        </ul>
                    </li>
                    <li>
                        <p class="label type2">Payment</p>
                        <div class="table_wrap detail_table_common x_scroll">
							<table class="c_table detail_table">
								<colgroup>
									<col class="col_th_s">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th>Registration Fee</th>
										<td><input type="text" id="regFee" placeholder="0" disabled="true"></td>
									</tr>
									<tr>
										<th>Promotion Code</th>
										<td>
											<ul class="half_ul" style="min-width:300px;">
												<li><input type="text" placeholder="Promotion code"></li>
												<li><input type="text" placeholder="Recommended by"></li>
												<li class="flex_none">
													<button class="btn gray2_btn form_btn">Apply</button>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th class="red_txt">Total Registration Fee</th>
										<td><input type="text" id="totalRegFee" placeholder="0" disabled="true"></td>
									</tr>
									<tr>
										<th>Payment Methods</th>
										<td>
											<div class="radio_wrap">
												<ul class="flex">
													<li>
														<input type="radio" id="credit" class="new_radio" name="bank">
														<label for="credit">
															<i></i>Credit card
														</label>
													</li>
													<li>
														<input type="radio" id="bank" class="new_radio" name="bank">
														<label for="bank">
															<i></i>Bank transfer
														</label>
													</li>
												</ul>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
                    </li>
                </ul>
				
            </form>
            <div class="btn_wrap gap">
                <!-- 활성화 시, gray_btn 제거 & green_btn 추가 -->
                <button type="button" class="btn online_btn gray_btn prev_btn pointer">
					<!-- <?= $locale("prev_btn") ?> -->
					Previous
				</button>
                <button type="button" class="btn online_btn green_btn next_btn pointer" id="submit">
					<!-- <?= $locale("next_btn") ?> -->
					Submit
				</button>
            </div>
        </div>
    </div>
</section>

<?php
} else {
	$nation_query = "SELECT
							*
						FROM nation
						ORDER BY 
						idx = 25 DESC, nation_en ASC";
	//$nation_list_query = $_nation_query;
	$nation_list_query = $nation_query;
	$nation_list = get_data($nation_list_query);

	if (!empty($_SESSION["USER"])) {
		$user_info = $_SESSION["USER"];
	} else {
		echo "<script>alert('Need to login'); window.location.replace(PATH+'login.php');</script>";
		exit;
	}

	$_arr_phone = explode("-", $user_info["phone"]);
	$nation_tel = $_arr_phone[0];
	$phone = implode("-", array_splice($_arr_phone, 1));

	$sql_price =	"SELECT
							type_en, idx
						FROM info_event_price
						WHERE is_deleted = 'N'
						ORDER BY FIELD(idx, 1,2,3,4,5,6,7,8,9,10,12,11)";
	$price = get_data($sql_price);
?>
<style>
/*2022-04-14 ldh 추가*/
.gray_btn {
    pointer-events: none;
}

.is_scroe_txt {
    font-size: 24px;
}
</style>

<section class="container online_register submit_application">
    <div class="inner">
        <div class="sub_banner">
            <h1>Online Registration</h1>
        </div>
        <div class="input_area">
            <h3 class="title"><?= $locale("participant_tit") ?></h3>
            <div class="details details_bg">
                <ul>
                    <li>* After pre-registration and payment are completed, a registration approval letter will be sent
                        to the email you entered. If you do not receive an e-mail after registration is complete, please
                        reply to the office.<br />(mail : icomes_registration@into-on.com)</li>
                    <li>* Please register doctor’s license number for GPA</li>
                    <li class="red_txt">※ Please fill out all registration information below in English. </li>
                </ul>
            </div>
            <form name="registration_form" class="registration_form" onsubmit="return false">
                <ul class="basic_ul">
                    <li>
                        <p class="label"><?= $locale("online_offline") ?> <span class="red_txt">*</span></p>
                        <div>
                            <div class="radio_wrap">
                                <ul class="flex">
                                    <li>
                                        <input checked type="radio" class="radio registration_check" id="offline"
                                            name="registration_type" value="0"><label for="offline">
                                            <!--<?= $locale("online_offline_select3") ?>-->On-site
                                        </label>
                                    </li>
                                    <!-- offline 인원 마감으로 인한 선택 제외 210804-->
                                    <!-- <li> -->
                                    <!-- 	<input onchange="alert_check()" type="radio" class="radio required" id="online" name="registration_type" value="1"><label for="online"><?= $locale("online_offline_select2") ?>(Overseas attendees only)</label> -->
                                    <!-- </li> -->
                                    <!-- offline 인원 마감으로 인한 선택 제외 210804-->
                                    <!--
								<li>
									<input type="radio" class="radio required" id="onoff" name="attendance_type" value="2"><label for="onoff"><?= $locale("online_offline_select1") ?></label>
								</li>-->
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li id="chk_org">
                        <p class="label">평점신청(Korean Only) <span class="red_txt">*</span></p>
                        <div>
                            <div class="radio_wrap">
                                <ul class="flex">
                                    <li>
                                        <input type="radio" class="radio registration_check" id="radio1" name="rating"
                                            value="1"><label for="radio1">신청</label>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio registration_check" id="radio2" name="rating"
                                            value="0"><label for="radio2">미신청 <span
                                                class="is_scroe_txt red_txt">(Overseas participants, please check
                                                '미신청').</span></label>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="label">
                            <!--<?= $locale("member_status") ?>-->KSSO Member Status(Korean Only) <span
                                class="red_txt">*</span>
                        </p>
                        <div>
                            <div class="radio_wrap">
                                <ul class="flex">
                                    <li>
                                        <input type="radio" class="radio registration_check" id="member"
                                            name="member_status" value="1"><label
                                            for="member"><?= $locale("member_status_select1") ?></label>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio registration_check" id="non_member"
                                            name="member_status" value="0"><label
                                            for="non_member"><?= $locale("member_status_select2") ?></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="academy_num_box" style="display: none;"> -->
                    <!-- 	<p class="label">KSSO Academy number <span class="red_txt"></span></p> -->
                    <!-- 	<div> -->
                    <!-- 		<input name="academy_number" type="text" onchange="write_check()"> -->
                    <!-- 	</div> -->
                    <!-- </li> -->
                    <li>
                        <p class="label"><?= $locale("id") ?> <span class="red_txt">*</span></p>
                        <div>
                            <input class="registration_check" type="text"
                                value="<?= isset($user_info["email"]) ? $user_info["email"] : "" ?>" name="email"
                                readonly>
                        </div>
                    </li>
                    <li>
                        <p class="label"><?= $locale("country") ?> <span class="red_txt">*</span></p>
                        <div>
                            <select class="registration_check" name="nation_no" onchange="alert_check()">
                                <option value="" selected hidden>Choose</option>
                                <?php
									foreach ($nation_list as $list) {
										$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
										if ($user_info["nation_no"] == $list["idx"]) {
											echo "<option value='" . $list["idx"] . "' selected>" . $nation . "</option>";
										} else {
											echo "<option value='" . $list["idx"] . "'>" . $nation . "</option>";
										}
									}
									?>
                            </select>
                        </div>
                    </li>
                    <li>
                        <p class="label"><?= $locale("name") ?> <span class="red_txt">*</span></p>
                        <div class="name_div clearfix2">
                            <input class="registration_check" type="text"
                                value="<?= isset($user_info["first_name"]) ? $user_info["first_name"] : "" ?>"
                                name="first_name" readonly>
                            <input class="registration_check" type="text"
                                value="<?= isset($user_info["last_name"]) ? $user_info["last_name"] : "" ?>"
                                name="last_name" readonly>
                        </div>
                    </li>
                    <li>
                        <p class="label"><?= $locale("phone") ?> <span class="red_txt">*</span></p>
                        <div class="phone_div clearfix2">
                            <select class="registration_check" name="nation_tel">
                                <option value="<?= $nation_tel ?>" selected><?= $nation_tel ?></option>
                            </select>
                            <input class="registration_check" type="text" value="<?= $phone ?>" name="phone" readonly>
                        </div>
                    </li>
                    <li>
                        <p class="label">
                            <!--<?= $locale("registration_type") ?>-->Attendance type <span class="red_txt">*</span>
                        </p>
                        <div>
                            <div class="radio_wrap">
                                <ul class="flex">
                                    <li>
                                        <input type="radio" class="radio registration_check" id="r_type1"
                                            name="attendance_type" value="0"><label
                                            for="r_type1"><?= $locale("registration_type_select1") ?></label>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio registration_check" id="r_type2"
                                            name="attendance_type" value="1"><label for="r_type2">Speaker / Chairman /
                                            Panel</label>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio registration_check" id="r_type3"
                                            name="attendance_type" value="2"><label
                                            for="r_type3"><?= $locale("registration_type_select3") ?></label>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio registration_check" id="r_type4"
                                            name="attendance_type" value="3"><label for="r_type4">Sponsors</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="write_position"><input name="write_position" type="text" placeholder="position"
                                onchange="write_check()"></div>
                    </li>

                    <script>
                    $(document).ready(function() {
                        $("input[name='attendance_type']").click(function() {
                            //console.log($(this).val());
                            if ($(this).val() == "2") {
                                //$(".write_position").addClass("on");
                                $(".write_position").show();
                                //$("input[name=write_position]").addClass("registration_check");
                            } else {
                                //$(".write_position").removeClass("on");
                                $(".write_position").hide();
                                $("input[name=write_position]").val("");
                                //$("input[name=write_position]").removeClass("registration_check");
                            }
                        });
                    });
                    </script>

                    <li id="chk_member_type">
                        <p class="label"><?= $locale("member_type") ?> <span class="red_txt">*</span></p>
                        <div>
                            <select class="registration_check" name="member_type">
                                <option value="" selected hidden>Choose</option>
                                <?php
									foreach ($price as $pr) {
									?>
                                <option value="<?= $pr['idx'] ?>"><?= $pr['type_en'] ?></option>
                                <?php
									}
									?>
                            </select>
                        </div>
                    </li>
                    <li>
                        <p class="label"><?= $locale("affiliation") ?> <span class="red_txt">*</span></p>
                        <div>
                            <input class="registration_check" maxlength="50" type="text" name="affiliation"
                                value="<?= $user_info["affiliation"] ?>">
                        </div>
                    </li>
                    <li>
                        <p class="label"><?= $locale("department") ?></p>
                        <div>
                            <input type="text" name="department" maxlength="50" value="<?= $user_info["department"] ?>">
                        </div>
                    </li>
                    <li>
                        <p class="label">
                            <!--<?= $locale("licence_number") ?>-->License number <span class="red_txt">*</span>
                            <input type="checkbox" class="radio license_check" id="license_checkbox"
                                name="license_checkbox"
                                <?= ($user_info["licence_number"] == "Not applicable") ? "checked" : ""; ?>>
                            <label for="license_checkbox" class="tight license_check">Not applicable</label>
                        </p>
                        <input class="license_check"
                            <?= ($user_info["licence_number"] == "Not applicable") ? "disabled" : ""; ?> type="text"
                            value="<?= ($user_info["licence_number"] == "Not applicable") ? "" : $user_info["licence_number"]; ?>"
                            name="licence_number" maxlength="50">
                    </li>
                    <li>
                        <p class="label"><?= $locale("register_path") ?><span class="red_txt"></span></p>
                        <div>
                            <select name="register_path">
                                <option selected hidden>Choose</option>
                                <!--
							<option value="의협신문">의협신문</option>
							<option value="유관학회 메일 또는 게시판">유관학회 메일 또는 게시판</option>
							<option value="대한비만학회 메일">대한비만학회 메일</option>
							<option value="의사, 영양사, 운동사 각 협회 공지">의사, 영양사, 운동사 각 협회 공지</option>
							<option value="제약회사">제약회사</option>
							<option value="지인을 통해">지인을 통해</option>
							<option value="학교 내 교수">학교 내 교수</option>
							<option value="etc">기타(주관식)</option>
							-->
                                <option value="ICOMES 2022 promotional mail">ICOMES 2022 promotional mail</option>
                                <option value="ICOMES 2022 website">ICOMES 2022 website</option>
                                <option value="Bulletin board on the website of the relevant society">Bulletin board on
                                    the website of the relevant society</option>
                                <option value="Korean Society of Obesity website bulletin board">Korean Society of
                                    Obesity website bulletin board</option>
                                <option value="Recommendation from an acquaintance">Recommendation from an acquaintance
                                </option>
                                <option value="Professor recommendation">Professor recommendation</option>
                                <option value="Medical newspaper">Medical newspaper</option>
                                <option value="Pharmaceutical company">Pharmaceutical company</option>
                                <option value="Other (subjective)">Other (subjective)</option>
                            </select>
                            <!--기타 선택시 input 옆에 추가되어야 함-->
                            <input type="text" class="etc1" value="" placeholder="Please enter other information.">
                        </div>
                    </li>
                    <!-- <li> -->
                    <!-- 	<p class="label">Congress Banquet Ceremony <span class="red_txt">*</span> -->
                    <!-- 		<br> -->
                    <!-- 		<span class="subinfo" style="color: #999999; display: block; margin: 10px 0 0;">Date & Time : Sep 2(Fri)   |   KST 06:00p.m ~ 09:30p.m   |   Room 5(6F)</span> -->
                    <!-- 	</p> -->
                    <!-- 	<div> -->
                    <!-- 		<div class="radio_wrap"> -->
                    <!-- 			<ul class="flex"> -->
                    <!-- 				<li> -->
                    <!-- 					<input type="radio" class="radio registration_check" id="banquet1" name="banquet_yn" value="Y"><label for="banquet1">Attend</label> -->
                    <!-- 				</li> -->
                    <!-- 				<li> -->
                    <!-- 					<input type="radio" class="radio registration_check" id="banquet2" name="banquet_yn" value="N"><label for="banquet2">Absent</label> -->
                    <!-- 				</li> -->
                    <!-- 			</ul> -->
                    <!-- 		</div> -->
                    <!-- 	</div> -->
                    <!-- </li> -->
                </ul>
                <!-- 비자 신청을 위한 초대장 희망 관련 input append -->
                <ul class="basic_ul want_invitation_wrap">
                    <li>
                        <div>
                            <input type="checkbox" class="checkbox" id="checkbox5" name="invitation">
                            <label for="checkbox5">I required an Invitation letter for VISA application</label>
                        </div>
                    </li>
                    <li>
                        <p class="label">Name of Passport</p>
                        <div class="name_div clearfix2">
                            <input class="registration_check" type="text"
                                value="<?= isset($user_info["first_name"]) ? $user_info["first_name"] : "" ?>"
                                name="first_name" readonly>
                            <input class="registration_check" type="text"
                                value="<?= isset($user_info["last_name"]) ? $user_info["last_name"] : "" ?>"
                                name="last_name" readonly>
                        </div>
                    </li>
                    <li>
                        <p class="label"><?= $locale("country") ?> <span class="red_txt"></span></p>
                        <div>
                            <select class="registration_check" name="invitation_nation_no">
                                <option value="" selected hidden>Choose</option>
                                <?php
									foreach ($nation_list as $list) {
										$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
										if ($user_info["nation_no"] == $list["idx"]) {
											echo "<option value='" . $list["idx"] . "' selected>" . $nation . "</option>";
										} else {
											echo "<option value='" . $list["idx"] . "'>" . $nation . "</option>";
										}
									}
									?>
                            </select>
                        </div>
                    </li>
                    <li>
                        <p class="label">Address</p>
                        <input type="text" name="address" maxlength="50">
                        <div id="address_kakao" class="name_div clearfix2">

                            <!--<input type="text" name="address" id="address_input" readonly>-->
                            <!--<input type="text" name="address_detail" id="address_detail">-->
                        </div>
                    </li>
                    <li>
                        <p class="label">Passport Number</p>
                        <div><input name="passport_number" type="text" maxlength="50"></div>
                    </li>
                    <li>
                        <p class="label">Date of Birth</p>
                        <div><input name="date_of_birth" type="text" class="date_input"></div>
                    </li>
                    <li>
                        <p class="label">Date of Issue</p>
                        <div><input name="date_of_issue" type="text" class="date_input"></div>
                    </li>
                    <li>
                        <p class="label">Date of Expiry</p>
                        <div><input name="date_of_expiry" type="text" class="date_input"></div>
                    </li>
                    <li>
                        <p class="label">Length of Visit</p>
                        <div><input maxlength="50" name="length_of_visit" type="text"></div>
                    </li>
                </ul>
                <!-- 기존 form 마크업
				<div class="table_wrap c_table_wrap input_table">
					<table class="c_table">
						<tr>
							<th><?= $locale("online_offline") ?> *</th>
							<td>
								<div class="radio_wrap">
									<ul class="flex">
										<li>
											<input type="radio" class="radio required" id="online" name="attendance_type" value="1"><label for="online"><?= $locale("online_offline_select2") ?></label>
										</li>
										<li>
											<input type="radio" class="radio required" id="offline" name="attendance_type" value="0"><label for="offline"><?= $locale("online_offline_select3") ?></label>
										</li>
										<li>
											<input type="radio" class="radio required" id="onoff" name="attendance_type" value="2"><label for="onoff"><?= $locale("online_offline_select1") ?></label>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr id="chk_org">
							<th><?= $locale("applied_review") ?> *</th>
							<td>
								<div class="radio_wrap">
									<ul class="flex">
										<li>
											<input type="radio" class="radio required" id="radio1" name="rating" value="1"><label for="radio1"><?= $locale("applied_review_select1") ?></label>
										</li>
										<li>
											<input type="radio" class="radio required" id="radio2" name="rating" value="0"><label for="radio2"><?= $locale("applied_review_select2") ?></label>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr>
							<th><?= $locale("member_status") ?> *</th>
							<td>
								<div class="radio_wrap">
									<ul class="flex">
										<li>
											<input type="radio" class="radio required" id="member" name="member_status" value="1"><label for="member"><?= $locale("member_status_select1") ?></label>
										</li>
										<li>
											<input type="radio" class="radio required" id="non_member" name="member_status" value="0"><label for="non_member"><?= $locale("member_status_select2") ?></label>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr>
							<th><?= $locale("id") ?> *</th>
							<td><input class="required" type="text" value="<?= isset($user_info["email"]) ? $user_info["email"] : "" ?>" name="email" readonly></td>
						</tr>
						<tr>
							<th><?= $locale("country") ?> *</th>
							<td>
								<select class="required" name="nation_no"> 
									<option value="" selected hidden>Choose</option>
								<?php
								foreach ($nation_list as $list) {
									$nation = $language == "en" ? $list["nation_en"] : $list["nation_ko"];
									if ($user_info["nation_no"] == $list["idx"]) {
										echo "<option value='" . $list["idx"] . "' selected>" . $nation . "</option>";
									} else {
										echo "<option value='" . $list["idx"] . "'>" . $nation . "</option>";
									}
								}
								?>
								</select>
							</td>
						</tr>
						<tr>
							<th><?= $locale("first_name") ?> *</th>
							<td><input class="required" type="text" value="<?= isset($user_info["first_name"]) ? $user_info["first_name"] : "" ?>" name="first_name" readonly></td>
						</tr>
						<tr>
							<th><?= $locale("last_name") ?> *</th>
							<td><input class="required" type="text" value="<?= isset($user_info["last_name"]) ? $user_info["last_name"] : "" ?>" name="last_name" readonly></td>
						</tr>
						<tr>
							<th><?= $locale("phone") ?> *</th>
							<td>
								<div class="clearfix">
									<select class="required" name="nation_tel"> 
										<option value="<?= $nation_tel ?>" selected><?= $nation_tel ?></option>
									</select>
									<input class="required" type="text" value="<?= $phone ?>" name="phone" readonly></td>
								</div>
							</td>
						</tr>
						<tr>
							<th><?= $locale("registration_type") ?> *</th>
						<td>
								<div class="radio_wrap">
									<ul class="flex">
										<li>
											<input type="radio" class="radio required" id="r_type1" name="registration_type" value="0"><label for="r_type1"><?= $locale("registration_type_select1") ?></label>
										</li>
										<li>
											<input type="radio" class="radio required" id="r_type2" name="registration_type" value="1"><label for="r_type2"><?= $locale("registration_type_select2") ?></label>
										</li>
										<li>
											<input type="radio" class="radio required" id="r_type3" name="registration_type" value="2"><label for="r_type3"><?= $locale("registration_type_select3") ?></label>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr id="chk_member_type">
							<th><?= $locale("member_type") ?> *</th>
							<td>
								<select name="member_type"> 
									<option value="" selected hidden>Choose</option>
									<?php
									foreach ($price as $pr) {
									?>
									<option value="<?= $pr['idx'] ?>"><?= $pr['type_en'] ?></option>
									<?php
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<th><?= $locale("affiliation") ?></th>
							<td><input type="text" name="affiliation" value="<?= $user_info["affiliation"] ?>"></td>
						</tr>
						<tr>
							<th><?= $locale("department") ?></th>
							<td><input type="text" name="department" value="<?= $user_info["department"] ?>"></td>
						</tr>
						<tr>
							<th><?= $locale("licence_number") ?></th>
							<td><input type="text" name="licence_number" value="<?= $user_info["licence_number"] ?>"></td>
						</tr>
						<tr>
							<th><?= $locale("academy_number") ?></th>
							<td><input type="text" name="academy_number"></td>
						</tr>
						<tr>
							<th><?= $locale("register_path") ?> *</th>
							<td>
								<select name="register_path"> 
									<option selected hidden>Choose</option>
									<option>의협신문</option>
									<option>유관학회 메일 또는 게시판</option>
									<option>대한비만학회 메일</option>
									<option>의사, 영양사, 운동사 각 협회 공지</option>
									<option>제약회사</option>
									<option>지인을 통해</option>
									<option>학교 내 교수</option>
									<option value="etc">기타(주관식)</option>
								</select>
								<input type="text" class="etc1" value="" placeholder="기타사항을 입력해주세요.">
							</td>
						</tr>
					</table>
				</div>
			-->
            </form>
            <div class="btn_wrap">
                <!-- 활성화 시, gray_btn 제거 & green_btn 추가 -->
                <button type="button"
                    class="btn online_btn gray_btn next_btn pointer"><?= $locale("next_btn") ?></button>
            </div>
        </div>
    </div>
</section>



<script src="./js/script/client/registration.js?v=0.2"></script>
<!-- <script src="./js/script/client/registration.js"></script> -->
<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
$(document).ready(function() {
    $('.etc1').hide();

    $(document).on("click", "#license_checkbox", function() {
        //console.log($(this).is(':checked'));
        if ($(this).is(':checked') == true) {
            $("input[name=licence_number]").attr("disabled", true);
            $("input[name=licence_number]").val("");
        } else {
            $("input[name=licence_number]").attr("disabled", false);

            $("#submit_btn").removeClass("submit_btn");
            $("#submit_btn").addClass("gray_btn");
        }
    });

});


$("input[name='attendance_type']").click(function() {
    if ($(this).val() == "2") {
        $(".write_position").addClass("on");
    } else {
        $(".write_position").removeClass("on");
    }
});

$('select[name=register_path]').on("change", function() {
    if ($('select[name=register_path]').val() == "Other (subjective)") {
        $('.etc1').show();
    } else {
        $('.etc1').hide();
        $('.etc1').val(null);
    }
});

$('input[name=rating]').on("change", function() {
    if ($('input[name=rating]:checked').val() == '1') {
        html = '';
        html += '<li id="applied_org">';
        html += '<p class="label"><?php echo $locale("applied_org") ?> *</p>';
        html += '<div>';
        html += '<div class="radio_wrap">';
        html += '<ul>';
        html += '<li class="pBot_10">- <?php echo $locale("applied_org_notice1") ?></li>';
        html += '<li class="pBot_10">- <?php echo $locale("applied_org_notice2") ?></li>';
        html += '<li>';
        html +=
            '<input type="checkbox" class="checkbox registration_check org_01" id="checkbox1" name="org" value="1"><label for="checkbox1"><?php echo $locale("applied_org1") ?></label>';
        html += '</li>';
        //대한영양사협회 평점 신청 미승인으로 인한 삭제 210805
        // html +=				 '<li>';
        // html +=					 '<input type="checkbox" class="checkbox required org_02" id="checkbox2" name="org" value="2"><label for="checkbox2"><?php echo $locale("applied_org2") ?></label>';
        // html +=				 '</li>';
        html += '<li>';
        html +=
            '<input type="checkbox" class="checkbox registration_check org_03" id="checkbox3" name="org" value="3"><label for="checkbox3"><?php echo $locale("applied_org3") ?></label>';
        html += '</li>';
        html += '<li>';
        html +=
            '<input type="checkbox" class="checkbox registration_check org_04" id="checkbox4" name="org" value="4"><label for="checkbox4"><?php echo $locale("applied_org4") ?></label>';
        html += '</li>';
        html += '<li>';
        html += '<input type="hidden" id="result_org" name="result_org">';
        html += '</li>';
        html += '</div>';
        html += '</div>';
        html += '</li>';

        $('#chk_org').after(html);
        $("input[name=org]").on("change", function() {
            var result = Array();
            var cnt = 0;
            var chkbox = $(".checkbox");
            for (i = 0; i < chkbox.length; i++) {
                if (chkbox[i].checked == true) {
                    result[cnt] = chkbox[i].value;
                    cnt++;
                }
            }
            $('#result_org').val(result);

        });

    } else {
        $('#applied_org').remove();
    }
});

//	$('select[name=member_type]').on("change", function(){
//		$('#type_identification').remove();
//	$("input[name=rating]").removeAttr("onclick");
//	if($('select[name=member_type] option:selected').val() == '9' || $('select[name=member_type] option:selected').val() == '10' || $('select[name=member_type] option:selected').val() == '12'){
//		$("input[name=rating][value=0]").prop("checked", false);
//		$("input[name=rating][value=1]").prop("checked", false);
//		html = '';
//		html += '<tr id="type_identification">';
//		html +=	 '<th><?php echo $locale("identification_file") ?> *</th>';
//		html +=	 '<td>';
//		html +=		 '<div class="file_input">';
//		html +=			 '<p class="pBot_10"> <?php echo $locale("identification_file_notice") ?></p>';
//		html +=			 '<input class="required" type="file" name="identification_file" accept=".docx, .pdf, .jpg, .jpeg, .png">';
//		html +=			 '<span class="btn">Choose</span>';
//		html +=			 '<span class="identification_label" data-js-label> <?php echo $locale("identification_file_placeholder") ?></label>';
//	html +=		 '</div>';
//		html +=	 '</td>';
//		html += '</tr>';

//		alert('<?php echo $locale("identification_file_alert") ?>');
//		$('#chk_member_type').after(html);
//		$("input[name=rating][value=0]").prop("checked", true);
//		$("input[name=rating]").attr("onclick","return(false);");
//		$('#applied_org').remove();

//		}

/*identification_file*/
//	$("input[name=identification_file]").on("change", function(){
//		var identification_file_type = ["DOCX", "PDF", "JPG", "JPEG", "PNG"];
//		var label = $(this).val().replace(/^.*[\\\/]/, '');
//		var type = $(this).val().replace(/^.*[.]/, '').toUpperCase();

//파일 용량 제한
//		var fileSize = $(this)[0].files[0].size;
//		var maxSize = 5 * 1024 * 1024 * 1024;

//	if(!identification_file_type.includes(type)) {
//			alert(locale(language.value)("mismatch_file_type"));
//		$(this).val("");
//			return false;
//		}

//	if(fileSize > maxSize) {
//		alert(locale(language.value)("file_size_error"));
//		$(this).val("");
//		return false;
//	}

//	$(".identification_label").text(" "+label);
///	});
//});

// KSSO Membver status & Academy number
//2022-05-18 주석처리
//$("input[name='member_status']").click(function(){
//	if($(this).val() == "1"){
//		$(".academy_num_box").show();
//		//$("input[name=academy_number]").addClass("registration_check");
//	}else{
//		$(".academy_num_box").hide();
//		//$("input[name=academy_number]").removeClass("registration_check");
//		$("input[name=academy_number]").val("");
//	}
//});

// Invitation letter for VISA application
$("input[name='invitation']").click(function() {
    if ($(this).is(":checked")) {
        console.log("checked!")
        $(this).val("Y");
        $(".want_invitation_wrap").addClass("on");
    } else {
        console.log("unchecked!")
        $(this).val("");
        $(".want_invitation_wrap").removeClass("on");
    }
});

// 주소입력
//window.onload = function(){
//document.getElementById("address_input").addEventListener("click", function(){ //주소입력칸을 클릭하면
//	//카카오 지도 발생
//	new daum.Postcode({
//	oncomplete: function(data) { //선택시 입력값 세팅
//			document.getElementById("address_input").value = data.address; // 주소 넣기
//			document.getElementById("address_detail").focus(); //상세입력 포커싱
//		}
//	}).open();
//	});
//	}


//생년월일유효성
$(document).on('change keyup', "input[name=date_of_birth]", function(key) {
    var _this = $(this);
    if (key.keyCode != 8) {
        var date_of_birth = _this.val().replace(/[^0-9]/gi, '');
        if (date_of_birth.length > 9) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2) + "-" + date_of_birth
                .substr(4, 4);
        } else if (date_of_birth.length > 4) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2) + "-" + date_of_birth
                .substr(4, 4);
        } else if (date_of_birth.length > 2) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2);
        }
        _this.val(date_of_birth);
    }
});
$(document).on('change keyup', "input[name=date_of_issue]", function(key) {
    var _this = $(this);
    if (key.keyCode != 8) {
        var date_of_birth = _this.val().replace(/[^0-9]/gi, '');
        if (date_of_birth.length > 9) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2) + "-" + date_of_birth
                .substr(4, 4);
        } else if (date_of_birth.length > 4) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2) + "-" + date_of_birth
                .substr(4, 4);
        } else if (date_of_birth.length > 2) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2);
        }
        _this.val(date_of_birth);
    }
});
$(document).on('change keyup', "input[name=date_of_expiry]", function(key) {
    var _this = $(this);
    if (key.keyCode != 8) {
        var date_of_birth = _this.val().replace(/[^0-9]/gi, '');
        if (date_of_birth.length > 9) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2) + "-" + date_of_birth
                .substr(4, 4);
        } else if (date_of_birth.length > 4) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2) + "-" + date_of_birth
                .substr(4, 4);
        } else if (date_of_birth.length > 2) {
            date_of_birth = date_of_birth.substr(0, 2) + "-" + date_of_birth.substr(2, 2);
        }
        _this.val(date_of_birth);
    }
});

$(".etc1").on("change keyup", function(key) {
    var pattern_eng = /[^a-zA-Z\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});

$("input[name=affiliation]").on("change keyup", function(key) {
    var pattern_eng = /[^a-zA-Z\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});
$("input[name=department]").on("change keyup", function(key) {
    var pattern_eng = /[^a-zA-Z\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});
$("input[name=licence_number]").on("change keyup", function(key) {
    var pattern_eng = /[^0-9||~-\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});
$("input[name=address]").on("change keyup", function(key) {
    var pattern_eng = /[^a-zA-Z||0-9\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});
$("input[name=passport_number]").on("change keyup", function(key) {
    var pattern_eng = /[^a-zA-Z||0-9||~-\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});
$("input[name=length_of_visit]").on("change keyup", function(key) {
    var pattern_eng = /[^a-zA-Z||0-9||~-\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});
//$("input[name=academy_number]").on("change keyup", function(key){
//	var pattern_eng = /[^a-zA-Z||0-9]/gi;
//	var _this = $(this);
//	if(key.keyCode != 8) {
//		var first_name = _this.val().replace(pattern_eng, '');
//		_this.val(first_name);
//	}
//});
$("input[name=write_position]").on("change keyup", function(key) {
    var pattern_eng = /[^a-zA-Z\s]/gi;
    var _this = $(this);
    if (key.keyCode != 8) {
        var first_name = _this.val().replace(pattern_eng, '');
        _this.val(first_name);
    }
});

$(".registration_check").on("change keyup", function() {
    write_check();
});

$(".license_check").on("change keyup", function() {
    write_check();
});



function write_check() {
    var result = requiredCheck3();

    var result2 = license_number_check();

    if (result && result2) {
        $(".btn.online_btn").addClass("green_btn").removeClass("gray_btn");
    } else {
        $(".btn.online_btn").removeClass("green_btn").addClass("gray_btn");
    }
}

function license_number_check() {
    var licence_number = $("input[name=licence_number]").val();
    var licence_number_len = licence_number.trim().length;
    licence_number = (typeof(licence_number) != "undefined") ? licence_number : null;

    if ($("#license_checkbox").is(':checked') == false) {
        if (!licence_number || licence_number_len <= 0) {
            return false;
        }
    }
    return true;
}

function requiredCheck3() {
    var registration_check = $(".registration_check");
    //console.log(registration_check.length);
    // !$("input[name=rating]").is(":checked")
    //console.log($("input[name=rating]").is(":checked"));
    var required_val;
    for (i = 0; i < registration_check.length; i++) {
        required_val = $(registration_check[i]).val();
        if (required_val.trim().length <= 0 || $(registration_check[i]).val() == "" || $(registration_check[i]).val() ==
            null) {
            //console.log(required_val.trim().length);
            return false;
        }
    }
    if (!$("input[name=member_status]").is(":checked") || !$("input[name=registration_type]").is(":checked") || !$(
            "input[name=rating]").is(":checked") || !$("input[name=attendance_type]").is(":checked")) {
        return false;
    }
    return true;
}

function alert_check() {

    if ($("#online:checked").val() == 1 && $("select[name=nation_no]").val() == 25) {
        alert("Only overseas attendees can select this option");
        $("#online").prop("checked", false);
    }
}
</script>

<?php
}
include_once('./include/footer.php');
?>