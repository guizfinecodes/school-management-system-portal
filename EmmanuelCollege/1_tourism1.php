<?php
error_reporting(0);//turning off error reporting
include("connect.php");
?>
<?php
mysql_select_db('sms2', mysql_connect('localhost', 'root', ''))or die(mysql_error());
?>
<?php
require_once('session1.php');
?>
<?php
$id = $_GET['id'];
    $select = "SELECT * FROM 
            studentstable WHERE admission_number='$id'";
             $result = mysql_fetch_array(mysql_query($select));
    $qry=mysql_query($select);
        if($qry)
        {
        while($rec = mysql_fetch_array($qry)){
            $sirname = "$rec[sirname]";
            $firstname = "$rec[firstname]";
            $lastname = "$rec[lastname]";
            $gender = "$rec[gender]";
            $mobile = "$rec[mobile]";
            $email = "$rec[email]";
            $address = "$rec[address]";
            $zipcode = "$rec[zipcode]";
            $course_id = "$rec[course_id]";
        }}
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

<script type="text/javascript">
            function sum(){
            var first_number = parseInt(document.getElementById("a").value);
            var second_number = parseInt(document.getElementById("b").value);
            var final =((first_number + second_number)/90)*100;
            var result=Math.round(final);
            document.getElementById("english").value = result;  
            }
</script>
<script type="text/javascript">
            function sum2(){
            var first_number = parseInt(document.getElementById("c").value);
            var second_number = parseInt(document.getElementById("d").value);
            var final =((first_number + second_number)/90)*100;
            var result=Math.round(final);

            document.getElementById("kiswahili").value = result;  
            }
</script>
<!--*****************calculating average marks*********************-->
<script type="text/javascript">
            function final(){
            var a = parseInt(document.getElementById("a").value);
            var b = parseInt(document.getElementById("b").value);
            var c = parseInt(document.getElementById("c").value);
            var d = parseInt(document.getElementById("d").value);
            var e = parseInt(document.getElementById("e").value);
            var f = parseInt(document.getElementById("f").value);
            
            
   
            
            //var number_of_subjects = parseInt(document.getElementById("h").value);

            var final =((a + b + c + d + e + f)/6);
            var result=Math.round(final);

            document.getElementById("average").value = result;  
            }
</script>



</head>

<body >
    <style type="text/css">
        body{
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
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
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="instructors.php" >Instructors <img src="assets/img/student48.png"></a></li>
            <li><a href="departments.php" >Departments <img src="assets/img/department.png"></a></li>
            <li class="active"><a href="markstep1.php" >Exams <img src="assets/img/update.png"></a></li>
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
                                  <li ><a href="markstep1.php">Choose Class <img src="assets/img/new.png"> </a></li>
                                  <li ><a href="markstep2.php">View Students<img src="assets/img/view2.png"></a></li>
                                  <li class="active"><a href="markstep3.php">Enter Marks<img src="assets/img/view2.png"></a></li>
                                  <li><a href="markstep5.php">Criteria <img src="assets/img/delete2.png"></a></li>
                                  <li><a href="markstep4.php">View Marks <img src="assets/img/import.png"></a></li>
                                  
                                  <li><a href="markstep6.php">Export/import CSV </a></li>
                                  <li><a href="markstep7.php">Print Transcript<img src="assets/img/print.png"> </a></li>
                                </ul>
                            <br>
                            
                        </div>
                        
  <!--*************************************************************************************************************************-->
    <div class="container-fluid">
       <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Marks</div>                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 


                <form action="1_tourism1.php" method="POST" enctype="multipart/form-data">
                     <div style="float:left; position:relative">  
                        <h4><font color="green">Marks Entry</font></h4>
                        <table>
                        <tr>                          
                        <td><label>Student ID</label></td>                        
                        <td><input type="text" name="admission_number"  value="<?php echo $id?>" class="form-control" ></td> 
                        <td><label>Course ID</label></td> 
                        <td><input type="text" name="course_id"  value="<?php echo $course_id?>" class="form-control"></td> 
                        <tr/>
                        <tr>
                       <td><label>Term</label></td> 
                        <td><select class="form-control" name="term" required="">
                             <?php
                                                include('connect.php');
                                                $sql1="SELECT * FROM term";
                                                $records1=mysqli_query($db,$sql1);
                                                 while($row=mysqli_fetch_array($records1,MYSQLI_ASSOC))
                                                {
                                                     echo "<option>".$row['termname']."</option>";
                                                            
                                                    }
                                                ?></select></td> 
                        <td><label>Year</label></td> 
                                                <?php
                                                // set start and end year range
                                                $yearArray = range(2019, 2028);
                                                ?>
                                                <!-- displaying the dropdown list -->
                                              <td>  <select name="year" class="form-control" required="">                                                        
                                                    <?php
                                                        foreach ($yearArray as $year) {
                                                            // if you want to select a particular year
                                                            $selected = ($year == 2019) ? 'selected' : '';
                                                            echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
                                                        }
                                                ?> </select></td> </tr><tr>

                       <td> <label> Exam Series</label></td> 
                       <td> <select name="exam_series" class="form-control"> 
                            <option>End Term</option>
                        </select></td> </tr></table>
                    
                    </div><br>
                    
                    <div style="float:left; position:relative">
                    <h4><font color="green">Subjects</font></h4>

                             <table><tr>
                            <td><label>introduction to tourism 
                            <input type="number" name="a" id="a" class="form-control"  onkeyup="final()" min="0" max="100" >
                            </td>
                            <td><label>client interaction and management 
                            <input type="number" name="b" id="b" class="form-control"  onkeyup="final()" min="0" max="100" >
                            </td></tr>

                            <tr>
                            <td><label>planning and management of tourism 
                            <input type="number" name="c" id="c" class="form-control"  onkeyup="final()" min="0" max="100" >
                            </td>
                            <td><label>entreprenuership engagement
                            <input type="number" name="d" id="d" class="form-control"  onkeyup="final()" min="0" max="100" >
                            </td></tr>

                            <tr>
                            <td><label>exploration/field skills 
                            <input type="number" name="e" id="e" class="form-control"  onkeyup="final()" min="0" max="100" >
                            </td>
                            <td><label>communication skills 
                            <input type="number" name="f" id="f" class="form-control"  onkeyup="final()" min="0" max="100" >
                            </td></tr>

                            
                            </table>                                                  
                        <label>Average</label>
                        <input type="text" name="average" id="average"  class="form-control" placeholder="Average"  ><br>
                        <div style="float:right;  position:relative; clear:both;">
                                                                             
                        <input type="submit" name="register" value="Save Entry" class="btn btn-success" >
                        </div>
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

        
    /*$xx=$_POST['course_idz'];
        $sql="SELECT * FROM course WHERE coursename='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $course_id = $row['course_id'];}*/

        $admission_number=$_POST['admission_number'];
        $course_id=$_POST['course_id'];
        $term=$_POST['term'];
        $year=$_POST['year'];
        $exam_series=$_POST['exam_series'];
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        $d=$_POST['d'];
        $e=$_POST['e'];
        $f=$_POST['f'];
       
        $average=$_POST['average'];


mysql_query("INSERT INTO
 marks(
    admission_number, course_id, term, year, exam_series, unit_1, unit_2, unit_3, unit_4, unit_5, unit_6, average )
     VALUES
      ('$admission_number','$course_id','$term','$year','$exam_series','$a','$b','$c','$d','$e', '$f' ,'$average')") or die(mysql_error());
?>
<?php 
                        $query="SELECT * FROM marks";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['id'];
                        }?>
                        
                        <script>
 
                        alert('Succsessfully Saved.');
                        window.location = "markstep1.php?id=<?php echo $id;?>";
                        </script>
<?php }?> 

<!--****************************************************************************-->


                </div>
                </p>


            </div>
            
        </div>
    </div>
    
    <div div class="col-md-12" style="background-color:#526F35;bottom:0px; position:fixed;">
        <p class="text-center text-danger" style="color:white;">@G. Brian Tel: +254745322226</p>
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