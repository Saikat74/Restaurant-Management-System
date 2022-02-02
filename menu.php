<?php 
	include 'manager_header.php';
	require_once 'controllers/FoodController.php';
	$food= getAllFood();
	//$_REQUEST["deleteId"];
	if(isset($_REQUEST["deleteId"])){
		$deleteId= $_REQUEST["deleteId"];
		deleteFood($deleteId);
	}
	if($_SERVER['REQUEST_METHOD']=="GET"){
		if(isset($_GET['search'])){
			$ss= $_GET['ss'];
			$food=searchFood($ss);
		}
	}
	
	
?>
<div class="center pull-right">
	<form action="menu.php" method="GET">
		<input type="text" placeholder="Search ..." id="search_text" name="ss">
		<input type="submit" name="search">
	</form>
	
</div>
<table class="table table-striped center" id="suggestion">	
</table>
<!--All Categories starts -->

<div class="center">
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($food as $foods){
					echo "<tr>";
					echo "<td>".$foods["id"]."</td>";
					echo "<td>".$foods["fimage"]."</td>";
					echo "<td>".$foods["foodname"]."</td>";
					echo "<td>".$foods["foodprice"]."</td>";
					echo "<td>".$foods["fdescription"]."</td>";
					echo "<td></td>";
					echo '<td><a href="editcategory.php?id='.$foods["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="menu.php?deleteId='.$foods["id"].' " class="btn btn-danger">Delete</td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
</div>


<!--All Categories ends -->
<?php include 'manager_footer.php';?>