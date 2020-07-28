<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'konnect');

$enroll=$_POST['enroll'];
$pass=$_POST['password'];

$s="select * from usertable where enroll='$enroll' && password='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
	header('location:user.php');
}
else
{
	header('location:main.html');
}
?>