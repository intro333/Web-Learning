//Скрыть квадрат по клику
$(document).on('click', '.square', function () {
    $(this).slideUp();
});

//Сбросить
$(document).on('click', '.reset-button', function () {
    $('.square').slideDown();
});