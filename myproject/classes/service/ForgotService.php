<?php
require_once(dirname(dirname(__FILE__))."/DBConnection/MyConnection.php");
class ForgotService
{
  function isEmailValid($login)
	{
		$query = "select email_id from login where email_id = '".$login->getEmail_id()."'";
		//echo $query;

        $obj = new MyConnection;
        $result = $obj->execute_query($query);
        $rs_array = $obj->get_result_set($result);
		if(empty($rs_array)) 
		{
			return false;
		}
		else 
		{
			return true;
		}
	}
}
?>