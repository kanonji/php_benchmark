<?php
require '../vendor/autoload.php';
require './prepare.php';

$upto = 10000;

$bench = new Ubench;
$bench->start();

for($i=0; $i < $upto; ++$i){
    array_diff($same_ary1, $same_ary2);
}

$bench->end();

echo 'Tme: '.$bench->getTime(). PHP_EOL;
echo 'Memory Peak: '.$bench->getMemoryPeak(). PHP_EOL;
echo 'Memory Usage: '.$bench->getMemoryUsage(). PHP_EOL;

$bench->start();

for($i=0; $i < $upto; ++$i){
    array_diff($different_ary1, $different_ary2);
}

$bench->end();

echo 'Tme: '.$bench->getTime(). PHP_EOL;
echo 'Memory Peak: '.$bench->getMemoryPeak(). PHP_EOL;
echo 'Memory Usage: '.$bench->getMemoryUsage(). PHP_EOL;
