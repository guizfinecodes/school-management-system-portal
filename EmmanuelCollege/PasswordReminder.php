<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>PHPMailer</title>
</head>
<body>
<?php
	if (!array_key_exists('Submitted',$_POST))
	{
?>
		<form method="post" action="PHPMailer.php">
		<input type="hidden" name="Submitted" value="true"><br>
		Mail Server: <input type="text" name="Host" size="25"><br>
		If authentication is required:<br>
		Username: <input type="text" name="Username" size="25"><br>
		Password: <input type="password" name="Password" size="10">
		<hr>
		To: <input type="text" name="To" size="25"><br>
		From Email: <input type="text" name="From" size="25"><br>
		From Name: <input type="text" name="FromName" size="25"><br>
		Subject: <input type="text" name="Subject" size="25"><br>
		<textarea name="Message" cols="50" rows="10"></textarea><br>
		Using HTML: <input type="checkbox" name="HTML">
		<input type="submit" value="Send Email">
		</form>
<?php
	}
	else
	{
		require("class.phpmailer.php");
		$to = $_POST['To'];
		$from = $_POST['From'];
		$fromName = $_POST['FromName'];
		$subject = $_POST['Subject'];
		$message = $_POST['Message'];
		$host = $_POST['Host'];
		
		if (array_key_exists('HTML',$_POST))
		{
			$html = true;
		}
		else
		{
			$html = false;
		}
		
		$mail = new PHPMailer();
					
		$mail->IsSMTP(); // send via SMTP
		$mail->Host = $host; //SMTP server
		
		if (strlen($_POST['Username']))
		{
			$mail->SMTPAuth=true;
            $mail->Username=$_POST['Username'];
			$mail->Password=$_POST['Password'];
		}
		else
		{
			$mail->SMTPAuth=false;
		} 
		
		$mail->From = $from;
		$mail->FromName = $fromName;
		$mail->AddAddress($to);
		$mail->AddReplyTo($from);
		
		$mail->WordWrap = 50; // set word wrap
		$mail->IsHTML($html);
		
		$mail->Subject  = $subject;
		$mail->Body = $message;
		
		if($mail->Send())
		{
			echo "Message Sent";
		}
		else
		{
			 echo "Message Not Sent<br>";
			 echo "Mailer Error: " . $mail->ErrorInfo;
		}
	}
?>
</body>
</html>