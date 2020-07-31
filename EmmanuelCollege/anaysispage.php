<?php
$sql="SELECT * FROM studentstable WHERE course_id=1";
$result=mysqli_query($db,$sql) or die("error getting data");
$class1=mysqli_num_rows($result);

?>
<?php
$sql="SELECT * FROM studentstable WHERE course_id=2";
$result=mysqli_query($db,$sql) or die("error getting data");
$class2=mysqli_num_rows($result);

?>
<?php
$sql="SELECT * FROM studentstable WHERE course_id=3";
$result=mysqli_query($db,$sql) or die("error getting data");
$class3=mysqli_num_rows($result);

?>
<?php
$sql="SELECT * FROM studentstable WHERE course_id=4";
$result=mysqli_query($db,$sql) or die("error getting data");
$class4=mysqli_num_rows($result);

?>
<?php
$sql="SELECT * FROM studentstable WHERE course_id=5";
$result=mysqli_query($db,$sql) or die("error getting data");
$class5=mysqli_num_rows($result);

?>
<?php
$sql="SELECT * FROM studentstable WHERE course_id=6";
$result=mysqli_query($db,$sql) or die("error getting data");
$class6=mysqli_num_rows($result);

?>
<?php
$sql="SELECT * FROM studentstable WHERE course_id=7";
$result=mysqli_query($db,$sql) or die("error getting data");
$class7=mysqli_num_rows($result);

?>
<?php
$sql="SELECT * FROM studentstable WHERE course_id=8";
$result=mysqli_query($db,$sql) or die("error getting data");
$class8=mysqli_num_rows($result);

?>