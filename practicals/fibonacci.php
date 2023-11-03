<?php
// Function to generate Fibonacci sequence using a loop
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Number of Fibonacci numbers to generate
$n = 10;

// Generate Fibonacci sequence
$fibonacciSequence = generateFibonacci($n);

// Output the Fibonacci sequence
echo "Fibonacci sequence of first $n numbers: " . implode(", ", $fibonacciSequence);
?>
