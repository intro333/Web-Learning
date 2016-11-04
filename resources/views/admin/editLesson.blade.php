@extends('admin.panel')

@section('admin-content')

    <h2>Редактирование лекции № {!! $lesson[0]->num !!}</h2>
    <hr style="width: 100%;">

    <form method="POST" action="/admin/editLesson/{!! $lesson[0]->num !!}">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <label for="num">Номер лекции</label>
        <input name="num" class="input-group" value="{!! $lesson[0]->num !!}">
        <label for="theme">Тема</label>
        <input name="theme" class="input-group form-control" value="{!! $lesson[0]->theme !!}">
        <label for="description">Описание</label>
        <textarea name="description" class="input-group" style="width:100%;height: 150px;padding: 5px;">{!! $lesson[0]->description !!}</textarea>
        <div class="admin-main-blok">

            <div class="admin-block-console-result">
                <div class="admin-descrption">HTML</div>
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
        </div>

        <button class="btn btn-default form-control">Добавить лекцию</button>
    </form>
@endsection