

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
                <a class="navbar-brand" href="caoindex."php>Logo Image</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;">  WAKISO ONE STOP INFORMATION CENTRE &nbsp; <a style="float: right" href="../index.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a class="caoindex.php"  href="index.php">Home</a>
                    </li>
                     <li>
                        <a  href="caomanupulateRequistion.php"><i class="fa fa-dashboard fa-3x"></i> Requisations</a>
                    </li>
                    
                    <li>
                        <a  href="caoviewDistrictAssets.php"><i class="fa fa-grcode fa-3x"></i>District Assets</a>
                    </li>
                    
					<li>
                        <a class=""  href="caomanipulateProject.php "><i class="fa fa-dashboard fa-3x"></i> Submitted Projects</a>
                    </li>
                    
                    
          
                   
						
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2> Chief Administrative Officer</h2>                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                   
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
						Assign Duties
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
					
					 <form role="form" method="post" action="">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                      <input type="text" class="form-control" placeholder="Duty Id" name="dutyId" required />
                                        </div>
										
										  <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                               <input type="text" class="form-control" placeholder="Duty Name" name="dutyName" required/>
                                        </div>
										
										
                                      
										
										
										
										 <div>
                                         <input type="submit" value="Submit Duty" class="btn btn-primary ">   &nbsp;&nbsp;&nbsp;
                                         
                                         <input type="reset" value="Refresh" class="btn btn-primary ">   &nbsp;&nbsp;&nbsp;
                                         
                                         
                                                 
                                          <a href=" " class="btn btn-primary ">Back</a>
                                          
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
                    </div>
                     <!-- End Form Elements -->
			    </div>
                 <!-- /. ROW  -->
                <hr />
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
</html>
';



}
else
{
Header('location: ../index.php');
}


?>