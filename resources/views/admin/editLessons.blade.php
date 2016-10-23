@extends('admin.panel')

@section('admin-content')

    <h2>Редактирование лекций</h2>
    <hr style="width: 100%;">

    @foreach($lessons as $lesson)
        <ul class="list-group">
            <li type="button" class="list-group-item list-group-item-success">
                <form method="POST" action="/admin/editLesson">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="num" value="{{$lesson['num']}}">
                    <a class="btn btn-primary" role="button">{{$lesson['num']}}</a>&nbsp;&nbsp;
                    <a class="btn btn-primary" role="button">{{$lesson['theme']}}</a>&nbsp;&nbsp;
                    <button class="btn btn-danger" type="submit" style="float: right;">Редактировать</button>
                </form>
            </li>
        </ul>
    @endforeach
@endsection