<?php
session_start();
 include"db.php";
 define('PAGE','USERProfile');
 define('TITLE','USER Profile');
include"include-header-user.php";
?>
<br></br><br>
<div class="jumbotron">
<h2 class="text-center text-primary">Detail about your donation</h2>
</div>
<div class="row"><div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-striped table-bordered">
<thead class="thead-dark text-white">
	<tr>
		<!-- (2 types of data) Static data (that we can enter) in the table -->

	<th>ID</th>
	<th>Name</th>
	<th>Contact No</th>
	<th>Address</th>
	<th>email Address</th>
	<th>Date Of Birth</th>
	<th>Donation Amount</th>
	<th>Reason</th>


	</tr>
</thead>

	<?php 
	
	$id=$_SESSION['login_id'];
$n=1;

	$run=mysqli_query($db_connect,"SELECT * from donation WHERE u_id='$id'");
	while($ismat=mysqli_fetch_array($run)){


	?>

	<tr>
	<!-- Dynamic data of the table -->
	</tr>
		<td><?php echo $n++; ?></td>
		<td><?php echo $ismat ['d_name'];?></td>
		<td><?php echo $ismat ['d_contact_no']; ?></td>
		<td><?php echo $ismat ['d_address']; ?></td>
		<td><?php echo $ismat ['d_email']; ?></td>
		<td><?php echo $ismat ['d_dob']; ?></td>
		<td><?php echo $ismat ['d_amount']; ?></td>
		<td><?php echo $ismat ['d_reason']; ?></td>
	


	
	</tr>
	<?php } ?>






</div>

<!-- <div class="col-md-2"></div> -->
</table>
<form class="d-print-none">
	<input class="btn btn-danger" type="submit" value="Print" onclick="window.print()">
	
</form>




<?php
include"includefooter.php";
?>