<?php
error_reporting(0);
mysql_select_db('sms2',mysql_connect('localhost','root',''))or die(mysql_error());
?>
<?php
require_once('session1.php');
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
<div style="
    font-family:Nyala, Arial;
    text-align: left; 
    background-color: #333;
    padding: 20px; 
    color:white;
    width: 100%;
    height: 100px;">
    <h2><img src="assets/img/logo.png">emmanuel college
    <div style="float:right; font-size:20px;text-align:right;">
    <img src="assets/img/mail2.png">Email: brianguis@gmail.com<br>
    <img src="assets/img/call1.png">Contact:+254745322226<br>
    <img src="assets/img/location.png">Location: lurambi, kakamega town
    </div> 
   </h2>
</div>
<?php
//echo "i love you".$selectedcounty;
?>

 <div style="float:left;"></div></div><div style="float:right;">Current User: <font color="orange">guiz</font>  <a href="xxx">Log Out<img src="assets/img/logout.png"></a></div><hr>
    
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
            <li><a href="parents.php">Parents/Guardians <img src="assets/img/details.png"></a></li>
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
                                  <li class="active"> <a href="viewstudentsedit1.php">Update Existing Record <img src="assets/img/update2.png"> </a></li>
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
//echo $msg;
?>
</div>
                        
  <!--*************************************************************************************************************************-->
                       <div class="form-group">

                       <form action="viewstudentsedit1.php" method="POST" enctype="multipart/form-data">
                        <table class="table table-hover table-striped" style="border-top:3px solid red" >
                            
                        <tr><td colspan="4" style="height:0.2px;"><h4>Personal Details&nbsp;&nbsp;&nbsp;(Admission Number<input type="text" name="student_id" value="<?php echo $id?>">)</h4></td></tr>
                            <tr>
                            <td colspan="4">
                             Sir name<input type="text" name="idno" placeholder="e.g Kimani" >
                             Firstname Name<input type="text" name="fname"  >
                              Last Name<input type="text" name="lname" >
                                salary<input type="text" name="salary" ><br><br>
                       
                             <tr><td>
                               <input type="submit" name="register" value="Update Record" class="btn btn-success">

                            </td>
                         
                            </tr>
                        </table>
                        </form>

</div>


<?php   //diri na mah submit ang data. lantawun nia kung mai onud ang every txtbox
    if (isset($_POST['register']))
    {
        if (($_POST['idno'] == '')or($_POST['fname'] == '')or($_POST['lname'] == '')or($_POST['salary'] == ''))
            {
            echo mysql_error();
            }
            else{ //dri namn is ang mga "name=tenant_id" nga ara sa mga input type.
                $idno = $_POST['idno'];
                $fname = $_POST['fname'];
                $lname= $_POST['lname'];
                $salary = $_POST['salary'];
                
mysql_query("UPDATE `trial` SET `idno`='idno',`fname`='fname',`lname`='lname',`salary`='salary] WHERE idno=1");
                
 
                
                }
            }
    ?>
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
    <script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>
</body>

</html>