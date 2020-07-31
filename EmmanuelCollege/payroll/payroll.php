
    <!--//**************************************
    // Name: Payroll System in PHP
    // Description:A simple payroll system that I wrote before in my programming class in PHP for my student programming laboratories activities. I hope you will find my work useful in learning PHP.
    If you have some questions please send me an email at jake.r.pomperada@gmail.com and jakerpomperada@yahoo.com. 
    My mobile number here in the Philippines is 09173084360.
    // By: Jake R. Pomperada
    //
    //
    // Inputs:None
    //
    // Returns:None
    //
    //Assumes:None
    //
    //Side Effects:None
    //**************************************-->
    
    <html>
    <head>
    <title>Employees Payroll System</title>
    </head>
    <body bgcolor="yellow">
    <style type="text/css">
    fieldset {
    position:relative;
    margin-top:30px;
    height:360px;
    border-color: green;
    padding-top:10px;
    border-width : 2px;
    }
    legend {
    _position : absolute;
    _top : -10px;
    font-weight : bold;
    font-size : 120%;
    padding : 0px 10px 0px 10px;
    border-color: green;
    border-style : solid;
    border-width : 2px;
    background-color : #C3E0E8;
    }
    div 
    { 
    padding-buttom : 10px; 
    width : 350px;
    text-align: right;
    }
    label 
    {
    padding-right: 10px;
    }
    </style>
    <?php
    error_reporting(0);
    
    $emp_name = trim($_REQUEST['emp_name']);
    $emp_position = trim($_REQUEST['emp_position']);
    $emp_salary = trim($_REQUEST['emp_salary']);
    $with_tax = trim($_REQUEST['with_tax']);
    $sss = trim($_REQUEST['sss']);
    $phil_health = trim($_REQUEST['phil_health']);
    $pag_ibig = trim($_REQUEST['pag_ibig']);
    // Clear the text field
    if ($_REQUEST['submit2']){
    $emp_name = "";
    $emp_position ="";
    $emp_salary = "";
    $with_tax ="";
    $sss ="";
    $phil_health="";
    $pag_ibig="";
    
    }
    // Here To Perform Computation of the Payroll
    if ($_REQUEST['submit']){
    	$add_deductions = ($with_tax + $sss + $phil_health + $pag_ibig);
    	$compute = ($emp_salary - $add_deductions);
    	$total_deductions = number_format($add_deductions,2,'.',',');
    	$net_pay = number_format($compute,2,'.',',');
    }
    ?>
    <hr color="red" >
    <marquee bgcolor="#000080" style="color: #FFFFFF; 
    font-family: comic sans ms" font size = 5 behavior="alternate" > 
    Employees Payroll System
    </marquee>
    <hr color="red">
    <font face="comic sans ms" size=2 color="blue">
    <form method="post" action="">
    <fieldset>
    <legend> Employees Payroll System </legend>
    <div>
    	<label>Employees Name</label>
    	<input type="text" name="emp_name" value="<?php echo $emp_name; ?>">
    <br>
    </div>
    <div>
    	<label>Employees Position</label>
    	<input type="text" name="emp_position" value="<?php echo $emp_position; ?>">
    <br>
    </div>
    <div>
    	<label>Employees Salary</label>
    	<input type="text" name="emp_salary" value="<?php echo $emp_salary; ?>">
    <br> <br>
    </div>
    <label>TOTAL DEDUCTIONS</label> <br>
    <div>
    	<label>With Holding Tax</label>
    	<input type="text" name="with_tax" value="<?php echo $with_tax; ?>">
    	 </div>
    <div>
    	<label>Social Security System </label>
    	<input type="text" name="sss" value="<?php echo $sss; ?>">
    
    </div>
    <div>
    <label>PAG-IBIG Funds</label>
    	<input type="text" name="pag_ibig" value="<?php echo $pag_ibig; ?>"><br />
    </div>
    	 <div>
    <label>PHILHEALTH Insurance</label>
    	<input type="text" name="phil_health" value="<?php echo $phil_health; ?>"><br />
    	</div>
    	<br>
    <input type="submit" name="submit" value="Compute Salary"
    title="Click here to compute the salary.">
    	<input type="submit" name="submit2" value="Clear"
    	title="Click here to clear the textbox."	>
    <br> <br>
    <font face="comic sans ms" size=3 color="blue">
    <div>
    <label> Employees Total Deductions $ </label>
    <?php echo $total_deductions; ?><br />
    </div>
    <div>
    <label> Employees Net Pay $ </label>
    <?php echo $net_pay; ?><br />
    </div>
    </font>
    </fieldset>
    </form>
    </font>
    </body>
    </html>
		