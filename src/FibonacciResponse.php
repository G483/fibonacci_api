<?php declare(strict_types=1);

namespace Fib;

class FibonacciResponse implements \JsonSerializable
{
    private int $n;

    private string $fibonacciNumber;

    function __construct(int $n, string $fibonacciNumber) 
    {
        $this->n = $n;
        $this->fibonacciNumber = $fibonacciNumber;
    }

    public function jsonSerialize() 
    {
        return [
            'n' => $this->n,
            'fibonacciNumber' => $this->fibonacciNumber
        ];
    }
}
