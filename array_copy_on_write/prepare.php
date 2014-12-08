<?php
$the_array = ['nest' => []];
$char = 'a';
for($i=0;$i<10000;++$i){
    $key = $char.$char.$char;
    $the_array[$key] = $i;
    ++$char;
}
$char = 'a';
for($i=0;$i<10000;++$i){
    $key = $char.$char.$char;
    $the_array['nest'][$key] = $i;
    ++$char;
}

function change_some_elements_of_array($ary){
    $ary['aaa'] = $ary['aaa'] * -1;
    $ary['zzz'] = $ary['zzz'] * -1;
    $ary['nest']['aaa'] = $ary['nest']['aaa'] * -1;
    $ary['nest']['zzz'] = $ary['nest']['zzz'] * -1;
    return $ary;
}

function change_some_elements_of_arrayref(&$ary){
    $ary['aaa'] = $ary['aaa'] * -1;
    $ary['zzz'] = $ary['zzz'] * -1;
    $ary['nest']['aaa'] = $ary['nest']['aaa'] * -1;
    $ary['nest']['zzz'] = $ary['nest']['zzz'] * -1;
}
