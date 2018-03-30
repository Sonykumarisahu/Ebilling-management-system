<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//echo 'posted';
		$email_id = $_POST['email_id'];
		require_once(dirname(dirname(__FILE__)).'/model/users.php');
           $user = new users;
           $user->setEmail_id($email_id);
		//$login->setPassword($password);
			
             require_once(dirname(dirname(__FILE__)).'/service/ForgotService.php');
            $service = new ForgotService();
            if($service->isEmailValid($user))
             {
	             $_SESSION['email_id'] = $email_id;
				  require_once "Mail-1.2.0/Mail.php";
                  $from = "<sony20jsr@gamil.com>";
                  $to = "<".$email_id.">";
                  $subject = "HI !";
                  $body = " Thank u.....";
                  $host = "smtp.gmail.com";
                  $port = "587";
                  $username = "sony20jsr@gmail.com";
                  $password = "m@@p@p@27";
                  $headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);
                  $smtp = Mail::factory('smtp', array('host' => $host,'port' => $port,'auth' => true,'username' => $username,'password' => $password));
				 $mail = $smtp->send($to, $headers, $body);
				if(PEAR::isError($mail))
				{    
				     header('Location: ../../homepage.php');
	                 echo("<p>".$mail->getMessage()."</p>");
                  }
                  else
                  {
	                 echo("<p> Message successfully send</p>");
                  }
			      header('Location: ../../loginform.php');
                 }
			 /*             else
             {
	             $_SESSION['error_msg']='Invalid email id ';
	             header('Location: ../../forgotpass.php');
	             die();
             }*/
        
}
?> 