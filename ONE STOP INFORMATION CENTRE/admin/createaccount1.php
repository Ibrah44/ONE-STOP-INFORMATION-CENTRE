<?php

session_start();
if(isset($_SESSION['login_user']))
{

echo'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
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
                <a class="navbar-brand" href="index.html">WISCO</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;

  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp; <a style="float: right" href="../index.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					<a class="" ><i class="fa  fa-3x"></i> MENU</a>
					</li>
                   
                     <li>
                        <a  href="admin.php"><i class="fa fa-desktop fa-3x"></i> Home</a>
                    </li>
                    <li>
                        <a  href="account.php"><i class="fa fa-qrcode fa-3x"></i> Manage Account</a>
                        </li>

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Wakiso Local Government</h2>
                        <h5>Welcome you are logged in as the administrator </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr /> <div class="container">
        
         <div class="row">
               
                <div class="col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-10 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Account credentials in the Form below </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="createaccount" method="post">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="First Name" name="FirstName" required/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Last Name" name="LastName" required/>
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Your Email" name="YourEmail" required/>
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <select placeholder="Status" class="form-control" name="status" required> 
                                            <option>Status</option>
                                            <option value="Head_Of_Department">Head Of Department</option> 
                                            <option value="Town_Clerk">Town Clerk</option> <option value="CAO">C.A.O</option></select>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <select placeholder="Region" class="form-control" name="region"> 
                                            <option>Region</option>
                                            <option value="Nansana">Nansana</option> 
                                            <option value="Kakiri">Kakiri</option> 
                                            <option value="Wakiso">Wakiso</option> 
                                            <option value="Kakiri">Kakiri</option></select>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" class="form-control" placeholder="User Name" name="UserName" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Password" name="Password" required/>
                                        </div>
                                     
                                     <input type="submit" name="Create Account" value="Create Account"/>
                                    <hr />
                                
                                    </form>
                                    
                                    &nbsp;&nbsp;&nbsp;			
			<center><a href="admin.php" class="btn btn-primary">Back</a> </center> 	
                            </div>
                           
                        </div>
                    </div>
                
                
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>';
}
else
{
Header('location: ../index.php');
}
?>
