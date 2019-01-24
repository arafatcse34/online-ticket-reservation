<?php
  require_once('connection/db.php');
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="validation/admin.js">
</script>
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
<br><br>
<h1 align="center"style="font-size:35px">Online Bus Ticket Reservation</h1> 
<p align="center">&nbsp;</p>
</div>
<form id="loginForm" name="loginForm" method="post" action="login-exec.php" onsubmit="return loginValidate(this)">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
  <br><br><br><br><br>
    <tr>
      <td width="112"style="font-size:20px"><b>Username</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
	
    <tr>
      <td><br><b style="font-size:20px"><b>Password</b></td>
      <td><br><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><br><input type="submit" name="Submit" value="Login"style="font-size:20px" /></td>
    </tr>
  </table>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
