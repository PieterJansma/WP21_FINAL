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
<div class="row1">
    <div class="col-md-12">
        <div id="main">
            <h1>Contact</h1>
            <p>You can contact us by sending us an e-mail: bsz.let@rug.nl</p>
            <p>Or you can call us on: +31 (0)50 363 5900</p>
            <p>Or just drop by at: Rijksuniversiteit Groningen</p>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
include __DIR__ . '/tpl/footer.php';
?>

