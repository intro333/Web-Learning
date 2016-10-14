@extends('app')
@section('content')

    <h2 class="lesson-number">Урок 2</h2>

    <label>Описание: .</label>


    <div></div>

    <hr>
    @include('includes.nextOrPrevLesson')
    {{--Part 1 Подключаем стили и сценарии для этого урока--}}
    <script src="/js/part1/lesson2.js"></script>
    <link rel="stylesheet" href="/css/part1/lesson2.css">
@endsection