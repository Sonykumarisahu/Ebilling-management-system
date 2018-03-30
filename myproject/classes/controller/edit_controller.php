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
		//$password = $_POST['password'];
		//$conf_password = $_POST['cpass'];
		if(empty($email_id) || empty($first_name) || empty($last_name) || empty($address) ||empty($phone_no))
		{
			$_SESSION['error_msg'] = 'Empty Fields';
			header('Location: ../../edit_customer.php');
			die();
		}
		/*if($password!=$conf_password) {
			$_SESSION['error_msg'] = 'Password and Confirm Password do not match';
			header('Location: ../../edit_customer.php');
			die();
		}*/
		//echo $user_name." ".$password;
		require_once(dirname(dirname(__FILE__)).'/model/users.php');
		$user = new users;
		$user->setEmail_id($email_id);
		//$user->setUser_id($user_id);
		//$user->setPassword($password);
		$user->setFirst_name($first_name);
		$user->setLast_name($last_name);
		$user->setAddress($address);
		$user->setPhone_no($phone_no);
		require_once(dirname(dirname(__FILE__)).'/service/UserDataService.php');
		$service = new UserDataService;
		if($service->saveUpdateDetails($user))
		{
			header('Location: ../../homepage.php');
		}
		else
		{
			$_SESSION['error_msg']='User Not Updated';
			header('Location: ../../edit_customer.php');
			die();
		}
	}
?>