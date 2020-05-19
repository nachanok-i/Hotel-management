<?php
  require_once "config.php";
    
    $sql = $_POST['Command'];

    if ($conn->query($sql) == TRUE) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
