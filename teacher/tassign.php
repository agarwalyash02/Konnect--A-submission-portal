<?php
session_start();
$ename=$_SESSION['ename'];
$conn=mysqli_connect("localhost","root","");
       mysqli_select_db($conn,'konnect'); 

        $doc_name=$_POST['doc_name'];
        $name = $_FILES['myfile']['name'];
        $tmp_name=$_FILES['myfile']['tmp_name'];
        $location ="../documents/$name";
        move_uploaded_file($tmp_name,$location);
 

$res=$_POST['chkl'];

if(!empty($_POST['submit']))
{
    if(!empty($res))
    {
      foreach($res as $val)
      {
        $sql="insert into assignment (name,path,batch,teacher) values('$doc_name','$location','$val','$ename')";
          mysqli_query($conn, $sql);
      }
	
    }
}

mysqli_close($conn);
header('location:tassignment.php');
 
?>