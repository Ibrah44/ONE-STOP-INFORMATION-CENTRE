<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duty Analysis</title>
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
echo '<div id="wrapper" >
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header"  >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="caoindex.php">WOSIC</a>
            </div>
  <div class="onestop" id="one" ><img src="pics/wakisoemb.png" width="80" height="70px"><font size="5" face="times new romans"> WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp;       
  
  <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse " id="no-print">
               <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					 <img src="pics/service.png" width="200" height="50px">

	 <li>
                        <a class=""  href="caoindex.php"> <img src="pics/home.png" width="50" height="50px"> Home</font></a>
                    </li>
                   

                    <li>
                        <a   href="caoallocateDuty.php"><img src="pics/assignduty.jpg" width="50" height="50px"></i>Assign Duties</a>
                    </li>
                     <li>
                        <a  href="caomanupulateRequistion.php"><img src="pics/viewrequests.png" width="50" height="50px"></i> Requistions</a>
                    </li>
                    
                    
					<li>
                        <a class=""  href=" caomanipulateProject.php"><i class="fa fa-dashboard fa-3x"></i> Submitted Projects</a>
                    </li>
                    
                    
          
                   
						
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Wakiso Chief Administrative Officer</h2>
                        <h5>Duty Analysis</h5>
                    </div>
					
                </div>           
                 <!-- /. ROW  -->
                  
				  
				  
				  <div class="no-print">
				  <table >
				  <tr>
				  
				  <td valign="bottom"></td>
				<td align="right">
				<form method="post" action="caosearchduty.php">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					
					
					<input type="text" name="search" placeholder="eg Nansana">
					
					<input type="submit" value="search" />
					</form>
					</td>
					</tr>
					</table>
					<hr />
                <div class="row" >
                   <!-- <div class="col-md-3 col-sm-6 col-xs-6">-->

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
  
/*
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
		
		   $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '$si%' AND taskStatus='pending' AND taskScheduler='Head Of Finance Department' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Tasks</td>';
	  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$si%' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Tasks</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$si%' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS Acomplished FROM task WHERE dateOfExecution like '%$si%' AND taskStatus='Acomplished' AND taskScheduler='Head Of Finance Department'");
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
		   $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$si%' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '%$si%' AND taskStatus='pending' AND taskScheduler='Head Of Finance Department'");
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
		  
		 $row=mysql_query("SELECT COUNT(taskId) AS Acomplished FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='Acomplished' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["Acomplished"].'</td>';
		 
		 }
		 
		 
		  
		  echo '</tr>';
        echo '<tr> <td>Pending Tasks</td>';
		
		   $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='pending' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Tasks</td>';
	  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$di%' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Tasks</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$di%' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS Acomplished FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='Acomplished' AND taskScheduler='Head Of Finance Department'");
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
		   $row=mysql_query("SELECT COUNT(taskId) AS duti FROM task WHERE dateOfExecution like '%$di%' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(taskId) AS pending FROM task WHERE dateOfExecution like '%$di%' AND taskStatus='pending' AND taskScheduler='Head Of Finance Department'");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x2 = $shwduty1["pending"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y2 = $shwduty["duti"];
	$perc = ($x2/$y2)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 
		 
		 echo'</td></tr>';
	
	*/
	
	echo '
<form action="caograph.php" method="post">

<table>

<td>Year Analysis</td>

<tr>

<td>
Year:

<select name= "year">
<option>--Select Year--</option><option>2015</option> 
<option>2014</option><option>2013</option>
</select>
</td>

<td>
<select name="section"><option>--Select Technocrat--</option> <option>Nansana Town Clerk </option> 
<option>Kira Town Clerk</option><option>Town Councils</option><option>Head Of Community Department</option>
<option>Head Of Education Department</option><option>Head Of Finance Department</option><option>Head Of Health Department</option><option>All Departments</option>


</select>
</td>

<td><input type="submit" value="Generate Graph"/> </td>
<td><input type="reset" value="Refresh"/></td>

<tr/>
</form>';
 
 
/* echo '
<form action="caographmonths.php" method="post">

<table>
<tr>
<td>Detailed Analysis</td>
</tr>
<tr>


<td>


Year:

<select name= "year"><option>--Select Year--</option><option value="01">2015</option> <option>2014</option>
<option>2013</option>
</select>

</td>

<td>
<select name= "month">
<option>--Select Month--</option><option value="January">January</option> <option value="February">February</option><option value="March">March</option><option value="April">April</option>
<option value="May">May</option><option Value="June">June</option> <option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option>
<option value="November">November</option><option value="December">December</option>
</select>
</td>

<td>
<select name="section"><option>--Select Technocrat--</option> <option value="Nansana Town Clerk">Nansana Town Clerk </option> <option>Kira Town Clerk</option><option>Town Councils</option><option>Head Of Finance Department</option><option>Head Of Community Department</option><option>Head Of Education Department</option> <option>Head Of Health Department</option><option>Departments</option>


</select>
</td>

<td>
<input type="submit" value="Generate Graph"/> 
</td>
<td>
<input type="reset" value="Refresh"/>
</td>
</form>';

*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
 
	echo '</table>&nbsp;&nbsp;&nbsp;&nbsp;		 		
	<a href="caoviewduties.php "><input type="button" value="Back" class="btn btn-primary " style="width:110px;"></a>';	
						
					
						
						
           echo '                                        
			    </div>
                 <!-- /. ROW  -->
                <hr />
                </div>             
                                   
                                 
                               
             </div>
         </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

    <div id="footer" style="background-color: #4D4D4D;">
      <div class="container">
        <p class="text-muted credit" style="text-align: center">@ copyright property of wakiso district</p>
      </div>
    </div>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>';





}
else
{
Header('location: ../index.php');
}



 ?>
