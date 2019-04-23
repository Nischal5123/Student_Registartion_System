<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");


mysqli_select_db($connect,"webexpress");
$name = $_POST['name'];
$pass = md5($_POST['pass']);
$branch = $_POST['branch'];
$year = $_POST['year'];

if($name=='' or $pass=='' or $branch=='' or $year=="1")
echo"ERROR IN REGISTRATION";

else{
$insert = "INSERT INTO members(username,password,branch,year)
values('$name','$pass','$branch','$year')";

$results=mysqli_query($connect,$insert) or die(mysqli_error($connect));

echo " Successfully added information";
}
?>
<form method="post" action="default.php">
<input type="submit" class="myButton" name="wel" value="click here to go to login page">
</form>


		
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

