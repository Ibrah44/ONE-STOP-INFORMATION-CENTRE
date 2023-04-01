
<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
$id = $_GET['id'];
$deletetask = mysql_query("DELETE FROM duty WHERE dutyId = '$id'");
//or die(mysql_error().'Errrrrrrrrrrrrrrrrrrrrrrrrrrrror');

if(!$deletetask){
	echo 'An Error has Occured';
	}
	else {
	echo 'Successfully Deleted';
	}


header("Location: viewduty.php");

 }
else
{
Header('location: ../index.php');
}   
//exit;
//mysql_close($conn);
?>
