<?php 
require_once("DBCon.php");
if(isset($_POST["submit"])){
if($_POST['pass'] !== $_POST['conpass']){
		header("Location: ../IAPassignment/SignUpPage.php?message=ConfirmPassword");
		exit();
}else{
$name=$_POST["name"];
$email=$_POST["email"];
$location=$_POST["location"];
$pass=$_POST["pass"];
$Images=$_FILES["photos"];
$original_file_name=$_FILES["photos"]["name"];
$file_tmp_location=$_FILES["photos"]["tmp_name"];
$file_type=substr($original_file_name,strpos($original_file_name,'.'),strlen($original_file_name));
$file_path = "assets/";
$new_file_name = time().$file_type;
if(move_uploaded_file($file_tmp_location, $file_path.$new_file_name)){
	$sql="INSERT INTO `users`(`ID`, `Name`, `Email`, `Reside`, `Pass`,`PFP`) VALUES (NULL,'$name','$email','$location','$pass','$new_file_name')";
	$query = mysqli_query($Link,$sql);
	if($query){
		header("Location: ../IAPassignment/LandingPage.php?message=success");
		exit();
	}else{
		header("Location: ../IAPassignment/LandingPage.php?message=failure");
		exit();
	}
}
}
}
?>