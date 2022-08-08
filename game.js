//start game
$('#start .btn_start').click(function () {
    $('#start').fadeOut();
    //Установка первого игрока
    $player = 1;
    $('#info #now_go .count').text($player);
})



