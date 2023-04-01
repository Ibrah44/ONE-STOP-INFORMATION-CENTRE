<?php


session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
$dutyid=$_POST['dutyId'];
$dutyname=$_POST['dutyName'];
$dutydetails=$_POST['dutyDetails'];

$date=$_POST['date'];
$dated=$_POST['deaddate'];
$assignedTo =$_POST['assignedTo'];

$dutysta='Pending';




$insertduty=mysql_query("insert into duty (dutyId,   dutyName,   dutyDetails,   dateOfDutyAssignment,deadline,   assignedTo,         status,        doneDate )
                                   values('$dutyid','$dutyname','$dutydetails','$date',              '$dated',  '$assignedTo',       '$dutysta',    '0000-00-00')",$conn);



if(isset($insertduty))
{
//page not echoed back
header ('location:caoallocateDuty.php');

}

else
{
	echo mysql_error();
	
	}




}
else
{
Header('location: ../index.php');
}







?>