<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duties</title>
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

include('connection.php');
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
                        <a href="nantownsupervise.php"> <img src="pics/inspection.jpg" width="50" height="50px"></i> Inspect Activities</a>
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
					
					
					
					
					<li>
                        <a class=""  href="nantownSchedule.php"><img src="pics/schedule.png" width="50" height="50px"></i> Schedule</a>
                    </li>					
                </ul>
            </div>
        </nav>   <!-- /. NAV SIDE  -->
      <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Nansana Town Council</h2>
                        <h5>Welcome Town Clerk ,Duties from the CAO. </h5>
                    </div>
					
					
					
					
					
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
					
					
					
						<div id="no-print">
						 
						                          <table >
				  <tr>
				  
				  <td valign="bottom"><a href="nananalysis.php "><input type="button" value="View Analysis" class="btn btn-primary " style="width:110px;"></a></td>
				<td align="right">
				<form method="POST" action="nansearchduty.php">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					
					
					<input type="text" name="search" placeholder="eg Pending">
					
					<input type="submit" value="search" />
					</form>
					</td>
					</tr>
					</table>
					<hr />
                <div class="row" >
                 
						<br/>
                <div class="row">
	
                    <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
  
/* display duties assigned by the CAO*/

include ('connect.php');


echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">';
	
	
	
echo	'<tr>
          <td><b>Duty ID</b></td>
         <td><b>Duty Name</b></td>
         <td><b>Duty Details</b></td>
         <td><b>Duty Date</b></td>
		 <td><b>Deadline</b></td>
		  <td><b>Duty Status</b></td>
		   <td><b>Action</b></td>
		 ';
		 
		 
		 
		 
		 
		 echo	'</tr>';
	$getduties=mysqli_query($conn,"select dutyId,dutyName,dutyDetails,dateOfDutyAssignment,deadline,status from duty  
						   where assignedTo='Nansana Town Clerk' order by dateOfDutyAssignment ");
	
	 // echo '<td> <a href = '.$shwinp["inpectionProof"].' />Download</a></td>'
	while($shwinp= mysqli_fetch_array($getduties))
	   {
	  // $pro=$shwprojects["document"];
		
	echo ' 
	  <td>'.$shwinp["dutyId"].'</td>
	  <td>'.$shwinp["dutyName"].'</td>
	  <td>'.$shwinp["dutyDetails"].'</td>
	  <td>'.$shwinp["dateOfDutyAssignment"].'</td>
	  
	  <td>'.$shwinp["deadline"].'</td>
      
	  
	  <td>'.$shwinp["status"].'</td>
	  <td align="center"><a  href="naneditduty.php?id='.$shwinp["dutyId"].'  ">  *Edit* </a></td>
	  
	  
	  
	 
	   
	  
	  
	  
	  
	  
	  </tr>';
	  }

	echo '</table>';

	
/*	
echo	'</tr>';
	$getduties=mysql_query("select dutyId,dutyName,dutyDetails,dateOfDutyAssignment from duty where assignedTo='Nansana Town Clerk'",$conn);
	
	
	while($shwduty = mysql_fetch_array($getduties))
	   {
		
	echo ' 
	  <td>'.$shwduty["dutyId"].'</td>
	  <td>'.$shwduty["dutyName"].'</td>
	  <td>'.$shwduty["dutyDetails"].'</td>
	  <td>'.$shwduty["dateOfDutyAssignment"].'</td>
	  
	  <td align="center"><a  href="naneditduty.php?id='.$shwduty["dutyId"].'  ">  *Edit* </a></td>
	  
	 
	   
	  
	  </tr>';*/
	 // }

	echo '</table>';
	
	echo '<hr />';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
/* end display of duties from the cao*/		
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