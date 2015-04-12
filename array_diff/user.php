<?php
require '../vendor/autoload.php';
require './prepare.php';

function user_array_diff( $a, $b ) {
    $map = $out = array();
    foreach( $a as $val ) $map[$val] = 1;
    foreach( $b as $val ) if ( isset( $map[$val] ) ) $map[$val] = 0;
    foreach( $map as $val => $ok ) if( $ok ) $out[] = $val;
    return $out;
}

$upto = 10000;

$bench = new Ubench;
$bench->start();

for($i=0; $i < $upto; ++$i){
    user_array_diff($same_ary1, $same_ary2);
}

$bench->end();

echo 'Tme: '.$bench->getTime(). PHP_EOL;
echo 'Memory Peak: '.$bench->getMemoryPeak(). PHP_EOL;
echo 'Memory Usage: '.$bench->getMemoryUsage(). PHP_EOL;

$bench->start();

for($i=0; $i < $upto; ++$i){
    user_array_diff($different_ary1, $different_ary2);
}

$bench->end();

echo 'Tme: '.$bench->getTime(). PHP_EOL;
echo 'Memory Peak: '.$bench->getMemoryPeak(). PHP_EOL;
echo 'Memory Usage: '.$bench->getMemoryUsage(). PHP_EOL;
