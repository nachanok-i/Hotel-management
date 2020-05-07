<?php
  // Start the session
  session_start();
  if ($_SESSION["email"] == NULL)
    {
      echo '<script>
    window.location.href="index.php";
    </script>';
    }
  else
    $email = $_SESSION["email"];
?>

<!Doctype html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!--This is my kit font awesome pls remind me-------------------------------------------->
        <script src="https://kit.fontawesome.com/92d742c429.js" crossorigin="anonymous"></script>
        <!--------------------------------------------------------------------------------------->
    </head>
    <body>
     
    <div>     
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a href="home.php" class="navbar-brand"><img src="Logo/Calina_Logo-tiny.png"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
          <a href="home.php" class="nav-item nav-link active"><i class="fa fa-home"></i> Home</a>
          <a href="branchSelect.php" class="nav-item nav-link"><i class="fa fa-bed"></i> Reserve room</a>
          <a href="#" class="nav-item nav-link"><i class="fa fa-cutlery"></i> Food & Dining</a>
          <a href="#" class="nav-item nav-link" tabindex="-1"><i class="fa fa-car"></i> Service & Facility</a>
          </div>
          <div class="navbar-nav ml-auto">
          <a class="nav-link" href=#> <i class="fas fa-user-alt"></i> <?php echo $email ?></a> 
          <a class="nav-link" href="signout_action.php"> <i class="fas fa-sign-out-alt"></i> Sign out</a> 
          </div>
        </div>
      </nav>
    </div>
    
</html> 