<?php 
if($_POST['submit']){
	if($_POST['mode']=='user'){
		header("Location:user.php");
	}
	if($_POST['mode']=='hotel'){
		header("Location:hotel.php");
	}
	if($_POST['mode']=='guide'){
		header("Location:guide.php");
	}
}




 ?>