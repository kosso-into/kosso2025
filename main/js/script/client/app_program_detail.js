function selectProgram(){
    let date = $('.program > .on').val();
    let option_room = $("#option_room option:selected").val();
    let option_category = $("#option_category option:selected").val();

    let data = {
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
                let program_list = res.result;
                let _html = "";
                let contents_html = "";
                let speaker_info_html = "";
                let speaker_html = "";
                let chairpersons_html = "";
                let preview_html = "";
                let detail_text_html = "";

                $('.program_detail_ul').html(_html);

                Object.values(program_list).forEach(pl=>{
                    Object.values(pl.contents).forEach(cl=>{
                        if(cl.speaker!=null){
                            speaker_info_html += '<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>';
                            speaker_html += '<p class="chairperson">'+'<span class="bold">'+cl.speaker+'</span>'+cl.speaker_aff+'</p>';
                        }

                        contents_html += '<div>'+
                            '<p class="title">'+cl.contents_title+'</p>'+
                            speaker_html+
                            '<div class="info">'+
                            '<span class="time">'+cl.start_time+'-'+cl.end_time+'</span>'+speaker_info_html+
                            '</div>'+
                            '</div>';

                        speaker_info_html="";
                        speaker_html="";
                    })

                    var schedule = "";
                    if(pl.schedule_check=='Y') {
                        schedule = 'on';
                    }

                    if(pl.chairpersons!=null){
                        chairpersons_html += '<p class="chairperson"><span class="bold">Chairpersons: </span>'+pl.chairpersons+'</p>'
                    }

                    if(pl.preview!=null){
                        preview_html = ' <button class="preview_btn">Preview</button>';
                        detail_text_html += '<div class="detail_text">'+pl.preview+'</div>';
                    }

                    _html += '<li name="">' +
                        '<div class=main>'+
                        '<a href="/main/app_abstract.php" class="right_tag">Abstract</a>'+
                        '<p class="title">'+pl.program_name+'</p>'+
                        chairpersons_html+
                        '<div class="info">'+
                        '<button class="'+schedule+'" value="'+pl.idx+'">'+'</button>'+
                        '<span class="time">'+pl.start_time+'-'+pl.end_time+'</span>'+
                        '<span class="branch">'+pl.program_place_name+'</span>'+
                        '</div>'+ preview_html+
                        '</div>'+ detail_text_html+
                        '<div class="detail">'+contents_html+'</div>'+
                        '</li>';

                    $('.program_detail_ul').html(_html);
                    contents_html= "";
                    preview_html="";
                    detail_text_html="";
                    chairpersons_html="";

                    $(".app_scientific .program_detail_ul .main").on("click", function(){
                        $(this).siblings(".detail").stop().slideToggle();
                    });

                    // Scientific Program 내 스케줄 버튼 토글
                    $(".app_scientific .info button").click(function(event){
                        event.preventDefault();
                        event.stopPropagation();
                        // $(".program_alarm_pop").show();
                        // $(this).toggleClass("on");
                        Schedule(event);
                    });

                    $(".program_detail_btn").click(function(event) {
                        event.preventDefault();
                        event.stopPropagation();
                        $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
                    });

                    $(".preview_btn").on("click", function(event){
                        event.preventDefault();
                        event.stopPropagation();
                        $(this).parent(".main").siblings(".detail_text").stop().slideToggle();
                        $(this).toggleClass("on");
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

function Schedule(e){
    var program_idx= e.target.value;
    if(e.target.classList.contains('on')){
        var check_schedule=0;
    } else {
        var check_schedule=1;
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
                if(e.target.classList.contains('on')){
                    e.target.classList.remove('on');
                } else {
                    e.target.classList.add('on');
                    $(".program_alarm_pop").show();
                }
            } else {
                alert("schedule error.");
                return;
            }
        }
    });
}
