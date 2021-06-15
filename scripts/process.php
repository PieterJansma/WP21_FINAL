<?php
$player = $_POST['player'];
$tiles = $_POST['tiles'];
echo $tiles;
echo $player;

$file = "../data/data.json";
$content = file_get_contents($file);
$data = json_decode($content, true);

$data[]  = [
    $tiles => $player,
];



$jsonData = json_encode($data);
file_put_contents($file, $jsonData);




