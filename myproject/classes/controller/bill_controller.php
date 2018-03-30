<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//echo 'posted';
		$caf_form_no = $_SESSION['caf_form_no'];
		$serial_no = $_POST['serial_no'];
		$email_id = $_SESSION['email_id'];
		/*if(empty($transaction_id) || empty($product_name) || empty($duration) || empty($price)) 
		{
			$_SESSION['error_msg'] = 'Fill the empty fields';
			header('Location: ../../product_form.php');
			die();
		}
		if($password!=$conf_password) {
			$_SESSION['error_msg'] = 'Password and Confirm Password do not match';
			header('Location: ../../register_form.php');
			die();
		}*/
		//echo $transaction_no." ".$caf_form_no." ".$serial_no." ".$email_id;
	require_once(dirname(dirname(__FILE__)).'/model/bill.php');
		$bill = new bill;
		//$bill->setTransaction_id($transaction_id);
		$bill->setCaf_form_no($caf_form_no);
		$bill->setSerial_no($serial_no);
		//$product->setCaf_form_no($caf_form_no);
		//$product->setCompany_name($company_name);
        $bill->setEmail_id($email_id);	
		require_once(dirname(dirname(__FILE__)).'/service/BillDataService.php');
		$service = new BillDataService;
		if($rs = $service->saveBillDetails($bill))
		{
			echo $rs[0][0];
			//$t = $rs[0][0];
		//$bill->setTransaction_id($rs[0][0]);
			$_SESSION['t'] = $rs[0][0];
			header('Location: ../../bill_form.php');
		}
		else
		{
			$_SESSION['error_msg']='Customer Not Registered';
		    header('Location: ../../make_payment.php');
			die();
		}
	}
?>