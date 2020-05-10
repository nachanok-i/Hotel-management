<?php
    session_start();
    require_once "config.php";
    $branchID = $_POST['Branch'];
    $roomID = $_POST['roomID'];
    $sql = "INSERT INTO Additional_seq VALUES (NULL)";
    $sql2 = "";
    $sql3 = "";

    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT id FROM Additional_seq ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $receiptNum = mysqli_fetch_array($result);
        // echo $receiptNum['id'];
        $receiptID = "AS".$receiptNum['id'];
        // echo $receiptID;
        $sql2 = "INSERT INTO AdditionalServiceReceiptRecord(receiptID,roomID,branchID) VALUES ('$receiptID', '$roomID', '$branchID')";
        if ($conn->query($sql2) === TRUE) {
            foreach($_SESSION['service_cart'] as $item)
            {
                $serviceID = $item['item_id'];
                $sql3 = "INSERT INTO AdditionalServiceReceipt(receiptID,serviceID) VALUES ('$receiptID', '$serviceID')";
                if ($conn->query($sql3) === TRUE) {
                    echo '<script>alert("Order success!")</script>';
                    echo '<script>window.location="service.php"</script>';
                }
                else {
                    echo 'error:' . $sql3 . "<br>" . $conn->error;
                    $conn->close();
                }
            }
                          
        }  
            
        else {
            echo 'error:' . $sql2 . "<br>" . $conn->error;
            $conn->close();
        }
    }
    else {
        echo 'error:' . $sql . "<br>" . $conn->error;
        $conn->close();
    }
?>