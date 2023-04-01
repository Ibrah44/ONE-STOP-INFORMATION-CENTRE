<?php
session_start();
include ('connect.php')


$vdate= date('d/m/Y');

$compareDate=mysql_query('select taskDate from task',$conn)
while($shwdatetasks = mysql_fetch_array($compareDate))
{
		
	  
	  '.$shwdatetasks["taskDate"].'
	  
	  
}

if($vdate==$shwdatetasks["taskDetails"])

{

$seltask=mysql_query('select taskid,taskName,TaskDetails from task',$conn)




echo '<table border="1" align="center" cellpadding="2" cellspacing="0">
	
	
	
	<tr>
	<td><b>Task ID</b></td>
	<td><b>Task name</b></td>
	<td><b>Task Details</b></td>
	
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
       
?>