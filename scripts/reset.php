<?php

$file = "../data/data.json";
$content = file_get_contents($file);
$data = json_decode($content, true);

$jsonData = json_encode([]);
file_put_contents($file, $jsonData);
