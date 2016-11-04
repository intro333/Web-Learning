@extends('admin.panel')

@section('admin-content')
    <h2>Добавление лекций в базу данных</h2>
    <hr style="width: 100%;">

    <form method="POST" action="/admin/addLesson">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <label for="part">Номер части</label>
        <input name="part" class="input-group" required>
        <label for="lesson">Номер лекции</label>
        <input name="lesson" class="input-group" required>
        <label for="theme">Тема</label>
        <input name="theme" class="input-group form-control" required>
        <label for="description">Описание</label>
        <textarea name="description" class="input-group" style="width:100%;height: 150px;padding: 5px;" required></textarea>
        <div class="admin-main-blok">

            <div class="admin-block-console-result">
                <div class="admin-descrption">HTML</div>
                <textarea  name="text_html" class="admin-textareaCode" required></textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">CSS</div>
                <textarea name="text_css" class="admin-textareaCode" required></textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">Jquery</div>
                <textarea name="text_jquery" class="admin-textareaCode" required></textarea>
            </div>

            <div class="admin-block-console-result">
                <div class="admin-descrption">Результат</div>
                <textarea name="text_result" class="admin-textareaCode" required></textarea>
            </div>
        </div>

        <button class="btn btn-default form-control">Добавить лекцию</button>
    </form>

@endsection