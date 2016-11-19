$(document).on('click', '.what-is-description', function () {
    $(".popup_what-is-description").fadeIn(300);//выводим всплывающее окно
    var token = $('#_token').val();
    var part = $('#part-number').val();
    var lesson = $('#lesson-number').val();
    var attr = $(this).attr('data-string');

    var url = "/lessons/getDescription?_token=" + token + "&part_id=" + part + "&lesson_id=" + lesson + '&attr=' + attr ;
    $.ajax({
        type: 'POST',
        url: url,
        dataType: 'text',
        success: function (data) {
            $('#blok2').html(data)
        }
    });
});

$(document).on('click', '.popup_what-is-description_bg', function () {
    $(".popup_what-is-description").fadeOut(300);   //убираем всплывающее окно
});

function showOutPopup() {
    $(".popup_what-is-description").fadeOut(300);   //убираем всплывающее окно
};

