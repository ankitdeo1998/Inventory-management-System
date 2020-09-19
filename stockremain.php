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
    <link rel="stylesheet" href="/sass/bootstrap/_tables.scss">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<?php 
$username = "root"; 
$password = ""; 
$database = "loginsys"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$code = $_POST['item_code'];
$query = "SELECT item_code,generic_code,quantity FROM item_list WHERE item_code=$code";
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        #$found=true;
		$field1name = $row["item_code"];
        $field2name = $row["generic_code"];
        $field3name = $row["quantity"];
      
	  $_SESSION["icode"]=$field1name;
        }
    $result->free();
}
}
?>
	
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
							<h2 class="colorlib-heading">Stock Details</h2>
						
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="colorlib-text">
											<b>Item Code: </b><?php echo $field1name;?>
										</div>
							<div class="colorlib-text">
											<b>Generic Code:</b><?php echo $field2name;?>
										</div>
										<div class="colorlib-text">
											<b>Quantity Available:</b><?php echo $field3name;?>
										</div>
										
										<div class="colorlib-text">
											<b>Transaction History:</b>
											<?php include('TH.php') ?>
										</div>
							  </div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<button class="open-button colorlib-heading" onclick="openForm()">Transfer Stock</button>
							<div class="form-popup" id="myForm">
								<form action="stocktrs.php" class="form-container" method='POST'>
									<h1 class="colorlib-heading">Transfer:</h1>
										<div class="form-group">
											<input type="int" class="form-control" name="item" value=<?php echo $field1name;?> required placeholder="Item Code">
										</div>
										<div class="form-group">
											<select name="user" class="form-control"><option value="Civil">Civil</option><option value="Vigilance">Vigilance</option></select>
										</div>
										<div class="form-group">
											<input type="int" class="form-control" name="qty" required placeholder="Quantity">
										</div>
									<button type="submit" class="btn">Transfer</button>
									<button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
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
	<script>
	function openForm() {
		document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
		document.getElementById("myForm").style.display = "none";
	}
</script>
	

	</body>
</html>