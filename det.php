<?php
session_start()
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
        .mo{
            padding-top: 200px;
            color :white;
        }
        .mo button{
            background-color: blue;
            background-size: cover;
        }
        .mo  p a{
            color: white;
            text-decoration: none;
        }
        </style>
    </head>
    <body>
    <header>
        <nav>
            <ul>
            <li><button type ="button"><a href="home.php">HOME</a></li>
            <li><button type ="button"><a href="hobbies.php">HOBBIES</a></li>
            <li><button type ="button"><a href="edu.php">EDUCATIONAL QUALIFICATION</a></li>
            <li><button type ="button"><a href="#">CONTACT</a></li>
            <li><button type ="button"><a href="index.php">LOG OUT</a></li>
            </ul>
        </nav>
    </header>  
        <address>
            <div class ="mo">
<h2>ARYA RAJAN</h2>
<h2>KADAPPA MYNAGAPPALLY,KOLLAM</h2>
<button><p><a href="mailto:arya12mply@gmail.com"><b>SEND MAIL</a></p></button>
        </address>
        </div>
    </body>
    </head>
</html>