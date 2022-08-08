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

    </div>
</div>
<script src="game.js"></script>
</body>
</html>