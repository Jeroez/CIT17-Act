<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Numbers</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Sum of Numbers</h1>
    <div>
        <?php
        $x = 1;
        $y = 0;
        while ($x <= 100) {
            $y = $x + $y;
            $x++;
        }
        echo "The sum of numbers from 1 to 100 is: $y";
        ?>
    </div>
</body>
</html>
