<?php
session_start();
if(isset($_SESSION['login_user']))
{
include ('connection.php');
$date = date('d-m-y');
$de =  (date('m')-1);
$di =  (date('y')-1);
$da =  (date('d')-10);
$se = date('Y');
$d =  (date('m'));

$si = $se.'-'.'0'.$de;
echo '<table border="0" align="center" cellpadding="2" cellspacing="0" width="80%" height = "35"> 
                       	  
		   <tr>     <td COLSPAN = "3" align="center"><b><font size="4">WAKISO DISTRICT LOCAL GOVERNMENT</font></b><hr /></td> <tr>       
		  
     </table>';



echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="650">';
	
	
	
echo	'<tr>
          <td><b>Inspection Id</b></td>
         <td><b>Activity Id</b></td>
         <td><b>Activity Name</b></td>
		 <td><b>Date Of Inspection Date</b></td>
         <td><b>Inspector</b></td>';
	
	
echo	'</tr>';
	$get=mysql_query("select * from inspect where inspectionDate like '%$di%' AND doneBy='Head Of Education Department' order by inspectionId desc",$conn);
	
	
	while($shwasset = mysql_fetch_array($get))
	   {
		
	echo ' 
	  <td>'.$shwasset["inspectionId"].'</td>
	  <td>'.$shwasset["activityId"].'</td>
	  <td>'.$shwasset["activityName"].'</td>
	  <td>'.$shwasset["inspectionDate"].'</td>
	  <td>'.$shwasset["doneBy"].'</td>
	  
	  </tr>';
	  }

	echo '</table>';
	
	echo '<hr />';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<center>';
    echo '<a href="inspectionpyear.php"><input type="button" value="Back" class="btn btn-primary "></a>';
	echo '&nbsp;&nbsp;&nbsp';     
	 //echo '<a href="printinspectiony.php"><input type="button" value="Print" class="btn btn-primary "></a>';     
    echo '<a href="#" onClick="window.print();" return false; ><input type="button" value="Print" class="btn btn-primary "></a>';
		echo '<center/>';
		
		 }
else
{
Header('location: ../index.php');
}   
		
		
		?>