

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requisations</title>
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
   <style>
   #bg{
	   background:#FFF;
	   
	      }
   #size{
	   width:150px;
	   padding-right:90px;
	 
	   
	   
   }
   </style>
</head>
<body onLoad="window.alert('You are going to update a project status');">

<?php 
session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
//getting earlier submitted data from the database
$id = $_GET['id'];
$updateproject=mysqli_query($conn,"select * from project where projectId='$id'");

while($getdatafromproject=mysqli_fetch_array($updateproject))

{


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
               <a class="navbar-brand" href="caoindex.php">WOSIC</a>
            </div>
  <div class="onestop" id="one"><img src="pics/wakisoemb.png" width="80" height="70px"><font size="5" face="times new romans"> WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp;       
  
  <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>    
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse ">
               <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					 <img src="pics/service.png" width="200" height="50px">

	 <li>
                        <a class=""  href="caoindex.php"> <img src="pics/home.png" width="50" height="50px"> Home</font></a>
                    </li>
                   

                    <li>
                        <a   href="caoallocateDuty.php"><img src="pics/assignduty.jpg" width="50" height="50px"></i>Assign Duties</a>
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
                        <h5>Please Edit Project Status </h5>
                    </div>
					
					


                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                  
								   
                                    <form method="POST" action="">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon" >Project Id</span>
    <input type="text" class="form-control" placeholder="RequestId" value='.$getdatafromproject["projectId"].' name="newid" readonly >
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Project Name</span>
 <input type="text" class="form-control" placeholder="Item Name"  value='.$getdatafromproject["projectName"].' name="newname" readonly>
                                        </div>
										
										
										
										<div class="form-group input-group">
                                            <span class="input-group-addon">Project Details</span>
 <input type="text" class="form-control"   value='.$getdatafromproject["projectDetails"].' name="newd" readonly>
                                        </div>
										
										
										
										
										
                                        
                                        <div class="form-group input-group">
                     <span class="input-group-addon" >Submitted By</span>
                 <input type="text" class="form-control" name="newsub" value='.$getdatafromproject["submitedBy"].' readonly >
                                        </div>
										
										
                                        <div class="form-group input-group">
										<span class="input-group-addon" >Submitted On</span>
                <input type="text" class="form-control" name="newdate" value='.$getdatafromproject["dateOfSubmission"].' readonly >
                                            
                                        </div>
										
										<div class="form-group input-group">
                                            <span class="input-group-addon"  id="size">Status</span>
                                            <select name="newstatus" style="width:300px;height:30px;">
											<option>-----Select Status Option-----</option>
											<option value='.$getdatafromproject["status"].'>Pending</option>
											<option value="Rejected">Rejected</option>
											<option value="Accepted">Accepted</option>
											
											</select>
                                        </div>
										
										
										
										<!--<div class="form-group input-group">
										<span class="input-group-addon">Attach</span>
                <input type="file" class="form-control"  name="requestdoc">
                                            
                                        </div>-->

										
										
										
										
										
										
										
										
									
                                        <input type="submit" value="Update"  class="btn btn-primary " name="editrequest" style="width:120px;"
										
			>
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
    
   
</body>
</html>';


if(isset($_POST['editrequest']))
{
$proid=$_POST['newid'];
$proname=$_POST['newname'];
$prod=$_POST['newd'];
$prosub=$_POST['newsub'];
$prodate=$_POST['newdate'];

$prosta=$_POST['newstatus'];

//$reqdoc=$_POST['requestdoc'];

$updaterequestdata=mysqli_query($conn,"update project set status='$prosta' where projectId='$proid' ");

//$updaterequestdata=mysql_query("update request set quantity='$reqqty',status='$reqstatus'  where requestId='$reqid' ");
//echo $reqstatus;
if(!$updaterequestdata)
{
echo "Error has occured".mysqli_error();
}



else{
//header('location:caomanipulateProject.php');
}


}

}





}
else
{
Header('location: ../index.php');
}


?>