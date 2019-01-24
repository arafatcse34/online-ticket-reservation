<?php
require_once 'connect/connect.php';
$stmt =mysqli_query($conn, "SELECT * FROM route");
?>
<?php
if(isset($_POST['send']))
{
	$bus_no=$_POST['bus_no'];
	$ticket_no=$_POST['ticket_no'];
	$mobile=$_POST['mobile'];
	
	$query=mysqli_query($conn,"INSERT INTO `ticket_cancel`(`bus_no`, `ticket_no`, `mobile`) VALUES ('".$bus_no."','".$ticket_no."','".$mobile."')");

	  header("Location:cancel.php?save='success'");  
}
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
	 <script type="text/javascript" src="js/jquery.min.js" charset="UTF-8"></script>

	 

</head>
<body>
 <!-- Start Header -->
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
   					<li > <a href="bus.php">Bus</a></li>
                                <li><a href="train.php">Train</a></li>
                                <li><a href="airplane.php">Airplane</a></li>
                                <li class="active"><a href="cancel.php">Cancel Ticket</a></li>
                                <li><a href="contact.php">Contact Us</a></li>

				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>
           </div>
		<!-- header bar end -->

		<style>
		.row{
			
		margin-left:500px;
		}
		
		</style>

<br>

			<div class="contactus_body">
			<br>
			<center>
		  	<h3>  Cancel Ticket Request</h3>
		</center>
		
		  <div class="container-fluid">
			<div class="row">
			
				<div class="col-md-4 margin" >
								<?php 
if(!empty($_GET['save']))
 {
    echo '<div class="alert alert-success alert-dismissable"><a href="cancel.php" class="close" data-dismiss="alert">&times</a>Successfull! </div>';
}
?>
					<form action="" method="POST" class="form-horizontal ">
					<div class="form-group">
						<input class="form-control" type="text" name="bus_no" placeholder="bus_no">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="ticket_no" placeholder="ticket_no">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="mobile" placeholder="mobile">
					</div>
					<button  class="btn btn-primary btn-block" name="send" >Send Now</button>
				</div>
				</form>
				
			</div>
			</div>


		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <!-- Start Footer -->
 
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
		
</body>
</html>
