<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('connect.php');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>student fee logs</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         
        <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = "<html><head><title></title></head><body>" + divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;     
        }
</script>
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
                                    <h2 class="title">view your fee payment logs/details</h2>
                                </div>
    <ul class="nav navbar-right top-nav">                        
    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" >
    <?php 
if(strlen($_SESSION['alogin'])=="")
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
                                        <li><a href="view_fees.php">view fees</a></li>
                                        <li class="active">payment logs/details</li>
                                    </ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             
                            <div id="printablediv">
                              <div   class="formelements">
                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5><strong>PAYMENT LOGS/DETAILS</strong></h5>
                                                </div>
                                            </div>
           
  
                                          <div class="panel-title">
                                                    <h6><strong><font color="chocolate">&nbsp;&nbsp;&nbsp;&nbsp;Emmanuel College</font></strong></h6>
                                                </div>  
                
                <!-- Page Heading -->
             
                <?php
                    $id = $_SESSION['admission_number'];
  
                    $sql ="SELECT  * from studentstable where admission_number='$id' ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    //$id = $row['admission_number'];
                    $feepayable = $row['feepayable'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $sirname = $row['sirname'];
                    $class_id= $row['course_id'];
                    }
                    ?>
                    
                    <?php
                    //for for that class
                    $id = $_SESSION['admission_number'];
                    $sql ="SELECT  * from course where course_id=
                                    (SELECT course_id FROM studentstable 
                                    WHERE admission_number='$id') ";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                    $feepayable = $row['feepayable'];
                    $coursename= $row['coursename'];
                    }
                    ?>


                    <?php
                    //check whather the students has paid for that year as you sum up
                    $id = $_SESSION['admission_number'];
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


                            <strong>&nbsp;&nbsp;&nbsp;Student's Name:&nbsp;<font color="green"><?php echo $sirname ?>&nbsp;<?php echo $firstname ?>&nbsp; <?php echo $lastname ?></font>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;Expected fee:&nbsp;&nbsp;&nbsp;<font color="blue"><?php echo $feepayable; ?>/=</font>&nbsp;<br>&nbsp;&nbsp;&nbsp;Amount paid:&nbsp;&nbsp;&nbsp;<font color="blue"><?php echo $totalpaid; ?>/=</font><br>&nbsp;&nbsp;&nbsp;Class/Course&nbsp;&nbsp;&nbsp;<font color="blue"><?php echo $coursename; ?></font><br> &nbsp;&nbsp;&nbsp;Course Code: &nbsp;&nbsp;&nbsp; [<font color="blue"><?php  echo $class_id ?> </font>]</strong>
                                                    
                            <div class="block-content collapse in">
                                <div class="span12">
    
                            <form method="post">
                                    <div class="table-responsive">
                                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                                    
                                        <thead>
                                          <tr>
                                                <th></th>
                                                <th><center>Reciept #.</center></th>
                                                <th><center>Method</center></th>
                                                <th><center>Receipt Ref #</center></th>
                                                <th><center>Date</center></th>
                                                <th><center>Class</center></th>
                                                <th><center>Term</center></th>
                                                <th><center>Amount</center></th>

                                                
                                                <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                               
                                           </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                    
                    $id = $_SESSION['admission_number'];
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
                                    <td><center><input type="button" value="Print payment log" onclick="javascript:printDiv('printablediv')" class="btn btn-success" style="float: right;"></center></td>
                                </form>
                                

            </div>
                            </div>
                        </div>
                    </div>




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
