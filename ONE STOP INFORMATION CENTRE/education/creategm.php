<?php 

include('connection.php');
session_start();
if(isset($_SESSION['login_user']))
{

$id = $_GET['id'];
echo '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Performance Analysis</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="educationindex.php">WOSIC</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTER </font>&nbsp; <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					    <a class="" ><i class="fa  fa-3x"></i> <img src="pics/service.png" width="200" height="50px"></a>
					    </li>
                          <li>
                        <a href="educationindex.php"> <img src="pics/home.png" width="50" height="50px"> Home</a>
                    </li>
                        <li>
                        <a href="finspection.php">  <img src="pics/inspection.jpg" width="50" height="50px"> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="viewduty.php"><img src="pics/schedul.png" width="50" height="50px"> Schedule Tasks</a>
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
                <!--extend wakiso inside or outside, the one below-->
                    <div class="col-md-12">
                      <h2>Wakiso Local Government</h2>
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
               <!--12 increases the size of the form area-->
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Graph showing accomplished and pending duties
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!--figure in the class reduces/increase the actual form/inputs-->
                                <div class="col-md-9">';
               
			  
			   
			   if($id=='2015janEducation'){                    
           echo '<img src="graphmonth.php">';
                }
				
				else if ($id=='2015febEducation'){                    
           echo '<img src="graphmonth2.php">';
                }
				
				
				else if ($id=='2015marchEducation'){                    
           echo '<img src="graphmonth3.php">';
                }
				
		       else if($id=='2015aprilEducation'){                    
           echo '<img src="graphmonth4.php">';
                }
				
				else if ($id=='2015mayEducation'){                    
           echo '<img src="graphmonth5.php">';
                }
				
				
				else if($id=='2015junEducation'){                    
           echo '<img src="graphmonth6.php">';
                }
				
				else if ($id=='2015julyEducation'){                    
           echo '<img src="graphmonth7.php">';
                }
				
				
				else if ($id=='2015augEducation'){                    
           echo '<img src="graphmonth8.php">';
		            }
          				
				else if ($id=='2015septEducation'){                    
           echo '<img src="graphmonth9.php">';
                }
				
				
				else if ($id=='2015octEducation'){                    
           echo '<img src="graphmonth10.php">';
                }
				
				else if ($id=='2015novEducation'){                    
           echo '<img src="graphmonth11.php">';
                }		
           
		   else if ($id=='2015decEducation'){                    
           echo '<img src="graphmonth12.php">';
                }
				
		  
			  else if($id=='2014janEducation'){                    
           echo '<img src="graphmonthb.php">';
                }
				
				else if ($id=='2014febEducation'){                    
           echo '<img src="graphmonthb2.php">';
                }
				
				
				else if ($id=='2014marchEducation'){                    
           echo '<img src="graphmonthb3.php">';
                }
				
		       else if($id=='2014aprilEducation'){                    
           echo '<img src="graphmonthb4.php">';
                }
				
				else if ($id=='2014mayEducation'){                    
           echo '<img src="graphmonthb5.php">';
                }
				
				
				else if($id=='2014junEducation'){                    
           echo '<img src="graphmonthb6.php">';
                }
				
				else if ($id=='2014julyEducation'){                    
           echo '<img src="graphmonthb7.php">';
                }
				
				
				else if ($id=='2014augEducation'){                    
           echo '<img src="graphmonthb3.php">';
                }
				
				else if ($id=='2014septEducation'){                    
           echo '<img src="graphmonthb9.php">';
                }
				
				
				else if ($id=='2014octEducation'){                    
           echo '<img src="graphmonthb10.php">';
                }
				
				else if ($id=='2014novEducation'){                    
           echo '<img src="graphmonthb11.php">';
                }		
           
		   else if ($id=='2014decEducation'){                    
           echo '<img src="graphmonthb12.php">';
                }



			  else if($id=='2013janEducation'){                    
           echo '<img src="graphmonthc.php">';
                }
				
				else if ($id=='2013febEducation'){                    
           echo '<img src="graphmonthc2.php">';
                }
				
				
				else if ($id=='2013marchEducation'){                    
           echo '<img src="graphmonthc3.php">';
                }
				
		       else if($id=='2013aprilEducation'){                    
           echo '<img src="graphmonthc4.php">';
                }
				
				else if ($id=='2013mayEducation'){                    
           echo '<img src="graphmonthc5.php">';
                }
				
				
				else if($id=='2013junEducation'){                    
           echo '<img src="graphmonthc6.php">';
                }
				
				else if ($id=='2013julyEducation'){                    
           echo '<img src="graphmonthc7.php">';
                }
				
				
				else if ($id=='2013augEducation'){                    
           echo '<img src="graphmonthc3.php">';
                }
		
				
				else if ($id=='2013septEducation'){                    
           echo '<img src="graphmonthc9.php">';
                }
				
				
				else if ($id=='2013octEducation'){                    
           echo '<img src="graphmonthc10.php">';
                }
				
				else if ($id=='2013novEducation'){                    
           echo '<img src="graphmonthc11.php">';
                }		
           
		   else if ($id=='2013decEducation'){                    
           echo '<img src="graphmonthc12.php">';
                }
		

echo '
                      	<br/>	<br/>	 		
	<center><a href="performanceanalysis.php" class="btn btn-primary">Back</a> </center>              

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
        </div>
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
