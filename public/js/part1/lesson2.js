//Меняем цвет квадрата при клике мыши
$(document).on('click', '.rectangle', function () {
    $(this).css('background','#FF4500')
    // $(this).css('background','#66CDAA')
});

//Сбросить
$(document).on('click', '.reset-button', function () {
    $('.rectangle').css('background','')
});