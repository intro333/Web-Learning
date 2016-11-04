<style>

</style>

<div class="container">
    @if($showLesson[0]['lesson'] == 1)
        <a class="btn  button_off">Предыдущий</a>
    @else
        <a href="/{{\Config::get('base_constants.links')['learns']['lessons']}}/{{$showLesson[0]['part']}}/{{$showLesson[0]['lesson'] - 1}}" class="btn btn-default previous-button">Предыдущий</a>
    @endif

    @if($showLesson[0]['lesson'] == count($allLessons))
        <a class="btn  button_off" style="float: right;">Следующий</a>
    @else
        <a href="/{{\Config::get('base_constants.links')['learns']['lessons']}}/{{$showLesson[0]['part']}}/{{$showLesson[0]['lesson'] + 1}}" class="btn btn-default next-button">Следующий</a>
    @endif
</div>