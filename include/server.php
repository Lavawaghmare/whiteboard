<?
$i = $_SESSION['regserver']; // Set to correct database for this report 

switch ($i)

{
case 1:
$ServerName 	= "isidbver3.db.7522603.hostedresource.com";
$DataBaseName 	= "isidbver3";
$ServerUserName = "isidbver3";
$ServerPassword = "Y85h!B34";

  break;


default: 
$ServerName 	= "isidbver3.db.7522603.hostedresource.com";
$DataBaseName 	= "isidbver3";
$ServerUserName = "isidbver3";
$ServerPassword = "Y85h!B34";
}


 $con = mysqli_connect($ServerName, $ServerUserName, $ServerPassword, $DataBaseName); if (( $_GET['debug'] == 1 ) || ( $_SESSION['debug'] == 1 )) echo "Database connection made with MySQLi to $ServerName $ServerUserName $ServerPassword $DataBaseName.<br>";
 
 if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQLi: " . mysqli_connect_error($con);
 } else {
  if (( $_GET['debug'] == 1 ) || ( $_SESSION['debug'] == 1 )) echo "Database connection is confirmed without errors.<br>";
 }
 // mysql_select_db($DataBaseName, $con);
 
  $wightboard = 'wightboard';
?>