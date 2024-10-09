<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Number Counter</h1>
    <p>
        <?php
        $x = 1;
        while($x <= 10){
            echo $x * 2, " ";
            $x++;
        }
        ?>
    </p>
</body>
</html>
