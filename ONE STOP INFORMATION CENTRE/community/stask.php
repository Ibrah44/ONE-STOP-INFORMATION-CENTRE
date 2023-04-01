
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
    <title>Shedule Task</title>
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
                <a class="navbar-brand" href="communityindex.php">WISCO</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"><font size="5" face="times new romans"> WAKISO ONE STOP INFORMATION CENTER</font> &nbsp; <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a class=""  href="communityindex.php"><img src="pics/home.png" width="50" height="50px"> Home</a>
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
                        <a  href="fasset.php"><img src="pics/asset.png" width="50" height="50px"> Assets Procured</a>
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
                      <h2>Community Development Department</h2>
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
                                                                     <form role="form" action="scheduletask.php" method="post">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>';
											
											
											//SELECT LAST(taskId) FROM task where taskScheduler="Head Of Community Development Department" order by taskId desc
											//SELECT taskId FROM task ORDER BY O_Id DESC LIMIT 1
											
	$row=mysql_query('SELECT taskId FROM task where taskScheduler="Head Of Community Development Department" order by taskId desc LIMIT 1',$conn);
	
	
	while($shwduty = mysql_fetch_array($row))
	   {
				$id = $shwduty["taskId"];	
				$ans = 	++$id;				
											
                              echo '<input type="text" class="form-control" placeholder="'.$ans.'" name="TaskId" required />
                                 </div>';
										
					}
                                       echo ' <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Task Name" name="TaskName" value="'.$ans.'" readonly />
                                        </div>
                                     
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Department Id" name="DepartmentId" required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                         <input type="text" class="form-control" placeholder="Head Of Community Development Department" name="TaskSchuler"  value="Head Of Community Development Department" readonly/>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="date" class="form-control" name="DateOfExecution"> <!-- date(d/m/y) -->
                                            <span class="input-group-addon">Date Of Execution</span>
                                        </div>
                                           <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <textarea rows="8" class="form-control" placeholder="Task Description" name="TaskDescription" required></textarea>
                                        </div>
                                        
                                         <input type="submit" value="Schedule Tasks" class="btn btn-primary"/> &nbsp;&nbsp;&nbsp;        
                                        <input class="btn btn-primary" type="reset" value="Refresh"></a> &nbsp;&nbsp;&nbsp;
                                        
                                        <a href="viewtask.php" class="btn btn-primary ">View Task</a>
                                    </form>
                                 
                                </div>
                                
                                <div class="col-md-3">

                                   <h3>Wakiso District </h3>
                                   <h5>P.O.Box 7218</h5>
                                   <h5>Kampala</h5>
                                   <h5>Uganda</h5>
                                  <h5>Phone: +256 752 696230</h5>
                                  <h5> Email: info@wakiso.go.ug</h5>


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

}
else
{
Header('location: ../index.php');
}
?>