<?php
	require_once 'models/db_connect.php';
	if(isset($_POST["add_grocery"])){
		//validation
		insertGrocery($_POST["name"],$_POST["quantity"]);
		
	}
	if(isset($_POST["edit_grocery"])){
		//update category
		updateGrocery($_POST["id"],$_POST["name"],$_POST["quantity"]);
	}
	function insertGrocery($name,$quantity){
		$query = "INSERT INTO groceries VALUES(NULL,'$name','$quantity')";
		execute($query);
		header("Location: allgroceries.php");
		echo '<script>alert("Grocery Item Added")</script>';
	}
	function getAllGrocery(){
		$query = "SELECT * FROM groceries";
		$groceries = getArray($query);
		return $groceries;
	}
	function getGrocery($id){
		$query="SELECT * FROM groceries WHERE id=$id";
		$groceries=getArray($query);
		return $groceries[0];
		
	}
	function updateGrocery($id,$name,$quantity){
		$query="UPDATE groceries SET name='$name', quantity='$quantity' WHERE id= $id";
		execute($query);
		header("Location: allgroceries.php");
		echo '<script>alert("Grocery Item Added")</script>';echo '<script>alert("Grocery Item Added")</script>';
	}
	
	function deleteGrocery($id){
		$query="DELETE FROM groceries WHERE id=".$id."";
		execute($query);
		header("Location: allgroceries.php");
	}
?>