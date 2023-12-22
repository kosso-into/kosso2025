<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<script src="./js/script/client/program_detail_2.js?v=0.5"></script>
<?php

$type = $_GET['type'];
$e = $_GET['e'];
$day = $_GET['day'];
$e_num = $e[-1];
$d_num = $day[-1];
$category = $_GET['category'];

$name = $_GET['name'];

//echo 'asdasd', $e_num;

//kcode == 116 새로고침
// DB 자동화 할 수 있다!!

echo '<script type="text/javascript">
				  $(document).ready(function(){
					  //탭 활성화
					  //큰탭
					  $(".tab_green li").removeClass("on");
					  if ("' . $day . '" === "") {
						$(".tab_green li:first-child").addClass("on");
					  }else{
                         $(".tab_li li").removeClass("on")
                         $("#'.$category.'").addClass("on")
                         var index = $("#'.$category.'").index();

					    //  $(".tab_wrap > .tab_cont").removeClass("on");
					    //  $(".tab_wrap > .tab_cont").eq(index).addClass("on");
                      }

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
        <!-- <ul class="tab_green long centerT detail_program"> -->
        <ul class="tab_li">
            <li id="plenary_lecture" class="on" onclick="clearUl()"><a href="javascript:;">Plenary Lecture</a></li>
            <li id="keynote_lecture" onclick="clearUl()"><a href="javascript:;">Keynote Lecture</a></li>
            <li id="special_lecture_1" onclick="clearUl()"><a href="javascript:;">문석학술상</a></li>
            <li id="special_lecture_2" onclick="clearUl()"><a href="javascript:;">젊은연구자상</a></li>
            <li id="oral_presentation" onclick="clearUl()"><a href="javascript:;">Oral Presentation</a></li>
            <li id="pre_congress_symposium" onclick="clearUl()"><a href="javascript:;">Pre-congress Symposium</a></li>
            <li id="symposium" onclick="clearUl()"><a href="javascript:;">Symposium</a></li>
            <li id="satellite_symposium" onclick="clearUl()"><a href="javascript:;">Satellite Symposium</a></li>
            <li id="breakfast_symposium" onclick="clearUl()"><a href="javascript:;">Breakfast Symposium</a></li>
            <li id="luncheon_symposium" onclick="clearUl()"><a href="javascript:;">Luncheon Lecture</a></li>
        </ul>
        <div class="tab_wrap">
            
            <!-- Plenary lecture -->
            
            <div class="on">
                <ul class="program_detail_ul">
                        
                </ul>
            </div>

         
            <!-- </div> -->
        </div>
</section>


<script>
$(document).ready(function() {

    $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
        $(this).next("tr").next("tr").children("td.on").children("div").slideToggle();
    });

    // $(".program_detail_ul .detail_table_common > table > tbody > tr:first-child").click(function() {
    //     $(this).next("tr").next("tr").children("td").children("div").slideToggle();
    // });

    $(".tab_green li, .tab_li li").click(function() {
        // var i = $(this).index();
        // $(this).parent("ul").next(".tab_wrap").children(".tab_cont").removeClass("on");
        // $(this).parent("ul").next(".tab_wrap").children(".tab_cont").eq(i).addClass("on");
        // $(this).siblings("li").removeClass("on");
        // $(this).addClass("on");
        getCategoryId()
    });
        getCategoryId()
});

        function getCategoryId(){
            const categoryId = $(".tab_li li.on").attr("id");
            const categoryList = [
            {
                id:5,
                name:"plenary_lecture",
            },
            {
                id:6,
                name:"keynote_lecture",
            },
            {
                id:11,
                name:"breakfast_symposium",
            },
            {
                id:12,
                name:"luncheon_symposium",
            },
            {
                id:8,
                name:"symposium",
            },
            {
                id:16,
                name:"oral_presentation",
            },
            {
                id:13,
                name:"satellite_symposium",
            },
            {
                id:10,
                name:"pre_congress_symposium",
            },
            {
                id:19,
                name:"special_lecture_1",
            },
            {
                id:20,
                name:"special_lecture_2",
            }
        ];

        categoryList.map((category)=>{
            if(category.name === categoryId){
                getDetail(category.id, category.name)
            }
        })
        }
</script>

<?php include_once('./include/footer.php'); ?>