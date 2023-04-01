<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connect.php');
$tid=$_POST['TaskId'];
$tname=$_POST['TaskName'];
//$tshed=$_POST['TaskSchuler'];

$excdate=$_POST['tdate'];
$tdesc=$_POST['TaskDescription'];
$status='Pending';

$tasksh='Nansana Town Clerk';
//echo $tdesc;

$insertask=mysql_query("insert into task(taskId,taskName,taskDetails,dateOfExecution,	taskScheduler,taskStatus)
                                   values('$tid','$tname','$tdesc',  '$excdate',     '$tasksh',   '$status')",$conn);



if(isset($insertask))
{

header ('location:nantownSchedule.php');
}


else {}


}
else
{
Header('location: ../index.php');
}



?>