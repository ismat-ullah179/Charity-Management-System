<?php
define('PAGE','a-Change-Password');
 define('TITLE','Change Pass');
include"include-header-admin.php";
?>

<header class="jumbotron back-image" style="background-image: url(images/lap.jpg);">
				<div class="float-right" style="margin-right: 150px; margin-top:150px;">
				

				</div>
			

<?php
session_start();
 include"db.php";
if (isset($_POST['password_update_btn'])) {
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$query_old_pass=mysqli_query($db_connect,"SELECT * from adminlogin_tb where a_password='$old_password'and a_id='$_SESSION[login_id]'");

	$checkpoint_old_password= $query_old_pass->num_rows;
	

	if ($checkpoint_old_password == 1) {
		

		if ($new_password==$confirm_password) {
			
$query_update_password=mysqli_query($db_connect,"UPDATE adminlogin_tb set a_password='$new_password'where a_id=	'$_SESSION[login_id]'");

      $pass_change_success ="Your Password has been Changed";
		}
		else {

         $error_pass_matching ="your new and confiirm password does not match";
	   }
	}
	  else {
	  	$error_old_pass ="your current password does not match";
	  }
}

?>


               <div class="row mt-2 ml-5">
                <div class="col-sm-4 mt-9 ml-5">   <!--start profile area 2ND COLUMN-->

				<form action="" method="POST" class="text-black jumbotron p-4">
					<h5 class="text-center text-dark mb-3">Change Password</h5>
					<div class="form-group">
						<label>old password</label>
						<input type="password" class="form-control" name="old_password" id="old_password" required>
						
					</div>
					<div class="form-group">
						<label for="">New password</label>
						<input type="password" class="form-control" name="new_password" id="new_password"required >
						
					</div>
					<div class="form-group">
						<label for="password">Confirm password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password"required>						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger btn-block" name="password_update_btn">Update
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
