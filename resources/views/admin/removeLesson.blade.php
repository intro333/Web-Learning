@extends('admin.panel')

@section('admin-content')

    <h2>Удалить лекцию из базы данных</h2>
    <hr style="width: 100%;">

    @foreach($lessons as $lesson)
        <ul class="list-group">
            <li type="button" class="list-group-item list-group-item-success">
                <form method="POST" action="/admin/removeLesson">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="part" value="{{$lesson['part']}}">
                    <input type="hidden" name="lesson" value="{{$lesson['lesson']}}">
                    <a class="btn btn-primary" role="button"><b>Часть:</b> {{$lesson['part']}}</a>&nbsp;&nbsp;
                    <a class="btn btn-primary" role="button"><b>Урок:</b> {{$lesson['lesson']}}</a>&nbsp;&nbsp;
                    <a class="btn btn-primary" role="button"><b>Тема:</b> {{$lesson['theme']}}</a>&nbsp;&nbsp;
                    <button class="btn btn-danger" type="submit" style="float: right;">Удалить</button>
                </form>
            </li>
        </ul>
    @endforeach
@endsection