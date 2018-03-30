<?php
require_once(dirname(dirname(__FILE__))."/DBConnection/Myconnection.php");
class ProductDataService
{
	function getAllProductDetails()
	{
		$query= "select serial_no, product_name, duration, price from product";
		$obj= new Myconnection;
		$result= $obj->execute_query($query);
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
		function getProductDetailsBySerial_no($serial_no) {
			$query = "select serial_no, product_name, duration, price from product where serial_no = ".$serial_no."";
			//echo $query;
			$obj = new MyConnection;
			$result = $obj->execute_query($query);
			$rs_array = $obj->get_result_set($result);
		    return $rs_array;
		}
        function saveProductDetails($product)
        {
	$query = "insert into product (serial_no, product_name, duration, price) values (".$product->getSerial_no().", '".$product->getProduct_name()."', ".$product->getDuration().", ".$product->getPrice().")";
	//$query2="insert into login (email_id, password) values ('".$user->getEmail_id()."', '".$user->getPassword()."')";
	echo "<br>".$query;
	//echo "<br>".$query2;
	$obj = new Myconnection;
	$rs = $obj->execute_query($query);
	if($rs)
	{
		return true;
	}
	else
	{
		echo"User not Created";
		return false;
	}
	}
	function saveUpdateDetails($product) 
    {
		$query = "update product set product_name = '{$product->getProduct_name()}', duration = {$product->getDuration()} , price = {$product->getPrice()} where serial_no = {$product->getSerial_no()}";
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