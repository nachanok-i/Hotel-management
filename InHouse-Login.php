<?php
  require_once "config.php";

  $myusername = $_POST['staffID'];
  $mypassword = $_POST['password'];
      
  // $sql = "SELECT id FROM InHouseAppAccount WHERE staffID = '$myusername' and passcode = '$mypassword'";
  
  $password = sha1($mypassword);
  $sql = "SELECT id FROM InHouseAppAccount WHERE id = '$myusername' and password = '$password'";
  
  if ($conn->query($sql) == TRUE) {
        // echo "New record updated successfully";

  	$result = $conn->query($sql);
  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  	$count = mysqli_num_rows($result);
  	echo "$count";

	if($count == 1) {
         echo "Login successfully";
         // header("location: welcome.php");
      } else {
         $error = "Your Login Name or Password is invalid";
      }

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
      

?>