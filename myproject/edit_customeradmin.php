<?php
$email_id=$_GET['email_id'];
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Edit Customer</title>
</head>
<body>
<div class="wrapper">
<h1> My Project</h1>
<h3>Edit Customer</h3>
<ul> 
   <li><a href="list.php">Home</a></li>
   <li><strong>View Customer &gt;&gt; Edit Customer</strong></li>
   <li><a href="viewproductadmin_form.php"> View Product</a></li>
   <li><a href="logout.php">Logout</a></li>
</ul>
<?php
   require_once(dirname(dirname(__FILE__)).'/myproject/classes/service/userDataService.php');
   $service = new UserDataService();
   $rs_array = $service->getCustomerDetailsById($email_id);
   if(empty($rs_array))
   {
	   echo'<p>NO data Found</p>';
   }
   else
   {
	   print_r($rs_array);
?>
<p>
<form name="frm_edit" method="POST" action="classes/controller/editcustomer_controller.php">
<table>
<tr> 
    <td width="30">First Name</td>
    <td width="30"> <input type="text" name="first_no" value="<?php echo $rs_array[0][0]?>"></td> 
</tr>

<tr> 
    <td width="30">Last Name</td>
    <td width="30"><input type="text" name="last_name" value="<?php echo $rs_array[0][1]?>"></td> 
</tr>
<tr>
    <td width="30">Email id</td>
    <td> <input type="text" name="email_id" value="<?php echo $rs_array[0][2]?>" readonly></td>
</tr>

<tr> 
    <td width="30">Address</td>
    <td width="30"><input type="text" name="address" value="<?php echo $rs_array[0][3]?>"></td> 
</tr> 
<tr> 
    <td width="30">Phone No</td>
    <td width="30"><input type="text" name="phone_no" value="<?php echo $rs_array[0][4]?>"></td> 
</tr> 
<tr> 
    <td width="30">Id proof</td>
    <td width="30"><input type="text" name="phone_no" value="<?php echo $rs_array[0][5]?>"></td> 
</tr> 
 
<tr>
    <td width="30"><input type="submit" name="update" value="Update"></td>
</tr>     
</table>
</form>
<?php
   }
?>
</p>
</div>
</body>
</html>
