<?php 
	if(isset($_POST['phone']) && isset($_POST['message']))
	{
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		echo "$phone, $message";

		sendSMS($phone, $message);
	}
	else
	{
		echo "Enter all details";
	}

	function sendSMS($phonenumber, $message)
	{
		//initialize parameters
        $messageId = "";
        $cost = 0;

		$user = "aberdare";
		$apikey = "212ae38a97a4dc2c1ef0fccfdb3324ac";
		$sender = "MOBILESASA";

		$ch = curl_init();
		$url = "http://mobilesasa.com/sendsmspost.php";
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, true);  //Tell cURL you want to post something
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false); //set this to false if you are getting the error message -SSL certificate problem: unable to get local issuer certificate
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		// Define what you want to post
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'user='.$user.'&apikey='.$apikey.'&sender='.$sender.'&message='.$message.'&phonenumber='.$phonenumber); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the output in string format
		$output = curl_exec ($ch); // Execute

		curl_close ($ch); // Close cURL handle

		if($output != false)
		{
		    $values = explode('|', $output);

		    if($values[0] === '1701')//if request is successful
		    {
		        $phonenumber = $values[1];
		        $messageId = $values[2];
		        $cost = $values[3];
		        
		    }
		    else//if it fails for some reason
		    {
		        $reason = $values[1];
		        echo $reason;
		    }
		}
		else
		{
			echo "Error ".mysqli_error($link)."<br/>";
		}

		echo $phonenumber.",".$messageId.",".$cost."<br/>";
	}

?>