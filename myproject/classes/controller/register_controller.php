<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//echo 'posted';
		//$user_id = $_POST['user_id'];
		$email_id = $_POST['email_id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$phone_no = $_POST['phone_no'];
		//$image = $_FILES["image"]["name"];
		$password = $_POST['password'];
		$conf_password = $_POST['cpass'];
		if(empty($email_id) ||empty($password) || empty($first_name) || empty($last_name) || empty($address) ||empty($phone_no) ||empty($conf_password))
		{
			$_SESSION['error_msg'] = 'Empty Fields';
			header('Location: ../../registerform.php');
			die();
		}
		if($password!=$conf_password) {
			$_SESSION['error_msg'] = 'Password and Confirm Password do not match';
			header('Location: ../../registerform.php');
			die();
		}
		
		$target_dir = "../../images/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		/*
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		*/
		// Check if file already exists
		/*
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		*/
		// Check file size
		/*
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		*/
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		//echo $user_name." ".$password;
		require_once(dirname(dirname(__FILE__)).'/model/users.php');
		$user = new users;
		$user->setEmail_id($email_id);
		//$user->setUser_id($user_id);
		$user->setPassword($password);
		$user->setFirst_name($first_name);
		$user->setLast_name($last_name);
		$user->setAddress($address);
		$user->setPhone_no($phone_no);
		$user->setImage($_FILES["image"]["name"]);
		require_once(dirname(dirname(__FILE__)).'/service/UserDataService.php');
		$service = new UserDataService;
		if($service->saveUserDetails($user))
		{
			header('Location: ../../loginform.php');
		}
		else
		{
			$_SESSION['error_msg']='User Not Created';
			header('Location: ../../registerform.php');
			die();
		}
}
?>