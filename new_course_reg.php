<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"webexpress");

echo "<h2>Course Registration</h2>";
$query="SELECT course.name FROM course";
$results=mysqli_query($connect,$query) or die(mysqli_error());
echo"<b>Available courses</b> <table  border=’2’>\n";
while ($rows=mysqli_fetch_assoc($results)) {
echo "<tr>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table>\n";
?>

<html>
<body>
<form method="post" action="student_course.php">
<br/>
Your User Name   :<input type="text" name="name"><br/>
Course ID :<input type="text" name="course">
<br/>
<input type="submit" class="myButton" name="submit" value="Register">
</form>
<?php
echo"<a href='result.php'>Back to my page</a><br/>";
?>
</body>
</html>	

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 

</head>
<body>
<div id="div1"></div>
</body>
</html>	