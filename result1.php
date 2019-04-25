<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

if(isset($_POST['Submit'])){

$name= $_POST['myusername'];
$pass= $_POST['mypassword'];



	if($name!="admin" || $pass!="admin")
  	{
	echo"ACCESS DENIED";
	exit();
	}
}
else{
	$name="admin";
    $pass="admin";
}	



$_SESSION['username']=$name;
$_SESSION['pass']=$pass;
?>
<html>
<body>
<form method="post" action="select_course.php">
<font color="yellow">COURSE ID:<input type="text" name="cname">
<input type="submit" class="myButton" name="submit" value="Students Enrolled">
</form>

<form method="post" action="select_student.php">
STUDENT NAME :</font><input type="text" name="name">
<input type="submit" class="myButton" name="submit" value="Courses Enrolled">
</form>

<form method="post" action="add_course.php">
<input type="submit" class="myButton" name="wel" value="ADD NEW COURSE">
</form>
<form method="post" action="admin_edit_course.php">
<input type="submit" class="myButton" name="submit" value="EDIT EXISTING STUDENT COURSE">
</form>



		
</body>
</html>	

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
<style>
body {
  background-image: url("https://www.impactteachers.com/wp-content/uploads/2017/11/Chalkboard-with-Stationary.jpg");
  /*background-size: 1200px 500px;*/
  background-size:contain;
  background-size: cover;
  background-position: center;
  background-repeat:  no-repeat;
}
</style>
</head>
<body>
<div id="div1"></div>
<form name="form1"  action="default.php" style="float:right;">
<input type="submit" class="myButton" name="Submit" value="Logout">
</form>
</body>
</html>	

