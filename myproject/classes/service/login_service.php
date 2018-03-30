<?php
require_once(dirname(dirname(__FILE__))."/DBConnection/MyConnection.php");
class LoginService
{
	function isLoginValid($login)
	{
		$query = "select email_id, password from login where email_id = '".$login->getEmail_id()."' and password = '".$login->getPassword()."'";
		//echo $query;

        $obj = new MyConnection;
        $result = $obj->execute_query($query);
        if($result) {
        	echo "query executed";
		}
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
			function saveNewPassword($login) 
			{
				echo $login->getEmail_id()." ".$login->getPassword();
				$query = "update login set password = '".$login->getPassword()."' where email_id = '".$login->getEmail_id()."'";
				//$query2="insert into login (email_id, password) values('".$user->getEmail_id()."','".$user->getPassword()."')";
				echo '<br/>'.$query;
				//echo '<br/>'.$query2;
				$obj = new MyConnection;
				$rs = $obj->execute_query($query);
				if($rs) {
					//$rs = $obj->execute_query($query2);
					//if ($rs)
					echo "User Created";
					//return true;
				} else {
					echo "User Not Created";
					//return false;
				}
			}
	}
	
?>