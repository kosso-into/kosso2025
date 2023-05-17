<?php
	include_once('./include/head.php');
	include_once('./include/header.php');

	include_once('../live/include/set_event_period.php');

	if($admin_permission["auth_live_lecture"] == 0){
		echo	'<script>
					alert("권한이 없습니다.");
					history.back();
				</script>';
	}

	$idx = $_GET['idx'];
	$is_modify = isset($_GET['idx']);

	$info = array();
	if ($is_modify) {
		$sql_info =	"SELECT
                        fi_profile.original_name as profile_img_name,
                        fi_cv.original_name as cv_name,
                        ls.*
					FROM lecture_speaker AS ls
                    LEFT JOIN `file` AS fi_profile
                        ON fi_profile.idx = ls.profile_img
                    LEFT JOIN `file` AS fi_cv
                        ON fi_cv.idx = ls.cv_file
					WHERE ls.idx = '".$idx."'";
		$info = sql_fetch($sql_info);
		foreach($info as $key=>$value){
			$info[$key] = stripslashes($value);
		}
	}
?>
<section class="list">
	<div class="container">
		<!----- 타이틀 ----->
		<div class="title clearfix2">
			<h1 class="font_title">Speaker 관리</h1>
		</div>
		<div class="contwrap centerT has_fixed_title">
			<form>
				<!----- 입력폼 ----->
				<table>
					<colgroup>
						<col width="10%">
						<col width="40%">
						<col width="10%">
						<col width="40%">
					</colgroup>
					<tbody>
						<tr>
							<th>Speaker 이름(영문) *</th>
							<td>
								<input type="text" placeholder="50자 이내" maxlength="50" name="name_en" value="<?=$info['name_en']?>">
							</td>
							<th>Speaker 소속(영문) *</th>
							<td>
								<input type="text" placeholder="200자 이내" maxlength="200" name="affiliation_en" value="<?=$info['affiliation_en']?>">
							</td>
						</tr>
						<tr>
							<th>Lecture Title(영문)</th>
							<td>
								<input type="text" placeholder="300자 이내" maxlength="300" name="lecture_title" value="<?=$info['lecture_title']?>">
							</td>
							<th>Time(강의일시)</th>
							<td class="input_wrap">
								<input type="text" name="start" class="datepicker-here" data-date-format="yyyy-mm-dd" data-time-format="hh:ii" data-language='en' data-timepicker="true">
								<span>~</span>
								<input type="text" name="end" class="datepicker-here" data-date-format="yyyy-mm-dd" data-time-format="hh:ii" data-language='en' data-timepicker="true">
							</td>
						</tr>
						<tr>
							<th>Speaker 이미지</th>
                            <td class="file_up_wrap">
                                <input type="file" id="file_speaker_profile" class="file_costom" accept="image/*" data-idx="<?=$info['profile_img']?>">
                                <input type="text" readonly class="file_name" value="<?=$info['profile_img_name']?>">
                                <label for="file_speaker_profile">파일선택</label>
                            </td>
							<th>Speaker CV</th>
                            <td class="file_up_wrap">
                                <input type="file" id="file_speaker_cv" class="file_costom" accept=".docx, .pdf" data-idx="<?=$info['cv_file']?>">
                                <input type="text" readonly class="file_name" value="<?=$info['cv_name']?>">
                                <label for="file_speaker_cv">파일선택</label>
                            </td>
						</tr>
					</tbody>
				</table>
				<!----- btn ----->
				<div class="btn_wrap leftT">
					<button type="button" class="border_btn" onclick="location.href='./manage_speaker.php'">목록</button>
					<?php
						if($admin_permission["auth_live_lecture"] > 1){
							if ($is_modify) {
					?>
					<button type="button" class="btn gray_btn delete_btn" data-idx="<?=$info['idx']?>">삭제</button>
					<?php
							}
					?>
					<button type="button" class="btn save_btn" data-idx="<?=$info['idx']?>">저장</button>
					<?php
						}
					?>
				</div>
			</form>
		</div>
	</div>
</section>
<script>

	// ** DOCUMENT ** //
	$(document).ready(function() {
		// 자동완성 안됨
		$('input').attr('autocomplete', 'off');

		// datepicker
		$('.datepicker-here').datepicker({
			minDate: new Date('<?=$_PERIOD[0]?> 00:00'),
			maxDate: new Date('<?=end($_PERIOD)?> 23:59'),
			minutesStep: 5
		});

		// datepicker 데이터 세팅
		var pt_start = "<?=$info['lecture_start_time']?>";
		if (pt_start) {
			$('[name=start]').datepicker().data('datepicker').selectDate(new Date(pt_start));
		}
		var pt_end = "<?=$info['lecture_end_time']?>";
		if (pt_end) {
			$('[name=end]').datepicker().data('datepicker').selectDate(new Date(pt_end));
		}
	});

	// 파일 업로드 감지
	$("input[type=file]").on("change",function(e){
        var target_id = e.target.id;
		var file = e.target.files[0]; // 단일 파일업로드만 고려된 개발

		var label = $(this).parent().find(".label");
        if(target_id == 'file_speaker_profile'){
            if(!file.type.match('image.*')){
                alert("썸네일은 이미지 파일만 가능합니다");
                return;
            }            
        }

		if(file && file != "" && typeof(file) != "undefined"){
			label.text(file.name);
		}
	});

	// 저장
	$('.save_btn').click(function(){
		var fsp = inputFileEmpty("file_speaker_profile");
		var fsc = inputFileEmpty("file_speaker_cv");
        
		var temp_this;
        var idx = $(this).data('idx');
        var name_en = $("[name=name_en]").val();
        var affiliation_en = $("[name=affiliation_en]").val();
        var start = $("[name=start]").val();
        var end = $("[name=end]").val();
        var lecture_title = $("[name=lecture_title]").val();
        
		if (!name_en) {
			alert('Speaker 이름을 입력해주세요.');
		} else if (!affiliation_en) {
			alert('Speaker 소속을 입력해주세요.');
		}else if (confirm('저장하시겠습니까?')) {            
			var form_data = new FormData();
			form_data.append("flag", "modify_lecture_speaker");            
			form_data.append("idx", idx);
			form_data.append("name_en", name_en);
			form_data.append("affiliation_en", affiliation_en);
			form_data.append("start", start);
			form_data.append("end", end);
			form_data.append("lecture_title", lecture_title);
            
			if (!fsp.current_empty) {
				form_data.append('file_speaker_profile', fsp.fi_obj);
			}

			if (!fsc.current_empty) {
				form_data.append('file_speaker_cv', fsc.fi_obj);
			}
//			if (document.getElementById("file_speaker_profile").value) {
//				form_data.append('file_speaker_profile', $('#file_speaker_profile')[0].files[0]);
//			}
//            
//			if (document.getElementById("file_speaker_cv").value) {
//				form_data.append('file_speaker_cv',	$('#file_speaker_cv')[0].files[0]);
//			}
            
            
			$.ajax({
				url : "../ajax/admin/ajax_lecture_speaker.php",
				type : "POST",
				data : form_data,
				contentType : false,
				processData : false,
				dataType : "JSON",
				success : function(res) {
					alert(res.msg);
					if(res.code == 200) {
						if (!idx) {
							location.replace("/main/admin/manage_speaker_detail.php?idx="+res.idx);
						} else {
							location.reload();
						}
					}
				}
			});
		}
	});

	// 삭제
	$('.delete_btn').click(function(){
		var idx = $(this).data('idx');

		if (!idx) {
			alert('삭제할 발표자의 고유값이 유효하지 않습니다.\n관리자에게 문의해주세요.');
		} else if (confirm('발표자를 삭제하시겠습니까?')) {
			$.ajax({
				url : "../ajax/admin/ajax_lecture_speaker.php",
				type : "POST",
				data : {
					flag : "remove_lecture_speaker",
					idx : "<?=$idx?>"
				},
				dataType : "JSON",
				success : function(res) {
					alert(res.msg);
					if(res.code == 200) {
						location.replace('/main/admin/manage_speaker.php');
					}
				}
			});
		}
	});

	// 빈값 확인 함수
	function inputFileEmpty(id){
		var origin_empty = $('#'+id).data('idx') == "0";
		var current_empty = !document.getElementById(id).value;

		var res = {
			origin_empty : origin_empty,
			current_empty : current_empty,
			verify_fail : (origin_empty && current_empty),
			fi_obj : $('#'+id)[0].files[0]
		}

		return res;
	}
</script>
<?php include_once('./include/footer.php');?>