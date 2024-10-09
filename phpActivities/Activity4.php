<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Control</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Loop Control</h1>
    <div>
        <?php
        for ($x = 1; $x <= 10; $x++) {
            if ($x == 5) {
                continue;
            }
            echo " $x";
            if ($x == 8) {
                break;
            }
        }
        ?>
    </div>
</body>
</html>
