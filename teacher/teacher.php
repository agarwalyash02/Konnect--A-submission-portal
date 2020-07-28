<?php

session_start();
$enroll=$_SESSION['enroll'];
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'konnect');

	$empid=$_SESSION['empid'];
	$sql="select ename, ebatch, emobile from teacher where empid='$empid'";
	$result=mysqli_query($conn,$sql);
	$value=mysqli_fetch_object($result);
	$emobile=$value->emobile;
	$ename=$value->ename;
	$ebatch=$value->ebatch;
	mysqli_close($conn);
	$_SESSION['ename']=$ename;
?>
<html>
<head>
	<title>student</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style>
body {
  background-image: url('../images/student.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<body>
	<div class="navbar">
		<div class="container">
			<div class="logo">
				<img src="../images/logo.png" class="logoimage">
			</div>
			<div class="options">
				<ul class="menu">
					<li><a href="tassignment.php" target="bottom">ASSIGNMENT</a></li>
					<li><a href="#">USER</a></li>
					<li><a href="../main.html" target="direct">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</div><br>
	<br><br><br><br><br><br><br>

<form><font color="white">
	<h1>EMPLOYEE NAME:&nbsp&nbsp&nbsp<?php echo $ename ?></h1><br>
	<h1>EMPID NO:&nbsp&nbsp&nbsp<?php echo $empid ?></h1><br>
	<h1>BATCH:&nbsp&nbsp&nbsp<?php echo $ebatch ?></h1><br>
	<h1>MOBILE NO:&nbsp&nbsp&nbsp<?php echo $emobile ?></h1><br>
</font>
</form>

</body>
</html>