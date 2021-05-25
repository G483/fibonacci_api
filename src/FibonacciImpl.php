<?php declare(strict_types=1);

namespace Fib;

class FibonacciImpl implements Fibonacci 
{
    // The non iterating solution I've found on stackoverflow is
    // round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
    // I've kept the solution that I've written myself without any googling
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


        // Typecasting to string since the values when n > 92 becomes float and later string
        return new FibonacciResponse($n ,(string) $fibonacciNumbers[$n]);
    }
}
?>
