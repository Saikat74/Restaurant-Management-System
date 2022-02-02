<?php
	SESSION_START();
	if($_SESSION["user"]==true){
		echo "Welcome as"." ".$_SESSION["user"];
	}
	else{
		header('location:index.php');
	}
	include 'admin_header.php';
	require_once 'controllers/tbbookController.php';
	
	$tbooking = getAllBooking();
	if(isset($_REQUEST["deleteId"])){
		$deleteId= $_REQUEST["deleteId"];
		deleteBook($deleteId);
	}
?>
<!--All Categories starts -->

<div class="center" width="60%">
	<h3 class="text" align="Center">All Bookings</h3>
	<table class="table table-striped" >
		<thead>
			<th>Sl#</th>
			<th>Customer Name</th>
			<th> Email </th>
			<th>Phone no</th>
			<th> Date </th>
			<th>Time</th>

			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($tbooking as $tbook){
					echo "<tr>";
					echo "<td>".$tbook["bookid"]."</td>";
					echo "<td>".$tbook["name"]."</td>";
					echo "<td>".$tbook["email"]."</td>";
					echo "<td>".$tbook["phone"]."</td>";
					echo "<td>".$tbook["date"]."</td>";
					echo "<td>".$tbook["time"]."</td>";
					echo "<td></td>";
					echo '<td><a href="tbookings.php?deleteId='.$tbook["bookid"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>