<?php 
    // Start the session
    session_start();
    if($_SESSION["email"] == NULL)
    {
        echo '<script>
        alert("You must login first!");
        window.location.href="roomSelectPage.php";
        </script>';
    }
    else
    {
        $_SESSION['Branch'] = $_POST['Branch'];
        echo '<script>
        window.location.href="booking.php";
        </script>';
    }
?>