 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body><title>Performance Analysis</title>
</head>


<body>

<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
include('phpgraphlib.php');
//include('phpgraphlib_pie.php');
//include('phpgraphlib_stacked.php');
 echo '<!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home menu</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->';
	 
  echo " <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>";
   echo '<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="departmentindex.php">WOSIC</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp; <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a class=""  href="departmentindex.php"><img src="pics/home.png" width="50" height="50px"> Home</a>
                    </li>
					                    <li>
                        <a href="finspection.php"> <img src="pics/inspection.jpg" width="50" height="50px"> Inspect Activities</a>
                    </li>
                    <li>
                        <a  href="frequisation.php"><img src="pics/requestnew.png" width="50" height="50px"> Requisations</a>
                    </li>
                     <li>
                        <a  href="stask.php"><img src="pics/schedul.png" width="50" height="50px"> Schedule Task</a>
                    </li>
					<li>
                        <a  href="fasset.php"><img src="pics/asset.png" width="50" height="50px"> Asset Procurement</a>
						</li>
						<li>
                        <a  href="fproposal.php"><img src="pics/project.jpg" width="50" height="50px"> Propose Project</a>
                    </li>
                    
                  
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Finance Department</h2>
                        <h5>Welcome';  echo' Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->';
				 echo '<table border="0" align="center" width="auto"> <tr> <td><a href="viewpendingduty.php">view pending duties</a> &nbsp;&nbsp;&nbsp;&nbsp;</td>  <td><a href="viewacomplishedduty.php">view accomplished duties</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>  <td><a href="viewduty.php">view all available duties</a>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr> </table>';	

                echo'  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>';
					 					 
                    echo '<div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
									

$date = date('d-m-y');
$de =  (date('m')-1);
$di =  (date('y')-1);
$da =  (date('d')-10);
$se = date('Y');
$d =  (date('m'));

$si = $se.'-'.'0'.$de;
echo $si;
						
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="80%">';
	
echo '<tr><td align="center" colspan="5"><b>Performance analysis for the previous month</b></td></tr>';	
	
echo	'<tr>
          <td>Accomplished Duties</td>';
		  
		 $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '$si%' AND status='Accomplished' AND assignedTo='Head Of Finance Department' ");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["Acomplished"].'</td>';
		 
		 }
		 
		 
		  
		  echo '</tr>';
        echo '<tr> <td>Pending Duties</td>';
		
		   $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '$si%' AND status='pending' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Duties</td>';
	  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$si%' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Duties</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$si%' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '%$si%' AND status='Accomplished' AND assignedTo='Head Of Finance Department'");
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
		   $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$si%' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '%$si%' AND status='pending' AND assignedTo='Head Of Finance Department'");
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
		  
		 $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '%$di%' AND status='Accomplished' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["Acomplished"].'</td>';
		 
		 }
		 
		 
		  
		  echo '</tr>';
        echo '<tr> <td>Pending Duties</td>';
		
		   $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '%$di%' AND status='pending' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["pending"].'</td>';
		 
		 }
		 echo '</tr>';
		 
       echo ' <tr> <td>Total Number Of Duties</td>';
	  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$di%' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	echo '<td>'.$shwduty["duti"].'</td>';
		 
		 }
		 echo '</tr>';
		 
		 
		  echo '<tr><td>percentage of Accomplished Duties</td><td>';
		  
		  $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$di%' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS Acomplished FROM duty WHERE deadline like '%$di%' AND status='Accomplished' AND assignedTo='Head Of Finance Department'");
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
		   $row=mysql_query("SELECT COUNT(dutyId) AS duti FROM duty WHERE deadline like '%$di%' AND assignedTo='Head Of Finance Department'");
		 while($shwduty = mysql_fetch_array($row))
	   {
		
	      $shwduty["duti"];
	     $row=mysql_query("SELECT COUNT(dutyId) AS pending FROM duty WHERE deadline like '%$di%' AND status='pending' AND assignedTo='Head Of Finance Department'");
		 while($shwduty1 = mysql_fetch_array($row))
	     
		  $x2 = $shwduty1["pending"];
	
	     		     
	//echo $shwduty1["Acomplished"];
	$y2 = $shwduty["duti"];
	$perc = ($x2/$y2)*100;
	
	
	 //$perc = (($shwduty1["Acomplished"]/$shwduty["duti"])*100);
	
	       echo $perc."%";
		 }
		 
		 
		 echo'</td></tr>';
	
	
		
 
	echo '</table>
	<br/><br/><br/>
	<center>
	<table border="1" witdth="80%">
	<tr><td colspan="2" align="center"><b> Generate a graph for a given year</b></font> </td></tr>
	<form action="departmentgraphyear.php" method="post">
<tr><td>
<label>Year:</label>
<select name= "year">
<option>--Select Year--</option>
<option>2016</option> 
<option>2015</option> 
<option>2014</option>
<option>2013</option>
</select></td>


	
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Generate Graph"/> 
<input type="reset" value="Refresh"/>
</td></tr>
</form>
</table>
</center>
	
	
	
	<br/>
	<center>
	
	<table border="1" witdth="80%">
	<tr><td colspan="4" align="center"><b>Generate a graph for a given month</b></font></td></tr>
	<form action="departmentgraphmonth.php" method="post">
<tr><td>
<label>Year:</label>
<select name= "year">
<option>--Select Year--</option>
<option>2016</option> 
<option>2015</option> 
<option>2014</option>
<option>2013</option>
</select></td>


<td>
<label>Month:</label>
<select name= "month">
<option>--Select Month--</option>
<option value="01">January</option> 
<option value="02">February</option>
<option value="03">March</option>
<option value="04" >April</option>
<option value="05">May</option>
<option value="06">June</option> 
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
</td>



<td>
<input type="submit" value="Generate Graph"/> 
<input type="reset" value="Refresh"/>
</td></tr>
</form>
</table>

</center>
	&nbsp;&nbsp;&nbsp;&nbsp;		 		
	<center><a href="viewduty.php" class="btn btn-primary">Back</a> </center>  			
						
					
						
						
                                                   
			    </div>
                 <!-- /. ROW  -->
                <hr />
                </div>             
                                   
                                 
                                </div>';
                    
		echo '			  
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
