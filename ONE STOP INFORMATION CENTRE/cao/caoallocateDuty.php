<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAO</title>
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
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="caindex.php">WOSIC</a>
            </div>
  <div class="onestop" id="one"><img src="pics/wakisoemb.png" width="80" height="70px"><font size="5" face="times new romans"> WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp;       
  
  <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>    
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					 <img src="pics/service.png" width="200" height="50px">

	 <li>
                        <a class=""  href="caoindex.php"> <img src="pics/home.png" width="50" height="50px"> Home</font></a>
                    </li>
                   

                     <li>
                        <a  href="caomanupulateRequistion.php"><img src="pics/viewrequests.png" width="50" height="50px"></i> Requistions</a>
                    </li>
                    
                    <li>
                        <a  href="caoviewDistrictAssets.php"><img src="pics/districtassets.png" width="50" height="50px"></i>District Assets</a>
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
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Assign Duties  
                        
                           
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <a href="caoviewduties.php">View Assigned Duties</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                   
                                    <form role="form" method="post" action="caosubmitduty.php">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>';
											
					
$row=mysqli_query($conn,'SELECT dutyId from duty  order by dutyId desc LIMIT 1');
	
	
	while($shwduty = mysqli_fetch_array($row))
	   {
				$id = $shwduty["dutyId"];	
				$ans = 	++$id;				
				



					
											
											
            echo '          <input type="text" class="form-control" placeholder="Duty Id" name=" dutyId" value="'.$ans.'" readonly />
                                        </div>';
										
				}						
										echo '
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                               <input type="text" class="form-control" placeholder="Duty Name" name="dutyName" required/>
                                        </div>
                                     
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <textarea rows="8" class="form-control" placeholder="Duty Details" name="dutyDetails" required></textarea>
                                            
                                            </div>
                                        
                                        <div class="form-group input-group">
                                            <input type="date" class="form-control" name="date"> 
                                            <span class="input-group-addon">Date Of Assignment</span>
                                        </div>
                                        
                                        <div class="form-group input-group">
                                        <span class="input-group-addon">Dead Line</span>
                                            <input type="date" class="form-control" name="deaddate"> 
                                            
                                        </div>
                                        
                                        
                                           <div class="form-group input-group">
                                               <span class="input-group-addon">Assigned To</span>&nbsp;       <select name="assignedTo">
                                                      
                                            <option>-------Select Office------</option>
                                            <option value="Nansana Town Clerk">Nansana Town Clerk</option>
                                            <option value="Kira Town Council">Kira Town Clerk</option>
                                            <option value="Head Of Finance Department">Head Of Finance Department</option>
                                            <option value="Head Of Education Department">Head Of Education Department</option>
                                            <option value="Head Of Community Department">Head Of Community Department</option>
                                            <option value="Head Of Health Department">Head Of Health Department</option>
                                            </select>
                                            
                                        </div>
                                               
                                                                   
                                         
                                        
                                        
                                        <div>
                                         <input type="submit" value="Assign Duty" class="btn btn-primary" style="width:115px;">   &nbsp;&nbsp;&nbsp;
                                         
                                         <input type="reset" value="Refresh" class="btn btn-primary" style="width:115px;">   
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         
                                         
                                                 
                                          <a href="caogetsuper.php " class="btn btn-primary " style="width:115px;">Supervisions</a>
                                          
                                          </div>
                                    </form>
                                 
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
    <script src="assets/js/custom.js"></script>';
	
	
	
	
	
	
	
	

}
else
{
Header('location: ../index.php');
}


	?>
   
   
</body>
</html>
