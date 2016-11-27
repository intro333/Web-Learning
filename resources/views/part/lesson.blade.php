@extends('app')
@section('content')

    <h2 class="lesson-number">Урок {!! $showLesson[0]['lesson'] !!}</h2>
    <h2 class="part-number">Часть {!! $showLesson[0]['part'] !!}</h2>
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="part-number" value="{!! $showLesson[0]['part'] !!}">
    <input type="hidden" id="lesson-number" value="{!! $showLesson[0]['lesson'] !!}">

    <div class="lesson-theme"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>{{$showLesson[0]['theme']}}</div>

    <div class="main-blok">
        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">HTML
                    <div class="btn btn-lg what-is-description" data-text="HTML" data-string="text_html"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></div>
                </h4>
                <div class="block-console-inside">
                {{$showLesson[0]['text_html']}}
            </div>
        </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">CSS</h4>
                <div class="block-console-inside">
                {{$showLesson[0]['text_css']}}
            </div>
        </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">Jquery</h4>
                <div class="block-console-inside">
                {{$showLesson[0]['text_jquery']}}
            </div>
        </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">Результат
                    <div class="btn reset-button">Сбросить</div>
                </h4>
                <div class="block-console-inside" style="padding: 5px;">
                {{$showLesson[0]['text_result']}}
            </div>
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