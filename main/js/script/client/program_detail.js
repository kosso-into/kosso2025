$.ajax({
    url: PATH + "ajax/client/ajax_program_detail.php",
    type: "POST",
    data: {
        flag: "detail",
        idx: id
    },
    dataType: "JSON",
    success: function (res) {
        // console.log(res.data)
        if (res.code == 200) {
            show_modal(res.data) 
        } else {
            return;
        }
    }
});