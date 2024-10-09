<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Fibonacci Sequence</h1>
    <form method="POST" action="">
        <label for="terms">Number of Terms:</label>
        <input type="number" id="terms" name="terms" min="1" required>
        <input type="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $terms = (int)$_POST['terms'];
        $x = 1;
        $y = 0;
        $z = 0;
        $fibonacciSequence = "";

        while ($z < $terms) {
            $fibonacciSequence .= $y . " ";
            $next = $x + $y;
            $y = $x;
            $x = $next;
            $z++;
        }

        echo "<h2>Fibonacci Sequence: $fibonacciSequence</h2>";
    }
    ?>
</body>
</html>
