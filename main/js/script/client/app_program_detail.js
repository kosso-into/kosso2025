function selectProgram(){
    var date = $('.program > .on').val();
    var option_room = $("#option_room option:selected").val();
    var option_category = $("#option_category option:selected").val();

    var data = {
        date : date,
        option_room : option_room,
        option_category : option_category
    };

    $.ajax({
        url : PATH+"ajax/client/ajax_program.php",
        type : "POST",
        data :  {
            flag : "select",
            data : data
        },
        dataType : "JSON",
        success : function(res){
            if(res.code == 200) {
                var program_list = res.result;
                var _html = "";
                var contents_html = "";
                var author_html = "";

                $('.program_detail_ul').html(_html);

                Object.values(program_list).forEach(pl=>{
                    Object.values(pl.contents).forEach(cl=>{
                        if(cl.author!=null){
                            author_html += '<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>';
                        }

                        contents_html += '<div>'+
                            '<p class="title">'+cl.contents_title+'</p>'+
                            '<p class="chairperson">'+
                            '<span class="bold">'+cl.author+'</span>'+'(Chungnam National University, Republic of Korea)'+
                            '</p>'+
                            '<div class="info">'+
                            '<span class="time">'+cl.start_time+'-'+cl.end_time+'</span>'+author_html+
                            '</div>'+
                            '</div>';
                    })

                    _html += '<li name="">' +
                        '<div class=main>'+
                        '<a href="/main/app_abstract.php" class="right_tag">Abstract</a>'+
                        '<p class="title">'+pl.program_name+'</p>'+
                        '<p class="chairperson"><span class="bold">Chairpersons:</span> Yong-ho Lee (Yonsei University, Republic of Korea)</p>'+
                        '<div class="info">'+
                        '<button value="'+pl.idx+'">'+'</button>'+
                        '<span class="time">'+pl.start_time+'-'+pl.end_time+'</span>'+
                        '<span class="branch">'+pl.program_place_name+'</span>'+
                        '</div>'+
                        '</div>'+
                        '<div class="detail">'+contents_html+'</div>'+
                        '</li>';

                    $('.program_detail_ul').html(_html);
                    contents_html= "";

                    if(pl.preview){
                        $(".chairperson").parent("div").append("<button class='preview_btn'>Preview</button>");
                        $(".preview_btn").on("click", function(event){
                            event.preventDefault();
                            event.stopPropagation();
                            $(this).parent(".main").siblings(".detail_text").stop().slideToggle();
                            $(this).toggleClass("on");
                        });
                    }

                    $(".app_scientific .program_detail_ul .main").on("click", function(){
                        $(this).siblings(".detail").stop().slideToggle();
                    });

                    // Scientific Program 내 스케줄 버튼 토글
                    $(".app_scientific .info button").click(function(event){
                        event.preventDefault();
                        event.stopPropagation();
                        $(".program_alarm_pop").show();
                        $(this).toggleClass("on");
                        Schedule(event);
                    });
                })

            } else if(res.code == 400) {
                alert(res.msg);
                return;
            } else {
                alert(res.msg);
                return;
            }
        }
    });
}

$(".app_scientific .info button").click(function(event){


});

function Schedule(e){
    var program_idx= e.target.value;
    if(e.target.hasClass("on")=== true){
        var check_schedule=0; // 스케줄 취소
    } else {
        var check_schedule=1; // 스케줄 추가
    }

    $.ajax({
        url: PATH + "ajax/client/ajax_program.php",
        type: "POST",
        data: {
            flag: "schedule",
            program_idx: program_idx,
            check_schedule: check_schedule
        },
        dataType: "JSON",
        success: function (res) {
            if (res.code == 200) {
                // Scientific Program 내 스케줄 버튼 토글
                $(".app_scientific .info button").click(function(event){
                    event.preventDefault();
                    event.stopPropagation();
                    $(".program_alarm_pop").show();
                    $(this).toggleClass("on");
                });
            } else {
                alert("schedule error.");
                return;
            }
        }
    });
}

