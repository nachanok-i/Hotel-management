    <?php

// Include config file
require_once "config.php";

// Include config file
require_once "config.php";

$email = $_POST['email'];
$psw = $_POST['psw'];
$pswRep = $_POST['psw-repeat'];
$firstName = $_POST['Firstname'];
$lastName = $_POST['Lastname'];
$citizenID = $_POST['CitizenID'];
$address = $_POST['Address'];
$checkBox = $_POST["remember"];
$encryppsw = sha1($psw);
    if( ($psw == $pswRep) && (isset($checkBox)) )
        {
        $sql = "INSERT INTO Customer(firstName, lastName, email, password, address, citizenID)
        VALUES('$firstName', '$lastName', '$email', '$encryppsw', '$address', '$citizenID')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        echo '<script>
        alert("Register Successfully");
        window.location.href="index.php";
        </script>';
        }
    else
        {
        echo '<script>
        alert("Fail to Register because there are some invalid in form");
        window.location.href="register.php";
        </script>';
        }
?>