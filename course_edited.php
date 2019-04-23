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
//check if un available course is being tried to replace 
$q2="SELECT name FROM course WHERE name='$new'";                  
$r2=mysqli_query($connect,$q2) or die(mysqli_error($connect));
$reg2=mysqli_fetch_assoc($r2);
if(mysqli_num_rows($r2) == 0)
{echo "<a href='edit_course.php'>Back</a><br/>Course doesnot exist $name";
exit();
}
//check if the Course to change is relevent
$q3="SELECT cname FROM regis WHERE cname='$course'";                  
$r3=mysqli_query($connect,$q3) or die(mysqli_error($connect));
$reg3=mysqli_fetch_assoc($r3);
if(mysqli_num_rows($r3) == 0)
{echo "<a href='edit_course.php'>Back</a><br/>Entered wrong course to be changed $name";
exit();
}
else{
$query = "update regis SET cname = '$new' WHERE uname = '$name' AND cname = '$course'";
$results=mysqli_query($connect,$query) or die(mysqli_error());
echo"<a href='edit_course.php'>Back</a><br/>COURSE CHANGED SUCESSFULLY";
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	