<?php
//connecting to the database
 $conn = new mysqli("localhost", "root", "", "osic");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//selecting the database
$selectdb = $conn->select_db("osic");

if(!$selectdb){
    die("Failed to select database osic". $conn->error);
}
?>