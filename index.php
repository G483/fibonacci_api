<?php 

header('Content-type: application/json');

require __DIR__.'/vendor/autoload.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false; 
} else { 

    /** This is a very "hacky" solution to expose an endpoint using php server
     *  In real life scenarion I would use nginx or apache for the server
     *  and GuzzleHttp client to create the endpoints since the native
     *  curl interface from PHP is not the most user friendly
     */
    $n = $_GET['n'];

    if (is_numeric($n) && $n >= 0) {
        $fibonacciService = new Fib\FibonacciImpl();
        $fibonacciNumber = $fibonacciService->getNumber($n);

        echo json_encode($fibonacciNumber->jsonSerialize());
    } else {
        echo 'Provide a positive integer to get the Nth fibonacci number';
    }
}
