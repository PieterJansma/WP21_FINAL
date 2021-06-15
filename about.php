<?php
/* Header */
$page_title = 'Tic Tac Toe! - Contact';
$navigation = Array(
    'active' => 'Contact',
    'items' => Array(
        'Home' => 'index.php',
        'Play Tic Tac Toe!' => 'game.php',
        'Information' => 'info.php',
        'Contact' => 'contact.php',
        'About' => 'about.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>
<link rel="stylesheet" href="css/gameboard.css">
<div class="row_about">
    <div class="transbox">
        <div id="main">
            <h1>About</h1>
            <p>Hi! This website is made by Pieter Jansma, Emiel Dost and Eva Dyadko. We are students Information Science and made this game for a project.
            This game is made with &#10084;&#65039;, So we hope you enjoy playing it! May the best man win &#128521;</p>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
include __DIR__ . '/tpl/footer.php';
?>
