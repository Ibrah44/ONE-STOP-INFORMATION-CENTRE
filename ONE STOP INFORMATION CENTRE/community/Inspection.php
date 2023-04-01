<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');

if(isset($_FILES['por']['name'])){

$activityId = $_POST['activityId'];

$inspectionId =$_POST['inspectionid'];

$activityname=$_POST['activityname']; 

$date =$_POST['date'];

$inspectedby =$_POST['inspectedby'];

$by='Head Of Community Development Department'; 
                                       
//$ProofofInspection = $_POST['por'];

global $docpath;

$allowedDocExtensions = array("docx", "pdf", "doc", "PDF");
$temp2 = explode(".", $_FILES['por']['name']);
$docExtension = strtolower(end($temp2));

if($_FILES['por']['error'] == 0 && in_array($docExtension, $allowedDocExtensions)){
move_uploaded_file($_FILES['por']['tmp_name'], "../financeinspection/".$_FILES['por']['name']);
$docpath = "../financeinspection/" . $_FILES['por']['name'];

echo "The path to the video in the local directory is: " . $docpath . "<br />";
print_r($_FILES['por']['name']);
}

else{
$docpath = "No document was  uploaded"; echo "<br />".$_FILES['por']['error'];
}


$sed =  mysql_query("insert into inspect(activityId,inspectionId,activityName,inspectionDate,inspectionProof,doneBy) values('$activityId','$inspectionId','$activityname','$date','$docpath','$by')");

if(isset($sed)){
header ('location:fInspection.php');
}

else
{}

}



else
{
echo $_FILES['por']['name'];

}
//mysql_close($conn);
}
else
{
Header('location: ../index.php');
}
?>