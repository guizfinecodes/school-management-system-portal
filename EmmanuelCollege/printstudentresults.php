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
        <title>emmanuelcollege print results</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
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
                                    <h2 class="title">print your results attained</h2>
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
                                        <li class="active">print results</li>
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
                                                    <h5><strong><center>CONFIRM CAPTURED DETAILS FIRST</center></strong></h5>
                                                </div>
                                            </div>
           
  
                                            <div class="panel-body">

                                                <?php
$id=$_SESSION['admission_number'];
$sql="SELECT * FROM  course as t, studentstable as r
            WHERE
            r.course_id = t.course_id
            AND admission_number='$id' ";

$result = mysqli_query($db, $sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $admission_number=$row['admission_number'];
        $course_id=$row['course_id']; //can change                                                           
    }
 ?>



<h4><center><h4><strong>Generate Result Transcript</strong></h4></center></h4>
         
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                     <div class="col-sm-6" >


                        <form method="get" action="reports_all/pdftranscriptstudent.php">

                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">                                      
                                        <tr>
                                            <td>
                                                <label>Admission Number</label>                   
                                            <input type="text" name="admission_number" readonly class="form-control"
                                             value="<?php echo $admission_number ;?>" >
                                        </td>                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Course ID</label>                                            
                                                <input type="text" name="course_id" readonly class="form-control" 
                                                value="<?php echo $course_id ;?>" >
                                            </td>                                            
                                        </tr>  
                                        <td>
                                                <label>Year</label>
                                            
                                                <?php
                                                // set start and end year range
                                                $yearArray = range(2019, 2028);
                                                ?>
                                                <!-- displaying the dropdown list -->
                                               <select name="year" class="form-control" required="">                                                        
                                                    <?php
                                                        foreach ($yearArray as $year) {
                                                            // if you want to select a particular year
                                                            $selected = ($year == 2019) ? 'selected' : '';
                                                            echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
                                                        }
                                                ?> </select>
                                            </td>  
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                                <label>Term</label>
                                            
                                                <select class="form-control" name="term" required="">
                                                <?php
                                                include('connect.php');
                                                $sql1="SELECT * FROM term";
                                                $records1=mysqli_query($db,$sql1);
                                                 while($row=mysqli_fetch_array($records1,MYSQLI_ASSOC))
                                                {
                                                     echo "<option>".$row['termname']."</option>";
                                                            
                                                    }
                                                ?></select>
                                            </td>  
                                        <tr>
                                        <input type="HIDDEN" name="date" value="<?php echo date('D-M-Y')  ;   ?>">
                                        
                                        <tr>
                                            <td><input type="submit" name="submit" value="Generate" ></td>
                                        </tr>                                       
                                    </table>
                                </form>

               
<!--****************************************************************************-->
 

                </div>
<!--<div style="height:auto; width:300px; border:1px solid green; float:right">
  Hello user. Kindly follow one the following steps for better results.<br>
  if MARKS=TERM 1, customer care excluded,........to be continued  
</div>-->


                </p>

            </div>
            
        </div>
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
