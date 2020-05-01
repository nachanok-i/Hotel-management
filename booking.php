

<!Doctype html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="booking.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!--This is my kit font awesome pls remind me-------------------------------------------->
        <script src="https://kit.fontawesome.com/92d742c429.js" crossorigin="anonymous"></script>
        <!--------------------------------------------------------------------------------------->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <script>
        /* Tap help find that condition pls */
        $(function() {
            var check =[]
            var from = $( "#fromDate" )
                        .datepicker({
                        dateFormat: "dd-mm-yy",
                        changeMonth: true,
                        minDate :new Date(),
                        showWeek : true
                        })
                        .on( "change", function() {
                        to.datepicker( "option", "minDate", getDate( this ));
                        });      
            
                var to = $( "#toDate" ).datepicker ({
                        dateFormat: "dd-mm-yy",
                        changeMonth: true
                        })
                        .on( "change", function() {
                        from.datepicker( "option","maxDate", getDate( this ) );
                        
                        });

        function getDate( element ) {
            var date;
            var dateFormat = "dd-mm-yy";
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
            date = null;
            }
            return date;
        }});
        /* Tap help find that condition pls */
        </script>
    
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

    <form id="Booking" action="#" style="border:1px solid #ccc" method = "POST">
            <div class="container">
                <h1>Booking</h1>
                <p>Please fill the infomation.</p>
                <hr>

                <!--for choose branch -->
                <div class="container">
                    <div class="form-group ">
                        <label for="Branch"><b>Branch</b> </label>
                            <select name="Branch"  class="form-control" >
                                <option value ="Branch1">Branch1</option> <!--can insert value :) -->
                                <option value ="Branch2">Branch2</option>
                                <option value ="Branch3">Branch3</option>
                                <option value ="Branch4">Branch4</option>
                                <option value ="Branch5">Branch5</option>
                            </select>
                        <label for="From"><b>From</b></lable>
                            <p><input type="text" name="From" placeholder="DD-MM-YYYY" id="fromDate" class ="form-control" required></p>

                        <label for="From"><b>To</b></lable>  
                            <p><input type="text" name="To" placeholder="DD-MM-YYYY" id="toDate" class ="form-control" required></p>

                        <h4><b>Number of Guest</b></h4>
                            <label for="adult"><b>Adult</b></lable>
                                <p><input type="number" name="adult" placeholder="Enter number" class ="form-control" required></p>
                            <label for="child"><b>Child</b></lable>
                            <p><input type="number" name="child" placeholder="Enter number" class ="form-control" required></p>
                    </div>
                </div>    

                <div class="container">
                    <h5><b>Payment Section</b></h5>
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                    <div class="form-group">
                        <label for="cardNumber"><b>Card Number</b></label>
                            <p><input type=text name="cardNumber" placeholder="Card Number" class="form-control" required></p>
                    </div>
                </div>

                <div class="container">
                    <h5><b>Comment Section</b></h5>
                    <label for="rating"><b>Rating</b></label>
                        <select name="rating"  class="form-control" >
                                <option value =1>1</option> <!--can insert value :) -->
                                <option value =2>2</option>
                                <option value =3>3</option>
                                <option value =4>4</option>
                                <option value =5>5</option>
                        </select>
                    <label for="additionalNote"><b>Additional Note</b></label>
                        <textarea rows="4" cols="50" name="additionalNote" form="usrform" class="form-control"> </textarea>
                </div>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Confirm</button>
                </div>
            </div>
    </form>

</html> 