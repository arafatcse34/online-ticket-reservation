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
   					<li> <a href="bus.php">Bus</a></li>
                               <li><a href="train.php">Train</a></li>
	                             <li class="active"><a href="airplane.php">Airplane</a></li>
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
   
<style>
.transbox{
position:absolute;
top:205px;
left:500px;
width:570px;
height:330px;
border-radius:15px;
}

pub{

text-align:center;	

background-color: sky;

position:absolute;
	height: 60px;
	width: 480px;
        top:150px;
       left:430px;
}
body  {
	 background: url("images/bp.jpg");
	 
 display: block;
}

</style>

   <!-- Start Main Content -->
   
	<center>
</a></center>

<form action="#" method="post">

<div class="transbox">

<p>&nbsp &nbsp &nbsp &nbsp

<font face="Arial Black" font size="4" color="green">Depart From&#160;&#160; &#160;&#160;&#160;:&#160;</font>
 <select name="fromLoc">
  <option value="" disabled="disabled" selected="selected">Select Depart From</option>
<option value="Airport ">Airport</option>
<option value="CoxsBazar">CoxsBazar</option>
<option value="saidpur">Saidpur</option>
<option value="Rajshahi">Rajshahi</option>
<option value="Sylhet ">Sylhet</option>

</select>
</p>
<br>

<p>&nbsp &nbsp &nbsp &nbsp
<font face="Arial Black" font size="4" color="green">Destination&#160;&#160;&#160;&#160;&#160;&#160; &#160;:&#160;</font>
<select name="toLoc">
  <option value="" disabled="disabled" selected="selected">Select Destination</option>

<option value="Sylhet">Sylhet</option>
<option value="Rajshahi">Rajshahi</option>
<option value="CoxsBazar">CoxsBazar</option>
<option value="Airport">Airport</option>
<option value="saidpur">Saidpur</option>





</select>
</p>


<br>
<p>&nbsp &nbsp &nbsp &nbsp
<font face="Arial Black" font size="4" color="green">Date&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;:&#160;</font>

  
<input type="date" name="dep_date">
</p></center>
<p>&nbsp &nbsp &nbsp &nbsp
<font face="Arial Black" font size="4" color="green">Passenger Class&#160;:&#160;</font>
<select name="toLoc">
  <option value="" disabled="disabled" selected="selected">Select Class</option>
<option value="Economy">Economy</option>
<option value="premium Economy">premium Economy</option>
<option value="Business">Business</option>






</select>
</p></center>



<p><center>
<p></p> 
<input type="submit" value="Search"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

</div></center>
</form>
</p>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

 <br><br>  <!-- End Main Content -->
	   
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

    	
    	
            