<?php
// Number of rows in the inverted triangle
$rows = 5;

// Generating the inverted triangle pattern
for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>
