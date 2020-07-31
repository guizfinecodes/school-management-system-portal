<?php
error_reporting(0);
mysql_select_db('sms2', mysql_connect('localhost', 'root', ''))or die(mysql_error());
?>
<?php
SESSION_START();
?>

<?php
require_once('session1.php');
?>
<?php
$id = $_GET['id'];
    $select = "SELECT * FROM 
            course as t, departments as r
             WHERE
             t.course_id = $id AND 
             r.department_id = t.department_id";
             $result = mysql_fetch_array(mysql_query($select));
    $qry=mysql_query($select);
        if($qry)
        {
        while($rec = mysql_fetch_array($qry)){
            $course_id = "$rec[course_id]";
            $department_id = "$rec[department_id]";
            $coursename = "$rec[coursename]";
            $academic_year = "$rec[academic_year]";
            $fullname = "$rec[fullname]";
            $exambody = "$rec[exambody]";
            $duration = "$rec[duration]";
            $feepayable = "$rec[feepayable]";
              //LOAD PARENT DETAILS TOO
            $departmentname = "$rec[departmentname]";
            $hod = "$rec[hod]";
  
        }}

 
  ?>
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="js/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="js/plugins/bootstrap.js"></script>


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

<style type="text/css">
    h4{
        color:red;
    }
</style>
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
                            <a href="homepage.php">EMMANUEL COLLEGE</a>
                        </div>
                        
                    </div>
                </div>
<!--end of heading section-->  
    
        <div>
        <ul class="nav nav-tabs">
            <li ><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li ><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li class="active"><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="instructors.php" >Instructors <img src="assets/img/student48.png"></a></li>
            <li><a href="departments.php" >Departments <img src="assets/img/department.png"></a></li>
            <li><a href="markstep1.php" >Exams <img src="assets/img/update.png"></a></li>
            <li><a href="hostel.php" >Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--**************************************************************************************************************************-->
                         <div class="container" style="width:100%">
                            
                                <ul class="nav nav-tabs">
                                  <li ><a href="course.php">view Courses<img src="assets/img/view2.png"> </a></li>
                                    <li><a href="newcourse.php">New Course<img src="assets/img/new.png"> </a></li>
                                  <li class="active"><a href="editcourse.php">Edit course <img src="assets/img/update2.png"> </a></li>
                                  <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
                                 <li ><a href="deletecourse.PHP">Delete <img src="assets/img/delete2.png"></a></li>
                                  <li><a href="#">Manage Course </a></li>                                 
                                  
                                </ul>
                            <br>
                            
                        </div>

                        
  <!--*************************************************************************************************************************-->
   <div class="container-fluid">
       <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Edit Course</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                    <form action="updatecourse.php" method="POST" enctype="multipart/form-data">                         
                        <div style=" position:relative">
                        <h4>Course Details</h4>

                        <label>Course ID:</label>
                        <input type="text" name="course_id"   value="<?php echo $id; ?>" class="form-control"> 

                        <label>Course name</label>
                        <input type="text" name="coursename"  value="<?php echo $coursename ;?>" class="form-control">

                        <label>Academic Year</label>
                        <input type="text" name="academic_year"  value="<?php echo $academic_year ;?>" class="form-control">

                        <label>Course Instructor</label>
                        <select name="fullname" class="form-control"> 
                                             <?php
                                                include('connect.php');
                                                $sql1="SELECT fullname FROM instructors";
                                                $records1=mysqli_query($db,$sql1);
                                                    while($row=mysqli_fetch_array($records1,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option> ".$row['fullname']." </option>";
                                                        }
                                                ?>
                                          </select>

                        <label>Exam Body</label>
                        <select name="exambody" class="form-control">
                            <option>internal</option>
                            <option>knec</option>
                        </select>

                        <label>Duration</label>
                        <input type="text" name="duration" value="<?php echo $duration?>" class="form-control" >

                        <label>Fee Payable</label>
                        <input type="text" name="feepayable" value="<?php echo $feepayable?>" class="form-control">

                        <label>Department ID</label>
                        <select id="department_id" name="department_id" value="<?php echo $department_id?>" class="form-control">  
                                                <?php 
                                                    $query=mysql_query("select * from departments");
                                                    while($row=mysql_fetch_array($query))
                                                     { 
                                                        if($result['department_id'] == $row['department_id']){
                                                            $sel = "selected";
                                                        }else{
                                                            $sel = "";
                                                        }
                                                            ?>
                                                        <option value="<?php echo $row['department_id'];?>" <?=$sel?> > <?php echo $row['departmentname'];?> </option>
                                                        <?php 
                                                    } ?>
                                                    </select>
                                                    <br>
                       
                        <input type="submit" name="register" value="Update" class="btn btn-success">
                        <a button type='button' class="btn btn-primary" href="course.php">Back</a> <br><br>                           
                       </div> 
                       </form>
</div>
</div>
</div>
</div>
</div>

<!--*************************************PHP CODES TO SAVE THE DATA************************************************-->
       
    
    <div class="col-md-12" style="background-color:#526F35;bottom:0px; position:fixed;">
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