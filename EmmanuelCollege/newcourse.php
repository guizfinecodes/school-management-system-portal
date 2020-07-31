<?php
error_reporting(0);//turning off error reporting
include("connect.php");
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
            <li ><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
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
<!--****************************************************************************-->
                        <div class="container" style="width:100%">
                            
                             <ul class="nav nav-tabs">
                                <li><a href="#">view Courses<img src="assets/img/view2.png"> </a></li>
                                <li class="active"><a href="newcourse.php">New Course<img src="assets/img/new.png"> </a></li>
                                <li><a href="editcourse.php">Edit course <img src="assets/img/update2.png"> </a></li>
                                <li><a href="csvtesting.php">Import/Export CSV<img src="assets/img/export.png"></a></li>
                                <li><a href="deletecourse.PHP">Delete <img src="assets/img/delete2.png"></a></li>
                                <!--<li><a href="#">Manage Course </a></li>-->                                 
                                  
                                </ul>
                            <br>
                            
                        </div>
                        
  <!--*************************************************************************************************************************-->
    <div class="container-fluid">
       <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Add new Course</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 


                        <form action="newcourse.php" method="POST" enctype="multipart/form-data">
                        <h4>Course Details</h4>                          
                        <label>Course Name</label>
                        <input type="text" name="coursename" class="form-control" required="">

                        <label>Academic Year</label>
                        <select name="academic_year" class="form-control" required="">
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>
                        <br>
                        <label>Course Instructor <a href="instructors.php">or add new instructor</a></label>
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
                                          <br>
                        
                        <label>Exam Body</label>
                        <select name="exambody" class="form-control">
                            <option>internal</option>
                            <option>knec</option>
                        </select>
                        <br>

                        <label>Duration</label>
                        <input type="text" name="duration" class="form-control" placeholder="1 year" required="">
                        <br>

                        <label>Fee Payable[Per Year]</label>
                        <input type="number" name="feepayable" class="form-control" min="0" value="" required=""> 
                        <br>

                        <label> Department</label>
                        <select name="department_id" class="form-control"> 
                                             <?php
                                                include('connect.php');
                                                $sql1="SELECT departmentname FROM departments";
                                                $records1=mysqli_query($db,$sql1);
                                                    while($row=mysqli_fetch_array($records1,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$row['departmentname']."</option>";
                                                        }
                                                ?>
                                          </select><a href="departments.php">Check department name</a> <br>
                                                                             
                        <input type="submit" name="register" value="Save Record" class="btn btn-success">
                        </form>
</div>
</div>
</div>
</div>
</div>

<!--****************************************************************************-->
 <?php
    mysql_select_db('sms2',mysql_connect('localhost','root',''))or die(mysql_error());
    if (isset($_POST['register'])){


        
        $fullname=$_POST['fullname'];


        $XY=$_POST['fullname'];
        $sql="SELECT * FROM instructors WHERE fullname='$XY'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $fullname = $row['fullname'];}


        
        $department_id=$_POST['department_id'];

        $xx=$_POST['department_id'];
        $sql="SELECT * FROM departments WHERE departmentname='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $department_id = $row['department_id'];}

        $coursename=$_POST['coursename'];
        $academic_year=$_POST['academic_year'];
        $exambody=$_POST['exambody'];
        $duration=$_POST['duration'];
        $feepayable=$_POST['feepayable'];

mysql_query("INSERT INTO course(department_id,coursename, academic_year, instructor,exambody,duration,feepayable ) VALUES ('$department_id','$coursename', '$academic_year', '$fullname','$exambody','$duration','$feepayable')") or die(mysql_error());
     
?>
                        <?php 
                        $query="SELECT * FROM course";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQL_ASSOC))
                        {
                        $id = $rec['course_id'];
                        }?>
                                        
                        <script>
 
                        alert('Succsessfully Saved.');
                        window.location = "course.php?id=<?php echo $id;?>";
                        </script>
<?php }?> 
 <!--*******************************try add parent's details******************************************************-->  
                        </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                 </div>
                <!-- /#page-wrapper -->
            </div>
                    <form action="course.php" method="POST" enctype="multipart/form-data" name="upload_excel" class="form-horizontal">
                                    <div class="table-responsive">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    
                                        <thead>
                                          <tr>
                                                <th></th>
                                                <th><center>Course ID</center></th>
                                                <th><center>Course Name</center></th>
                                                <th><center>Academic Year</center></th>
                                                <th><center>Course Instructor</center></th>
                                                <th><center>Duration </center></th>
                                                <th><center>Fee Payable[Annual]</center></th>
                                                <th><center>Exam Body</center></th>

                                                <th><center>Edit</center></th>
                                                <th><center>Delete</center></th>
                                                <script src="assets/js/jquery.dataTables.min.js"></script>
                                                <script src="assets/js/DT_bootstrap.js"></script>
                                                <th></th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                <?php 

                                
                                $sql ="SELECT  * from course";
                                $user_query=mysqli_query($db,$sql) or die("error getting data");
                                while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                $id = $row['course_id'];

                            
                                 ?>
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="radio" value="<?php echo $id; ?>">
                                                </td>
                                                <td><center><?php echo $row['course_id']; ?></center></td>
                                                <td><center><?php echo $row['coursename']; ?></center></td>
                                                <td><center><?php echo $row['academic_year']; ?></center></td>
                                                <td><center><?php echo $row['instructor']; ?></center></td>
                                                <td><center><?php echo $row['duration']; ?></center></td>
                                                <td><center><?php echo $row['feepayable']; ?></center></td>
                                                <td><center><?php echo $row['exambody']; ?></center></td>
                                                
                                                <td>
                                                <center><a href="editcourse.php <?php echo '?id='.$id; ?>" class="btn btn-success"><i class="glyphicon glyphicon-edit" name="register"></i>Edit</a></center></td>
                                              
                                                <td><center><a href="deletecourse.php <?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash" name="register"></i>delete</a></center></td>
                                               
                                            
                                                </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div><br>
                         
    
    <div div class="col-md-12" style="background-color:#526F35;bottom:0px; position:fixed;">
        <p class="text-center text-danger" style="color:white;">@G. Brian</p>
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