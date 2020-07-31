<?php
include('connect.php');
?>
<?php
//Start session
session_start();

	//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
		//Sanitize the POST values
    $username = $_POST['username'];
	$password = $_POST['password'];
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$role = ($_POST['role']);
	
		//Create query
	$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result=mysqli_query($db,$qry);
	
	
if($result)
 {
		if(mysqli_num_rows($result) > 0 ) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $member['username'];
			$_SESSION['password'] = $member['password'];
			$_SESSION['fname'] = $member['fname'];
			$_SESSION['lname'] = $member['lname'];
			$_SESSION['role'] = $member['role'];			
			
			session_write_close();
			header("location: homepage.php?");
			exit();
			}
		
		else
		 {
			//Login failed
			header("location: login_error.php");
			exit();
		}
		}
else
	{
	die("Query failed");
	}	
	

?>

