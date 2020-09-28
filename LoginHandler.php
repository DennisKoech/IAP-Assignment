<?php
if (isset($_POST['submit'])) {
	# code...

require_once("DBCon.php");
$uname = $_POST['email'];
$EnterKey = $_POST['pass'];
if(empty($uname)||empty($EnterKey)){
	header("Location: ../IAPassignment/Login.php?error=emptyfield&email=".$uname);
	exit();
}
else{
	$sql = "SELECT * FROM `users` WHERE `Email` = ? AND `Pass` = ?";
	$stmt = mysqli_stmt_init($Link);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: ../IAPassignment/Login.php?error=dataBerr");
		exit();
	}else{
		mysqli_stmt_bind_param($stmt,"ss",$uname,$EnterKey);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if($row=$result->fetch_assoc()){
				session_start();
				$_SESSION['id'] = $row['ID'];
				$_SESSION['email']=$row['Email'];
				$_SESSION['name'] = $row['Name'];
				$_SESSION['Location']=$row['Reside'];
				$_SESSION['pfp']=$row['PFP'];
				header("Location: ../IAPassignment/usersLandingPage.php?Login=success");
				exit();	
		}else{
		header("Location: ../IAPassignment/Login.php?error=NonUser");
		exit();
		}
	}
}
}
?>
