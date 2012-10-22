<?php
/*----------------------------------------------------------
Author 	: www.mkeefedesign.com | Matthew Keefe
Contact : matt@mkeefedesign.com
$Id: send_email.php ,v 1.0 Tue Apr 26, 2005 02:20 PM
------------------------------------------------------------
* CODING & DESIGN ©2004 mkeefeDESIGN | ALL RIGHTS RESERVED
------------------------------------------------------------*/

$recipients = "witkowski8@verizon.net" . ",";
$subject = "The Message";

// The following three variables are gathered from Flash
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];
$phone = $_POST['phone'];


// Grab todays date
$date = date("F j, Y", time());

// This block is the actual message that is sent in the email
$email_info .= "Below is the visitors contact info and message.\n\n";
$email_info .= "Visitor's Info:\n";
$email_info .= "-----------------------------------------\n";
$email_info .= "Name:  " . $name . "\n";
$email_info .= "Email:  " . $email . "\n";
$email_info .= "Phone:  " . $phone . "\n";
$email_info .= "Date Sent:  " . $date . "\n\n";
$email_info .= "Message\n";	
$email_info .= "-----------------------------------------\n";
$email_info .= "" . $message . "\n";

$mailheaders = "From: " . $email . "\n";
$mailheaders .= "Reply-To: " . $email . "\n\n";

if(mail($recipients, $subject, $email_info, $mailheaders)) {
	// Print a success for Flash to know the email is being sent
	print "&success=true";
}

?>