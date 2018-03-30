<?php
  session_start();
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
	 $email_id = $_SESSION['email_id'];
	 //$email_id = $_POST['email_id'];
	 $old_pass = $_POST['old_pass'];
     $new_pass = $_POST['new_pass'];
	 $conf_pass = $_POST['conf_pass'];
	  if(empty($old_pass)||empty($new_pass) || empty($conf_pass)) {
	    $_SESSION['error_msg']='Empty Oldpassword, Newpassword and Confirmpassword';
        header('Location: ../../updatepassword_form.php');
	    die();
     }
	 if($new_pass!=$conf_pass) 
	 {
			$_SESSION['error_msg'] = 'Password and Confirm Password do not match';
			header('Location: ../../updatepassword_form.php');
			die();
	}
//require_once(dirname(dirname(__FILE__)).'/model/users.php');
	 require_once(dirname(dirname(__FILE__)).'/model/login.php');
     $login= new login;
	 //$user = new users;
	// $user->setEmail_id($email_id);
	 //$login->setEmail_id($email_id);
	 $login->setEmail_id($email_id);
     $login->setPassword($old_pass);
     require_once(dirname(dirname(__FILE__)).'/service/login_service.php');
       	$service= new LoginService;
       	if($service->isLoginValid($login))
       	{
	     	//$_SESSION['email_id'] = $email_id;
			$login->setPassword($new_pass);
			$service->saveNewPassword($login);
           	header('Location: ../../homepage.php');
       	}
	   	else
	   	{
		    $_SESSION['error_msg']='Invalid password';
            header('Location: ../../updatepassword_form.php');
	        die();
	   	}
    }
?>