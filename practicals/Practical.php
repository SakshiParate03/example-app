<?php
// Practical class definition
class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Static function to generate Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        $fibonacci = array();
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }
}

// Usage example
/*
// Print "Hello, World!"
Practical::printHello();
echo "\n";

// Add two numbers
$result = Practical::add(5, 10);
echo "Sum: " . $result . "\n";

// Generate Fibonacci sequence
$n = 10;
$fibonacciSequence = Practical::generateFibonacciSequence($n);
echo "Fibonacci sequence of first $n numbers: " . implode(", ", $fibonacciSequence) . "\n";
*/
?>
