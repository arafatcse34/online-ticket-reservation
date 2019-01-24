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

    //retrive promotions from the specials table
	$sql="SELECT * FROM route_manage,route WHERE route_manage.bus_no=route.id";
    $result=mysqli_query($con,$sql);
	?>
	<?php
	
	$sql="SELECT * FROM route_manage";
    $result=mysqli_query($con,$sql);
   

    //retrive categories from the categories table
	
    
?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Route</title>
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
<h1>Route Management </h1>
<a href="index.php"style="font-size:20px">Profile</a> &nbsp;&nbsp;&nbsp;  <a href="route.php"style="font-size:20px">Route</a>  &nbsp;&nbsp;&nbsp;  <a href="reservations.php"style="font-size:20px">Order Ticket</a>&nbsp;&nbsp;&nbsp;<a href="ticket_cancel.php"style="font-size:20px">Ticket Cancel</a> &nbsp;&nbsp;&nbsp;  <a href="contacts.php"style="font-size:20px">Contacts</a> &nbsp;&nbsp;&nbsp;  <a href="logout.php"style="font-size:20px">Logout</a>
</div>
<div id="container">
<table width="960" align="center">
<form action="route-exec.php" method="POST" > 
<CAPTION><h3>ADD A NEW Bus Route</h3></CAPTION>

<tr>
    <th>Depart From</th>
    <th>Destination</th>
	 <th> Date</th>
    <th>Time</th>
	<th>Bus Type</th>
	 <th> Total Seat</th>
	<th>Ticket Price</th>
	<th>Bus No</th>
	<th>Bus Name</th>
    <th>Action(s)</th>
	
</tr>
<tr>
   <td><input type="text" name="leaving_from" id="leaving_from"  size="9" required /></td>
    <td><input type="text" name="go_to" id="go_to"  size="9" required /></td>
	<td><input type="text" name="date" id="date"  size="9" required /></td>
	<td><input type="text" name="time" id="time" size="9" required /></td>
	<td><input type="text" name="bus_type" id="bus_type" size="9" required /></td>
	<td><input type="text" name="seat" id="seat"  size="9" required /></td>
	<td><input type="text" name="price" id="price"  size="9" required /></td>
	<td><input type="text" name="bus_no" id="bus_no" size="9" required /></td>
	<td><input type="text" name="bname" id="bname"  size="9" required /></td>
    
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</form>
</table>
<hr>
<table width="950" align="center">
<CAPTION><h3>Route</h3></CAPTION>
<tr>
<th>Bus name</th>
<th>Bus Type</th>
<th>Total Seat</th>
<th>Depart from</th>
<th>Destination</th>
<th>Date</th>
<th>Time</th>
<th>Fare</th>
<th>Action(s)</th>
</tr>

<?php
//loop through all table rows
 //gets active currency
while ($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['bname']."</td>";
echo "<td>" . $row['bus_type']."</td>";
echo "<td>" . $row['seat']."</td>";
echo "<td>" . $row['leaving_from']."</td>";
echo "<td>" . $row['go_to']."</td>";
echo "<td>" . $row['date']."</td>";
echo "<td>" . $row['time']."</td>";
echo "<td>" . $row['price']."</td>";



echo '<td><a href="delete-route.php?id=' . $row['id'] . '">Remove </a></td>';
echo "</tr>";
}
mysqli_free_result($result);
mysqli_close($con);
?>
</table>
<hr>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>