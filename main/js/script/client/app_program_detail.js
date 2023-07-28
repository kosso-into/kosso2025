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
        url : PATH+"ajax/client/ajax_app_program.php",
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
                let abstract_html = "";
                let chairpersons_html = "";
                let preview_html = "";
                let detail_text_html = "";
                const abstract_category_list= ['5','6','7','8','9','10','11','12','13','14','15','16','17','18'];

                $('.program_detail_ul').html(_html);

                Object.values(program_list).forEach(pl=>{
                    Object.values(pl.contents).forEach(cl=>{
                        if(cl.speaker_idx!=null){
                            speaker_info_html += '<a href="/main/app_invited_speakers_detail.php?idx='+cl.speaker_idx+'" class="invited_tag">Speakers info</a>';
                            speaker_html += '<p class="chairperson">'+'<span class="bold">'+cl.first_name+' '+cl.last_name+'</span>'+'('+cl.affiliation+', '+cl.nation+')'+'</p>';
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

                    if(abstract_category_list.includes(pl.program_category_idx)){
                        abstract_html += '<a href="'+pl.path+'" class="right_tag" onclick="openPDF(event)">Abstract</a>'
                    }

                    if(pl.chairpersons!=null){
                        var chairperson = "";
                        if((pl.chairpersons.split(',').length-1)>=2){
                            chairperson = "Chairpersons: ";
                        } else {
                            chairperson = "Chairperson: "
                        }
                        chairpersons_html += '<p class="chairperson"><span class="bold">'+chairperson+'</span>'+pl.chairpersons+'</p>'
                    }

                    if(pl.preview!=null){
                        preview_html = ' <button class="preview_btn">Preview</button>';
                        detail_text_html += '<div class="detail_text">'+pl.preview+'</div>';
                    }

                    _html += '<li name="'+pl.program_tag_name+'">' +
                        '<div class=main>'+
                        abstract_html+
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
                    abstract_html="";
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

                    $(".right_tag").click(function(event){
                        event.preventDefault();
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

function AlarmMessage(msg) {
    $('.alarm_message_pop .tags').text(msg).show();
    $('.alarm_message_pop').show();
}

function Schedule(e){
    var program_idx= e.target.value;
    let is_push = "";
    if(e.target.classList.contains('on')){
        var check_schedule=0;
    } else {
        var check_schedule=1;
    }

    $.ajax({
        url: PATH + "ajax/client/ajax_app_program.php",
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
                    AlarmMessage('Cancle');
                    e.target.classList.remove('on');
                    is_push = 'delete';
                    setAlarm(program_idx, is_push);
                    return;
                } else {
                    e.target.classList.add('on');

                    $('.program_alarm_pop').show()
                    $(".is_alarm_y").click(function(event) {
                        $('.program_alarm_pop').hide();
                        is_push = 'insert';
                        setAlarm(program_idx, is_push);
                        AlarmMessage('Add alarm complete');
                    });
                    $(".is_alarm_n").click(function(event) {
                        $('.program_alarm_pop').hide();
                        AlarmMessage('Complete');
                    });
                }
            } else {
                alert("schedule error.");
                return;
            }
        }
    });
}

function openPDF(e){
    let path=e.target.href;

    if (typeof(window.AndroidScript) != "undefined" && window.AndroidScript != null) {
        window.AndroidScript.openPDF(path);
    } else if(window.webkit && window.webkit.messageHandlers!=null) {
        try{
            window.webkit.messageHandlers.openPDF.postMessage(path);
        } catch (err){
            console.log(err);
        }
    }
}

function setAlarm(program_idx, is_push){
    $.ajax({
        url: PATH + "ajax/client/ajax_app_program.php",
        type: "POST",
        data: {
            flag: "alarm",
            program_idx: program_idx,
            is_push: is_push
        },
        dataType: "JSON",
        success: function (res) {
            if (res.code == 200) {
                console.log("success")
            } else {
                alert("setAlarm error.");
                return;
            }
        }
    });
}

