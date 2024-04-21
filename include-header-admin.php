<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title><?php echo TITLE ?></title>
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
		<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="background-color: #330066">
			<!-- <a href="index.php" class="navbar-brand">Charity System</a> -->
			<a href="index.php"><img src="images/Logo.png" style="width: 100px;"></a>

			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  my-2" id="mymenu">
				<ul class="navbar-nav pl-5 custom-nav">
					<li class="nav-item"><a class="nav-link <?php if(PAGE=='ADMINProfile'){ echo'active';} ?>" href="ADMINProfile.php" class="nav-link">Profile</a></li>
					<li class="nav-item"><a class="nav-link <?php if(PAGE=='reg-user'){ echo'active';} ?>"href="reg-user.php" class="nav-link">Registered User</a></li>
					<li class="nav-item"><a class="nav-link <?php if(PAGE=='Donation-rec'){ echo'active';} ?>"href="Donation-rec.php" class="nav-link">Donation Record</a></li>
					<li class="nav-item"><a class="nav-link <?php if(PAGE=='a-Change-Password'){ echo'active';} ?>" href="a-Change-Password.php"class="nav-link">Change Password</a></li>
					<li class="nav-item"><a class="nav-link <?php if(PAGE=='a-Log-out'){ echo'active';} ?>" href="a-Log-out.php" class="nav-link">Logout</a></li>
			
					
				</ul>
			</div></nav>