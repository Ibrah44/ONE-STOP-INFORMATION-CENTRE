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
</head>
<body>

<?php 

session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
//getting earlier submitted data from the database
$id = $_GET['id'];
$updaterequest=mysql_query("select * from request where requestId='$id'");

while($getdatafromrequests=mysql_fetch_array($updaterequest))

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
                        <h5>Please Edit Requistion Status </h5>
                    </div>
					
					


                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                  
								   
                                    <form method="POST" action=""  enctype="multipart/form-data">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Request Id</span>
    <input type="text" class="form-control" placeholder="RequestId" value='.$getdatafromrequests["requestId"].' name="newrequest" readonly>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Item Name</span>
 <input type="text" class="form-control" placeholder="Item Name"  value='.$getdatafromrequests["itemName"].' name="newitem" readonly>
                                        </div>
										
										
										
										<div class="form-group input-group">
                                            <span class="input-group-addon">Quantity</span>
 <input type="text" class="form-control"   value='.$getdatafromrequests["quantity"].' name="newqty" readonly>
                                        </div>
										
										
										
										
										
                                        
                                        <div class="form-group input-group">
                     <span class="input-group-addon" >Requested On</span>
                 <input type="text" class="form-control" name="newdate" value='.$getdatafromrequests["requestDate"].'  readonly>
                                        </div>
										
										
                                        <div class="form-group input-group">
										<span class="input-group-addon">Submitted By</span>
                <input type="text" class="form-control" name="newrequestby" value='.$getdatafromrequests["requestedBy"].' readonly>
                                            
                                        </div>
										
										<div class="form-group input-group">
                                            <span class="input-group-addon">Status</span>
                                            <select name="newstatus">
											<option>-----Select Status Option-----</option>
											<option value='.$getdatafromrequests["itemName"].'>Pending</option>
											<option value="Rejected">Rejected</option>
											<option value="Accepted">Accepted</option>
											
											</select>
                                        </div>
										
										
										
										<div class="form-group input-group">
										<span class="input-group-addon">Attach</span>
                <input type="file" class="form-control"  name="requestdoc">
                                            
                                        </div>

										
										
										
										
										
										
										
										
										
                                        <input type="submit" value="Update"  class="btn btn-primary " name="editrequest">
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

//if needs adjustment
if(isset($_POST['editrequest']) )
{
	
	if(isset($_FILES['requestdoc']['name'])){
$reqid=$_POST['newrequest'];
$reqitem=$_POST['newitem'];
$reqqty=$_POST['newqty'];
$reqstatus=$_POST['newstatus'];
$reqby=$_POST['newdate'];

$reqdate=$_POST['newrequestby'];

//$reqdoc=$_POST['requestdoc'];







//document upload..not yet complete
global $docpath;

$allowedDocExtensions = array("docx", "pdf", "doc", "PDF");
$temp2 = explode(".", $_FILES['requestdoc']['name']);
$docExtension = strtolower(end($temp2));

if($_FILES['requestdoc']['error'] == 0 && in_array($docExtension, $allowedDocExtensions)){
move_uploaded_file($_FILES['requestdoc']['tmp_name'], "../requests/".$_FILES['requestdoc']['name']);
$docpath = "../requests/" . $_FILES['requestdoc']['name'];

echo "The path to the document in the local directory is: " . $docpath . "<br />";
print_r($_FILES['requestdoc']['name']);
}

else{
$docpath = "No document was  uploaded"; echo "<br />".$_FILES['requestdoc']['error'];
}


$updaterequestdata=mysql_query("update request set status='$reqstatus', downloadApproval='$docpath'  where requestId='$reqid' ");

//$updaterequestdata=mysql_query("update request set quantity='$reqqty',status='$reqstatus'  where requestId='$reqid' ");
//echo $reqstatus;

/*if(isset($updaterequestdata))
{
header ('location:caomanupulateRequistion.php');

}

else
{}

}



else
{
echo $_FILES['assetdoc']['name'];
} */

}
}
}







}
else
{
Header('location: ../index.php');
}


?>