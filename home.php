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
    <head>
        <style>
            body{
            
            background-image: url('https://images.unsplash.com/photo-1497250681960-ef046c08a56e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max');
            background-size: cover;  
            background-repeat: no-repeat;  
        }
        .marquee {
            color :white;
            padding-top: 300px;
        }

        </style>
    </head>
        <body>
        <header>
        <nav>
            <ul>
            <li><button type ="button"><a href="#">HOME</a></li>
            <li><button type ="button"><a href="hobbies.php">HOBBIES</a></li>
            <li><button type ="button"><a href="edu.php">EDUCATIONAL QUALIFICATION</a></li>
            <li><button type ="button"><a href="det.php">CONTACT</a></li>
            <li><button type ="button"><a href="index.php">LOG OUT</a></li>
            </ul>
        </nav>
    </header> 
    <div class ="marquee">
    <h1><marquee behavior ="scroll" direction="center" scrollamount ="12">WELCOME TO MY AREA........</marquee><h1>
    </div>
        </body>

    </head>
</html>
   