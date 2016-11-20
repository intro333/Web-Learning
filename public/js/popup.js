$(document).on('click', '.what-is-description', function () {
    $(".popup_what-is-description").fadeIn(300);//выводим всплывающее окно
    var token = $('#_token').val();
    var part = $('#part-number').val();
    var lesson = $('#lesson-number').val();
    var attr = $(this).attr('data-string');
    var attrText = $(this).attr('data-text');
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    //Стереть предыдущее содержимое
    $('#blok1').text('');
    $('#blok2').html('');
    if (windowWidth > 1024 && windowHeight > 600) {
        $('.for-three-block').css('top', $(window).scrollTop() + 150);
        console.log($(window).scrollTop())
    } else if (windowHeight >= 960 && windowHeight < 1100) {
        console.log($(window).scrollTop())
        $('.for-three-block').css('top', $(window).scrollTop() + 150);
        $('.for-three-block').css('width', '90%');
    } else {
        $('.for-three-block').css('top', $(window).scrollTop() + 50);
        $('.for-three-block').css('width', '90%');
        console.log($(window).scrollTop())
    }
console.log('Width: ' + windowWidth + ', height: ' + windowHeight)
    var url = "/lessons/getDescription?_token=" + token + "&part_id=" + part + "&lesson_id=" + lesson + '&attr=' + attr ;
    $.ajax({
        type: 'POST',
        url: url,
        dataType: 'text',
        success: function (data) {
            $('#blok1').text(attrText);
            $('#blok2').html(data);
        }
    });
});

$(document).on('click', '.popup_what-is-description_bg', function () {
    $(".popup_what-is-description").fadeOut(300);   //убираем всплывающее окно
});

function showOutPopup() {
    $(".popup_what-is-description").fadeOut(300);   //убираем всплывающее окно
};

