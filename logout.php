<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["message"]);
unset($_SESSION["departure_City"]);
unset($_SESSION["departure_Date"]);
unset($_SESSION["destination"]);
header("Location:login.php");// for prospective students
?>