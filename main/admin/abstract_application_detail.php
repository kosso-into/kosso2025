<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	if($admin_permission["auth_apply_poster"] == 0){
		echo '<script>alert("권한이 없습니다.");history.back();</script>';
	}

	$abstract_idx = $_GET["idx"];

	$abstract_detail_query =	"
									SELECT 
										ra.submission_code, ra.city, ra.state, CONCAT(ra.first_name,' ',ra.last_name) AS `name`, ra.affiliation, ra.email, ra.phone, ra.abstract_title,
										m.idx AS member_idx, m.member_email, m.member_name, m.member_nation, m.member_register_date,
										CONCAT(m.affiliation,',',m.department) AS member_affiliation, m.phone AS member_phone,
										f.original_name AS file_name, CONCAT(f.path,'/',f.save_name) AS path, ra.presenting_author, ra.corresponding_author,
										c.title_en AS category,
										n.nation_ko AS nation,
										(
											CASE ra.presentation_type
												WHEN 0 THEN '구연/포스터'
												WHEN 1 THEN '구연'
												WHEN 2 THEN '포스터'
												ELSE ''
											END
										) AS presentation_type_text,
										ra.presentation_type_yn
									FROM request_abstract ra
									LEFT JOIN(
										SELECT
											m.idx, m.email AS member_email, CONCAT(m.last_name,m.first_name) AS member_name, 
										    DATE(m.register_date) AS member_register_date, n.nation_ko AS member_nation,
                                            m.affiliation, m.department, m.phone
										FROM member m
										JOIN nation n
										ON m.nation_no = n.idx
									) AS m ON ra.register = m.idx
									LEFT JOIN file f ON ra.abstract_file = f.idx
									LEFT JOIN info_poster_abstract_category c ON ra.abstract_category = c.idx
									LEFT JOIN nation n ON ra.nation_no = n.idx
									WHERE ra.idx = {$abstract_idx}
									OR ra.parent_author = {$abstract_idx}
								";

	$abstract_detail = get_data($abstract_detail_query);


	for($i=0; $i<count($abstract_detail); $i++) {
		if($i == 0) {
			$author_detail = $abstract_detail[$i];

			//foreach($author_detail as $key => $value) {
			//	if($key == "affiliation") {
			//		$author_detail[$key] = isset($author_detail[$key]) ? json_decode($author_detail[$key]) : "-";
			//	} else {
			//		$author_detail[$key] = isset($author_detail[$key]) ? $author_detail[$key] : "-";
			//	}
			//
			//}
		}
//        else {
			${"co_author_detail".$i} = $abstract_detail[$i];

			foreach(${"co_author_detail".$i} as $key => $value) {
				if($key == "affiliation") {
					if ($i == 0){
						${"co_author_detail".$i}[$key] = isset(${"co_author_detail".$i}[$key]) ? json_decode(${"co_author_detail".$i}[$key]) : "-";
					}else{
						${"co_author_detail".$i}[$key] = isset(${"co_author_detail".$i}[$key]) ? ${"co_author_detail".$i}[$key] : "-";
					}
				} else {
					${"co_author_detail".$i}[$key] = isset(${"co_author_detail".$i}[$key]) ? ${"co_author_detail".$i}[$key] : "-";
				}
				
			}
//		}
	}

	
?>
	<section class="detail">
		<div class="container">
			<div class="title">
				<h1 class="font_title">Poster Abstract Submission</h1>
			</div>
			<div class="contwrap has_fixed_title">
				<!-- <div class="tab_box">
					<ul class="tab_wrap clearfix">
						<li class="active"><a href="./abstract_application_detail.php">기본 정보</a></li>
						<li><a href="./abstract_application_detail2.php">댓글</a></li>
					</ul>
				</div> -->
				<h2 class="sub_title">회원 정보</h2>
				<table>
					<colgroup>
						<col width="10%">
						<col width="40%">
						<col width="10%">
						<col width="40%">
					</colgroup>
					<tbody>
						<tr>
							<th>ID(Email)</th>
							<td><a href="./member_detail.php?idx=<?=$author_detail["member_idx"]?>"><?=$author_detail["member_email"]?></a></td>
							<th>성함 / 국적</th>
							<td><?=$author_detail["member_name"]?> / <?=$author_detail["member_nation"]?></td>
						</tr>
						<tr>
							<th>등록일</th>
							<td><?=$author_detail["member_register_date"]?></td>
							<th>초록 제출 코드</th>
							<td><?=$author_detail["submission_code"]?></td>
						</tr>
					</tbody>
				</table>
				<h2 class="sub_title">신청자 정보</h2>
				<table>
					<colgroup>
						<col width="10%">
						<col width="40%">
						<col width="10%">
						<col width="40%">
					</colgroup>
					<tbody>
						<tr>
							<th>국적</th>
							<td><?=$author_detail["member_nation"]?></td>
							<th>성함</th>
							<td><?=$author_detail["member_name"]?></td>
						</tr>
						<tr>
							<th>발표 저자</th>
							<td><?=$author_detail["presenting_author"] ?? "N"?></td>
							<th>Corresponding Author</th>
							<td><?=$author_detail["corresponding_author"] ?? "N"?></td>
						</tr>
						<tr>
							<th>소속</th>
							<td>
							<?=
                                $author_detail["member_affiliation"]
//								$aff = explode( '★', $author_detail["member_affiliation"] );
//
//								for($i=0; $i<count($aff)-1; $i++) {
//									echo $aff[$i]."<br>";
//								}
//								//foreach($author_detail["affiliation"] as $list) {
//								//	echo $list."<br>";
//								//}
							?>
							</td>
							<th>Email</th>
							<td><?=$author_detail["member_email"]?></td>
						</tr>
						<tr>
							<th>휴대폰 번호</th>
							<td colspan="3"><?=$author_detail["member_phone"]?></td>
						</tr>
					</tbody>
				</table>
				<h2 class="sub_title">공동저자 정보</h2>
				<?php
					for($i=0; $i<count($abstract_detail); $i++) {
				?>
				<table>
					<colgroup>
						<col width="10%">
						<col width="40%">
						<col width="10%">
						<col width="40%">
					</colgroup>
					<tbody>
						<tr>
							<th>국적</th>
							<td><?=${"co_author_detail".$i}["nation"]?></td>
							<th>성함</th>
							<td><?=${"co_author_detail".$i}["name"]?></td>
						</tr>
						<tr>
							<th>발표 저자</th>
							<td><?=${"co_author_detail".$i}["presenting_author"] ?? "N"?></td>
							<th>Corresponding Author</th>
							<td><?=${"co_author_detail".$i}["corresponding_author"] ?? "N"?></td>
						</tr>
						<tr>
							<th>소속</th>
							<td>
							<?php
								//$co_aff = explode( '★', $abstract_detail[1]["affiliation"] );
								
								if($i == 1){
									$co_aff = explode( '★', $abstract_detail[1]["affiliation"] );
									for($k=0; $k<count($co_aff)-1; $k++) {
										echo $co_aff[$k]."<br>";
									}

									//foreach(${"co_author_detail".$i}["affiliation"] as $list) {
									//	echo $list."<br>";
									//}
								}else{
									$co_author = explode( '★', $abstract_detail[$i]["affiliation"] );
									for($k=0; $k<count($co_author)-1; $k++) {
										echo $co_author[$k]."<br>";
									}
								}
							?>
							</td>
							<th>Email</th>
							<td><?=${"co_author_detail".$i}["email"]?></td>
						</tr>
						<tr>
							<th>휴대폰 번호</th>
							<td colspan="3"><?=${"co_author_detail".$i}["phone"]?></td>
						</tr>
					</tbody>
				</table>
				<?php }?>
				<h2 class="sub_title">초록 제출 정보</h2>
				<table>
					<colgroup>
						<col width="10%">
						<col width="40%">
						<col width="10%">
						<col width="40%">
					</colgroup>
					<tbody>
						<tr>
							<th>선호하는 프레젠테이션 유형</th>
							<td><?=$author_detail["presentation_type_text"]?></td>
							<th>프레젠테이션 변경에 동의</th>
							<td><?=$author_detail["presentation_type_yn"] == "Y" ? "Yes" : "No"?></td>
						</tr>
						<tr>
							<!-- <th>Abstract title</th>
							<td><?=$author_detail["abstract_title"]?></td> -->
							<th>초록 카테고리</th>
							<td><?=$author_detail["category"]?></td>
							<th>초록 파일</th>
						<?php
							$ext = strtolower(end(explode(".",$author_detail["file_name"])));
							if($ext == "pdf") {
						?>
							<td><a href="./pdf_viewer.php?path=<?=$author_detail["path"]?>" target="_blank"><?=$author_detail["file_name"]?></a></td>
						<?php } else {?>
							<td><a href="<?=$author_detail["path"]?>" download="<?=$author_detail["submission_code"]?>"><?=$author_detail["file_name"]?></a></td>
						<?php }?>
							<!-- <th>Abstract text</th>
							<td>text contents</td> -->
						</tr>
						<!-- <tr>
							<th>Thumbnail image</th>
							<td colspan="3">
								<div class="img_wrap">
									<img src="" alt="썸네일"> 
								</div>
							</td>
						</tr> -->
					</tbody>
				</table>
				<div class="btn_wrap">
					<button type="button" class="border_btn" onclick="location.href='./abstract_application_list.php'">목록</button>
				</div>
			</div>
		</div>
	</section>
<?php include_once('./include/footer.php');?>