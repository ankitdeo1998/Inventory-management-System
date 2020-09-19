<!DOCTYPE HTML>
<html>
	<head>
	<?php
			// Initialize the session
			session_start();
			 
			// Check if the user is logged in, if not then redirect him to login page
			if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
				header("refresh:1; url=login_.php");
				echo "<script type='text/javascript'>alert('You need to login first!!');
				
				</script>";
				
				exit;
				
			}
			
?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NCL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
   <link rel="scss" href="sass/bootstrap/_forms.scss">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	
</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="new_index.php">Inventory & Monitoring System</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
				<li class="colorlib-active"><a>
					<?php
						if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
							{echo 'Welcome '.$_SESSION["username"];}
						
						
					?></a>
					</li>
					<li><a href="index.php">Home</a></li>
					<li><a href="itemlist.php">Item List</a></li>
					<li class="colorlib-active"><a href="remain.php">Stock</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		
		</aside>

		<div id="colorlib-main">

			<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<br>
							<h2 class="colorlib-heading">Inventory Stock Enquiry</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<div>
								<form action="stockremain.php" class="form-container" method='POST'>
									<h3>Enter Item Code</h3>
										<div class="form-group">
											<input type="int" class="form-control" name="item_code" required placeholder="Item Code">
										</div>
										
									<button type="submit" class="btn">Details</button>
																		
								</form>
									
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
	
	

	</body>
</html>

