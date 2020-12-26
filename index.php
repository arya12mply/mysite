<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta name ="viewport" content="width=device-width,initial-scale=1.0">
        <link rel ="stylesheet" href="im.css">
                
    </head>
    <body>
          
        <div class id = "frm">
        <form method ="POST" action ="login.php">
            <p>
                <label>Username</label>
                <input type = "text" id ="user" name = "username">
                <br>
            </p>
                <label>Password</label>
                <input type = "text" id ="pass" name = "password">
                <br>
                <p>
                <input type = "submit" id ="btn" value = "login"><br>
                       
            </p>

        </form>
    </body>

<?php
session_destroy();
?>