<link rel="stylesheet" href="form.css">
<?php include 'connection.php'; ?>
<body style="background:url('https://www.usnews.com/img/college-photo_35695.jpg'); background-attachment:center; background-repeat: no-repeat;color:#0ff4ff no-repeat center top ;">
        
        <div class="body content">
        <center>
	<div class="welcome">
		<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
        <br>
        <br>
        <br>
		<span class="user"><img src="<?= $_SESSION['avatar'] ?>" height=300px width=300px> </span><br /><p  style="font-size: 2.7em;color:#000000;font-family:verdana">One step closer to being a Trojan!</p> 
		<span class="user" style="font-size: 1.7em; color:#000000;font-family:verdana"><?= $_SESSION['username'] ?></span> 


		<?php 
        $sql='SELECT id,username,avatar FROM users';
        $result= $mysqli->query($sql);//result object

        ?>
        <br>
        <br>
        <br>
        
        
        <div id="registered">
        	<form action="login.php">   
    <input type="submit" value="LOGIN TO YOUR ACCOUNT" class="btn btn-block btn-primary"/>
</form><br></br></button></b>
        </center>
        <a href="https://www.troy.edu/">
<p align="right" style="font-size: 1em; color:#000000;">VISIT OUR OFFICIAL WEBSITE</p>
<img border="0" alt="W3Schools" src="https://res.cloudinary.com/highereducation/image/upload/c_fill,f_auto,fl_lossy,q_auto/v1/TheBestSchools.org/troy-university.jpg" width="100" height="100" align="right"></a>	
</p>
 </body>