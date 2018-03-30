<?php
	class MySQLConnection {
		function executeQuery($query) {
				$dbhost = 'localhost:3306';
    			$dbuser = 'root';
        		$dbpass = '';
        		$dbname = 'invoice';
        	//echo 'Connection Parameters for MySQL are SET';
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				if(!$conn) {
        			die("Failed to Connect DB". mysql_error());
        		}
        	//echo 'Connection Successful';
        		if(!mysql_select_db($dbname)) {
        			die("Failed to Select DB". mysql_error());
        		}
        	//echo 'DB Selection Successful';
        		$result = mysql_query($query);
        		return $result;
			}
			function get_result_set($result)
			{
				$rs_array=array();
				if($result)
				{
					while($rs = mysql_fetch_array($result,MYSQL_NUM))
					{
						$rs_array[] = $rs;
					}
				}
				return $rs_array;
			}
	}
?>