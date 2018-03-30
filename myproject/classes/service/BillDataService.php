<?php
require_once(dirname(dirname(__FILE__))."/DBConnection/MyConnection.php");
class BillDataService
{
	function saveBillDetails($bill) {
		$query = "insert into payment (serial_no, email_id, caf_form_no) values ({$bill->getSerial_no()}, '{$bill->getEmail_id()}', {$bill->getCaf_form_no()})";
		echo '<br/>'.$query;
				$obj = new MyConnection;
				$rs = $obj->execute_query($query);
				if($rs) {
					//$rs = $obj->execute_query($query2);
					//if ($rs)
					echo "<br>bill Created";
					$rs2 = $obj->execute_query("select LAST_INSERT_ID()");
					$rs3 = $obj->get_result_set($rs2);
					return $rs3;
				} else {
					echo "bill Not Created";
					return false;
				}	
	}
	function viewBill($t)
	{
		$query="select t.transaction_id, t.caf_form_no, u.email_id, u.first_name, u.last_name, u.phone_no, u.address, p.serial_no, p.product_name, p.duration, p.price from payment t, users u, product p where t.email_id = u.email_id and t.serial_no = p.serial_no and t.transaction_id = {$t}";
		$obj= new Myconnection;
		$result= $obj->execute_query($query);
		$rs_array = $obj->get_result_set($result);
		return $rs_array;
	}
}
?>