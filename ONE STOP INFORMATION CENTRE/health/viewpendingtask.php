<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
 echo '<!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Pending Tasks</title>
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
                <a class="navbar-brand" href="healthindex.php">WOSIC</a>
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
                        <a class=""  href="healthindex.php"><img src="pics/home.png" width="50" height="50px"></i> Home</a>
                    </li>

                    <li>
                        <a href="finspection.php"> <img src="pics/inspection.jpg" width="50" height="50px"> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="viewduty.php"><img src="pics/duty.png" width="50" height="50px"> Duties</a>
                    </li>
                                       
                     <li>
                        <a  href="frequisation.php"><img src="pics/requestnew.png" width="50" height="50px"> Requisations</a>
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
                     <h2>Health Department</h2>
                        <h5>Welcome,';  echo' Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->';
				 
				 
				 			 echo '<table border="0" align="center" width="auto"> <tr> <td><a href="viewtask.php">view all available tasks</a> &nbsp;&nbsp;&nbsp;&nbsp;</td>  <td><a href="viewacomplishedtask.php">view accomplished tasks</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>   </tr> </table>';	
                  echo '<hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
										
						
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="80%">';
	
	
	
echo	'<tr>
          <td align="center">
         <b>Task ID</b></td>
         <td align="center"><b>Task Name</b></td>
         <td align="center"><b>Task Details</b></td>
		 <td align="center"><b>Task Status</b></td>
		 <td align="center"><b>Date Of Execution</b></td>
         <td align="center"><b>Operations</b></td>';
	
	
echo	'</tr>';

	$row=mysql_query('select taskId,taskName,taskDetails,taskStatus,dateOfExecution from task where taskStatus ="pending" AND taskScheduler="Head Of Health Department" order by taskId desc');
	
	
	while($shwduty = mysql_fetch_array($row))
	   {
		
	echo ' 
	  <td>'.$shwduty["taskId"].'</td>
	  <td>'.$shwduty["taskName"].'</td>
	  <td>'.$shwduty["taskDetails"].'</td>
	  <td>'.$shwduty["taskStatus"].'</td>
	  <td>'.$shwduty["dateOfExecution"].'</td>
	  <td><table align="center" cellspacing="4"><tr> <td>
	  <a  href="edittask.php?id='.$shwduty["taskId"].'">Edit
	  </a></td> 
	  <td>&nbsp;&nbsp;&nbsp;</td> 
	  <td> <a  href="delete.php?id='.$shwduty["taskId"].'" onClick="if(confirm(\'Are you sure you want to delete this record?\')) return true; else return false;">Delete</a></td> </tr>
	  </table></td>
	  </tr> ';
	   }
	 

	echo '</table>
			&nbsp;&nbsp;&nbsp;			
			<center><a href="viewtask.php" class="btn btn-primary">Back</a> </center> 			
						
					
						
						
                                                   
			    </div>
                 <!-- /. ROW  -->
                <hr />';
             
                    
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
  
			  
mysql_close($conn);

                         
}
else
{
Header('location: ../index.php');
}

?>
