<?php
include"includenav.php";
?>

<?php
session_start();
 include"db.php";
 ?>
 <?php

if(isset($_POST['LOGIN_BUTTON'])){
	$EMAIL=$_POST['a_email'];
	$PASS=$_POST['a_password'];

	$query="select * from adminlogin_tb where a_email='$EMAIL' and a_password='$PASS'";
    $result=$db_connect->query($query);

	if($result->num_rows>0){
	$data=$result->fetch_array();
	$_SESSION['login_id']=$data['a_id']; 
		header("location:ADMINProfile.php");

	}else{

		$error="o sorry your Email and password is incorrect";
	}
}

?>


</br></br></br></br>
	<div class="mb-3 mt-5 container text-center" style="font-size: 30px;">
			<i class="fas fa-stethoscope"></i>
		<span class="mt-5"> Online Charity Management System</span>
	</div>
		<p class="text-center" style="font-size: 16px;">
			<i class="fas fa-user-secret text-Primary mr-2"></i>Admin-Login
		</p>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-sm-7 col-md-5">

<?php

if (isset($error)) {
	echo "<div class='alert alert-danger'>".$error."</div>";
}

?>					

					<form action="" class="shadow-sm p-3 bg-info text-light" method="POST">
					
					<div class="form-group">
						<i class="fas fa-user"></i>
						<label for="email" class="font-weight-bold pl-2">Email</label>
						<input type="text" name="a_email" class="form-control" placeholder="Email">
						
					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
						<input type="password" name="a_password" class="form-control" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-dark mt-4 shadow-sm font-weight-bold btn-block" name="LOGIN_BUTTON">Login</button>
				</form>
					

				</div>
			</div>

		</div>
	




	

<?php
include"includefooter.php";
?>