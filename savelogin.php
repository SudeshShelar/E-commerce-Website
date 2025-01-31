<!--code for login validation -->
<?php
require 'dbcon.php';
session_start();
 //$utype=$_GET["utype"];
    $uname=$_GET["uname"];
    $password=$_GET["pass"];
    $uname="select * from login where uid='$uname'";  
    $query=mysqli_query($con,$uname);
    $num_count=mysqli_num_rows($query);
    if ($num_count) {
$pass=mysqli_fetch_assoc($query);
$db_pass =$pass['pass'];
$_SESSION['name']=$pass['uid'];
//echo $db_pass;
//echo $password;

if ($db_pass==$password){
    echo "<script>alert('Login Successful');</script>";
    echo "<script> alert('save');</script>";
$extra="home.html";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";
}
else{
    echo "<script>alert('password is Incorrect');</script>";
    echo "<script> alert('save');</script>";
$extra="index.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";
    }}
else{
     echo "Invalid User name";
     echo "<script>alert('Invalid User Name');</script>";
     echo "<script> alert('save');</script>";
$extra="index.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";
}


?>
   