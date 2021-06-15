<?php
/* Header */
$page_title = 'Tic Tac Toe! - Home';
$navigation = Array(
    'active' => 'Home',
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
<div class="row">
    <div class="col-md-12">
        <div id="main">
            <h1>Welcome to Tic Tac Toe</h1>
            <p><a href="game.php" class="btn btn-primary">Klik hier voor Tic Tac Toe!</a></p>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
include __DIR__ . '/tpl/footer.php';
?>
