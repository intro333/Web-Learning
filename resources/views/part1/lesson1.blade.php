@extends('app')
@section('content')

    <h2 class="lesson-number">Урок 1</h2>

    <label class="lesson-number">Описание: Изменяем цвет фигур при наведении и клике мыши.</label>

    <div class="main-blok">
        <div class="block-console-result">
            <div class="descrption">HTML</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                &lt;label&gt;Меняем цвет квадрата при наведении курсора&lt;/label&gt;<br />
                &lt;div class="box-container"&gt;<br />
                <tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                <tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                <tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                &lt;/div&gt;<br />
                <br />
                &lt;label&gt;Меняем цвет круга по клику&lt;/label&gt;<br />
                &lt;div class="box-container"&gt;<br />
                <tab>&lt;div class="circle"&gt;&lt;/div&gt;</tab><br />
                <tab>&lt;div class="circle"&gt;&lt;/div&gt;</tab><br />
                <tab>&lt;div class="circle"&gt;&lt;/div&gt;</tab><br />
                &lt;/div&gt;
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">CSS</div>
            <div class="numeric-block"></div>
            <div class="inside-console">
                .box-container {<br />
                <tab>width: 100%;</tab><br />
                <tab>padding-right: 15px;</tab><br />
                <tab>padding-left: 15px;</tab><br />
                <tab>margin-right: auto;</tab><br />
                <tab>margin-left: auto;</tab><br />
                }<br />
                <br />
                .square {<br />
                <tab>width:110px;</tab><br />
                <tab>height:100px;</tab><br />
                <tab>background:#2ca02c;</tab><br />
                <tab>float:left;</tab><br />
                <tab>margin:15px;</tab><br />
                <tab>text-align:center;</tab><br />
                }<br />
                <br />
                .circle {<br />
                <tab>float:left;</tab><br />
                <tab>width: 100px;</tab><br />
                <tab>height: 100px;</tab><br />
                <tab>background: cadetblue;</tab><br />
                <tab>-moz-border-radius: 50px;</tab><br />
                <tab>-webkit-border-radius: 50px;</tab><br />
                <tab>border-radius: 50px;</tab><br />
                <tab>margin:15px;</tab><br />
                }
            </div>
        </div>

        <div class="block-console-result">
            <div class="descrption">JQuery</div>
            <div class="inside-console">
                /*Меняем цвет квадрата при наведении курсора*/<br />
                $(document).on("mouseover", ".square", function () {<br />
                <tab>$(this).css("background","#66CDAA")</tab><br />
                });<br />
                <br />
                /*Меняем цвет круга по клику*/<br />
                $(document).on("mouseup", ".circle", function () {<br />
                <tab>$(this).css("background","#FF4500")</tab><br />
                });
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