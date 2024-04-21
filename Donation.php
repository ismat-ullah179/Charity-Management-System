<?php
include"db.php";
session_start();
 define('PAGE','Donation');
 define('TITLE','Donation');

if (!$_SESSION['login_id']) {

	header("location:Login.php");
}

include"include-header-user.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Donation Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<h3 class="text text-center">Donate Money to Help the Poor</h3>
<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">

		<?php
		if (isset($_POST['insert_btn'])) {
			$name=$_POST['name'];
			$contactno=$_POST['contactno'];
			$address=$_POST['address'];
			$email_ad=$_POST['email_ad'];
			$dob=$_POST['dob'];
			$damount=$_POST['d_amount'];
			$reason=$_POST['reason'];
			$id=$_SESSION['login_id'];
			$sql="INSERT INTO donation SET
				u_id='$id',
				d_name='$name',
				d_contact_no='$contactno',
				d_address='$address',
				d_email='$email_ad',
				d_dob='$dob',
				d_amount='$damount',
				d_reason='$reason'";

		if ($db_connect->query($sql) == TRUE) {
     
    $genid=mysqli_insert_id($db_connect);
$success = "<div class='text text-success'>YOUR Donation HAS BEEN SUBMITTED</div>"; 
        $_SESSION['myid']=$genid;
        
        
        header("location:USERProfile.php");
 }

        // echo"<script> location.href='submit-request-success.php'</script>";
     }else{

          $error = "<div class='alert alert-danger col-sm-6 ml-2 mt-2'>unable to request</div>"; 


     }

		?>

<form action="" method="POST" class="jumbotron">
	
	<div class="form-row">
	<div class="form-group col-md-6">

		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group col-md-6">

		<label>Contact No</label>
		<input type="text" name="contactno" class="form-control">
	</div>
</div>
  
	<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" class="form-control">
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label>Email Address</label>
			<input type="text" name="email_ad" class="form-control">
		</div>
		<div class="form-group col-md-6">
			<label>Date Of Birth</label>
			<input type="Date" name="dob" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label>Donation Amount</label>
			<input type="numeric" name="d_amount" class="form-control">
		</div>
		<div class="form-group col-md-6">
			<label>Reason</label>
			<input type="numeric" name="reason" class="form-control">
		</div>

		<button class="btn btn-info" type="submit" name="insert_btn">Insert</button>
	</div>
   		<?php
 if (isset($success)) {
     echo"$success";
     
     
}
?>

   </div>
	
	</div>


</form>
</div>
<div class="col-md-2"></div>
</div>


</body>
</html>




<?php
include"includefooter.php";
?>
