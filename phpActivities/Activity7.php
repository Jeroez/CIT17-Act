<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key-Value Pairs</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Key-Value Pairs</h1>
    <div>
        <?php
        $arr = [
            "Name" => "Jeremiah Benjamin A. Gomez",
            "Age" => 19,
            "Grade" => "A",
            "City" => "Baguio City"
        ];
        
        foreach ($arr as $key => $value) {
            echo "<strong>$key:</strong> $value<br>";
        }
        ?>
    </div>
</body>
</html>
