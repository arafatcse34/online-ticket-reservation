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
    
    //define default value for flag
    $flag_1 = 1;
    
    //defining global variables
    
    $con=mysqli_connect('localhost','root','','bus') or die ("unable to connect");
//count the number of records in the members, orders_details, and reservations_details tables
$sql="SELECT * FROM nb";
$members=mysqli_query($con,$sql);

$sq="SELECT * FROM booking";
$orders_placed=mysqli_query($con,$sq);

$a="SELECT * FROM booking WHERE flag='$flag_1'";
$orders_processed=mysqli_query($con,$a);




$l="SELECT * FROM route";
$b=mysqli_query($con,$l);

?>
<?php
    if(isset($_POST['Submit'])){
        //Function to sanitize values received from the form. Prevents SQL injection
        function clean($str) {
            $str = @trim($str);
            if(get_magic_quotes_gpc()) {
                $str = stripslashes($str);
            }
			$con=mysqli_connect('localhost','root','','bus') or die ("unable to connect");
            return mysqli_real_escape_string($con,$str);
        }
        //get category id
        $id = clean($_POST['id']);
        
        //get ratings ids
	}
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Index</title>
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
<h1 align="center"style="font-size:35px">Administrator Control Panel</h1><br>
<a href="index.php"style="font-size:20px">Profile</a> &nbsp;&nbsp;&nbsp;  <a href="route.php"style="font-size:20px">Route</a>  &nbsp;&nbsp;&nbsp;  <a href="reservations.php"style="font-size:20px">Order Ticket</a>&nbsp;&nbsp;&nbsp;<a href="ticket_cancel.php"style="font-size:20px">Ticket Cancel</a> &nbsp;&nbsp;&nbsp;  <a href="contacts.php"style="font-size:20px">Contacts</a> &nbsp;&nbsp;&nbsp;  <a href="logout.php"style="font-size:20px">Logout</a>
</div>
<div id="container">
<table width="1000" align="center" style="text-align:center"> 
<CAPTION><br><br><br><h3>CURRENT STATUS</h3></CAPTION>
<tr>
    <th>Members </th>
    <th>Ticket Book Placed</th>
    <th>Ticket Book Processed</th>
    <th>Ticket Book Pending</th>  
       
</tr>
<br>
<?php
        
        $result2=mysqli_num_rows($orders_placed);
        $result3=mysqli_num_rows($orders_processed);
        $result4=$result2-$result3; //gets pending order(s)
       
        echo "<tr align=>";
            echo "<td>" . $result1."</td>";
            echo "<td>" . $result2."</td>";
            echo "<td>" . $result3."</td>";
            echo "<td>" . $result4."</td>";
            echo "<td>" . $result5."</td>";
            echo "<td>" . $result6."</td>";
            echo "<td>" . $result7."</td>";
            echo "<td>" . $result8."</td>";
            echo "<td>" . $result9."</td>";
            echo "<td>" . $result10."</td>";
        echo "</tr>";
?>
</table>





</table>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
