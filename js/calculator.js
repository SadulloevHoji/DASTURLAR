$(function () {
    let number = null;
    let number1 = null;
    let number2 = null;
    let sign = null;
    $(".num").click(function () {
        number = $(this).text();
        number += number;
        if (sign===''){
            number1 = number;
            number = '';
        }
        display_result(number1 +sign+ number2);
    });
    $(".sign").click(function () {
        sign = $(this).text();
        display_result(sign);
    });
});
function display_result(num){
    $(".result").html(num);
}