<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
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
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

<?php
include('connection.php');
echo '
 <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="WISCO">Logo Image</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;">  WAKISO ONE STOP INFORMATION CENTRE &nbsp; <a style="float: right" href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse ">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					<a class="" ><i class="fa  fa-3x"></i> SERVICES</a>

					</li>


                    <li>
                        <a href="inspection.html"> <i class="fa fa-dashboard fa-3x"></i> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="duties.html"><i class="fa fa-desktop fa-3x"></i> Duties</a>
                    </li>
                     <li>
                        <a  href="scheduletask.html"><i class="fa fa-desktop fa-3x"></i> Schedule Task</a>
                    </li>
                    
                     <li>
                        <a  href="requisations.html"><i class="fa fa-desktop fa-3x"></i> Requisations</a>
                    </li>
                    <li>
                        <a  href="form.html"><i class="fa fa-qrcode fa-3x"></i> Asset Procurement</a>
						            </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
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
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
  
/* display tasks */

echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="650">';
	
	
	
echo	'<tr>
         <td>
         <b><i>Task ID</i></b></td>
         <td><b><i>Task Name</i></b></td>
         <td><b><i>Task Details</i></b></td>
		 <td><b><i>Task Status</i></b></td>
		 <td><b><i>Date Of Execution</i></b></td>
         <td><b><i>Operations</i></b></td>';
	
	
echo	'</tr>';
	$row=mysql_query('select taskId,taskName,taskDetails,taskStatus,dateOfExecution from task',$conn);
	
	
	while($shwduty = mysql_fetch_array($row))
	   {
		
	echo ' 
	    <td>'.$shwduty["taskId"].'</td>
	  <td>'.$shwduty["taskName"].'</td>
	  <td>'.$shwduty["taskDetails"].'</td>
	  <td>'.$shwduty["taskStatus"].'</td>
	  <td>'.$shwduty["dateOfExecution"].'</td>
	  
	  </tr>';
	  }

	echo '</table>';
	
	echo '<hr />';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<a href="editDuty.php">Edit Duty</a>';
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
   






?>