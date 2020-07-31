<?php
include('dbconnect.php');
include("connect.php"); 
include('anaysispage.php');
?>
<!--*****************Analysis data*****************************-->
<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmanuel College</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>

<script type="text/javascript">
var class1=<?php  echo $class1; ?>;
var class2=<?php  echo $class2; ?>;
var class3=<?php  echo $class3; ?>;
var class4=<?php  echo $class4; ?>;
var class5=<?php  echo $class5; ?>;
var class6=<?php  echo $class6; ?>;
var class7=<?php  echo $class7; ?>;
var class8=<?php  echo $class8; ?>;
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        title:{
            text: "Number of students" 

        },
        data: [              
        {
            // Change type to "doughnut", "line", "splineArea", etc.
            type: "spline",

            dataPoints: [
                { label: "year 1",  y: class1  },
                { label: "year 2", y: class2  },
                { label: "year 3", y: class3  },
                { label: "year 4",  y: class4  },
            ]
        }
        ]
    });
    chart.render();
}
</script>


</head>
<style type="text/css">
    body{
        margin-right: 0px;
        margin-left: 5px;
        }
</style>


<style type="text/css">
  .panel-primary{
    background-color: rgba(333, 248, 248, 0);
    border:none;
  }

</style>



<body class="background_img" background="assets/img/66.jpg" >
<!--end of heading section--> 
<ul class="nav navbar-right top-nav">                        
    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" >
  <?php
        //Check to see if the user is logged in.if not redirect user to the loging page.
        
        if(isset($_SESSION['fname']))
        { 
        echo   "Current user: ".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
        $admin=$_SESSION['role'];
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

<link rel="stylesheet" type="text/css" href="style.css">

     <div class="header-top-info">

                <div class="container">
                   <!-- <div class="row">-->
                        <div class="top-info-left">
                          <div class="col-md-4 col-sm-3 col-xs-6 text-left">
                                <!--<header class="mainHeader">-->
                <a href=" homepage.php"><img src= "img/logo12.JPG" ></a>
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
                            <a href="homepage.php">EMMANUEL COLLEGE</a>
                        </div>
                        
                    </div>
                </div>
    <div class="background">
        <ul class="nav nav-tabs">
            <li class="active"><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li ><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="instructors.php" >Instructors <img src="assets/img/student48.png"></a></li>
            <li><a href="departments.php" >Departments <img src="assets/img/department.png"></a></li>
            <li><a href="markstep1.php" >Exams <img src="assets/img/update.png"></a></li>
            <li><a href="hostel.php" >Hostel&nbsp;<img src="assets/img/department.png"></a></li>
            <!-- <li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li> -->

           <!-- <li><a href="about.php">About <img src="assets/img/department.png"></a></li>-->
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul></div>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--****************************************************************************-->
                        


                        
  <!--*************************************************************************************************************************-->


<div ><h4>
<table class="table" style="text-align:center" >
   <tr >
       
       <td >
    <div class="panel panel-success">
      <div class="panel-heading">Students</div>
        <div class="panel-body">
       
       <font color="green">
            <?php
            $sql="SELECT * FROM studentstable";

            $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result);
             echo "$num_rows Student[s] found</font><br>";
             echo "<a href='viewstudentrecord.php'>View students";
             echo "|| <br>";
             echo "<a href='displine.php'>Record Displinary case </a>";
             echo "||";
             echo "<a href='m1.php'>Monitor student </a>";
             ?><br>
             <?php
            $sql="SELECT * FROM studentstable WHERE gender='female'";
            $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result);
             echo "$num_rows Female Students</font>"; 
             ?>
             <img src="assets/img/students.png">
             <?php
            $sql="SELECT * FROM studentstable WHERE gender='male'";
            $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result);
             echo "$num_rows Male Students</font>";
             ?>
             </font>
             <img src="assets/img/students.png"><br>
              <a href="javascript:myFunction2();">Alumni/Transfer students<img src="assets/img/promote.png"></a>
       </div>
       </td>
       
       <td>
      <div class="panel panel-success" >
        <div class="panel-heading">Accounting <i>[fee issues]</i></div>
        <div class="panel-body">
                  <?php
                   if ($_SESSION['role']!="admin"){
                    $error="This is a Premium module";
                   }else{
                    $password=$_SESSION['password'];
                   }
                  ?>

  <!--issues with payment are sensitive and therefore need approaite approval before editing-->
                  <script>
                  function myFunction() {          
                      var user =prompt("Please confirm your password");
                     
                      if (user =="<?php  echo $password; ?>") {
                          txt = "Welcome to the fee module";
                          window.location="feestudents.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>
<!--issues with payment are sensitive and therefore need approaite approval before editing-->
       <a href="javascript:myFunction();">Accounts Management<img src="assets/img/fee.png"></a><br>
       <!--<a href="javascript:myFunction7();">Expected fee<img src="assets/img/new.png"></a>-->
       <!--<a href="feestructure.php">fee structure<br><img src="assets/img/pdf.png"></a>--><br>
       <a href="javascript:myFunction6();">Expences<img src="assets/img/expence2.png"></a><br>
       <a href="javascript:myFunction5();">Print Invoice<img src="assets/img/print2.png"></a>

       </div>
       </td>


                  <script>
                  function myFunction2() {                
                      var person = prompt("Please confirm your password");
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the Alumni module";
                          window.location="alumnistudent.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>

                  <script>
                  function myFunction5() {          
                      var person =prompt("Please confirm your password");
                     
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the fee module";
                          window.location="printfeeinvoice.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>

                   <script>
                  function myFunction6() {          
                      var person =prompt("Please confirm your password");
                     
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the fee module";
                          window.location="expences.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>

                  <script>
                  function myFunction7() {          
                      var person =prompt("Please confirm your password");
                     
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the fee module";
                          window.location="expected_fee.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>
       <td>
    <div class="panel panel-success">
      <div class="panel-heading">Communication</div>
          <div class="panel-body">
       <a href="sms.php" >Bulk sms<br><img src="assets/img/sms.png"></a><br>
<!--***when i click a link to get a confirmation wheathert to continue of not-->
       <script type="text/javascript">
              function AlertIt() {
              var answer = confirm ("Please click on OK to continue.")
              if (answer)
              window.location="bulkemails.php";
              }
      </script>
<!--***when i click a link to get a confirmation wheathert to continue of not-->
       <a href="javascript:AlertIt();">Bulk Emails<img src="assets/img/mail2.png"></a><br>
       <a href="register_form.php">System Users<br><img src="assets/img/users.png"></a>
       </div>
     </div>
       </td>
   </tr> 
   <tr>
       <td >
    <div class="panel panel-success">
      <div class="panel-heading">School Database Backup</div>
      <div class="panel-body">
          <a href="javascript:myFunction10();">Back Up database<img src="assets/img/backup.png"></a>
       </div>
       <script>
                  function myFunction10() {          
                      var person =prompt("Please confirm your password");
                     
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the database backup module";
                          window.location="backup_tables.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>
        </div>
      </td>

  <!--issues with payment are sensitive and therefore need approaite approval before editing-->
                  <script>
                  function myFunction() {          
                      var person =prompt("Please confirm your password");
                     
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the fee module";
                          window.location="feestudents.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>

       
       <td>
      <div class="panel panel-success">
        <div class="panel-heading">Inventory</div>
        <div class="panel-body">
          <a href="javascript:myFunction4();">Inventory<img src="assets/images/icons/School.png"></a>
          <br>
          <!--<a href="companyinfo.php" >Company Info<img src="assets/img/info.png"></a><br>-->
          <script>
                  function myFunction4() {          
                      var person =prompt("Please confirm your password");
                     
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the inventory module";
                          window.location="inventory.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>
       </div>
       </div>
       </td>
       <td>
      <div class="panel panel-success">
        <div class="panel-heading">Parent/Guardians</div>
          <div class="panel-body">
  <a href="parents.php">View List<br></a>
       </div>
       </td>
   </tr>
   <tr>
                  <script>
                  function myFunction3() {                
                      var person = prompt("Please confirm your password before accessing this module");
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the fee module";
                          window.location="pro1.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>

       
   </tr>
  </table></h4></div>

  <!--*********************************************************************************-->  

    <div class="col-md-12" style="background-color:#526F35; bottom:0px;"> <!--position:fixed;-->
        <p class="text-center text-danger" style="color:white;" >@G. Brian Tel: +254745322226</p>
    </div>


    <script src="assets/js/jquery.min.js"></script>
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
    <script src="assets/js/slideshow.js"></script>

    <script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</body>

</html>