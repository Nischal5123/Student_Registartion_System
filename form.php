<?php include 'connection.php';?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
   //TWO PASSWORDS EQUAL

    if($_POST['password']==$_POST['confirmpassword']){

        $user=$mysqli->real_escape_string($_POST['username']);
        $email=$mysqli->real_escape_string($_POST['email']);
        $password=md5($_POST['password']);
        $avatar_path=$mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

        //make sure file type is image
      

        if(preg_match("!image!",$_FILES['avatar']['type'])){
            //copy the image to images sfolder

          

            if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
                $_SESSION['username']=$user;
                $_SESSION['avatar']=$avatar_path;

                $sql="INSERT INTO users(  username,email,password,avatar)"."VALUES('$user','$email','$password','$avatar_path')";
                    

                    //if the querly is successful

                      if($mysqli->query($sql)==true){
                         $_SESSION['message']="Registration Successful!";
                          header("location: welcome.php");
                      }
                      else{
                          $_SESSION['message']="USER CANNOT BE ADDED!";
                        }
            }
            else{

              $_SESSION['message']="FAILED TO CREATE AN ACCOUNT";
                echo $_SESSION['message'];
            }
        
        }
        else{
          $_SESSION['message']="ONLY UPLOAD JPEG!";
            echo $_SESSION['message'];
        }
    }    
    else{
      $_SESSION['message']="PASSWORD DONOT MATCH!";
      echo $_SESSION['message'];
    }

}
else{
      $_SESSION['message']="1st loop not entered!";
    }
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?php  $_SESSION['message']  ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Add a Profile Picture: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
       <p> Already a user?<a href="login.php" class="button">Please Login</p>
    </form>
  </div>
</div>
