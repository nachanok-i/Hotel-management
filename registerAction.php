<?php 
session_start();
require_once "config.php";

if (isset($_POST['submit'])){
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $psw = mysqli_real_escape_string($conn, $_POST['psw']);
        $pswRep = mysqli_real_escape_string($conn, $_POST['psw-repeat']);
        $citizenID = mysqli_real_escape_string($conn, $_POST['CitizenID']);
        $city = mysqli_real_escape_string($conn, $_POST['inputCity']);
        $street = mysqli_real_escape_string($conn, $_POST['street']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $zipCode = mysqli_real_escape_string($conn, $_POST['zipCode']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        if (empty($firstName)){

        }
        if (empty($lastName)){

        }
        if (empty($psw)){

        }
        if (empty($pswRep)){

        }
        if (empty($citizenID)){

        }
        if (empty($city)){

        }
        if (empty($street)){

        }
        if (empty($state)){

        }
        if (empty($zipCode)){

        }
        if (empty($country)){

        }
        if (empty($email)){

        }

}   
