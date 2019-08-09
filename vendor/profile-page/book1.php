<?php 
session_start();
include '../dbConfig.php';


$name=$_POST['name'];
$id=$_POST["$name"];
$uname=$_SESSION['id'];
$u_name=$_POST['u_name'];
$u_phone=$_POST['phone'];
$u_email=$_POST['u_email'];
$NoPeople=$_POST['noPeople'];
if ($_POST['submit2']) {
	$sql="INSERT into transaction(guide_id,user_id,status,name,u_name,u_phone,u_email,NoPeople) values ('$id','$uname',0,'$name','$u_name','$u_phone','$u_email','$NoPeople')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		header("Location:profile.php");
	}
}
 ?>