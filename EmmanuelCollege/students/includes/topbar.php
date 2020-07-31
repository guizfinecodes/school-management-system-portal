  <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">


<ul class="nav navbar-right top-nav">                        
<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" >
    <?php 
if(strlen($_SESSION['alogin'])=="")
    { 
    echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
             echo "<script>
                    window.location = 'index.php'
                  </script>";
    }
    else{
        echo   "Current user: ".$_SESSION['firstname']. "&nbsp;".$_SESSION['lastname']. " ";
        $Student=$_SESSION['username'];
        ?>
<span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;View your profile</a></li>
      <li><a href="register_form.php"><i class="fa fa-users fa-lg"></i>&nbsp;change password</a></li>
      <li class="divider"></li>
      <li><a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a></li>
  </ul>
</div>
  </ul>
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="dashboard.php">
                			    EMMANUEL | Student
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                       
                				<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                				
                				    <li><a href="session_logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                					
                		
                            
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>
