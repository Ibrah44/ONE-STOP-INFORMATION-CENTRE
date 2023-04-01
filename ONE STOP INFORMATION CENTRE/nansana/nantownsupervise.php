
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supervision</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans' rel="stylesheet" type="text/css" />
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
					
					
					
					
					<li>
                        <a class=""  href="nantownSchedule.php"><img src="pics/schedule.png" width="50" height="50px"></i> Schedule</a>
                    </li>					
                </ul>
            </div>
        </nav>   <!-- /. NAV SIDE  -->
      <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                      <h2>Nansana Town Council</h2>
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Welcome Town Clerk, Please Fill the Inspection Form!
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                  
                                    <form role="form" action="nansubmitsupervise.php" method="POST" enctype="multipart/form-data">
									
									<div class="form-group input-group">
                                            <span class="input-group-addon"></span>';
					
									
									
									
                                        
		$row=mysqli_query($conn,'SELECT activityId from inspect where doneBy="Nansana Town Clerk" order by activityId desc LIMIT 1');
	
	
	while($shwduty = mysqli_fetch_array($row))
	   {
				$id = $shwduty["activityId"];	
				$ans = 	++$id;	
				
				
									
				

				
											
                                 echo ' 
								 
								 <input type="text" class="form-control"  name="activityId"  value="'.$ans.'" readonly/>
                                        </div>';
								
									}
										
                                 echo '       <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                        <input type="text" class="form-control"  name="inspectionId"   placeholder="InspectionId" />
                                        </div>';
										
										
                                     
                                         echo ' <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                              <input type="text" class="form-control" placeholder="Activity Name" name="actName" required/>
                                        </div>
                                        <div class="form-group input-group">
                                           
                                            <input type="date" class="form-control" placeholder="dd-mm-yy" name="insdate" required/>
                                             <span class="input-group-addon" value="">Date of Inspection</span>
                                        </div>
                                       
                                           <div class="form-group input-group">
                                            <span class="input-group-addon">Attach Proof Of Inspection</span>
                     <input type="file" class="form-control" placeholder="Proof of Inspection" name="inspectionProof" >
                     </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon">Done By:</span>
                                <input type="text" class="form-control" value="Nansana Town Clerk" name="insby" readonly >
                                            
                                            
                                            
                                            
                                        </div>
                                            
                                    
                                        <input type="Submit" value="Submit" class="btn btn-primary "></a> &nbsp;&nbsp;&nbsp;        
                                        <input class="btn btn-primary " type="reset" value="Refresh"></a> &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 
                                        
                                        <a href="nanviewInspection.php " class="btn btn-primary " style="width:135px">Inspection Archive</a>
                                       
                                    </form>
                                    <hr/>
                                <center>
                                  
                                  </center>
                                </div>';
                                
                                
                                
                                   
                                   
                                   

                   echo '               

                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>';
		
		echo '
     <div id="footer" style="background-color: #4D4D4D;">
      <div class="container">
        <p class="text-muted credit" style="text-align: center">@ copyright property of wakiso district</p>
      </div>
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>';
	
	
}
else
{
Header('location: ../index.php');
}
	?>
    
    
   
</body>
</html>
