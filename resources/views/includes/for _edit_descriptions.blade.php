Часть 1, Урок 1
Описание урока
"Плохой учитель преподносит истину,<br>
хороший учит ее находить".<br>
<b>А. Дистервег</b>.<br><br>
<span>Первый урок первой части открывает целую серию уроков Веб-программирования.<br>
В этом вводном уроке вы узнаете, что такое HTML элемент, как применить к нему ширину, высоту и цвет, а так же как можно этим элементом управлять.<br>
Перед тем как начать, ознакомьтесь с разделом "<a style="cursor: pointer"><b>Как пользоваться сайтом</b></a>".
</span>

HTML
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;h5&gt;</b></span>
    </div> - заголовок пятого уровня.Всего уровней 6. Заголовок первого уровня отображается крупным шрифтом, а последующие меньшим.
</div>
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;/h5&gt;</b></span>
    </div> - закрывающий тег. Между <div class="allocation_block_no_border">&lt;h5&gt;</div> и <div class="allocation_block_no_border">&lt;/h5&gt;</div> помещается текст.
</div>
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;div&gt;</b></span>
    </div> - универсальный блочный элемент.Может быть использован как контейнер для группировки элементов. В этом уроке при помощи наложения стилей изображается как квадрат. Так же требуется закрывающий тег: <div class="allocation_block_no_border">&lt;/div&gt;</div>.
</div>
<div>
    <div class="allocation_block_border"><span>Атрибут</span>
        <span style="color:#2F4F4F"><b>class</b></span>
    </div> - задает стилевой класс, позволяющий связать элемент со стилевым оформлением. Здесь у тега <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>&lt;div&gt;</b></span></div> установлен атрибут <div class="allocation_block_no_border">class</div> с именем <div class="allocation_block_no_border"><span style="color:forestgreen"><b>square</b></span></div>.
</div>
{{--<hr style="width: 100%;margin: 0;background: #D3D3D3;">--}}
CSS
<div>
    <div class="allocation_block_border"><span>Селектор</span>
        <span style="color:#2e6da4"><b>.square</b></span>
    </div>Селекторы определяют стилевое оформление HTML элементов. Селекторы бывают разных типов. В этом уроке используется селектор класса. Для HTML элемента <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>div</b></span></div> мы определили класс <div class="allocation_block_no_border"><span style="color:forestgreen"><b>square</b></span></div>(название класса придумали по смыслу). Теперь нужно для этого класса задать стили через свойства и значения.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">width</span>
    </div>Внутри фигурных скобкок селектора определяются стилевые свойства с их значениями. Первое свойство <div class="allocation_block_no_border"><span style="color:#2e6da4">width</span></div> устанавливает ширину элемента <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>div</b></span></div> в 110 пикселей.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">height</span>
    </div>Так как квадрат-это правильный четырёхугольник, у которого все углы и стороны равны, то следующим свойством выставляем <div class="allocation_block_no_border"><span style="color:#2e6da4">height</span></div> так же в 110 пикселей, установив тем самым высоту элемента.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">background</span>
    </div>Третьим свойством селектора класса <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>.square</b></span></div> будет фон. Для фона задан код цвета из таблицы цветов.
</div>
<div>
    Обратите внимание, что пара "свойство:значение" разделяется двоеточием, и после значения ставится точка с запятой.<div class="allocation_block_no_border">Точка с запятой</div> - завершение выражения.
</div>

Jquery
<div>
    <div class="allocation_block_border">
        <span style="color: #4B0082;">$</span><span>('</span><span style="color: #2e6da4"><b>.square</b></span><span>')</span>
    </div>Разделим эту структуру на две части: <div class="allocation_block_no_border"><span style="color: #4B0082;">$</span>( )</div> и <div class="allocation_block_no_border"><span style="color: #2e6da4">'.square'</span>.</div><br />
    <div class="allocation_block_no_border"><span style="color: #4B0082;">$</span>( )</div> - это функция, которая осуществляет поиск элементов по заданному <span class="tooltipTextJsP1L1">селектору</span>*.<br />
    <div class="tooltipDescTextJsP1L1">*О селекторах рассказывается в блоке CSS.</div>
    <div class="allocation_block_no_border"><span style="color: #2e6da4">'.square'</span></div> - это сам селектор.<br />
    В этой структуре мы передаём селектор <div class="allocation_block_no_border">'.square'</div> функции <div class="allocation_block_no_border">$( )</div>. Функция найдёт HTML элемент с классом <div class="allocation_block_no_border"><span style="color: #2e6da4">.square</span></div>, то есть <div class="allocation_block_no_border">&lt;div class="square"&gt;&lt;/div&gt;</div>.
</div>
<div>
    <div class="allocation_block_border">
        <span style="color:#CD853F">click</span>
    </div> - событие <div class="allocation_block_no_border">click</div> произойдёт, если кликнуть по элементу, в данном случае по квадрату.
</div>
<div >
    <div class="allocation_block_border">
        <span style="color: #0000CD;"><b>function</b><span style="color: steelblue;">() {}</span></span>
    </div> - эта структура целиком является анонимной функцией(функция без имени). В круглые скобки помещаются параметры.В фигурные скобки помещается тело функции,то есть код, который выполняется при её вызове. В данном примере функция помещается в событие <div class="allocation_block_no_border"><span style="color:#CD853F">click</span></div> и вызывается, когда пользователь кликает по элементу.
</div>
<div>
    <div class="allocation_block_border">
        <span style="color: #4B0082;">$</span>(<span style="color: #0000CD;"><b>this</b></span>).<span style="color:#CD853F">slideUp</span>();
    </div>Разделим эту структуру на три части: <div class="allocation_block_no_border"><span style="color: #4B0082;">$</span>(<span style="color: #0000CD;"><b>this</b></span>)</div>, <div class="allocation_block_no_border"><span style="color:#CD853F">slideUp</span>()</div> и <div class="allocation_block_no_border">точка с запятой</div>.<br />
    <div class="allocation_block_no_border"><span style="color: #4B0082;">$</span>(<span style="color: #0000CD;">this</span>)</div> - при помощи этой конструкции мы получаем наш квадрат в виде <span class="tooltipTextJsP1L1">объекта</span>*<div class="tooltipDescTextJsP1L1">*Более подробно объекты и конструкция $(this) будут рассмотрены в дальнейших уроках.Пока что запомните, что $(this) вызывается внутри какой-либо сущности.В данном уроке мы "поймали" элемент и повесили на него событие клик, и для того, чтобы обратиться внутри события к элементу нужно использовать $(this).</div>, которым теперь можем манипулировать.<br />
</div>
<div>
    <div class="allocation_block_no_border">Метод <span style="color:#CD853F">slideUp</span>()</div> скроет полученный элемент.
</div>
<div>
    <div class="allocation_block_no_border">Точка с запятой</div> - завершение выражения.
</div>
<div>
    <b>Подведём итог:</b> сперва мы находим квадрат и вешаем на него событие клик.В событие клик помещаем функцию.И далее в этой функции описываем какое действие с этим квадратом необхоимо произвести.
</div>


***
Часть 1, Урок 2
Описание урока
--------------

HTML
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;p&gt;</b></span>
    </div> - определяет текстовый абзац.При помощи этого тега можно разделять текст на блоки.
</div>
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;/p&gt;</b></span>
    </div> - закрывающий тег.
</div>
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;div&gt;</b></span>
    </div> В прошлом уроке упоминалось, что тег <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>&lt;div&gt;</b></span></div> это универсальный блочный элемент. В этом уроке при помощи наложения стилей изображается как треугольник.
</div>
<div>
    <div class="allocation_block_border"><span>Атрибут</span>
        <span style="color:#2F4F4F"><b>class</b></span>
    </div> Так же задаётся стилевой класс, позволяющий связать элемент со стилевым оформлением. Здесь у тега <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>&lt;div&gt;</b></span></div> установлен атрибут <div class="allocation_block_no_border">class</div> с именем <div class="allocation_block_no_border"><span style="color:forestgreen"><b>triangle</b></span></div>.
</div>

CSS
<div>
    <div class="allocation_block_border"><span>Селектор</span>
        <span style="color:#2e6da4"><b>.triangle</b></span>
    </div>Понятия селекторов описывались в первом уроке.Здесь так же используется селектор класса. Для HTML элемента <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>div</b></span></div> определили класс <div class="allocation_block_no_border"><span style="color:forestgreen"><b>triangle</b></span></div>(по смыслу). Зададим для этого класса стили через свойства и значения.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">width</span>
    </div>Определим ширину элемента в 150 пикселей.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">height</span>
    </div>Определяет высоту элемента. Выставим 90 пикселей.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">background</span>
    </div>Третьим свойством селектора класса <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>.triangle</b></span></div> определим фон. Окрасим треугольник в цвет <div class="allocation_block_no_border">#2ca02c</div>.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">margin</span>
    </div> устанавливает величину отступа от каждого края элемента. В данном случае свойством <div class="allocation_block_no_border">margin</div> выставляются отступы для элемента <div class="allocation_block_no_border">div</div>.Отступы для всех четырёх сторон(top,right,bottom,left).
</div>
<div>
    Как уже говорилось в прошлом уроке, пара "свойство:значение" разделяется двоеточием, и после значения ставится точка с запятой.<div class="allocation_block_no_border">Точка с запятой</div> - завершение выражения.
</div>
