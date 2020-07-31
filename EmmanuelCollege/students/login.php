
								<?php
								include('dbconnect.php');
								include('connect.php');
								?>

								<?php

								function clean($str) {
											$str = @trim($str);
											if(get_magic_quotes_gpc()) {
												$str = stripslashes($str);
											}
											return mysql_real_escape_string($str);
										}


								
								if (isset($_POST['login'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								//$fname = ($_POST['fname']);
								//$lname = ($_POST['lname']);
								$role = ($_POST['role']);

								
								if($role=="Admin")
								{


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
												//exit();
												}
												else{
													header("location: login_error2.php");
												}
											}


											}
								else if($role=="Student")
								{
									$query = "SELECT * FROM Studentstable WHERE username='$username' AND password='$password' ";
									$log = $conn ->query($query);
									$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										header('location:students/dashboard.php');
										$_SESSION['id']=$row['admission_number'];
										}
									else
										{ 
										header('location:login_error.php');
										}
								}
								else if($role=="Instructor")
								{
									$query = "SELECT * FROM instructors WHERE username='$username' AND password='$password' ";
									$log = $conn ->query($query);
									$num_row = mysqli_num_rows($log);
									$row=mysqli_fetch_array($log);
									if( $num_row > 0 ) 
										{
										header('location:instructors/instructorview.php');
										$_SESSION['id']=$row['user_id'];
										}
									else
										{ 
										header('location:login_error.php');
										}
								}
										}
								
								?>