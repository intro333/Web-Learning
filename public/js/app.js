
    //Для navigation(Найти урок, в выпадающем меню)
    $(document).on('click', '#nav-button', function () {
        var part = $('#nav-part').val();
        var lesson = $('#nav-lesson').val();

        if (part == ''){
            $('#nav-part').css('border', '1px solid #b22222');
        } else if (  lesson == ''){
            $('#nav-lesson').css('border', '1px solid #b22222');
        }  else {
            window.location.href = '/startLesson/' + part + '/' + lesson;
        }
    });

    $(document).on('mouseover', '#nav-button', function () {
        $(this).css('background-color', 'white');
        $(this).css('font-weight', 'bold');
        $(this).css('border-radius', '5px');
        $(this).css('border', '1px solid black');
        $(this).text('Киси, поехали!');
    });
    $(document).on('mouseout', '#nav-button', function () {
        $(this).css('background-color', '');
        $(this).css('font-weight', '');
        $(this).css('border-radius', '');
        $(this).css('border', '');
        $(this).text('Go!');
    });
    $(document).on('mouseup', '#nav-part', function () {
        $(this).css('border', '');
    });
    $(document).on('mouseup', '#nav-lesson', function () {
        $(this).css('border', '');
    });

    //Для nextOrPrevLesson
    $(document).on('click', '.previous-button', function () {
        var lessonNumber = parseInt($('.lesson-number').text().replace('Урок ', '')) - 1;
        if (lessonNumber == '0'){} else {
            window.location.href = '/startLesson/1/' + lessonNumber;
        }
    });
    $(document).on('click', '.next-button', function () {
        var lessonNumber = parseInt($('.lesson-number').text().replace('Урок ', '')) + 1;
        window.location.href = '/startLesson/1/' + lessonNumber;
    });

    /*
    * Действия при загрузке страницы
    */
    $( document ).ready(function() {
        /*Слайдер на главной странице.При загрузке страницы выставляется интервал прокрутки слайдов*/
        $('.carousel').carousel({
            interval: 5000,
            pause: false
        });
    });

    //Scroll by Max
    scrollToAnimated = {
        isScrollRunning: false,

        // скролим со скоростью приблизительно равной 1000 тчк /сек. Если точек больше - скролим быстрее.
        run: function (x, crollToYPos) {
            var page = $("html, body");
            var difference; // разница между текущим и конечным положением скрола в точках
            var time;       // время за которое необходимо выполнить скрол

            // остановить плавный скрол, если пользователь скролит мышкой
            page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function () {
                page.stop();
                scrollToAnimated.isScrollRunning = false;
            });


            difference = Math.abs(
                Math.max(window.pageYOffset,
                    window.document.documentElement.scrollTop,
                    window.document.body.scrollTop) - crollToYPos
            );

            // 1000 точек за 1 сек; 2000 точек за 1.5 сек; 4000 точек за 2.3 сек; 8 тыс точек за 3.8 сек;
            time = parseInt(Math.sqrt(difference) * 24 + difference / 5);
            if (time > 5000) time = 5000;


            if (!scrollToAnimated.isScrollRunning) {
                scrollToAnimated.isScrollRunning = true;
                page.animate({
                    easing: 'easeOutQuart',
                    scrollTop: crollToYPos
                }, time, function () {
                    scrollToAnimated.isScrollRunning = false;
                });
            }
        }
    };

     /*Кнопка на слайдере главной страницы*/
     $(document).on('click', '.button-slider', function () {
         window.location.href = "/startLesson/1/1";
     });

    /*Подсветить www-logo*/
    $(document).on('mouseover', '.navbar-header', function () {
        $('.www-logo-image').attr('src', '/images/www-logo-ligth.jpg');
    });
    $(document).on('mouseout', '.navbar-header', function () {
        $('.www-logo-image').attr('src', '/images/www-logo.jpg');
    });
