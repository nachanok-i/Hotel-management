<?php

$servername = "34.87.187.203";
$dbUsername = "root";
$dbPassword = "Segmentation3";
$dbName = "hotel";

//Connect to data base
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
	die("Connection Failed: ". mysqli_connect_error());
	echo "<br>";
}

?>