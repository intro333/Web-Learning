@extends('app')
@section('content')

    <h2 class="lesson-number">Урок 1</h2>

    <label class="lesson-number">Тема: {{$showLesson[0]['theme']}}<!--Изменяем цвет фигур при наведении и клике мыши.--></label>

    <div class="main-blok">
        <div class="block-console-result">
            <div class="descrption">HTML</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                {{$showLesson[0]['text_html']}}
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">CSS</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                {{$showLesson[0]['text_css']}}
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">JQuery</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                {{$showLesson[0]['text_jquery']}}
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">Результат</div>
            <div class="inside-console">
            <label>Меняем цвет квадрата при наведении курсора</label>
            <div class="container">
                <div class="square"></div>
                <div class="square"></div>
                <div class="square"></div>
            </div>

             <label>Меняем цвет круга по клику</label>
            <div class="container">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>

    <hr>
    @include('includes.nextOrPrevLesson')

    <!--Part 1 Подключаем стили и сценарии для этого урока-->
    <link rel="stylesheet" href="/css/part1/lesson1.css">
    <script src="/js/part1/lesson1.js"></script>
    <script src="/js/changeTagColor.js"></script>
@endsection