<?php
    // Start the session
    session_start();
    //connect to database
    require_once "config.php";
    $output = "";

    if(isset($_POST['room_type'])){
        
        $sql = "SELECT * FROM Room WHERE branchID = '".$_SESSION['branch']."' AND roomType = '".$_POST["room_type"]."'";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $output =  $row['price'];
        $_SESSION['price'] = $row['price'];
        echo $output;
    }
?>