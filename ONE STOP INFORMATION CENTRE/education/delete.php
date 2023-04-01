
<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
$id = $_GET['id'];
$deletetask = mysql_query("DELETE FROM task WHERE taskId = '$id'");
//or die(mysql_error().'Errrrrrrrrrrrrrrrrrrrrrrrrrrrror');

if(!$deletetask){
	echo 'An Error has Occured';
	}
	else {
	echo 'Successfully Deleted';
	}


header("Location: viewtask.php");

 }
else
{
Header('location: ../index.php');
}   
//exit;
//mysql_close($conn);
?>
