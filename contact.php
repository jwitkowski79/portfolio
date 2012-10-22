<?php $currentPage="contact";?>
<?php include("header.php"); ?>

<div id="rightCol">
<h4>Contact Me</h4>
<p>If you have a question or are interested in my work, please fill out the form below<br/>or email me at <a href="mailto:jwitkowski79@gmail.com">jwitkowski79.gmail.com</a></p>

	<?php
		
		if (isset($_POST['name'])) {
			
			$contactname = $_POST['name'];
			$contactemail = $_POST['email'];
			$comments = $_POST['comments'];
			
			$emailBody = "Name: ". $contactname ."\n";
			$emailBody .= "Email: ". $contactemail ."\n";
			$emailBody .= "Comments: ". $comments ."\n";
			
			$toAddy = "jwitkowski79@gmail.com";
			$subject = "Portfolio Contact Form";
			
			mail($toAddy, $subject, $emailBody);
			
			?>
			
			<h2>Thanks for you interest, you'll be hearing from me shortly!</h2>
			
			
		<?php } else { ?>	
	
		<form method='post' action='<?php echo htmlentities($_SERVER['PHP_SELF']) ?>'>
		
			<label>Name:</label>
			<input type='text' id='name' name='name' />
			
			<label>Email:</label>
			<input type='text' id='email' name='email' />
			
			<label>Comments or Question:</label>
			<textarea id='comments' name='comments'></textarea>
			
			<input type='submit' value='Send Email' class='button' />
		
		</form>
		
	<?php } ?>


</div>
</div>
</body>
</html>