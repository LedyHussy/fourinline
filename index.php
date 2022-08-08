<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="game">
    <div id="info">
        <p id="now_go">Сейчас ходит игрок № <span class="count"></span></p>
        <div id="p_1" class="player_info">
            <p class="title">Игрок 1</p>
            <p class="go_count">Ходов: <span class="count"></span></p>
        </div>
        <div id="p_2" class="player_info">
            <p class="title">Игрок 2</p>
            <p class="go_count">Ходов: <span class="count"></span></p>
        </div>
    </div>
    <div id="game_body">
        <div class="col col_1">
            <div class="point point_1"></div>
            <div class="point point_2"></div>
            <div class="point point_3"></div>
            <div class="point point_4"></div>
            <div class="point point_5"></div>
            <div class="point point_6"></div>
        </div>
        <div class="col col_2">
            <div class="point point_1"></div>
            <div class="point point_2"></div>
            <div class="point point_3"></div>
            <div class="point point_4"></div>
            <div class="point point_5"></div>
            <div class="point point_6"></div>
        </div>
        <div class="col col_3">
            <div class="point point_1"></div>
            <div class="point point_2"></div>
            <div class="point point_3"></div>
            <div class="point point_4"></div>
            <div class="point point_5"></div>
            <div class="point point_6"></div>
        </div>
        <div class="col col_4">
            <div class="point point_1"></div>
            <div class="point point_2"></div>
            <div class="point point_3"></div>
            <div class="point point_4"></div>
            <div class="point point_5"></div>
            <div class="point point_6"></div>
        </div>
        <div class="col col_5">
            <div class="point point_1"></div>
            <div class="point point_2"></div>
            <div class="point point_3"></div>
            <div class="point point_4"></div>
            <div class="point point_5"></div>
            <div class="point point_6"></div>
        </div>
        <div class="col col_6">
            <div class="point point_1"></div>
            <div class="point point_2"></div>
            <div class="point point_3"></div>
            <div class="point point_4"></div>
            <div class="point point_5"></div>
            <div class="point point_6"></div>
        </div>
        <div class="col col_7">
            <div class="point point_1"></div>
            <div class="point point_2"></div>
            <div class="point point_3"></div>
            <div class="point point_4"></div>
            <div class="point point_5"></div>
            <div class="point point_6"></div>
        </div>
    </div>
</div>
<div id="start">
    <p class="title">Добро пожаловать в игру 4 в ряд</p>
    <p class="text">Ваша задача - собрать ряд из 4 фишек на игровом поле! </p>
    <p class="btn btn_start">Начать игру</p>
</div>
<script src="game.js"></script>
</body>
</html>