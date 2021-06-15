<?php
/* Header */
$page_title = 'Tic Tac Toe! - Winner!';
$navigation = Array(
    'active' => 'Winner!',
    'items' => Array(
        'Home' => '/WP21/WP_21_FINAL/index.php',
        'Play Tic Tac Toe!' => '/WP21/WP_21_FINAL/game.php',
        'Information' => '/WP21/WP_21_FINAL/info.php',
        'Contact' => '/WP21/WP_21_FINAL/contact.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

<div id="main">
    <h1>TIC TAC TOE</h1>
    <p>Winner!</p>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
include __DIR__ . '/tpl/footer.php';
?>
