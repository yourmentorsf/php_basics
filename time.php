<?php

echo 'Time script' . PHP_EOL;

echo date("D M, d.m.Y / h:i:s") . PHP_EOL;


echo time() . PHP_EOL;


echo mktime(0, 0, 0, 12, 31, 2020) . PHP_EOL;

echo strtotime("next Monday") .PHP_EOL;

$date = new DateTime();

echo $date->format("D M, d.m.Y / H:i:s") . PHP_EOL;

$timezone = new DateTimeZone("Europe/Moscow");

echo $timezone->getName() . PHP_EOL;

// echo $timezone-> . PHP_EOL;