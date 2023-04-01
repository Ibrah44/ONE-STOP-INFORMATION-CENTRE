<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
$status = pending;

//extracting data from the form
$RequisationId = $_POST['RequisationId'];

$Item = $_POST['Item'];

$Quantity = $_POST['Quantity'];

$Requestedby = $_POST['Requestedby'];

$Purpose= $_POST['Purpose'];

$date = $_POST['date'];

$passq = mysql_query("insert into request (requestId,ItemName,quantity,requestedby,purpose,requestDate,status) values('$RequisationId','$Item','$Quantity','$Requestedby','$Purpose','$date','$status')",$conn);

if(isset($passq)){
header ('location:frequisation.php');
}
mysql_close($conn);

}
else
{
Header('location: ../index.php');
}?>

