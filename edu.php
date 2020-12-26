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
.main{
    padding-top: 200px;
    color :white;
}
        </style>
    </head>
    <body>
    <header>
        <nav>
            <ul>
            <li><button type ="button"><a href="home.php">HOME</a></li>
            <li><button type ="button"><a href="hobbies.php">HOBBIES</a></li>
            <li><button type ="button"><a href="#">EDUCATIONAL QUALIFICATION</a></li>
            <li><button type ="button"><a href="det.php">CONTACT</a></li>
            <li><button type ="button"><a href="index.php">LOG OUT</a></li>
            </ul>
        </nav>
    </header> 
    <div class ="main"> 
    <h3>NAME : ARYA RAJAN</h3>
    <br>
    <table>
        <table>
            <tr id="heading">
                <td><b><u>Qualification</td>
                <td><b><u>Board</td>
                <td><b><u>Percentage / Grades</td>
                <td><b><u>Year</td>
            </tr>
            <tr>
                <td>SSLC</td>
                <td>Board of public examination,kerala</td>
                <td>95%</td>
                <td>2014</td>
            </tr>
            <tr>
                <td>Higher Secondary</td>
                <td>Board of Higher Secondary examination</td>
                <td>85</td>
                <td>2016</td>
            </tr>
            <tr>
                <td>Graduation</td>
                <td>kerala University</td>
                <td>B Grade</td>
                <td>2019</td>
            </tr>
           
        </table>
        <br>
        <br>
    </div>
        </body>

    </head>
</html>