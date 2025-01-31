<!--code for backend save-->

<?php
require 'dbcon.php';

 //$utype=$_GET["utype"];
    $uname=$_GET["uname"];
    $pass=$_GET["email"];
    $password=$_GET["pass"];

    $sql="insert into login(uid,eid,pass)values('$uname','$pass','$password')";
    echo "<script>alert('Registration Successful');</script>";

    mysqli_query($con,$sql);
    mysqli_close($con);
    $extra="index.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";
    
