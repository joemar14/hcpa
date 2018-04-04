<?php 

// define variables and set to empty values
$name_error = $email_error = $phone_error = $hondaunit_error = $yearmodel_error = $platenumber_error =$platenumber_error = $service_error = $datepicker_error = $branch_error="";
$name = $email = $phone = $message = $hondaunit = $yearmodel = $platenumber = $otherunit = $success = $service = $datepicker = $branch ="";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed"; 
    }
  }

if (empty($_POST["Phone"])) {
    $phone_error = "Phone is required";
  } else {
    $phone = test_input($_POST["Phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid phone number"; 
    }
  }
	
  if (empty($_POST["Email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  
	if (empty($_POST["HondaUnit"])) {
		$hondaunit_error = "Your Car/Unit Model and Year is required, Please select <b>'Not Honda Owner'</b> if Other Brand and specify below.";
	  } else {
		$hondaunit = test_input($_POST["HondaUnit"]);
	  }
	
	if (empty($_POST["YearModel"])) {
    $otherunit = "";
  } else {
    $otherunit = test_input($_POST["YearModel"]);
  }
	
	if (empty($_POST["OtherBrandUnit"])) {
    $otherunit = "";
  } else {
    $otherunit = test_input($_POST["OtherBrandUnit"]);
  }
	
	if (empty($_POST["Platenumber"])) {
		$platenumber_error = "Platenumber is required";
	  } else {
		$platenumber = test_input($_POST["Platenumber"]);
	  }
	
	if (empty($_POST["Service"])) {
		$service_error = "Service Type is required";
	  } else {
		$service = test_input($_POST["Service"]);
	  }
	
	if (empty($_POST["ServiceCenter"])) {
		$branch_error = "Service Center Location is required";
	  } else {
		$branch = test_input($_POST["ServiceCenter"]);
	  }
	
	if (empty($_POST["DateandTime"])) {
		$datepicker = "";
	  } else {
		$datepicker = test_input($_POST["DateandTime"]);
	  }


  if (empty($_POST["Message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["Message"]);
  }
  
  if ($name_error == '' and $email_error == '' and $phone_error == '' and $hondaunit_error == ''  and $platenumber_error == '' and $service_error == '' and $branch_error == '' and $datepicker_error == ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'service@hondapang.com.ph, jmcornel@hondapang.com.ph, vperez@hondapang.com.ph, jmcasilang@hondapang.com.ph';
      $subject = 'Booking Appointment Request';
      if (mail($to, $subject, $message_body)){
          $success = "Booking Request Sent, You will Recieve a confirmation that you are Successfully Booked on your Phone Number/Email.<br/>Thank You For Booking.";
          $name = $email = $phone = $platenumber = $service = $branch = $message = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
