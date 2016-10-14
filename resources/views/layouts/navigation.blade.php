<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            {{--<a class="navbar-brand" href="/">Веб уроки</a>--}}
            <a href="/"><img class="www-logo-image" src="/images/www-logo.jpg" style="width: 65px;height: 40px;margin: 5px"></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Компоненты</a></li>
            <li><a href="#">О проекте</a></li>
            <li><a href="#">Контакты</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Найти урок <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a>
                            <label>Часть</label>
                            <input style="margin-right: 5px;width: 70px" id="nav-part">
                            <label>Урок</label>
                            <input style="margin-right: 5px;width: 70px" id="nav-lesson">
                            <button id="nav-button">Go!</button>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>