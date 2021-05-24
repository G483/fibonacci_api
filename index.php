<?php 

header('Content-type: application/json');

require __DIR__.'/vendor/autoload.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false; 
} else { 

$n = $_GET['n'];

    if ($n) {
        $fibonacciService = new Fib\FibonacciImpl();
        $fibonacciNumber = $fibonacciService->getNumber($n);

        echo json_encode($fibonacciNumber->jsonSerialize());
    } else {
        echo 'Provide a positive integer to get the nth fibonacci number';
    }
}
