<?php
	include_once ("./include/head.php");
	include_once ("./include/app_header.php");
?>

<section class="container app_version app_abstract">
	<div class="app_title_box">
		<h2 class="app_title">Abstract<button type="button" class="app_title_prev" onclick="javascript:window.location.href='./app_index.php';"><img src="/main/img/icons/icon_arrow_prev_wh.svg" alt="이전페이지로 이동"></button></h2>
	</div>
	<div class="container_inner w_full">
		<div class="app_contents_box">
			<div class="app_contents_wrap type3">
				<ul class="app_sort_form app_half_ul">
					<li>
						<select name="" id="">
							<option value="" hidden>Select Category</option>
							<option value="">All</option>
							<option value="">Plenary Lecture</option>
							<option value="">Keynote Lecture</option>
							<option value="">Best Article in JOMES</option>
							<option value="">Symposium</option>
							<option value="">Obesity Treatment Guidelines Symposium</option>
							<option value="">Pre-congress Symposium</option>
							<option value="">Breakfast Symposium</option>
							<option value="">Luncheon Symposium</option>
							<option value="">Satellite Symposium</option>
							<option value="">Sponsored Session</option>
							<option value="">Joint Symposium</option>
							<option value="">Oral Presentation</option>
							<option value="">Guided Poster Presentation</option>
							<option value="">Poster Exhibition</option>
						</select>
					</li>
				</ul>
				<ul class="pdf_list">
					<li class="pdf plenary_lecture"><a href="javascript:void(0);">Plenary Lecture 1</a></li>
                    <input type="hidden" name="Plenary Lecture 1" value="http://43.200.170.254/main/download/dummy.pdf" />
					<li class="pdf"><a href="javascript:void(0);">Plenary Lecture 2</a></li>
                    <input type="hidden" name="Plenary Lecture 2" value="http://43.200.170.254/main/download/dummy.pdf" />
					<li class="pdf"><a href="javascript:void(0);">Plenary Lecture 3</a></li>
                    <input type="hidden" name="Plenary Lecture 3" value="http://43.200.170.254/main/download/dummy.pdf" />
					<li class="pdf"><a href="javascript:void(0);">Plenary Lecture 4</a></li>
                    <input type="hidden" name="Plenary Lecture 4" value="http://43.200.170.254/main/download/dummy.pdf" />

                    <li class="pdf"><a href="javascript:void(0);">Keynote Lecture 1</a></li>
                    <input type="hidden" name="Keynote Lecture 1" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Keynote Lecture 2</a></li>
                    <input type="hidden" name="Keynote Lecture 2" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Keynote Lecture 3</a></li>
                    <input type="hidden" name="Keynote Lecture 3" value="http://43.200.170.254/main/download/dummy.pdf" />

                    <li class="pdf"><a href="javascript:void(0);">Best Article in JOMES</a></li>
                    <input type="hidden" name="Best Article in JOMES" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Symposium</a></li>
                    <input type="hidden" name="Symposium" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Obesity Treatment Guidelines Symposium</a></li>
                    <input type="hidden" name="Obesity Treatment Guidelines Symposium" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Pre-congress Symposium</a></li>
                    <input type="hidden" name="Pre-congress Symposium" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Luncheon Symposium</a></li>
                    <input type="hidden" name="Luncheon Symposium" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Satellite Symposium</a></li>
                    <input type="hidden" name="Satellite Symposium" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Sponsored Session</a></li>
                    <input type="hidden" name="Sponsored Session" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Joint Symposium</a></li>
                    <input type="hidden" name="Joint Symposium" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Oral Presentation</a></li>
                    <input type="hidden" name="Oral Presentation" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Guided Poster Presentation</a></li>
                    <input type="hidden" name="Guided Poster Presentation" value="http://43.200.170.254/main/download/dummy.pdf" />
                    <li class="pdf"><a href="javascript:void(0);">Poster Exhibition</a></li>
                    <input type="hidden" name="Poster Exhibition" value="http://43.200.170.254/main/download/dummy.pdf" />
				</ul>
			</div>
		</div>
	</div>
</section>
<script>
    $(document).on("click",".pdf",function(){
        let path = $(this).next().val();
        openPDF_ios(path);
    });


    function openPDF_Android(path){
    AndroidScript.openPDF(path);
    }

    function openPDF_ios(path){
        try{
            webkit.messageHandlers.openPDF.postMessage(path);
        } catch (err){
            alert(err);
        }
    }
</script>

<?php
	include_once ("./include/app_footer.php");
?>
