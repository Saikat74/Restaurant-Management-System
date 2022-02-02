<?php 
	SESSION_START();
	include 'main_header.php';
	$servername = "localhost";
	$db_username="root";
	$db_password="";
    $db_name="p_inventory";
    $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);

    if(isset($_POST['login'])){
		$name = $_POST['name'];
        $password = $_POST['password'];
		$type = $_POST['type'];
		
        $query = "SELECT * FROM stuffs WHERE name='$name' and password='$password' and type='$type'";
        $result= mysqli_query($conn,$query);   
            while($row=mysqli_fetch_array($result)){           
            if($row['name']==$name && $row['password']==$password && $row['type']=='Admin'){
				$_SESSION["user"] = $name;
                
               header("Location: adashboard.php");

            }
            elseif($row['name']==$name && $row['password']==$password && $row['type']=='Manager'){
				$_SESSION["user"] = $name;
				header("Location:dashboard.php");
              
			  }
			  
			}

    }
	
?>
<html>
<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="" name="name" class="form-control" required>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" class="form-control" required>
		</div>
		<div class="form-group">
			<h4 class="text">Select user type <select name="type">
			<option value="disabled">Select User</option>
				<option value="Admin">Admin</option>
				<option value="Manager">Manager</option> 
</select>
</h4>
		</div>
		<div class="form-group text-center">
			<input type="submit" name="login" class="btn btn-danger" value="Login" class="form-control">
		</div>
</div>
</form>

<!--login ends -->
<?php include 'main_footer.php';?>
</html>