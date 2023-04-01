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
                <a class="navbar-brand" href="kiraindex.php">WOSIC</a>
            </div>
  <div class="onestop" id="one"><font size="5" face="times new romans"> WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp;       
  
  <a style="float: right" href="../logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a href="kiraindex.php"> <img src="pics/home.png" width="50" height="50px"></i> Home</a>
                    </li>
                 
                     <li>
                        <a  href="kiragetduties.php"><img src="pics/duty.png" width="50" height="50px"></i> Duties</a>
                    </li>
                                       
                     <li>
                        <a  href="kiratownreq.php"><img src="pics/requestnew.png" width="50" height="50px"></i> Requisations</a>
                    </li>
                    <li>
                        <a  href="kiratownassets.php"><img src="pics/passet.png" width="50" height="50px"></i> Record Assets</a>
					</li>
						<li>
                        <a  href="kiratownpro.php"><img src="pics/project.jpg" width="50" height="50px"></i> Propose Project</a>
                    </li>	
					
					
					
					
					<li>
                        <a class=""  href="kiratownsch.php"><img src="pics/schedule.png" width="50" height="50px"></i> Schedule</a>
                    </li>					
                </ul>
            </div>
        </nav>   <!-- /. NAV SIDE  -->
      <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                      <h2>Kira Town Council</h2>
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Welcome Town Clerk, View Earlier Inspections!
                        </div><br/>
						<div id="no-print">
						 
						                           <form method="POST" action="kirasearchinspection.php">
												   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								                   <input type="text" placeholder="Search Inspected" name="search">
												   <input type="submit" value="Search"/>
												   
							                         
							
											       </form>
						
						
						</div>
						
						
						
						
						
						
						
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">';

?>


<?php
include ('connect.php');

echo '<table border="1" align="center" cellpadding="2" cellspacing="0" class="" width="950px">';
	
	
	
echo	'<tr>
          <td><b>Activity ID</b></td>
         <td><b>Inspection ID</b></td>
         <td><b>Activity Name</b></td>
		 <td><b>Inspection Date</b></td>
        ';




echo	'</tr>';
//where clause needed
	$getinspects=mysql_query("select * from inspect where doneBy like '%Kira%'  ",$conn);
	
	
	while($shwinp= mysql_fetch_array($getinspects))
	   {
	  // $pro=$shwprojects["document"];
		
	echo ' 
	  <td>'.$shwinp["activityId"].'</td>
	  <td>'.$shwinp["inspectionId"].'</td>
	  <td>'.$shwinp["activityName"].'</td>
	  
	  
	  <td>'.$shwinp["inspectionDate"].'</td>
      
      
	  
	  
	  
	  
	 
	   
	  
	  
	  
	  
	  
	  </tr>';
	  }

	echo '</table>';


// create a page called viewTownAssets and include in the code

/*
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" class="" width="950px">';
	
	
	
echo	'<tr>
          <td><b>Activity ID</b></td>
         <td><b>Inspection ID</b></td>
         <td><b>Activity Name</b></td>
		 <td><b>Inspection Date</b></td>
        ';
	
	
echo	'</tr>';
	$getinspect = mysql_query("select activityId,inspectionId,activityName,inspectionDate from inspect where doneBy='kira Town Clerk' order by inspectionDate  ",$conn) 
	or die("selection failed".mysql_error());
	
	
	while($shwinspect = mysql_fetch_array($getinspect))
	   {
		   echo 'meddie ';
	echo ' 
	  <td>'.$shwinspect["activityId"].'</td>
	  <td>'.$shwinspect["inspectionId"].'</td>
	  <td>'.$shwinspect["activityName"].'</td>
	  <td>'.$shwinspect["inspectionDate"].'</td>
	  
	  
	  </tr>';
	  }

	echo '</table>';
	*/
	echo '<center> <hr/></center>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<center>';
    echo '<a href="kiratownsuper.php "><input type="button" value="Previous Page" class="btn btn-primary " style="width:120px;"></a>';
	echo '&nbsp;&nbsp;&nbsp';        
   // echo '<a href="#" onClick="window.print();" return false; ><input type="button" value="Print Page" class="btn btn-primary " style="width:120px;"></a>';
		echo '</center>';
        
    ?>    
	
	<?php
	
	  echo '<center> <hr/></center>';
		echo '
        
                                <center>
                                  
                                  </center>
                                </div>
                                
                                
                                
                                   
                                   
                                   

                                  

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
    
    ';
	
		}
else
{
Header('location: ../index.php');
}

    ?>
    
   
</body>
</html>

