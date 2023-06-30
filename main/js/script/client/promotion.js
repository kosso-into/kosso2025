$(document).ready(function() {

    $(".apply_btn").on("click", function () {
        const promotionCode = $("input[name=promotion_code]").val();
        const recommender = $("input[name=recommended_by]").val();

        if (!promotionCode) {
            $("input[name=promotion_code]").focus();
            alert("Please Enter the code.");
            return
        }

        if (!recommender) {
            $("input[name=recommended_by]").focus();
            alert("Please Enter the recommender.");
            return
        }

        select_promotion_code(promotionCode,recommender);
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
            success: function (res) {
                if (res.code == 200) {
                    var result=res.result;
                    if(result.count_limit==0){
                        alert("이미 사용된 프로모션코드입니다.");
                        return;
                    } else{
                        var discount_rate=result.discount_rate;
                            $("input[name=promotion_code_idx]").val(result.idx).change();
                            if(discount_rate == 0){
                                $("input[name=promotion_confirm_code]").val(0).change();
                            } else if (discount_rate == 1) {
                                $("input[name=promotion_confirm_code]").val(1).change();
                            } else if (discount_rate == 2) {
                                $("input[name=promotion_confirm_code]").val(2).change();
                        }
                    }
                } else {
                    alert("select promotion error.");
                    return;
                }
            }
        });
    }

    function regist_promotion_code(result, recommender) {
        $.ajax({
            url: PATH + "ajax/client/ajax_promotion.php",
            type: "POST",
            data: {
                flag: "regist",
                data: result,
                recommender: recommender
            },
            dataType: "JSON",
            success: function (res) {
                if (res.code == 200) {
                    alert("프로모션 코드가 적용되었습니다.");
                } else {
                    alert("regist promotion error.");
                    return;
                }
            }
        });
    }
});