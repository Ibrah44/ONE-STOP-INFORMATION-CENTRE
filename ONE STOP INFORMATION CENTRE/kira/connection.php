<?php
//connecting to the database
 $conn = mysql_connect ("localhost","root","");
  if(!$conn){
die("cant connect to the database". mysql_error());
}
 
 
 
//selecting the database

$selectdb = mysql_select_db ("osic", $conn);

if(!$selectdb){
die("Failed to select database osic". mysql_error());
}
 
?>
