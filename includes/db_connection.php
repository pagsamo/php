<?php

define("DB_SERVER","localhost");
define("DB_USER","widget_cms");
define("DB_PASS","secretpassword");
define("DB_NAME","widget_corp");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()){
	die("Database connection failed: ".
		mysqli_connect_err().
		" (" . mysqli_connect_errno(). ")"

		);
}