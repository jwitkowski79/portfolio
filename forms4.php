<?php
if (@$_POST['submitted']) {
	$first_name = @$_POST['first_name'];
  $last_name = @$_POST['last_name'];
  $email = @$_POST['email'];
  $msg = @$_POST['message'];
	
// set up variables for use in the mail function 
	$destination_email="shadow4611@verizon.net";
	$email_subject="My PHP form info";
//assemble the email body text in a variable 	
$email_body = "$first_name\n$last_name\n$msg\n$email";

//test to this point before uncommenting the mail function 	
// send the email using PHP's mail function 	
 ////mail ($destination_email, $email_subject, $email_body);  // UNCOMMENT TO SEND MAIL
  echo "Email sent";
}       // end of if post submitted 	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Codin' - Form processing</title>
<link type="text/css" media="screen" href="../css/codin_styles.css" />
</head>
<body>
  <div id="content">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <h3>Send me a message!</h3>
	<label for="first_name"	>First Name*</label><br />
      <input name="first_name" type="text" size="20" id="first_name" /><br />
	  <label for="last_name">Last Name*</label><br />
      <input name="last_name" type="text" size="20" id="last_name" /><br />
      <label for="email">Email*</label><br />
      <input name= "email" type="text" size="20" id="email" /><br />
	  <label for="message">Enter your comments or questions.</label><br />
	  <textarea name="message" rows="3" cols="20" id="message"></textarea><br />
	  <input type="submit" name="submitted" value="Go" />
		</form>
  </div>
</body>
</html>

