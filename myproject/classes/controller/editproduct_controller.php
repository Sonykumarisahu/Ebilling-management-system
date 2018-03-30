<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//echo 'posted';
		//$user_id = $_POST['user_id'];
		$serial_no = $_POST['serial_no'];
		$product_name = $_POST['product_name'];
		$duration = $_POST['duration'];
		$price = $_POST['price'];
		//$phone_no = $_POST['phone_no'];
		//$password = $_POST['password'];
		//$conf_password = $_POST['cpass'];
		/*if(empty($email_id) || empty($first_name) || empty($last_name) || empty($address) ||empty($phone_no))
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
		require_once(dirname(dirname(__FILE__)).'/model/product.php');
		$product = new product;
		$product->setSerial_no($serial_no);
		//$user->setUser_id($user_id);
		//$user->setPassword($password);
		$product->setProduct_name($product_name);
		$product->setDuration($duration);
		$product->setPrice($price);
		//$user->setPhone_no($phone_no);
		require_once(dirname(dirname(__FILE__)).'/service/ProductDataService.php');
		$service = new ProductDataService;
		if($service->saveUpdateDetails($product))
		{
			header('Location: ../../homepage1.php');
		}
		else
		{
			$_SESSION['error_msg']='User Not Updated';
			header('Location: ../../editproduct_controller.php');
			die();
		}
	}
?>