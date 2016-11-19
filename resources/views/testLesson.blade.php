@extends('app')
@section('content')

    <h2 class="lesson-number">Урок Test</h2>

    <label class="lesson-number">Тема: Скрыть элемент.</label>

    <div class="main-blok">
        <div class="block-console-result">
            <div class="descrption">HTML</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                &lt;h5&gt;Скрыть квадрат по клику&lt;/h5&gt;<br />
                &lt;div class="container"&gt;<br />
                <tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                &lt;/div&gt;
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">CSS</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                .square {<br />
                <tab>width:110px;</tab><br />
                <tab>height:100px;</tab><br />
                <tab>background:#2ca02c;</tab><br />
                <tab>float:left;</tab><br />
                <tab>margin:15px;</tab><br />
                <tab>text-align:center;</tab><br />
                }
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">JQuery</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                $(document).on('click', '.square', function () {<br />
                <tab>$(this).slideUp();</tab><br />
                });
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">Результат</div>
            <div class="inside-console">
                <h5>Скрыть квадрат по клику</h5>
                {{--<div class="container">--}}
                    <div class="square"></div>
                {{--</div>--}}
            </div>
            </div>
        </div>
    </div>

    <!--Part 1 Подключаем стили и сценарии для этого урока-->
    <link rel="stylesheet" href="/css/testLesson.css">
    <script src="/js/testLesson.js"></script>
    <script src="/js/testChangeTagColor.js"></script>
@endsection