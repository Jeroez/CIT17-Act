<?php
    for ($x = 1; $x <= 10; $x++) {
        
        if ($x == 5) {
            continue;
        }
        echo " ", $x;
        if ($x == 8) {
            break;
        }
    }
?>