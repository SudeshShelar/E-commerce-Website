<?php

session_start();
require "dbcon.php";
echo "save";
if(isset($_POST["save"]))
{
    $a = $_SESSION['name'];
    echo $a;
$name=$_POST["lname"];
$number=$_POST["number"];
$work=$_POST["email"];
$address=$_POST["laddress"];
$pin=$_POST["pin"];
$sql="insert into personal(id,name,email,address,number,pin)values('$a','$name','$work','$address','$number','$pin')";
mysqli_query($con,$sql);
//mysqli_close($con);
echo "<script> alert('save');</script>";
$extra="home.html";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";

}

