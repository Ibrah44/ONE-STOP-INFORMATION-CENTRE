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
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body >
<!--onLoad="window.alert(' ');"-->

<?php 

session_start();
if(isset($_SESSION['login_user']))
{
include('connect.php');
//getting earlier submitted data from the database
$id = $_GET['id'];
$accdate1=	date('Y-M-d');
$updateduty=mysql_query("select * from duty where dutyId='$id'");
//(dutyId,dutyName,dateOfAssignment,status)

while($getdataduty=mysql_fetch_array($updateduty))

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
                <a class="navbar-brand" href="kiraindex.php">WOSIC</a>
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
					<a class=""></i> <img src="pics/service.png" width="200" height="50px"></a>

					</li>
					
					
                    <li>
                        <a href="kiraindex.php"> <img src="pics/home.png" width="50" height="50px"></i> Home</a>
                    </li>
                     

                    <li>
                        <a href="kiratownsuper.php"> <img src="pics/inspection.jpg" width="50" height="50px"></i> Inspect Activities</a>
                    </li>
                    
                                       
                    <!-- <li>
                        <a  href="kiratownreq.php"><img src="pics/requestnew.png" width="50" height="50px"></i> Requisations</a>
                    </li>-->
                    <li>
                        <a  href="kiratownassets.php"><img src="pics/passet.png" width="50" height="50px"></i> Record Assets</a>
					</li>
						<li>
                        <a  href="kiratownpro.php"><img src="pics/project.jpg" width="50" height="50px"></i> Propose Project</a>
                    </li>	
					
					
					
					
					<li>
                        <a class=""  href="kiratownsch.php"><img src="pics/schedule.png" width="50" height="50px"></i> Shedule</a>
                    </li>					
                </ul>
            </div>
        </nav>   <!-- /. NAV SIDE  -->
 
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>kira Town Clerk</h2>
                        <h5>Please Edit Duty Status </h5>
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
                                            <span class="input-group-addon">Duty Id</span>
    <input type="text" class="form-control"  value='.$getdataduty["dutyId"].' name="newid">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Duty Name</span>
 <input type="text" class="form-control"   value='.$getdataduty["dutyName"].' name="newname">
                                        </div>
																			
									
										<div class="form-group input-group">
                                            <span class="input-group-addon">Accomplished On</span>
 <input type="text" class="form-control"   value='.$accdate1.' name="newd">
                                        </div>
	
										
										
										<div class="form-group input-group">
                                            <span class="input-group-addon">Status</span>
                                            <select name="newstatus">
											<option>-----Select Status Option-----</option>
											<option value=>'.$getdataduty["status"].'</option>
											<option value="Accomplished">Accomplished</option>
										
											
											</select>
                                        </div>
										
										
										
										<!--<div class="form-group input-group">
										<span class="input-group-addon">Attach</span>
                <input type="file" class="form-control"  name="requestdoc">
                                            
                                        </div>-->

										
										
										
										
										
										
										
										
									
                                        <input type="submit" value="Update"  class="btn btn-primary " name="editduty"
										
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


if(isset($_POST['editduty']))
{
	
//$accdate=	date('Y-M-d');	
$duid=$_POST['newid'];
$duname=$_POST['newname'];
//$donedate=$_POST['newd'];
$datee = date('Y-M-d');
//$duacc=$_POST['newsub'];

$dstatus=$_POST['newstatus'];

//$reqdoc=$_POST['requestdoc'];

echo $datee.'  ';
echo $dstatus;

$updaterequestdata=mysql_query("update duty set status='$dstatus', doneDate='$datee' where dutyId='$duid' ") or die(mysql_error()."ERRRRRRRRRRRRRRRRRRRRRRRRRR");
//$updaterequestdata1=mysql_query("update duty set doneDate='$donedate' where dutyId='$duid' " or die(mysql_error()."TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT"));

if(!$updaterequestdata)
{
echo "Error has occured".mysql_error();
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