<div class="mobile-nav-bar-1">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="mobile-nav-head">
                <div class="mob-nav-elem">
                    <div class="mob-rectangle"></div>
                    <div class="mob-rectangle"></div>
                    <div class="mob-rectangle"></div>
                </div>
                    <span class="glyphicon glyphicon-log-in  mob-menu-right"></span>
                    <span class="glyphicon glyphicon-user  mob-menu-right"></span>
                    <span id="mobile-menu-option" class="glyphicon glyphicon-cog  mob-menu-right"></span>
                    <span class="glyphicon glyphicon-search  mob-menu-right"></span>
            </div>
        </div>
    </nav>
</div>
<div class="mobile-nav-bar-2">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                {{--<a class="navbar-brand" href="/">Веб уроки</a>--}}
                <a href="/"><img class="www-logo-image" src="/images/www-logo.jpg" style="width: 65px;height: 40px;margin: 5px"></a>
            </div>
            <ul class="nav navbar-nav">
                {{--<li><a href="/admin/panel">Админ Панель</a></li>--}}
                {{--<li><a href="/startLesson/testLesson">Test Lesson</a></li>--}}
                <li id="mob-www-logo">
                    <a href="/">
                        <span class="mob-nav-text">Веб Уроки</span>
                    </a>
                </li>
                <li><a href="#">Компоненты</a></li>
                <li><a href="#">О проекте</a></li>
                <li><a href="#">Контакты</a></li>
                {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Найти урок <span class="caret"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a>--}}
                                {{--<label>Часть</label>--}}
                                {{--<input style="margin-right: 5px;width: 70px" id="nav-part">--}}
                                {{--<label>Урок</label>--}}
                                {{--<input style="margin-right: 5px;width: 70px" id="nav-lesson">--}}
                                {{--<button id="nav-button">Go!</button>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-search"></span>
                        <span class="mob-nav-text">Поиск</span>
                    </a>
                </li>
                <li id="menu-option">
                    <a href="#">
                        <span class="glyphicon glyphicon-cog"></span>
                        <span class="mob-nav-text">Настройки</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        <span class="mob-nav-text">Регистрация</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-log-in"></span>
                        <span class="mob-nav-text">Вход</span>
                    </a>
                </li>
           </ul>
        </div>
    </nav>
</div>