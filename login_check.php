<?php 
    // Start the session
    session_start();
    if($_SESSION["email"] == NULL)
    {
        echo '<script>
        alert("You must login first!");
        window.location.href="branchSelect.php";
        </script>';
    }
    else
    {
        $_SESSION['branch'] = $_POST['Branch'];
        echo '<script>
        window.location.href="roomSelectPage.php";
        </script>';
    }
?>