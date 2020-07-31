<?php
	include("connect.php");
if (isset($_REQUEST['expnummer'])){
	$nieuwexpnummer=$_REQUEST['expnummer'];
	if ($nieuwexpnummer!=$expnummer){
		updateTableOne("commonparameters","name='expnummer'","value",$nieuwexpnummer);		
	}
} 		
if (isset($_REQUEST['expters'])) {
	$nieuwexpters=$_REQUEST['expters'];
	if ($nieuwexpters!=$expters){
		updateTableOne("commonparameters","name='expters'","value",$nieuwexpters);
	}
}
if (isset($_REQUEST['bon1'])) {
	header("Location: printbon.php");
	exit();
}
if (isset($_REQUEST['bon2'])) {
	header("Location: blancobon.php");
	exit();
}
?>
	

<html>
<head>
<link rel="stylesheet" type="text/css" href="boris.css" />
<link rel="stylesheet" type="text/css" href="buttons.css" />

</head>

<body>

<p align=center> <a href="monitor.php" class="buttonoranje">Back to monitor</a></p>

<form  name="form1"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
<table border=0 align=center>
<tr><td>	
<table class=rond align=center>	
	<tr>
		<td align=right>Experiment number:</td><td><input type="text" name="expnummer" value="<?php echo $expnummer; ?>" size=7></td>
	</tr>

	<tr>
		<td align=right>Experimenters:</td><td><input type="text" name="expters" value="<?php echo $expters; ?>" size=70></td>
	</tr>

	<tr><td colspan=2 align=center>
		<input type="submit" name="bon1" value="Print receipts" class=buttonblauw>      <input type="submit" name="bon2" value="Print blank receipts" class=buttonblauw>
	</td></tr>
</table>
</td><td>

</td></tr></table>
</form>

</body>
</html>