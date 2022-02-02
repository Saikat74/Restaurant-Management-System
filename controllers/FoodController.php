<?php
	require_once 'models/db_connect.php';
	if(isset($_POST["add_food"])){
		$target_dir ="styles/Storage/image/";
		$target_file ="styles/Storage/image/". basename($_FILES["fimage"]["name"]);
		move_uploaded_file($_FILES["fimage"]["tmp_name"],$target_file);
		//validation
		insertFood($_POST["id"],$_POST["foodname"],$_POST["foodprice"],$target_file,$_POST["fdescription"]);
		
	}
	if(isset($_POST["edit_food"])){
		//update food
		updateFood($_POST["id"],$_POST["name"],$_POST["price"],$_POST["fdescription"]);
	}
	function insertFood($id,$foodname,$foodprice,$fimage,$fdescription){
		$query="INSERT INTO food VALUES(Null,'$foodname','$foodprice','$fimage','$fdescription')";
		execute($query);
		header("Location: menu.php");
		echo '<script>alert("Food Item Successfully added")</script>';
	}
	function getAllFood(){
		$query = "SELECT * FROM food";
		$food = getArray($query);
		return $food;
	}
	function getAllOrder(){
		$query = "SELECT * FROM ordert";
		$order = getArray($query);
		return $order;
	}
	function getAllSales(){
		$query = "SELECT * FROM sales";
		$sales = getArray($query);
		return $sales;
	}
	
	function getFood($id){
		$query="SELECT * FROM food WHERE id= $id";
		$food=getArray($query);
		return $food[0];
		
	}
	function updateFood($id,$name,$price,$fdescription){
		$query="UPDATE food SET foodname='$name',foodprice='$price',fdescription='$fdescription' WHERE id= $id";
		execute($query);
		header("Location: menu.php");
	}
	function deleteFood($id){
		$query="DELETE FROM food WHERE id=".$id."";
		execute($query);
		header("Location: menu.php");
	}
?>