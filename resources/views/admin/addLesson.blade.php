@extends('admin.panel')

@section('admin-content')
    <h2>Добавление лекций в базу данных</h2>
    <hr style="width: 100%;">

    <div class="admin-main-blok">
        <div class="admin-block-console-result">
            <div class="admin-descrption">HTML</div>
            <textarea class="admin-textareaCode"></textarea>
        </div>

        <div class="admin-block-console-result">
            <div class="admin-descrption">CSS</div>
            <textarea class="admin-textareaCode"></textarea>
        </div>

        <div class="admin-block-console-result">
            <div class="admin-descrption">Jquery</div>
            <textarea class="admin-textareaCode"></textarea>
        </div>
    </div>

@endsection