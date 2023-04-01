<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connect.php');
$rid=$_POST['RequisationId'];
$iname=$_POST['itemName'];
$qty=$_POST['Quantity'];

$redate=$_POST['date'];
$pur=$_POST['Purpose'];
$reqby=$_POST['Requestedby'];


$status='Pending';




$insertrequest=mysql_query("insert into request(requestId,itemName,quantity,requestDate,purpose,requestedby,status )
 values('$rid','$iname','$qty',
'$redate','$pur','$reqby','$status')",$conn);



if(isset($insertrequest))
{

header ('location:nantownRequest.php');

}

else
{}




}
else
{
Header('location: ../index.php');
}



?>