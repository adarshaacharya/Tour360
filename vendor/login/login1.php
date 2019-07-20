<?php 
	

	include '../dbConfig.php';
	session_start();
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$mode=$_POST['mode'];
	$hash=password_hash($pass, PASSWORD_DEFAULT);
if ($_POST['submit']) {
	$sql="SELECT * from $mode where email='$email'";
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    echo $mode;
    foreach ($result as $key => $check) {
    	echo $email;
    	$pwdCheck = password_verify($pass,$check['password']);
    	if($pwdCheck){
    		$_SESSION['name']=$check['name'];
    		$_SESSION['id']=$check['id'];
    		$_SESSION['login']=true;
    		$_SESSION['mode']=$mode;
    	}
    }
}
if ($pwdCheck) {
    		header("Location:../../index.php");
    	}
else{
	header("Location:../../index.php");
}


 ?>