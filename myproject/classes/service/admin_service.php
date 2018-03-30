<?php
require_once(dirname(dirname(__FILE__))."/DBConnection/MyConnection.php");
class AdminService
{
	function isLoginValid($login)
	{
		$query = "select email_id, password from admin_table where email_id = '".$login->getEmail_id()."' and password = '".$login->getPassword()."'";
		//echo $query;

        $obj = new MyConnection;
        $result = $obj->execute_query($query);
        if($result) {
        	echo "query executed";
            /*if($rs = mysql_fetch_array($result, MYSQL_NUM)) {
                return true;
            } else {
                return false;
            }
        }
        else {
        	//echo "query not executed";
        	return false;
        }*/
		$rs_array = $obj->get_result_set($result);
		if (empty($rs_array))
		{
			return false;
		}
		else 
		{
		    return true;
		}
	}
}
}
?>