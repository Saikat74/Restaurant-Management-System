<?php
	require_once 'controllers/tbbookController.php'
?>

<html>
<link rel='stylesheet' href='styles/index.css' />
<title>Khabrer Dokan</title>
</head>
<body>

	<div class="wrapper">
	  <ul type="none">
		  <li><a href="index.php">Home</a></li>  
		  <li><a href="index.php">Menu</a></li>  
		  <li><a href="#reserveation">Reservation</a></li>
		  <li><a href="signup.php">Sign Up</a></li>
		  <li>Log In
			  <ul type="none">
				  <li><a href="login.php">User Login</a></li>
				  <li><a href="login_admin.php">Admin Login</a></li>
			  </ul>
		  </li>
		  <li><a href="#story">About</a></li>
		  <li><a href="Contact.php">Contact</a></li>
		  </ul>
		  
</div>


	<div class="Header1">
		  <p>Welcome to Khabarer Dokan</p>
		  <h4>As far back as I can remember, I have always liked going out to eat. Two of my favorite restaurants are Jake’s and McDonald’s.
		  Though both are places to dine they have their differences in their ambiance, waiting, and expense. When deciding where to go to eat,
		  I have three things to think about. I must consider the atmosphere or where I want to go. The amount of time I have is another consideration.
		  The amount of money that I am able to spend is a big influence.The atmosphere at Jake’s is casual, and people came to spend several hours.
		  Jake’s has a waiting room with long, leather-topped benches to sit on while waiting. Some tables are round and some are long rectangles,
		  so everything can fit on them.</h4>
		<div class="orderpg">
		<h4>Feeling Hungry?</h4>
		<a  href="login.php" role="button" > Order Now </a>
		</div>	

	</div>
        
	<section id="reserveation">	
	<div class="booking">
					
					<form action=""  method="post" class="appointment-form">
					<div class="row">
						<h3>Book your Table</h3>
								
								<div class="form-group">
									<input type="name" name="name" class="form-control" placeholder="Name" required>
								</div>
							
							
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
							
						
								<div class="form-group">
									<input type="phone" name="phone" class="form-control" placeholder="Phone" required>
								</div>
							
							
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="date" name="date" class="form-control book_date" placeholder="Check-In" required>
									</div>
								</div>
						
							
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="time" name="time" class="form-control book_time" placeholder="Time" required>
									</div>
								</div>

								<div>
									<input type="submit" name="book_table" value="Book Your Table Now" class="btn">
								</div>
							
						</div>
					</form>
					</section>
				
					<section id="story">
					<div class="Story">
						<h4>About Us</h4>
						<p>In 2020,we opened our doors at a very small place named Urban Void storefront with a very big idea. 
						Instead of fast food, we’d serve fast fuel: shakes that were delicious, nutritious, and protein-packed.
						It was a success from the start but quickly became something even bigger... a game changer.
						We saw what was happening and got excited. Let’s keep going. So we discovered quinoa and expanded 
						the menu to serve a full selection of high-protein salads, wraps, and bowls customizable for all diets.
						Every body loved it. The all-day power of protein grew in popularity. We all started eating, feeling and moving better.
						</p>
					</div>
					</section>
					</div>

</body>
</html>
