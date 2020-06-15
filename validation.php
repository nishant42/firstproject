<?php
session_start();

$con = mysqli_connect('localhost','internship','12345');
mysqli_select_db($con,'userregistration');

$my = $_POST['mine'];
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name ='$name' && password ='$pass' && my='$my' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['username'] = $my;
   header('location:home.php');
}
else{
header('location:login.php');
}


?>