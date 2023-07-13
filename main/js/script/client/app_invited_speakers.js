function favorite(e){
    var invited_speaker_idx = e.target.value;
    if(e.target.classList.contains('on')){
        var check_favorite=0;
    } else {
        var check_favorite=1;
    }

    $.ajax({
        url: PATH + "ajax/client/ajax_invited_speakers.php",
        type: "POST",
        data: {
            flag: "favorite",
            invited_speaker_idx: invited_speaker_idx,
            check_favorite: check_favorite
        },
        dataType: "JSON",
        success: function (res) {
            if (res.code == 200) {
                // favorite 버튼 토글
                if(e.target.classList.contains('on')){
                    e.target.classList.remove('on');
                } else {
                    e.target.classList.add('on');
                }
            } else {
                alert("favorite error.");
                return;
            }
        }
    });
}

function selectFavorite(){
    let keywords = $('#keywords').val();

    $.ajax({
        url: PATH + "ajax/client/ajax_invited_speakers.php",
        type: "POST",
        data: {
            flag: "select",
            keywords: keywords
        },
        dataType: "JSON",
        success: function (res) {
            if (res.code == 200) {
                let keywords_list = res.result;
                let _html = "";
                let ul_html = '<p class="category"></p>'+'<ul class=speakers_list>'+'</ul>';

                Object.values(keywords_list).forEach(kl=>{
                    let check_favorite = "";
                    if(kl.favorite_check=='Y'){
                        check_favorite = 'on';
                    }

                    _html +=
                            '<li>'+
                                '<a href="./app_invited_speakers_detail.php?idx='+kl.idx+'">'+
                                    '<div class="speakers_info">'+
                                        '<img src="./img/img_speakers08.jpg" alt="">'+
                                            '<p>'+kl.first_name+' '+kl.last_name+'</p>'+
                                    '</div>'+
                                '</a>'+
                                '<button type="button" class="favorite_btn'+check_favorite+'" value="'+kl.idx+'">'+'</button>'+
                            '</li>';
                })

                ul_html = '<ul class="speakers_list">'+_html+'</ul>';
                $('.speakers_area').html(ul_html);

                // $(".favorite_btn").click(function(e){
                //     favorite(e);
                // })
            } else {
                alert("favorite error.");
                return;
            }
        }
    });

}