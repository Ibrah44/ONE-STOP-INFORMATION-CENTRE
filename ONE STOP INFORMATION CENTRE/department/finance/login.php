
<?PHP

if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}

include('connection.php');
	  $row=mysqli_query($conn,"SELECT*FROM login WHERE  department='Finance'");
		 while($shwduty = mysqli_fetch_array($row))
	   {
		
$user =	$shwduty["userName"];
$pass =	$shwduty["password"];
$dept =	$shwduty["department"];

$_SESSION['user'] = $user;
$_SESSION['department'] = $dept;
$id = $_GET['id'];
if($id == 'Finance'){
	header('location:../chatbox/home.php?id=Finance');
	exit();
}
		 
}



?>
