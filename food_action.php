<?php
    session_start();
    require_once "config.php";
    $branchID = $_POST['Branch'];
    $roomID = $_POST['roomID'];
    $sql = "INSERT INTO Food_seq VALUES (NULL)";
    $sql2 = "";
    $sql3 = "";

    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT id FROM Food_seq ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $receiptNum = mysqli_fetch_array($result);
        // echo $receiptNum['id'];
        $receiptID = "FS".$receiptNum['id'];
        // echo $receiptID;
        $sql2 = "INSERT INTO FoodReceiptRecord(receiptID,roomID,branchID) VALUES ('$receiptID', '$roomID', '$branchID')";
        if ($conn->query($sql2) === TRUE) {
            foreach($_SESSION['shopping_cart'] as $item)
            {
                $foodID = $item['item_id'];
                $quantity = (int)$item['item_quantity'];
                $sql3 = "INSERT INTO FoodReceipt(receiptID,foodID,qty) VALUES ('$receiptID', '$foodID', $quantity )";
                if ($conn->query($sql3) === TRUE) {
                    echo '<script>alert("Order success!")</script>';
                    echo '<script>window.location="food.php"</script>';
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