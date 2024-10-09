<?php
$x = 1;
$y = 0;
$z = 0;

while ($z < 10) {
    echo $y . " ";
    $next = $x + $y;
    $y = $x;
    $x = $next;
    $z++;
}
?>
