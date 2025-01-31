<?php
require "dbcon.php";
echo "save";
if(isset($_POST["save"]))
{
$name=$_POST["fname"];
$number=$_POST["lname"];
$work=$_POST["coun"];
$address=$_POST["sub"];
$sql="insert into contact(fname,lname,country,subject)values('$name','$number','$work','$address')";
mysqli_query($con,$sql);
//mysqli_close($con);
echo "<script> alert('save');</script>";
$extra="home.html";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";

}

