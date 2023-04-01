 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body><title>View Duties</title>
</head>

<body>

<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
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
				 echo '<table border="0" align="center" width="auto"> <tr> <td><a href="viewpendingduty.php">view pending duties</a> &nbsp;&nbsp;&nbsp;&nbsp;</td>  <td><a href="viewacomplishedduty.php">view accomplished duties</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>  <td><a href="performanceanalysis.php">performance analysis</a>&nbsp;&nbsp;&nbsp;&nbsp;</td> <td><form method="POST" action="financesearchduty.php">
												   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
								                   <input type="text" placeholder="Search Duty" name="search">
												   <input type="submit" value="Search"/>
							                         
							
											       </form></td></tr> </table>';	
                echo'  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>';
					 					 
                    echo '<div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
									
						
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="auto">';
	
	
	
echo	'<tr>
          <td>
         <b>Duty ID</b></td>
         <td><b>Duty Name</b></td>
         <td><b>Duty Details</b></td>
		 <td><b>Duty Status</b></td>
		 <td><b>Deadline</b></td>
		 <td><b>Date Of Accomplishment</b></td>
		 <td><b>Operations</b></td>';
	
	
echo	'</tr>';
	$row=mysql_query("select dutyId,dutyName,dutyDetails,status,deadline,doneDate from duty where assignedTo='Head Of Finance Department' order by dutyId desc");
		
	while($shwduty = mysql_fetch_array($row))
	   {
		
	echo ' <tr>
	  <td>'.$shwduty["dutyId"].'</td>
	  <td>'.$shwduty["dutyName"].'</td>
	  <td>'.$shwduty["dutyDetails"].'</td>
	  <td>'.$shwduty["status"].'</td>
	  <td>'.$shwduty["deadline"].'</td>
	  <td>'.$shwduty["doneDate"].'</td>
	   <td><table align="center" cellspacing="4"><tr> <td>
	  <a  href="editduty.php?id='.$shwduty["dutyId"].'">Edit
	  </a></td> 
	  <td>&nbsp;&nbsp;&nbsp;</td> 
 </tr>
	  </table>';
	//<td> <a  href="deleteduty.php?id='.$shwduty["dutyId"].'" onClick="if(confirm(\'Are you sure you want to delete this record?\')) return true; else return false;">Delete</a></td> 
	 echo ' </tr> ';
 }
	echo '</table>&nbsp;&nbsp;&nbsp;&nbsp;		 		
	<center><a href="departmentindex.php" class="btn btn-primary">Back</a> </center>  			
						
					
						
						
                                                   
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
}?>
