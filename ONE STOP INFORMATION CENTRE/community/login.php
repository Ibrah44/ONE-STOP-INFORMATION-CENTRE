
<?PHP
$id = $_GET['id'];
if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}

include('connection.php');
	  $row=mysqlI_query($conn,"SELECT*FROM login WHERE  department='Community'");
		 while($shwduty = mysqli_fetch_array($row))
	   {
		
$user =	$shwduty["userName"];
$pass =	$shwduty["password"];
//$dept =	$shwduty["department"];

$_SESSION['user'] = $user;
//$_SESSION['department'] = $dept;

if($id == 'Community'){
	header('location:../chatbox/home.php?id=Community');
	exit();
}
		 
}



?>