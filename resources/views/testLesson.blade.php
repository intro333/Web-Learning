@extends('app')
@section('content')

    <h2 class="lesson-number">Урок Test</h2>

    <label class="lesson-number">Тема: Скрыть элемент.</label>

    <div class="main-blok">
        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">HTML</h4>
                <div class="block-console-inside">
                    <span style='color: #000;'>1</span>&lt;h5&gt;Скрыть квадрат по клику Скрыть квадрат по клику Скрыть квадрат по клику&lt;/h5&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>2</span>&lt;div class="container"&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>3</span><tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>4</span>&lt;/div&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>5</span>&lt;h5&gt;Скрыть квадрат по клику Скрыть квадрат по клику Скрыть квадрат по клику&lt;/h5&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>6</span>&lt;div class="container"&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>7</span><tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>8</span>&lt;/div&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>9</span>&lt;h5&gt;Скрыть квадрат по клику Скрыть квадрат по клику Скрыть квадрат по клику&lt;/h5&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>10</span>&lt;div class="container"&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>11</span><tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>12</span>&lt;/div&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>13</span>&lt;h5&gt;Скрыть квадрат по клику Скрыть квадрат по клику Скрыть квадрат по клику&lt;/h5&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>14</span>&lt;div class="container"&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>15</span><tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>16</span>&lt;/div&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>17</span>&lt;h5&gt;Скрыть квадрат по клику Скрыть квадрат по клику Скрыть квадрат по клику&lt;/h5&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>18</span>&lt;div class="container"&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>19</span><tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>20</span>&lt;/div&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>21</span>&lt;h5&gt;Скрыть квадрат по клику Скрыть квадрат по клику Скрыть квадрат по клику&lt;/h5&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>22</span>&lt;div class="container"&gt;<br />
                    <span style='background: #f1f1f1;color: #C0C0C0;'>23</span><tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />
                </div>
            </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">CSS</h4>
                <div class="block-console-inside">
                    <span data-line-number="1 "></span>
                    .square {<br />
                    <span data-line-number="2 "></span>
                    <tab>width:110px;</tab><br />
                    <span data-line-number="3 "></span>
                    <tab>height:100px;</tab><br />
                    <span data-line-number="4 "></span>
                    <tab>background:#2ca02c;</tab><br />
                    <span data-line-number="5 "></span>
                    <tab>float:left;</tab><br />
                    <span data-line-number="6 "></span>
                    <tab>margin:15px;</tab><br />
                    <span data-line-number="7 "></span>
                    <tab>text-align:center;</tab><br />
                    <span data-line-number="8 "></span>
                    }
                </div>
            </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">Jquery</h4>
                <div class="block-console-inside">
                    $(document).on('click', '.square', function () {<br />
                    <tab>$(this).slideUp();</tab><br />
                    });
                </div>
            </div>
        </div>

        <div class="block-lesson">
            <div class="block-lesson-child">
                <h4 class="descrption-text">Результат</h4>
                <div class="block-console-inside">
                    <h5>Скрыть квадрат по клику</h5>
                    <div class="square"></div>
                </div>
            </div>
        </div>
    </div>

    <!--Part 1 Подключаем стили и сценарии для этого урока-->
    <link rel="stylesheet" href="/css/testLesson.css">
    <script src="/js/testLesson.js"></script>
    <script src="/js/testChangeTagColor.js"></script>
@endsection