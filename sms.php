<?php

// this line loads the library 
require('twilio-php/Services/Twilio.php'); 
 
$account_sid = 'AC6bc2ed38187401d570af1a9e8f2d7ee9'; 
$auth_token = 'ca71475b49bee75fde9b82305a581204'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => "+9546679128", 
	'From' => "+19542896776", 
	'Body' => "Hola brother",   
));