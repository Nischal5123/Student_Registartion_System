<?php
session_start();
$_SESSION['message']='';
$server= "localhost";
$username="root";
$passwords="";
$database= "accounts";
$mysqli= new mysqli($server,$username,$passwords,$database);
?>

