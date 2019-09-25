<?php


$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";

 	$conn = mysql_connect($hostname, $username, $password);
 
 if (!$conn)
 {
 die('Could not connect: ' . mysql_error());
 }
 mysql_select_db($dbname, $conn);
?>