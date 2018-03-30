<?php
    session_start();
	global $email_id;
	if(isset($_SESSION['email_id']))
	{
		$email_id = $_SESSION['email_id'];
	}
	else {
		echo 'session empty';
	}
	$t = $_SESSION['t'];
	//unset($_SESSION['t']);
?>
<!DOCTYPE HTML>
<html><style type="text/css">
#menu-bar 
{
	color: #000000;
}
#menu-bar li {
  margin: 0px 0px 6px 0px;
  padding: 0px 0px 0px 6px;
  float: left;
  position: relative;
  list-style: none;
}
#menu-bar a 
{
  font-weight: bolder;
  font-family: arial;
  font-style: normal;
  font-size: 13px;
  color: #FFFFFF;
  text-decoration: none;
  display: block;
  padding: 6px 20px 6px 20px;
  margin: 10;
  margin-bottom: 10px;
  border-radius: 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  text-shadow: 0px 0px 0px #9E9D9B;
}
#menu-bar li ul li a {
  margin: 0;
}
#menu-bar .active a, #menu-bar li:hover > a {
  
  background: -ms-linear-gradient(top,  #EBEBEB,  #A1A1A1);
  background: -webkit-gradient(linear, left top, left bottom, from(#EBEBEB), to(#A1A1A1));
  background: -moz-linear-gradient(top,  #EBEBEB,  #A1A1A1);
  color: #254c78;
  -webkit-box-shadow: 0px 0px rgba(0, 0, 0, 0);
  -moz-box-shadow: 0px 0px rgba(0, 0, 0, 0);
  box-shadow: 0px 0px rgba(0, 0, 0, 0);
  text-shadow: -0px 0px 0px #FFFFFF;
}
#menu-bar ul li:hover a, #menu-bar li:hover li a {
  background: none;
  border: none;
  color: #666;
  -box-shadow: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
}
#menu-bar ul a:hover {
   background: #1C3D70 !important; /*008080*/
   color: #FFFFFF !important;
  border-radius: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  text-shadow: 0px 0px 0px #FFFFFF;
}
#menu-bar li:hover > ul {
  display: block;
}
#menu-bar ul {
  background: #DBDBDB;
  display: none;
  margin: 0;
  padding: 0;
  width: 160px;
  position: absolute;
  top: 30px;
  left: 0;
  border: solid 1px none;  /*#B4B4B4*/
  border-radius: 11px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-box-shadow: 0px 0px 0px #222222;
  -moz-box-shadow: 0px 0px 0px #222222;
  box-shadow: 2px 2px 4px #222222;
}
#menu-bar ul li {
  float: none;
  margin: 0;
  padding: 0;
}
#menu-bar ul a {
  padding:10px 10px 10px 15px;
  color:#1C3D70 !important;  /*#4C4C85*/
  font-size:13px;
  font-style:normal;
  font-family:arial;
  font-weight: bolder;
  text-shadow: 2px 2px 3px #FFFFFF;
}
#menu-bar ul ul li  {
  top: 20%;
 
}
#menu-bar ul ul  {

  width: 210px;
  height: 60px;
  opacity:1;
  position:absolute;
  top: 30%;
  left:162px;
  padding:0px 0 0px 10;
  color:#1C3D70 !important;  /*#4C4C85*/

}
#menu-bar:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#menu-bar {
  display: inline-block;
}
  html[xmlns] #menu-bar {
  display: block;
}
* html #menu-bar {
  height: 1%;
}
#scroll 
{
     font-weight: bold;
    text-align: center;    
    background-color:#3CC;
    border-radius:3px;
}
div.scroll {
	background-color: #FFFFFF;
	width: 1100px;
	height: 768px;
	overflow: scroll;
}
.body_background {
	background-image: url(../entrance-to-industrial-park-building-9824167.jpg);
	background-repeat: no-repeat;
	background-color: #33CCFF;
}
</style>
<body class="body_background">
<span class="body_background"></span>
<font color="#0033FF">
<center>
<h1>
<font face="Algerian" color="#CC0066" size="+6">INVOICE MANAGEMENT SYSTEM</font></h1>
</h1>
</font>
<font color="#00FF99">
<h2>WELCOME CUSTOMER</h2>
</font>
</font>
</center>
<div align="center">
<div>
<ul id="menu-bar">
<ul> 
 </ul> 
   <li><a href="homepage.php">Home</a></li>
   <li><strong>View Customer</strong></li>
   <li><a href="viewproductcustomer_form.php">View Product</a></li>
   <li><a href="updatepassword_form.php">Change Password</a></li>
   <li><a href="logout.php">Logout</a></li>
</ul>
<!------------>
</div>
<div class="scroll">
<font color="red">
</font>
<p align="middle">
<font face="Tahoma" color="#00CC99">
<br>
<h1> INVOICE</h1>
<?php
   require_once(dirname(dirname(__FILE__)).'/myproject/classes/service/BillDataService.php');
   $service = new BillDataService();
   $rs_array = $service->viewBill($t);
   //print_r($rs_array);
   if(empty($rs_array))
   {
	   echo'<p>NO data Found</p>';
   }
   else
   {
	  //print_r($rs_array);
?>
<table border="1">
<tr>
  <th width="20%" align="left" scope="row">Transaction Id</label></th>
  <td width="20%" align="left"><?php echo $rs_array[0][0]?></td>
  <th width="20%" align="left" scope="row">Caf Form No</label></th>
  <td width="20%" align="left"><?php echo $rs_array[0][1]?></td>
</tr>
<tr>
    <th width="20%" align="left" scope="row">Customer Details</th>
    <td></td>
    <th width="20%" align="left" scope="row">Company's Detail</th>
</tr>
<tr>
    <th width="20%" align="left" scope="row">First Name</th>
    <td width="20%" align="left"><?php echo $rs_array[0][3]?></td>
    <td width="20%" align="left" scope="row">
    ASHOK SECURE BROADBAND NETWORK PVT LTD</br>
    17/A,Teacher's Colony,Bhalubasa</br>
    Jamshedpur,Jharkhand-831009</br>
    Ph:09334283392,7209001776</br>
    Email: ashok.sahu@abnetwork.co.in </td>
</tr>
<tr>
   <th width="20%" align="left" scope="row">Last Name</th>
    <td width="20%" align="left"><?php echo $rs_array[0][4]?></td>
    <th width="20%" align="left" scope="row">Product Id</label></th>
    <td width="20%" align="left"><?php echo $rs_array[0][7]?></td>
<tr>
    <th width="20%" align="left" scope="row">Address</th>
    <td width="20%" align="left"><?php echo $rs_array[0][6]?></td>
    <th width="20%" align="left" scope="row"> Product Name</label></th>
  <td width="20%" align="left"><?php echo $rs_array[0][8]?></td>
  </tr>
</tr>
<tr>
    <th width="20%" align="left" scope="row">Email Id</th>
    <td width="20%" align="left"><?php echo $rs_array[0][2]?></td>
    <th width="20%" align="left" scope="row"> Product Duration</th>
  <td width="20%" align="left"><?php echo $rs_array[0][9]?></td>
</tr>
<tr>
    <th width="20%" align="left" scope="row">Phone No</th>
    <td width="20%" align="left"><?php echo $rs_array[0][5]?></td>
    <th width="20%" align="left" scope="row"> Product Price</th>
  <td width="20%" align="left"><?php echo $rs_array[0][10]?></td>
</tr>

</tr>
<tr>
  <td><input type="button" name="print" id="print" value="Print" onClick="window.print();"></td>
</tr>
</table>
<?php
  }
?>
<br><br>
</div>
</form>
</body>
</html>