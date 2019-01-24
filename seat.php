
<?php
require_once 'connect/connect.php';
$stmt =mysqli_query($conn, "SELECT * FROM route");


$id=$_GET['id'];
$result =mysqli_query($conn, "SELECT * FROM booking where id='".$id."'");
$res =mysqli_query($conn, "SELECT * FROM route_manage where id='".$id."'");
$row=mysqli_fetch_array($res);
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
                                <li><a href="contact.html">Contact Us</a></li>

				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>
           </div>
		<!-- header bar end -->
<style>

body{
	background: url("image/tt.jpg");
 display: block;
}


</style>
<marquee behavior="alternate" id="mov"><font face='Cursive' font size='4' color='blue'>আপনার টিকেট নির্বাচন করুন.......</font></marquee>
		<div class="mainbody">
			

			


			<div class="contactus_body">
			<div class="contactus_header">
		  <center>	<h3>  Seat Booking</h3></center>
		  </div>
		  

		  <div class="container">
    <div id="seat-map"><div id="legend"></div>
     
</div>
 
    <div class="booking-details">
	<form action="bkash.php?id=<?php echo $id; ?>" method="POST" class="form-horizontal "> 
      <h2>Booking Details</h2>
      
	  
     
       <div class="row">
	   <div class="col-md-7 margin" >
					
					<div class="form-group">
						<select class="form-control"  id="selected-seats" name="seat[]" multiple="multiple" readonly></select>
					</div>
					
				</div>
				<div class="col-md-4">
				<div class="form-group">
						Tickets: <input class="form-control" id="counter" name="counter" readonly></input>
					</div>
					<div class="form-group">
						Total(Tk): <input class="form-control" id="total" name="total" readonly></input>
					</div>
				</div>
	  </div>
  </div>
  <div class="booking-details">
   <h2 style="border: black 3px solid;margin-left:-35px;margin-top:-21px;text-align:center;background-color:green;color:white;">Customer Details</h2>
      <div class="row">
	  
				<div class="col-md-5" >
				<div class="form-group">
						<input class="form-control" type="text" name="sseat" placeholder=" Enter Your Ticket No"required>
					</div>
					
					<div class="form-group">
						<input class="form-control" type="text" name="fname" placeholder=" Enter Your First Name"required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="lname" placeholder=" Enter Your Last Name"required>
					</div>
					<div class="form-group">
						<input class="form-control " type="text" name="contact" placeholder=" Enter Your Contact Number"required>
					</div>
				</div>
				
				<div class="col-md-5">
				  <textarea  class="form-control " cols="37" rows="3" name="address" placeholder=" Enter Your Address"required></textarea>
				<br>
				  <select class="form-control" name="payment_gateway"required>
				  <option>SELECT Payment Gateway</option>
				  <option>Bkash</option>
				  </select>
				 </div>
				
				<div class="col-md-10">
				<button name="book"  class="btn btn-primary btn-block" >Confirm</button>
				</div>
				</form>
			</div>
	  
  </div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="jquery.seat-charts.js"></script> 
<script>
			var firstSeatLabel = 1;
		
			$(document).ready(function() {
				var price=0;
				var $cart = $('#selected-seats');
				var	$counter = $('#counter');
				var	$total = $('#total');
				var	sc = $('#seat-map').seatCharts({
					map: [
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'ee_ee',
						'eeeee',
					],
					seats: {
						
						e: {
							price   : <?php echo $row['price']; ?>,
							//classes : 'economy-class', //your custom CSS class
							//category: 'Seat '
						}					
					
					},
					naming : {
						top : false,
                       rows: ['A', 'B', 'C', 'D' ,'E' ,'F' ,'G' ,'H', 'I' ],
						getLabel : function (character, row, column) {
							return firstSeatLabel++;
						},
					},
					legend : {
						node : $('#legend'),
					    items : [
							[ 'e', 'available',   'available'],
							[ 'e', 'unavailable', 'Booked']
					    ]					
					},
					click: function () { //Click event
        if (this.status() == 'available') { //optional seat
            var maxSeats = 5;
            var ms = sc.find('selected').length;
            //alert(ms);
            if (ms < maxSeats) {

                price = this.settings.data.price;



       
$('<option selected>Seat Number: '+this.settings.label+' |  Price: '+this.settings.data.price+'</option>')
                .attr('id', 'cart-item-'+this.settings.id)
                .attr('value', this.settings.id + "|" + this.settings.data.price)
                .attr('alt', price)
                .data('seatId', this.settings.id)
                .appendTo($cart);
				
				
                $counter.text(sc.find('selected').length+1);
                $counter.attr('value', sc.find('selected').length+1);

                $total.text(recalculateTotal(sc));
                $total.attr('value', recalculateTotal(sc));

                return 'selected';
            }
                alert('You can only choose '+ maxSeats + ' seats.');
                return 'available';

        } else if (this.status() == 'selected') { //Checked

                //Update Number
                $counter.text(sc.find('selected').length-1);
                $counter.attr('value', sc.find('selected').length-1);

                //Delete reservation
                $('#cart-item-'+this.settings.id).remove();

                //update totalnum
                $total.text(recalculateTotal(sc));
                $total.attr('value', recalculateTotal(sc));

                //Delete reservation
                  //$('#cart-item-'+this.settings.id).remove();
                //optional
                return 'available';

        } else if (this.status() == 'unavailable') { //sold
            return 'unavailable';

        } else {
            return this.style();
        }
    }
});

function number_format (number, decimals, decPoint, thousandsSep) { // eslint-disable-line camelcase

  number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
  var n = !isFinite(+number) ? 0 : +number
  var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
  var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
  var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
  var s = ''
  var toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec)
    return '' + (Math.round(n * k) / k)
      .toFixed(prec)
  }
  // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || ''
    s[1] += new Array(prec - s[1].length + 1).join('0')
  }
  return s.join(dec)
}

// Add total money
function recalculateTotal(sc) {
    var total = 0;
    $('#selected-seats').find('option:selected').each(function () {
        total += Number($(this).attr('alt'));
    });

    return number_format(total,2,'.','');
}
		//let's pretend some seats have already been booked
			//	sc.get(['A_2', 'D_1', 'G_1', 'G_2']).status('unavailable');
			<?php 
    //Fetch all rows for each booking   
	$avl = mysqli_query($conn, "select BOOKING_SEAT from booking where bus_no='".$row['bus_no']."' and date='".$row['date']."'");
     
	echo " $(document).ready(function(){";
    while ($rsss=mysqli_fetch_array($avl)) {
        echo "sc.get(['".$rsss['BOOKING_SEAT']."']).status('unavailable'); \n";
    }
    echo "});";
    ?>
		});



</script>
      </div>
      
      
      


		</div>
		
	
		</div>
	</div>
	 <!-- Start Footer -->
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			 <div class="footer-bottom">
			 	<div class="wrap">
			 	<div class="copy-right">
			 		<p> Copyright vai&copy; 2018-2019  all right reserved.</p>
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