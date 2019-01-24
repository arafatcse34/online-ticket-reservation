<?php
require_once 'connect/connect.php';
$stmt =mysqli_query($conn, "SELECT * FROM route_manage");
$mar =mysqli_query($conn, "SELECT * FROM route");
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
	<script>
	  
$(document).ready(function()
{
	$(".leaving_from").change(function()
	{
		var id=$(this).val();
		var leaving_from=$(this).val();
		var dataString = 'leaving_from='+ leaving_from;
	
		$.ajax
		({
			type: "POST",
			url: "admin/get_go_to.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$(".go_to").html(html);
			} 
		});
	});
		$(".go_to").change(function()
	{
		var go_to=$(this).val();
		var dataString = 'go_to='+ go_to;
	
		$.ajax
		({
			type: "POST",
			url: "get_bus_type.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$(".bus_type").html(html);
			} 
		});
	});

	
});
	</script>

	 
<style>
body  {
 background: url("images/bgb.jpg")no-repeat;
 display: block;

  
	
   
}
</style>
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
   <!-- End Header -->
   

		<!-- header bar start -->
		
<br>
		
			<center>
			<div class="bb" style="margin-left:35%">

			
			

<br><br><br>

			<div class="search_ticket">
				<div class="ticket_head">
					<div class="search"><img src="image/search.png" alt=""></div>
					<center>
				   <h3 class="text-white">Search Ticket</h3></center>
				</div>
				<div class="buy">
				
				<form action="search.php" method="GET" class="form-horizontal ">
					<div class="row">
						<div class="col-6">
					<div class="form-group">
						<label class="text-primary" for="">Leaving From:</label>
							  <select class="leaving_from form-control" name="leaving_from" id="leaving_from">
							    <option selected="selected">--Select One--</option>
<?php
	$stmt =mysqli_query($conn, "SELECT * FROM route_manage GROUP BY leaving_from");
	while($row=mysqli_fetch_array($stmt))
	{
		?>
        <option value="<?php echo $row['leaving_from']; ?>"><?php echo $row['leaving_from']; ?></option>
        <?php
	} 
?>
							  </select>
						</div>
					</div>
					<div class="col-6">
					<div class="form-group">
						<label class="text-primary" for="">Going To:</label>
							 <select class="go_to form-control" name="go_to" id="go_to">
							     <option selected="selected">--Select One--</option>
								 </select>
					</div>
					</div>


<div class="col-6">
		 <div class="form-group ">
      <label class="text-primary"  for="">Date:</label>
      
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
       </div>
      </div>
     </div>


<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
format: "dd MM yyyy",
        		container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>




					<div class="col-6">
					<div class="form-group">
						<label class="text-primary" for="">Coach Type:</label>
							 <select class="bus_type form-control" name="bus_type" id="bus_type">
	                                <option selected="selected">--Select One--</option>
							  </select>
					</div>
					</div>


					<div class="col-12">
						<button name="search" class="btn btn-primary btn-block" >Search</button>
					</div>





					</div>
				</form>
				</div>
			</div>
			</div>
			</center>
			
<script>
	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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