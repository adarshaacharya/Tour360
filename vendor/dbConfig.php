<?php 
$Servername="localhost";
	$dbUsername="root";
	$dbpassword="";
	$dbName="projecteverest";
	$conn = mysqli_connect($Servername,$dbUsername,$dbpassword,$dbName);

	if(!$conn){
		die("Failed Connection".mysqli_connect_error());

}

 ?>