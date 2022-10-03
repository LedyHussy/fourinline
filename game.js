//start game
$('#start .btn_start').click(function () {
    $('#start').fadeOut();
    //Установка первого игрока
    $player = 1;
    $('#info #now_go .count').text($player);
})

$('#game #game_body .col').click(function () {
    $click_x = $(this).data('x');
    $point_class = 'p_'+$player;
    $click_y = 0;
    $point = 1;
    $(this).children().each(function () {
        if ($(this).hasClass('active')){
            $click_y+=1;
        }
    })
    //проверка на заполненность колонки
    if ($click_y == 6){
        $('#col_fin').fadeIn();
    }
    else{
        //установка фишки
        $click_y+=1;
        $("[data-x='"+ $click_x +"'] [data-y='" + $click_y + "']").addClass($point_class);
        $("[data-x='"+ $click_x +"'] [data-y='" + $click_y + "']").addClass('active');


        //проверка соседних фишек
            //проверка колонки фишек
            //не проверяем первую фишку
            if ($click_y == 1){
                console.log('first')
            }
            else{
                $pref_y = $click_y - 1;
                if ($("[data-x='"+ $click_x +"'] [data-y='" + $pref_y + "']").hasClass($point_class)){
                    $point += 1;
                    console.log("check" + $pref_y+"  point:" + $point);
                    if ($pref_y != 1){
                        $pref_y -= 1;
                        if ($("[data-x='"+ $click_x +"'] [data-y='" + $pref_y + "']").hasClass($point_class)){
                            $point += 1;
                            console.log("check" + $pref_y+"  point:" + $point);
                            if ($pref_y != 1){
                                $pref_y -= 1;
                                if ($("[data-x='"+ $click_x +"'] [data-y='" + $pref_y + "']").hasClass($point_class)){
                                    $point += 1;
                                    console.log("check" + $pref_y+"  point:" + $point);
                                    if ($point == 4){
                                        $('#win').fadeIn();
                                        $('#win_player').text($player);
                                    }
                                }
                            }
                        }
                    }
                }
            }
            //проверка строки
            //не проверяем первую фишку
            if ($click_x == 1){
                console.log('first')
            }
            else{
                
            }
    }

    console.log('-------------')
})

$('#col_fin #col_fin_ok').click(function () {
    $('#col_fin').fadeOut();
})

$('#win .btn_start').click(function () {
    window.location.reload()
})

