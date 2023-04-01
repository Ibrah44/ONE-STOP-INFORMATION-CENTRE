<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monthly Procured Assets</title>
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
                <a class="navbar-brand" href="communityindex.php">WOSIC</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;">  <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp; <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse ">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					 <a class="" ><img src="pics/service.png" width="200" height="50px"></a>
					    </li>
                          <li>
                        <a href="communityindex.php"> <img src="pics/home.png" width="50" height="50px"></i>Home</a>
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
                        <a  href="stask.php"><img src="pics/schedul.png" width="50" height="50px">Schedule Task</a>
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
                        <h5>View records of the assets procured </h5>
                    </div>
					
					
					
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
  
/* display assets of the town council*/

include ('connection.php');

$date = date('d-m-y');
$de =  (date('m')-1);
$di =  (date('y')-1);
$da =  (date('d')-10);
$se = date('Y');
$d =  (date('m'));

$si = $se.'-'.'0'.$de;

// create a page called viewTownAssets and include in the code
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">';
	
	
	
echo	'<tr>
          <td><b>Asset ID</b></td>
         <td><b>Asset Name</b></td>
         <td><b>Quantity</b></td>
		 <td><b>Purpose</b></td>
         <td><b>Purchase Date</b></td>
		 <td><b>Amount Spent</b></td>';
	
	
echo	'</tr>';
	$getasset=mysql_query("select * from asset WHERE purchaseDate like '%$si%' AND purchasedBy='Head Of Community Development Department' order by assetId desc",$conn);
	
	
	while($shwasset = mysql_fetch_array($getasset))
	   {
		
	echo ' 
	  <td>'.$shwasset["assetId"].'</td>
	  <td>'.$shwasset["assetName"].'</td>
	  <td>'.$shwasset["quantity"].'</td>
	  <td>'.$shwasset["purpose"].'</td>
	  <td>'.$shwasset["purchaseDate"].'</td>
	  <td>'.$shwasset["Amount"].'</td>
	  
	  </tr>';
	  }

	echo '</table>';
	
	echo '<hr />';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<center>';
    echo '<a href="viewdepartmentasset.php "><input type="button" value="Back" class="btn btn-primary "></a>';
	echo '&nbsp;&nbsp;&nbsp';     
	 echo '<a href="printassetm.php"><input type="button" value="Print" class="btn btn-primary "></a>';   
   // echo '<a href="#" onClick="window.print();" return false; ><input type="button" value="Print" class="btn btn-primary "></a>';
		echo '<center/>';
	
	
	
	
	
/* end display of duties from the cao*/		
 echo ' </div>
                 <!-- /. ROW  -->
                
             </div>
         </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->';
     

echo '
 <div id="footer" style="background-color: #4D4D4D;">
      <div class="container">
        <p class="text-muted credit" style="text-align: center">@ copyright property of wakiso district</p>
      </div>
    </div>';
   

}
else
{
Header('location: ../index.php');
}




?>