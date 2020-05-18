<?php
session_start();
require_once "config.php";
if ((isset($_SESSION['service_cart']) != NULL)  && (isset($_POST['sumbit']) != NULL) && (!empty($_SESSION['service_cart']))) {
    $branchID = $_POST['Branch'];
    $roomID = $_POST['roomID'];

    $sql = "INSERT INTO Additional_seq VALUES (NULL)";
    $sql2 = "";
    $sql3 = "";
    $checkRoom = "SELECT roomID FROM Room WHERE roomID ='$roomID' AND branchID ='$branchID'";
    $sql_checkRoom = mysqli_query($conn, $checkRoom);
    $result_checkRoom = mysqli_num_rows($sql_checkRoom);
    if ($result_checkRoom == 0) {
        echo '<script>
        alert("Room does not exist");
        window.location.href="service.php";
        </script>';
    } else {
        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT id FROM Additional_seq ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $receiptNum = mysqli_fetch_array($result);
            // echo $receiptNum['id'];
            $receiptID = "AS" . $receiptNum['id'];
            // echo $receiptID;
            $sql2 = "INSERT INTO AdditionalServiceReceiptRecord(receiptID,roomID,branchID) VALUES ('$receiptID', '$roomID', '$branchID')";
            if ($conn->query($sql2) === TRUE) {
                foreach ($_SESSION['service_cart'] as $item) {
                    $serviceID = $item['item_id'];
                    $sql3 = "INSERT INTO AdditionalServiceReceipt(receiptID,serviceID) VALUES ('$receiptID', '$serviceID')";
                    if ($conn->query($sql3) === TRUE) {
                        unset($_SESSION["service_cart"]);
                        echo '<script>alert("Order successful!")</script>';
                        echo '<script>window.location="service.php"</script>';
                    } else {
                        unset($_SESSION["service_cart"]);
                        echo 'error:' . $sql3 . "<br>" . $conn->error;
                        $conn->close();
                    }
                }
            } else {
                unset($_SESSION["service_cart"]);
                echo 'error:' . $sql2 . "<br>" . $conn->error;
                $conn->close();
            }
        } else {
            unset($_SESSION["service_cart"]);
            echo 'error:' . $sql . "<br>" . $conn->error;
            $conn->close();
        }
    }
} else {
    unset($_SESSION["service_cart"]);
    echo '<script>
    alert("Please select at least one service!");
    window.location.href="service.php";
    </script>';
}
