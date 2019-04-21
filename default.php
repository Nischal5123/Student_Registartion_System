<?php
session_start();
session_destroy();
session_start();
$_SESSION['authuser']=1;

if(isset($_POST['save_btn']))
    {
        //write some of your code here, if necessary
        
     
	 
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
$uname= $_GET['myusername'];
$upass= $_GET['mypassword'];

$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;

mysqli_select_db ($connect,"2008b4a5723p");
$query="SELECT * FROM members WHERE username='$uname' and password='$upass'";

$results=mysqli_query($connect,$query) or die(mysqli_error());

if($row = mysqli_fetch_array($results))
{
echo'<script> window.location="SchoolDB/result.php"; </script> ';
}
else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
  }
?>

<table  width="300" border="0" align="center" cellpadding="0" cellspacing="1" background-color="#ffffff">
<tr>
<form name="form1" method="get" action="result.php" onsubmit="return validate(this);">
<td>
<table  height="300%" width="100%" border="0" cellpadding="20" cellspacing="1" bgcolor="#000000">
<tr>
<td colspan="6"bgcolor="#ffffff" ><strong><center><h2 >Student Login</h2></center></strong></td>
</tr>
<tr>
<td></td>
<td><center><input name="myusername" placeholder="USERNAME" type="text" id="myusername"></center></td>
</tr>
<tr>
<td></td>
<center><td><center><input name="mypassword" placeholder="PASSWORD" type="password" id="mypassword"></center></td></center>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" class="myButton" name="Submit" value="LOGIN"></td>
</form>
<form name="form2" method="post" action="newreg.php">
<td><input type="submit" class="myButton" name="newreg" value="SIGN UP"></td>
</form>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
<form name="form1" method="post" action="admin_page.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Admin Login">
</form>

<html>
<head>
<script type="text/javascript">
function validate(form){
 var userName = form.myusername.value;
 var password = form.mypassword.value;

 if (userName.length === 0) {
  alert("You must enter a username.");
  return false;
 }

 if (password.length === 0) {
  alert("You must enter a password.");
  return false;
 }

 return true;
}
</script>
<link rel="stylesheet" type="text/css" href="newstyle.css" /> 
</head>
<body>
<div id="div1"></div>
<div >
  <br>
  <br>
  <p></p>
  <form action="form.php">
    <input type="submit" value="PROSPECTIVE STUDENTS:Get a Tour" class="myButton"/>
</form></button>

</div>


</body>
</html>	
