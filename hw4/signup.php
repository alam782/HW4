<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup </title>
  <link rel="stylesheet" type="text/css" href="style.css" media="all">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../script/function.js" type="text/javascript"> </script>
</head>
<body>
<ul>
  <li><a class="active" href="index.php">Home </a></li> 
  <li><a href="signup.php">Signup</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>



<div class="contain">

	 	<fieldset>
	     <div class="header">
		    <h2>Signup Here</h2>
		 </div>
		 
		 <form class="form-group" id="sform" onsubmit=" return formvali();" action="" method="POST">
		 
		   
		 <div class="regi">
		     
		 
		     <div class="user">
			 <div>
			     <label for="username">Username:</label>
				 <input type="text" name="username" placeholder="Write your name" required>
			 </div>
			 <div>
			     <label for="username">Phone:</label>
				 <input type="number"  name="phone" placeholder="Enter your phone" required>
			 </div>
			 
			 <div>
			     <label for="email">Email:</label>
				 <input type="email" name="email" placeholder="Enter your email" required>
			 </div>
			 
			 <div>
			     <label for="password">Password:</label>
				 <input type="password" name="password" placeholder="Enter your Password" required>
			 </div>
			 
			
			 </div>
		</div>
			 
			 <div class="submit">
			     <button type="submit" name="reg_user">Signup</button>
				 <p>Please login here.</p>
				 
				 <a href="#"><b>log in<b></a>
			 </div>
			 
			 
			  
			
		 </form>
	</fieldset>

	 </div>
</body>
</html>
