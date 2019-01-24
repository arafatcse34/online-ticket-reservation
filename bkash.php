
<?php 

require_once 'connect/connect.php';

$stmt =mysqli_query($conn, "SELECT * FROM route");


	
	
if (isset($_POST['book'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$sseat=$_POST['sseat'];
	
	$id=$_GET['id'];
	$s =mysqli_query($conn, "SELECT bus_no,date,leaving_from,go_to FROM route_manage where id='".$id."'");
$rr=mysqli_fetch_array($s);

    $counter = $_POST["counter"];
    $total = $_POST["total"];


    $seat = (isset($_POST['seat']) ? $_POST['seat']:array());
    if (is_array($seat)) {                  
        foreach ($seat as $selectedOption){
        $ss= explode('|',$selectedOption);
		
           $query ="INSERT INTO booking(fname,lname,contact,address,BOOKING_SEAT, SEAT_PRICE, BOOKING_PRICE,BOOKING_NUM,bus_no,date,leaving_from,go_to,sseat)
                        VALUES ('$fname','$lname','$contact','$address','$ss[0]','$ss[1]','$total','$counter','".$rr['bus_no']."','".$rr['date']."','".$rr['leaving_from']."','".$rr['go_to']."','$sseat')";

          $result = mysqli_query ($conn,$query)
              or die ("<div class='alert alert-danger' role='alert'>You couldn't execute query</div>");
				
}
      
}

}
if(isset($_POST['bkash']))
{
	$contact=$_POST['contact'];
	$trx=$_POST['trx'];
$result = mysqli_query($conn, "UPDATE `booking` SET `bkash_trx_id`='".$trx."' where contact='".$contact."'");
    header("Location:bkash.php?save='success'");     
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
<style>




</style>
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
		  
		  <div class="container-fluid">
		 <form action="ticket.php?id=<?php echo $id; ?>" method="POST" class="form-horizontal "> 
			<div class="row">
				<div class="col-md-12 margin">
					
				<b>bKash Payment Steps :</b><br>
You can make payments from your bKash Account to our <b>Merchant</b>.<br>
01. Go to your bKash Mobile Menu by dialing <b>*247#</b>.<br>
02. Choose <b>Payment</b> option by pressing <b>3</b>.<br>
03. Enter the Merchant bKash Account Number <b>01751454597</b>.<br>
04. Enter the fare <b>3552</b> taka you want to pay.<br>
05. Write the word <b>tickets</b> against your payment.<br>
06. Enter the Counter Number <b>0</b>.<br>
07. Now enter your bKash Mobile Menu <b>PIN</b> to confirm.<br>
Done! You will receive a <b>confirmation message</b> from bKash.<br>

				</div>
				<div class="12">
				<div class="contactus_body" style="border:black 2px solid;">
				
			<div class="contactus_header">
		  	<h3>Online Bus Tickets Bkash Payment</h3>
			</div>
			<form action="" method="POST" class="form-horizontal ">
				<div class="row">
			
					<div class="col-md-4 margin" style="margin-left:30%;">
						<?php 
if(!empty($_GET['save']))
 {
    echo '<div class="alert alert-success alert-dismissable"><a href="bkash.php" class="close" data-dismiss="alert">&times</a>Successfull! </div>';
}
?>
					<div class="form-group">
						<input class="form-control" type="text" name="contact" placeholder="Phone No"required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="trx" placeholder="Bkash Trx ID "required>
					</div>
					<button  class="btn btn-primary btn-block" name="bkash" >Confirm</button>
					</div>
					</div>
				
				</form>
		  </div>
				</div>
				
				
			</div>
			</div>
			<style>
			.blogo{
				 display: block;
			 position: relative;
             left:520px;
         
              top:-480px;
			  width: 580px;
				
				
			}
			body{
			overflow-x: hidden;
			}
			
			</style>
			<div class="blogo">
			<img src="image/b.png" alt="Smiley face" >
			</div>


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
  <!-- End Footer -->
</body>
</html>