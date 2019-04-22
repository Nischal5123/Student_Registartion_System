<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");
mysqli_select_db($connect,"webexpress");

$cname=$_POST['course'];
$name=$_POST['name'];
//VERIFICATIONS----------------------------------------------------------------------------------

$q="SELECT count(cname) FROM regis WHERE uname='$name'";                 
$r=mysqli_query($connect,$q) or die(mysqli_error($connect));
$reg=mysqli_fetch_assoc($r);
foreach($reg as $value)
{
if($value >3)
{
echo"<a href='new_course_reg.php'>Back</a></br>";
echo "ERRROR IN REGISTRATION(YOU HAVE ALREADY SELECTED 4 COURSES)";
exit();
}
}

$q1="SELECT count(cname) FROM regis WHERE cname='$cname'";
$r1=mysqli_query($connect,$q1) or die(mysqli_error());    
$reg1=mysqli_fetch_assoc($r1);
foreach($reg1 as $value1)
{
if($value1 >15)
{
printf("ERRROR IN REGISTRATION(MAXIMUM STUDENTS IN A COURSE REACHED)");
exit();
}
}

$q2="SELECT cname FROM regis WHERE cname='$cname' AND uname='$name'";                  
$r2=mysqli_query($connect,$q2) or die(mysqli_error($connect));
$reg2=mysqli_fetch_assoc($r2);
if(mysqli_num_rows($r2) != 0)
{echo "<a href='new_course_reg.php'>Back</a><br/>COURSE ALREADY REGISTERED BY STUDENT $name";
exit();
}



$query="SELECT name FROM course WHERE name='$cname'";              //for inserting the record
$results=mysqli_query($connect,$query) or die(mysqli_error($connect));
if($rows=mysqli_fetch_assoc($results)) 
{
foreach($rows as $value) 
echo $value; 

echo "<br/>Above course has been added sucessfully";
echo"<br/>";
echo"<a href='new_course_reg.php'>Back</a></br>";
$insert = "INSERT INTO regis(uname,cname)
values('$name','$value')";
$results=mysqli_query($connect,$insert) or die(mysqli_error($connect));
}
else
{
echo '<div>
<p>COURSE DOESNOT EXIT </p>
<form action="new_course_reg.php">   
    <input type="submit" value="GO BACK TO REGISTRATION PAGE" />
</form><br></br></button></b>
<br>
<br>';;
exit();
}

$sum=0;
$q2="SELECT count(cname) FROM regis WHERE uname='$name'";                 
$reg2=mysqli_fetch_assoc($r2);
foreach($reg2 as $value2)
{   
    if($value2 ==4)														 
    {
	
    $q3="SELECT cname FROM regis WHERE uname='$name'";                 
    $r3=mysqli_query($connect,$q3) or die(mysqli_error($connect));
    while($reg3=mysqli_fetch_assoc($r3))
	{
    foreach($reg3 as $value3)
      {
	  	$q4="SELECT credit FROM course WHERE name='$value3'";                 
        $r4=mysqli_query($connect,$q4) or die(mysqli_error($connect));
        $reg4=mysqli_fetch_assoc($r4); 
         foreach($reg4 as $value4)
         {  
         $sum=$sum + $value4;		 
	     }                             
	   }  
	}  
         		    if($sum < 9)										
					{
					printf("REGISTRATION ERROR(TOTAL CREDIT IS LESS THAN 9)");
					exit();
					}  
 }
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


