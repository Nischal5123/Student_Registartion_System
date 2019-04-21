<?php include 'connection.php';?>
<?php

if(isset($_POST['booking'])){

    
        $user=$mysqli->real_escape_string($_SESSION['username']);
        $departure_City=$mysqli->real_escape_string($_POST['departure_City']);
        $departure_Date=$mysqli->real_escape_string($_POST['departure_Date']);
        $destination=$mysqli->real_escape_string($_POST['destination']);
          
                //$_SESSION['username']=$user;
                $_SESSION['departure_City']=$departure_City;
                $_SESSION['departure_Date']=$departure_Date;
                $_SESSION['destination']=$destination;
                

                $sqlbooking="INSERT INTO booking(username,departure_City,departure_Date,destination)"."VALUES('$user','$departure_City','$departure_Date','$destination')";
                    

                    //if the querly is successful

                      if($mysqli->query($sqlbooking)==true)
                      {
                         $_SESSION['message']="Booking Successful!";
                          header("location: mytrip.php");
                      }
                      else{
                          $_SESSION['message']="BOOKING CANNOT BE CONFIRMED!";
                        }
    }
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="new_form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Come Visit our Beautiful Campus</h1>
    <form class="form" action="bookings.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?php  $_SESSION['message']  ?></div>
      <input type="text" placeholder="Current School" name="departure_City" required />
      <input type="text" placeholder="Major of Interest" name="destination" autocomplete="Nepal" required />
      <input type="date" placeholder="University Visit Date" name="departure_Date" required />
     
      <input type="submit" value="CONFIRM MY APPOITMENT" name="booking" class="btn btn-block btn-primary" />
      
    </form>
  </div>
</div>

<?php

if (isset($_POST['departure_City'])) {
    $departure_City = $_POST['departure_City'];
}

if (isset($_POST['departure_Date'])) {
    $departure_Date = $_POST['departure_Date'];
}


if (isset($_POST['destination'])) {
    $destination = $_POST['destination'];
}

?>