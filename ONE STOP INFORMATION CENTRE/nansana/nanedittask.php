
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit View Task</title>
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
//getting earlier submitted data from the database
$id = $_GET['id'];
$updatetask=mysqli_query($conn,"select * from task where taskId='$id'");

while($getdatafromtask=mysqli_fetch_array($updatetask))

{


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
                        <a href="nantownsupervise.php"> <img src="pics/inspection.jpg" width="50" height="50px"></i> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="nangetduties.php"><img src="pics/duty.png" width="50" height="50px"></i> Duties</a>
                    </li>
                                       
                     <li>
                        <a  href="nantownRequest.php"><img src="pics/requestnew.png" width="50" height="50px"></i> Requisations</a>
                    </li>
                    <li>
                        <a  href="nantownAsset.php"><img src="pics/passet.png" width="50" height="50px"></i> Record Assets</a>
					</li>
						<li>
                        <a  href="nantownpro.php"><img src="pics/project.jpg" width="50" height="50px"></i> Propose Project</a>
                    </li>	
					
					
					
					
									
                </ul>
            </div>
        </nav> <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Nansana Town Council</h2>
                        <h5>Welcome Town Clerk ,Edit Tasks </h5>
                    </div>
					
					
					
					<!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                   <h3>Edit Task</h3>
								   <form method="POST" action="">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Task Id</span>
    <input type="text" class="form-control"  value='.$getdatafromtask["taskId"].' name="newtaskId">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Task Name</span>
 <input type="text" class="form-control"   value='.$getdatafromtask["taskName"].' name="newtaskname">
                                        </div>
										
										
										
                                        <div class="form-group input-group">
										<span class="input-group-addon">Task Details</span>
                <input type="text" width="50px" class="form-control" name="newrequestby" value='.$getdatafromtask["taskDetails"].'>
                                            
                                        </div>
										
										
 										
										<div class="form-group input-group">
                                            <span class="input-group-addon">Date Of Execution</span>
 <input type="text" class="form-control"   value='.$getdatafromtask["dateOfExecution"].' name="newtaskdate">
                                        </div>
										
										
										
										
										
                                        
                                       
										
										
										
										<div class="form-group input-group">
                                            <span class="input-group-addon">Current Status</span>
                                            <select name="newtaskstatus">
											<option value='.$getdatafromtask["taskStatus"].'>Pending</option>
											
											<option value="Accepted">Accomplished</option>
											
											</select>
                                        </div>
										
										
										
										

										
										
										
										
										
										
										
										
										
                                        <input type="submit" value="Edit Task"  class="btn btn-primary " name="editrequest">
                                    </form>
                                 
                                 
                  
                                
                                <div class="col-md-3">

                                   

                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
 


</html>';


if(isset($_POST['edittask']))
{
$tid=$_POST['newtaskId'];
$tname=$_POST['newtaskname'];
$tdetails=$_POST['newtaskdetails'];
$tdate=$_POST['newtaskdate'];
$tstatus=$_POST['newtaskstatus'];
echo $_POST['newtaskstatus'].'ainnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnneeeeeeeee';


$updatetaskdata=mysqli_query($conn,"update task set taskStatus='$tstatus' where taskId='$tid' ");

//$updaterequestdata=mysql_query("update request set quantity='$reqqty',status='$reqstatus'  where requestId='$reqid' ");
//echo $reqstatus;
if(!$updatetaskdata)
{
echo "Error has occured".mysqli_error();
}



//echo "Error has occured".mysql_error();
//header("location:caomanupulateRequistion.php");



}

}

}
else
{
Header('location: ../index.php');
}
?>