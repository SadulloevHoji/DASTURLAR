let number = '';
let number1 = '';
let number2 = '';
let sign = '';
let formula = '';
$(function () {
    //Raqamlarni bosganizda bajaralyotgan harakat
    $(".num").click(function () {
        number = $(this).text();
        if (sign !== '') {
            number1 += number;
            number = '';
        } else {
            number2 += number;
        }
        display_result(number2 + sign + number1);
        formula = eval(number2 + sign + number1);
    });
    //Belgilarni bosganizda bajaraliyotgan harakat
    $(".sign").click(function () {
        //Bosilgan beligini toplash
        sign = $(this).text();
        //Belgilarni HTML entity formatida oddiy mathematika operator
        //beligisiga konvertatsiya qilish
        if (sign === '÷') {
            sign = '/';
        }
        if (sign === '×') {
            sign = '*';
        }
        if (sign === '−') {
            sign = '-';
        }
        if (sign === 'AC') {
            Ac_button();
        }
        if (sign === '=') {
            display_result(formula);
            Ac_button(false);
        }
    });
});
//Mathetika operatsiyasini natijasini ekranga chiqarish funktsiyasi
function display_result(num) {
    //result degan class div ichiga HTML formatida print qilish
    $(".result").html(num);
}
//Kalkyulatrni qayta o'rnatish funktsiyasi
function Ac_button(reset = true) {
    number = '';
    number1 = '';
    number2 = '';
    sign = '';
    //Agar reset degan o'zgaruvchan (Variable) to'gri bolsa
    //Ekrandagi natijani 0 ga tenglashtirish
    if (reset) {
        display_result(0);
    }
}