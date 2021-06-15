<?php
/* Header */
$page_title = 'Tic Tac Toe! - Information';
$navigation = Array(
    'active' => 'Information',
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
<div class="row1">
    <div class="col-md-12">
        <div id="main">
            <h1>Information</h1>
            <p>The first player is X and the second player is O. You win when you're the first one
                having 3 sequences at a row - horizontal, diagonal or vertical</p>
            <p>Succes!</p>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
include __DIR__ . '/tpl/footer.php';
?>
