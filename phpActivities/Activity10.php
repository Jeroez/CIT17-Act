<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="POST" action="">
        <label for="number">Please enter a number:</label>
        <input type="number" id="number" name="number" min="1" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = (int)$_POST['number'];

        if ($num <= 1) {
            echo "$num is NOT a prime number.";
        } else {
            $isPrime = true;
            for ($x = 2; $x < $num; $x++) {
                if ($num % $x == 0) {
                    echo "$num is NOT a prime number.";
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "$num is a prime number.";
            }
        }
    }
    ?>
</body>
</html>
