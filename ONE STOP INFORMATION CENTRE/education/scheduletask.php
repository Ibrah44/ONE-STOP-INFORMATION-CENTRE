<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
$status = pending;
//extracting data from the form
$TaskId = $_POST['TaskId'];

$TaskName = $_POST['TaskName'];

$TaskDescription = $_POST['TaskDescription'];

$DateOfExecution = $_POST['DateOfExecution'];

$TaskSchuler= $_POST['TaskSchuler'];

$DepartmentId = $_POST['DepartmentId'];

$passq = mysql_query("insert into task (taskId,TaskName,taskDetails,dateOfExecution,taskScheduler,departmentId, taskStatus) values('$TaskId','$TaskName','$TaskDescription','$DateOfExecution','$TaskSchuler','$DepartmentId','$status')",$conn);

if(isset($passq)){
header ('location:stask.php');
}

else {}

mysql_close($conn);
 }
else
{
Header('location: ../index.php');
}   


?>

