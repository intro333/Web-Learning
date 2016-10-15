
    //Меняем цвет квадрата при наведении мыши
    $(document).on('mouseover', '.square', function () {
        $(this).css('background','#66CDAA')
    });

    //Меняем цвет круга при нажатии мыши
    $(document).on('mouseup', '.circle', function () {
        $(this).css('background','#FF4500')
    });
