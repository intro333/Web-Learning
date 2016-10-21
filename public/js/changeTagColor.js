/*
 * Действия при загрузке страницы
 */
$( document ).ready(function() {
    /*Цвет для тегов HTML*/
    var body = $('div.inside-console:eq(0)');
    var text = body.html().replace(/(class=)/g, "<span style='color: #2F4F4F;'><b>$1</b></span>")
        .replace(/(div)/g, "<b>$1</b>")
        .replace(/(label)/g, "<b>$1</b>")
        .replace(/\"(.+?)\"/g, "<span style='color: forestgreen;'><b>\"$1\"</b></span>")
        .replace(/\&gt;(.+?)\&lt;/g, "&gt;<span style='color: black;'>$1</span>&lt;");
    body.html(text);
    //Пронумеровать каждую строчку в numeric-block
    var result = $('div.inside-console:eq(0)').text().split('\n');
    var num = 0;
    $.each(result, function( index, value ) {
        if (index == 0){} else {
            num += index + '<br>';
            if (num == '01<br>') {
                num = num.replace('0', '');
                $('.numeric-block:eq(0)').html(num);
            } else {
                $('.numeric-block:eq(0)').html(num);
            }
        }
    });

    /*Цвет для селекторов CSS*/
    var body = $('div.inside-console:eq(1)');
    var text = body.html().replace(/\.(.+?)\ /g, "<b>.$1 </b>")
        .replace(/\:(.+?)\;/g, "<span style='color: forestgreen;'>:$1;</span>")
        .replace(/\#(.+?)\;/g, "<span style='color: forestgreen;'><b>#$1;</b></span>")
        .replace(/(px)/g, "<b>$1</b>")
    body.html(text);
    //Пронумеровать каждую строчку в numeric-block
    var result = $('div.inside-console:eq(1)').text().split('\n');
    var num = 0;
    $.each(result, function( index, value ) {
        if (index == 0){} else {
            num += index + '<br>';
            if (num == '01<br>') {
                num = num.replace('0', '');
                $('.numeric-block:eq(1)').html(num);
            } else {
                $('.numeric-block:eq(1)').html(num);
            }
        }
    });

    /*Цвет для селекторов Jquery*/
    var body = $('div.inside-console:eq(2)');
    var text = body.html().replace(/(document)/g, "<span style='color: #4B0082;'><b>$1</b></span>")
        .replace(/\"(.+?)\"/g, "'<span style='color: forestgreen;'>$1</span>'")
        .replace(/\/\*(.+?)\*\//g, "<span style='color: #808080;'>/*$1*/</span>")
        .replace(/\)\.(.+?)\(/g, ").<span style='color: #CD853F;'>$1</span>(")
        .replace(/(\$)/g, "<span style='color: #4B0082;'>$1</span>")
        .replace(/(this)/g, "<span style='color: #0000CD;'><b>$1</b></span>")
        .replace(/(function)/g, "<span style='color: #0000CD;'><b>$1</b></span>")
        .replace(/(var)/g, "<span style='color: #0000CD;'><b>$1</b></span>")
    body.html(text);
    //Пронумеровать каждую строчку в numeric-block
    var result = $('div.inside-console:eq(2)').text().split('\n');
    var num = 0;
    $.each(result, function( index, value ) {
        if (index == 0){} else {
            num += index + '<br>';
            if (num == '01<br>') {
                num = num.replace('0', '');
                $('.numeric-block:eq(2)').html(num);
            } else {
                $('.numeric-block:eq(2)').html(num);
            }
        }
    });
});

/*Увеличить тень одного из 4х боксов урока*/
$('.block-console-result').mouseover(function () {
    $(this).css('box-shadow', '0px 4px 19px -4px rgba(0,0,0,0.85)')
    $(this).css('-moz-box-shadow', '0px 4px 19px -4px rgba(0,0,0,0.85)')
    $(this).css('-webkit-box-shadow', '0px 4px 19px -4px rgba(0,0,0,0.85)')
})

/*Вернуть в исходное состояние тень одного из 4х боксов урока*/
$('.block-console-result').mouseout(function () {
    $(this).css('box-shadow', '')
    $(this).css('-moz-box-shadow', '')
    $(this).css('-webkit-box-shadow', '')
})
