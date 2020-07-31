<?php
error_reporting(0);
mysql_select_db('sms2', mysql_connect('localhost', 'root', ''))or die(mysql_error());
?>
<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['admin_id']) || (trim($_SESSION['admin_id']) == '')) { 
?>

<?php
}
$session_id=$_SESSION['id'];
$user_query = mysql_query("SELECT * from admin where admin_id = '$session_id'")or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
$user_username = $user_row['username'];
?>


