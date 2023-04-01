<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');

if(isset($_FILES['assetdoc']['name'])){

$id=$_POST['AssetId'];
$name=$_POST['AssetName'];
$quantity=$_POST['qty'];
$assetpur=$_POST['pur'];
$by='Head Of Health Department';
$date=$_POST['purchasedate'];

$amount=$_POST['amount'];
//uploading document


global $docpath;

$allowedDocExtensions = array("docx", "pdf", "doc", "PDF");
$temp2 = explode(".", $_FILES['assetdoc']['name']);
$docExtension = strtolower(end($temp2));

if($_FILES['assetdoc']['error'] == 0 && in_array($docExtension, $allowedDocExtensions)){
move_uploaded_file($_FILES['assetdoc']['tmp_name'], "../asset/".$_FILES['assetdoc']['name']);
$docpath = "../asset/" . $_FILES['assetdoc']['name'];

echo "The path to the video in the local directory is: " . $docpath . "<br />";
print_r($_FILES['assetdoc']['name']);
}

else{
$docpath = "No document was  uploaded"; echo "<br />".$_FILES['assetdoc']['error'];
}



$insertasset=mysql_query("insert into asset(assetId,assetName,quantity,purpose,purchaseDate,purchasedBy,document,amount)
                                      values('$id', '$name', '$quantity', '$assetpur', '$date','$by', '$docpath', '$amount')",$conn);

if(isset($insertasset))
{
header ('location:fasset.php');

}

else
{}

}



else
{
echo $_FILES['assetdoc']['name'];

}

}
else
{
Header('location: ../index.php');
}
?>