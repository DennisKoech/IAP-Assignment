<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="SignUpCSS.php">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
</head>
<body>
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
		</ul>
</div>
<br>
<br>
<form action="LoginHandler.php" method="post">
	<label for="email">Email:</label>
	<input type="text" name="email" required="">
	<label for="pass">Password:</label>
	<input type="password" name="pass" required="">
	<button type="submit" name="submit">Login</button>
</form>
</body>
</html>