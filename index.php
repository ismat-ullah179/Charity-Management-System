
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>project complete</title>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
		<!--Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!--font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		<!--Custom CSS File -->
		<link rel="stylesheet" type="text/css" href="css/custom.css">
	</head>
	<body>
		<!--start navigation-->
		<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="background-color: #330066">
			<!-- <a href="index.php" class="navbar-brand">Charity System</a> -->
			<a href="index.php"><img src="images/Logo.png" style="width: 100px;"></a>

			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  my-2" id="mymenu">
				<ul class="navbar-nav pl-5 custom-nav">
					<li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
					<li class="nav-item"><a href="#contactus" class="nav-link">CONTACT US</a></li>
					<li class="nav-item"><a href="#Aboutus" class="nav-link">ABOUT US</a></li>
					<li class="nav-item"><a href="REGISTRATION.php" class="nav-link">REGISTRATION</a></li>
					<li class="nav-item"><a href="Login.php" class="nav-link">LOGIN</a></li>
					
				</ul>
			</div></nav>
		
						
			<!--End  navigation-->
			<!-- START HEADER JUMBOTRON -->
			<header class="jumbotron back-image" style="background-image: url(images/image.jpg);">
				<div class="float-right" style="margin-right: 150px; margin-top:150px;">
				

				</div>
			</header>


		</br></br>

	<?php	
    include"aboutus.php";
    include"contactus.php";
    ?>
			

			<!-- START FOOTER -->
			<footer class="container-fluid bg-dark mt-5 text-white">
				<div class="container">
				<div class="row py-3">
					<div class="col-md-6"><!-- start first column -->
						<span class="pr-2">follow us</span>
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>							
						<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>											


					</div><!-- end first column -->
					<div class="col-md-6 text-right"><!--start second column-->
					<small>Designed by Israh &copy; 2020</small>	
					<small class="ml-2"><a href="admin-login.php">admin login</a></small>
					</div><!--second column end-->
				</div>
			</div>
			</footer>
			<!--bootstrap javascript-->
			<script src="js/jquery.min.css"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/all.min.js"></script>

		</body>
	</html>