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
	$stuffs = getAllStuffs();
	if(isset($_REQUEST["deleteId"])){
		$deleteId= $_REQUEST["deleteId"];
		deleteStuff($deleteId);
	}
?>
<!--All Categories starts -->

<div class="center">
<h3 class="text" style="margin-left:38%">All Stuffs</h3>
	<a  href="addStuff.php" input type="submit" position="inherit" class="btn btn-success" >Add Stuffs</a>
	<table class="table table-striped" style="width:80%">
	
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th> Password </th>
			<th>type</th>
			<th>age</th>
			<th> salary </th>
			<th>Phone</th>
			<th> Address </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($stuffs as $stuff){
					echo "<tr>";
					echo "<td>".$stuff["id"]."</td>";
					echo "<td>".$stuff["name"]."</td>";
					echo "<td>".$stuff["password"]."</td>";
					
					echo "<td>".$stuff["type"]."</td>";
					echo "<td>".$stuff["age"]."</td>";
					echo "<td>".$stuff["salary"]."</td>";
					
					echo "<td>".$stuff["phone"]."</td>";
					echo "<td>".$stuff["address"]."</td>";
					
					echo "<td></td>";
					echo '<td><a href="editstuff.php?id='.$stuff["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="allstuff.php?deleteId='.$stuff["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>

</script>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>