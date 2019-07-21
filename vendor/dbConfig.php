<?php 
$Servername="localhost";
	$dbUsername="newuser";
	$dbpassword="password";
	$dbName="projecteverest";
	$conn = mysqli_connect($Servername,$dbUsername,$dbpassword,$dbName);

	if(!$conn){
		die("Failed Connection".mysqli_connect_error());

}

 ?>
