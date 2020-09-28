<?php 
session_start();
require_once("DBCon.php");
$id=$_SESSION['id'];
$pfp=$_SESSION['pfp'];
$path = "assets/";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
			<li ><a href="logout.php" class="cool-link">Logout</a></li>
		</ul>
</div>
	<br>
	<br>
	<div class="howl">
	<?php echo '<img src="'.$path.$pfp.'";'?>
	<br>
	<br>
	<span><?php echo $_SESSION['name']; ?></span>
	<span><?php echo $_SESSION['email'];?></span>
	<span><?php echo $_SESSION['Location'];?></span>
</div>
</body>
</html>