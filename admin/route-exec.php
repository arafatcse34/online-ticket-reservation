
 
 
 
 
 <?php
require_once('connection/db.php');
 
$con=mysqli_connect('localhost','root','','bus') or die ("unable to connect");
    if(isset($_POST["Submit"])){
	   $bus_no = $_POST["bus_no"];
	   $bus_type = $_POST["bus_type"];
	   $leaving_from = $_POST["leaving_from"];
       $go_to= $_POST["go_to"];
	   $date = $_POST["date"];
       $time = $_POST["time"];
	   $price = $_POST["price"];
       $seat = $_POST["seat"];
	   $bname = $_POST["bname"];
       
   }
$query="INSERT INTO `route_manage`(`leaving_from`, `go_to`, `date`, `time`, `bus_type`, `seat`, `price`, `bus_no`, `bname`)VALUES ('".$leaving_from."','".$go_to."','".$date."','".$time."','".$bus_type."','".$seat."','".$price."','".$bus_no."','".$bname."')";
$success = $con->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$con->error);
 
}


header("Location:route.php ");

?>
