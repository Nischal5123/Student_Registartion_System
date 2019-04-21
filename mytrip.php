
<?php include 'connection.php';?>
<link rel="stylesheet" href="form.css">
<body  style="background:url('https://images.pexels.com/photos/8394/flight-sky-clouds-fly.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') #0f2439 no-repeat center ;">
<div class="body content">
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
        <b><p  style="font-size: 2.7em; ">Welcome </p> <span class="user"  style="font-size: 3.7em;color: #ffffff;"><?= $_SESSION['username'] ?></span><br />
        <br>
        <br>
        <!--SCROOLING TEXT-->
        <style>
.example1 {
 height: 50px;  
 overflow: hidden;
 position: relative;
}
.example1 h3 {
 font-size: 1em;
 color: limegreen;
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);    
 transform:translateX(100%);
 /* Apply animation to this element */  
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%);       
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }
}
</style>

<!-- HTML -->   
<div class="example1">
<h3>YOUR CONFIRMED BOOKINGS </h3>
</div>
        <br />
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;

}
tr{
    color: #000000;
}
th, td {
  padding: 15px;
  text-align: left;
}
table.table1 tr:nth-child(even) {
  background-color: #eee;
}
table.table1 tr:nth-child(odd) {
 background-color: #fff;
}
table.table1 th {
  background-color: black;
  color: white;
}
</style>
        <table class="table1" border= "1">
            <tr>
                <th>Departure City</th>
                <th>Departure Date</th> 
                <th>Destination</th>
            </tr>
                



<?php 
$username=$_SESSION['username'];
$stmt = "SELECT* FROM booking WHERE username='$username'";
      
    $result= $mysqli->query($stmt);//result object
       // $storeArray= Array();
        while ($row = mysqli_fetch_array($result)) {
        echo'<tr><td>';
        echo $row['departure_City']; 
        echo "</td><td>";
        echo $row['departure_Date']; 
        echo "</td><td>";
        echo $row['destination']; 
        echo "</td></tr>";
}
echo '</table>';
echo '<div id="registered">
<form action="bookings.php">   
    <input type="submit" value="MAKE MY TRIP" class="btn btn-block btn-primary"/>
</form><br></br></button></b>
<br>
<br>';

echo'<form action="logout.php">
    <input type="submit" value="LOGOUT" class="btn btn-block btn-primary"/>
</form><br></br></button>';
        ?>

</body>
        
    


        	
		