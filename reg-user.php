<?php
session_start();
 include"db.php";
 define('PAGE','reg-user');
 define('TITLE','Registration');
include"include-header-admin.php";

?>
</br></br></br></br>


<div class="jumbotron">
<h2 class="text-center text-primary">Registerd Users</h2>
</div>
<div class="row"><div class="col-md-2"></div>
<div class="col-md-8">
<table class="table-sm table-striped table-bordered">
<thead class="thead-white">
	<tr class="bg-danger text-white">
		<!-- (2 types of data) Static data (that we can enter) in the table -->

	<th>ID</th>
	<th>Name</th>
	<th>Address</th>
	<th>email Address</th>
	<th>Contact No</th>
	
	<th>password</th>


	</tr>
</thead>

	<?php 
	$run=mysqli_query($db_connect,"SELECT * from userregister_tb");
	while($ismat=mysqli_fetch_array($run)){


	?>

	<tr>
	<!-- Dynamic data of the table -->
	</tr>
		<td><?php echo $ismat['u_id'];?></td>
		<td><?php echo $ismat['u_name'];?></td>
		<td><?php echo $ismat['u_address']; ?></td>
		<td><?php echo $ismat['u_email'];?></td>
		<td><?php echo $ismat['u_phone'];?></td>
		<td><?php echo $ismat['u_password']; ?></td>
		


	
	</tr>
	<?php
}; 
?>




</table>
</div>
<div class="col-md-2"></div>
</div>



<?php
include"includefooter.php";
?>