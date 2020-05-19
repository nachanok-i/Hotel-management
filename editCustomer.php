<?php
  require_once "config.php";


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $citizenID = $_POST['citizenID'];
    $email = $_POST['email'];


    $sql = "UPDATE Customer
    SET firstName = '$firstname', lastName = '$lastname', citizenID = '$citizenID'
    where email = '$email'";


    if ($conn->query($sql) == TRUE) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>