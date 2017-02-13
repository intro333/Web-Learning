//
$(document).on('click', '.change-color', function () {
    $('p').css('color','green');
});

//Сбросить
$(document).on('click', '.reset-button', function () {


    $('p').css('color','black');
});