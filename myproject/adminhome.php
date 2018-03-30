<!DOCTYPE HTML>
<html>
<head>
<style>
#menu-bar 
{

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
    background-color:#CCCCCC;
    border-radius:3px;
}
div.scroll {
    background-color: #F6F6F6;
    width: 1100px;
    height: 768px;
    overflow: scroll;
}
</style>
</head>
<div align="center">
<body bgcolor="#262626">
<div>
<ul id="menu-bar"> 
<li><a href="#">Home</a>
  <ul>
   <li><a href="login_form.php">Login</a></li>
  </ul>
  </li>
<li><a href="#">Details</a>
  <ul>
   <li><a href="product_form.php">Product</a></li>
   <li><a href="customer_form.php">Customer</a></li>
  </ul>
  </li>
<li><a href="#">Photo</a>
  <ul>
   <li><a href="uid.html">UID</a></li>
  <li><a href="vote.html">Voter Card</a></li>
</ul>
  </li>
<li><a href="#">Video</a>
  <ul>
   <li><a href="mission.html">Mission</a></li>
   <li><a href="reg.html">Faculty</a></li>
  </ul></li>

 <li><a href="contact.html">Contact Us</a>
  <ul>
   <li><a href="reg.html">telephone</a>
<ul>
   <li>+91 9334283392</a></li>
   <li>+91 9334853771</a></li>
  </ul>
</ul>
<!------------>
</div>
<div class="scroll">
<font color="red">
<script>

if(navigator.userAgent.indexOf("MSIE") != -1)
{
   document.write('<b>You are Using Internet Explorer, certain content might not be viewable in IE. <br>it is recommended to use Google Chrome 37 and above. The menu links do not work in IE</b>');
}
</script>
</font>
<p align="middle">
<font face="Tahoma" color="#4C4C4C">
<img src="images/parul logo.jpg" alt="home" height="240px" width="200px">
<br>
</ul> 
</div>
</body>
</html>