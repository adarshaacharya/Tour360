<?php 
session_start();
include '../dbConfig.php';
$rating=$_POST['rating'];
$review=$_POST['review'];
if ($_POST['submit']) {
	$sql="INSERT into rating(mode,name,rating,feedback) values('Place','Mt.Everest','$rating','$review')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		header("Location:profile.php");
	}
}


 ?>