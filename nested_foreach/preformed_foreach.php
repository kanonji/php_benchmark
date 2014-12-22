<?php
require '../vendor/autoload.php';
require './prepare.php';

$upto = 100000;

$bench = new Ubench;
$bench->start();

$result = 0;
foreach(range(1, $upto) as $null){

    shuffle($ary2);
    $hash = [];
    foreach($ary2 as $value2){
        $hash[$value2['id']] = $value2['value'];
    }
    foreach($ary1 as $key1 => $value1){
        if(isset($hash[$key1])) $result += $hash[$key1] + $value1;
    }

}

$bench->end();

echo 'Result: '.$result.PHP_EOL;
echo 'Tme: '.$bench->getTime(). PHP_EOL;
echo 'Memory Peak: '.$bench->getMemoryPeak(). PHP_EOL;
echo 'Memory Usage: '.$bench->getMemoryUsage(). PHP_EOL;
