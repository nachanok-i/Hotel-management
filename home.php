<?php
// Start the session
session_start();
?>

<!Doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="home.css">
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
	$query = "SELECT * FROM Customer";
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
					<a href="roomSelectPage.php" class="nav-item nav-link"><i class="fa fa-bed"></i> Room Reservation</a>
					<a href="#" class="nav-item nav-link"><i class="fa fa-cutlery"></i> Food Service</a>
					<a href="#" class="nav-item nav-link" tabindex="-1"><i class="fa fa-car"></i> Other Service</a>
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

	<div class="wrapper">
		<div class="container-fluid">
			<div class="w3ls-heading">
				<h2>Profile</h2>
			</div>
			<img src="..." class="rounded mx-auto d-block" alt="...">
		</div>
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

</html>