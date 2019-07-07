<?php
 $service_array = array("");
 $to = "info@canductcleaning.ca";
 $subject = "Request Quote Form | Can Duct Cleaning";
 $serviceListing = implode(", ", $_POST['service-select']);

 
 $body = "From: ".$_POST['name']."\n\n" . "Email: ".$_POST['email']."\n\n" . "Number: ".$_POST['number']."\n\n" . "Residential / Commercial: " . $_POST['contract']."\n\n" . "Address: ".$_POST['address']."\n\n" . "City: ".$_POST['city']."\n\n" . "Zipcode: ".$_POST['zip']."\n\n" . "Square Feet: ".$_POST['sqfeet']."\n\n" . "Services: " . $serviceListing ."\n\n" . "Message: ".$_POST['message'];
 
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success', 'message' => 'Message sent successfully. Thank you, will get back to you soon!');
  } else {
$responseArray = array('class' => 'alert alert-danger', 'message' => 'There was an error while submitting the form. Please try again later.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;

 ?>