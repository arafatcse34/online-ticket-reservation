<?php
require_once 'connect/connect.php';
$stmt =mysqli_query($conn, "SELECT * FROM route");
?>
<?php
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subj=$_POST['subject'];
	$msg=$_POST['message'];
	$query=mysqli_query($conn,"INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`) VALUES ('".$name."','".$email."','".$subj."','".$msg."')");

	  header("Location:contact.php?save='success'");  
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
                                <li><a href="cancel.php">Cancel Ticket</a></li>
                                <li class="active"><a href="contact.html">Contact Us</a></li>

				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>
           </div>
		<!-- header bar end -->

		

<br>
			<div class="contactus_body">
			<br>
			<center>
		  	<h3>  Contact Us</h3>
		</center>
		  <div class="container-fluid">
			<div class="row">
				<div class="col-md-4 margin" >
								<?php 
if(!empty($_GET['save']))
 {
    echo '<div class="alert alert-success alert-dismissable"><a href="contact.php" class="close" data-dismiss="alert">&times</a>Successfull! </div>';
}
?>
					<form action="" method="POST" class="form-horizontal ">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="your name"required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="email" placeholder="your email"required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="subject" placeholder="your subject"required>
					</div>
					<button  class="btn btn-primary btn-block" name="send" >Send Now</button>
				</div>
				
				<div class="col-md-3 margin">
					<textarea   cols="30" rows="6" name="message" placeholder="your message"required></textarea>
				</div>
				</form>
				<div class="col-md-4 margin">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0055364054756!2d90.34070151395711!3d23.782817184573492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c08c7261ffb3%3A0x11a1f0e97b9b5a14!2z4KaX4Ka-4Kas4Kak4Kay4KeAIOCmrOCmvuCmuCDgpp_gpr7gprDgp43gpq7gpr_gpqjgpr7gprI!5e0!3m2!1sbn!2sbd!4v1522133297367" height="300px" width="410px" frameborder="0" style="border:0;margin-left: -50px;" allowfullscreen></iframe>
				</div>
			</div>
			</div>


		</div>
		<br><br><br><br><br>
	
		  <!-- Start Footer -->
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
