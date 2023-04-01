<?php


session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');

if(isset($_FILES['inspectionProof']['name'])){

$aid=$_POST['activityId'];
$inId=$_POST['inspectionId'];
$actName=$_POST['actName'];

$insdate=$_POST['insdate'];
//$insproof=$_POST['inspectionProof'];
//$done=$_POST['insby'];
$done='Kira Town Clerk';




global $docpath;

$allowedDocExtensions = array("docx", "pdf", "doc", "PDF");
$temp2 = explode(".", $_FILES['inspectionProof']['name']);
$docExtension = strtolower(end($temp2));

if($_FILES['inspectionProof']['error'] == 0 && in_array($docExtension, $allowedDocExtensions)){
move_uploaded_file($_FILES['inspectionProof']['tmp_name'], "../inspection/".$_FILES['inspectionProof']['name']);
$docpath = "../inspection/" . $_FILES['inspectionProof']['name'];

echo "The path to the inpection proof in the local directory is: " . $docpath . "<br />";
print_r($_FILES['inspectionProof']['name']);
}

else{
$docpath = "No document was  uploaded"; echo "<br />".$_FILES['inspectionProof']['error'];
}






$insertinspect=mysql_query("insert into inspect(activityId,inspectionId,activityName,inspectionDate,inspectionProof,doneBy)
 values('$aid','$inId','$actName','$insdate','$docpath','$done')",$conn);


if(!$insertinspect)

{
echo mysql_error();
}







else
{
	header ('location:kiratownsuper.php');
	
}

}

	}
else
{
Header('location: ../index.php');
}





?>