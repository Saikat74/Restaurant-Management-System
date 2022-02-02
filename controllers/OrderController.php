<?php

	require_once 'models/db_connect.php';
	if(isset($_POST["p_order"])){
		//validation
	

		insertOrder('item_name','item_quantity','product_price');
		
	}
	if(isset($_POST["edit_category"])){
		//update category
		updateCategory($_POST["id"],$_POST["name"]);
	}
	function insertOrder(){
		$query = "INSERT INTO ordert VALUES(NULL,'$item_name','$item_quantity','$product_price')";
		execute($query);
		header("Location: cart.php");
		echo '<script>alert("Thanks For the order,Wait for 30mins.We will contact you soon")</script>';
	}

?>