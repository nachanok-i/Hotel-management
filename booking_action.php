<?php
    // Start the session
    session_start();
    // Include config file
    require_once "config.php";

    // echo "in\n";
    // echo "<br>";
    // echo $_POST['Room_Type'];
    // echo "<br>";
    echo $_SESSION['price'];
    echo "<br>";
    // echo $_POST['firstName'];
    // echo "<br>";
    // echo $_POST['lastName'];
    // echo "<br>";
    // echo $_POST['From'];
    // echo "<br>";
    // echo $_POST['To'];
    // echo "<br>";
    // echo $_POST['adult'];
    // echo "<br>";
    // echo $_POST['child'];
    // echo "<br>";
    // echo $_POST['payment_method'];
    // echo "<br>";
    // echo $_POST['cardNumber'];
    // echo "<br>";
    // echo $_POST['additional'];
    // echo "<br>";
    echo $_SESSION['email'];
    echo $_SESSION['branch'];
    echo "<br>";
    echo "'".$_POST['promotion']."'";
    if ($_POST['adult'] < 1)
    {
        echo '<script>
        alert("Require at least 1 adult");
        window.location.href="booking.php";
        </script>';
    }
    if ($_POST['From'] == NULL)
    {
        echo '<script>
        alert("Please select arrive date");
        window.location.href="booking.php";
        </script>';
    }
    //get citizenID
    $query = "SELECT citizenID FROM Customer WHERE email = '".$_SESSION['email']."'";
    $objQuery = mysqli_query($conn,$query) or die(mysqli_error());
    $objResult = mysqli_fetch_array($objQuery ,MYSQLI_ASSOC);
    $citizenID = $objResult["citizenID"];
    //get roomID
    $query = "SELECT roomID FROM Room WHERE branchID = '".$_SESSION['branch']."' 
    AND roomType = '".$_POST['Room_Type']."' AND status = '0'";
    $objQuery = mysqli_query($conn,$query) or die(mysqli_error());
    $objResult = mysqli_fetch_array($objQuery ,MYSQLI_ASSOC);
    $roomID = $objResult["roomID"];
    //get promotion

    $sql = "INSERT INTO Booking_Detail(guestFirstName,guestLastName,checkIn,checkOut,adult,child,branchID,price,paymentMethod,cardnumber,additionalNote,roomID,citizenID)
    VALUES('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['From']."', '".$_POST['To']."', '".$_POST['adult']."', '".$_POST['child']."', 
    '".$_SESSION['branch']."', '".$_SESSION['price']."', '".$_POST['payment_method']."', '".$_POST['cardNumber']."', '".$_POST['additional']."', '$roomID', '$citizenID')";
    $sql2 = "UPDATE Room SET status = 1 WHERE roomID = '$roomID' AND branchID = '".$_SESSION['branch']."'";
    if ($conn->query($sql) == TRUE && $conn->query($sql2) == TRUE) {
        $conn->close();
        echo '<script>
        alert("Booking success");
        window.location.href="index.php";
        </script>';
    } else {
        echo 'error:' . $sql . "<br>" . $conn->error;
        $conn->close();
    }

?>