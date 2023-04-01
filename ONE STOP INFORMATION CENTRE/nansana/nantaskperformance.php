<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit View Task</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connect.php');
session_start();
echo '
 <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="nanindex.php">WOSIC</a>
            </div>
  <div class="onestop" id="one"><font size="5" face="times new romans"> WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp;       
  
  <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse ">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					<a class=""><i class="fa  fa-3x"></i> <img src="pics/service.png" width="200" height="50px"></a>

					</li>
                     
                                     
<li>
                        <a href="nanindex.php"> <img src="pics/home.png" width="50" height="50px"></i> Home</a>
                    </li>

                    <li>
                        <a href="nantownsupervise.html"> <img src="pics/inspection.jpg" width="50" height="50px"></i> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="nangetduties.php"><img src="pics/duty.png" width="50" height="50px"></i> Duties</a>
                    </li>
                                       
                     <li>
                        <a  href="nantownRequest.php"><img src="pics/requestnew.png" width="50" height="50px"></i> Requisations</a>
                    </li>
                    <li>
                        <a  href="nantownAssets.php"><img src="pics/passet.png" width="50" height="50px"></i> Record Assets</a>
					</li>
						<li>
                        <a  href="nantownpro.php"><img src="pics/project.jpg" width="50" height="50px"></i> Propose Project</a>
                    </li>	
					
					
					
					
									
                </ul>
            </div>
        </nav> <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Nansana Town Council</h2>
                        <h5>Welcome Town Clerk ,View, Edit and Delete Tasks </h5>
                    </div>
					
					
					
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
  
/* display task analysis of the town council*/

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
          <td>Accomplished Tasks</td>';
		  
		 $row=mysql_query("SELECT COUNT(taskId) AS Acomplished FROM task WHERE dateOfExecution like '%$si%' AND taskStatus='Acomplished' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["Acomplished"].'</td>';
		 
		 }
		 
		 
		  
		  echo '</tr>';
        echo '<tr> <td>Pending Tasks</td>';
		
		   $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '$si%' AND taskStatus='pending' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Tasks</td>';
	  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$si%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Tasks</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$si%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS Acomplished FROM task WHERE dateOfExecution like '%$si%' AND taskStatus='Acomplished' ");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x = $shwduty1["Acomplished"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y = $shwduty["duti"];
	$perc = ($x/$y)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 echo '</td></tr>';
		 	 
		 
		  
		 echo '<tr><td>percentage of Pending Tasks</td><td>';
		   $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$si%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '%$si%' AND taskStatus='pending' ");
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
          <td>Accomplished Tasks</td>';
		  
		 $row=mysql_query("SELECT COUNT(taskId) AS Acomplished FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='Acomplished' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["Acomplished"].'</td>';
		 
		 }
		 
		 
		  
		  echo '</tr>';
        echo '<tr> <td>Pending Tasks</td>';
		
		   $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='pending' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Tasks</td>';
	  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$di%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Tasks</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$di%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS Acomplished FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='Acomplished' ");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x = $shwduty1["Acomplished"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y = $shwduty["duti"];
	$perc = ($x/$y)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 echo '</td></tr>';
		 	 
		 
		  
		 echo '<tr><td>percentage of Pending Tasks</td><td>';
		   $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$di%' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='pending' ");
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
	<center><a href="viewduty.php" class="btn btn-primary">Back</a> </center>  ';
	
	
	/* end display of anaysis */		
 echo ' </div>
                 <!-- /. ROW  -->
                
             </div>
         </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->';
     

echo '
 <div id="footer" style="background-color: #4D4D4D;">
      <div class="container">
        <p class="text-muted credit" style="text-align: center">@ copyright property of wakiso district</p>
      </div>
    </div>';

						
}
else
{
Header('location: ../index.php');
}					
						
?>