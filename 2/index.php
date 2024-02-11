<?php
function fibonacci2($n) {
    $fibonacci = [0, 1];
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$fibonacciSequence = fibonacci2(50);

foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}
