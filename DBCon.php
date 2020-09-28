<?php

$server = "127.0.0.1";
$Uname = "root";
$password= "";
$database= "iapdb";
$Link = mysqli_connect($server,$Uname,$password,$database);

if(!$Link){
	die("Could not establish link".mysql_error() );
}


?>