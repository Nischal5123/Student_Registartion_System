<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

?>
<html>
<head>
<title>NEW COURSE REGISTRATION</title>
</head>
<body>


<h2>NEW COURSE REGISTRATION</h2>


<form method="post" action="insert_course.php">
 
Course ID :<input type="text" name="name"><br/>
Credit :<input type="text" name="credit"><br/>
Instructor :<input type="text" name="instructor"><br/>

<input type="submit" class="myButton" name="submit" value="Register">

</form>
<br>
<br>
<br>
<form action="result1.php">
    <input type="submit" value="BACK TO ADMIN PAGE" class="myButton"/>
</form><br></br></button>
<footer>
            <a href="default.php" style="color: white;">Back to home</a>
        
        </footer>
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