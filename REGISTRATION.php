<?php 

	include"db.php";
	
	?>
	<?php

	if (isset($_POST['signup_btn'])){
		
		$name= $_POST['name'];
		$Address= $_POST['Address'];
		$password= $_POST['Password'];
		$email= $_POST['Email'];
		$Phone= $_POST['Phone'];



$query=mysqli_query($db_connect,"SELECT u_email from userregister_tb where u_email='$email'");
 	$checkpoint=mysqli_num_rows($query);
		if ($checkpoint==0){
			
			$query_insert = mysqli_query($db_connect,"INSERT INTO userregister_tb set 

				u_name='$name',
				u_address='$Address',
				u_email='$email',
				u_phone='$Phone',
				u_password='$password'	
          ");
			   
			header("location:Login.php");

		} 
		else{

			$error = "This email address already exists.";
		}

	}

 ?>


<?php
include"includenav.php";

?>
<br> </br></br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 mt-3 jumbotron">
<h2 class="text-center"> Create An Account</h2>

<?php
	
	if (isset($error)) {
		echo "<div class='alert alert-danger'>" .$error."</div>";
	}

?>		
	<form action="" method="POST" class="mt-5 p-4 bg-light">
		

		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
<div class="form-group">
			<label>Address</label>
			<input type="text" name="Address" class="form-control">
		</div>
<div class="form-group">
			<label>Email</label>
			<input type="Email" name="Email" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="Password" name="Password" class="form-control">
		</div>

          <div class="form-group">
			<label>Phone Number</label>
			<input type="Phone" name="Phone" class="form-control">
		</div>
		
		<button class="btn btn-success" name="signup_btn"> Sign-Up</button>



	</form>

</div>
<div class="col-md-3"></div>

</div>
</body>
	</html>