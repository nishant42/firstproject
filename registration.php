<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','internship','12345');
mysqli_select_db($con,'userregistration');

$my = $_POST['mine'];
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name ='$my'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    echo "Username Already Taken";
}
else{
$reg= "insert into usertable(name ,password,my) values ('$name' , '$pass','$my')";
mysqli_query($con, $reg);
echo "Registration Successful";
}
$datetime = new $datetime;
$otherTZ = new DateTimeZone('Asia/Kolkata');
$datetime->setTimeZone($otherTZ);



?>