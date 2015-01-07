<?php
require '../vendor/autoload.php';

$count= 100000;

$bench = new Ubench;
$bench->start();

$ary = range(1, $count);

$bench->end();

echo 'Tme: '.$bench->getTime(). PHP_EOL;
echo 'Memory Peak: '.$bench->getMemoryPeak(). PHP_EOL;
echo 'Memory Usage: '.$bench->getMemoryUsage(). PHP_EOL;
echo '1 element: '. $bench->getMemoryPeak(true) / $count . ' bytes'.PHP_EOL;
