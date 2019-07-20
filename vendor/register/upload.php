<?php 
	include '../dbConfig.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$mode=$_POST['mode'];
	$hash=password_hash($pass, PASSWORD_DEFAULT);
	$targetDirUser = "upload/user/";
	$targetDirGuide= "upload/guide/";
	$targetDirHotel="upload/hotel/";
	$fileUser=basename($_FILES["photo"]["name"]);
	$fileGuide=basename($_FILES["photo"]["name"]);
	$fileHotel=basename($_FILES["photo"]["name"]);
	$userpath=$targetDirUser . $fileUser;
	$guidepath = $targetDirGuide . $fileGuide;
	$hotelpath = $targetDirHotel . $fileHotel;
	$userType = pathinfo($userpath,PATHINFO_EXTENSION);
	$guidetype = pathinfo($guidepath,PATHINFO_EXTENSION);
	$hoteltype = pathinfo($hotelpath,PATHINFO_EXTENSION);
	if ($_POST['submit']&& !empty($_FILES["photo"]["name"])) {
		$allowTypes = array('jpg','png','jpeg','gif');
		if($mode=='user'){
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			if(in_array($userType, $allowTypes)){
	        // Upload file to server
	        	if(move_uploaded_file($_FILES["photo"]["tmp_name"], $userpath)){
	            // Insert image file name into database
	            	$insert = $conn->query("INSERT into user(photo,name,email,password,phone,address) VALUES ('".$fileUser."','$name','$email','$hash','$phone','$address')");
	            	if($insert){
	                	$statusMsg = "The file has been uploaded successfully.";
	            	}
	            	else{
	                $statusMsg = "File upload failed, please try again.";
	            	} 
	        	}
	        	else{
	            	$statusMsg = "Sorry, there was an error uploading your file.";
	        	}
	    	}
	    	else{
	        	$statusMsg = 'File Format Incompatible';
	    	}
		}
		if ($mode=='guide') {
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$skill=$_POST['skill'];
			$experience=$_POST['experience'];
			if(in_array($guidetype, $allowTypes)){
	        // Upload file to server
	        	if(move_uploaded_file($_FILES["photo"]["tmp_name"], $guidepath)){
	            // Insert image file name into database
	            	$insert = $conn->query("INSERT into guide(photo,name,email,password,phone,address,skill,experience) VALUES ('".$fileGuide."','$name','$email','$hash','$phone','$address','$skill','$experience')");
	            	if($insert){
	                	$statusMsg = "The file has been uploaded successfully.";
	            	}
	            	else{
	                $statusMsg = "File upload failed, please try again.";
	            	} 
	        	}
	        	else{
	            	$statusMsg = "Sorry, there was an error uploading your file.";
	        	}
	    	}
	    	else{
	        	$statusMsg = 'File Format Incompatible';
	    	}
		}
		if ($mode=='hotel') {
			$address=$_POST['address'];
			$service=$_POST['service'];
			$description=$_POST['description'];
			$price=$_POST['price'];
			$room=$_POST['room'];

			if(in_array($hoteltype, $allowTypes)){
	        // Upload file to server
	        	if(move_uploaded_file($_FILES["photo"]["tmp_name"], $hotelpath)){
	            // Insert image file name into database
	            	$insert = $conn->query("INSERT into hotel(photo,name,email,password,location,services,description,totalRoom,price) VALUES ('".$fileHotel."','$name','$email','$hash','$address','$service','$description','$room','$price')");
	            	if($insert){
	                	$statusMsg = "The file has been uploaded successfully.";
	            	}
	            	else{
	                $statusMsg = "File upload failed, please try again.";
	            	} 
	        	}
	        	else{
	            	$statusMsg = "Sorry, there was an error uploading your file.";
	        	}
	    	}
	    	else{
	        	$statusMsg = 'File Format Incompatible';
	    	}
		}
	}
	if ($insert) {
		header("Location:../../index.php");
	}
?>