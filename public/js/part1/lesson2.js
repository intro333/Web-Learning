//Меняем цвет квадрата при наведении мыши
$(document).on('mouseover', '.square', function () {
    $(this).css('background','#66CDAA')
});

//Меняем цвет круга при нажатии мыши
$(document).on('click', '.circle', function () {
    $(this).css('background','#FF4500')
});

//Сбросить
$(document).on('click', '.reset-button', function () {
    $('.square').css('background','')
});
$(document).on('click', '.reset-button', function () {
    $('.circle').css('background','')
});