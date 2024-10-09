<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz Challenge</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>FizzBuzz Challenge</h1>
    <div>
        <?php
        for ($x = 1; $x <= 50; $x++) {
            if ($x % 3 == 0 && $x % 5 == 0) {
                echo "FizzBuzz ";
            } elseif ($x % 5 == 0) {
                echo "Buzz ";
            } elseif ($x % 3 == 0) {
                echo "Fizz ";
            } else {
                echo $x . " ";
            }
        }
        ?>
    </div>
</body>
</html>
