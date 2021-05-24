<?php declare(strict_types=1);

namespace Fib;

class FibonacciImpl implements Fibonacci 
{
    public function getNumber(int $n) : FibonacciResponse
    {
        $fibonacciNumbers = [];
        for ($i = 0; $i <= $n; $i++) {
            if ($i < 2) {
                $fibonacciNumbers[] = $i;
                continue;
            }

            $fibonacciNumbers[] = $fibonacciNumbers[$i - 2] + $fibonacciNumbers[$i - 1];

        }


        return new FibonacciResponse($n ,(string) $fibonacciNumbers[$n]);
    }
}

?>
