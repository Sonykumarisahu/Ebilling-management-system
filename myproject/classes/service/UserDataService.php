
<?php					
	require_once(dirname(dirname(__FILE__))."/DBConnection/MyConnection.php");
	class UserDataService {
		function getAllUserDetails() {
			$query = "select  email_id, first_name, last_name, address, phone_no, id_proof, caf_form_no from users";
			$obj = new MyConnection;
			$result = $obj->execute_query($query);
			$rs_array = $obj->get_result_set($result);
			/*
			$rs_array = array();
			if($result) {
        		//echo "query executed";
				while($rs = mysql_fetch_array($result, MYSQL_NUM)) {
					$rs_array[] = $rs;
				}
        	}
			*/
			return $rs_array;
		}
		function getCustomerDetailsById($email_id) {
			$query = "select  first_name, last_name, email_id, address, phone_no, id_proof, caf_form_no from users where email_id = '".$email_id."'";
			//echo $query;
			$obj = new MyConnection;
			$result = $obj->execute_query($query);
			$rs_array = $obj->get_result_set($result);
		    return $rs_array;
		}
		function getCafFormNoByID($email_id) 
		{
			$query = "select caf_form_no from users where email_id = '".$email_id."'";
			echo $query;
			$obj = new MyConnection;
			$result = $obj->execute_query($query);
			$rs_array = $obj->get_result_set($result);
		    return $rs_array;
		}
		function saveUserDetails($user) {
			$query1 = "insert into users (email_id, first_name, last_name, address, phone_no, id_proof) values ('".$user->getEmail_id()."', '".$user->getFirst_name()."', '".$user->getLast_name()."', '".$user->getAddress()."', '".$user->getPhone_no()."', '".$user->getImage()."')";
			$query2="insert into login (email_id, password) values ('".$user->getEmail_id()."', '".$user->getPassword()."')";
			echo '<br/>'.$query1;
			echo '<br/>'.$query2;
			$obj = new MyConnection;
			$rs = $obj->execute_query($query1);
			if($rs) {
				$rs = $obj->execute_query($query2);
				if ($rs)
				echo "User Created";
				return true;
			} else {
				echo "User Not Created";
				return false;
			}
		}
	    function saveUpdateDetails($user) 
		{
				$query = "update users set first_name = '".$user->getFirst_name()."', last_name = '".$user->getLast_name()."' , address = '".$user->getAddress()."', phone_no = '".$user->getPhone_no()."' where email_id = '".$user->getEmail_id()."'";
				//$query2="insert into login (email_id, password) values('".$user->getEmail_id()."','".$user->getPassword()."')";
				echo '<br/>'.$query;
				//echo '<br/>'.$query2;
				$obj = new MyConnection;
				$rs = $obj->execute_query($query);
				if($rs) {
					//$rs = $obj->execute_query($query2);
					//if ($rs)
					echo "User Created";
					return true;
				} else {
					echo "User Not Created";
					return false;
				}
			}
		}
?>