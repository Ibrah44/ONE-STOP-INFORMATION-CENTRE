<?php

include('connection.php');
session_start();
if(isset($_SESSION['login_user']))
{
$status = pending;

//extracting data from the form
$FirstName = $_POST['FirstName'];

$LastName = $_POST['LastName'];

$YourEmail = $_POST['YourEmail'];

$status = $_POST['status'];

$region = $_POST['region'];

$UserName = $_POST['UserName'];

$Password = $_POST['Password'];

$passq = mysqli_query($conn,"insert into project (FirstName,LastName,Email,status,region,userName,password)
values('$FirstName','$LastName','$YourEmail','$status','$region','$UserName','$Password')");


if(isset($passq)){
header ('location:admin.php');
}
mysqli_close($conn);

}
else
{
Header('location: ../index.php');
}

?>