<?php
session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
$username = $_POST['username'];
$pwd = $_POST['pwd'];

header('location:nanindex.php');

/*
//Restrictions on uploads
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extensions = end($temp);


if(
(
($_FILES["file"]["type"] == "image/gif") 
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES['file']["type"] == "image/x-png")
|| ($_FILES['file']['type'] == "image/png")
)
&& in_array($extensions, $allowedExts) 
&& ($_FILES['file']['error'] < 1)
&& isset($_FILES['file']['type'])
)
{

if(file_exists("imageuploads/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . "already exists.";
}

else{
//in wamp change ["name"] to ["tmp_name"]
move_uploaded_file($_FILES["file"]["name"], "imageuploads/" . $_FILES["file"]["name"]);

echo "Upload:" . $_FILES["file"]["name"]. "<br />";
echo "Type:" . $_FILES["file"]["type"] . "<br />";
echo "Size".($_FILES["file"]["size"] / 1024). "KB<br />";

echo "Stored in: " . "imageuploads/" . $_FILES["file"]["name"];
}

}


else{
echo "invalid file <br/>";

echo "Name:   " . $_FILES["file"]["name"]. "<br />";
echo "Type:   " . $_FILES["file"]["type"] . "<br />";
echo "Size:   " . $_FILES["file"]["size"]/1024 ."<br/>";
echo "The error code is: ".$_FILES["file"]["error"]."<br />";
}








$updateuser=mysql_query ("update login set password='$pwd',image ='' where userName='$username' ",$conn);
if(!$updateuser)
{
//@header("Location: nanchangeprofile.html");
echo mysql_error();
}
*/

}
else
{
Header('location: ../index.php');
}s?>