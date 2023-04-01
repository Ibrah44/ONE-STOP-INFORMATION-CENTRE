<?php

session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');

//extracting data from the form
if(isset($_FILES['projectdoc']['name'])){
$pId = $_POST["ProjectId"];

$pName = $_POST['ProjectName'];

$pur = $_POST['purpose'];

$status='Pending';
$auth='Waiting';

$DOS = $_POST['DateOfSubmission'];


//$doc = $_POST['projectdoc'];

$sBy= $_POST['SubmittedBy'];

//uploading document


global $docpath;

$allowedDocExtensions = array("docx", "pdf", "doc", "PDF");
$temp2 = explode(".", $_FILES['projectdoc']['name']);
$docExtension = strtolower(end($temp2));

if($_FILES['projectdoc']['error'] == 0 && in_array($docExtension, $allowedDocExtensions))
{
move_uploaded_file($_FILES['projectdoc']['tmp_name'], "../project/".$_FILES['projectdoc']['name']);
$docpath = "../project/" . $_FILES['projectdoc']['name'];

echo "The path to the project in the local directory is: " . $docpath . "<br />";
print_r($_FILES['projectdoc']['name']);
}

else
{
$docpath = "No document was  uploaded"; echo "<br />".$_FILES['projectdoc']['error'];
}



}

$passproject = mysql_query("insert into project (projectId,projectName,projectDetails,status,dateOfSubmission,document,submitedBy)values

                                                   ('$pId','$pName',  '$pur',        '$status','$DOS',      '$docpath','$sBy')"
,$conn);

if(isset($passproject))
header ('location:kiratownproposal.php');
//echo 'notinserted'.mysql_error()
/*
else
{
header ('location:nantownproposal.html');
}


else
{}

*/


//}
/*else
{
echo $_FILES['projectdoc']['name'];
}*/


//}

	}
else
{
Header('location: ../index.php');
}



?>