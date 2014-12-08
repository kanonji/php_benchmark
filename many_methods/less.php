<?php
require '../vendor/autoload.php';

class LessMethod{
    public function foo(){
        return 1 + 1;
    }
}

$upto = 100000;

$bench = new Ubench;
$bench->start();

$i = 0;
while($i < $upto){
    $obj[] = new LessMethod();
    ++$i;
}

$bench->end();

echo $bench->getTime(). PHP_EOL;
echo $bench->getMemoryPeak(). PHP_EOL;
echo $bench->getMemoryUsage(). PHP_EOL;
