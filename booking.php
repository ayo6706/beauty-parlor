<?php
include "admin/db.php";
if(isset($vt)){
        $vt=$_GET['vt'];
    }

    $vt=$_GET['vt'];

	// variable declaration
	if($vt=='save')
	{
		$username = $_POST['username'];
        $email = $_POST['email'];

        $contact = $_POST['contact'];

        $date = $_POST['date'];
        $time = $_POST['time'];
        $services = $_POST['services'];
        $specialist = $_POST['specialist'];




		$sql= "INSERT  INTO booking (username, email, contact, date ,time, services, specialist) VALUES('$username','$email','$contact','$date','$time', '$services','$specialist')";
		if(mysqli_query($conn, $sql))
			header("location: index.html");
		else
			$msg='error1:'.mysqli_error();

	}


?>


<!DOCTYPE HTML>
<html>
<head>
<title>QBSSH </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Beauty Salon Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="cssB/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="cssB/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Signika:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1>QBSSH Appointment Form </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Make an appointment</h2>
			<form action="booking.php?vt=save" method="post">
			<div class="left-agileits-w3layouts same">
				<div class="gaps">
					<p>Your Name</p>
					<input type="text" name="username" placeholder="" required=""/>
				</div>	
				<div  class="gaps">
					<p>Email Id</p>
					<input type="email" name="email" placeholder="" required="" />
				</div>	
				<div class="gaps">	
					<p>Contact Number</p>
					<input type="text" name="contact" placeholder="" required=""/>
				</div>
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Book Your Date</p>		
				<input  id="datepicker1" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			<div class="gaps">
				<p>Book Your Time</p>		
				<input type="text" id="timepicker" name="time" class="timepicker form-control" value="">
			</div>
			<div class="gaps">
				<p>Services</p>	
				<select class="form-control" name="services">
					<option></option>
					<option>Facial Masking</option>
					<option>Nail polish</option>
					<option>Hair Dressing</option>
					<option>Foot Therapy</option>
					<option>Hair Treatment</option>
					<option>Spa Therapy</option>
				</select>
			</div>
			<div class="gaps">
				<p>Specialist</p>	
				<select class="form-control" name="specialist">
					<option></option>
					<option>First Available</option>
					<option>Trendy (stylist)</option>
					<option>Ifunaya (manicure therapist) </option>
					<option>Frankizy (stylist)</option>
					<option>Fola (pedicure therapist)</option>
					<option>Jane (facials)</option>
					<option>Tony (Spa specialist)</option>
				</select>
			</div>
			</div>
			<div class="clear"></div>
				<input type="submit" value="Make an appointment">
			</form>
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2018 QBSSH Appointment Form | All Rights Reserved </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="jsB/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="jsB/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<link rel="stylesheet" href="cssB/jquery-ui.css" />
				<script src="jsB/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>