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
	$groceries = getAllGrocery();
	if(isset($_REQUEST["deleteId"])){
		$deleteId= $_REQUEST["deleteId"];
		deleteGrocery($deleteId);
	}
?>
<!--All Categories starts -->

<div class="center">
<h3 class="text" style="margin-left:38%">Inventory</h3>
	<a  href="addgrocery.php" input type="submit" position="inherit" class="btn btn-success" >Add Items</a>
	
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Item Name</th>
			<th> Available Quantity </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($groceries as $grocery){
					echo "<tr>";
					echo "<td>".$grocery["id"]."</td>";
					echo "<td>".$grocery["name"]."</td>";
					echo "<td>".$grocery["quantity"]."</td>";
					echo "<td></td>";
					echo '<td><a href="editgrocery.php?id='.$grocery["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="allgroceries.php?deleteId='.$grocery["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
	<script>
	function get(id){
		return document.getElementById(id);
	}
	function fill_suggest(td){
		get("search_text").value= td.innerHTML;
		
	}
	function search(){
		var text = get("search_text").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","searchcategory.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>