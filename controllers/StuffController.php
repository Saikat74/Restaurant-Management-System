<?php
	SESSION_START();
	require_once 'models/db_connect.php';
	
	if(isset($_POST["add_stuff"])){
		//validation
		insertStuff($_POST["name"],$_POST["password"],$_POST["type"],$_POST["age"],$_POST["salary"],
		$_POST["phone"],$_POST["address"]);
		
	}
	if(isset($_POST["edit_stuff"])){
		//update category
		updateStuff($_POST["id"],$_POST["name"],$_POST["password"],$_POST["type"],$_POST["age"],$_POST["salary"],$_POST["phone"],$_POST["address"]);
	}
	function insertStuff($name,$password,$type,$age,$salary,$phone,$address){
		$password = md5($password);
		$query = "INSERT INTO stuffs VALUES(NULL,'$name','$password','$type','$age','$salary','$phone','$address')";
		execute($query);
		header("Location: allstuff.php");
		echo '<script>alert("New Stuff Added")</script>';
	}
	function getAllStuffs(){
		$query = "SELECT * FROM stuffs";
		$stuffs = getArray($query);
		return $stuffs;
	}
	function getStuff($id){
		$query="SELECT * FROM stuffs WHERE id=$id";
		$stuffs=getArray($query);
		return $stuffs[0];
		
	}
	function updateStuff($id,$name,$password,$type,$age,$salary,$phone,$address){
		$query="UPDATE stuffs SET name='$name',password='$password',type='$type',age='$age',salary='$salary',phone='$phone',address='$address' WHERE id= $id";
		execute($query);
		header("Location: allstuff.php");	
	}
	function deleteStuff($id){
		$query="DELETE FROM stuffs WHERE id=".$id."";
		execute($query);
		echo'<script>alert("User Deleted")</script>';
		header("Location: allstuff.php");
	}

	
?>