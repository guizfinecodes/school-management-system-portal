<?php
error_reporting(0);//turning off error reporting
include("connect.php");
$sql="SELECT studentid FROM students where studentid LIKE '%CCA%'";
$records=mysqli_query($db,$sql);


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
        



<!--codes to run the script for constituencies and counties-->
<style type="text/css">
    h4{
        color:red;
    }
</style>
<!--styling up the heading of form-->

</head>

<body background="assets/img/4.jpg">
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
                                <a href="#"><action = email to:><i class="fa fa-envelope"></i>customersupport: brianguis@gmail.com</a>
                            </div>
                            <div class="col-md-4 col-sm-3 col-xs-6 text-left">
                                <a href="#"><i class="fa fa-phone"></i>0745322226</a>
                            </div>
                            
                        </div>
                    </div>
                     <div class="green_below">
                        <div class="text-left">
                            <a href="homepage.php">EMMANUEL COLLEGE</a>
                        </div>
                        
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
            <!--<li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>
            <li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--**************************************************************************************************************************-->
                        <div class="container" style="width:100%">
                            
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="students.php">New Student <img src="assets/img/new.png"> </a></li>
                                  <li><a href="viewstudentrecord.php">View List<img src="assets/img/view2.png"></a></li>
                                  <li><a href="viewstudentsedit1.php">Edit Student<img src="assets/img/view2.png"></a></li>
                                  <li><a href="csvstudents.php">Import/Export Data <img src="assets/img/import.png"></a></li>
                                  <li><a href="reports_students.php">Reports </a></li>
                                </ul>
                            <br>
                            
                        </div>
<!--**************ths is the success msg on saving the cord-->
                
  <!--*************************************************************************************************************************-->
<div class="container-fluid">
       <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Add new student</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                       <form action="students.php" method="POST" enctype="multipart/form-data">


                        <label><i><font color ="red">Last Admission number</font></label>
                            <br>
                                
                                   <font color="sky-blue" > <?php                                                
                                                $sql3="SELECT admission_number FROM studentstable order by student_id desc limit 1";
                                                
                                                $records3=mysqli_query($db,$sql3);                                              

                                                    while($users3=mysqli_fetch_array($records3,MYSQL_ASSOC))
                                                        {
                                                            echo $users3['admission_number'];
                                                        }
                                                ?></font>
                                                </i><br>
                                                <br>


                                 <label>Admission number</label>
                                <input type="text" name="admission_number" value="2019/" title="admission_number" id="ssname" class="form-control" required="">              
                                <div style="float:left;  position:relative">
                                <h4>Personal Details</h4>
                                                                               
                                <label>Sir name</label>
                                <input type="text" name="sirname" placeholder="e.g Kimani" id="ssname" class="form-control" required="">
                             
                                <label>Firstname</label>
                                <input type="text" name="firstname" placeholder="e.g Jane" id="sfname" class="form-control" required="">
                              
                                <label>Last Name</label>
                                <input type="text" name="lastname" placeholder="e.g Wangechi" id="slname" class="form-control" required="">
                             
                                <label>ID/Passport NO.</label>
                                 <input type="text" name="idno" class="form-control" placeholder="optional">
                                <label>DOB</label>
                                <input type="date" name="dateofbirth" required class="form-control" max="2010-12-31">
                                <label>Gender</label>
                                <select  name="gender" id="gender" required="" class="form-control">
                                    <option value="">--select gender--</option>
                                <?php                                                
                                                $sql3="SELECT gendername FROM genderset";
                                                $records3=mysqli_query($db,$sql3);                                              

                                                    while($users3=mysqli_fetch_array($records3,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users3['gendername']."</option>";
                                                        }
                                                ?></select>
                                
                                <label>Country</label>
                                <input type="text" name="country_id" placeholder="kenya" value="Kenya" class="form-control" required="">

                                <label>County</label>
                                <select  name="county_id" id="county_id" onchange="OnSelectionChange(this)" required="" class="form-control">
                                    <option value="">--select county--</option>
                                                <?php
                                                $sql4="SELECT countyname FROM counties";
                                                $records4=mysqli_query($db,$sql4);
                                                   while($users4=mysqli_fetch_array($records4,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users4['countyname']."</option>";
                                                        $countyname=$users4['countyname'];
                                                        }

                                                ?></select>

                                
                                </div>
                                <!--section two-->
                                <div style="float:right; position:relative">
                                <h4>Contact Details</h4>
                                                           
                                <label> Mobile</label>
                                <input type="number" name="mobile"  class="form-control" required="" placeholder="0712345678">
                                <label> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="xyz@gmail.com" required="">

                                <label> username</label>
                                <input type="text" name="username" class="form-control" required="" placeholder="username to use">
                                <label> password</label>
                                <input type="password" name="password" class="form-control" placeholder="enter password" required="">  

                                <label> Address</label>
                                <input type="text" name="address" class="form-control" required="">
                               
                                <label> Zip Code</label>
                                <input type="text" name="zipcode" class="form-control">
                                
                                <label> Date of Admission</label>
                                <input type="date" name="reg_date" required readonly class="form-control" value="<?php echo date('Y-m-d'); max('date_time_set()')?>" >
                                
                                <label>Course. </label>
                                <select name="course_id" required class="form-control">
                                    <option value="">--select course--</option>
                                                <?php                                                                                                                                                
                                                $sql2="SELECT * FROM course  ";
                                                $records2=mysqli_query($db,$sql2);
                                                $out=mysqli_num_rows($records2);
                                                //check wheather or not classes are entered
                                                        if ($out=0)
                                                        {
                                                                $out="It seems there are classes added yet[<a href='course.php'>Add Class</a>] ";
                                                        }
                                                        else{
                                                            $out=mysqli_num_rows($records2). " Classes found [<a href='course.php'>Add Class</a>] ";
                                                        }
                                                //end of check process. the output is stored in variable $out
                                                while($users2=mysqli_fetch_array($records2,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users2['coursename']."</option>";
                                                        }
                                                
                                                ?></select>
                                                <?php echo '<font color="red"><i>'.$out. '</i></font>'?><br>

                                <label>Room</label>

                                <select name="room_number" required="" class="form-control">
                                    <option value="">--select room--</option>
                                                <?php                                                
                                                $sql3="SELECT room_number FROM room where booked = 'no' order by room_number ";
                                                $records3=mysqli_query($db,$sql3);                                              

                                                    while($users3=mysqli_fetch_array($records3,MYSQL_ASSOC))
                                                        {
                                                            echo "<option>".$users3['room_number']."</option>";
                                                        }
                                                ?></select>
                                                <font color="blue">NB:Additional charges to all borders<br> to be paid to hostel-attendants.</font>
                                <br>
                                </div>                               
                                <!--this is section three-->
                                <div style="float:right;  position:relative; clear:both;">
                             
                                <h4>Guardian/Parent and other Details for student</h4>
                                                     
                                <label> Sir name</label>
                                <input type="text" name="psirname" id="sn" class="form-control" required="">
                                
                                <label>Firstname </label>
                                <input type="text" name="pfirstname" id="fn" class="form-control" required="">
                                 
                                 <label>Last Name</label>
                                <input type="text" name="plastname" class="form-control">
                                
                                <label>Mobile</label> 
                                <input type="number" name="pmobile" class="form-control">

                                <label>Emergency Contact</label> 
                                <input type="number" name="emergency_contact" class="form-control" required="">
                                
                                <label>Relationship </label>
                                <input type="text" name="prelationship" placeholder="Father" class="form-control" required=""><br>
                               
                               
                               <input type="submit" name="register" value="Save Record" class="btn btn-success"><br><br>
                                </div>                               
                        </form></div>
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

    $xx=$_POST['course_id'];
        $sql="SELECT * FROM course WHERE coursename='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
        $course_id = $row['course_id'];
        $feepayable = $row['feepayable'];}
        
    $xx=$_POST['room_number'];
        $sql="SELECT * FROM room WHERE room_number='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){ 
        $room_number = $row['room_number'];}

    $xx=$_POST['country_id'];
        $sql="SELECT * FROM countries WHERE countryname='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQL_ASSOC)){
        $country_id = $row['country_id'];}

        $finalfee=$amount +$feepayable;

       
        $admission_number=strtoupper(addslashes($_POST['admission_number']));
        $reg_date=strtoupper(addslashes($_POST['reg_date']));
        $sirname=strtoupper(addslashes($_POST['sirname']));
        $firstname=strtoupper(addslashes($_POST['firstname']));
        $lastname=strtoupper(addslashes($_POST['lastname']));
        $idno=strtoupper(addslashes($_POST['idno']));
        $dateofbirth=strtoupper(addslashes($_POST['dateofbirth']));
        $gender=strtoupper(addslashes($_POST['gender']));
        $mobile=strtoupper(addslashes($_POST['mobile']));
        $emergency_contact=strtoupper(addslashes($_POST['emergency_contact']));
        $email=strtoupper(addslashes($_POST['email']));
        $username=strtoupper(addslashes($_POST['username']));
        $password=strtoupper(addslashes($_POST['password']));
        $address=strtoupper(addslashes($_POST['address']));
        $zipcode=strtoupper(addslashes($_POST['zipcode']));
        //$border=addslashes($_POST['border']);
        $monthh = strtotime('date()');
        $mon = date('Y-m-d',$monthh);
        $active="yes";

    //<!--**************************************************************>
                        $admission_number=strtoupper(addslashes($_POST['admission_number']));
                        $psirname=strtoupper(addslashes($_POST['psirname']));
                        $pfirstname=strtoupper(addslashes($_POST['pfirstname']));
                        $plastname=strtoupper(addslashes($_POST['plastname']));
                        $pmobile=strtoupper(addslashes($_POST['pmobile']));
                        $prelationship=strtoupper(addslashes($_POST['prelationship']));
    
     mysql_query("INSERT INTO studentstable(admission_number, sirname, firstname, lastname, idno, dateofbirth, gender, country_id, county_id, constituency_id, mobile, email,username, password, address, zipcode, course_id,reg_date, feepayable, emergency_contact, active, room_number)
      VALUES ('$admission_number','$sirname','$firstname','$lastname','$idno','$dateofbirth','$gender','$country_id','$county_id','$constituency_id','$mobile','$email','$username', '$password', '$address','$zipcode','$course_id','$reg_date','$finalfee','$emergency_contact', '$active', '$room_number')") or die(mysql_error());
     mysql_query("INSERT INTO parents(admission_number, psirname, pfirstname, plastname, pmobile, prelationship)
      VALUES('$admission_number','$psirname','$pfirstname','$plastname','$pmobile','$prelationship')") or die(mysql_error());

     mysql_query("UPDATE room SET admission = '$admission_number', booked = 'yes' WHERE room_number = '$room_number' ") or die(mysql_error());


?>
                        <?php 
                        $query="SELECT * FROM studentstable";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['admission_number'];
                        }?>
                        
                        <script>
 
                        alert('Succsessfully Saved. Proceed to fee payment');
                        window.location = "fee.php?id=<?php echo $id;?>";
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