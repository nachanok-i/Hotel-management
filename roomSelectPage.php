<?php
require_once "config.php";
?>
<?php session_start();
if (isset($_SESSION['email']) != NULL) {
  $userEmail = $_SESSION['email'];
} else {
  echo '<script>
    alert("Please Login first");
    window.location.href="index.php";
    </script>';
}
?>

<!Doctype html>
<html>

<head>
  <title>View Room Detail Page</title>
  <link rel="shortcut icon" href="./Logo/Calina_Logo-03.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="roomstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--This is my kit font awesome pls remind me-------------------------------------------->
  <script src="https://kit.fontawesome.com/92d742c429.js" crossorigin="anonymous"></script>
  <!--------------------------------------------------------------------------------------->
  <script>
    $('.carousel').carousel({
      interval: 3000
    })
  </script>

</head>

<body>

  <div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a href="index.php" class="navbar-brand"><img src="Logo/Calina_Logo-tiny.png" alt="logo"></a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home"></i> Home</a>
          <a href="roomSelectPage.php" class="nav-item nav-link"><i class="fa fa-bed"></i> Find & Reserve</a>
          <a href="food.php" class="nav-item nav-link"><i class="fa fa-cutlery"></i> Food & Dining</a>
          <a href="service&facility.php" class="nav-item nav-link" tabindex="-1"><i class="fa fa-car"></i> Service & Facility</a>
        </div>
        <div class="navbar-nav ml-auto">
          <?php if (isset($_SESSION['email']) != NULL) : ?>
            <a class="nav-item nav-link"> <i class="fas fa-user-alt"> </i> <?php echo $_SESSION['email']; ?> </a>
            <form class="form-inline" action="logout.php" method="POST">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">Logout</button>
            </form>
          <?php else : ?>
            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fas fa-user-alt"></i>Login</a>
            <div class="dropdown-menu dropdown-menu-right p-3">
              <form class="form-horizontal" method="POST" accept-charset="UTF-8" action="login_action.php">
                <input class="form-control login" type="text" name="email" placeholder="Email" id="email">
                <input class="form-control login" type="password" name="password" placeholder="Password" id="pass">
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
              </form>
            </div>
            <a href="register.php" class="nav-item nav-link"> <i class="fas fa-user-plus"> </i> Sign up</a>
          <?php endif ?>
        </div>
      </div>
    </nav>
  </div>

  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item drk active">
          <img class=" img-fluid" src="./picHotelRoom/black1.jpg" alt="First slide">
          <div class="carousel-caption d-block">
            <p>CALINA HOTEL</p>
          </div>
        </div>
        <div class="carousel-item drk">
          <img class="img-fluid" src="./picHotelRoom/beach2_5.jpg" alt="Second slide">
          <div class="carousel-caption d-block">
            <p>CALINA HOTEL</p>
          </div>
        </div>
        <div class="carousel-item drk">
          <img class="img-fluid" href="http://google.com" src="./picHotelRoom/hotel2_5.jpg" alt="Third slide">
          <div class="carousel-caption d-block">
            <p>CALINA HOTEL</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="colorPlate">
    <div class="about">
      <div>
        <div class="container">
          <div class="w3ls-heading">
            <h4> ROOM & VILLAS</h4>
          </div>
          <p>With warm hues and a slight pop of color, the villas at Crimson Mactan Resort and Spa is bound to make you a striking first impression.<br>Imagine taking a nap on a plush four-poster canopy bed with interiors immersed in local architecture at the best Beach resort in Mactan,<br> Cebu. Each of our spacious villas and luxurious casitas features polished teak floors, locally-sourced Cebuano décor and beautiful domed ceilings made of woven Banig. Feel at home in an expansive living area that leads to mesmerizing views of the pristine Mactan sea from your own private plunge pool. Drained from the day’s activities? Relax and unwind in the sunk-in tub within the most elegant bathroom.</p>
        </div>
        <div class="container">
          <form name="selectbranch" method="POST" action="login_check.php">
            <div class="form-group">
              <select class="form-control form-control-lg" name="Branch" id="branch" required>
                <option value="">Select Branch</option>
                <?php
                $query = "SELECT * FROM Branch ORDER BY branchID";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['branchID'] . '">' . $row['title'] . '</option>';
                  }
                } else {
                  echo '<option value="">Branch is not available</option>';
                }
                ?>
              </select>
              <br>
              <button type="submit" class="btn btn-secondary btn-lg" style="margin-left: 47%;" name="submit" value="Explore">Book Now!</button>
          </form>
        </div>

      </div>
    </div>

  </div>
  </div>

  <div class="about_2">
    <div class=grid>
      <figure class="effect-apollo">
        <a class="example-image-link" href="type3.php" data-lightbox="example-set">
          <img src="./picHotelRoom/beach1.jpg" class=" img-fluid">
          <figcaption>
            <h2>Suit</h2>
            <p>One of our finest room</p>
          </figcaption>
        </a>
      </figure>
    </div>
  </div>

  <div class="about_3">
    <div class="row">
      <div class="col">
        <div class=grid>
          <figure class="effect-apollo">
            <a class="example-image-link" href="type1.php">
              <img src="./picHotelRoom/deluxe.jpg" class=" float-left img-fluid">
              <figcaption>
                <h2>DELUXE</h2>
                <p>Your family will feel the truthly confortable</p>
              </figcaption>
            </a>
          </figure>
        </div>
      </div>
      <div class="col">
        <div class=grid>
          <figure class="effect-apollo">
            <a class="example-image-link" href="type2.php">
              <img src="./picHotelRoom/private.jpg" class="float-right img-fluid">
              <figcaption>
                <h2>Elite</h2>
                <p>Spectacular will for this room</p>
              </figcaption>
            </a>
          </figure>
        </div>
      </div>
    </div>
  </div>
</body>




</html>