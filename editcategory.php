<?php 
	include 'manager_header.php';
	require_once 'controllers/FoodController.php';
	$id = $_REQUEST["id"];
	$foods = getFood($id);
	//echo $fid;
?>
<!--edit category starts -->
<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $foods["id"];?>">
			<input type="text" name="name" value="<?php echo $foods["foodname"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" name="price" value="<?php echo $foods["foodprice"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<input type="text" name="fdescription" value="<?php echo $foods["fdescription"];?>" class="form-control">
		</div>
		
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_food" class="btn btn-success" value="Edit Food" class="form-control">
		</div>
	</form>
</div>

<!--edit food ends -->
<?php include 'manager_footer.php';?>