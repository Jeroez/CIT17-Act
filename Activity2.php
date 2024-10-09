<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validator</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>Password Validator</h1>
    <form method="post">
        <label for="password">Please enter the password:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Submit">
    </form>
    <div>
        <?php
        $pass = "password123";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $check = trim($_POST['password']);
            if ($check == $pass) {
                echo "Access Granted.";
            } else {
                echo "Incorrect password.";
            }
        }
        ?>
    </div>
</body>
</html>
