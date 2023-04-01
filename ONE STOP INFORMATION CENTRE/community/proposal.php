<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');


if(isset($_FILES['Doc']['name'])){
$status = 'pending';

//extracting data from the form
$ProjectId = $_POST['ProjectId'];

$ProjectName = $_POST['ProjectName'];

$purpose = $_POST['purpose'];

$DateOfSubmition = $_POST['DateOfSubmition'];

$SubmittedBy= 'Head Of Community Development Department';

//$Doc = $_POST['Doc'];



global $docpath;

$allowedDocExtensions = array("docx", "pdf", "doc", "PDF");
$temp2 = explode(".", $_FILES['Doc']['name']);
$docExtension = strtolower(end($temp2));

if($_FILES['Doc']['error'] == 0 && in_array($docExtension, $allowedDocExtensions)){
move_uploaded_file($_FILES['Doc']['tmp_name'], "../projectproposal/".$_FILES['Doc']['name']);
$docpath = "../projectproposal/" . $_FILES['Doc']['name'];

echo "The path to the video in the local directory is: " . $docpath . "<br />";
print_r($_FILES['Doc']['name']);
}

else{
$docpath = "No document was  uploaded"; echo "<br />".$_FILES['Doc']['error'];
}



$passq = mysql_query("insert into project (projectId,projectName,projectDetails,dateOfSubmission,submitedBy,document,status)
values('$ProjectId','$ProjectName','$purpose','$DateOfSubmition','$SubmittedBy','$docpath','$status')",$conn);


if(isset($passq)){
header ('location:fproposal.php');
}

else
{}

}



else
{
echo $_FILES['Doc']['name'];

}

}
else
{
Header('location: ../index.php');
}
//mysql_close($conn);

?>