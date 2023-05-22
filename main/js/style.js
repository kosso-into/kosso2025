$(document).ready(function(){
	// 아이폰 사파리에서 더블 탭 막기
	var lastTouchEnd = 0;
	document.documentElement.addEventListener('touchend', function (event) {
		var now = (new Date()).getTime();
		if (now - lastTouchEnd <= 300) {
		  event.preventDefault();
		}
		lastTouchEnd = now;
	}, false);

	//아이폰에 사파리에서 핀치 줌 막기 / 안드로이드에서 더블탭, 핀치 줌 막기
	document.documentElement.addEventListener('gesturestart', function (e) {
		e.preventDefault();
	});

	//데이트피커
	$(".date_input").datepicker({
		//dateFormat: "yy-mm-dd"
		dateFormat: "dd-mm-yy"
	});

	//pc header hover action 
	$('.depth01 li a').on('mouseenter',function(){
		var bar_width = $(this).width();
		var left_position = $(this).position().left;
		$('.depth01 li a img').attr('src','./img/icons/nav_arrow_black.png');
		$(this).children('img').attr('src','./img/icons/nav_arrow_on.png');
		$('.bar').css('width', bar_width);
		$('.bar').css('left', left_position);
		$(this).parents('header').addClass('nav_show');
		$('.nav_dim').show();
	});
	$("header .depth01 li ul").mouseover(function(){
		var left_spot = $(this).parent("li").position().left;
		$('.bar').css('left', left_spot);
	});

	//footer s_logo_list
	$('.s_logo_list').slick({
		dots: false,
		infinite: true,
		slidesToShow: 8,
		arrows : true,
        autoplay: true,
        autoplaySpeed: 2000,
		responsive: [
		{
		  breakpoint: 1100,
		  settings: {
			slidesToShow: 6
		  }
		},
		{
		  breakpoint: 780,
		 settings: {
			slidesToShow: 4
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 3
		  }
		}
	  ]
	});

	$('header .top, .nav_dim').on('mouseenter',function(){
		$('.nav_dim').hide();
		$('.depth01 li a img').attr('src','./img/icons/nav_arrow.png');
		$('header').removeClass('nav_show');
	});
	//pc header hover action end

	//popup
	$('.pop_bg, .pop_close').on('click',function(){
		$(this).parents('.popup').hide();
	});

	//input type radio
	$('.toggle_wrap input').on('change',function(){
		var target = $(this).parents(".toggle_wrap").find("input[type=radio]:checked");
		var choice = target.val();

		language_change("change", choice);
		
	});
	
	//toggle pointer click event
	$('.toggle__pointer').on('click',function(){
		var target = $(this).parents(".toggle_wrap").find("input[type=radio]:checked");
		var choice = target.val();

		language_change("click", choice);
	});

	//mobile nav
	$('.m_nav_btn').on('click',function(){
		var i = $(this).index();
		$('.m_nav_wrap').addClass('opened');
		$('.m_nav_li a').removeClass('show')
		$('.m_sub_nav').hide();
		$('.m_nav_li a').eq(i).addClass('show');
		$('.m_sub_nav').eq(i).show();
	});
	$('.m_nav_li a').on('click',function(){
		if(!$(this).hasClass('show')){
			$('.m_sub_nav').hide(); //.slideUp();
			$('.m_nav_li a').removeClass('show');
			$(this).addClass('show');
			$(this).siblings('.m_sub_nav').show(); //.slideDown();
		}else{
			// $('.m_sub_nav').slideUp();
			// $('.m_nav_li a').removeClass('show');
		}
	});
	$('.n_nav_close').on('click',function(){
		$('.m_nav_wrap').removeClass('opened');
	});
	
	listR();
	
	$(window).resize(function(){
		listR();
	});

	// pagination toggle
	$(".pagination li").click(function(){
		$(".pagination li").removeClass("on");
		$(this).addClass("on");
	});

	// select arrow toggle
	$(".select").focus(function(){
		$(this).parents(".select_box").addClass("on");
	}).blur(function(){
		$(this).parents(".select_box").removeClass("on")
	});
	$(".select").change(function(){
		$(this).parents(".select_box").removeClass("on");
		$(this).blur();
	})
		
	//댑
	$(".tab_green li, .tab_li li").click(function() {
		var i = $(this).index();
		$(this).parent("ul").next(".tab_wrap").children(".tab_cont").removeClass("on");
		$(this).parent("ul").next(".tab_wrap").children(".tab_cont").eq(i).addClass("on");
		$(this).siblings("li").removeClass("on");
		$(this).addClass("on");
		console.log($(this).parent("ul").next(".tab_wrap").children(".tab_cont"))
	});

	// FAQ > arrow toggle
	$(".faq_quest").click(function(){
		if($(this).hasClass("on")){
			$(".faq_quest").removeClass("on");
		}else{
			$(".faq_quest").removeClass("on");
			$(this).addClass("on");
		}
		
	});

	
	if($("section").hasClass("index_test")){
		$(".fixed_btn_wrap").addClass("index_pg");
	}
	// fixed button 스크롤할때 고정
	var footer_height = $('.footer_wrap').outerHeight();
	$(window).on('scroll', function(){
		var scroll_top = $(window).scrollTop();
		
		if(scroll_top > 50){
			$(".btn_top").fadeIn(300);
		}else{
			$(".btn_top").fadeOut(300);
		}

		var footer_top = $(".footer_wrap").offset().top;
		var fixed_bottom = $(".fixed_btn_clone").offset().top + $(".fixed_btn_clone").outerHeight();
		if(!$("section").hasClass("index_test")){

			if(32 >= footer_top - fixed_bottom){
				$(".fixed_btn_wrap").addClass("on");
				$(".fixed_btn_wrap").css("bottom", footer_height+32+"px");
			}else{
				$(".fixed_btn_wrap").removeClass("on");
				$(".fixed_btn_wrap").css("bottom", "32px");
			}
		}
	});


	// top button 클릭이벤트
	$(".btn_top").click(function(){
		$("html, body").animate({scrollTop: 0}, 500)
	})

	// 메인페이지 하단 이동 button 클릭이벤트
	$(".main_section .btn_circle_arrow").click(function(){
		var main_section_height = $(".main_section").outerHeight();
		var header_height = $("header").outerHeight();
		var move_main_cont = main_section_height - header_height;
		$("html, body").animate({scrollTop: move_main_cont}, 500);
	});

	//로그인 백그라운드 높이값
	$(".login.bg").css("min-height", $(window).height());
	//$(".login.bg").outerHeight($(window).height());

	//필수값 입력시 버튼 활성화 (gray_btn > green_btn)
	$(".required").on("change keyup", function(){
		var result = requiredCheck2();

		if(result) {
			$(".btn.online_btn").addClass("green_btn").removeClass("gray_btn");
		} else {
			$(".btn.online_btn").removeClass("green_btn").addClass("gray_btn");
		}
	});

	//필수값 입력시 버튼 활성화 (gray_btn > green_btn)
	$(".required3").on("change keyup", function(){
		var result = requiredCheck4();

		if(result) {
			$(".btn.online_btn").addClass("green_btn").removeClass("gray_btn");
		} else {
			$(".btn.online_btn").removeClass("green_btn").addClass("gray_btn");
		}
	});
});


// 리스트 반응형 처리
function listR(){
	if ($(window).width() < 780) {
		for(var a = 0; a < $('.tab_area .clearfix').length; a++){
			var cf = $('.tab_area .clearfix').eq(a);
			var cfTotalWidth = 0;

			for(var b = 0; b < cf.children('li').length; b++){
				cfTotalWidth += cf.children('li').eq(b).width() + 10;
			}
			cf.css("width", cfTotalWidth);
		}
		//tab scroll
		if($('.tab_area a').hasClass('active')){
			var offset = $('.tab_area .active').offset();
			var left = offset.left;
			$('.tab_area').scrollLeft(left - 20);
		}
	}
}

// 필수값 입력 여부 확인
function requiredCheck2() {
	var required = $(".required");
	for(i=0; i<required.length; i++) {
		if($(required[i]).val() == "" || $(required[i]).val() == null) {
			return false;
		}
	}
	if(!$("input[name=attendance_type]").is(":checked") || !$("input[name=rating]").is(":checked") || !$("input[name=registration_type]").is(":checked")) {
		return false;
	}

	return true;
}
// 필수값 입력 여부 확인
function requiredCheck4() {
	var required = $(".required3");
	var required_val;
	for(i=0; i<required.length; i++) {
		required_val = $(required[i]).val();
		if(required_val.trim().length <= 0 || $(required[i]).val() == "" || $(required[i]).val() == null) {
			return false;
		}
	}
	return true;
}