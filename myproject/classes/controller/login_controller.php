<?php
   session_start();
  /* require_once("service_login.php");
	$obj = new LoginService;
	$obj->isLoginValid($login);*/
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
	 $email_id = $_POST['email_id'];
     $password = $_POST['password'];
	  if(empty($email_id)||empty($password)) {
	    $_SESSION['error_msg']='Empty Email ID and Password';
        header('Location: ../../loginform.php');
	    die();
     }
	 //require_once(dirname(dirname(__FILE__)).'/model/users.php');
	 require_once(dirname(dirname(__FILE__)).'/model/login.php');
     $login= new login;
	 //$user = new users;
	// $user->setEmail_id($email_id);
	 //$login->setEmail_id($user);
	 $login->setEmail_id($email_id);
     $login->setPassword($password);
     $role = $_POST['role'];
	 if($role=='2') 
	 {
		 //echo "Welcome Admin";
		 require_once(dirname(dirname(__FILE__)).'/service/admin_service.php');
     	$service= new AdminService;
     	if($service->isLoginValid($login))
     	{
	   		//$_SESSION['email_id'] = $email_id;
       		header('Location: ../../homepage1.php');
     	}
	 	else
	 	{
		 	$_SESSION['error_msg']='Invalid Email id or password';
       		header('Location: ../../loginform.php');
	   		die();
	 	}
   } else {
	   	echo "Customer Login";
       	require_once(dirname(dirname(__FILE__)).'/service/login_service.php');
		require_once(dirname(dirname(__FILE__)).'/service/UserDataService.php');
       	$service= new LoginService;
		$uds = new UserDataService;
       	if($service->isLoginValid($login))
       	{
	     	$_SESSION['email_id'] = $email_id;
			$rs_array = $uds->getCafFormNoById($email_id);
			$_SESSION['caf_form_no'] = $rs_array[0][0];
           	header('Location: ../../homepage.php');
       	}
	   	else
	   	{
		    $_SESSION['error_msg']='Invalid Email id or password';
            header('Location: ../../loginform.php');
	        die();
	   	}
    }
 }
?>