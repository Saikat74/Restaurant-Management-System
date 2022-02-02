<?php
	require_once 'models/db_connect.php';
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$date="";
	$err_date="";
	$time="";
	$err_time="";
	$hasError=false;
	if(isset($_POST["book_table"])){
		if(empty($_POST["name"])){
			$err_name = "Name required";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["email"])){
			$err_email = "Email required";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(empty($_POST["phone"])){
			$err_phone = "Phone Number required";
		}
		else
		{
			$phone = $_POST["phone"];
		}
		if(empty($_POST["date"])){
			$err_date = "Date required";
		}
		else
		{
			$date = $_POST["date"];
		}
		if(empty($_POST["time"])){
			$err_time = "Time required";
		}
		else
		{
			$time = $_POST["time"];
		}
		
		if(isset($_POST["book_table"])){
		if(!$hasError){
			insertBook($_POST["name"],$_POST["email"],$_POST["phone"],$_POST["date"],$_POST["time"]);
			header("Location: index.php");
			echo '<script>alert("Thank you For Booking!
			We will contact you soon")</script>';
			
		}
	}
	}
	function insertBook($name,$email,$phone,$date,$time){
	
		$query = "INSERT INTO tbooking VALUES(Null,'$name','$email','$phone','$date','$time')";
		execute($query);		
	}
	function getAllBooking(){
		$query = "SELECT * FROM tbooking";
		$tbooking = getArray($query);
		return $tbooking;
	}
	function gettbooking($id){
		$query="SELECT * FROM tbooking WHERE bookid=$id";
		$groceries=getArray($query);
		return $groceries[0];
		
	}
	function deleteBook($bookid){
		$query="DELETE FROM tbooking WHERE id=".$bookid."";
		execute($query);
		header("Location: tbookings.php");
	}

?>