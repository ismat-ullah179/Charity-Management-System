<?php
define('PAGE','Change-Password');
 define('TITLE','Change Password');
include"include-header-user.php";
 

 
?>
<header class="jumbotron back-image" style="background-image: url(images/lap.jpg);">
				<div class="float-right" style="margin-right: 150px; margin-top:150px;">
				

				</div>



<?php
session_start();

if (!$_SESSION['login_id']) {

	header("location:Login.php");
}
 include"db.php";
if (isset($_POST['password_update_btn'])) {
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$query_old_pass=mysqli_query($db_connect,"SELECT * from userregister_tb where u_password='$old_password'and u_id='$_SESSION[login_id]'");

	$checkpoint_old_password= $query_old_pass->num_rows;
	

	if ($checkpoint_old_password == 1) {
		

		if ($new_password==$confirm_password) {
			
$query_update_password=mysqli_query($db_connect,"UPDATE userregister_tb set u_password='$new_password'where u_id='$_SESSION[login_id]'");

      $pass_change_success ="Your Password has been Changed";
		}
		else {

         $error_pass_matching ="your new and confirm password does not match";
	   }
	}
	  else {
	  	$error_old_pass ="your current password does not match";
	  }
}

?>


               <div class="row justify-content-center mt-5">
                <div class="col-sm-6 mt-9 text-white">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST">
					<h5 class="text-center">Change Your Password</h5>
					<div class="form-group">
						<label for="">old password</label>
						<input type="password" class="form-control" style="border-radius: 50px;" name="old_password" id="old_password" required>
						
					</div>
					<div class="form-group">
						<label for="">New password</label>
						<input type="password" class="form-control" style="border-radius: 50px;" name="new_password" id="new_password"required >
						
					</div>
					<div class="form-group">
						<label for="password">Confirm password</label>
                        <input type="password" class="form-control" style="border-radius: 50px;" name="confirm_password" id="confirm_password"required>						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger btn-block" style="border-radius: 50px;" name="password_update_btn">Update
					</button>
					</div>
					
				</form>
			</div>
			</div>

<?php
if (isset($error_pass_matching)) {
	echo "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>".$error_pass_matching."</div>";
}
if (isset($error_old_pass)) {
	echo "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>".$error_old_pass."</div>";
}
if (isset($pass_change_success)) {
	echo "<div class='alert alert-success col-sm-6 ml-5 mt-2'>".$pass_change_success."</div>";
}

?>


</header>


<?php
include"includefooter.php";
?>
</body>
</html>
