<?php	
	if(
		(empty($_POST['NAME']) && strlen($_POST['NAME']) == 0) || 
		(empty($_POST['EMAIL']) && strlen($_POST['EMAIL']) == 0) || 
		(empty($_POST['QUESTION']) && strlen($_POST['QUESTION']) == 0) || 
		(empty($_POST['CONTENT']) && strlen($_POST['CONTENT']) == 0)
		)
	{
		return false;
	}

	
	
	$name = $_POST['NAME'];
	$email = $_POST['EMAIL'];
	$question = $_POST['QUESTION'];
	$cotent = $_POST['CONTENT'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nQuestion: $question \nMessage: $cotent \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>