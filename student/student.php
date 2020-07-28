<?php

session_start();
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'konnect');

	$enroll=$_SESSION['enroll'];
	$sql="select name, batch, mobileno from student where enroll='$enroll'";
	$result=mysqli_query($conn,$sql);
	$value=mysqli_fetch_object($result);
	$mobile=$value->mobileno;
	$name=$value->name;
	$batch=$value->batch;
	$_SESSION['batch']=$batch;
	mysqli_close($conn);
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
					<li><a href="assignment.php" target="bottom">ASSIGNMENT</a></li>
					<li><a href="student.php">USER</a></li>
					<li><a href="../main.html" target="direct">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</div><br>
	<br><br><br><br><br><br><br>

<form><font color="white">
	<h1>USER NAME:&nbsp&nbsp&nbsp<?php echo $name ?></h1><br>
	<h1>ENROLL NO:&nbsp&nbsp&nbsp<?php echo $enroll ?></h1><br>
	<h1>BATCH:&nbsp&nbsp&nbsp<?php echo $batch ?></h1><br>
	<h1>MOBILE NO:&nbsp&nbsp&nbsp<?php echo $mobile ?></h1><br>
</font>
</form>

</body>
</html>