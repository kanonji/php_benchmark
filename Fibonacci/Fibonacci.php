<?php
namespace Kanonji\Benchmark\Fibonacci;

class Fibonacci {

    public function calc(int $num): int {
        if ($num < 2) return $num;
        return $this->calc($num - 2) + $this->calc($num - 1);
    }
}
