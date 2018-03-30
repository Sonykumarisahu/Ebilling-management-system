<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//echo 'posted';
		$serial_no = $_POST['serial_no'];
		$product_name = $_POST['product_name'];
		$duration = $_POST['duration'];
		$price = $_POST['price'];
		if(empty($serial_no) || empty($product_name) || empty($duration) || empty($price)) 
		{
			$_SESSION['error_msg'] = 'Fill the empty fields';
			header('Location: ../../product_form.php');
			die();
		}
		/*if($password!=$conf_password) {
			$_SESSION['error_msg'] = 'Password and Confirm Password do not match';
			header('Location: ../../register_form.php');
			die();
		}*/
		echo $serial_no." ".$product_name." ".$duration." ".$price;
	require_once(dirname(dirname(__FILE__)).'/model/product.php');
		$product = new product;
		$product->setSerial_no($serial_no);
		$product->setProduct_name($product_name);
		//$product->setCaf_form_no($caf_form_no);
		//$product->setCompany_name($company_name);
        $product->setDuration($duration);	
		//$product->setDate_arrival($date_arrival);
		$product->setPrice($price);
		require_once(dirname(dirname(__FILE__)).'/service/ProductDataService.php');
		$service = new ProductDataService;
		if($service->saveProductDetails($product))
		{
			//$_SESSION['serial_no'] = $serial_no;
			header('Location: ../../homepage1.php');
		}
		else
		{
			$_SESSION['error_msg']='Product Not Registered';
		     header('Location: ../../product_form.php');
			die();
		}
	}
?>