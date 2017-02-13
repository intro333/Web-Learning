@extends('app')
@section('content')
    <style>
        <?php if (true) { ?>
            .block-console-inside span[data-line-number] {
                display: none;
            }
            .on-off-numeration .right-for-options {
                display: none;
            }
       <?php } else { ?>
            .block-console-inside span[data-line-number] {
               display: inline;
            }
            .on-off-numeration .right-for-options {
                display: inline;
            }
        <?php  } ?>
    </style>

    <h2 class="lesson-number">Урок {!! $showLesson[0]['lesson'] !!}<span class="glyphicon glyphicon-info-sign lesson-description tool-panel" data-string="lesson_description"></span><span class="glyphicon glyphicon-picture lesson-diagram tool-panel" data-string="lesson_diagram"></span></h2>
    <h2 class="part-number">Часть {!! $showLesson[0]['part'] !!}</h2>
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="part-number" value="{!! $showLesson[0]['part'] !!}">
    <input type="hidden" id="lesson-number" value="{!! $showLesson[0]['lesson'] !!}">
    <input type="hidden" id="what-is-lang-html" value="{{\Config::get('my_app.what-is-lang.langs')['html']}}">
    <input type="hidden" id="what-is-lang-css" value="{{\Config::get('my_app.what-is-lang.langs')['css']}}">
    <input type="hidden" id="what-is-lang-jquery" value="{{\Config::get('my_app.what-is-lang.langs')['jquery']}}">

    <div class="lesson-theme"><span class="glyphicon glyphicon-folder-open"></span><span>{{$showLesson[0]['theme']}}</span></div>

    <div class="main-blok">
        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">HTML
                    {{--<div class="btn btn-lg what-is-description" data-text="HTML" data-string="text_html"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>--}}
                    <div class="btn btn-lg main-description" data-text="HTML" data-string="text_html"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
                </h4>
                <div class="block-console-inside">
{{--                {{$showLesson[0]['text_html']}}--}}
                    @include('part1.lesson4')
                </div>
        </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">CSS
                    <div class="btn btn-lg main-description" data-text="CSS" data-string="text_css"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
                </h4>
                <div class="block-console-inside">
                {{$showLesson[0]['text_css']}}
            </div>
        </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">jQuery
                    <div class="btn btn-lg main-description" data-text="jQuery" data-string="text_jquery"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
                </h4>
                <div class="block-console-inside">
                {{$showLesson[0]['text_jquery']}}
            </div>
        </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">Результат
                    <span class="glyphicon glyphicon-repeat reset-button" aria-hidden="true"></span>
                </h4>
                <div class="block-console-inside" style="padding-left: 13px;">
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
    <!-- диаграммы -->
    <div class="popup_diagram">
        <div class="popup_diagram_bg"></div>
        <div class="diagram_for-three-block">
            <div id="blok1">Диаграмма <a class="tooltipText2">
                    {{--<span class="glyphicon glyphicon-question-sign question-for-diagram" data-string=""></span>--}}
                    <p>Диаграммы</p></a>
            </div>
            <div id="diagram_blok2">
            </div>
            <div id="blok3">
                <span onclick="showOutPopup('diagram')" class="close-button">Закрыть</span>
            </div>
        </div>
    </div>
@endsection
