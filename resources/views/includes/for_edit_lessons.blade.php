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
<span data-line-number='1 '>&lt;h4&gt;Меняем цвет прямоугольника по клику мышки&lt;/h4&gt;<br />
<span data-line-number='2 '>&lt;div class="rectangle"&gt;&lt;/div&gt;

CSS
<span data-line-number="1 "></span>.rectangle {<br />
<span data-line-number="2 "></span><tab>width:110px;</tab><br />
<span data-line-number="3 "></span><tab>height:100px;</tab><br />
<span data-line-number="4 "></span><tab>background:#2ca02c;</tab><br />
<span data-line-number="5 "></span><tab>margin:15px;</tab><br />
<span data-line-number="6 "></span>}<br />

jQuery
<span data-line-number="1 "></span>$('.rectangle').click(function () {<br />
<span data-line-number="2 "></span><tab>$(this).css('background','#66CDAA');</tab><br />
<span data-line-number="3 "></span>});<br />

Результат
<h4>Меняем цвет прямоугольника по клику мышки</h4>
<div class="rectangle"></div>

part 1 lesson 3
Тема:Установить жирное начертание текста.
HTML
<span data-line-number='1 '></span>&lt;h4&gt;Установить жирное начертание текста.&lt;/h4&gt;<br /><br />
<span data-line-number='2 '></span>&lt;p&gt;Ниже дан текст, который необходимо изменить.Задача установить<br />событие клик на каждое слово, которое стоит после запятой<br />и после срабатывания события шрифт слова должен меняться на жирный.&lt;/p&gt;<br /><br />
<span data-line-number='3 '></span>&lt;p&gt;Текст, &lt;span class="change-to-bold"&gt;содержащийся&lt;/span&gt;<br />между начальным и конечным тегом, &lt;span class="change-to-bold"&gt;отображается&lt;/span&gt;<br />и размещается в соответствии со свойствами,<br /> &lt;span class="change-to-bold"&gt;указанными&lt;/span&gt; в<br />начальном теге.&lt;/p&gt;<br />

CSS
<span data-line-number='1 '></span>p {<br />
<span data-line-number='2 '></span><tab>font-size: 16px;</tab><br />
<span data-line-number='3 '></span><tab>color: CadetBlue;</tab><br />
<span data-line-number='4 '></span></span>}<br />

jQuery
<span data-line-number="1 "></span>$('p .change-to-bold').click(function () {<br />
<span data-line-number="2 "></span><tab>$(this).css('font-weight','bold');</tab><br />
<span data-line-number="3 "></span>});<br />

Результат
<h4>Установить жирное начертание текста.</h4>
<p>Ниже дан текст, который необходимо изменить.Задача установить<br /> событие клик на каждое слово, которое стоит после запятой<br /> и после срабатывания события шрифт слова должен меняться на жирный.<br /></p>
<p>Текст, <span class="change-to-bold">содержащийся</span> между начальным и конечным тегом,<br /> <span class="change-to-bold">отображается</span> и размещается в соответствии со свойствами,<br /> <span class="change-to-bold">указанными</span> в начальном теге.</p>

part 1 lesson 4
Тема:Изменить цвет текста всех абзацев по клику на кнопку.
HTML
&lt;h4&gt;Изменить цвет текста всех абзацев по клику на кнопку.&lt;/h4&gt;<br /><br />
&lt;div&gt;<br /><tab></tab>&lt;p&gt;<br /><tab></tab><tab></tab>Точно так же, как CSS отделяет визуализацию от структуры HTML,<br /> <tab></tab><tab></tab>JQuery отделяет поведение от структуры HTML. Например, вместо прямого<br /><tab></tab><tab></tab> указания на обработчик события нажатия кнопки управление передаётся<br /><tab></tab><tab></tab> JQuery, которая идентифицирует кнопки и затем преобразует его в обработчик<br /> <tab></tab><tab></tab>события клика. Такое разделение поведения и структуры также называется<br /> <tab></tab><tab></tab>принципом ненавязчивого JavaScript.<br /><tab></tab>&lt;/p&gt;
<br />
<tab></tab>&lt;p&gt;<br /><tab></tab><tab></tab>Библиотека jQuery содержит функциональность, полезную для максимально<br /><tab></tab><tab></tab> широкого круга задач. Тем не менее, разработчиками библиотеки<br /><tab></tab><tab></tab> не ставилась задача совмещения в jQuery функций, которые подошли<br /><tab></tab><tab></tab> бы всюду, поскольку это привело бы к большому коду, бо́льшая часть<br /><tab></tab><tab></tab> которого не востребована. Поэтому была реализована архитектура<br /><tab></tab><tab></tab> компактного универсального ядра библиотеки и плагинов[4]. Это<br /><tab></tab><tab></tab> позволяет собрать для ресурса именно ту JavaScript-функциональность,<br /><tab></tab><tab></tab> которая на нём была бы востребована."<br /><tab></tab>&lt;/p&gt;<br />&lt;/div&gt;<br /><br />
&lt;button class="change-color"&gt;&lt;/button&gt;

CSS
<span data-line-number='1 '></span>div {<br />
<span data-line-number='2 '></span><tab>padding: 5px;</tab><br />
<span data-line-number='3 '></span><tab>backgroung: #F5F5F5;</tab><br />
<span data-line-number='4 '></span></span>}<br /><br />
<span data-line-number='5 '></span>p {<br />
<span data-line-number='6 '></span><tab>color: black;</tab><br />
<span data-line-number='7 '></span><tab>font-size: 12px;</tab><br />
<span data-line-number='8 '></span>}<br /><br />
<span data-line-number='5 '></span>.change-color {<br />
<span data-line-number='6 '></span><tab>margin-bottom: 10px;</tab><br />
<span data-line-number='7 '></span><tab>color: #1b6d85;</tab><br />
<span data-line-number='7 '></span><tab>font-weight: bold;</tab><br />
<span data-line-number='8 '></span>}<br />

jQuery
<span data-line-number="1 "></span>$('.change-color').click(function () {<br />
<span data-line-number="2 "></span><tab>$('p').css('color','green');</tab><br />
<span data-line-number="3 "></span>});<br />

Результат
<h4>Изменить цвет текста всех абзацев по клику на кнопку.</h4><br />
<div>
    <p>Точно так же, как CSS отделяет визуализацию от структуры HTML, JQuery отделяет поведение<br /> от структуры HTML. Например, вместо прямого указания на обработчик события нажатия кнопки<br /> управление передаётся JQuery, которая идентифицирует кнопки и <br />затем преобразует его в обработчик события клика. Такое разделение поведения<br /> и структуры также называется принципом ненавязчивого JavaScript.</p><br />
    <p>Библиотека jQuery содержит <br />функциональность, полезную для максимально широкого круга задач. Тем не<br /> менее, разработчиками библиотеки не ставилась задача совмещения в jQuery функций,<br /> которые подошли бы всюду, поскольку это привело бы к большому коду, бо́льшая часть которого не востребована.<br /> Поэтому была реализована архитектура компактного универсального ядра <br />библиотеки и плагинов[4]. Это позволяет собрать для ресурса именно ту<br /> JavaScript-функциональность, которая на нём была бы <br />востребована."</p>
</div>
<button class="change-color">Изменить цвет</button>