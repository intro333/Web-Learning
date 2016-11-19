@extends('admin.panel')

@section('admin-content')

    <h2>Редактирование описания</h2>
    <hr style="width: 100%;">

    @foreach($descriptions as $description)
        <ul class="list-group">
            <li type="button" class="list-group-item list-group-item-success">
                <form method="POST" action="/admin/editDescriptions/{{$description['part_id']}}/{{$description['lesson_id']}}">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="part" value="{{$description['part_id']}}">
                    <input type="hidden" name="lesson" value="{{$description['lesson_id']}}">
                    <span class="btn btn-primary" role="button"><b>Часть:</b> {{$description['part_id']}}</span>&nbsp;&nbsp;
                    <span class="btn btn-primary" role="button"><b>Урок:</b> {{$description['lesson_id']}}</span>&nbsp;
                    <span class="btn btn-primary" role="button"><b>Создан:</b> {{$description['created_at']->format('d-m-Y H:i')}}</span>&nbsp;&nbsp;
                    @if($description->created_at == $description->updated_at)
                        <span class="btn btn-primary" role="button"><b>Не обновлялся</b></span>&nbsp;&nbsp;
                    @else
                        <span class="btn btn-primary" role="button"><b>Обн:</b> {{$description['updated_at']->format('d-m-Y H:i')}}</span>&nbsp;&nbsp;
                    @endif
                    <button class="btn btn-success" type="submit" style="float: right;">Редактировать</button>
                </form>
            </li>
        </ul>
    @endforeach
@endsection