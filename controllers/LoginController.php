<?php
	SESSION_START(); 
	require_once 'models/db_connect.php';
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$password="";
	$err_password="";
	
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name = "Name required";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_username = "Username required";
		}
		else
		{
			$username = $_POST["username"];
		}
		if(empty($_POST["email"])){
			$err_email = "Email required";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(empty($_POST["phone"])){
			$err_phone = "Phone required";
		}
		else
		{
			$phone = $_POST["phone"];
		}
		if(empty($_POST["address"])){
			$err_address = "Address required";
		}
		else
		{
			$address = $_POST["address"];
		}
		if(empty($_POST["password"])){
			$err_password = "Password required";
		}
		else
		{
			$password = $_POST["password"];
		}
		if(!$hasError){
			insertUser($name,$username,$_POST["email"],$_POST["phone"],$_POST["address"],$_POST["password"]);
		}
	}
	if(isset($_POST["login"])){
		//validation
		if(!$hasError){
			//authenticate
			if(authenticate($_POST["username"],$_POST["password"])){
				$_SESSION["user"]= $_POST["username"];
				setcookie('usertype','Type = Customer',time()+15);
				header("Location: cart.php");
				
			}else{
				echo '<script>alert("Username password invalid")</script>';
			}
		}
	}
	function checkUser($username){
		$query = "SELECT name from users WHERE username = '$username';";
		$user = getArray($query);
		return $user;
	}
	function insertUser($name,$username,$email,$phone,$address,$password){
		$password = md5($password);
		$query = "INSERT INTO users VALUES(Null,'$name','$username','$email','$phone','$address','$password')";
		execute($query);		
	}
	function authenticate($username,$password){
		$password = md5($password);
		$query = "SELECT username from users WHERE username='$username' and password='$password'";
		$user=getArray($query);
		return $user;
	}

?>