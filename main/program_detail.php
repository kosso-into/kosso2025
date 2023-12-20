<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>



<?php

$type = $_GET['type'];
$e = $_GET['e'];
$day = $_GET['day'];
$e_num = $e[-1];
$d_num = $day[-1];

$name = $_GET['name'];

//echo 'asdasd', $e_num;

//kcode == 116 새로고침

echo '<script type="text/javascript">
				  $(document).ready(function(){
					  //탭 활성화
					  //큰탭
					  $(".tab_green li").removeClass("on");
					  if ("' . $day . '" === "") {
						$(".tab_green li:first-child").addClass("on");
					  }
					  $(".tab_green li:nth-child(' . $d_num . ')").addClass("on");
					  $(".tab_green + .tab_wrap > .tab_cont").removeClass("on");
					  $(".tab_green + .tab_wrap > .tab_cont:nth-child(' . $d_num . ')").addClass("on");
					  //작은탭
					  $(".tab_green + .tab_wrap .tab_cont .tab_li li").removeClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_li li:nth-child(' . $e_num . ')").addClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_cont").removeClass("on");
					  $(".tab_green + .tab_wrap .tab_cont .tab_cont:nth-child(' . $e_num . ')").addClass("on");

					  window.onkeydown = function() {
					  	var kcode = event.keyCode;
						if(kcode == 116) {
							history.replaceState({}, null, location.pathname);
							window.scrollTo({top:0, left:0, behavior:"auto"});
						}
					  }

					  //스크롤 위치 & 액션
					  $(".program_detail_ul li").each(function(){
						if("' . $name . '" === $(this).attr("name")) {
							var this_top = $(this).offset().top;
							$("html, body").animate({scrollTop: this_top - 400}, 1000);
							console.log("scrollTop: ", this_top - 150)
						}
					  });

				  });
		</script>';


?>



<section class="container program_detail">
    <h1 class="page_title">Program Details</h1>
    <div class="inner">
        <!-- <ul class="tab_green long centerT detail_program">
            <li id="tab1" class="on"><a href="javascript:;">Sep.7 (Thu)
                </a></li>
            <li id="tab2"><a href="javascript:;">Sep.8 (Fri)
                </a></li>
            <li id="tab3"><a href="javascript:;">Sep.9 (Sat)
                </a></li>
        </ul> -->
        <div class="tab_wrap">
            <div class="tab_cont on">
                <!-- <img class="coming" src="./img/coming.png" /> -->
                <ul class="tab_li">
                    <li id="plenary_lecture" class="on"><a href="javascript:;">Plenary Lecture</a></li>
                    <li id="keynote_lecture"><a href="javascript:;">Keynote Lecture</a></li>
                    <li id="special_lecture_1"><a href="javascript:;">문석학술상</a></li>
                    <li id="special_lecture_2"><a href="javascript:;">젊은연구자상</a></li>
                    <li id="oral_presentation"><a href="javascript:;">Oral Presentation</a></li>
                    <li id="pre_congress_symposium"><a href="javascript:;">Pre-congress Symposium</a></li>
                    <li id="symposium"><a href="javascript:;">Symposium</a></li>
                    <li id="satellite_symposium"><a href="javascript:;">Satellite Symposium</a></li>
                    <li id="breakfast_symposium"><a href="javascript:;">Breakfast Symposium</a></li>
                    <li id="luncheon_symposium"><a href="javascript:;">Luncheon Lecture</a></li>
                </ul>
               
                <div class="tab_wrap">

                <!-- Plenary lecture -->

                
                    <div class="tab_cont on">
                        <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                        준비 중입니다.
                        </div>
                    </div>


                    <!-- Keynote lecture -->


                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>


                    <!-- Symposium -->


                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>


            <!-- Satellite Symposium -->

                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>
           
            <!-- Breakfast Symposium -->

            <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>

                <!-- Luncheon Lecture -->

                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>
                  

                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>

                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>
                  

                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>
                    
                    <div class="tab_cont">
                         <div style="margin: 0 auto;width: 300px;font-size: 48px;font-weight: 600;">
                            준비 중입니다.
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- </div> -->
        </div>
</section>

<script>
$(document).ready(function() {
    // 모든 세션의 내용 숨김처리 후, 펼칠 세션의 td에 on 클래스를 붙여 해당 세션의 내용만 펼칩니다.
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td").children("div").css("display", "none");
    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").next("tr").next("tr")
        .children("td.on").children("div").css("display", "block");

    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
        $(this).next("tr").next("tr").children("td.on").children("div").slideToggle();
    });

    // $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
    //     $(this).next("tr").next("tr").children("td").children("div").slideToggle();
    // });

    $(".tab_green li, .tab_li li").click(function() {
        var i = $(this).index();
        $(this).parent("ul").next(".tab_wrap").children(".tab_cont").removeClass("on");
        $(this).parent("ul").next(".tab_wrap").children(".tab_cont").eq(i).addClass("on");
        $(this).siblings("li").removeClass("on");
        $(this).addClass("on");
    });

    $(".program_detail_btn").click(function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
    });
    //$('.toggle_title').click(function(e) {
    //	if($(this).hasClass('has_contents')){
    //		e.preventDefault();
    //		var notthis = $('.toggle_contents_wrap2 .has_contents .active').not(this);
    //		notthis.toggleClass('active').next('.toggle_contents2').slideToggle(300);
    //		$(this).toggleClass('active').next().slideToggle("fast");
    //	}
    //});
    //$('.tab_area2 li').on('click',function(){
    //	var idx = $(this).index();
    //	$('.tab_area2 li').removeClass('active');
    //	$(this).addClass('active');
    //	$('.tab_contents').hide();
    //	$('.tab_contents').eq(idx).show();
    //})
    // $('.toggle_title').addClass('active');
    // $('.toggle_contents2').attr('style','display:block;');

    // var hash_parts = location.hash.split('&', 2); 
    // var tab        = hash_parts[0]; 
    // var anc        = hash_parts[1];
    // var tabId      = tab;
    // var idx = $(tabId).index();

    // if(tab){
    //     $('.tab_area2 li').removeClass('active');
    //     $(tabId).addClass('active');
    //     $('.tab_contents').hide();
    //     $('.tab_contents').eq(idx).show();
    //     $('html, body').animate({'scrollTop': ($(anc).offset().top-223)}, 1000); // Animated scroll to anchor.
    //     
    // }
    //var i = 1;
    // $('li.date').each(function(){ 
    //    if ($(this).html() == '　'){
    //        $(this).addClass('no_cont')
    //    }
    // });
});
</script>

<?php include_once('./include/footer.php'); ?>