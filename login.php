
<?php include 'connection.php';?>
<?php

if(isset($_POST['login_user'])){
  $user=mysqli_real_escape_string($mysqli,$_POST['username' ]);
  $password=mysqli_real_escape_string($mysqli,$_POST['password']);
  
  if (empty($user))
  {
    echo"Username is required";
  }

  if (empty($password))
  {
    echo"Password is required";
  }

  $password=md5($password); //hashing becasue databse stores hashed password

  $query="SELECT * FROM users WHERE username='$user' AND password='$password'";
  $results=mysqli_query($mysqli,$query);

//echo "working till here";
  if(mysqli_num_rows($results)) {
    //echo "working till here";
    $_SESSION['username']=$user;
    $_SESSION['success']="Logged in successfully";

    header("location:mytrip.php");
  }
  else{
    echo"Wrong Username or Password.Try Again";
  }

}
?>  

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Login to your Account</h1>
    <form class="form" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?php  $_SESSION['message']  ?></div>
      <input type="text" placeholder="User Name" name="username" required /> 
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="submit" value="Login" name="login_user" class="btn btn-block btn-primary" />
      <p> Not a user?<a href="form.php"><br>Register Here!!</b></a></p>
    </form>
  </div>
</div>