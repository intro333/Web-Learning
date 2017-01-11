//Скрыть квадрат по клику
$(document).on('click', '.square', function () {
    $(this).slideUp();
    console.log("1й объект: " + $('.square'))
    console.log("2й объект: " + this)
});

//Сбросить
$(document).on('click', '.reset-button', function () {
    $('.square').slideDown();
});

/*tooltip JS*/
$(document).on('mouseover', '.tooltipTextJsP1L1:eq(0)', function () {
    $('.tooltipDescTextJsP1L1:eq(0)').slideDown(300);
});
$(document).on('mouseout', '.tooltipTextJsP1L1:eq(0)', function () {
    $('.tooltipDescTextJsP1L1:eq(0)').slideUp();
});

$(document).on('mouseover', '.tooltipTextJsP1L1:eq(1)', function () {
    $('.tooltipDescTextJsP1L1:eq(1)').slideDown(300);
});
$(document).on('mouseout', '.tooltipTextJsP1L1:eq(1)', function () {
    $('.tooltipDescTextJsP1L1:eq(1)').slideUp();
});