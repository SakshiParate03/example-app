<?php
// Function to calculate factorial using iteration (loop)
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

// Number for which factorial needs to be calculated
$number = 5;

// Calculate factorial using the function
$factorial = factorial($number);

// Output the result
echo "Factorial of $number is: $factorial";
?>
