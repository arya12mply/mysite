<?php
$username = $_POST["username"];
$password = $_POST["password"];
$con =mysqli_connect("localhost","root","","login");
$result = mysqli_query($con,"SELECT * FROM `user` WHERE `username`='$username' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1){
    header("location:home.php");
        
}
else{
    echo"incorrect username and password!!!!!!!!!";
   
}
?>