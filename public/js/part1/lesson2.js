//Меняем цвет квадрата при клике мыши
$(document).on('click', '.triangle', function () {
    $(this).css('background','#FF4500')
    // $(this).css('background','#66CDAA')
});

//Сбросить
$(document).on('click', '.reset-button', function () {
    $('.triangle').css('background','')
});