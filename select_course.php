<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");
mysqli_select_db($connect,"2008b4a5723p");

$name=$_POST['cname'];
$query="SELECT uname FROM regis WHERE cname='$name'";
$results=mysqli_query($connect,$query) or die(mysqli_error());

echo "Students enrolled in : ".$name."";
echo "<table  border=’2’>\n";
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
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
<a href='result1.php'>Admin Login</a><br/>";
</body>
</html>	