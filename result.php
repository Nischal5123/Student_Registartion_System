<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
//$_SESSION['username']="";//initializing session variables
//$_SESSION['pass']="";

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
//if(isset($_POST['']))
//$uname= $_POST['myusername'];
//$upass= $_POST['mypassword'];

$uname=$_SESSION['username'];
$upass=$_SESSION['pass'];

mysqli_select_db ($connect,"webexpress");
$query="SELECT * FROM members WHERE username='$uname' and password='$upass'";

$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

if($row = mysqli_fetch_array($results))
  { echo"<font color='red'>Welcome       ". $row['username'] ."!!<br/>";
  echo "<br>
  <br><table  style='width:50%' class='CSSTableGenerator'>
USER INFORMATION<tr>

<th>USERNAME</th>

<th>MAJOR</th>
<th>GRADUATION YEAR</th>
</tr>";
  echo"</font>";
  
  echo "<tr>";

  echo "<td>" . $row['username'] . "</td>";
  
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "</tr>";
  }
  else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
echo "</table>";

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
<style>

  body{
    background-image: url("https://wallpapercave.com/wp/wp1838742.jpg");
  }

</style>
</head>
<body>
<div id="div1"></div>
</body>
</html>	
<br/><br/>
<form method="post" action="default.php" style="float:right;">
<input type="submit" class="myButton" name="add" value="LOGOUT">
</form>

<form method="post" action="add.php" style="float:right;">
<input type="submit" class="myButton" name="add" value="ADD USER INFROMATION">
</form>

<form method="post" action="new_course_reg.php" >
<input type="submit" class="myButton" name="add" value="COURSE REGISTRATION">
</form>


<?php
echo"<center><h2 class='text'>REGISTERED COURSES</h2></center>";
$query="Select regis.cname, course.credit, course.instructor 
FROM course 
INNER JOIN regis 
ON course.name=regis.cname 
AND regis.uname= '$uname';";

$results=mysqli_query($connect,$query) or die(mysqli_error());

echo "<center><table style='width:50%' class='CSSTableGenerator'><tr><td></td><td><b>Course ID</b></td><td><b>Credits</b></td><td><b>Instructor</b></td></tr>\n";
while ($rows=mysqli_fetch_assoc($results)) {
echo "<tr><td><a href='Remove_Course.php?cname=$rows[cname]&uuname=$uname'>Remove</a></td>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table></center>\n"; 
?>
<br/>

<form method="post" action="edit_course.php" style="float:right">
<input type="submit" class="myButton" name="add" value="Edit Course(s)">
</form>


















