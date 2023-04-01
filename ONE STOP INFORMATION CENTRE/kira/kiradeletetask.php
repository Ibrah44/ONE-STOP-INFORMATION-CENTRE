
<?php

session_start();
if(isset($_SESSION['login_user']))
{
include('connect.php');
$id = $_GET['id'];
$deletetask = mysql_query("DELETE FROM task WHERE taskId = '$id'");
//or die(mysql_error().'Errrrrrrrrrrrrrrrrrrrrrrrrrrrror');

if(!$deletetask){
	echo 'An Error has Occured';
	}
	else {
	echo 'Successfully Deleted';
	}


header("Location: kiraviewtask.php");
}
else
{
Header('location: ../index.php');
}

?>
