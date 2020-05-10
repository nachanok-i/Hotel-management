<?php
require_once "config.php";
?>
<?php session_start(); ?>


<!Doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="type_1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!--This is my kit font awesome pls remind me-------------------------------------------->
  <script src="https://kit.fontawesome.com/92d742c429.js" crossorigin="anonymous"></script>
  <!--------------------------------------------------------------------------------------->
  <!-- font-awesome-icons -->
  <link href="font-awesome.css" rel="stylesheet">
  <!-- tabs -->
  <link href="easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
  <!-- //tabs -->
  <!-- //font-awesome-icons -->
  <link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>

<body>

  <div class="banner">
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
					<a href="service.php" class="nav-item nav-link" tabindex="-1"><i class="fa fa-car"></i> Service & Facility</a>
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
    <div class="w3-banner">
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="w3ls-heading">
        <h2>Deluxe</h2>
      </div>
      <div clas="w3-about-grids">
        <div class="row">
          <div class="col w3-about-left">
            <h5>BED</h5>
            <p>King or Twin bed based on availability</p>
          </div>
          <div class="col w3-about-left">
            <h5>EXTRA BED</h5>
            <p>Extra bed is not allowed.</p>
          </div>
          <div class="w-100"></div>
          <div class="col w3-about-left">
            <h5>OCCUPANCY</h5>
            <p>Two adults and two children under 12 years old are allowed in the existing beds</p>
          </div>
          <div class="col w3-about-left">
            <h5>LOCATION</h5>
            <p>Ground Floor area</p>
          </div>
          <div class="w-100"></div>
          <div class="col w3-about-left">
            <h5>BATHROOM</h5>
            <p>Open-plan bathroom with his/her granite countertop sinks, sunk-in tub and rain shower with hot/cold water</p>
          </div>
          <div class="col w3-about-left">
            <h5>SIZE</h5>
            <p>44 square meters</p>
          </div>
          <div class="w-100"></div>
          <div class="w3l-button col">
            <a href="roomSelectPage.php">Book Now</a>
          </div>

        </div>
        <div class="w3ls-heading" style="padding-bottom: 2%;">
          <h1>$120</h1>
          <p>/per day</p>
        </div>
      </div>
    </div>
  </div>

  <div>
    <div class="row">
      <div class="col price-mobamus">
        <div class="price-top">
          <img src="./picHotelRoom/detail_type_1.png" alt="pic1" class="img-fluid" />
          </a>
        </div>
      </div>
      <div class="col price-mobamus">
        <div class="price-top">
          <img src="./picHotelRoom/detail_type_1_2.png" alt="pic1_2" class="img-fluid" />
          </a>
        </div>
      </div>
      <div class="col price-mobamus">
        <div class="price-top">
          <img src="./picHotelRoom/detail_type_1_3.png" alt="pic1_3" class="img-fluid" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <div>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
            <P>This website is for Tab Hotel<br> Thank you for using our page</P>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <p>1640 Riverside Drive, Hill Valley, California
              <br>book21424@gmail.com
              <br>+ 01 234 567 88
              <br>+ 01 234 567 89</p>
          </div>
        </div>
        <div class="footer-copyright text-uppercase font-weight-bold  text-center">king mongkut's university of technology thonburi </div>
      </div>
    </footer>
  </div>
</body>

</html>