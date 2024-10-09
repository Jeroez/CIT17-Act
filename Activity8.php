<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = (int)$_POST['number'];
        $y = 1;

        for ($z = 1; $z <= $x; $z++) {
            $y *= $z;
        }

        echo "Factorial of {$x} is: {$y}";
    }
    ?>
</body>
</html>
