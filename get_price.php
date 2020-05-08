<?php
    // Start the session
    session_start();
    //connect to database
    require_once "config.php";
    $output = "";

    if(isset($_POST['room_type'])){
        
        $sql = "SELECT * FROM Room WHERE branchID = '".$_SESSION['branch']."' AND roomType = '".$_POST["room_type"]."'";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $output .= '<div class="form-group">';
        $output .= '    <div class="mb-3">';
        $output .= '        <label for="price">';
        $output .= '            <b>Price</b>';
        $output .= '        </label>';
        $output .= '        <p><input type="text" name="price" id="price" readonly="readonly" placeholder="'.$row["price"].'" class="form-control form-control-lg "></p>';
        $output .= '    </div>';
        $output .= '</div>';

        // while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        //     $output .= '<div class="col-md-3">';  
        //     $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["price"].'';  
        //     $output .=     '</div>';  
        //     $output .=     '</div>'; 
        // }
        $_SESSION['price'] = $row['price'];
        echo $output;
    }
?>