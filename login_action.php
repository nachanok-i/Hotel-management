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
    $password = sha1($password);

    $query = "SELECT * FROM `Customer` WHERE email LIKE '%$email%'
    AND password LIKE '%$password%'";
    $objQuery = mysqli_query($conn,$query) or die(mysqli_error());
    $objResult = mysqli_fetch_array($objQuery ,MYSQLI_ASSOC);


    if(!$objResult)
    {
    echo '<script>
    alert("Invalid password or email");
    window.location.href="register.php";
    </script>';
    }
    else
    {
        echo '<script>
        alert("Login Successful");
        window.location.href="home.php";
        </script>';
        $_SESSION["email"] = $objResult["email"];
        // $_SESSION["Status"] = $objResult["Status"];
        session_write_close();
    }
    mysqli_close($conn);
?>
