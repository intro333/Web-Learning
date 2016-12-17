//mob-nav-elem
$(document).on('click', '.mob-nav-elem', function () {
    // $('.mob-nav-elem').css('opacity', '0.4');
    $('.mob-nav-elem .mob-rectangle').css('background', '#333333');
    $('.popup_mob-nav-elem').slideDown(110);

});
$(document).on('click', '.popup_mob-nav-elem_bg', function () {
    // $('.mob-nav-elem').css('opacity', '');
    $('.mob-nav-elem .mob-rectangle').css('background', '');
    $(".popup_mob-nav-elem").fadeOut(50);
});
//popup what-is-description
$(document).on('click', '.what-is-description', function () {
    $(".popup_main-description").fadeOut(50);
    $(".popup_what-is-description").fadeIn(300);//выводим всплывающее окно
    var token = $('#_token').val();
    var part = $('#part-number').val();
    var lesson = $('#lesson-number').val();
    var attr = $(this).attr('data-string');
    var attrText = $(this).attr('data-text');
    var windowWidth  = $(window).width();
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
console.log('Width: ' + windowWidth + ', height: ' + windowHeight);
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
};//END what-is-description

//popup main-description-popup
$(document).on('click', '.main-description', function () {
    var display = $('.mobile-nav-bar-2').css('display');
    var top = $(this).offset().top;
    var left = $(this).offset().left;
    if (display == 'none') {
        $("#blok_one").css({top: top + 25, left: left - 90});
    } else {
        $("#blok_one").css({top: top + 25, left: left - 120});
    }

    $("#blok_one div").attr('data-text', $(this).attr('data-text'));
    $("#blok_one div").attr('data-string', $(this).attr('data-string'));
    $(".popup_main-description").slideDown(110);
    // $(".popup_main-description").slideDown(110);
});
$(document).on('click', '.popup_main-description_bg', function () {
    $(".popup_main-description").fadeOut(50);
});//END main-description-popup

//menu-option
$(document).on('click', '#menu-option', function () {
    var display = $('.mob-nav-text').css('display');
    var top = $(this).offset().top;
    var left = $(this).offset().left;
    if (display == 'none') {
        $(".popup_menu-option").css({top: top + 55, left: left - 55});
    } else {
        $(".popup_menu-option").css({top: top + 55, left: left - 15});
    }

    $('#menu-option a').css('color', '#fff');
    $(this).css('background', '#2e6da4');
    $('.popup_menu-option').slideDown(110);
});
$(document).on('click', '.popup_menu-option_bg', function () {
    $('#menu-option').css('background', '');
    $('#menu-option a').css('color', '');
    $(".popup_menu-option").fadeOut(50);
});
//mobile-menu-option
$(document).on('click', '#mobile-menu-option', function () {
    var top = $(this).offset().top;
    var left = $(this).offset().left;
    console.log(left)
    $(".popup_mobile-menu-option").css({top: top + 39, left: left - 50});
    $(this).css('color', '#222');
    $('.popup_mobile-menu-option').slideDown(110);
});
$(document).on('click', '.popup_mobile-menu-option_bg', function () {
    $('#mobile-menu-option').css('background', '');
    $('#mobile-menu-option').css('color', '');
    $(".popup_mobile-menu-option").fadeOut(50);
});
$(document).on('click', '.on-off-numeration', function () {
    var opt = $('.on-off-numeration .right-for-options');
    var status = opt.hasClass('is-active');
    if (status) {
        opt.css('display', 'none');
        opt.removeClass('is-active');
        $('.block-console-inside span[data-line-number]').css('display', 'none');
    } else {
        opt.css('display', 'block');
        opt.addClass('is-active');
        $('.block-console-inside span[data-line-number]').css('display', 'inline');
    }
});
//END main-description-popup