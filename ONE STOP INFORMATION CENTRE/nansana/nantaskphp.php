<?php
session_start();
if(isset($_SESSION['login_user']))
{

include ('connect.php')


$vdate= date('d/m/Y');

$compareDate=mysqli_query($conn,'select taskDate from task')
while($shwdatetasks = mysqli_fetch_array($compareDate))
{
		
	  
	  '.$shwdatetasks["taskDate"].'
	  
	  
}

if($vdate==$shwdatetasks["taskDetails"])

{

$seltask=mysql_query('select taskid,taskName,TaskDetails from task',$conn)




echo '<table border="1" align="center" cellpadding="2" cellspacing="0">
	
	
	
	<tr>
	<td><b><i>Task ID</i></b></td>
	<td><b><i>Task name</i></b></td>
	<td><b><i>Task Details</i></b></td>
	
	</tr>';
	while($shwtasks = mysql_fetch_array($seltask)){
	echo "	
	  
	  <td>'.$shwtasks["taskId"].'</td>
	  <td>'.$shwtasks["taskName"].'</td>
	  <td>'.$shwtasks["taskDetails"].'</td>
	  
	  </tr>";
	}
	echo '</table>';
		
}

else {}	
       
}
else
{
Header('location: ../index.php');
}

?>