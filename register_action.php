<?php

// Include config file
require_once "config.php";

$email = $_POST['email'];
$psw = $_POST['psw'];
$pswRep = $_POST['psw-repeat'];
$firstName = $_POST['Firstname'];
$lastName = $_POST['Lastname'];
$citizenID = $_POST['CitizenID'];
$address = $_POST['Address'];
$encryppsw = sha1($psw);

$sql = "INSERT INTO Customer(firstName, lastName, email, password, address, citizenID)
VALUES('$firstName', '$lastName', '$email', '$encryppsw', '$address', '$citizenID')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>