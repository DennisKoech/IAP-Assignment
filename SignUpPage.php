<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="SignUpCSS.php">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
</head>
<body>
	<header>
<div class="navbar">
		<div>
			<h2>THE HIRUZEN</h2>
		</div>
		<ul class="container">
			<li ><a href="LandingPage.php" class="cool-link">Home</a></li>
			<li ><a href="#" class="cool-link">Work</a></li>
			<li ><a href="#" class="cool-link">Life</a></li>
			<li ><a href="Login.php" class="cool-link">Login</a></li>
			<li ><a href="SignUpPage.php" class="cool-link">Register</a></li>
			<li id="Fatty"><a href="#" class="cool-link">Begin</a></li>
			
		</ul>
</div>
</header>
<br>
<br>
<h2>SIGN-UP</h2>
<form action="SignUpHandler.php" method="post" enctype="multipart/form-data">
	<label>Full Name:</label>
	<input type="text" name="name" required="">
	<label>Email:</label>
	<input type="text" name="email" required="">
	<label>Place of Residence:</label>
	<input type="text" name="location" required="">
	<label>Password:</label>
	<input type="Password" name="pass" required="">
	<label>Confirm Password:</label>
	<input type="Password" name="conpass" required="">
	<label>Profile Picture:</label>
	<input type="file" name="photos" required="">
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>