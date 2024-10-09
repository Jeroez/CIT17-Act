<?php
    $pass = "password123";
    do{
        echo "\nPlease enter the password: ";
        $check = trim(fgets(STDIN));
        if($check == $pass){
            echo "Access Granted.";
        }else{
            echo "Incorrect password.";
        }
    }while($check != $pass)
?>