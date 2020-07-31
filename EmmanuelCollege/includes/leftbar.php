

<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <!--<img src="http://placehold.it/90/c2c2c2?text=User" alt="Brian Guiz" class="img-circle profile-img">-->
                                <h4 class="title" ><font color="green">Brian Guiz</font></h4>
                                <small class="info">#fine-codes</small><br>
                                <small class="info"><?php echo ('for help call: 0745322226'); ?></small><br><!--try to capture inidvidual deatils lie reg_nu, name, mobile ie profile tu-->
                                <small class="info"><?php echo time('d'); max('date_time_set()')?></small><br>
                                <small class="info"><?php echo date('Y-m-d'); max('date_time_set()')?></small>
                            </div>
                            <!-- /.user-info -->



                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Menu</span>
                                    </li>
                                    <li>
                                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Student Dashboard</span> </a>
                                        <li><a href="view_profile.php"><i class="fa fa-bars"></i> <span>Student Profile</span></a></li>
                                     
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    <?php 
                                    $id= $_SESSION['admission_number'];

                                     ?>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Student fees</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="view_fees.php"><i class="fa fa-bars"></i> <span>view fees status</span></a></li>
                                            <li><a href="viewstudentpaymentlog.php <?php echo '?id='.$id; ?>"><i class="fa fa fa-server"></i> <span>view payment log</span></a></li>
                                           
                                        </ul>
                                    </li>
  <li class="has-children">
                                        <a href="#"><i class="fa fa-newspaper-o"></i> <span>View Disciplinary Case</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="view_discipline.php"><i class="fa fa-bars"></i> <span>Disciplinary Case</span></a></li>
                                           <!-- <li><a href="manage-subjects.php"><i class="fa fa fa-server"></i> <span>Manage #####</span></a></li>
                                           <li><a href="add-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Add ####3 ##### </span></a></li>
                                           <a href="manage-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Manage ##### ###### </span></a></li>-->
                                        </ul>
                                    </li>
   <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>Session Reporting</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="studentsession_reporting.php"><i class="fa fa-bars"></i> <span>Report for session</span></a></li>
                                           <!-- <li><a href="manage-students.php"><i class="fa fa fa-server"></i> <span>view/#### ####</span></a></li>-->
                                           
                                        </ul>
                                    </li>
<li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>examination</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="view_results.php <?php echo '?id='.$id; ?>"><i class="fa fa-bars"></i> <span>view Result and average</span></a></li>
                                            <li><a href="printstudentresults.php <?php echo '?id='.$id; ?>"><i class="fa fa fa-server"></i> <span>print/manage Result</span></a></li>
                                             <li><a href="view_units.php"><i class="fa fa fa-server"></i> <span>view registered units</span></a></li>
                                           
                                        </ul>

                                        <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Accomodation</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="view_hostel.php"><i class="fa fa-bars"></i> <span>Accomodation details</span></a></li>
                                            
                                           
                                        </ul>
                                    </li>


                                        <li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Student Change Password</span></a></li>
                                           
                                    </li>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>