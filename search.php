
<?php
session_start();
include_once("connect/connect.php");

$stmt =mysqli_query($conn, "SELECT * FROM route");

if(isset($_POST['search']))
{
       
       $leaving_from = $_POST["leaving_from"];
	   $go_to = $_POST["go_to"];
	   $date = $_POST["date"];
       $bus_type = $_POST["bus_type"];



$result = mysqli_query($conn, "SELECT * FROM `route_manage` WHERE `date`='".$date."',`bus_type`='".$bus_type."',`go_to`='".$go_to."',`leaving_from`='".$leaving_from."' ");



}?>
<?php
//getting username from url
$date = $_GET['date'];
$leaving_from = $_GET['leaving_from'];
$go_to = $_GET['go_to'];
$bus_type = $_GET['bus_type'];
//selecting data associated with this particular username
$result = mysqli_query($conn, "SELECT * FROM route_manage WHERE  `date`='".$date."' AND `leaving_from`='".$leaving_from."' AND `go_to`='".$go_to."' AND `bus_type`='".$bus_type."'");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Durontu.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrapp.css" rel="stylesheet" type="text/css" media="all" /><!-- audio video-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.10.2.min1.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="my-css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="jquery.seat-charts.css">

<!-- Booking JavaScript -->
    <script type="text/javascript" src="js/seat-charts.min.js"></script> 
 
	
</head>
<body>
	<div class="mycontainer">

		<!-- header bar start -->
	 <div class="header">	
   	 	 
             <div class="header-logo-nav">
             	  <div class="navbar navbar-inverse navbar-static-top nav-bg" role="navigation">
				  <div class="n">
			<img src="images/logo.png" alt="Smiley face">
		</div>
				      <div class="container">
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				            <li><a href="index.php">Home</a></li>
   					<li class="active"> <a href="bus.php">Bus</a></li>
                                <li><a href="train.php">Train</a></li>
                                <li><a href="airplane.php">Airplane</a></li>
                                <li><a href="cancel.php">Cancel Ticket</a></li>
                                <li><a href="contact.php">Contact Us</a></li>

				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>
           </div>
		<!-- header bar end -->

		<div class="mainbody">
			
			


			<div class="contactus_body">
			<div class="contactus_header">
		  	<h3>  Seat Booking</h3>
		  </div>
		  

		  <div class="container">
   

                        <table class="table table-bordered table-hover">
                                    <thead style="background-color:black;color:white;">
                                      <tr>
                                        <th>Bus Number</th>
										<th>Bus Name</th>
										<th>Bus Type</th>
                                        <th>Name Of Route</th>
										<th>Date</th>
										<th>Time</th>
                                         <th>Seat Available</th>
										 <th>Price</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <?php 
		$result = mysqli_query($conn, "SELECT * FROM `route_manage` WHERE `date`='".$date."' AND `leaving_from`='".$leaving_from."' AND `go_to`='".$go_to."' AND `bus_type`='".$bus_type."'");
		while($row=mysqli_fetch_array($result)){
		$tt = mysqli_query($conn, "SELECT seat FROM `route_manage` WHERE `bus_no`='".$row['bus_no']."' and `bname`='".$row['bname']."'");
		$t=mysqli_fetch_array($tt);
		$total=$t['seat'];
		$avl = mysqli_query($conn, "select count(BOOKING_SEAT) as res from booking where bus_no='".$row['bus_no']."' and date='".$row['date']."'");
		$rsss=mysqli_fetch_array($avl);    
		$av=$rsss['res'];

		$rav=$total-$av;
	

		
									
                                      echo"<tr>
                                      <td>Bus No#   <strong> ".$row['bus_no']."</strong></td>
									
									  <td> <strong>".$row['bname']."</strong></td>
									  <td> <strong>".$row['bus_type']."</strong></td>
                                        <td><b>".$row['leaving_from']. "</b>  to  <b>" .$row['go_to']."</b></td>
										<td>".$row['date']."</td>
										<td>".$row['time']."</td>
										<td>".$rav."</td> 
                                        <td>".$row['price']." tk</td>
                                        <td>
                                            <a href='seat.php?id=".$row['id']."'><button class='btn btn-danger'>View</button></a></td>
                                      </tr>";
                                      
                                    }
                                    ?>
                                     
                                    </tbody>
                                    
                        </table>
    
  

      </div>
      
      
      


		</div>
		
	</div>
	</div>
	  <!-- Start Footer -->
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			 <div class="footer-bottom">
			 	<div class="wrap">
			 	<div class="copy-right">
			 		<p> Copyright vai&copy; 2018-2019  all right reserved. </p>
			 	</div>
			 	<div class="social-icons">
			 		<ul>
			 			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			 			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			 			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			 			
			 			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			 		</ul>
			 	</div>
			 	<div class="clear"></div>
			 </div>
	       </div>
  <!-- End Footer -->
</body>
</html>