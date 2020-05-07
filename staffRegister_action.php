
<?php
require_once "config.php";
if (isset($_POST['submit'])) {

    $file = $_FILES['yourPicture'];
    $fileName = $_FILES['yourPicture']['name'];
    $fileTmpName = $_FILES['yourPicture']['tmp_name'];
    $fileSize = $_FILES['yourPicture']['size'];
    $fileError = $_FILES['yourPicture']['error'];
    $fileType = $_FILES['yourPicture']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $alllowed = array('jpg', 'jpeg', 'png', 'pdf');
    if (in_array($fileActualExt, $alllowed)) {
        if ($fileError === 0) {
            $fileNameNew = $fileName . "." .
                $fileActualExt;
            $fileDestination = './staffPicture/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            echo "upload scuccess";
        } else {
            echo '<script>
            alert("There something error in your file");
            window.location.href="staffRegister.php";
            </script>';
        }
    } else {
        echo '<script>
        alert("Your file type is not macth the requirement");
        window.location.href="staffRegister.php";
        </script>';
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $requireSalary = $_POST['requiredSalary'];
    $city = $_POST['inputCity'];
    $street = $_POST['street'];
    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];
    $country = $_POST['country'];
    $nationality = $_POST['nationality'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $startDate = $_POST['startDate'];
    $branch = $_POST['Branch'];
    $gender = $_POST['gender'];
    $picture =  $fileName;
    $sql = "INSERT INTO EmployeeApplication(id,firstName, lastName, email, requiredSalary, startDate, street,city,state,zipCode,country,nationality,phone,imgURL,gender,position,branchID)  
            VALUES('APP0000004','$firstName', '$lastName', '$email', '$requireSalary','$startDate', '$street', '$city','$state','$zipCode','$country','$nationality','$phone','$picture','$gender','$position','$branch')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo '<script>
        alert("Register Successfully");
        window.location.href="index.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
    }
} else {
    $conn->close();
    echo '<script>
    alert("Fail to Register because there are some invalid in form");
    window.location.href="staffRegister.php";
        </script>';
}
