$(document).ready(function() {

    $(".apply_btn").on("click", function () {
        const promotionCode = $("input[name=promotion_code]").val();
        const recommender = $("input[name=recommended_by]").val();

        if (!promotionCode) {
            $("input[name=promotion_code]").focus();
            alert("Please Enter the code.");
            return
        }

        if (!recommendBy) {
            $("input[name=recommended_by]").focus();
            alert("Please Enter the recommender.");
            return
        }


        if (promotionCode == 0) {
            $("input[name=promotion_confirm_code]").val(0).change();
        } else if (promotionCode == 1) {
            $("input[name=promotion_confirm_code]").val(1).change();
        }
    });

    function select_promotion_code(promotion_code, recommender) {
        $.ajax({
            url: PATH + "ajax/client/ajax_promotion.php",
            type: "POST",
            data: {
                flag: "select",
                promotion_code: promotion_code
            },
            dataType: "JSON",
            success: function (res, recommender) {
                if (res.code == 200) {
                    regist_promotion_code(res, recommender);
                } else {

                    alert("select promotion error.");
                    return;
                }
            }
        });
    }

    function regist_promotion_code(res, recommender) {
        $.ajax({
            url: PATH + "ajax/client/ajax_promotion.php",
            type: "POST",
            data: {
                flag: "regist",
                promotionCode: promotionCode,
                recommendBy: recommender
            },
            dataType: "JSON",
            success: function (res) {
                if (res.code == 200) {

                } else {
                    alert("regist promotion error.");
                    return;
                }
            }
        });
    }
}