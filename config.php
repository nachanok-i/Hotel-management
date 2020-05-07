<?php

$servername = "34.87.187.203";
$dbUsername = "root";
$dbPassword = "Segmentation3";
$dbName = "hotel";

//Connect to data base
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>