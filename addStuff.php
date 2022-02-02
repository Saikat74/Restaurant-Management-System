<?php 
	SESSION_START();
	if($_SESSION["user"]==true){
		echo "Welcome as"." ".$_SESSION["user"];
	}
	else{
		header('location:index.php');
	}
	
	include 'admin_header.php';
	require_once 'controllers/StuffController.php';
?>
<!--addproduct starts -->
	<div class="center">
		<h3 align="center">Add New Stuff Details</h3>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Name" required>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>
			<div class="form-group">
				<input type="text" name="type" class="form-control" placeholder="User Type" required>
			</div>
			<div class="form-group">
				<input type="text" name="salary" class="form-control" placeholder="Salary" required>
			</div>
			<div class="form-group"> 
				<input type="text" name="age" class="form-control" placeholder="Age" required>
			</div>
			<div class="form-group">
				<input type="text" name="phone" class="form-control" placeholder="Phone No" required>
			</div>
			<div class="form-group">
				<input type="text" name="address" class="form-control" placeholder="Address" required>
			</div>
		
			<div class="form-group text-center">
				
				<input type="submit" name="add_stuff" class="btn btn-success" value="Add Stuff" class="form-control">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'admin_footer.php';?>