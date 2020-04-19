<?php
    //get value from index.php
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //prevent mysql injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);
    
    //connect to database
    require_once "config.php";

    $result = mysql_query("SELECT * FROM Customer WHERE email = '$email' AND password = '$password'")
                or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['email'] == $email && $row['password'] == $password) 
    {
        echo "Login success!!! Welcome".$row['email'];
    }
    else
    {
        echo "Failed to login!";
    }

?>