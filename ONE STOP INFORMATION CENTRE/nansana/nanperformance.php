$date = date('d-m-y');
$de =  (date('m')-1);
$di =  (date('y')-1);
$da =  (date('d')-10);
$se = date('Y');
$d =  (date('m'));

$si = $se.'-'.'0'.$de;
//echo $d;
						
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="80%">';
	
echo '<tr><td align="center" colspan="5"><b>Performance analysis for the previous month</b></td></tr>';	
	
echo	'<tr>
          <td>Accomplished Duties</td>';
		  
		 $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '$si%' AND status='Acomplished' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["Acomplished"].'</td>';
		 
		 }
		 
		 
		  
		  echo '</tr>';
        echo '<tr> <td>Pending Duties</td>';
		
		   $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '$si%' AND status='pending' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Duties</td>';
	  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$si%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Duties</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$si%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '%$si%' AND status='Acomplished' ");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x = $shwduty1["Acomplished"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y = $shwduty["duti"];
	$perc = ($x/$y)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 echo '</td></tr>';
		 	 
		 
		  
		 echo '<tr><td>percentage of Pending Duties</td><td>';
		   $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$si%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '%$si%' AND status='pending' ");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x2 = $shwduty1["pending"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y2 = $shwduty["duti"];
	$perc = ($x2/$y2)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 
		 
		 echo'</td></tr>';
        	//$row=mysql_query('select* count(*)from duty WHERE deadline like'%$de%'");
		
	
	//ANALYSIS FOR THE PREVIOUS YEAR
	
echo '<tr><td align="center" colspan="5"><b>Performance analysis for the previous year</b></td></tr>';	
	
echo	'<tr>
          <td>Accomplished Duties</td>';
		  
		 $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '%$di%' AND status='Acomplished' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["Acomplished"].'</td>';
		 
		 }
		 
		 
		  
		  echo '</tr>';
        echo '<tr> <td>Pending Duties</td>';
		
		   $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '%$di%' AND status='pending' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Duties</td>';
	  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$di%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Duties</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$di%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '%$di%' AND status='Acomplished' ");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x = $shwduty1["Acomplished"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y = $shwduty["duti"];
	$perc = ($x/$y)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 echo '</td></tr>';
		 	 
		 
		  
		 echo '<tr><td>percentage of Pending Duties</td><td>';
		   $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$di%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '%$di%' AND status='pending' ");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x2 = $shwduty1["pending"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y2 = $shwduty["duti"];
	$perc = ($x2/$y2)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 
		 
		 echo'</td></tr>';
	
	
		
 
	echo '</table>&nbsp;&nbsp;&nbsp;&nbsp;		 		
	<center><a href="viewduty.php" class="btn btn-primary">Back</a> </center>  			
						
					
						
						
