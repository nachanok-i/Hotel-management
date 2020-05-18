<?php
require_once "config.php";
?>
<?php session_start(); ?>
<!Doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="staffregister.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!--This is my kit font awesome pls remind me-------------------------------------------->
  <script src="https://kit.fontawesome.com/92d742c429.js" crossorigin="anonymous"></script>
  <!--------------------------------------------------------------------------------------->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">

  <?php
  require_once "config.php";
  $query = "SELECT * FROM Branch ORDER BY branchID";
  $query_2 = "SELECT * FROM Furniture ";
  $result_2 = $conn->query($query_2);
  $result = $conn->query($query);
  ?>

  <script>
    $(document).ready(function() {
      $("#choose").mousedown(function(e) {
        e.preventDefault();

        var select = this;
        var scroll = select.scrollTop;

        e.target.selected = !e.target.selected;

        setTimeout(function() {
          select.scrollTop = scroll;
        }, 0);

        $(select).focus();
      }).mousemove(function(e) {
        e.preventDefault()
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $("$btnclr".click).click(function() {
        $('input[type="text"]').val('');
        $(".clear").val('');
      });
    });
  </script>


  <script>
    /* Date picker */
    $(document).ready(function() {

      $("#dt1").datepicker({
        dateFormat: "yy-MM-dd",
        monthNames: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
        changeMonth: true,
        changeYear: true,
        buttonText: "Choose",
        minDate: 0
      });
    });
    /* Tap help find that condition pls */
  </script>

</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="index.php" class="navbar-brand"><img src="Logo/Calina_Logo-tiny.png" alt="logo"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
        <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home"></i> Home</a>
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

  <form id="staffRegister" action="staffRegister_action.php" charset="UTF-8" method="POST" enctype="multipart/form-data">
    <div class="container pt-3 bg grey">
      <h1>Staff Register</h1>
      <p>Please fill the infomation.</p>
      <hr>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstName"><b>Firstname</b></label>
          <input type="text" class="form-control  form-control-lg" name="firstName" id="firstName" placeholder="Your Firstname" required>
          <div class="invalid-feedback">please fill your name</div>
        </div>
        <div class="form-group col-md-6">
          <label for="lastName"><b>Lastname</b></label>
          <input type="tex" class="form-control  form-control-lg" name="lastName" id="lastName" placeholder="Your Lastname" required>
        </div>
      </div>
      <div class="form-group">
        <label for="email"><b>Email address</b></label>
        <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="name@example.com" required>
      </div>
      <div class="form-group">
        <label for="requiredSalary"><b>Required Salary</b></label>
        <input type="number" class="form-control form-control-lg" name="requiredSalary" id="requiredSalary" placeholder="Required Salary" required>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3 my-1">
          <label for="inputCity"><b>City</b></label>
          <input type="text" class="form-control form-control-lg" name="inputCity" id="inputCity" placeholder="Enter City" required>
        </div>
        <div class="form-group col-sm-3 my-1">
          <label for="street"><b>Street</b></label>
          <input type="text" class="form-control form-control-lg" name="street" id="street" placeholder="Enter Street" required>
        </div>
        <div class="form-group col-sm-3 my-1">
          <label for="state"><b>State</b></label>
          <input type="text" class="form-control form-control-lg" name="state" id="state" placeholder="Enter State" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-sm-3 my-1">
          <label for="zipCode"><b>Zip Code</b></label>
          <input type="number" class="form-control form-control-lg" name="zipCode" id="zipCode" placeholder="Enter Zipcode" required>
        </div>
        <div class="form-group col-sm-3 my-1">
          <label for="country"><b>Country</b></label>
          <input type="text" class="form-control form-control-lg" name="country" id="country" placeholder="Enter Country" required>
        </div>
        <div class="form-group col-sm-3 my-1">
          <label for="nationality"><b>Nationality</b></label>
          <input type="text" class="form-control form-control-lg" name="nationality" id="nationality" placeholder="Enter Nationality" required>
        </div>
      </div>

      <div class="form-group">
        <label for="phone"><b>Phone Number</b></label>
        <input type="tel" class="form-control form-control-lg" name="phone" id="phone" placeholder="Your Phone Number" required>
      </div>

      <div class="form-group">
        <label for="position"><b>Position</b></label>
        <input type="text" class="form-control form-control-lg" name="position" id="positon" placeholder="Enter Position" required>
      </div>

      <div class="form-group">
        <label for="starDate"><b>Start Date</b></label>
        <input type="text" class="form-control form-control-lg" name="startDate" id="dt1" placeholder="Enter Start date" readonly="readonly" required>
      </div>

      <div class="form-group">
        <label for="Branch">
          <b>Branch</b>
        </label>
        <select name="Branch" class="form-control form-control-lg" require>
          <option value="">Select Branch</option>
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<option value="' . $row['branchID'] . '">' . $row['title'] . '</option>';
            }
          } else {
            echo '<option value="">Branch is not available</option>';
          }
          $conn->close();
          ?>
        </select>
      </div>
      <h4>Gender</h4>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" value="M" name="gender" class="custom-control-input" required>
        <label class="custom-control-label" for="customRadio1"><b>Male</b></label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" value="F" name="gender" class="custom-control-input" required>
        <label class="custom-control-label" for="customRadio2"><b>Female</b></label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio3" value="other" name="gender" class="custom-control-input" required>
        <label class="custom-control-label" for="customRadio3"><b>Other</b></label>
      </div>

      <h4>Your Picture</h4>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="inputGroupFile01" name="yourPicture" accept="image/*" required>
          <label class="custom-file-label" for="yourPicture">Choose Picture</label>
        </div>
      </div>

      <div class="clearfix">
        <button type="submit" value="ignore" formaction="index.php" class="cancelbtn" formnovalidate>Cancel</button>
        <button href="index.php" type="submit" name="submit" class="signupbtn">Confirm</button>
      </div>

    </div>
  </form>

</body>

</html>