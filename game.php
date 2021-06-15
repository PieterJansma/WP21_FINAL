<?php
/* Header */
$page_title = 'Tic Tac Toe! - Game';
$navigation = Array(
    'active' => 'Play Tic Tac Toe!',
    'items' => Array(
        'Home' => 'index.php',
        'Play Tic Tac Toe!' => 'game.php',
        'Information' => 'info.php',
        'Contact' => 'contact.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>
<div class="row">
    <div class="col-md-12">
            <h1>TIC TAC TOE!</h1>
            <form class="game-area">
                <div class="game-board">
                    <button class="tile" id="11" name="11" type="button" onclick="post(11)"></button>
                    <button class="tile" id="12" name="12" type="button" onclick="post(12)"></button>
                    <button class="tile" id="13" name="13" type="button" onclick="post(13)"></button>

                    <button class="tile" id="21" name="21" type="button" onclick="post(21)"></button>
                    <button class="tile" id="22" name="22" type="button" onclick="post(22)"></button>
                    <button class="tile" id="23" name="23" type="button" onclick="post(23)"></button>

                    <button class="tile" id="31" name="31" type="button" onclick="post(31)"></button>
                    <button class="tile" id="32" name="32" type="button" onclick="post(32)"></button>
                    <button class="tile" id="33" name="33" type="button" onclick="post(33)"></button>
                </div>

                <div class="info">
                    <button class="reset" onclick="reset(), remove_json()">Reset</button>
                    <p class="winner"></p>
                    <p class="turn">X</p>
                    <div id="result">result</div>
                </div>
            </form>
    </div>
</div>




<?php
include __DIR__ . '/tpl/body_end.php';
include __DIR__ . '/tpl/footer.php';
?>
