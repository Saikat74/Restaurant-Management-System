<?php 
	include 'admin_header.php';
	require_once 'controllers/StuffController.php';
	SESSION_START();
	$id = $_REQUEST["id"];
	$stuff = getStuff($id);
?>
<!--edit category starts -->
<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
	<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $stuff["id"];?>">
				<input type="text" name="name" class="form-control" value="<?php echo $stuff["name"];?>" placeholder="Name" required>
			</div>
			<div class="form-group">
				<input type="text" name="password" class="form-control" value="<?php echo $stuff["password"];?>" placeholder="Password" required>
			</div>
			<div class="form-group">
				<input type="text" name="type" class="form-control" value="<?php echo $stuff["type"];?>"  placeholder="User Type" required>
			</div>
			<div class="form-group"> 
				<input type="text" name="age" class="form-control"  value="<?php echo $stuff["age"];?>" placeholder="Age" required>
			</div>
			<div class="form-group">
				<input type="text" name="salary" class="form-control" value="<?php echo $stuff["salary"];?>" placeholder="Salary" required>
			</div>
			<div class="form-group">
				<input type="phone" name="phone" class="form-control" value="<?php echo $stuff["phone"];?>" placeholder="Phone" required>
			</div>
			<div class="form-group">
				<input type="text" name="address" class="form-control" value="<?php echo $stuff["address"];?>" placeholder="Address" required>
			</div>

		<div class="form-group text-center">
			
			<input type="submit" name="edit_stuff" class="btn btn-success" value="Edit stuff" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>