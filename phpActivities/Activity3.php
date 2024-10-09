<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Multiplication Table</h1>
    <div>
        <?php
        for ($x = 1; $x <= 10; $x++) {
            echo "7 x {$x} = " . ($x * 7) . "<br>";
        }
        ?>
    </div>
</body>
</html>
