<?php 
session_start();
include '../dbConfig.php';
$name=$_POST['name'];
$id=$_POST['$name'];
$uname=$_SESSION['id'];
if ($_POST['submit2']) {
	$sql="INSERT into transaction(guide_id,user_id,status,name) values ('$id','$uname',0,'$name')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		header("Location:profile.php");
	}
}
 ?>