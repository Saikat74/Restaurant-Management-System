<?php
	SESSION_START();
	if($_SESSION["user"]==true){
		echo "Welcome as"." ".$_SESSION["user"];
	}
	else{
		header('location:index.php');
	}
	include 'admin_header.php';
	require_once 'controllers/GroceryController.php';
?>
<!--addproduct starts -->
	<div class="center">
		<h3 align="center">Add New Item</h3>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Qunatity:</h4> 
				<input type="text" name="quantity" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="add_grocery" class="btn btn-success" value="Add Category" class="form-control">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'admin_footer.php';?>