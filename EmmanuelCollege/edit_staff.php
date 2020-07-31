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
            staff WHERE staff_id='$id'";
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
            $address = "$rec[address]";
            $zipcode = "$rec[zipcode]";
            $doa = "$rec[doa]";
            $kra = "$rec[kra]";
            $nssf = "$rec[nssf]";
            $nhif = "$rec[nhif]";
            $roles = "$rec[roles]";
            $department_id = "$rec[department_id]";}
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
    <title>school management system</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>
<!--codes to run the script for constituencies and counties-->
          <script type='text/javascript'>
           function OnSelectionChange(county_id) {  
              var selectedOption = county_id.options[county_id.selectedIndex];
              document.getElementById('selectedcounty').value = selectedOption.value;
           }
        </script>
        <script type="text/javascript">
                    function onclick(constituency_id){
                        <?php
                            $a=$_POST['county_id'];
                            echo $a;
                        ?>
            }
        </script>
<!--codes to run the script for constituencies and counties-->
<style type="text/css">
    h4{
        color:red;
    }
</style>
<!--styling up the heading of form-->

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
            <li class="active"><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
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
                                  <li ><a href="staff.php">New Staff Member <img src="assets/img/new.png"> </a></li>
                                  <li><a href="viewstaff.php">View List<img src="assets/img/view2.png"></a></li>
                                  <li class="active"><a href="edit_staff.php">Edit Staff <img src="assets/img/import.png"></a></li>
                                 <li ><a href="staff_reports.php">Reports <img src="assets/img/import.png"></a></li>
                                </ul>
                            <br>
                            
                        </div>
<!--**************ths is the success msg on saving the cord-->
                
  <!--*************************************************************************************************************************-->
                       
<div class="container-fluid">
       <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Edit Staff Member</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                       <form action="update_staff.php" method="POST" enctype="multipart/form-data">
                                                  
                                <div style="float:left;  position:relative">
                                <h4>Personal Details</h4>
                                <label>Staff NO:</label>
                                <input type="text" name="staff_id"  readonly value="<?php echo $id?>" class="form-control">                                               
                                <label>Sir name</label>
                                <input type="text" name="sirname" value="<?php echo $sirname?>" id="ssname" class="form-control" >
                             
                                <label>Firstname</label>
                                <input type="text" name="firstname" value="<?php echo $firstname?>" id="sfname" class="form-control" >
                              
                                <label>Last Name</label>
                                <input type="text" name="lastname" value="<?php echo $lastname?>" id="slname" class="form-control" >
                             
                                <label>ID/Passport NO.</label>
                                 <input type="text" name="idno" class="form-control" value="<?php echo $idno?>" >
                                <label>DOB</label>
                                <input type="date" name="dateofbirth" required class="form-control" max="2010-12-31" value="<?php echo $dateofbirth?>">
                                <label>Gender</label>
                                <select name="gender" class="form-control" class="form-control" value="<?php echo $gender?>"> 
                                                  <option value="male">Male</option>
                                                  <option value="female">Female</option>
                                          </select> 
                                <label>Country</label>
                                <select id="country_id" name="country_id" value="<?php echo $country_id?>" class="form-control">  
                                            <option></option>
                                                <?php 
                                                    $query=mysql_query("select * from countries");
                                                    while($row=mysql_fetch_array($query))
                                                     { 
                                                        if($result['country_id'] == $row['country_id']){
                                                            $sel = "selected";
                                                        }else{
                                                            $sel = "";
                                                        }
                                                            ?>
                                                        <option value="<?php echo $row['country_id'];?>" <?=$sel?> > <?php echo $row['countryname'];?> </option>
                                                        <?php 
                                                    } ?>
                                                    </select>

                                <label>County</label>
                                <select id="county_id" name="county_id" value="<?php echo $county_id?>" class="form-control">  
                                            <option></option>
                                                <?php 
                                                    $query=mysql_query("select * from counties");
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

                                <label> Constituency</label>
                                <select id="constituency_id" name="constituency_id" value="<?php echo $constituency_id?>" class="form-control">  
                                            <option></option>
                                                <?php 
                                                    $query=mysql_query("select * from constituency");
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
                                
                                <label> Department</label>
                                <select id="department_id" name="department_id" value="<?php echo $department_id?>" class="form-control">  
                                            <option></option>
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

                                </div>
                                <!--section two-->
                                <div style="float:right; position:relative">
                                <h4>Contact Details</h4>
                                                           
                                <label> Mobile</label>
                                <input type="number" name="mobile" required class="form-control" value="<?php echo $mobile?>">
                                <label> Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $email?>"> 

                                <label> Address</label>
                                <input type="text" name="address" class="form-control" value="<?php echo $address?>">
                               
                                <label> Zip Code</label>
                                <input type="text" name="zipcode" class="form-control" value="<?php echo $zipcode?>">
                                
                                <label> Date of Appointment</label>
                                <input type="date" name="doa" required class="form-control" value="<?php echo $doa?>">
                                
                                <label> KRA</label>
                                <input type="text" name="kra" class="form-control" value="<?php echo $kra?>">
                               
                                <label> NSSF</label>
                                <input type="text" name="nssf" class="form-control" value="<?php echo $nssf?>">
                                
                                <label> NHIF</label>
                                <input type="TEXT" name="nhif" required class="form-control" value="<?php echo $nhif?>" >

                                <label> Roles</label>
                                <input type="TEXT" name="roles" required class="form-control" value="<?php echo $roles?>" >
                                    
                                </textarea>
                                </div>                               
                                <!--this is section three-->
                                <div style="float:left;  position:relative; clear:both;"><br>                           
                                                               
                               
                               <input type="submit" name="register" value="Save Record" class="btn btn-success"><br><br>
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
<!--when everything is fine the loades stops loadeing-->
<script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>

</body>

</html>