<?php 

session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');

$id = $_GET['id'];

$row=mysql_query("select*from duty where dutyId='$id'",$conn);
while($shwduty = mysql_fetch_array($row))
	   {
echo '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Duty</title>
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
                <a class="navbar-brand" href="departmentindex.php">WOSIC</a>
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
                        <a href="departmentindex.php"> <img src="pics/home.png" width="50" height="50px"> Home</a>
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
                      <h2>Finance Department</h2>
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
                    <span class="input-group-addon">Duty Id</span>
                   <input type="text" class="form-control" placeholder="dutyId" name="dutyId" value='.$shwduty["dutyId"].' />
                </div>
                                        
                <div class="form-group input-group">
                   <span class="input-group-addon">Duty Name</span>
                  <input type="text" class="form-control" placeholder="Duty Name" name="dutyName" value='.$shwduty["dutyName"].' />
               </div>
                                     
               <div class="form-group input-group">
                <span class="input-group-addon">Duty status</span> <select name="status" row="4"> <option value='.$shwduty["status"].'>-------select status-------</option> 
			    <option value="Accomplished">Accomplished</option> <option value="pending">Pending</option></select>                 
             </div>
                                        
               <div class="form-group input-group">
              <input type="date" class="form-control" name="Donedate" value='.$shwduty["doneDate"].'> 
                 <span class="input-group-addon">Donedate</span>
               </div>  
                                                <div>
                                                <input type="submit" name="editduty" value="Update" />
                                                  </div>
                                    </form>
                                 
                                </div>
                                
                                <div class="col-md-3">

';


	  if(isset($_POST['editduty']))
	  {
	  $id = $_POST['dutyId'];
	  $dutyName = $_POST['dutyName'];
	  $status = $_POST['status'];
	  $date = $_POST['Donedate'];
	  $gt= "update duty set status='$status', doneDate='$date'  where dutyId='$id' && dutyName= '$dutyName'";
	  
	$qw=mysql_query($gt,$conn);
	if(!isset($qw)){
	echo 'An Error has Occured';
		}
	else {
	echo 'Successfully Updated';
	header('location:viewduty.php');
	      }
	  
	  }
	  



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
