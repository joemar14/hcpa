	<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Honda Cars Pangasinan Inc.</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- css/js -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/w3.css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="js/script.js"></script>
<script src="js/jquery-3.1.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
		</head>
						<body>
							
							
							<?php include('phpprocess/inquiry_form_process.php'); ?>
								<div class="w3-container" style="height: 300px;">
								<div class="space"></div>
								
								<div class="col-sm-6">
								
								<form id="contact" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
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
									<br/><span class="error" style="color: #FF0004"><?= $email_error ?></span>
								  </div>
								  
									
									
									
								</div>
								<div class="col-sm-6">
									<div class="form-group">
													  <label for="sel1">Inquiry to:</label>
													  <select class="form-control" name="Department" value="<?= $department ?>" tabindex="4">
														<option disabled selected>Select Department</option>
														<option>Sales</option>
														<option>Service</option>
														<option>Parts</option>
														<option>Insurance</option>
													  </select>
										<span class="error" style="color: #FF0004"><?= $department_error ?></span>
													  
									</div>
									<div class="form-group">
						  			<label for="message">Message </label>
						 				 <textarea class="form-control" rows="5" name="Message" value="<?= $message ?>" tabindex="4"><?= $message ?></textarea>
						 				 <span class="error" style="color: #FF0004"><?= $message_error ?></span>
										</div>
									<div style="text-align: right;">
						 			<button id="submit" type="submit" name="submit" class="btn btn-primary" style="margin-right: 0;">Inquire</button>
									</div>	
						 						
									<div class="success" style="color: #07A70A"><b><?= $success ?></b></div>
								</div>
							  
							  <div class="space"></div>
							  
							  </form>
									
						  </div>
		</body>
</html>
