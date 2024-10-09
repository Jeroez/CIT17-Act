<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Iteration</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Array Iteration</h1>
    <ol>
        <?php
        $arr = array("Kimi no Na wa", "Suzume", "Spirited Away", "Tenki no Ko", "Kimi no Suizō o Tabetai");
        foreach ($arr as $list) {
            echo "<li>$list</li>";
        }
        ?>
    </ol>
</body>
</html>
