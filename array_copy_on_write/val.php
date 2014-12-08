<?php
require '../vendor/autoload.php';
require './prepare.php';

$bench = new Ubench;
$bench->start();

$the_array = change_some_elements_of_array($the_array);
$copied = $the_array;

$bench->end();

echo $bench->getTime(). PHP_EOL;
echo $bench->getMemoryPeak(). PHP_EOL;
echo $bench->getMemoryUsage(). PHP_EOL;
