@extends('admin.panel')

@section('admin-content')

    <h2>Редактирование лекции № {!! $lesson[0]->lesson !!}</h2>
    <p><b>Создан:</b> {{$lesson[0]->created_at->format('d F Y H:i')}}</p>
    @if($lesson[0]->created_at == $lesson[0]->updated_at)
        <p><b>Не обновлялся</b></p>
    @else
        <p><b>Обновлен:</b> {{$lesson[0]->updated_at->format('d F Y H:i')}}</p>
    @endif
    <hr style="width: 100%;">

    <form method="POST" action="/admin/editLesson/{!! $lesson[0]->part !!}/{!! $lesson[0]->lesson !!}">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <label for="part">Номер части</label>
        <input name="part" class="input-group" value="{!! $lesson[0]->part !!}">
        <label for="lesson">Номер лекции</label>
        <input name="lesson" class="input-group" value="{!! $lesson[0]->lesson !!}">
        <label for="theme">Тема</label>
        <input name="theme" class="input-group form-control" value="{!! $lesson[0]->theme !!}">
        <label for="description">Описание</label>
        <textarea name="description" class="input-group" style="width:100%;height: 150px;padding: 5px;">{!! $lesson[0]->description !!}</textarea>
        <div class="admin-main-blok">

            <div class="admin-block-console-result">
                <div class="admin-descrption">HTML <a href="http://www.freebits.co.uk/convert-html-code-to-text.html" target="_blank">Отображение html кода</a></div>
                <textarea  name="text_html" class="admin-textareaCode">{!! $lesson[0]->text_html !!}</textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">CSS</div>
                <textarea name="text_css" class="admin-textareaCode">{!! $lesson[0]->text_css !!}</textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">Jquery</div>
                <textarea name="text_jquery" class="admin-textareaCode">{!! $lesson[0]->text_jquery !!}</textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">Результат</div>
                <textarea name="text_result" class="admin-textareaCode">{!! $lesson[0]->text_result !!}</textarea>
            </div>
        </div>

        <button class="btn btn-default form-control">Редактировать лекцию</button>
    </form>
@endsection