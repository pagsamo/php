<?php


$dbhost = "localhost";
$dbuser = "widget_cms";
$dbpass = "secretpassword";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
	die("Database connection failed: ".
		mysqli_connect_err().
		" (" . mysqli_connect_errno(). ")"

		);
}