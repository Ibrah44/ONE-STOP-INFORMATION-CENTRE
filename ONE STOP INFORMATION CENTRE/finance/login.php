
<?PHP
$id = $_GET['id'];
if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}

include('connect.php');
	  $row=mysqli_query($conn,"SELECT*FROM login WHERE  status='Finance'");
		 while($shwduty = mysqli_fetch_array($row))
	   {
		
$user =	$shwduty["userName"];
$pass =	$shwduty["password"];
//$dept =	$shwduty["department"];

$_SESSION['user'] = $user;
//$_SESSION['department'] = $dept;

if($id == 'CAO'){
	header('location:../chatbox/home.php?id=Finance');
	exit();
}
		 
}



?>

