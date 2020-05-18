    <?php
    // Include config file
    require_once "config.php";
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName']; 
    $psw = $_POST['psw'];
    $pswRep = $_POST['psw-repeat'];
    $citizenID = $_POST['CitizenID'];
    $city = $_POST['inputCity'];
    $street = $_POST['street'];
    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];
    $country = $_POST['country'];
    $email = $_POST['email'];

    if (isset($_POST['submit']) && (!ctype_space($firstName)) && (!ctype_space($lastName)) && (!ctype_space($psw)) && (!ctype_space($pswRep)) && (!ctype_space($city)) && (!ctype_space($state)) && (!ctype_space($country)) && (!ctype_space($email)) ) {
        if (empty($_POST['state'])) {
            $state = '""';
        }
        $encryppsw = sha1($psw);
        $sql_citizenID = mysqli_query($conn, "SELECT citizenID FROM Customer WHERE citizenID='$citizenID'");
        $sql_email = mysqli_query($conn, "SELECT email FROM Customer WHERE email like '%$email%'");
        $result = mysqli_num_rows($sql_citizenID);
        $result_2 = mysqli_num_rows($sql_email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>
        alert("invalid email format");
        window.location.href="register.php";
        </script>';
        } else {
            if (($result > 0) && ($result_2 > 0)) {
                echo '<script>
                alert("CitizenID and Email already used");
                window.location.href="register.php";
                </script>';
            } else {
                if ($result > 0) {
                    echo '<script>
            alert("CitizenID already used");
            window.location.href="register.php";
            </script>';
                } else {
                    if ($result_2 > 0) {
                        $conn->close();
                        echo '<script>
                    alert("email already used");
                    window.location.href="register.php";
                    </script>';
                    } else {
                        if (($psw == $pswRep) && ($result_2 == 0) && ($result == 0)) {
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
                                    $fileNameNew = $fileName;
                                    $fileDestination = 'Asset/Customer/'.$fileNameNew;
                                    move_uploaded_file($fileTmpName, $fileDestination);
                                    $sql = "INSERT INTO Customer(firstName, lastName, email,password, citizenID, profileImage, street,city,state,zipCode,country)
                                    VALUES('$firstName', '$lastName',' $email','$encryppsw','$citizenID','$fileName','$street','$city','$state','$zipCode','$country' )";

                                    if ($conn->query($sql) === TRUE) {
                                        $conn->close();
                                        echo '<script>
                                        alert("Register successful=");
                                        window.location.href="index.php";
                                        </script>';
                                    } else {
                                        echo 'error:' . $sql . "<br>" . $conn->error;
                                        $conn->close();
                                    }
                                } else {
                                    $conn->close();
                                    echo '<script>
                    alert("There something error in your file");
                    window.location.href="register.php";
                    </script>';
                                }
                            } else {
                                $conn->close();
                                echo '<script>
                alert("Your file type is not macth the requirement");
                window.location.href="register.php";
                </script>';
                            }
                        } else {
                            $conn->close();
                            echo '<script>
    alert("There was something wrong with you form");
    window.location.href="register.php";
        </script>';
                        }
                    }
                }
            }
        }
    } else {
        echo '<script>
    alert("There is something wrong with register form");
    window.location.href="register.php";
        </script>';
    }
    ?>




