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
            <div class="sidebar-collapse " id="no-print">
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
  
/* display assets of the town council*/

//echo "<div class='no-print'>";nantaskperformance.php
echo "<table border='1' align='center' class='' width='950px'>";

echo "<tr/>
<td id='no-print'>
<a href='nanpendtasks.php' >View Pending Tasks</a>*****
<a href='nanaccomptasks.php'>View Accomplished Tasks</a>


<tr/>";
//echo *****<a href=''>View Task Analysis</a></td>
echo "<table/>";

//echo "<div>";

// create a page called viewTownAssets and include in the code
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px" class="">';
	
	
	
echo	'<tr>
          <td><b>Task ID</b></td>
         <td><b>Task Name</b></td>
         <td><b>Task Details</b></td>
		 
         <td><b>Task Status</b></td>
		 <td><b>Date</b></td>
		 <td><b>Action</b></td>
		
	
	
 	     </tr>';
		 
		 //insert the where clause
	$gettask=mysqli_query($conn,"select * from task  where taskScheduler='Nansana Town Clerk' ");
	
	
	while($shwtask = mysqli_fetch_array($gettask))
	   {
		
	echo ' 
	  <td>'.$shwtask["taskId"].'</td>
	  <td>'.$shwtask["taskName"].'</td>
	  <td>'.$shwtask["taskDetails"].'</td>
	  <td>'.$shwtask["taskStatus"].'</td>
	  <td>'.$shwtask["dateOfExecution"].'</td>
	  
	  
	  
	  <td> <a  href="nanedittask.php?id='.$shwtask["taskId"].' ">Edit ::
	       <a  href="nandeletetask.php?id='.$shwtask["taskId"].' "onClick="if(confirm(\'Are you sure you want to delete this record?\')) return true; else return false;">Delete</a>
	     </td>
	   
	   
	  
	   
	  
	  
	  </tr>';
	  }

	echo '</table>';
	
	echo '<hr />';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo '<div class="no-print">';
	echo '<center>';
    echo '<a href="nantownSchedule.php "><input type="button" value="Previous" class="btn btn-primary " style=width:100px;></a>';
	echo '&nbsp;&nbsp;&nbsp';        
    echo '<a href="#" onClick="window.print();" return false; ><input type="button" value="Print" class="btn btn-primary " style=width:100px;></a>';
		echo '<center/>';
		
		echo '</div>';
	
	
	
	
	
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