<?php 
	include 'main_header.php';
	
	require_once 'controllers/LoginController.php';
?>
<!--sign up starts -->
<link rel='stylesheet' href='styles/mystyle.css'/>
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<input type="text" name="name"  placeholder="Name" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="text" name="username"  class="form-control" placeholder="Username" onfocusout= "checkUser(this)">
			<span id="err_username"></span>
		</div>
		<div class="form-group">
			<input type="email" name="email" class="form-control"  placeholder="Email" required>
		</div>
		<div class="form-group"> 
			<input type="text" name="phone" class="form-control"  placeholder="Phone" required>
		</div>
		<div class="form-group">
			<input type="text" name="address" placeholder="Address" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password" class="form-control" required>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
</div>

<script>
function checkUser(input){
	var key=input.value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4  && this.status == 200){
			document.getElementById("err_username").innerHTML =this.responseText;
		}
	};
	xhttp.open("get","check_user.php?key="+key,true);
	xhttp.send();
}
</script>
<!--sign up ends -->
<?php include 'main_footer.php'?>