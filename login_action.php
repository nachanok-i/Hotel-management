<?php
session_start();
require_once "config.php";

if (isset($_POST['submit'])) {
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    if (empty($email))
        {
            echo '<script>
            alert("please fill your email");
            window.location.href="index.php";
            </script>';
        }
    if(empty($password)){
        echo '<script>
        alert("please fill your password");
        window.location.href="index.php";
        </script>';
    }
    if ( ( !empty($email) ) && (!empty($password)) )
        {
        $query = "SELECT * FROM `Customer` WHERE email like '%$email%'
            AND password = '".sha1($password)."'";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) == 1){
            $_SESSION['email'] =$email;
            echo '<script>
            alert("Login Successful");
            window.location.href="index.php";
            </script>';
        }
        else{
            echo '<script>
            alert("wrong password or email");
            window.location.href="index.php";
            </script>';
        }
            
        }
    }

?>