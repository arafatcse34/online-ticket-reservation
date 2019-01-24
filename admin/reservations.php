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

//selecting all records from almost all tables. Return an error if there are no records in the tables
//$sql="SELECT passenger.pid, passenger.name,passenger.email, passenger.mob, route.*, bus.* FROM passenger, nb, card, reserves WHERE passenger.pid=reserves.pid ";
$sql="SELECT * FROM booking";
$result=mysqli_query($con,$sql);  


?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Orders</title>
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
<h1>Orders Ticket </h1>
<a href="index.php"style="font-size:20px">Profile</a> &nbsp;&nbsp;&nbsp;  <a href="route.php"style="font-size:20px">Route</a>  &nbsp;&nbsp;&nbsp;  <a href="reservations.php"style="font-size:20px">Order Ticket</a>&nbsp;&nbsp;&nbsp;<a href="ticket_cancel.php"style="font-size:20px">Ticket Cancel</a> &nbsp;&nbsp;&nbsp;  <a href="contacts.php"style="font-size:20px">Contacts</a> &nbsp;&nbsp;&nbsp;  <a href="logout.php"style="font-size:20px">Logout</a>
</div>
<div id="container">
<table border="0" width="970" align="center">
<CAPTION><h3>ORDERS LIST</h3></CAPTION>
<tr>
<th>Order ID</th>
<th>Customer Names</th>
<th>Bus Number</th>
<th>Seat No</th>
<th>Email</th>
<th>Mobile Number</th>

<th>Actions(s)</th>
</tr>

<?php
//loop through all tables rows
while ($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>" . $row['id']."</td>";
echo "<td>" . $row['fname']."</td>";
echo "<td>" . $row['bus_no']."</td>";
echo "<td>" . $row['sseat']."</td>";

echo "<td>" . $row['contact']."</td>";
echo "<td>" . $row['address']."</td>";

echo '<td><a href="reservation_d.php?id=' . $row['id'] . '">Cancel Ticket </a></td>';
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