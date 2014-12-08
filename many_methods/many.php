<?php
require '../vendor/autoload.php';

class ManyMethod{
    public function foo1(){
        return 1 + 1;
    }
    public function foo2(){
        return 1 + 2;
    }
    public function foo3(){
        return 1 + 3;
    }
    public function foo4(){
        return 1 + 4;
    }
    public function foo5(){
        return 1 + 5;
    }
    public function foo6(){
        return 1 + 6;
    }
    public function foo7(){
        return 1 + 7;
    }
    public function foo8(){
        return 1 + 8;
    }
    public function foo9(){
        return 1 + 9;
    }
    public function foo10(){
        return 1 + 10;
    }
    public function foo11(){
        return 1 + 11;
    }
    public function foo12(){
        return 1 + 12;
    }
    public function foo13(){
        return 1 + 13;
    }
    public function foo14(){
        return 1 + 14;
    }
    public function foo15(){
        return 1 + 15;
    }
    public function foo16(){
        return 1 + 16;
    }
    public function foo17(){
        return 1 + 17;
    }
    public function foo18(){
        return 1 + 18;
    }
    public function foo19(){
        return 1 + 19;
    }
    public function foo20(){
        return 1 + 20;
    }
}

$upto = 100000;

$bench = new Ubench;
$bench->start();

$i = 0;
while($i < $upto){
    $obj[] = new ManyMethod();
    ++$i;
}

$bench->end();

echo $bench->getTime(). PHP_EOL;
echo $bench->getMemoryPeak(). PHP_EOL;
echo $bench->getMemoryUsage(). PHP_EOL;
