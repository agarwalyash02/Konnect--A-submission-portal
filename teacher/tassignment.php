<!DOCTYPE html>
<html>
<head>
	<title>assignments</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
table, th, td {
  border: 5px solid black;
  padding: 10px;
  text-align: center;

  background-color: silver;
}
table {
  border-spacing: 15px;
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
                    <li><a href="tassignment.php" target="bottom">ASSIGNMENT</a></li>
                    <li><a href="teacher.php">USER</a></li>
                    <li><a href="../main.html" target="direct">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </div><br>
	<form action="tassign.php" method="post" enctype="multipart/form-data" clas="xyz">
    <table style="width:100%">
        <caption><font color="white"><h1>select the batch to post assignment</h1></caption></font>
    <tr><th>Batch</th><th>Select here</th></tr>
    <tr><td> B1</td><td><input type="checkbox" name="chkl[]" value="b1"></td></tr><br>
    <tr><td> B2</td><td><input type="checkbox" name="chkl[]" value="b2"></td></tr><br>
    <tr><td> B3</td><td><input type="checkbox" name="chkl[]" value="b3"></td></tr><br>
    <tr><td> B4</td><td><input type="checkbox" name="chkl[]" value="b4"></td></tr><br>
    <tr><td> B5</td><td><input type="checkbox" name="chkl[]" value="b5"></td></tr><br>
    <tr><td> B6</td><td><input type="checkbox" name="chkl[]" value="b6"></td></tr><br>
    <tr><td> B7</td><td><input type="checkbox" name="chkl[]" value="b7"></td></tr><br>
    <tr><td> B8</td><td><input type="checkbox" name="chkl[]" value="b8"></td></tr><br>
    <label><center><tr><td>name of assignment</td></center><td><input type="text" name="doc_name"></label></td></tr>
    <label><tr><td>choose file to upload</td></label><td><input type="file" name="myfile"></td></tr>
    <label><tr><td>click here to upolad</td></label><td><input type="submit" name="submit" value="upload"></td></tr>
    </table>
    </form>
</body>
</html> 
