<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_ADMIN_NAME']);
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Logged Out</title>
<link href="stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style>

body{
	background: url("img/tt.jpg");
 display: block;
}


</style>
<div id="page">
<div id="header">
<h1 align="center"style="font-size:35px">Logout </h1>
<p align="center">&nbsp;</p>
</div>
<br><br><br><br><br>
<h4 align="center" style="font-size:30px" class="err">You have been logged out.</h4>
<p align="center"style="font-size:25px"><a href="login-form.php"style="font-size:25px">Click Here</a> to Login</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<div class="bottom_addr">&copy; <?php echo date('Y'); ?> Online bus ticket. All Rights Reserved</div> 
</div>
</div>
</body>
</html>
