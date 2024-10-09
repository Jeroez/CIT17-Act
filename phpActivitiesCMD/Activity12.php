<?php
echo "\nInput: ";
$input = trim(fgets(STDIN));
$length = strlen($input);
$fin = "";

for ($x = 0; $x < $length; $x++) {
    $fin[$x] = $input[$length - 1 - $x];
}

echo "Reversed: $fin\n";
?>
