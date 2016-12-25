Часть 1, Урок 1
HTML
<div>
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;h5&gt;</b></span>
    </div> - заголовок пятого уровня.Всего уровней 6. Заголовок первого уровня отображается крупным шрифтом, а последующие меньшим.
</div>
<div style="margin-top: 5px">
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;"><span>Тег</span>
        <span style="color:#2e6da4"><b>&lt;div&gt;</b></span>
    </div> - универсальный блочный элемент.Может быть использован как контейнер для группировки элементов. В этом уроке при помощи наложения стилей изображается как квадрат.
</div>
<div style="margin-top: 5px">
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;"><span>Атрибут</span>
        <span style="color:#2F4F4F"><b>class</b></span>
    </div> - задает стилевой класс, позволяющий связать элемент со стилевым оформлением. В этом уроке элемент <span style="color:#2e6da4"><b>div</b></span> связан с классом <span style="color:forestgreen"><b>square</b></span>.
</div>
{{--<hr style="width: 100%;margin: 0;background: #D3D3D3;">--}}
CSS
<div>
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;"><span>Селектор</span>
        <span style="color:#2e6da4"><b>.square</b></span>
    </div>Селекторы определяют стилевое оформление HTML элементов. Селекторы бывают разных типов. В этом уроке используется селектор класса. Для HTML элемента <span style="color:#2e6da4"><b>div</b></span> мы определили класс <span style="color:forestgreen"><b>square</b></span>(название класса придумали по смыслу). Теперь нужно для этого класса задать стили через свойства и значения.
</div>
<div style="margin-top: 5px">
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;"><span>Свойство</span>
        <span style="color:#2e6da4">width</span>
    </div>Внутри фигурных скобкок селектора определяются стилевые свойства с их значениями. Первое свойство <span style="color:#2e6da4">width</span> устанавливает ширину элемента <span style="color:#2e6da4"><b>div</b></span> в 110 пикселей.
</div>
<div style="margin-top: 5px">
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;"><span>Свойство</span>
        <span style="color:#2e6da4">height</span>
    </div>Так как квадрат-это правильный четырёхугольник, у которого все углы и стороны равны, то следующим свойством выставляем <span style="color:#2e6da4">height</span> так же в 110 пикселей, установив тем самым высоту элемента.
</div>
<div style="margin-top: 5px">
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;"><span>Свойство</span>
        <span style="color:#2e6da4">background</span>
    </div>Третьим свойством селектора класса <span style="color:#2e6da4"><b>.square</b></span> будет фон. Для фона зададим код цвета из таблицы цветов.
</div>

Jquery
<div>
    <div style="padding:1px 2px 1px 2px;border:1px solid #C0C0C0;background:#f5f5f5;border-radius: 2px;display:inline;margin-right: 5px;">
        <span style="color: #4B0082;">$</span><span>('</span><span style="color: #2e6da4"><b>.square</b></span><span>')</span>
    </div>Разделим на две части: <span style="color: #2e6da4"><b>'.square'</b></span> является <span class="cascade-decr-p1-l1-selector">селектором</span>, а <span style="color: #4B0082;">$</span>( ) — это функция, которая осуществляет поиск элементов по заданному селектору.
</div>