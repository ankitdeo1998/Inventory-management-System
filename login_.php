<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NCL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tabs.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	</head>
	<body>
	<?php
		session_start();	// Check if the user is already logged in, if yes then redirect him to welcome page
		if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: ../index.php");
		exit;
	}
?>
	<div id="colorlib-page">
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.php">Inventory & Monitoring System</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="itemlist.php">Item List</a></li>
					<li><a href="remain.php">Stock</a></li>
					<li  class="colorlib-active"><a href="login_.php">Login</a></li>
				</ul>
			</nav>
		</aside>

		<div id="colorlib-main">

			<div class="colorlib-contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="tab">
								<button class="colorlib-heading"id="defaultOpen" onclick="openTab(event, 'Login')">Login</button>
								<button class="colorlib-heading" onclick="openTab(event, 'Register')">Register</button>

							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
								 <div id="Login" class="tabcontent">
								  <form action="backend php/check.php" method="POST">
								  <div class="form-group">
											<input type="text" class="form-control" name="username" pattern="^[a-zA-Z0-9_.-]*$" required placeholder="Username">
									</div>

								   <div class="form-group">
											<input type="password" class="form-control" name="password" required placeholder="Password">
										</div>

										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Login">
										</div>
								 </form>
								</div>
								</div>
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
									<div id="Register" class="tabcontent">
									<form action="backend php/register.php" method="POST">
										<div class="form-group">
											<input type="text" class="form-control" name="username" required placeholder="Username">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="name" required placeholder="Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" name="email" required placeholder="Email">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" required placeholder="Password">
										</div>

										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Register">
										</div>
									</form>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	
	<script>
	document.getElementById("defaultOpen").click();
	function openTab(evt, Fname) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("colorlib-heading");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(Fname).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	</script>
	</body>
</html>
