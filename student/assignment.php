<html>
<head>
    <title>student</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
table, th, td {
  border: 5px solid black;
  padding: 20px;
  text-align: center;

  background-color: #f1f1c1;
}
table {
  border-spacing: 20px;
}

body {
  background-image: url('../images/background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
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

<table style="width:100%">
    <caption><h1><font color="white">ASSIGNMENTS</h1></caption></font>
  <tr>
    <th>Assignment</th>
    <th>Submit to</th>
  </tr>
<?php
    session_start();
    $batch=$_SESSION['batch'];

    $conn=mysqli_connect("localhost","root","");
       mysqli_select_db($conn,'konnect');
       $sql="select name,path,teacher from assignment where batch='$batch'";
       $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $path=$row['path'];
    $name=$row['name'];
    $teacher=$row['teacher'];
    echo "<tr>";
    echo "<td><a href='$path' target='_blank'>".$name."</a></td>". "<td>".$teacher."</td>";
    echo "</tr>";
    }
}

$_SESSION['bat']=$batch;
mysqli_close($conn);

?>

</table>


</body>
</html>