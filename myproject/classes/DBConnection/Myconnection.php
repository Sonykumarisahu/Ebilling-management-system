<?php
require_once('MySQLConnection.php');
class MyConnection {
    public function execute_query($query) {
    	$obj = new MySQLConnection();
        $result = $obj->executeQuery($query);
        return $result;
	}
	public function get_result_set($result)
	{
		$obj = new MySQLConnection();
		$rs_array = array();
		$rs_array = $obj->get_result_set($result);
		return $rs_array;
	}
}
		/*if($result) {
        	return $result;
        } else {
        	return null;
        }
    }*/

?>
