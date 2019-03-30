<?php
namespace Kanonji\Benchmark\Fibonacci;

class BenchmarkRunner {

    private $fibonacci;

    public function __construct() {
        $this->fibonacci = new Fibonacci();
    }

    /**
     * @Warmup(1)
     * @Revs(1)
     * @Iterations(3)
     * @OutputTimeUnit("seconds", precision=3)
     */
    public function benchFibonacci34() {
        $this->fibonacci->calc(34);
    }
}
