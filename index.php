<?php
require_once "config.php";
?>
<?php session_start();
if (isset($_SESSION['email']) != NULL) {
	$userEmail = $_SESSION['email'];
}
?>
<!Doctype html>
<html>

<head>
	<title>Calina Hotel</title>
	<meta charset="utf-8">
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
	<!-- font-awesome-icons -->
	<link href="font-awesome.css" rel="stylesheet">
	<!-- tabs -->
	<link href="easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<!-- //tabs -->
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<?php
	require_once "config.php";
	if (isset($_SESSION['email']) != NULL) {
		$query = "SELECT * FROM Customer WHERE email like '%$userEmail%'";
		$result =  mysqli_query($conn, $query);
	}
	?>
</head>

<body>

	<div class="banner">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
		<div class="w3-banner">
			<div id="typer"></div>
		</div>
	</div>
	<?php if (isset($_SESSION['email']) == NULL) : ?>
		<div class="about">
			<div class="container">
				<div class="w3ls-heading">
					<h2>Welcome</h2>
				</div>
				<div clas="w3-about-grids">
					<div class="col-md-6 w3-about-left">
						<h5>Hope you all happy with our service</h5>
						<p>We will create for you an atmosphere of tranquility, subdued elegance and new expression for cosmopolitan life at its finest in the vibrant and green Filinvest City.</p>
					</div>

				</div>
			</div>
		</div>

		<div class="popular-section-wthree">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Our Service</h3>
				</div>
				<div class="popular-agileinfo">
					<div class="col-md-3 popular-grid item1">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
						<h4>Food</h4>
						<p>We have varity food for customer to explore</p>
					</div>
					<div class="col-md-3 popular-grid item2">
						<i class="fa fa-moon-o" aria-hidden="true"></i>
						<h4>Resting</h4>
						<p>We have varity rooms for customer to choose for booking</p>
					</div>
					<div class="col-md-3 popular-grid popular-grid-bottom item3">
						<i class="fa fa-car" aria-hidden="true"></i>
						<h4>Service</h4>
						<p>We have varity services for customer to choose for using</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="team">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Our Team Member</h3>
				</div>
				<div class="inner_w3l_agile_grids">
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>
								<img src="./picHotelRoom/tap2.png" alt="Tap" class="img-responsive" />
							</li>
							<li>
								<img src="./picHotelRoom/lion1.2.jpg" alt="Lion" class="img-responsive" />
							</li>
							<li>
								<img src="./picHotelRoom/lion2.2.jpg" alt="Lion" class="img-responsive" />
							</li>
							<li>
								<img src="./picHotelRoom/toon.jpg" alt="Toon" class="img-responsive" />
							</li>
							<li>
								<img src="./picHotelRoom/book.jpg" alt="Book" class="img-responsive" />
							</li>
						</ul>
						<div class="resp-tabs-container">
							<div class="tab1">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Nachanok Issarapruk</h4>
									<span>First of Our Member</span>
									<p> His student ID:61070503410 </p>
									<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow In</li>
											<li><a href="https://www.facebook.com/nachanok.issarapruk.tap.ipod" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class="tab2">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Sutinan Tadalimavad</h4>
									<span>Second of Our Member</span>
									<p>His student ID:61070503443</p>
									<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow In</li>
											<li><a href="https://www.facebook.com/sutinan.tadalimavad" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab3">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Sahachok Prachaporn</h4>
									<span>Third of Our Member</span>
									<p>His student ID:61070503436</p>
									<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow In</li>
											<li><a href="https://www.facebook.com/sahachokp" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab4">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Siradanai Sutin</h4>
									<span>Fourth of Our Member</span>
									<p>His student ID:61070503437</p>
									<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow In</li>
											<li><a href="https://www.facebook.com/toonTheta" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>

							<div class="tab5">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Chadapong Thanaprasit</h4>
									<span>Fifth of Our Member</span>
									<p>His student ID:61070503403</p>
									<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow In</li>
											<li><a href="https://www.facebook.com/bookbight" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="about">
			<div class="container">
				<div class="w3ls-heading">
					<h2><b>Profile<b></h2>
				</div>
				<?php
				$path = './customerPicture/';
				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_array($result)) {
						$imgName = $row['profileImage'];
						echo '<img src="' . $path . $imgName . '" class="img-fluid img-thumbnail mx-auto d-block" alt="customer picture" >';
						echo '<div clas="row">';
						echo '<div class="col w3-about-left">';
						echo '<h5> Firstname </h5>';
						echo '<p style="font-size:2em;">' . $row['firstName'] . '</p>';
						echo '</div>';
						echo '<div class="col w3-about-left">';
						echo '<h5> Lastname </h5>';
						echo '<p style="font-size:2em;">' . $row['lastName'] . '</p>';
						echo '</div>';
						echo '<div class="w-100"></div>';
						echo '<div class="col w3-about-left">';
						echo '<h5> CitizenID </h5>';
						echo '<p style="font-size:2em;">' . $row['citizenID'] . '</p>';
						echo '</div>';
						echo '<div class="col w3-about-left">';
						echo '<h5> Street </h5>';
						echo '<p style="font-size:2em;">' . $row['street'] . '</p>';
						echo '</div>';
						echo '<div class="w-100"></div>';
						echo '<div class="col w3-about-left">';
						echo '<h5> City </h5>';
						echo '<p style="font-size:2em;">' . $row['city'] . '</p>';
						echo '</div>';
						echo '<div class="col w3-about-left">';
						echo '<h5> State </h5>';
						echo '<p style="font-size:2em;">' . $row['state'] . '</p>';
						echo '</div>';
						echo '<div class="w-100 "></div>';
						echo '<div class="col w3-about-left">';
						echo '<h5> Zipcode </h5>';
						echo '<p style="font-size:2em;">' . $row['zipCode'] . '</p>';
						echo '</div>';
						echo '<div class="col w3-about-left">';
						echo '<h5> Country </h5>';
						echo '<p style="font-size:2em;">' . $row['country'] . '</p>';
						echo '</div>';
						echo '</div>';
					}
				} else {
					echo 'could not find customer picture';
				}
				?>
			</div>
		</div>
	<?php endif ?>
	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Additional Information</h6>
					<P>This website is for Calina Hotel<br> Thank you for using our page</P>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Contact</h6>
					<p> Consider apply for staff? </p>
					<br>
					<a href="staffRegister.php">Click here!</a>
				</div>
			</div>
			<div class="footer-copyright text-uppercase font-weight-bold  text-center">king mongkut's university of technology thonburi </div>
		</div>
	</footer>
	</div>

	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--//tabs-->
	<!-- //here ends scrolling icon -->
	<script src='js/jquery.typer.js'></script>
	<script>
		var win = $(window),
			foo = $('#typer');

		foo.typer(['Luxury Hotels', 'Hotels & Resorts', 'Luxury Resorts']);

		// unneeded...
		win.resize(function() {
			var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

			foo.css({
				fontSize: fontSize * .8 + 'px'
			});
		}).resize();
	</script>
</body>

</html>