<?php
include("connect.php"); 
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmmanuelCollege</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="style.css">

</head>

<body class="background_img" background="assets/img/66.jpg" >


    <div class="login-card">
    	<h1>EMMANUEL COLLEGE </h1>
        <p class="profile-name-card"> </p>
        <form class="form-signin" action="login.php" method="POST" enctype="multipart/form-data"><span class="reauth-email"> </span>
            <input class="form-control" type="text" required="" placeholder="username" name="username" autofocus="" id="username">
            <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">



            <p><select name="role" class="form-control" id="position" required="">
                <option value="">--position--</option>
            <option>Admin</option>
            <option>Student</option>
            <!--<option>Instructor</option>-->
            </select></p>

            <!--<input class="form-control" type="text" required="" placeholder="position" name="username" autofocus="" id="position"> -->

            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login">Please Login</button>
        </form><a href="email.php" class="forgot-password">Forgot your password?</a>
        <a href="about.php"><h3>Learn more</h3></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <div class="col-md-12" style="background-color:#000305; position:fixed;top:0px;">
        <p class="text-center text-danger" style="color:white;" >Welcome to Emmanuel College, where we strive to better your best.</p>
    </div>

    <div class="col-md-12" style="background-color:#171900; position:fixed;bottom:0px;">
        <p class="text-center text-danger" style="color:white;" >Copyright &copy; #fine-codes 2019  @B. Guiz Tel: +254745322226</p>
    </div>
    
</body>

</html>