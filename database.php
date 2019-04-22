<?php
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");

mysqli_query($connect,"DROP DATABASE webexpress");

mysqli_query($connect,"CREATE DATABASE webexpress");

mysqli_select_db($connect,"webexpress");

$members="CREATE TABLE members (
id int(4) NOT NULL auto_increment,
username varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',
branch varchar(65) NOT NULL default '',
year int(10) NOT NULL default '1',
PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";

$course="CREATE TABLE course (
id int(4) NOT NULL auto_increment,
name varchar(65) NOT NULL default '',
credit int NOT NULL ,
instructor varchar(65) NOT NULL default '',
CHECK (credit BETWEEN 2 AND 5),
PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";

$regis="CREATE TABLE regis (
id int(4) NOT NULL auto_increment,
uname varchar(65) NOT NULL default '',
cname varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";


$results = mysqli_query($connect,$members) or die (mysqli_error());
$results = mysqli_query($connect,$course) or die (mysqli_error());
$results = mysqli_query($connect,$regis) or die (mysqli_error());
echo "Database successfully created!";


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	