<?php
// Start the session
session_start();
?>

<!Doctype html>
<html>
    <head>
    <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="roomSelectPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
              <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fas fa-user-alt"></i>Login</a> 
                <div class="dropdown-menu dropdown-menu-right p-3">
                    <form class="form-horizontal" method="POST" accept-charset="UTF-8" action="login_action.php">
                        <input class="form-control login" type="text" name="email" placeholder="Email" id="email">
                        <input class="form-control login" type="text" name="password" placeholder="Password" id="pass">
                        <input class="btn btn-primary" type="submit" name="submit" value="Login">
                    </form>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=register.php> <i class="fas fa-user-plus"></i> Sign up</a> 
             </li>
          </ul>
        </nav>
    </div>
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block mx-auto" width="100%" height=650px  src="./picHotelRoom/black1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block mx-auto" width="100%" height=650px src="./picHotelRoom/beach2_5.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block  mx-auto" width="100%" height=650px src="./picHotelRoom/hotel2_5.jpg" alt="Third slide">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
    <div class="area">
        <div class ="areaHeader">
            <h3><b>ROOMS & VILLAS</b></h3>
            <div class = inside>
                <p>With warm hues and a slight pop of color, the villas at Crimson Mactan Resort and Spa is bound to make you a striking first impression.<br>
                Imagine taking a nap on a plush four-poster canopy bed with interiors immersed in local architecture at the best Beach resort in Mactan,<br>
                Cebu. Each of our spacious villas and luxurious casitas features polished teak floors, locally-sourced Cebuano décor and beautiful domed<br>
                ceilings made of woven Banig. Feel at home in an expansive living area that leads to mesmerizing views of the pristine Mactan sea from<br>
                your own private plunge pool. Drained from the day’s activities? Relax and unwind in the sunk-in tub within the most elegant bathroom.<br>
                </p>
            </div>
        </div>
    </div>

    <div >
        <div class="pic1">
            <img src="./picHotelRoom/beach1.jpg" class="pic1" alt="Room type1">
            <div class="insideSet1">
                <h2><b>Room Type1</b></h2>
            </div>
            <button href=# class=buttonInsideSet1><b>Book now</b></button>
            <button href=# class=buttonInsideSet1_2><b>View more</b></button>
        </div>  
    </div>
  <div>
    <div class ="set2">
        <div class = "inline-block">
            <img src="./picHotelRoom/deluxe.jpg"class="set2">
            <div class="insideSet2">
                <h2><b>Room Type2</b></h2>
            </div>
            <button href=# class=buttonInsideSet2><b>Book now</b></button>
                <button href=# class=buttonInsideSet2_2><b>View more</b></button>
        </div>
        <div class = "inline-block">
            <img src="./picHotelRoom/private.jpg" class="set2">
            <div class="insideSet3">
                <h2><b>Room Type3</b></h2>
            </div>
            <button href=# class=buttonInsideSet3><b>Book now</b></button>
            <button href=# class=buttonInsideSet3_2><b>View more</b></button>
        </div>
    </div>
  </div> 
  <div style>
      <footer class ="page-footer">
        <div class="container">
            <div class = "row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                    <P>This website is for Tab Hotel<br> Thank you for using our page</P>
              </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                 <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <p>1640 Riverside Drive, Hill Valley, California
                <br>book21424@gmail.com
                <br>+ 01 234 567 88
                <br  >+ 01 234 567 89</p>
                </div>
            </div>
            <div class="footer-copyright text-uppercase font-weight-bold  text-center">king mongkut's university of technology thonburi  </div>
        </div>
      </footer>
    </div>
  </body>
</html> 