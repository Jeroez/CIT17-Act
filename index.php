<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Files</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="container">
        <h1>Activity Files</h1>
        <p>Click on the links below to access the activities:</p>
        <ul class="activity-list">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<li><a href='Activity{$i}.php'>Activity {$i}</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
