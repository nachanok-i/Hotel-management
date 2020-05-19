<?php
  require_once "config.php";


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $branchID = $_POST['branchID'];
    $salary = $_POST['salary'];
    $position = $_POST['position'];
    $staffID = $_POST['staffID'];


    $sql = "UPDATE Employee SET firstName = '$firstname', lastName = '$lastname', branchID = '$branchID', position = '$position', salary = '$salary' where staffID = '$staffID'";


    if ($conn->query($sql) == TRUE) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
