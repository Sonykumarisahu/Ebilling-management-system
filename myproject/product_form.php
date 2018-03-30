<?php
   session_start();
?>

<html>
<head>
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 4;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
}
body {
	background:#00CCFF;
	color: #000;
	font: 14px Arial;
	margin: 0 auto;
	padding: 0;
	position: relative;
}
#content {
	background: #f9f9f9;
	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
	-webkit-box-shadow: 0 1px 0 #fff inset;
	-moz-box-shadow: 0 1px 0 #fff inset;
	-ms-box-shadow: 0 1px 0 #fff inset;
	-o-box-shadow: 0 1px 0 #fff inset;
	box-shadow: 0 1px 0 #fff inset;
	border: 1px solid #c4c6ca;
	margin: 0 auto;
	padding: 20px 0 0;
	position: relative;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
	width: 500px;
}
#content:after,
#content:before {
	background: #f9f9f9;
	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
	border: 1px solid #c4c6ca;
	content: "";
	display: block;
	height: 100%;
	left: -1px;
	position: absolute;
	width: 100%;
}
#content:after {
	-webkit-transform: rotate(2deg);
	-moz-transform: rotate(2deg);
	-ms-transform: rotate(2deg);
	-o-transform: rotate(2deg);
	transform: rotate(2deg);
	top: 0;
	z-index: -1;
}
#content:before {
	-webkit-transform: rotate(-3deg);
	-moz-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	-o-transform: rotate(-3deg);
	transform: rotate(-3deg);
	top: 0;
	z-index: -2;
}
#content form { margin: 0 20px; position: relative }
#content form input[type="text"],
#content form input[type="email"],
#content form input[type="password"] {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	background: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
	border: 1px solid #c8c8c8;
	color: #777;
	font: 15px Helvetica, Arial, sans-serif;
	margin: 0 0 10px;
	padding: 15px 10px 15px 40px;
	width: 50%;
}
#username { background-position: 10px 10px !important }
#password { background-position: 10px -53px !important }
#content form input[type="submit"],input[type="reset"] {
	background: rgb(254,231,154);
	background: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	background: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	background: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	background: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	-ms-border-radius: 30px;
	-o-border-radius: 30px;
	border-radius: 30px;
	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	-ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	-o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	border: 1px solid #D69E31;
	color: #85592e;
	cursor: pointer;
	float: left;
	font: bold 15px Helvetica, Arial, sans-serif;
	height: 35px;
	margin: 20px 0 35px 15px;
	position: relative;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
	width: 130px;
}
p    {
color:#00ced1;
font: bold 40px Helvetica, Arial, sans-serif; 
}
div#content{
  margin-right: 30%;
  margin-left: *%;
margin-top: 1%;
  }

g{
color:#4B610B;
} 
.date { 
    display: inline; 
    padding: 1.2em; 
    border: inset 1px #CCC; 
    background:#eae7e7 ; 
    border-radius: 4px;
    color: #777;
border: 1px solid #c8c8c8;
}
.date * { 
    display: inline-block;
}

.date input { 
    width: 59px; 
    padding: 0 0.4em; 
    border: none; 
    font-size: 100%; 
    background: none;
    color: #777;            
}
.date input#year { width:3.6em; }
.date input:focus { outline:none; }
 
</style>
   <title>Product</title>
</head>
</style>
<div id="container">
<div id="wrapper"> <div id="content">
<form  method="POST" enctype="multipart/form-data" action="classes/controller/product_controller.php">
<form name="form1" id="form1" method="post" action="classes/controller/product_controller.php">

<fieldset>
<p>Product Details</p><br>
<?php
	$msg=" ";
	if(isset($_SESSION['error_msg']))
	{
		$msg = $_SESSION['error_msg'];
		//echo '<p>Error Message : '.$msg.'</p>';
		unset($_SESSION['error_msg']);
	}
	if(!empty($msg))
	{
		echo"<p>".$msg."</p>";
	}
?>
<g for="serial_no">Serial No:</g>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<input type="text" name="serial_no"><br>

<g for="product_name">Product Name:</g>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<input type="text" name="product_name"><br>

<g for="duration">Duration</g>
:
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<input type="text" name="duration" id="duration"><br>
 
<g for="phone">Price:</g>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<input type="text" name="price"><br>

<input id="button" type="submit" name="submit" value="Submit"> 
<input type="reset" name="reset" value="reset" title="Reset">
<p><a href="homepage1.php">Home</a></p>
</fieldset>

</form>
</div>
</div>
</div>
</body>
</html>