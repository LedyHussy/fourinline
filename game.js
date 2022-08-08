//start game
$('#start .btn_start').click(function () {
    $('#start').fadeOut();
    //Установка первого игрока
    $player = 1;
    $('#info #now_go .count').text($player);
})

$('#game #game_body .point').click(function () {
    //нельзя нажать на уже занятую ячейку
    if (!$(this).hasClass('active')){
        $(this).addClass('active');
        $player_count = 'p_'+$player;
        $(this).addClass($player_count);
        $count = 0;

        //Добавление хода
        $player_counts = Number($('#info #' + $player_count + ' .go_count .count').text()) + 1;
        $('#info #' + $player_count + ' .go_count .count').text($player_counts);

        //переход хода
        if ($player==1){
            $player = 2;
            $('#info #now_go .count').text($player);
        }
        else{
            $player = 1;
            $('#info #now_go .count').text($player);
        }

        //Проверка на победу
        //получение координат
        $x = $(this).data('x');
        $y = $(this).data('y');
            //проверка горизонтали
            //получение предъидущего круга

    }
    else{
        console.log('has active class')
    }
})

