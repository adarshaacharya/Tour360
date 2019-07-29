<?php 
session_start();
include '../dbConfig.php';
$name=$_POST['name'];
$id=$_POST['$name'];
$uname=$_SESSION['id'];
if ($_POST['submit1']) {

echo $uname;
	$sql="INSERT into transaction(hotel_id,user_id,status,name) values ('$name','$uname',0,'$name')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		header("Location:profile.php");
	}
} ?>