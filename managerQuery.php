<?php

require_once "config.php";

// This SQL statement selects ALL from the table 'Customer'
// $sql = "SELECT `firstName`, `lastName`, `email`, `citizenID`, `address`  FROM Customer";
$sql = $_POST['Command'];

if ($result = mysqli_query($conn, $sql)) {
	$resultArray = array();
	$tempArray = array();
}

//Loop through each row in the result set
while ($row = $result->fetch_object()) {
	//Add each row into results array
	$tempArray = $row;
	array_push($resultArray, $tempArray);
}
echo json_encode($resultArray);

mysqli_close($conn);
?>
