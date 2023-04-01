<?php

session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');


$vdate= date('d/m/Y');

$compareDate=mysql_query('select taskDate from task taskScheduler="Kira Town Clerk"',$conn)
while($shwdatetasks = mysql_fetch_array($compareDate))
{
		
	  
	  '.$shwdatetasks["taskDate"].'
	  
	  
}

if($vdate==$shwdatetasks["taskDetails"])

{

$seltask=mysql_query('select taskid,taskName,TaskDetails from task where 	taskScheduler="Kira Town Clerk"',$conn)




echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">
	
	
	
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