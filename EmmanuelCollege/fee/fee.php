<?php
error_reporting(0);//turning off error reporting
include("connect.php");
$sql="SELECT studentid FROM students where studentid LIKE '%CCA%'";
$records=mysqli_query($db,$sql);

//$criteria=$_POST['admno'];

//$countyname=$_POST['countyname'];
//$sql1="SELECT constituencyname FROM constituency WHERE countyname '%".$countyname."%'";


//$query="SELECT constituencyname FROM constituency WHERE $category like '%".$criteria."%'";







?>
<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmmanuelCollege</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Mockup-MacBook-Pro.css">
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">


</head>

<body >

    <h2><img src="img/logo2.png">Emmanuel College
    <div style="float:right; font-size:20px;text-align:right;">
    <img src="assets/img/mail2.png">Email: guiz@brian.com<br>
    <img src="assets/img/call1.png">Contact:+254745322226<br>
    <img src="assets/img/location.png">Location: lurambi, kakamega.
    </div> 
   </h2>
</div>
<?php
//echo "i love you".$selectedcounty;
?>

 <div style="float:left;"></div></div><div style="float:right;">Current User: <font color="orange">guiz</font>  <a href="session_logout">Log Out<img src="assets/img/logout.png"></a></div><hr>
    
        <div>
        <ul class="nav nav-tabs">
            <li ><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li class="active"><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="instructors.php" >Instructors <img src="assets/img/student48.png"></a></li>
            <li><a href="departments.php" >Departments <img src="assets/img/department.png"></a></li>
            <li><a href="marks.php" >Exams <img src="assets/img/update.png"></a></li>
            <li><a href="hostel.php" >Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="parents.php">Parents/Guardians  <img src="assets/img/details.png"></a></li>
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
                                  <li class="active"><a href="#">New Student <img src="assets/img/new.png"> </a></li>
                                  <li><a href="updatestudent.php">Update Existing Record <img src="assets/img/update2.png"> </a></li>
                                  <li><a href="deletestudentrecord.php">Delete Record<img src="assets/img/delete2.png"></a></li>
                                  <li><a href="viewstudentrecord.php">View List<img src="assets/img/view2.png"></a></li>
                                  <li><a href="importstudentlist.php">Export Data (CSV) <img src="assets/img/import.png"></a></li>
                                  <li><a href="exportstudentlist.php">Bulk Sms <img src="assets/img/export.png"></a></li>
                                  <li><a href="searchstudent.php">Search <img src="assets/img/search.png"></a></li>
                                  <li><a href="billingstudent.php">Billing </a></li>
                                  <li><a href="studentcreditnotes.php">Credit Notes </a></li>
                                </ul>
                            <br>
                            
                        </div>
<!--**************ths is the success msg on saving the cord-->
<div style="width:100%; color:red; background-color:orange;text-align:center">
<?php

?>
</div>
                        
  <!--*************************************************************************************************************************-->
                       <form action="students.php" method="POST" enctype="multipart/form-data">
                        <table class="table table-hover" style="border-top:3px solid green">
                            
                            <tr><td colspan="4" style="height:0.2px;"><h4>Personal Details</h4></td></tr>
                            <tr>
                            <td colspan="4">
                             Sir name<input type="text" name="sirname">
                             Firstname Name<input type="text" name="firstname" class=" input-md" placeholder="Firstname" >
                              Last Name<input type="text" name="lastname">
                                    ID/Passport NO.<input type="text" name="idno"><br><br>DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="dateofbirth" required>
                                    Gender <select name="gender"> 
                                                  <option value="male">Male</option>
                                                  <option value="female">Female</option>
                                          </select> 
                                    Country<input type="text" name="country_id" placeholder="kenya" >
                                    County<select id="mySelect" name="county_id" id="county_id" >
                                                <?php
                                                $sql4="SELECT countyname FROM counties";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users4['countyname']."</option>";
                                                        }

                                                ?></select>

                                    Constituency<select name="constituency_id">
                                                <?php
                                                
                                                $sql1="SELECT constituencyname FROM constituency";
                                                $records1=mysqli_query($db,$sql1);
                                                    while($row=mysqli_fetch_array($records1,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$row['constituencyname']."</option>";
                                                        }
                                                ?></select>

                            </td>
                           <td> </td>    

                            </tr>
                             <tr><td style=" height:0.2px;"><h4>Contact Details</h4></td></tr>
                            <tr ><td>
                                
                                Mobile&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="mobile"> Email<input type="email" name="email"> 

                                Address<input type="text" name="address">
                                Zip Code <input type="text" name="zipcode">

                            </td>
                          
                             <tr><td style="height:0.2px;"><h4>Guardian/Parent and other Details</h4></td></tr>
                            <tr><td>
                                
                                Sir name&nbsp;&nbsp;<input type="text" name="sirname"> Firstname Name<input type="text" name="parent_id"> Last Name<input type="text" name="laname"><br><br>

                                      Mobile &nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="mobile2" >Relationship &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="relationship" placeholder="Father">
                                      

                            </td></tr>
                            <tr><td colspan="2"> 
                           <font color="orange" size="2">Date of Admission &nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="reg_date">
                                 Course Applied &nbsp;&nbsp;&nbsp;&nbsp;<select name="course_id">
                                                <?php
                                                $sql2="SELECT coursename FROM course";
                                                $records2=mysqli_query($db,$sql2);
                                                    while($users2=mysqli_fetch_array($records2,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users2['coursename']."</option>";
                                                        }
                                                ?></select>

                                    Assign  Class/Intake &nbsp;&nbsp;&nbsp;&nbsp;<select name="intake_id">
                                                <?php
                                                $sql3="SELECT intakename FROM intake";
                                                $records3=mysqli_query($db,$sql3);
                                                    while($users3=mysqli_fetch_array($records3,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users3['intakename']."</option>";
                                                        }
                                                ?></select>
                                    </font>
                                <br>
                                <br>
                               <input type="submit" name="register" value="Save Record">

                            </td>
                           <td></td>
                            </tr>
                        </table>
                        </form>
<!--*************************************PHP CODES TO SAVE THE DATA************************************************-->






<!--**********************************************************************************************************************-->
                </div>
                </p>


            </div>
            
        </div>
    </div>
    
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
</body>

</html>