
<?PHP
$id = $_GET['id'];
if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}

include('connection.php');
	  $row=mysqli_query($conn,"SELECT*FROM login WHERE  region='Nansana'");
		 while($shwduty = mysqli_fetch_array($row))
	   {
		
$user =	$shwduty["userName"];
$pass =	$shwduty["password"];


$_SESSION['user'] = $user;
if($id == 'Nansana'){
	header('location:../chatbox/home.php?id=Nansana');
	exit();
}
		 
}



?>
