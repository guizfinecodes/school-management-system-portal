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
	<link rel="stylesheet" type="text/css" href="style.css">

     <div class="header-top-info">

                <div class="container">
                   <!-- <div class="row">-->
                        <div class="top-info-left">
                          <div class="col-md-4 col-sm-3 col-xs-6 text-left">
                                <!--<header class="mainHeader">-->
                <img src= "img/logo.JPG">
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12 text-left">
                                <a href="#"><action=email to:><i class="fa fa-envelope"></i>customersupport: brianguis@gmail.com</a>
                            </div>
                            <div class="col-md-4 col-sm-3 col-xs-6 text-left">
                                <a href="#"><i class="fa fa-phone"></i>0745322226</a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6 text-right">
                                <a target="_blank" href="https://www.facebook.com/JOBehaviors-1254196541369606"><i class="fa fa-facebook"></i></a>
                                
                                <a target="_blank" href="https://www.linkedin.com/in/marktinneyjobehaviors/"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="green_below">
                        <div class="text-left">
                            <a href="#">EMMANUEL COLLEGE</a>
                        </div>
                        
                    </div>
                </div>
                 <ul class="nav nav-tabs">
            <li class="active"><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li ><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="instructors.php" >Instructors <img src="assets/img/student48.png"></a></li>
            <li><a href="departments.php" >Departments <img src="assets/img/department.png"></a></li>
            <li><a href="markstep1.php" >Exams <img src="assets/img/update.png"></a></li>
            <li><a href="hostel.php" >Hostel<img src="assets/img/details.png"></a></li>
            <!--<li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>-->
            <li><a href="about.php">About <img src="assets/img/department.png"></a></li>
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>

 <div class="col-md-12" style="background-color:#526F35; position:relative;top:0px;">
        <p class="text-center text-danger" style="color:white;" >	Enter your email in the form below to have your password sent to you.</p>
 </div>

<?php
	if (!array_key_exists('Submitted',$_POST))
	{
?>
		<div class="row">
        <div class="col-sm-3">
        </div>
		<div class="col-sm-6" >

		<br>
		<br>
		<br>
		                       
		<div >
		<form method="post" action="email.php">
		<input type="hidden" name="Submitted" value="true"><br>
		<label>The system will send emails to all the persons(Parent/students) whose emails adress has entered corrently. </label>
		<label><input type="checkbox" name="checkbox" value="value">Parents</label>
		<label><input type="checkbox" name="checkbox" value="value">Students</label>
		<input type="text" name="To" size="25" class="form-control"><br>
		<textarea rows="5"  name="bulkemails" class="form-control">
		Dear Parent,
		------------------------------------------

		</textarea><br>
		<input type="submit" value="Send Email"> <a href="homepage.php"> Back to homepage</a>
		<br>
		<br><br><br>
		</form>
		</div>
<?php
	}
	else
	{
		$to = $_POST['To'];
		$bulkemails = $_POST['bulkemails'];
		@$db = new mysqli('localhost','root','','sms2');
		if (mysqli_connect_errno())
		{
		  echo 'Cannot connect to database: ' . mysqli_connect_error();
		}
		else
		{
		 	$query = "SELECT email FROM studentstable ";
		  	$result = $db->query($query);
		  	$row=$result->fetch_assoc();
			$email = $row['email'];
			$fname = $row['fname'];
			//Sending of password using phpmmailer	
			require("PHPMailer_5.2.0/class.phpmailer.php");
			
			$message = "$bulkemails";
		
			$mail = new PHPMailer();					//Use phpmailer to send instead of inbult php mail()				
			$mail->isSMTP();                            // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                     // Enable SMTP authentication
			$mail->Username = 'emaxsystemmailer@gmail.com';// SMTP username
			$mail->Password = 'john100john'; 			// SMTP password
			$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
			$mail->FromName = "Mailer";
			$mail->WordWrap = 50;                       // set word wrap
			$mail->IsHTML(true);                        // send as HTML
			$mail->Port = 465;                          // TCP port to connect to

		  	$mail->From = 'emaxsystemmailer@gmail.com';
			$mail->FromName = 'System Admin';
			$mail->AddAddress($to); //change it to your email address to actually get the email! 
			$mail->AddBCC('brianguis@gmail.com'); 
			$mail->AddReplyTo('emaxsystemmailer@gmail.com');
		
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
				 echo "We could not send your password.<br>";
				 echo "Mailer Error: " . $mail->ErrorInfo;
				 echo '<br>';
				 echo '<a button class="btn btn-success" title="Click to bo back"
	                                                 href="index.php">Back</a>';
			 }
		}
	}
?>

</div>

<div class="col-md-12" style="background-color:#526F35; position:fixed;bottom:0px;">
        <p class="text-center text-danger" style="color:white;" >@G. Brian Tel: +254745322226</p>
    </div>
</body>
</html>