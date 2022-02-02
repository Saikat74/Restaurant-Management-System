<?php
	SESSION_START();
	include 'admin_header.php';
	require_once 'controllers/GroceryController.php';
	$id = $_REQUEST["id"];
	$grocery = getGrocery($id);
?>
<!--edit category starts -->
<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Grocery item Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $grocery["id"];?>">
			<input type="text" name="name" value="<?php echo $grocery["name"];?>" class="form-control">
			</div>
		<div class="form-group">

			<h4 class="text">Available Quantity:</h4> 
			<input type="hidden" name="id" value="<?php echo $grocery["id"];?>">
			<input type="text" name="quantity" value="<?php echo $grocery["quantity"];?>" class="form-control">

		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_grocery" class="btn btn-success" value="Edit Grocery" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>