<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Password Reminder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmmanuelCollege</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>

</head>
<body>

 <div class="col-md-12" style="background-color:#526F35; position:relative;top:0px;">
        <p class="text-center text-danger" style="color:white;" >	Enter your email in the form below to have your password sent to you.</p>
 </div>

<?php
	if (!array_key_exists('Submitted',$_POST))
	{
?>
		
        

		<br>
		<br>
		<br>
		      

		      <div class="container-fluid">
       <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Recover Password [only admin]</div> 
                        <p >&nbsp;&nbsp;&nbsp;<font color="chocolate">Note:* For students, please confirm your lost/forgotten password with the admin/ict or department</font></p> 
                        <div class="panel-body">  
                        <div class="col-sm-3">
        </div>
		<div class="col-sm-6" >              
		<div >
		<form method="post" action="email.php">
		<input type="hidden" name="Submitted" value="true"><br>
		<label>Email: </label>
		<input type="email" name="To" size="25" class="form-control" required=""><br>
		<input type="submit" value="Send Password" style="background-color: green; color: black;">

		<a button class="btn btn-success"  style="float: right; color: black;" title="Click to bo back"
	                                                 href="index.php">Back to Login</a>



		</form>
		</div>
		</div>
</div>
</div>
</div>
</div>
</div>
<?php
	}
	else
	{
		$to = $_POST['To'];
		@$db = new mysqli('localhost','root','','sms2');
		if (mysqli_connect_errno())
		{
		  echo 'Cannot connect to database: ' . mysqli_connect_error();
		}
		else
		{
		 	$query = "SELECT password, fname FROM admin WHERE email = '$to'";
		  	$result = $db->query($query);
		  	$row=$result->fetch_assoc();
			$password = $row['password'];
			$fname = $row['fname'];
			//Sending of password using phpmmailer	
			require("PHPMailer_5.2.0/class.phpmailer.php");
			
			$message = "Hello $fname.<br> Your password is <u>$password</u>.";
		
			$mail = new PHPMailer();					//Use phpmailer to send instead of inbult php mail()				
			$mail->isSMTP();                            // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                     // Enable SMTP authentication
			$mail->Username = 'finecodes@gmail.com';// SMTP username
			$mail->Password = 'guiz100guiz'; 			// SMTP password
			$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
			$mail->FromName = "Mailer";
			$mail->WordWrap = 50;                       // set word wrap
			$mail->IsHTML(true);                        // send as HTML
			$mail->Port = 25;                          // TCP port to connect to

		  	$mail->From = 'finecodes@gmail.com';
			$mail->FromName = 'System Admin';
			$mail->AddAddress('brianguis@gmail.com'); //change it to your email address to actually get the email! 
			$mail->AddBCC('guiz@guiz.com'); 
			$mail->AddReplyTo('finecodes@gmail.com');
		
			$mail->Subject  = 'password Reminder';
			$mail->Body = $message;
		
			if($mail->Send())
			{
				echo "Your password has been sent.";
				echo '<br>';
			 	echo '<a button class="btn btn-success" title="Click to bo back"
                                                 href="index.php">Back</a>';
			}
			else
			{
				echo "<br>Hello <font color=#blue;> $fname: </font> ";
				 echo "Sorry, We could not send your password...<br>";
				 echo "" . $mail->ErrorInfo;
				 echo '<br>';
				 echo '<a button class="btn btn-success" title="Click to bo back"
	                                                 href="email.php">Back</a>';
			 }
		}
	}
?>

</div>

<div class="col-md-12" style="background-color:#526F35; position:fixed;bottom:0px;">
        <p class="text-center text-danger" style="color:white;" >Copyright &copy; #fine-codes @G. Brian Tel: +2547453226</p>
    </div>
</body>
</html>