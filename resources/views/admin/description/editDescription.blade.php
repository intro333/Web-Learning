@extends('admin.panel')

@section('admin-content')

    <h2>Редактирование описания лекции № {!! $description[0]->lesson_id !!}</h2>
    <p><b>Создан:</b> {{$description[0]->created_at->format('d F Y H:i')}}</p>
    @if($description[0]->created_at == $description[0]->updated_at)
        <p><b>Не обновлялся</b></p>
    @else
        <p><b>Обновлен:</b> {{$description[0]->updated_at->format('d F Y H:i')}}</p>
    @endif
    <hr style="width: 100%;">

    <form method="POST" action="/admin/editDescription/{!! $description[0]->part_id !!}/{!! $description[0]->lesson_id !!}">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <label for="part">Номер части</label>
        <input name="part" class="input-group" value="{!! $description[0]->part_id !!}">
        <label for="lesson">Номер лекции</label>
        <input name="lesson" class="input-group" value="{!! $description[0]->lesson_id !!}">
        <div class="admin-main-blok">

            <div class="admin-block-console-result">
                <div class="admin-descrption">HTML <a href="http://www.freebits.co.uk/convert-html-code-to-text.html" target="_blank">Отображение html кода</a></div>
                <textarea  name="text_html" class="admin-textareaCode">{!! $description[0]->text_html !!}</textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">CSS</div>
                <textarea name="text_css" class="admin-textareaCode">{!! $description[0]->text_css !!}</textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">Jquery</div>
                <textarea name="text_jquery" class="admin-textareaCode">{!! $description[0]->text_jquery !!}</textarea>
            </div>
        </div>

        <button class="btn btn-default form-control">Редактировать описание</button>
    </form>
@endsection