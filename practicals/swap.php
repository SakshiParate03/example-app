<?php
// Original numbers
$number1 = 10;
$number2 = 20;

echo "Original numbers: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "<br>";

// Swapping logic using a temporary variable
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "Numbers after swapping: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "<br>";
?>
