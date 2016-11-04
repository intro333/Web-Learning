@extends('admin.panel')

@section('admin-content')

    <h2>Редактирование лекций</h2>
    <hr style="width: 100%;">

    @foreach($lessons as $lesson)
        <ul class="list-group">
            <li type="button" class="list-group-item list-group-item-success">
                <form method="POST" action="/admin/editLessons/{{$lesson['part']}}/{{$lesson['lesson']}}">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="part" value="{{$lesson['part']}}">
                    <input type="hidden" name="lesson" value="{{$lesson['lesson']}}">
                    <span class="btn btn-primary" role="button"><b>Часть:</b> {{$lesson['part']}}</span>&nbsp;&nbsp;
                    <span class="btn btn-primary" role="button"><b>Урок:</b> {{$lesson['lesson']}}</span>&nbsp;&nbsp;
                    <span class="btn btn-primary edit-lessons_theme" role="button"><b>Тема:</b> {{$lesson['theme']}}</span>&nbsp;&nbsp;
                    <span class="btn btn-primary" role="button"><b>Создан:</b> {{$lesson['created_at']->format('d-m-Y H:i')}}</span>&nbsp;&nbsp;
                    @if($lesson->created_at == $lesson->updated_at)
                        <span class="btn btn-primary" role="button"><b>Не обновлялся</b></span>&nbsp;&nbsp;
                    @else
                        <span class="btn btn-primary" role="button"><b>Обн:</b> {{$lesson['updated_at']->format('d-m-Y H:i')}}</span>&nbsp;&nbsp;
                    @endif
                    <button class="btn btn-success" type="submit" style="float: right;">Редактировать</button>
                </form>
            </li>
        </ul>
    @endforeach
@endsection