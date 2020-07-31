<?php
error_reporting(0);
mysql_select_db('sms2', mysql_connect('localhost', 'root', ''))or die(mysql_error());
?>
<?php
require_once('session1.php');
?>
<?php
$id = $_GET['id'];
    $select = "SELECT * FROM 
            studentstable as t, parents as r
             WHERE
             t.admission_number = '$id' AND 
             r.admission_number = t.admission_number ";
             $result = mysql_fetch_array(mysql_query($select));
    $qry=mysql_query($select);
        if($qry)
        {
        while($rec = mysql_fetch_array($qry)){
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
            $emergency_contact = "$rec[emergency_contact]";
            $reg_date = "$rec[reg_date]";
            $room_number = "$rec[room_number]";
            //LOAD PARENT DETAILS TOO
            $psirname = "$rec[psirname]";
            $pfirstname = "$rec[pfirstname]";
            $plastname = "$rec[plastname]";
            $pmobile = "$rec[pmobile]";
            $prelationship = "$rec[prelationship]"; }
        }
  ?>

<?php
                        include('connect.php');
                        $query="SELECT * FROM course WHERE course_id='$course_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $feepayable = $rec['feepayable'];                      

                        }

 
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
                            <a href="#">EMMANUEL COLLEGE</a>
                        </div>
                        
                    </div>
                </div>
<!--end of heading section-->  
    
        <div>
        <ul class="nav nav-tabs">
            <li ><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li class="active"><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
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
                                  <li ><a href="students.php">New Student <img src="assets/img/new.png"> </a></li>
                                  <li><a href="viewstudentrecord.php">View List<img src="assets/img/view2.png"></a></li>
                                  <li class="active"><a href="viewstudentsedit1.php">Edit Student<img src="assets/img/view2.png"></a></li>
                                  <li><a href="csvstudents.php">Import/Export Data <img src="assets/img/import.png"></a></li>
                                  <li><a href="reports_students.php">Reports </a></li>
                                </ul>
                            <br>
                            
                        </div>
                        
  <!--*************************************************************************************************************************-->
    <div class="container-fluid">
       <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Edit Record</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                    <form action="update.php" method="POST" enctype="multipart/form-data">                         
                        <div style="float:left;  position:relative">
                        <h4>Personal Details</h4>

                        <label>Adm NO:</label>
                        <input type="text" name="admission_number"   value="<?php echo $id?>" class="form-control"> 

                        <label>Sir name</label>
                        <input type="text" name="sirname" placeholder="e.g Kimani" value="<?php echo $sirname?>" class="form-control">

                        <label>Firstname</label>
                        <input type="text" name="firstname" value="<?php echo $firstname?>" class="form-control">

                        <label>Last Name</label>
                        <input type="text" name="lastname" value="<?php echo $lastname?>" class="form-control">

                        <label>ID/Passport NO.</label>
                        <input type="text" name="idno" value="<?php echo $idno?>" class="form-control">

                        <label>DOB</label>
                        <input type="date" name="dateofbirth" value="<?php echo $dateofbirth?>" class="form-control">

                        <label>Gender</label>
                        <select id="gender" name="gender" value="<?php echo $gender?>" class="form-control">  
                                            <option></option>
                                                <?php 
                                                    $query=mysql_query("SELECT * from genderset");
                                                    while($row=mysql_fetch_array($query))
                                                     { 
                                                        if($result['gender'] == $row['gendername']){
                                                            $sel = "selected";
                                                        }else{
                                                            $sel = "";
                                                        }
                                                            ?>
                                                        <option value="<?php echo $row['gendername'];?>" <?=$sel?> > <?php echo $row['gendername'];?> </option>
                                                        <?php 
                                                    } ?>
                                                    </select>

                        <label>Country</label>
                        <input type="text" name="country_id" value="<?php echo $country_id?>" class="form-control" >

                        <label>County</label>
                        <select id="county_id" name="county_id" value="<?php echo $county_id?>" class="form-control">  
                                            <option></option>
                                                <?php 
                                                    $query=mysql_query("SELECT * from counties");
                                                    while($row=mysql_fetch_array($query))
                                                     { 
                                                        if($result['county_id'] == $row['county_id']){
                                                            $sel = "selected";
                                                        }else{
                                                            $sel = "";
                                                        }
                                                            ?>
                                                        <option value="<?php echo $row['county_id'];?>" <?=$sel?> > <?php echo $row['countyname'];?> </option>
                                                        <?php 
                                                    } ?>
                                                    </select>
                        <label>Constituency</label>
                        <select id="constituency_id" name="constituency_id" value="<?php echo $constituency_id?>" class="form-control">  
                                            <option></option>
                                                <?php 
                                                    $query=mysql_query("SELECT * from constituency");
                                                    while($row=mysql_fetch_array($query))
                                                     { 
                                                        if($result['constituency_id'] == $row['constituency_id']){
                                                            $sel = "selected";
                                                        }else{
                                                            $sel = "";
                                                        }
                                                            ?>
                                                        <option value="<?php echo $row['constituency_id'];?>" <?=$sel?> > <?php echo $row['constituencyname'];?> </option>
                                                        <?php 
                                                    } ?>
                                                    </select>
                        </div>
                        <div style="float:right; position:relative">
                        <h4>Contact Details</h4>
                        <label>Mobile</label>
                        <input type="number" name="mobile" value="<?php echo $mobile?>" class="form-control">

                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email?>" class="form-control"> 

                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username?>" class="form-control">

                        <label>password</label>
                        <input type="password" name="password" value="<?php echo $password?>" class="form-control"> 

                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo $address?>" class="form-control">

                        <label>Zip Code</label>
                        <input type="text" name="zipcode" value="<?php echo $zipcode?>" class="form-control"> 

                         <label>Date of Admission</label>
                         <input type="date" name="reg_date" required value="<?php echo $reg_date; ?>" readonly class="form-control" >

                        <label>Course/Class</label>
                        <select id="course_id" name="course_id" value="<?php echo $course_id?>" class="form-control">  
                                            <option></option>
                                                <?php 
                                                    $query=mysql_query("SELECT * from course");
                                                    while($row=mysql_fetch_array($query))
                                                     { 
                                                        if($result['course_id'] == $row['course_id']){
                                                            $sel = "selected";
                                                        }else{
                                                            $sel = "";
                                                        }
                                                            ?>
                                                        <option value="<?php echo $row['course_id'];?>" <?=$sel?> > <?php echo $row['coursename'];?> </option>
                                                        <?php 
                                                    } ?>
                                                    </select>


                     
                        
                        <input type="hidden" id="room_number" name="room_number" value="<?php echo $room_number?>" class="form-control">

                        <label>Emergency Contact</label> 
                                <input type="number" name="emergency_contact" value="<?php echo $emergency_contact?>" class="form-control" required="">

                        
                        <input type="hidden" name="feepayable" value="<?php echo $feepayable?>" class="form-control">

                        </div>
                        <!--this is section three-->
                        <div style="float:left;  position:relative; clear:both;">
                        <h4>Guardian/Parent and other Details for student  </h4>
                        <!--this are parents details-->                                     
                        <label>Sir name</label>
                        <input type="text" name="psirname" value="<?php echo $psirname?>" class="form-control">

                        <label>First name</label>
                        <input type="text" name="pfirstname" value="<?php echo $pfirstname?>" class="form-control">

                        <label>Last Name</label>
                        <input type="text" name="plastname" value="<?php echo $plastname?>" class="form-control">

                        <label>Mobile</label>
                        <input type="number" name="pmobile" value="<?php echo $pmobile?>" class="form-control">

                        <label>Relationship</label>
                        <input type="text" name="prelationship" placeholder="Father" value="<?php echo $prelationship?>" class="form-control"> <br> 
                        <input type="submit" name="register" value="Update" class="btn btn-success">
                        <a button type='button' class="btn btn-primary" href="viewstudentrecord.php">Back</a> <br><br>                           
                       </div> 
                       </form>
</div>
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