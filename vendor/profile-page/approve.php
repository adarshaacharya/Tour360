<?php 
session_start();
include '../dbConfig.php';
$hotel_id=$_SESSION['id'];
$sql="UPDATE transaction set status=1 where hotel_id=$hotel_id and user_id=8";
$result=mysqli_query($conn,$sql);
if($result){
	echo "success";
}

 ?>