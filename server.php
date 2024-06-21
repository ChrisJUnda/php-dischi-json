<?php
$list = file_get_contents(__DIR__ . '/music.json');

header('Content-Type: application/json');

echo $list;
