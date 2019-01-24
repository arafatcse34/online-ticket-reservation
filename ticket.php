<html>
<style>

.ticket td{
	background: url("image/tt.jpg");
 display: block;
}


</style>
<form method="post" action="ticket.php">
<input onclick="window.print()" style="color:White; background-color:#00009C;position:absolute;left:980px;top:340px" type="submit" value=" Print ticket " name="submit">
</form>

<div class="ticket">

<?php 
$con=mysqli_connect('localhost','root','','bus') or die ("unable to connect");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$id='';
$fname='';
$lname='';
$contact='';
$address='';
$BOOKING_SEAT='';
$SEAT_PRICE='';
$time='';
$bname='';
$total='';
$bus_type='';
$rr=['date'];
$rr=['bus_no'];
$rr=['leaving_from'];
$rr=['go_to'];
$sseat='';



if (isset($_POST['fname']))
{
$fname=$_POST['fname'];
}
if (isset($_POST['lname']))
{
$lname=$_POST['lname'];
}
if (isset($_POST['contact']))
{
$contact=$_POST['contact'];
}
if (isset($_POST['address']))
{
$address=$_POST['address'];
}
if (isset($_POST['BOOKING_SEAT']))
{
$BOOKING_SEAT=$_POST['BOOKING_SEAT'];
}
if (isset($_POST['SEAT_PRICE']))
{
$SEAT_PRICE=$_POST['SEAT_PRICE'];
}
if (isset($_POST['BOOKING_PRICE']))
{
$total=$_POST['BOOKING_PRICE'];
}


if (isset($_POST['bus_type']))
{
$bus_type=$_POST['bus_type'];
}
if (isset($_POST['time']))
{
$time=$_POST['time'];
}
if (isset($_POST['bname']))
{
$bname=$_POST['bname'];
}
if (isset($_POST['date']))
{
$rr=$_POST['date'];
}
if (isset($_POST['leaving_from']))
{
$rr=$_POST['leaving_from'];
}

if (isset($_POST['go_to']))
{
$rr=$_POST['go_to'];
}
if (isset($_POST['sseat']))
{
$sseat=$_POST['sseat'];
}





$retval = mysqli_query( $con, " SELECT * FROM booking ORDER BY booking.id DESC LIMIT 1");
if(! $retval )
{
  die('Could not get data: ' . mysqli_error($con));

}
$row=mysqli_fetch_assoc($retval);
echo "<center><table border='3' style='border-color: black; cellspacing='11' cellpadding='11' ;'width =70%'>
<td><imgl> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;<img src='images/logo.png' />
</imgl>
<br>
<br>
<br>

<font face='System' font size='5' color='RED'>Name : ". $row['fname'] . " &#160; ". $row['lname'] . "
&#160;&#160;&#160;&#160;&#160;&#160; 
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<font face='System' font size='5' color='RED'>Destination : ". $row['leaving_from'] . " To ". $row['go_to'] . "




<br><br>
Bus Name : ". $row['bus_no'] . "
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; ";


echo"

Seat Fare : ". $total." Tk ".$row['SEAT_PRICE']    
."/-        
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
Total Fare : ". $total." Tk ".$row['BOOKING_PRICE'] 
."/-
<br><br>
Address : ". $row['address'] . " &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Journey Date : ". $row['date'] . " 
<br><br>";

echo"Ticket No : ". $row['sseat'] . "
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;

 
&#160;&#160;&#160;&#160; Phone No : ". $row['contact'] . " 

<br><br>";







echo"</table>


</table>	</center>";
mysqli_close($con);
?>
</div>
</html>