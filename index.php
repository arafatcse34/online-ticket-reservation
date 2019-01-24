
<!DOCTYPE HTML>
<html>
<head>
<title>Durontu.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'><!-- google fonts-->
<link href="css/bootstrapp.css" rel="stylesheet" type="text/css" media="all" /><!-- audio video-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.10.2.min1.js" type="text/javascript"></script>
<script src="js/bootstrap1.js" type="text/javascript"></script>
<script src="js/bootstrap.min1.js" type="text/javascript"></script>
<script src="js/owl.carousel1.js" type="text/javascript"></script>
<!-- responsive pc,tab,mobile-->
  <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({

      items :4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

    });
    </script>
	<!-- navigation  bus dropdown-->
		<style>
		
	.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-toggle a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown:hover .dropdown-menu {
    background-color: #85DAB1;
}
.rating{
      color:#10DD38;
}
body{
 background:#fcf4b5;
 
 
}


</style>
  
</head>
<body>
   <!-- Start Header -->
       <div class="header">	
   	 	    <div class="header-top">
   	 	      <div class="wrap"> 
   	 	    	 <div class="header-top-left">
   	 	    	 	<p>Support: +8801751454597</p>
   	 	    	 </div>
				 <div class="header-top-right">
				        <ul>
				
				          
				    </div>
				 
			      <div class="clear"></div>
			     </div> 
		      </div>
             <div class="header-logo-nav">
             	  <div class="navbar navbar-inverse navbar-static-top nav-bg" role="navigation">
				      <div class="container">
				        <div class="navbar-header">
				          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				         <div class="logo"> <a class="navbar-brand" href="contact.html"><img src="images/logo.png" alt="" /></a></div>
				          <div class="clear"></div>
				        </div>
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				           		            <li class="active"><a href="index.php">Home</a></li><!-- index link-->
   					
		<li><a href="bus.php">Bus</a></li>
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
	        <div class="header-banner">
	        	
			    <!-- Carousel use for slide show================================================== -->
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">
			     <div class="wrap">
			      <div class="carousel-inner">
			        <div class="item active">
			           <div class="row">
				        <div class="col-md-6">
				          <div class="banner-desc">
				        	<img src="images/bus2.jpg" alt="First slide" />
				          <div class="see-features"><center><a href="bus.php">Bus Ticket Book</a></center></div>
				          </div>
				        </div>
				        <div class="col-md-6">
				        	<div class="banner-img">
			                <img src="images/bus1.jpg" alt="First slide" />
			             </div>
				        </div>
				      </div>
			        </div>
			         <div class="item">
			         
			          <div class="row">
			          	<div class="col-md-6">
				        	<div class="banner-img">
			                <img src="images/train.jpg" alt="First slide" />
			             </div>
				        </div>
				        <div class="col-md-6">
				        	<div class="banner-desc">
				        	 <img src="images/train1.jpg" alt="First slide" />
				          <div class="see-features"><center><a href="train.php"> Train Ticket Book</a></center></div>
				          </div>
				         </div>
				      </div>
			        </div>
					   <div class="item">
			         
			          <div class="row">
			          	<div class="col-md-6">
				        	<div class="banner-img">
			                <img src="images/biman.jpg" alt="First slide" />
			             </div>
				        </div>
				        <div class="col-md-6">
				        	<div class="banner-desc">
				        	 <img src="images/biman1.jpg" alt="First slide" />
				          <div class="see-features"><center><a href="airplane.php"> Airplane Ticket Book</a></center></div>
				          </div>
				         </div>
				      </div>
			        </div>
			       </div>
			      </div>
			      <a class="left carousel-control left-arrow" href="#myCarousel" data-slide="prev"><span><i class="fa fa-chevron-left"></i></span></a>
			      <a class="right carousel-control right-arrow" href="#myCarousel" data-slide="next"><span><i class="fa fa-chevron-right"></i></span></a>
				   <a class="right carousel-control right-arrow" href="#myCarousel" data-slide="next"><span><i class="fa fa-chevron-right"></i></span></a>
			    </div><!-- /.carousel -->
	           </div>
	          <span class="big-arrow"></span>
             </div>
   <!-- End Header -->
   
   <!-- Start Main Content -->
	 <div class="main">	 
	 	 <div class="wrap">
	 	<div class="features">
	 		<div class="row">
		        <div class="col-lg-4">
		          <img src="images/bus facility.png" alt="" />
		          <h2>Great Bus Facility</h2>
		          <p>We will only guide you those buses which are having high class facility and has best safety measures. </p>
		          
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		        <img src="images/train facility.jpg" alt="" />
		          <h2>Great Train Facility</h2>
		          <p>We will only guide you those train which are having high class facility and has best safety measures. </p>
		         
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		          <img src="images/biman facility.jpg" alt="" />
		          <h2>Great Airplane Facility</h2>
		          <p>We will only guide you those airplane which are having high class facility and has best safety measures. </p>
		        </div><!-- /.col-lg-4 -->
		      </div>
		   </div>
		   
		   <div class="support">
		   	<div class="container-fluid">
			  <div class="row">
			   <div class="col-lg-10">
			   	<h2>24/7 Service & Support</h2>
			   	<p>Our toll free number will be available 24/7 in case of any emergency.</p>
			   </div>
			    <div class="col-lg-2">
			      
			   </div>
			  </div>
			</div>
		   </div>
		   
		
		 </div> 
<!-- client feedback-->
		 <div class="testimonials-news">
		   <div class="clients">
		   	 <h2>Feedback</h2>
		   	     <div class="testimonials">
		   	      <div id="carousel-demo">
		   	      	<div class="wrap">
		                <div id="owl-demo" class="owl-carousel">		                
		                <div class="item">
		                	<img class="img-circle" src="images/man1-400x400.jpg" alt="" />
		                	<h3>Abul Mal</h3>
		                	<p>“Fast and Good booking.”</p>
							<br>
							 
							<p><font color="red">Feedback</font></p>
							<span class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span></span>
                          
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
							
		                </div>
		                 <div class="item">
		                	<img class="img-circle" src="images/man2.jpg" alt="" />
		                	<h3>Donald trump</h3>
		                	<p>“Best refunding facilities.”</p>
							<br>
							 
							<p><font color="red">Feedback</font></p>
							<span class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                          
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
							</span>
		                </div>
		                 <div class="item">
		                	<img class="img-circle" src="images/man3.jpg" alt="" />
		                	<h3>KK khan</h3>
		                	<p>“Great service available at cheaper rates.”</p>
							
							 
							<p><font color="red">Feedback</font></p>
							<span class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span></span>
                          
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
							
		                </div>
		                 <div class="item">
		                	<img class="img-circle" src="images/man4.jpg" alt="" />
		                	<h3>Jweal Rana</h3>
		                	<p>“Not bad.But, can improvise.”</p>
							
							 
							<p><font color="red">Feedback</font></p>
							<span class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                          
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
							</span>
		                </div>
		                 <div class="item">
		                	<img class="img-circle" src="images/man5.jpg" alt="" />
		                	<h3>Mithu khan</h3>
		                	<p>“Festival offers are amazing.”</p>
							<br>
							 
							<p><font color="red">Feedback</font></p>
							<span class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span></span>
                          
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
							
		                </div>
		               </div>
		              </div>
		               <div class="customNavigation">
		                <a class="btn prev"><i class="fa fa-chevron-left"></i></a>
		                <a class="btn next"><i class="fa fa-chevron-right"></i></a>             
		              </div>
		         </div>
		      </div>
	       </div>
	 </div>
    </div>
   <!-- End Main Content -->
	   
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