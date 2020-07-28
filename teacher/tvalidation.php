<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'konnect');

$empid=$_POST['empid'];
$pass=$_POST['epassword'];

$s="select * from teacher where empid='$empid' && epassword='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num)
{
	$_SESSION['empid']=$empid;
	header('location:teacher.php');
}
else
{
	header('location:../main.html');
}
?>