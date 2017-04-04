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

// Perform database query
$menu_name = "Edit me";
$position = 4;
$visible = 1;


$query2 = "INSERT INTO subjects (";
$query2 .= " menu_name, position, visible";
$query2 .= ") VALUES (";
$query2 .= "'{$menu_name}', {$position}, {$visible}";
$query2 .= ")";



$query = "SELECT * FROM subjects";
$result = mysqli_query($connection, $query2);
if(!$result)
{
	die("Database query failed.");
}


// 3 return data if any
// while($row = mysqli_fetch_row($result))
// {
// 	var_dump($row);
// 	echo "<hr/>";
// }

// 4 release the data
// mysqli_free_result($result);

 // 5. close database connection
 mysqli_close($connection);