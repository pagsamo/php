<?php 

// 1. Connect a database connection

$dbhost = "localhost";
$dbuser = "widget_cms";
$dbpass = "secretpassword";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 if(mysqli_connect_errno()){
 	die("Database connection failed: ".
 		mysqli_connect_error() . 
 		" ( ".mysqli_connect_errno() . ")");
 }



 // 5. close database connection
 