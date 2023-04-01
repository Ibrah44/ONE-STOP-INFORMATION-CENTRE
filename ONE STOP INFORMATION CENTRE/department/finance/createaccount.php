<?php

include('connection.php');
$status = pending;

//extracting data from the form
$FirstName = $_POST['FirstName'];

$LastName = $_POST['LastName'];

$YourEmail = $_POST['YourEmail'];

$status = $_POST['status'];

$region = $_POST['region'];

$UserName = $_POST['UserName'];

$Password = $_POST['Password'];

$passq = mysql_query("insert into project (FirstName,LastName,Email,status,region,userName,password)
values('$FirstName','$LastName','$purpose','$YourEmail','$status','$region','$UserName','$Password')",$conn);


if(isset($passq)){
header ('location:admin.php');
}
mysql_close($conn);


?>