@extends('app')
@section('content')

    <h2 class="lesson-number">Урок {!! $showLesson[0]['lesson'] !!}</h2>
    <h2 class="part-number">Часть {!! $showLesson[0]['part'] !!}</h2>
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="part-number" value="{!! $showLesson[0]['part'] !!}">
    <input type="hidden" id="lesson-number" value="{!! $showLesson[0]['lesson'] !!}">

    <div class="lesson-theme"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>{{$showLesson[0]['theme']}}</div>

    {{--<p class="main-description"><b>Описание: </b><span>{{$showLesson[0]['description']}}</span></p>--}}
    <div class="main-blok">
        <div class="block-console-result">
            <div class="descrption">HTML
                <div class="btn what-is-description" data-string="text_html">Что здесь?</div></div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                {{$showLesson[0]['text_html']}}
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">CSS
                <div class="btn what-is-description" data-string="text_css">Что здесь?</div></div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                {{$showLesson[0]['text_css']}}
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">JQuery
                <div class="btn what-is-description" data-string="text_jquery">Что здесь?</div></div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                {{$showLesson[0]['text_jquery']}}
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">Результат
            <div class="btn reset-button">Сбросить</div></div>
            <div class="inside-console">
                {{$showLesson[0]['text_result']}}
            </div>
        </div>
    </div>

    <hr>
    @include('includes.nextOrPrevLesson')

    <!--Part 1 Подключаем стили и сценарии для этого урока-->
    <link rel="stylesheet" href="/css/part{!! $showLesson[0]['part'] !!}/lesson{!! $showLesson[0]['lesson'] !!}.css">
    <script src="/js/part{!! $showLesson[0]['part'] !!}/lesson{!! $showLesson[0]['lesson'] !!}.js"></script>
    <script src="/js/changeTagColor.js"></script>
@endsection