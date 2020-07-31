<?php
error_reporting(0);
$conn = mysql_connect("localhost","root","");
mysql_select_db("sms2",$conn);
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM studentstable WHERE student_id='" . $_POST["users"][$i] . "'");
}
header("Location:pro1.php");

?>
