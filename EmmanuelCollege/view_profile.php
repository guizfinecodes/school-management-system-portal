<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('connect.php');
//include('session1.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>emmanuelcollege view profile</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('includes/topbar.php');?>   
          <!-----End Top bar>-->
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

<!-- ========== LEFT SIDEBAR ========== -->
<?php include('includes/leftbar.php');?>                   
 <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">view your profile details</h2>
                                </div>
    <ul class="nav navbar-right top-nav">                        
    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" >
    <?php 
if(strlen($_SESSION['admission_number'])=="")
    { 
    echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
             echo "<script>
                    window.location = 'index.php'
                  </script>";
    }
    else{
        echo   " ".$_SESSION['firstname']. "&nbsp;".$_SESSION['lastname']. " ";
        $Student=$_SESSION['username'];
        ?>
        <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="view_profile.php"><i class="fa fa-users fa-lg"></i>&nbsp;View your profile</a></li>
      <!--<li><a href="change-password.php"><i class="fa fa-users fa-lg"></i>&nbsp;change password</a></li>-->
      <li class="divider"></li>
      <li><a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a></li>
  </ul>
</div>
  </ul>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <!--<li><a href="#">all departments</a></li>-->
                                        <li class="active">view profile</li>
                                    </ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5><strong><u>PROFILE DETAILS</u></strong></h5>
                                                </div>
                                            </div>
           
  
                                            <div class="panel-body">

                                                <form method="post">
                                                    <div class="table-responsive">

                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="myTable">
                                    
                                        <!--<thead>
                                          <tr>
                                                <th></th>
                                                
                                                <th><center>adm. no</center></th>
                                                <th><center>username</center></th>
                                                
                                              
                                                
                                                <th></th>
                                           </tr>
                                        </thead>-->
                                        <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                        <tbody>
                                            <div class="form-group has-success">

                                
                                               
                             
                               <?php 

                                $id=$_SESSION['admission_number'];

                                //SELECT * from studentstable,counties where studentstable.county_id= counties.county_id and admission_number = '2019/0002'

                                $sql = " SELECT * from studentstable,counties,course where studentstable.county_id= counties.county_id and studentstable.course_id = course.course_id and admission_number = '$id'";
                                $user_query=mysqli_query($db,$sql) or die("error getting data");
                                while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                $admission_number = $row['admission_number'];

                            
                                 ?>

                                                
                                                <tr><td>
                                                <div>
                                                <label for="success" class="control-label"> admission number: <font color="purple"><?php echo $row['admission_number']; ?></font></label>
                                                </div></td>
                                                </tr>
                                                <tr><td><div>
                                                <label for="success" class="control-label">Course being taken: <font color="purple"><?php echo $row['coursename']; ?>&nbsp;&nbsp;<font color="blue"><a href="view_course.php"><i></i>[want to view other courses?]</a></font> </label>
                                                </div></td></tr>
                                                <tr><td>
                                                    <div>
                                                <label for="success" class="control-label">Fullname: <font color="purple"><?php echo $row['sirname']." ".$row['firstname']." ".$row['lastname']; ?></font></label>
                                                </div></td></tr>
                                                <tr><td>
                                                <div>
                                                <label for="success" class="control-label">ID Number: <font color="purple"><?php echo $row['idno']; ?></label>
                                                </div></td>
                                                </tr>
                                                <tr><td><div>
                                                <label for="success" class="control-label">Date of Birth: <font color="purple"><?php echo $row['dateofbirth']; ?></label>
                                                </div></td></tr>
                                                <tr><td>
                                                    <div>
                                                <label for="success" class="control-label">Gender: <font color="purple"><?php echo $row['gender']; ?></label>
                                                </div></td></tr>
                                                <tr><td>
                                                <div>
                                                <label for="success" class="control-label"> Country: <font color="purple">[<?php echo $row['country_id']; ?>]</font><font color="purple"> kenya</font></label>
                                                </div></td>
                                                </tr>
                                                <tr><td>
                                                <div>
                                                <label for="success" class="control-label"> County: <font color="purple"><?php echo $row['countyname']; ?></font><font color="purple"></font></label>
                                                </div></td>
                                                </tr>
                                                <tr><td><div>
                                                <label for="success" class="control-label">Mobile: <font color="purple"><?php echo $row['mobile']; ?></label>
                                                </div></td></tr>
                                                <tr><td>
                                                    <div>
                                                <label for="success" class="control-label">Email: <font color="purple"><?php echo $row['email']; ?></label>
                                                </div></td></tr>
                                                <tr><td>
                                                <div>
                                                <label for="success" class="control-label"> Home Address: <font color="purple"><?php echo $row['address']; ?></label>
                                                </div></td>
                                                </tr>
                                                <tr><td><div>
                                                <label for="success" class="control-label">Zip Code: <font color="purple"><?php echo $row['zipcode']; ?></label>
                                                </div></td></tr>
                                                <tr><td>
                                                    <div>
                                                <label for="success" class="control-label">username: <font color="purple"><?php echo $row['username']; ?></label>
                                                </div></td></tr>
                                                <tr><td>
                                                <div>
                                                <label for="success" class="control-label"> Admission Date:<font color="purple"> <?php echo $row['reg_date']; ?></label>
                                                </div></td>
                                                </tr>
                                                <tr><td><div>
                                                <label for="success" class="control-label">Emergency Contact: <font color="purple"><?php echo $row['emergency_contact']; ?></label>
                                                </div></td></tr>
                                                <tr><td>
                                                    <div>
                                                <label for="success" class="control-label">Student Status: [IS ACTIVE?]: <font color="purple"><?php echo $row['active']; ?></label>
                                                </div></td></tr>

                                                
                                                <?php } ?>
                                            </div>
                                        </tbody>
                                    </table>




                                </form>
                            </div><br>
                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
<?php  } ?>
