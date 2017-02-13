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
    В этой структуре мы передаём селектор <div class="allocation_block_no_border">'.square'</div> в функцию <div class="allocation_block_no_border">$( )</div>. Функция найдёт HTML элемент с классом <div class="allocation_block_no_border"><span style="color: #2e6da4">.square</span></div>, то есть <div class="allocation_block_no_border">&lt;div class="square"&gt;&lt;/div&gt;</div>.
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
    <b>Подведём итог:</b> сперва мы при помощи библиотеки jQuery находим квадрат и представляем его в виде объекта, в виде сущности.Затем вешаем на него событие клик.В событие клик помещаем функцию.И далее в этой функции описываем какое действие с этим квадратом необхоимо произвести.
</div>

--------------------------------------------------------------------------------------------------------------------------------------------
***
Часть 1, Урок 2
Описание урока
..............

HTML
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;h4&gt;</b></span>
    </div> - заголовок четвёртого уровня. Как видно в блоке результата, у этого заголовка шрифт больше, чем у заголовка пятого уровня.
</div>
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;/h&gt;</b></span>
    </div> - закрывающий тег.
</div>
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;div&gt;</b></span>
    </div> Как упоминалось в прошлом уроке, тег <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>&lt;div&gt;</b></span></div> это универсальный блочный элемент. При помощи наложения стилей в этом уроке он изображается как прямоугольник.
</div>
<div>
    <div class="allocation_block_border"><span>Атрибут</span>
        <span style="color:#2F4F4F"><b>class</b></span>
    </div> У тега <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>&lt;div&gt;</b></span></div> установлен атрибут <div class="allocation_block_no_border">class</div> с именем <div class="allocation_block_no_border"><span style="color:forestgreen"><b>rectangle</b></span></div>.
</div>

CSS
<div>
    <div class="allocation_block_border"><span>Селектор</span>
        <span style="color:#2e6da4"><b>.rectangle</b></span>
    </div>Понятия селекторов описывались в первом уроке.Здесь так же используется селектор класса. Для HTML элемента <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>div</b></span></div> определили класс <div class="allocation_block_no_border"><span style="color:forestgreen"><b>rectangle</b></span></div>. Зададим для этого класса стили через свойства и значения.
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
    </div>Третьим свойством селектора класса <div class="allocation_block_no_border"><span style="color:#2e6da4"><b>.rectangle</b></span></div> определим фон. Окрасим прямоугольник в цвет <div class="allocation_block_no_border">#2ca02c</div>.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">margin</span>
    </div> устанавливает величину отступа от каждого края элемента. Так как данное свойство применяется к элементу <div class="allocation_block_no_border">div</div>, то у него будут отступы для всех четырёх сторон(top,right,bottom,left).
</div>
<div>
    Как уже говорилось в прошлом уроке, пара "свойство:значение" разделяется двоеточием, и после значения ставится точка с запятой.<div class="allocation_block_no_border">Точка с запятой</div> - завершение выражения.
</div>

jQuery
<div>
    <div class="allocation_block_border">
        <span style="color: #4B0082;">$</span><span>('</span><span style="color: #2e6da4"><b>.rectangle</b></span><span>')</span>
    </div>В этой структуре мы передаём селектор <div class="allocation_block_no_border">'.rectangle'</div> в функцию <div class="allocation_block_no_border">$( )</div>. Функция найдёт HTML элемент с классом <div class="allocation_block_no_border"><span style="color: #2e6da4">.rectangle</span></div>, то есть <div class="allocation_block_no_border">&lt;div class="rectangle"&gt;&lt;/div&gt;</div>.
</div>
<div>
    <div class="allocation_block_border">
        <span style="color: #4B0082;">$</span>(<span style="color: #0000CD;"><b>this</b></span>).<span style="color:#CD853F">css</span>(<span style="color:forestgreen">'background','#66CDAA'</span>);
    </div>При помощи <div class="allocation_block_no_border"><span style="color: #4B0082;">$</span>(<span style="color: #0000CD;">this</span>)</div> получаем прямоугольник в виде объекта.
</div>
<div>
    <div class="allocation_block_no_border">Метод <span style="color:#CD853F">css</span>()</div> возвращает или устанвливает значения css-свойств у выбранных элементов страницы.
    В скобках метода указываются параметры. Так как мы должны изменить цвет фона прямоугольника, то в параметрах указываем свойство <div class="allocation_block_no_border">background</div> и через запятую его значение <div class="allocation_block_no_border">#66CDAA</div>.Параметры указываются в кавычках.<br>
    Напомню, что конструкция <div class="allocation_block_no_border">$(this).css('background','#66CDAA');</div> находится в анонимной функции, которая в свою очередь вложена в событие <div class="allocation_block_no_border">click</div>.
    Таким обазом при клике на прямоугольник происходит событие, которое меняет цвет прямоугольника.
</div>

--------------------------------------------------------------------------------------------------------------------------------------------
***
Часть 1, Урок 3
Описание урока
..............

HTML
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;p&gt;</b></span>
    </div> - Определяет текстовый абзац. Является блочным элементом, то есть всегда начинается с новой строки.
</div>
<div>
    <div class="allocation_block_border"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;span&gt;</b></span>
    </div> предназначен для определения строчных элементов документа.В отличие от блочных элементов, таких как <div class="allocation_block_no_border">&lt;p&gt;</div> или <div class="allocation_block_no_border">&lt;div&gt;</div>, с помощью тега <div class="allocation_block_no_border">&lt;span&gt;</div> можно выделить часть информации(к примеру слово) внутри других тегов и установить для нее свой стиль.
</div>

CSS
<div>
    <div class="allocation_block_border"><span>Селектор</span>
        <span style="color:#2e6da4"><b>p</b></span>
    </div>В прошлых уроках мы рассматривали селекторы класса. Здесь представлен селектор тегов.А именно селектор тега <div class="allocation_block_no_border">&lt;p&gt;</div>.В этом уроке два таких тега и к ним обоим применим один стиль.
</div>
<div>
    <div class="allocation_block_border"><span>Свойство</span>
        <span style="color:#2e6da4">font-size</span>
    </div>Определяет размер шрифта элемента.Здесь мы установили размер шрифта в 14 пикселей, для текста, который находится в абзаце. То есть между тегами <div class="allocation_block_no_border">&lt;p&gt;</div> и <div class="allocation_block_no_border">&lt;/p&gt;</div>.
</div>
<div>Применив стили, получится, что текст в абзаце будет томатного цвета и с размером шрифта в 14 пикселей.</div>

jQuery
<div>
    <div class="allocation_block_border">
        <span style="color: #4B0082;">$</span><span>('</span><span style="color: #2e6da4"><b>p .change-to-bold</b></span><span>')</span>
    </div>В этой структуре мы передаём в функцию <div class="allocation_block_no_border">$( )</div> два селектора, а не один, как в прошлых уроках. Нужно обратить внимание на то, что
    тег <div class="allocation_block_no_border">&lt;span&gt;</div> находится внутри тега <div class="allocation_block_no_border">&lt;p&gt;</div>.Поэтому, чтобы найти <div class="allocation_block_no_border">&lt;span&gt;</div>
    нужного класса, мы в функции указали два селектора один за другим так, как они расположены в HTML. В следующем уроке будет показан пример и вы поймёте зачем всё это нужно.
    Итак, функция найдёт HTML элемент с классом <div class="allocation_block_no_border"><span style="color: #2e6da4">.change-to-bold</span></div>, то есть <div class="allocation_block_no_border">&lt;span class="change-to-bold"&gt;&lt;/span&gt;</div>, который в свою очередь находится внутри тега <div class="allocation_block_no_border">&lt;p&gt;</div>.
</div>
<div>
    <div class="allocation_block_border">
        <span style="color: #4B0082;">$</span>(<span style="color: #0000CD;"><b>this</b></span>).<span style="color:#CD853F">css</span>(<span style="color:forestgreen">'font-weight','bold'</span>);
    </div>При помощи <div class="allocation_block_no_border"><span style="color: #4B0082;">$</span>(<span style="color: #0000CD;">this</span>)</div> получаем слово, на которое кликнули, в виде объекта.В тексте три запятые, стало быть три слова, и функция возьмёт именно то слово, на которое кликнули.
</div>
<div>
    <div class="allocation_block_no_border">Метод <span style="color:#CD853F">css</span>()</div> возвращает или устанавливает значения css-свойств у выбранных элементов страницы.
    В скобках метода указываются параметры. Так как мы должны изменить шрифт слова, то в параметрах указываем свойство <div class="allocation_block_no_border">font-weight</div> и через запятую его значение <div class="allocation_block_no_border">bold</div>.<br>
    Свойство <div class="allocation_block_no_border">font-weight</div> устанавливает насыщенность шрифта. Можно выставлять значения от 100(сверхсветлое начертание) до 900(сверхжирное начертание), либо как в примере bold(полужирное начертание).Так же есть и другие значения.<br>
    Таким обазом при клике на слово произойдёт событие, которое изменит его шрифт.
</div>