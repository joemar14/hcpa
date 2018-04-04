
<!doctype html>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Honda Cars Pangasinan Inc.</title>
<meta property="og:image" content="http://hondapang.com.ph/img/slideshow/civic%20type%20r.png" />
<meta property="og:description" content="Power Of Dreams | Official Website of Honda Cars Pangasinan Inc." />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- css/js -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="js/script.js"></script>
<script src="js/jquery-3.1.1.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<script src="js/collapse.js"></script>
<script src="js/transition.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
<!-- Latest compiled and minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
-->
<!-- Optional theme
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
-->
<!-- Latest compiled and minified JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->
<style>
	nav {
		z-index: 5;
	}
	.navbar-default {
		background-color: #FFF;
		border: none;
	}
	.navbar-default .navbar-nav > .active > a,
	.navbar-default .navbar-nav > .active > a:hover,
	.navbar-default .navbar-nav > .active > a:focus{
		background-color: #4D4D4D;
		color: #FFF;
	}
	.navbar-default .navbar-nav > li > a:hover{
		background-color: #4D4D4D;
		color: #FFF;
	}
	.navbar-default .navbar-nav .dropdown-menu > li > a:hover{
		background-color: #4D4D4D;
		color: #FFF;
	}
	.navbar-default .navbar-collapse .navbar-nav .dropdown-menu > li > a:hover{
		background-color: #4D4D4D;
		color: #FFF;
	}
	.dropdown:hover .dropdown-menu,
	.dropdown:focus .dropdown-menu
	{
	display: block;
	}

</style>


</head>
<body>



	
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
	<script>
		// ===== Scroll to Top ==== 
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
				$('#return-to-top').fadeIn(200);    // Fade in the arrow
			} else {
				$('#return-to-top').fadeOut(200);   // Else fade out the arrow
			}
		});
		$('#return-to-top').click(function() {      // When arrow is clicked
			$('body,html').animate ({ 
				scrollTop : 0                       // Scroll to top of body
			}, 500);
		});
	
	</script>
<!-- header -->
<header class="container">
	<div class="row">
		<div class="col-md-10" style="background-color: #1A1A1A; height: 30px;">
			<p><strong>Honda Cars</strong> <a href="#">Pangasinan</a> | <a href="#">Baguio</a> | <a href="#">Launion</a> | <a href="#">Ilocos Norte</a></p>
		</div>
		<div class="col-md-2 text-right" style="background-color: #6E6E6E; height: 30px; padding-bottom: 2px;">
			<ul>
				<li style="display: inline-block;"><p style="font-size: 15px;margin: auto;color: #FFF">Follow Us:</p></li>
				<li style="display: inline-block;"><a href="https://www.facebook.com/hondapangasinan" target="_blank"><img atl="facebook" src="img/fb.png"/></a></li>
			</ul>			
		</div>
	</div>
</header>

<!-- main navigation -->
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="1">
  <div class="container">
    <div class="navbar-header" style="height:70px;margin-top: -8px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="margin-top: 25px;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      	<div class="logo">
      		<a class="navbar-brand" href="index.html"><img src="powerofdreams.png" width="180px"/></a>
		</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		  <li class="active"><a href="#" >Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Model Lineup</a>
        	<ul class="dropdown-menu">
				<li><a href="city.html">City</a></li>
        		<li><a href="civic.html">Civic</a></li>
        		<li><a href="civictyper.html">Civic Type R</a></li>
        		<li><a href="jazz.html">Jazz</a></li>
        		<li><a href="brio.html">Brio</a></li>
        		<li><a href="brioamaze.html">Brio Amaze</a></li>
        		<li><a href="accord.html">Accord</a></li>
        		<li><a href="legend.html">Legend</a></li>
        		<li><a href="crv.html">CR-V</a></li>
        		<li><a href="hrv.html">HR-V</a></li>
        		<li><a href="brv.html">BR-V</a></li>
        		<li><a href="mobilio.html">Mobilio</a></li>
        		<li><a href="odessy.html">Oddesy</a></li>
        		<li><a href="pilot.html">Pilot</a></li>
        	</ul>
        </li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
			<ul class="dropdown-menu">
				<li><a href="#">PM Packages</a></li>
        		<li class="active"><a href="#">Service Appointment</a></li>
        		<li><a href="#">Service History Request</a></li>
        		<li><a href="#">Service Status</a></li>
        		<li><a href="#">Detailing</a></li>
        		<li><a href="#">Servicing Guidelines</a></li>
        		<li><a href="elitecard.html">Elite Card</a></li>
        		<li><a href="#">Towing</a></li>
        		<li><a href="servicepromos.html">Service Promos</a></li>
        	</ul>
		</li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Parts</a>
			<ul class="dropdown-menu">
				<li><a href="#">Parts Inquiry</a></li>
        		<li><a href="partspromos.html">Promo/Sales</a></li>
			</ul>
		</li>
		<li><a href="#">Insurance</a></li>
		<li><a href="#">Facilities</a></li>
		<li><a href="contacts.html">Contacts</a></li>
		<li><a href="aboutus.html">About Us</a></li>
		</ul>
   		<button class="btn btn-danger navbar-btn navbar-right" onclick="document.getElementById('inquiry').style.display='block'">Inquire Now!</button>
   					<div id="inquiry" class="w3-modal">
						<div class="w3-modal-content w3-animate-top w3-card-8">
						  <header class="w3-container w3-dark-grey"> 
							<span onclick="document.getElementById('inquiry').style.display='none'" class="w3-closebtn">&times;</span>
							<h2>Make Inquiry</h2>
						  </header>
						  <!-- Inquiry Form -->
							
							<iframe src="inquiry.php" width="100%" height="400px" ></iframe>
											  <footer class="w3-container w3-dark-grey">
												<p>Thank You!</p>
											  </footer>
											</div>
				</div>
    </div>
  </div>
</nav>

<?php include('phpprocess/form_process.php'); ?>
<div class="container">

				<h1>Book Service Appointment</h1>
<div class="col-sm-6">
					<form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
				  	  <div class="form-group">
						<label for="name">Name</label>
						<input name="Name" type="text" class="form-control" placeholder="Your Name" value="<?= $name ?>" tabindex="1" autofocus>
						<span class="error" style="color: #FF0004"><?= $name_error ?></span>
					  </div>
					  <div class="form-group">
						<label for="phonenumber">Phone Number</label>
						<input name="Phone" type="text" class="form-control" placeholder="Your Phone Number" value="<?= $phone ?>" tabindex="2">
						<span class="error" style="color: #FF0004"><?= $phone_error ?></span>
					  </div>
					  <div class="form-group">
						<label for="email">Email address</label>
						<input name="Email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Your Email" value="<?= $email ?>" tabindex="3">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						<span class="error" style="color: #FF0004"><?= $email_error ?></span>
					  </div>
				  						<div class="row">
				  							<div class="col-sm-6">
													<div class="form-group">
													  <label for="sel1">HONDA Unit:</label>
													  <select class="form-control" name="HondaUnit" value="<?= $hondaunit ?>" tabindex="4">
														<option disabled selected>Your Honda Unit</option>
														<option>City</option>
														<option>Civic</option>
														<option>Civic Type-R</option>
														<option>Jazz</option>
														<option>Brio</option>
														<option>Brio-Amaze</option>
														<option>Accord</option>
														<option>Legend</option>
														<option>CR-V</option>
														<option>BR-V</option>
														<option>HR-V</option>
														<option>Mobilio</option>
														<option>Oddessy</option>
														<option>Pilot</option>
														<option>Not Honda Owner</option>
													  </select>
													  
													</div>
											</div>
											<div class="col-sm-6">
												  <div class="form-group">
													<label for="yearmodel">Year Model</label>
													<input name="YearModel" type="text" class="form-control" placeholder="Your Model" value="<?= $yearmodel ?>" tabindex="5">
													<span class="error" style="color: #FF0004"><?= $yearmodel_error ?></span>
												  </div>
											</div>
											<div class="col-sm-12"><span class="error" style="color: #FF0004"><?= $hondaunit_error ?></span></div>
										</div>
										
												  <div class="form-group">
													<label for="otherunit">Other Brand/Model Specify here:</label>
													<input name="OtherBrandUnit" type="text" class="form-control" placeholder="Other Brand and Model" value="<?= $otherunit ?>" tabindex="6">
												  </div>
										
					  
					  
</div>
<div class="col-sm-6">
							<div class="form-group">
						<label for="platenumber">Unit Plate Number</label>
						<input type="text" class="form-control" name="Platenumber" placeholder="Your Unit Plate Number" value="<?= $platenumber ?>" tabindex="7">
						<span class="error" style="color: #FF0004"><?= $platenumber_error ?></span>
					  </div>
					  
						<div class="form-group">
						  <label for="sel1">Type Of Service:</label>
						  <select class="form-control" name="Service" value="<?= $service ?>" tabindex="5">
						  	<option disabled selected>Your Type Of Service</option>
							<option>Preventive Maintainance</option>
							<option>H3S (Change Oil)</option>
							<option>General Repair</option>
							<option>Body and Paint</option>
							<option>Full Rustproofing</option>
							<option>Undercoating</option>
							<option>Whole Body Buffing</option>
							<option>H3S (Change Oil)</option>
							<option>Paint Polish and Protect</option>
							<option>Glass Polish and Protect</option>
							<option>FULL Exterior Detailing Package</option>
							<option>Leather Clean & Condition</option>
							<option>Carpet Shampoo</option>
							<option>Pull-out carpet</option>
							<option>FULL Interior Detailing Package</option>
							<option>Engine Wash</option>
							<option>Engine Detailing</option>
							<option>Complete Car Wash & Vacuum</option>
							<option>Underwash</option>
							<option>Wash and Wax</option>
							<option>Complete Wash & Wax w/ Engine Wash</option>
							<option>Complete Wash & Wax w/ Engine Detailing</option>
						  </select>
						  <span class="error" style="color: #FF0004"><?= $service_error ?></span>
						</div>
					  
								
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
											  <label for="sel1">HCPA Service Center:</label>
											  <select class="form-control" name="ServiceCenter" value="<?= $branch ?>" tabindex="5">
												<option disabled selected>Select Appointment Location</option>
												<option>Pangasinan (Main)</option>
												<option>Baguio</option>
												<option>Launion</option>
											  </select>
											  <span class="error" style="color: #FF0004"><?= $branch_error ?></span>
											</div>
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
											<label for="sel1">Appointment Date & Time:</label>
												<div class='input-group date' id='datetimepicker1'>
													<input id="datepicker" type='text' class="form-control" name="DateAndTime" value="<?= $datepicker ?>" tabindex="8"/>
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
												<span class="error" style="color: #FF0004"><?= $datepicker_error ?></span>
											</div>
										</div>
										<script type="text/javascript">
											$(function () {
												$('#datetimepicker1').datetimepicker();
												
											});
										</script>
									</div>
									
								
					  	<div class="form-group">
						  <label for="message">Message </label><small> (Optional)</small>
						  <textarea class="form-control" rows="5" name="Message" value="<?= $message ?>" tabindex="9"><?= $message ?></textarea>
						</div>
						
						 		<div style="text-align: right;">
						 		<button type="submit" name="submit" class="btn btn-primary" style="margin-right: 0;">Book Me</button>
								</div>
						 		
								<div class="success" style="color: #07A70A"><b><?= $success ?></b></div>
</div>
					 
					</form>
	
</div>



	
<div class="space"></div>
<div class="container">
<div class="row">

	<div class="col-sm-6 text-left footer">
		<a href="#">Abouts</a> | 
		<a href="#">News and Events</a> | 
		<a href="#">Affiliates</a> | 
		<a href="#">Customer Welfare Desk</a> |
		<a href="#">Testimonials</a> |
		<a href="#">Job Opportunities</a> | 
		<a href="#">Location Map</a>
	</div>
	<div class="col-sm-6 text-right">
	<p style="font-size: 10px;font-style: italic;">Powered By: <img src="img/NEW HONDA LOGO.png" width="20%"/></p>
	<p style="font-size: 11px;font-style: italic;">Copyright © 2016. Honda Cars Pangasinan Inc. (HCPA). All Rights Reserved.</p>
	</div>

	</div>
	</div>
</body>
</html>
