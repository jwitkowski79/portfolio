<?php
if (@$_POST['submitted']) {
	$first_name = @$_POST['first_name'];
  $last_name = @$_POST['last_name'];
  $email = @$_POST['email'];
  $msg = @$_POST['message'];
	
		// if magic quotes on, remove Magic Quotes effect
	if ( get_magic_quotes_gpc() ) { // no arg needed - returns 1 if magic quotes are on, else 0
	  ////print "magic quotes are on";
	  $first_name = stripslashes($first_name);
	  $last_name = stripslashes($last_name);
	  $email = stripslashes($email);
	  $msg = stripslashes($msg);
	}
	
	$error_msg=array(); // intialize array 


if ($first_name=="") { // test for empty text string 

$error_msg[]="Please enter your first name";
}

if ($last_name=="") { // test for empty text string 

$error_msg[]="Please enter your last name"; // add to the array 

}
if ($email=="") { // test for empty text string 

$error_msg[]="Please enter your email"; // add to the array 

}
if ($msg=="") { // test for empty text string 

$error_msg[]="Don't forget to write your message!"; // add to the array 

}

	
// set up variables for use in the mail function 

	$destination_email="charles@bbd.com";
	$email_subject="My PHP form info";
//assemble the email body text in a variable 

	$email_body = "$first_name\n$last_name\n$msg\n$email";
	
// if no errors, and we are here b/c the form was submitted rather than the page first loading 

 	if  (!$error_msg) {
    // then send the email using PHP's mail function 
   ////mail ($destination_email, $email_subject, $email_body);
	 // redirect to a new page - we are done on this page 
   header ('Location: form_confirm.php');
	 // stop the script right here 

   exit();
}    

}       //end of if post submitted 

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
			<?php
	if ($error_msg) {
	echo "<ul>\n"; // open a list 

	  foreach ($error_msg as $err) { // write out the error array as list items 

	  echo "<li>".$err."</li>\n";
	  }
	echo "</ul>\n";    // close the list 

	} 
	?>
	<label for="first_name"	>First Name*</label><br />
      <input name="first_name" type="text" size="20" id="first_name" value="<?php echo $first_name ?>" /><br />
	  <label for="last_name">Last Name*</label><br />
      <input name="last_name" type="text" size="20" id="last_name" value="<?php echo $last_name ?>" /><br />
      <label for="email">Email*</label><br />
      <input name= "email" type="text" size="20" id="email" value="<?php echo $email ?>" /><br />
	  <label for="message">Enter your comments or questions.</label><br />
	  <textarea name="message" rows="3" cols="20" id="message"><?php echo $msg ?></textarea><br />
	  <input type="submit" name="submitted" value="Go" />
		</form>
  </div>
</body>
</html>

