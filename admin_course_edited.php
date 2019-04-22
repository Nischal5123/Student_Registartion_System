<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");
mysqli_select_db($connect,"webexpress");

$name=$_POST['name'];
$course=$_POST['course'];
$new=$_POST['new'];

$query = "update regis SET cname = '$new' WHERE uname = '$name' AND cname = '$course'";
$results=mysqli_query($connect,$query) or die(mysqli_error($connect));
echo"COURSE CHANGED SUCESSFULLY";
header("location: result1.php");

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	