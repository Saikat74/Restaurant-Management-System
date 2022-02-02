<?php 
	include 'manager_header.php';
	require_once 'controllers/FoodController.php';
?>
<!--addproduct starts -->
<div class="center">
	<form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text"  name="foodname" class="form-control" required>
		</div>
		
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" name="foodprice" class="form-control" required>
		</div>
		
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" name="fdescription" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" name="fimage" class="form-control" required>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="add_food" value="Add Food" class="form-control">
		</div>
	</form>
</div>
<?php include 'manager_footer.php';?>
