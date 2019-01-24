<?php
	require_once('auth.php');
?>
<?php
//checking connection and connecting to a database
require_once('connection/db.php');
//Connect to mysql server
	$con=mysqli_connect('localhost','root','','bus') or die ("unable to connect");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    function clean($str) {
        $str = @trim($str);
        if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        $con=mysqli_connect('localhost','root','','bus') or die ("unable to connect");
           return mysqli_real_escape_string($con,$str);
    }


$sql="SELECT * FROM ticket_cancel";
$result=mysqli_query($con,$sql);  


?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact</title>
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
<h1>Contact Management </h1>
<a href="index.php"style="font-size:20px">Profile</a> &nbsp;&nbsp;&nbsp;  <a href="route.php"style="font-size:20px">Route</a>  &nbsp;&nbsp;&nbsp;  <a href="reservations.php"style="font-size:20px">Order Ticket</a>&nbsp;&nbsp;&nbsp;<a href="ticket_cancel.php"style="font-size:20px">Ticket Cancel</a> &nbsp;&nbsp;&nbsp;  <a href="contacts.php"style="font-size:20px">Contacts</a> &nbsp;&nbsp;&nbsp;  <a href="logout.php"style="font-size:20px">Logout</a>
</div>
<div id="container">
<table border="0" width="970" align="center">
<CAPTION><h3>Contacts List</h3></CAPTION>
<tr>

<th>Bus No</th>
<th>Ticket No</th>
<th>Phone No</th>

</tr>

<?php
//loop through all tables rows
while ($row=mysqli_fetch_assoc($result)){
echo "<tr>";

echo "<td>" . $row['bus_no']."</td>";
echo "<td>" . $row['ticket_no']."</td>";
echo "<td>" . $row['mobile']."</td>";
echo "</tr>";
}
mysqli_free_result($result);
mysqli_close($con);
?>
</table>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	include 'footer.php';
?>
</div>
</body>
</html>