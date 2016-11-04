@extends('admin.panel')

@section('admin-content')

    <h2>Редактирование лекций</h2>
    <hr style="width: 100%;">

    @foreach($lessons as $lesson)
        <ul class="list-group">
            <li type="button" class="list-group-item list-group-item-success">
                <form method="POST" action="/admin/editLessons/{{$lesson['num']}}">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="num" value="{{$lesson['num']}}">
                    <a class="btn btn-primary" role="button">{{$lesson['num']}}</a>&nbsp;&nbsp;
                    <a class="btn btn-primary" role="button">{{$lesson['theme']}}</a>&nbsp;&nbsp;
                    <button class="btn btn-success" type="submit" style="float: right;">Редактировать</button>
                </form>
            </li>
        </ul>
    @endforeach
@endsection
<!--
[
"id" => 2
"num" => 2
"theme" => "Тестовый урок"
"description" => "Здесь будет тестовый урок"
"text_html" => """
&lt;label&gt;Меняем цвет квадрата при наведении курсора&lt;/label&gt;<br />\r\n
&lt;div class="box-container"&gt;<br />\r\n
<tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />\r\n
<tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />\r\n
<tab>&lt;div class="square"&gt;&lt;/div&gt;</tab><br />\r\n
&lt;/div&gt;<br />\r\n
<br />\r\n
&lt;label&gt;Меняем цвет круга по клику&lt;/label&gt;<br />\r\n
&lt;div class="box-container"&gt;<br />\r\n
<tab>&lt;div class="circle"&gt;&lt;/div&gt;</tab><br />\r\n
<tab>&lt;div class="circle"&gt;&lt;/div&gt;</tab><br />\r\n
<tab>&lt;div class="circle"&gt;&lt;/div&gt;</tab><br />\r\n
&lt;/div&gt;
"""
"text_css" => """
.square {<br />\r\n
<tab>width:110px;</tab><br />\r\n
<tab>height:100px;</tab><br />\r\n
<tab>background:#2ca02c;</tab><br />\r\n
<tab>float:left;</tab><br />\r\n
<tab>margin:15px;</tab><br />\r\n
<tab>text-align:center;</tab><br />\r\n
}<br />\r\n
<br />\r\n
.circle {<br />\r\n
<tab>float:left;</tab><br />\r\n
<tab>width: 100px;</tab><br />\r\n
<tab>height: 100px;</tab><br />\r\n
<tab>background: cadetblue;</tab><br />\r\n
<tab>-moz-border-radius: 50px;</tab><br />\r\n
<tab>-webkit-border-radius: 50px;</tab><br />\r\n
<tab>border-radius: 50px;</tab><br />\r\n
<tab>margin:15px;</tab><br />\r\n
}
"""
"text_jquery" => """
/*Меняем цвет квадрата при наведении курсора*/<br />\r\n
$(document).on("mouseover", ".square", function () {<br />\r\n
<tab>$(this).css("background","#66CDAA")</tab><br />\r\n
});<br />\r\n
<br />\r\n
/*Меняем цвет круга по клику*/<br />\r\n
$(document).on("mouseup", ".circle", function () {<br />\r\n
<tab>$(this).css("background","#FF4500")</tab><br />\r\n
});
"""
"created_at" => "2016-10-23 17:12:10"
"updated_at" => "2016-10-23 17:12:10"
]-->