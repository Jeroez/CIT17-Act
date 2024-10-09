<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Reverse a String</h1>
    <form method="POST" action="">
        <label for="inputString">Input:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = trim($_POST['inputString']);
        $length = strlen($input);
        $fin = "";

        for ($x = 0; $x < $length; $x++) {
            $fin[$x] = $input[$length - 1 - $x];
        }

        echo "<h2>Reversed: $fin</h2>";
    }
    ?>
</body>
</html>
