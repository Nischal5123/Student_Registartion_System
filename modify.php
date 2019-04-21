<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"2008b4a5723p");

$information=$_POST['info'];

//echo $value;
//$value-mysqli_real_escape_string($connect,$value);
//$ram="hero";

$add = "ALTER TABLE members ADD `$information` VARCHAR(25) NOT NULL";

$query = mysqli_query($connect,$add)or die(mysqli_error($connect));//problem new column is created but data doesnot get input

$information=$_POST['info'];
$value=$_POST['value'];

$query2 = mysqli_query($connect,"INSERT INTO members('$information') VALUES('$value')");
echo("Record Added Sucessfully");

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
