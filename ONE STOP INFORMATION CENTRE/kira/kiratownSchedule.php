<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="file:///J|/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="file:///J|/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="file:///J|/assets/css/custom.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="kiraindex.php">Logo Image</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> WAKISO ONE STOP INFORMATION CENTRE &nbsp; <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					    <a class="" ><i class="fa  fa-3x"></i>SERVICES</a>
					    </li>
                        <li>
                        <a class=""  href="kiraindex.php"><i class=""></i><font color="blue"> Home</a>
                    </li>

                    <li>
                        <a href="kiratownsuper.php"> <i class="fa fa-dashboard fa-3x"></i> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="kiragetduties.php"><i class="fa fa-desktop fa-3x"></i> Duties</a>                    
                         
                    </li>
                                     
              <li>
                        <a  href="kiratownreq.php"><i class="fa fa-desktop fa-3x"></i> Requisations</a>
                  </li>
                    <li>
                        <a  href="kiratownassets.php"><i class="fa fa-qrcode fa-3x"></i> Assets Procured</a>
                </ul>
                
                <li>
                        <a  href="kiratownsch.php"><i class="fa fa-qrcode fa-3x"></i> View Schedule</a>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2>Kira Town Council</h2>
                        <h5>Please enter the details of the task you want to schedule in the form below</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                   <h3>Form</h3>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Supervision ID" name="TaskId" required />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Activity ID" name="TaskName" required/>
                                        </div>
                                     
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Activity Name" name="DepartmentId" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="date"  class="form-control" placeholder="Date of Inspection" name="TaskSchuler" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="date" class="form-control"> <!-- date(d/m/y) -->
                                            <span class="input-group-addon">Date Of Execution</span>
                                        </div>
                                           <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <textarea rows="8" class="form-control" placeholder="Task Description" name="TaskDescription" required></textarea>
                                        </div>
                                         <a href="kirascheduletask.php" class="btn btn-primary ">Schedule Tasks</a> &nbsp;&nbsp;&nbsp;        
                                          <a href="kiraviewtask.php" class="btn btn-primary ">View Task</a>
                                    </form>
                                 
                                </div>
                                
                                <div class="col-md-3">

                                  

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
