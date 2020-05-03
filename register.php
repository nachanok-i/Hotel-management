<!Doctype html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="register.css">
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
        <nav class ="navbar navbar-expand-sm bg-dark navbar-dark">
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

        <form id="Register" action="register_action.php"  method = "POST">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <div class="form-group ">
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" class ="form-control" required>
                </div>

                <div class="form-group ">
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" class ="form-control" name="psw" required>
                </div>
          
                <div class="form-group ">
                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" class ="form-control" name="psw-repeat" required>
                </div>
                
                <div class="form-group ">
                  <label for="Firstname"><b>Firstname</b></label>
                  <input type="text" placeholder="Enter Firstname" class ="form-control" name="Firstname" required>
                </div>
                
                <div class="form-group ">
                  <label for="Lastname"><b>Lastname</b></label>
                  <input type="text" placeholder="Enter Lastname" class ="form-control" name="Lastname" required>
                </div>
    
                <div class="form-group ">
                  <label for="CitizenID"><b>CitizenID</b></label>
                  <input type="text" placeholder="Enter CitizenID" class ="form-control" name="CitizenID" required>
                </div>

              <div class="form-group ">
                <label for="Address"><b>Address</b></label>
                <input type="text" placeholder="Enter Address" class ="form-control" name="Address" required>
                <label>
              </div>
                <input type="checkbox" name="remember" style="margin-bottom:15px"> Are you sure to summit
                </label>
          
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </body>
</html>