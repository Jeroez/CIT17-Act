<?php
    $x = 1;
    $y = 0;
    while($x <= 100){
        $y = $x + $y;
        $x++;
    }
    echo"The sum of numbers from 1 to 100 is: ", $y;
?>
