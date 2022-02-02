<?php 
SESSION_START();
if($_SESSION["user"]==true){
	echo "Welcome as"." ".$_SESSION["user"];
}
else{
	header('location:index.php');
}

include 'admin_header.php';
require_once 'controllers/FoodController.php';
$sales = getAllSales();
		
?>


<div class="center">
<h3 class="text" style="margin-left:38%">All Stuffs</h3>
	<table class="table " style="width=100%">
	
		<thead>
			<th>Sl#</th>
			<th>Customer Name</th>
			<th> Food name</th>
			<th>Price</th>
			<th>Date</th>
			<th> Time </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($sales as $sale){
					echo "<tr>";
					echo "<td>".$sale["id"]."</td>";
					echo "<td>".$sale["cn"]."</td>";
					echo "<td>".$sale["fname"]."</td>";
					echo "<td>".$sale["price"]."</td>";
					echo "<td>".$sale["date"]."</td>";
					echo "<td>".$sale["time"]."</td>";
					
					echo "<td></td>";
					
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>

</script>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>