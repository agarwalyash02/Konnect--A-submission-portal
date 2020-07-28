<?php

	session_start();
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'konnect');
	if(isset($_GET['dow']))
	{
		$path=$_GET['dow'];
	$res="select name from assignment where path='$path'";
	$result=mysqli_query($conn,$res);
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header('Content-Length: '. filesize($path));
	readfile($path);
	}

?>