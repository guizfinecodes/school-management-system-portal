<?php


DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','sms2');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
?>
<?php

session_start();
session_destroy();
header('location:index.php');
?>