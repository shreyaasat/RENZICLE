<?php

if(isset($_POST['send-mail']) && isset($_FILES['attachFile']))
{
   
	$from_email		 = 'renzicleindia@gmail.com'; 
	$recipient_email = $_POST['email']; 
	
	$subject	 = $_POST["sub"]; 
	$message	 = $_POST["msg"]; 

	
	$tmp_name = $_FILES['attachFile']['tmp_name']; 
	$name	 = $_FILES['attachFile']['name']; 
	$size	 = $_FILES['attachFile']['size']; 
	$type	 = $_FILES['attachFile']['type']; 
	$error	 = $_FILES['attachFile']['error']; 

	if($error > 0)
	{
		die('Upload error or No files uploaded');
	}

	$handle = fopen($tmp_name, "r"); 
	$content = fread($handle, $size); 
	fclose($handle);				

	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random");


		
	$body = "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$body .= $encoded_content; 
	
	$sentMailResult = mail($recipient_email, $subject, $message);

	if($sentMailResult )
	{
	echo "<h3>Thank You for Contacting us. We will get back to you shortly.<h3>";
	}
	else
	{
	die("Sorry but the email could not be sent.
					Please go back and try again!");
	}
}
?>
