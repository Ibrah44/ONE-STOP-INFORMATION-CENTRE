<?php 
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');

$id = $_GET['id'];

$row=mysql_query("SELECT * FROM task WHERE taskId = '$id'",$conn);
while($shwduty = mysql_fetch_array($row))
	   {
echo '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Task</title>
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
                <a class="navbar-brand" href="communityindex.php">WOSIC</a>
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
                        <a href="communityindex.php"> <img src="pics/home.png" width="50" height="50px"> Home</a>
                    </li>
                        <li>
                        <a href="finspection.php">  <img src="pics/inspection.jpg" width="50" height="50px"> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="viewduty.php"><img src="pics/duty.png" width="50" height="50px"> Duties</a>
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
                      <h2>Community Development Department</h2>
                        <h5>Enter edit details</h5>
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
                           Make changes using the form below
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!--figure in the class reduces/increase the actual form/inputs-->
                                <div class="col-md-9">
                                   
                                    <form action="" method="post">
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="TaskId" name="TaskId" value='.$shwduty["taskId"].'  hidden/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><label>Task Name</label></span>
                                            <input type="text" class="form-control" placeholder="Task Name" name="TaskName" value='.$shwduty["taskName"].'>
                                        </div>
                                     
                                          <div class="form-group input-group">
				<span class="input-group-addon">Task status</span> <select name="status" row="4"> <option value='.$shwduty["taskStatus"].'>-------select status-------</option> 
			    <option value="Accomplished">Accomplished</option> <option value="pending">Pending</option></select>
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><label>Date Of Execution</label></span>
                                            <input type="text" class="form-control"name="DateOfExecution" value='.$shwduty["dateOfExecution"].'>
                                        </div>
                                                <div>
                                                <input type="submit" name="edittask" value="Update" />
                                                  </div>
                                    </form>
                                 
                                </div>
                                
                                <div class="col-md-3">

';


	  if(isset($_POST['edittask']))
	  {
	  $idd = $_POST['TaskId'];
	  $taskName = $_POST['TaskName'];
	  $status = $_POST['status'];
	  $date = $_POST['DateOfExecution'];
	  
	  
	 // $gt1 ='UPDATE task set taskName=';
	  
 $gt= "update task set taskName ='$taskName', taskStatus ='$status', dateOfExecution='$date'  where taskId='$idd'";
	  
	$qw=mysql_query($gt,$conn);
	if(!isset($qw)){
	echo 'An Error has Occured';
		}
	else {
	echo 'Successfully Updated';
	header('location:viewtask.php');
	}
	  
	  }
	  



echo '
                                  

                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
					 			&nbsp;&nbsp;&nbsp;			
			<center><a href="viewtask.php" class="btn btn-primary">Back</a> </center> 
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
	  mysql_close($conn);
	  
	  
	  }
else
{
Header('location: ../index.php');
}
	  ?>
