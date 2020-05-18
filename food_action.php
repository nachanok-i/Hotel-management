<?php
session_start();
require_once "config.php";
if ( (isset($_SESSION['shopping_cart']) != NULL)  && (isset($_POST['sumbit'])!=NULL) && (!empty($_SESSION['shopping_cart']))) {
    $branchID = $_POST['Branch'];
    $roomID = $_POST['roomID'];
    $sql = "INSERT INTO Food_seq VALUES (NULL)";

    $sql2 = "";
    $sql3 = "";
    $checkRoom1 = "SELECT roomID FROM Room WHERE roomID ='$roomID' AND branchID ='$branchID'";
    $sql_checkRoom1 = mysqli_query($conn, $checkRoom1);
    $result_checkRoom1 = mysqli_num_rows($sql_checkRoom1);
    print_r($result_checkRoom1);



    if ($result_checkRoom1 == 0) {
        echo '<script>
            alert("Room does not exist");   
            window.location.href="food.php";
            </script>';
    } else {
        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT id FROM Food_seq ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $receiptNum = mysqli_fetch_array($result);
            // echo $receiptNum['id'];
            $receiptID = "FS" . $receiptNum['id'];
            // echo $receiptID;
            $sql2 = "INSERT INTO FoodReceiptRecord(receiptID,roomID,branchID) VALUES ('$receiptID', '$roomID', '$branchID')";
            if ($conn->query($sql2) === TRUE) {
                foreach ($_SESSION['shopping_cart'] as $item) {
                    $foodID = $item['item_id'];
                    $quantity = (int) $item['item_quantity'];
                    $sql3 = "INSERT INTO FoodReceipt(receiptID,foodID,qty) VALUES ('$receiptID', '$foodID', $quantity )";
                    if ($conn->query($sql3) === TRUE) {
                        unset($_SESSION["shopping_cart"]);
                        echo '<script>alert("Order success!")</script>';
                        echo '<script>window.location="food.php"</script>';
                    } else {
                        unset($_SESSION["shopping_cart"]);
                        echo 'error:' . $sql3 . "<br>" . $conn->error;
                        $conn->close();
                    }
                }
            } else {
                unset($_SESSION["shopping_cart"]);
                echo 'error:' . $sql2 . "<br>" . $conn->error;
                $conn->close();
            }
        } else {
            unset($_SESSION["shopping_cart"]);
            echo 'error:' . $sql . "<br>" . $conn->error;
            $conn->close();
        }
    }
} else {
    unset($_SESSION["shopping_cart"]);
    echo '<script>
    alert("Please select at least one menu!");
    window.location.href="food.php";
    </script>';
}
