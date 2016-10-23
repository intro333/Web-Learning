<div class="navbar navbar-inverse navbar-fixed-left">
    <a class="navbar-brand" href="{{URL::to('/')}}">Сайт</a>
    <ul class="nav navbar-nav">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Редактор лекций <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/addLesson">Добавить лекцию</a></li>
                <li><a href="/admin/editLessons">Редактировать лекцию</a></li>
                <li><a href="/admin/removeLesson">Удалить лекцию</a></li>
                <li class="divider"></li>
                <li><a href="#">Sub Menu4</a></li>
                <li><a href="#">Sub Menu5</a></li>
            </ul>
        </li>
        <li><a href="/admin/addLesson">Добавить лекцию</a></li>
        <li><a href="#">Link3</a></li>
        <li class="divider"></li>
        <li><a href="/admin/logout">Выход</a></li>
    </ul>
</div>
<div class="container">
    {{--<div class="row">--}}
        {{--<h2>Left side Navigation bar (Fixed)</h2>--}}

        {{--<p>Left side Navigation</p>--}}
        {{--<div class="container">--}}
            @yield('admin-content')
        {{--</div>--}}
    {{--</div>--}}
</div>