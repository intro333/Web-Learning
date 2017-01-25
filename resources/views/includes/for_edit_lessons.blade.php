part 1 lesson 1
Тема:Скрыть элемент.
HTML
<span data-line-number='1 '></span>&lt;h5&gt;Скрыть квадрат по клику мышки&lt;/h5&gt;<br />
<span data-line-number='2 '></span>&lt;div class="square"&gt;&lt;/div&gt;&lt;/tab&gt;<br />

CSS
<span data-line-number="1 "></span>.square {<br />
<span data-line-number="2 "></span><tab>width:110px;</tab><br />
<span data-line-number="3 "></span><tab>height:110px;</tab><br />
<span data-line-number="4 "></span><tab>background:#8FBC8F;</tab><br />
<span data-line-number="6 "></span>}<br />

jQuery
<span data-line-number="1 "></span>$('<span style="color: #2e6da4"><b>.square</b></span>').click(function () {<br />
<span data-line-number="2 "></span><tab>$(this).slideUp();</tab><br />
<span data-line-number="3 "></span>});<br />

Результат
<h5 style="color:#333;">Скрыть квадрат по клику мышки</h5>
<div class="square"></div>

part 1 lesson 2
Тема:Замена цвета элемента
HTML
<span data-line-number='1 '></span>&lt;p&gt;Меняем цвет прямоугольника при наведении курсора&lt;/p&gt;<br />
<span data-line-number='2 '></span>&lt;div class="triangle"&gt;&lt;/div&gt;

CSS
<span data-line-number="1 "></span>.triangle {<br />
<span data-line-number="2 "></span><tab>width:110px;</tab><br />
<span data-line-number="3 "></span><tab>height:100px;</tab><br />
<span data-line-number="4 "></span><tab>background:#2ca02c;</tab><br />
<span data-line-number="5 "></span><tab>margin:15px;</tab><br />
<span data-line-number="6 "></span>}<br />

jQuery
<span data-line-number="1 "></span>$('.triangle').click(function () {<br />
<span data-line-number="2 "></span><tab>$(this).css('background','#66CDAA');</tab><br />
<span data-line-number="3 "></span>});<br />

Результат
<p>Меняем цвет прямоугольника по клику мышки</p>
<div class="triangle"></div>

