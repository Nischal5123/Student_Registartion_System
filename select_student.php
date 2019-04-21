<html>
<head>
<link rel="stylesheet" type="text/css" href="newstyle.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	
<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");
mysqli_select_db($connect,"2008b4a5723p");

$name=$_POST['name'];
$query="SELECT cname FROM regis WHERE uname='$name'";
$results=mysqli_query($connect,$query) or die(mysqli_error());

echo '<p class="text">COURSES ENROLLED BY: <br>'.$name.'</br> </p>';
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
<br>
<br>
<?php
echo '<a href="default.php" class="bold_text">Logout</a><br/>';
?>
