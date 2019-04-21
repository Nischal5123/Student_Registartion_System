<link rel="stylesheet" href="form.css">
<?php include 'connection.php'; ?>
<body style="background:url('https://pngimage.net/wp-content/uploads/2018/06/world-map-wallpaper-png-2.png'); color:#0ff4ff no-repeat center top ;">
        
        <div class="body content">
        <center>
	<div class="welcome">
		<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
		<span class="user"><img src="<?= $_SESSION['avatar'] ?>" height=300px width=300px> </span><br /><p  style="font-size: 2.7em;color:#000000;font-family:verdana">PACK YOUR BAGS!</p> 
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
        <a href="https://www.google.com/destination?q=paris&rlz=1C1CHBF_enUS831US831&site=search&output=search&dest_mid=/m/05qtj&sa=X&ved=2ahUKEwjQ7L3z0cThAhUPiqwKHW-JBGcQ6tEBKAQwAHoECAoQBw#dest_mid=/m/05qtj&tcfs=EhwaGAoKMjAxOS0wNC0yNhIKMjAxOS0wNC0zMCAB">
<p align="right" style="font-size: 1em; color:#000000;">OUR DISTINATION PICK FOR YOU</p>
<img border="0" alt="W3Schools" src="https://lh6.googleusercontent.com/-lDx4IJQ9Yhk/V-9rJCf3LBI/AAAAAAAAEPY/Kqq2FWKYMGMZICHueo69mu3ChllxCV2IQCLIBGAYYCw/w361-h238-k-no/" width="100" height="100" align="right"></a>	
</p>
 </body>