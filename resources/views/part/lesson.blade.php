@extends('app')
@section('content')

    <h2 class="lesson-number">Урок {!! $showLesson[0]['lesson'] !!}</h2>
    <h2 class="part-number">Часть {!! $showLesson[0]['part'] !!}</h2>

    <label class="lesson-number">Тема: {{$showLesson[0]['theme']}}<!--Изменяем цвет фигур при наведении и клике мыши.--></label>

    <p class="main-description"><b>Описание: </b><span>{{$showLesson[0]['description']}}</span></p>
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
                {{$showLesson[0]['text_result']}}
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