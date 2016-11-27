/*
 * Действия при загрузке страницы
 */
$( document ).ready(function() {
    /*Цвет для тегов HTML*/
    var body = $('div.block-console-inside:eq(0)');
    var text = body.text().replace(/(class=)/g, "<span style='color: #2F4F4F;'><b>$1</b></span>")
        .replace(/\<(\/div)\>/g, "<<b>$1</b>>")//со слешом ставится выше, чем без слеша(/div)
        .replace(/(div)/g, "<b>$1</b>")
        .replace(/\<(\/h5)\>/g, "<<b>$1</b>>")
        .replace(/\<(h5)\>/g, "<<b>$1</b>>")
        .replace(/\"(.+?)\"/g, "<span style='color: forestgreen;'><b>\"$1\"</b></span>");
    body.html(text);

    /*Цвет для селекторов CSS*/
    var body = $('div.block-console-inside:eq(1)');
    // console.log(body.html())
    var text = body.text().replace(/\.(.+?)\ /g, "<b>.$1 </b>")
        .replace(/\:(.+?)\;/g, "<span style='color: forestgreen;'>:$1;</span>")
        .replace(/\#(.+?)\;/g, "<span style='color: forestgreen;'><b>#$1;</b></span>")
        .replace(/(px)/g, "<b>$1</b>")
    body.html(text);

    /*Цвет для селекторов Jquery*/
    var body = $('div.block-console-inside:eq(2)');
    var text = body.text().replace(/(document)/g, "<span style='color: #4B0082;'><b>$1</b></span>")
        .replace(/\'(.+?)\'/g, "'<span style='color: forestgreen;'>$1</span>'")
        .replace(/\/\*(.+?)\*\//g, "<span style='color: #808080;'>/*$1*/</span>")
        .replace(/\)\.(.+?)\(/g, ").<span style='color: #CD853F;'>$1</span>(")
        .replace(/(\$)/g, "<span style='color: #4B0082;'>$1</span>")
        .replace(/(this)/g, "<span style='color: #0000CD;'><b>$1</b></span>")
        .replace(/(function)/g, "<span style='color: #0000CD;'><b>$1</b></span>")
        .replace(/(var)/g, "<span style='color: #0000CD;'><b>$1</b></span>")
    body.html(text);

    /*Для блока Результат*/
    var val = $('div.block-console-inside:eq(3)');
    val.html(val.text());

    //Описание в уроке.main-description
    var body = $('p.main-description span');
    var text = body.text()
    body.html(text);

    var body = $('div.inside-console:eq(3)');
    body.html(body.text());
    console.log(body.text())
});

/*Увеличить тень одного из 4х боксов урока*/
$('.block-lesson-child').mouseover(function () {
    $(this).css('box-shadow', '0px 4px 19px -4px rgba(0,0,0,0.85)')
    $(this).css('-moz-box-shadow', '0px 4px 19px -4px rgba(0,0,0,0.85)')
    $(this).css('-webkit-box-shadow', '0px 4px 19px -4px rgba(0,0,0,0.85)')
})

/*Вернуть в исходное состояние тень одного из 4х боксов урока*/
$('.block-lesson-child').mouseout(function () {
    $(this).css('box-shadow', '')
    $(this).css('-moz-box-shadow', '')
    $(this).css('-webkit-box-shadow', '')
})
