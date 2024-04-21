<?php
session_start();
 include"db.php";
 define('PAGE','Donation-rec');
 define('TITLE','Donation Data');
include"include-header-admin.php";

?>

<br></br><br></br>
<div class="jumbotron mb-4 p-4">
<h2 class="text-center text-primary">Donation Details</h2>
</div>
<div class="row"><div class="col-md-2"></div>
<div class="col-md-8">
<table class="table-sm table-striped table-bordered">
<thead class="thead-dark text-white">
	<tr class="bg-danger">
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
	$run=mysqli_query($db_connect,"SELECT * from donation");
	while($ismat=mysqli_fetch_array($run)){


	?>

	<tr>
	<!-- Dynamic data of the table -->
	</tr>
		<td><?php echo $ismat['d_id']; ?></td>
		<td><?php echo $ismat ['d_name'];?></td>
		<td><?php echo $ismat ['d_contact_no']; ?></td>
		<td><?php echo $ismat ['d_address']; ?></td>
		<td><?php echo $ismat ['d_email']; ?></td>
		<td><?php echo $ismat ['d_dob']; ?></td>
		<td><?php echo $ismat ['d_amount']; ?></td>
		<td><?php echo $ismat ['d_reason']; ?></td>


	
	</tr>
	<?php } ?>




</table>
</div>

<div class="col-md-2"></div>
</div>



<?php
include"includefooter.php";
?>