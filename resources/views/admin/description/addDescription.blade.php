@extends('admin.panel')

@section('admin-content')
    <h2>Добавление описания в базу данных</h2>
    <hr style="width: 100%;">

    <form method="POST" action="/admin/addDescription">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <label for="part_id">Номер части</label>
        <input id="part_id" name="part_id" class="input-group" required>
        <label for="lesson_id">Номер лекции</label>
        <input id="lesson_id" name="lesson_id" class="input-group" required>
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
        </div>

        <button class="btn btn-default form-control">Добавить лекцию</button>
    </form>

@endsection