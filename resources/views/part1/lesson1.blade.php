@extends('app')
@section('content')

    <h2 class="lesson-number">Урок 1</h2>

    <label class="lesson-number">Описание: Изменяем цвет фигур при наведении и клике мыши.</label>
    <!-- Перенос строки(в данном случает на две строчки)-->
    <br/>

    <div class="main-blok">
        <div class="block-console-left">
            <div class="descrption">HTML</div>
<textarea autocomplete="off" id="textareaCode" spellcheck="false" wrap="logical">
<div class="block-console-left">
    <div class="descrption">Результат</div>
    <div class="inside-console">
        <h4>Квадрат</h4>
        <!--Эти элементы меняют цвет при наведении мыши-->
        <div class="container">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>

        <br/>

        <h4>Круг</h4>
        <!--Эти элементы меняют цвет при клике мыши-->
        <div class="container">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>
</div>


</textarea>

        </div>

        <div class="block-console-left">
            <div class="descrption">CSS</div>
            <div class="container">
                <p class="inside-console">
                    #footer {
                    position: relative;
                    z-index: 100;
                    background: #eff0f1;
                    background: -moz-linear-gradient(top, #eff0f1 0%, #ffffff 100%);
                    background: -webkit-linear-gradient(top, #eff0f1 0%, #ffffff 100%);
                    background: linear-gradient(to bottom, #eff0f1 0%, #ffffff 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eff0f1', endColorstr='#ffffff',GradientType=0 ); }
                </p>
            </div>
        </div>

        <div class="block-console-left">
            <div class="descrption">JQuery</div>
            <div class="container">
                <p class="inside-console">
                    #footer {
                    position: relative;
                    z-index: 100;
                    background: #eff0f1;
                    background: -moz-linear-gradient(top, #eff0f1 0%, #ffffff 100%);
                    background: -webkit-linear-gradient(top, #eff0f1 0%, #ffffff 100%);
                    background: linear-gradient(to bottom, #eff0f1 0%, #ffffff 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eff0f1', endColorstr='#ffffff',GradientType=0 ); }
                </p>
            </div>
        </div>

        <div class="block-console-left">
            <div class="descrption">Результат</div>
            <div class="inside-console">
            <h4>Квадрат</h4>
            <!-- Рисуем кубики.Эти три кубика будут менять цвет при наведении мыши-->
            <div class="container">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>

            <br/>

            <h4>Круг</h4>
            <!-- Рисуем кружки.Эти три кубика будут менять цвет при клике мыши-->
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