<div class="navbar navbar-inverse navbar-fixed-left">
    <a class="navbar-brand" href="{{URL::asset('/')}}">Сайт</a>
    <a class="navbar-brand" href="{{URL::asset('/admin/panel')}}">Админка</a>
    <ul class="nav navbar-nav">
        <hr style="width: 100%;margin: 1px 0 1px 0">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Редактор лекций <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/addLesson">Добавить лекцию</a></li>
                <li><a href="/admin/editLessons">Редактировать лекцию</a></li>
                <li><a href="/admin/removeLesson">Удалить лекцию</a></li>
                <li class="divider"></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Редактор описаний <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/addDescription">Добавить описание</a></li>
                <li><a href="/admin/editDescriptions">Редактировать описание</a></li>
                <li><a href="/admin/removeDescription">Удалить описание</a></li>
                <li class="divider"></li>
            </ul>
        </li>
        {{--<span style="margin: auto 30%;color: white;">Лекции</span>--}}
        {{--<hr style="margin: 1px auto 1px 8px">--}}
        {{--<li style="margin-top: 1px"><a href="/admin/addLesson">Добавить</a></li>--}}
        {{--<li><a href="/admin/editLessons">Редактировать</a></li>--}}
        {{--<li><a href="/admin/removeLesson">Удалить</a></li>--}}
        <hr style="width: 100%;margin: 1px 0 1px 0">
        <li><a href="/admin/logout">Выход</a></li>
    </ul>
</div>
<div class="container">
            @yield('admin-content')
</div>