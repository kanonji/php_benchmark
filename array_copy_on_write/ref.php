<?php
require '../vendor/autoload.php';
require './prepare.php';

$bench = new Ubench;
$bench->start();

change_some_elements_of_arrayref($the_array);
$copied = $the_array;

$bench->end();

echo $bench->getTime(). PHP_EOL;
echo $bench->getMemoryPeak(). PHP_EOL;
echo $bench->getMemoryUsage(). PHP_EOL;
