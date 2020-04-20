<?php
    // Start the session
    session_start();
    
    //connect to database
    require_once "config.php";

    //get value from index.php
    $email = $_POST['email'];
    $password = $_POST['password'];

    //prevent mysql injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string ($conn,$_REQUEST['email']);
    $password = mysqli_real_escape_string($conn,$_REQUEST['password']);
    
    //connect to database
    require_once "config.php";

    $query = "SELECT * FROM `Customer` WHERE email = '$email'
    AND password = '".sha1($password)."'";
    $objQuery = mysqli_query($conn,$query) or die(mysqli_error());
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    if(!$objResult)
    {
        echo "Username and Password Incorrect!";
    }
    else
    {
        echo "Login success!";
        $_SESSION["email"] = $objResult["email"];
        header('Location: home.php');
        // $_SESSION["Status"] = $objResult["Status"];
        session_write_close();
    }
    mysqli_close($conn);
?>
