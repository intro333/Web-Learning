@extends('app')
@section('content')

    <h2 class="lesson-number">Урок 1</h2>

    <label class="lesson-number">Описание: Изменяем цвет фигур при наведении и клике мыши.</label>
    <!-- Перенос строки(в данном случает на две строчки)-->
    <br/>

    <div class="main-blok">
        <div class="block-console-left">
            <div class="descrption">HTML</div>
<textarea autocomplete="off" class="textareaCode" spellcheck="false" wrap="logical" readonly>
<label>Меняем цвет квадрата при наведении мыши</label>
<!--Эти элементы меняют цвет при наведении мыши-->
<div class="container">
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
</div>

<br/>

<label>Меняем цвет круга по клику мыши</label>
<!--Эти элементы меняют цвет при клике мыши-->
<div class="container">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
</div>
</textarea>
        </div>

        <div class="block-console-left">
            <div class="descrption">CSS</div>
<textarea autocomplete="off" class="textareaCode" spellcheck="false" wrap="logical" readonly>
.square {
    width:110px;
    height:100px;
    background:#2ca02c;
    float:left;
    margin:15px;
    text-align:center;
}

.circle {
    float:left;
    width: 100px;
    height: 100px;
    background: cadetblue;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px;
    margin:15px;
}
</textarea>
        </div>

        <div class="block-console-left">
            <div class="descrption">JQuery</div>
<textarea autocomplete="off" class="textareaCode" spellcheck="false" wrap="logical" readonly>
//Меняем цвет квадрата при наведении мыши
$(document).on('mouseover', '.square', function () {
    $(this).css('background','#66CDAA')
});

//Меняем цвет круга при нажатии мыши
$(document).on('mouseup', '.circle', function () {
    $(this).css('background','#FF4500')
});
</textarea>
        </div>

        <div class="block-console-result">
            <div class="descrption">Результат</div>
            <div class="inside-console">
            <label>Меняем цвет квадрата при наведении мыши</label>
            <!--Эти элементы меняют цвет при наведении мыши-->
            <div class="container">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>

            <br/>

             <label>Меняем цвет круга по клику мыши</label>
            <!--Эти элементы меняют цвет при клике мыши-->
            <div class="container">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
    {{--@include('includes.nextOrPrevLesson')--}}

    <!--Part 1 Подключаем стили и сценарии для этого урока-->
    <script src="/js/part1/lesson1.js"></script>
    <link rel="stylesheet" href="/css/part1/lesson1.css">
@endsection