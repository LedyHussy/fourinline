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
        <div class="col">
            <div class="point" data-y="1" data-x="1"></div>
            <div class="point" data-y="2" data-x="1"></div>
            <div class="point" data-y="3" data-x="1"></div>
            <div class="point" data-y="4" data-x="1"></div>
            <div class="point" data-y="5" data-x="1"></div>
            <div class="point" data-y="6" data-x="1"></div>
        </div>
        <div class="col">
            <div class="point" data-y="1" data-x="2"></div>
            <div class="point" data-y="2" data-x="2"></div>
            <div class="point" data-y="3" data-x="2"></div>
            <div class="point" data-y="4" data-x="2"></div>
            <div class="point" data-y="5" data-x="2"></div>
            <div class="point" data-y="6" data-x="2"></div>
        </div>
        <div class="col">
            <div class="point" data-y="1" data-x="3"></div>
            <div class="point" data-y="2" data-x="3"></div>
            <div class="point" data-y="3" data-x="3"></div>
            <div class="point" data-y="4" data-x="3"></div>
            <div class="point" data-y="5" data-x="3"></div>
            <div class="point" data-y="6" data-x="3"></div>
        </div>
        <div class="col">
            <div class="point" data-y="1" data-x="4"></div>
            <div class="point" data-y="2" data-x="4"></div>
            <div class="point" data-y="3" data-x="4"></div>
            <div class="point" data-y="4" data-x="4"></div>
            <div class="point" data-y="5" data-x="4"></div>
            <div class="point" data-y="6" data-x="4"></div>
        </div>
        <div class="col">
            <div class="point" data-y="1" data-x="5"></div>
            <div class="point" data-y="2" data-x="5"></div>
            <div class="point" data-y="3" data-x="5"></div>
            <div class="point" data-y="4" data-x="5"></div>
            <div class="point" data-y="5" data-x="5"></div>
            <div class="point" data-y="6" data-x="5"></div>
        </div>
        <div class="col">
            <div class="point" data-y="1" data-x="6"></div>
            <div class="point" data-y="2" data-x="6"></div>
            <div class="point" data-y="3" data-x="6"></div>
            <div class="point" data-y="4" data-x="6"></div>
            <div class="point" data-y="5" data-x="6"></div>
            <div class="point" data-y="6" data-x="6"></div>
        </div>
        <div class="col">
            <div class="point" data-y="1" data-x="7"></div>
            <div class="point" data-y="2" data-x="7"></div>
            <div class="point" data-y="3" data-x="7"></div>
            <div class="point" data-y="4" data-x="7"></div>
            <div class="point" data-y="5" data-x="7"></div>
            <div class="point" data-y="6" data-x="7"></div>
        </div>
    </div>
</div>
<div id="start">
    <p class="title">Добро пожаловать в игру 4 в ряд</p>
    <p class="text">Ваша задача - собрать ряд из 4 фишек на игровом поле! </p>
    <p class="btn btn_start">Начать игру</p>
</div>
<div id="win">
    <p class="title">Выигрышь! </p>
    <p class="text">Победил игрок № <span id="win_player"></span> </p>
    <p class="text">За <span id="win_count"></span> ходов</p>
    <p class="btn btn_start">Начать игру сначала</p>
</div>
<script src="game.js"></script>
</body>
</html>