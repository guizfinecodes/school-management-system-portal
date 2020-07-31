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
                                  <li class="active"><a href="staff.php">New Staff Member <img src="assets/img/new.png"> </a></li>
                                  <li><a href="viewstaff.php">View List<img src="assets/img/view2.png"></a></li>
                                  <li ><a href="edit_staff.php">Edit Staff <img src="assets/img/import.png"></a></li>
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
                        <div class="panel-heading">Add new Staff Member</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                       <form action="staff.php" method="POST" enctype="multipart/form-data">
                                                  
                                <div style="float:left;  position:relative">
                                <h4>Personal Details</h4>
                                                                               
                                <label>Sir name</label>
                                <input type="text" name="sirname" placeholder="e.g Kimani" id="ssname" class="form-control">
                             
                                <label>Firstname</label>
                                <input type="text" name="firstname" placeholder="e.g Jane" id="sfname" class="form-control" >
                              
                                <label>Last Name</label>
                                <input type="text" name="lastname" placeholder="e.g Wangechi" id="slname" class="form-control">
                             
                                <label>ID/Passport NO.</label>
                                 <input type="text" name="idno" class="form-control" placeholder="optional">
                                <label>DOB</label>
                                <input type="date" name="dateofbirth" required class="form-control" max="2010-12-31">
                                <label>Gender</label>
                                <select name="gender" class="form-control" class="form-control"> 
                                                  <option value="male">Male</option>
                                                  <option value="female">Female</option>
                                          </select> 
                                <label>Country</label>
                                <input type="text" name="country_id" placeholder="kenya" value="Kenya" class="form-control" />

                                <label>County</label>
                                <select  name="county_id" id="county_id" onchange="OnSelectionChange(this)" class="form-control">
                                                <?php
                                                $sql4="SELECT countyname FROM counties";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users4['countyname']."</option>";
                                                        $countyname=$users4['countyname'];
                                                        }

                                                ?></select>

                                <label> Constituency</label>
                                <select name="constituency_id" id="constituency_id" onchange="onclick(this)" class="form-control">
                                                <?php
                                                $sql1="SELECT constituencyname FROM constituency";
                                                $records1=mysqli_query($db,$sql1);
                                                    while($row=mysqli_fetch_array($records1,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$row['constituencyname']."</option>";
                                                        }
                                                ?></select>
                                
                                <label> Department</label>
                                <select name="department_id" id="department_id" onchange="onclick(this)" class="form-control">
                                                <?php
                                                $sql1="SELECT * FROM departments";
                                                $records1=mysqli_query($db,$sql1);
                                                    while($row=mysqli_fetch_array($records1,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$row['departmentname']."</option>";
                                                        }
                                                ?></select>

                                </div>
                                <!--section two-->
                                <div style="float:right; position:relative">
                                <h4>Contact Details</h4>
                                                           
                                <label> Mobile</label>
                                <input type="number" name="mobile" required class="form-control">
                                <label> Email</label>
                                <input type="email" name="email" class="form-control"> 

                                <label> Address</label>
                                <input type="text" name="address" class="form-control">
                               
                                <label> Zip Code</label>
                                <input type="text" name="zipcode" class="form-control">
                                
                                <label> Date of Appointment</label>
                                <input type="date" name="doa" required class="form-control" value="<?php echo date('Y-m-d'); ?>" >
                                
                                <label> KRA</label>
                                <input type="text" name="kra" class="form-control">
                               
                                <label> NSSF</label>
                                <input type="text" name="nssf" class="form-control">
                                
                                <label> NHIF</label>
                                <input type="TEXT" name="nhif" required class="form-control" >

                                <label> Roles</label>
                                <textarea name="roles" class="form-control" rows="4" >
                                    
                                </textarea>
                                <label> TSC NO.</label>
                                <input type="TEXT" name="tsc" required class="form-control" >

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
</div>
</div>

<!--*************************************PHP CODES TO SAVE THE DATA************************************************-->
<?php
    mysql_select_db('sms2',mysql_connect('localhost','root',''))or die(mysql_error());
    if (isset($_POST['register'])){


    $xx=$_POST['county_id'];
        $sql="SELECT * FROM counties WHERE countyname='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
        $county_id = $row['county_id'];}

    $xx=$_POST['constituency_id'];
        $sql="SELECT * FROM constituency WHERE  constituencyname='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
        $constituency_id= $row['constituency_id'];}

    $xx=$_POST['country_id'];
        $sql="SELECT * FROM countries WHERE  countryname='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
        $country_id= $row['country_id'];}

$xx=$_POST['department_id'];
        $sql="SELECT * FROM departments WHERE  departmentname='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
        $department_id= $row['department_id'];}

       
        $doa=addslashes($_POST['doa']);
        $kra=addslashes($_POST['kra']);
        $nssf=addslashes($_POST['nssf']);
        $nhif=addslashes($_POST['nhif']);
        $roles=addslashes($_POST['roles']);
        $tsc=addslashes($_POST['tsc']);
        $sirname=addslashes($_POST['sirname']);
        $firstname=addslashes($_POST['firstname']);
        $lastname=addslashes($_POST['lastname']);
        $idno=addslashes($_POST['idno']);
        $dateofbirth=addslashes($_POST['dateofbirth']);
        $gender=addslashes($_POST['gender']);
        $mobile=addslashes($_POST['mobile']);
        $email=addslashes($_POST['email']);
        $address=addslashes($_POST['address']);
        $zipcode=addslashes($_POST['zipcode']);
        $monthh = strtotime('date()');
        $mon = date('Y-m-d',$monthh);

    //<!--**************************************************************>
                        $psirname=addslashes($_POST['psirname']);
                        $pfirstname=addslashes($_POST['pfirstname']);
                        $plastname=addslashes($_POST['plastname']);
                        $pmobile=addslashes($_POST['pmobile']);
                        $prelationship=addslashes($_POST['prelationship']);
    
     mysql_query("INSERT INTO staff(sirname, firstname, lastname, idno, dateofbirth, gender, country_id, county_id, constituency_id, mobile, email, address, zipcode, doa, kra,nssf, nhif,roles,tsc,department_id) VALUES ('$sirname','$firstname','$lastname','$idno','$dateofbirth','$gender','$country_id','$county_id','$constituency_id','$mobile','$email','$address','$zipcode','$doa','$kra','$nssf','$nhif','$roles','$tsc','$department_id')") or die(mysql_error());

?>
                        <?php 
                        $query="SELECT * FROM studentstable";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQL_ASSOC))
                        {
                        $id = $rec['student_id'];
                        }?>
                        
                        <script>
 
                        alert('Succsessfully Save. Proceed to fee payment');
                        window.location = "viewstaff.php?id=<?php echo $id;?>";
                        </script>
<?php
 //<!--*******************************try add parent's details******************************************************-->  

}?>
<!--**********************************************************************************************************************-->
             

                </div>
                </p>


            </div>
            </div>
            
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
<!--when everything is fine the loades stops loadeing-->
<script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>

</body>

</html>