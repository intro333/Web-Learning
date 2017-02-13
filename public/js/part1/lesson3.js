//
$(document).on('click', 'p .change-to-bold', function () {
    $(this).css('font-weight','bold');
});

//Сбросить
$(document).on('click', '.reset-button', function () {
    $('p .change-to-bold').css('font-weight','normal');
});