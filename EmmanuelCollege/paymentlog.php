
<?php
include("connect.php");error_reporting(0); 
?>
<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emmanuelcollege</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>
</head>

<body >
<!--end of heading section--> 
<ul class="nav navbar-right top-nav">                        
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >
  <?php
        //Check to see if the user is logged in.if not redirect user to the loging page.
        
        if(isset($_SESSION['fname']))
        { 
        echo   "Current user: ".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
                echo "<script>
                    window.location = 'index.php'
                  </script>";
        }
        ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;View User</a></li>
      <li><a href="register_form.php"><i class="fa fa-users fa-lg"></i>&nbsp;Add New User</a></li>
      <li class="divider"></li>
      <li><a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a></li>
  </ul>
</div>
  </ul>
<!--************************************************-->

    <!--This codes to load the image loader--> 
    <div id="loading">
            <img id="loading-image" src="assets/img/loader.gif" alt="Loading..." />
    </div>
<!--this is the heading section-->   
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
<!--end of heading section-->  
    
    <div>
        <ul class="nav nav-tabs">
            <li ><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li ><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="instructors.php" >Instructors <img src="assets/img/student48.png"></a></li>
            <li><a href="departments.php" >Departments <img src="assets/img/department.png"></a></li>
            <li><a href="markstep1.php" >Exams <img src="assets/img/update.png"></a></li>
            <li><a href="hostel.php" >Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="sms.php">SMS  <img src="assets/img/details.png"></a></li>
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--****************************************************************************-->
                        
                   <div class="container" style="width:100%">
                            
                                <ul class="nav nav-tabs">
                                  <li ><a href="feestudents.php">Students List<img src="assets/img/new.png"> </a></li>
                                  <li class="active"><a href="paymentlog.php">Payment Log<img src="assets/img/new.png"> </a></li>
                                  <li ><a href="csvfee.php">Import/Export CSV<img src="assets/img/export.png"></a></li> 
                                  <li ><a href="printfeeinvoice.php">Print Invoice<img src="assets/img/print.png"> </a></li>
                                  <li ><a href="fee_reports.php">Reports<img src="assets/img/print.png"> </a></li>                           
                                  
                                </ul>
                            <br>
                            
                        </div>     
  <!--*************************************************************************************************************************-->
<div id="page-wrapper">
            <div class="container-fluid">

                
                <!-- Page Heading -->
                <nav>
                <?php
                    $id = $_GET['id'];
  
                    $sql ="SELECT  * from studentstable where admission_number='$id' ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['admission_number'];
                    $feepayable = $row['feepayable'];
                    $firstname = $row['firstname'];
                    $class_id= $row['course_id'];
                    }
                    ?>
                    
                    <?php
                    //for for that class
                    $id = $_GET['id'];  
                    $sql ="SELECT  * from course where course_id=
                                    (SELECT course_id FROM studentstable 
                                    WHERE admission_number='$id') ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $feepayable = $row['feepayable'];
                    }
                    ?>


                    <?php
                    //check whather the students has paid for that year as you sum up
                     $id=$_GET['id'];
                    $sql="SELECT SUM(amount) AS value_sum FROM fee WHERE
                      admission_number='$id' AND 
                                    course_id=(SELECT course_id FROM studentstable 
                                    WHERE admission_number='$id') ";//two conditions here must be met
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                    
                    $totalpaid= $row['value_sum'];
                    }?>              

                        <!-- block -->                      
                        <div id="block_bg" class="block">   
                            <div class="navbar navbar-inner block-header">
                           
              
                           <form method="get" action="reports_all/pdf.php">
                           <table>
                           <tr><td>
                           <input type="hidden" name="payment" value="<?php echo $id ?>" ></td>
                                                                   
                            </form>
                           </tr></table>


                            <strong>Student's Name:&nbsp;<?php echo $firstname; ?>,&nbsp;&nbsp;&nbsp;fee payable:&nbsp;&nbsp;&nbsp;<?php echo $feepayable; ?>,&nbsp;Amount paid:&nbsp;&nbsp;&nbsp;<?php echo $totalpaid; ?>[ Current Class: Form/Course Code &nbsp; <?php  echo $class_id ?> ]</strong>
                                                    
                            <div class="block-content collapse in">
                                <div class="span12">
    
                            <form method="post">
                                    <div class="table-responsive">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    
                                        <thead>
                                          <tr>
                                                <th></th>
                                                <th><center>Reciept #.</center></th>
                                                <th><center>Method</center></th>
                                                <th><center>Ref #</center></th>
                                                <th><center>Date</center></th>
                                                <th><center>Class</center></th>
                                                <th><center>Term</center></th>
                                                <th><center>Amount</center></th>

                                                
                                                <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                                <th></th>
                                           </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                    
                    $id=$_GET['id'];
                    $sql ="SELECT  * from fee where admission_number='$id' ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $id = $row['admission_number'];
                  
                        ?>
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                </td>
                                                <td><center><?php echo $row['reciept']; ?></center></td>
                                                <td><center><?php echo $row['method']; ?></center></td>
                                                <td><center><?php echo $row['refno']; ?></center></td>
                                                <td><center><?php echo $row['tdate']; ?></center></td>
                                                <td><center><?php echo $row['course_id']; ?></center></td>
                                                <td><center><?php echo $row['term_id']; ?></center></td>
                                                <td><center><?php echo $row['amount']; ?></center></td>
                                            
                                                

                                                </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
                                

            </div>
                            </div>
                        </div>
                    </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
</div>
  <!--*********************************************************************************-->  
    <div class="col-md-12" style="background-color:#526F35; bottom:0px;position:fixed;">
        <p class="text-center text-danger" style="color:white;" >@G. Brian Tel: +254745322226</p>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/affix.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="assets/js/alert1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/button.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/collapse.js"></script>
    <script src="assets/js/color.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/DT_bootstrap.js"></script>
    <script src="assets/js/dynamic.js"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dialog.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.jgrowl.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.uniform.min.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/jquery-1.9.1.js"></script>
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery-ui-1.10.3.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="assets/js/myjquery.js"></script>
    <script src="assets/js/myjquery1.js"></script>
    <script src="assets/js/npm.js"></script>
    <script src="assets/js/popover.js"></script>
    <script src="assets/js/profile.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/sb-admin-2.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/scrollspy.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/tooltip.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/wysihtml5-0.3.0.js"></script>
    <script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>
</body>

</html>