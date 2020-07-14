let number = '';
let number1 = '';
let number2 = '';
let sign = '';
let mynumber = '';

$(function () {

    $(".num").click(function () {
        number = $(this).text();
        if (sign!==''){
            number1+=number;
        }else{
            number2+=number;
        }

        display_result(number1+sign+number2);

    });


    $(".sign").click(function () {
        sign = $(this).text();
        if (sign==='='){
            calcualte();
        }
    });

});


function calcualte(){
   let result = eval()
}





function display_result(num){
    $(".result").html(num);
}