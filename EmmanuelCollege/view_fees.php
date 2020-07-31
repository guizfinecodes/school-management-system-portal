<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('connect.php');
//require_once('session1.php');
?>
<?php 
mysql_select_db('sms2',mysql_connect('localhost','root',''))or die(mysql_error());
 ?>

 <?php
$id=$_SESSION['alogin'];
    $select = "SELECT * FROM 
            studentstable 
             WHERE username= '$id'";
             $result = mysql_fetch_array(mysql_query($select));
    $qry=mysql_query($select);
        if($qry)
        {
        while($rec = mysql_fetch_array($qry)){
            $admission_number= "$rec[admission_number]";
            $sirname = "$rec[sirname]";
            $firstname = "$rec[firstname]";
            $lastname = "$rec[lastname]";
            $idno = "$rec[idno]";
            $dateofbirth = "$rec[dateofbirth]";
            $gender = "$rec[gender]";
            $country_id = "$rec[country_id]";
            $county_id = "$rec[county_id]";
            $constituency_id = "$rec[constituency_id]";
            $mobile = "$rec[mobile]";
            $email = "$rec[email]";
            $username = "$rec[username]";
            $password = "$rec[password]";
            $address = "$rec[address]";
            $zipcode = "$rec[zipcode]";
            $course_id = "$rec[course_id]";
            $intake_id = "$rec[intake_id]";
            $reg_date = "$rec[reg_date]";
            //LOAD PARENT DETAILS TOO
            $psirname = "$rec[psirname]";
            $pfirstname = "$rec[pfirstname]";
            $plastname = "$rec[plastname]";
            $pmobile = "$rec[pmobile]";
            $prelationship = "$rec[prelationship]"; 
}
        


        }


?>
<?php
                       // include('connect.php');
                        $query="SELECT * FROM course WHERE course_id='$course_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $course_id2 = $rec['coursename'];                      

                        }

 
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

<script type='text/javascript'>
   function sumValues() {  
      var v1 = parseFloat(document.getElementById('box1').value);
      var v2 = parseFloat(document.getElementById('box2').value);
      var v3 = parseFloat(document.getElementById('box3').value);
      var v4 = parseFloat(document.getElementById('box4').value);
      var v5= parseFloat(document.getElementById('box5').value);
      document.getElementById('box6').value = v1 + v2 + v3 + v4 + v5;
   }
</script>
<!--this is javascript codes to sum up values as user inputs them-->
<!--printing the reciept-->

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
<style type="text/css">
  #box1,#box2,#box3,#box4,#box5,#box6,#rf,#c,#an,#d{
              border-right:0 px solid;
              color:purple;
              border-right: none;
              border-left: none;
              border-top: none;
              outline: none;
              background-color:skyblue; 
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
                                    <h2 class="title">view your fees status</h2>
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
                                        <li class="active">view fee status</li>
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
                                                    <h5><strong>FEE STATUS</strong></h5>
                                                </div>
                                            </div>
                                            

                                            <div class="panel-title">
                                                    <h6><strong><font color="chocolate">&nbsp;&nbsp;&nbsp;&nbsp;Emmanuel College</font></strong></h6>
                                                </div>
           
  
                                           <div class="panel-body">
                            <div class="table"> 
                       
               
                       
                          <form method="POST" enctype="multipart/form-data">
                              
                                                     
                              <label>Fullname:</label>
                              <input type="text" id="rf" name="name" value="<?php echo $sirname." ".$firstname." ".$lastname; ?>" class="form-control" readonly>

                              <label>Admmission number:</label>
                               <input type="text" readonly id="an" name="admission_number" value="<?php echo $admission_number; ?>" class="form-control" >
                          
                               <label>Course:</label>
                               <input type="text" id="c" name="course_id" value="<?php echo $course_id2 ;?>" class="form-control" readonly>

                              
                               
                          
                               <label>Date:</label>
                               <input type="date"  id="d" name="tdate" value="<?php echo date("Y-m-d") ;?>" readonly class="form-control">
                                
                              
                               <table>
                               <tr>
                               <td>[Amount Paid]</td>
                               <td>                               
                               
                                <?php
                                //for for that class
                                $id=$_SESSION['admission_number'];  
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
                     //$id=$_SESSION['alogin'];
                     $id=$_SESSION['admission_number'];
                    $sql= "SELECT SUM(amount) AS value_sum FROM fee WHERE
                      admission_number='$id' AND 
                                    course_id=(SELECT course_id FROM studentstable 
                                    WHERE admission_number='$id') ";//two conditions here must be met
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC))
                    {
                                    
                    $totalpaid= $row['value_sum'];
                    }
                    ?>              


                                  <?php

                                    $balance=$feepayable-$totalpaid;
                                    if ($balance<0)
                                    {
                                      $msg="you have an overpayment of $balance";
                                    }
                                    elseif($balance>0)
                                    {
                                    $msg="you have a fee balance of $balance";
                                    }
                                    else
                                    {
                                      $msg="you got no fee balance";
                                    }

                               ?>
                               <input type="number" name="totalpaid" id="an" readonly class="form-control" value="<?php echo $totalpaid; ?>"></td>

                                <td>[Amount Payable]</td><td><input type="number" id="an" name="feepayable" readonly class="form-control"  value="<?php echo $feepayable; ?>"></td>
                                <td>[Remaining Balance]</td><td><input type="number" id="an" name="balance" readonly class="form-control"  value="<?php echo $balance; ?>"></td>


                                </tr> 
                                <tr>
                                <td colspan="4"> <input type="text" readonly name="OVERPAYMENT" class="form-control"  style="background-color:white" value="<?php echo $msg; ?>"> </td>
                                </tr></table>

                                 <br>                                                       
                              
                               <input type="button" value="Print fee Reciept" onclick="javascript:printDiv('printablediv')" class="btn btn-success" style="">
                               <a button  href="viewstudentpaymentlog.php <?php echo '?id='.$id; ?>" class="btn btn-success" style="float: right;">view payment log</a>
                               <!--<a button  class="btn btn-success" href="printfeeinvoicestudent.php <?php echo '?id='.$id; ?>" style="float: right;">Export Pdf[fee status]</a> -->                
                        </form>
<!--*************************************PHP CODES TO SAVE THE DATA************************************************-->
</div>



<?php
 //<!--*******************************try add parent's details******************************************************-->  

}?>
<!--**********************************************************************************************************************-->
                 </div>
                                                    
                                             

                                              
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

