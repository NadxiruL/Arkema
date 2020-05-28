<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db-inventory";

//create connection

$dbcon = mysqli_connect($servername , $username , $password , $dbname);

//check connection

if (!$dbcon) {

	die ("connection failed : " .mysqli_connect_error());	
}

?>
