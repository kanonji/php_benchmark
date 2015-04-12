<?php
use kanonji\ReproducibleShuffle;

$same_ary1 = $same_ary2 = range(1, 1000);
$same_ary1 = ReproducibleShuffle::shuffle($same_ary1, 1);
$same_ary2 = ReproducibleShuffle::shuffle($same_ary2, 2);

$different_ary1 = range(1, 1000);
$different_ary2 = range(501, 1500);
$different_ary1 = ReproducibleShuffle::shuffle($different_ary1, 1);
$different_ary2 = ReproducibleShuffle::shuffle($different_ary2, 2);
