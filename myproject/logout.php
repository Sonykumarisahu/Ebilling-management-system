<?php
 session_start();
 session_destroy();
 $_SESSION=array();
?> 
<html>
<title>
    logout
</title>
<body>
<h1> You have successfully logout</h1>
<h3><a href="loginform.php">Click here to Login in</a></h3>
</body>
</html>