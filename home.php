<?php
  // Start the session
  session_start();
  $email = $_SESSION["email"];
?>

<!Doctype html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css">
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
        <nav class ="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <a class="navbar-brand" style="background-color:transparent;" href="index.html">Tap Hotel</a>
          <ul class ="nav navbar-nav">
              <li class ="nav-item"> 
                 <a class="nav-link " href="#">Link1</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link2</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
              <li class ="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
          </ul>
          <ul class=" nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href=#> <i class="fas fa-user-alt"></i> <?php echo $email ?></a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href=index.php> <i class="fas fa-sign-out-alt"></i> Sign out</a> 
             </li>
          </ul>
        </nav>
    </div>
    
</html> 