<?php
//connecting to the database
 $conn = mysqli_connect ("localhost","root","");
  if(!$conn){
die("cant connect to the database". mysqli_error());
}
 
//selecting the database

$selectdb = mysqli_select_db ($conn,"osic");

if(!$selectdb){
die("Failed to select database osic". mysqli_error());
}
 
?>
