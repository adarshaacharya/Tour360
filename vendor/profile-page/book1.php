<?php 
session_start();
include '../dbConfig.php';
$name=$_POST['David'];
echo $name;
$uname=$_SESSION['id'];
if ($_POST['submit2']) {
	$sql="INSERT into transaction(guide_id,user_id,status,name) values ('$name','$uname',0,'David')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		header("Location:profile.php");
	}
}
 ?>