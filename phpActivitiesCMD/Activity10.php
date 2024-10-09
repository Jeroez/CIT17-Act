<?php
echo "\nPlease enter a number: ";
$num = trim(fgets(STDIN));

if ($num <= 1) {
    echo "$num is NOT a prime number.";
} else {
    for ($x = 2; $x < $num; $x++) {
        if ($num % $x == 0) {
            echo "$num is NOT a prime number.";
            break;
        }
    }
    if ($x == $num) {
        echo "$num is a prime number.";
    }
}
?>