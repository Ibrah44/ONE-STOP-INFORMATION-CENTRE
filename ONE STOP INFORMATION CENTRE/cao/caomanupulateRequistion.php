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
                        <h5>Please Confirm/Reject Requistions </h5>
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
  
/* display and manupulate requests*/


// create a page called viewTownAssets and include in the code
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">';
	
	
	
echo	'<tr>
          <td><b>Request ID</b></td>
         <td><b>Item Name</b></td>
		 
         <td><b>Quantity</b></td>
		 <td><b>Request Date</b></td>
         <td><b>Purpose</b></td>
		 <td><b>Requested By</b></td>
		 
		 <td><b>Operations</b></td>';
	
	
echo	'</tr>';
	$getrequests=mysqli_query($conn,'select * from request order by requestDate desc');
	
	
	while($shwrequests = mysqli_fetch_array($getrequests))
	   {
		
	echo ' 
	<tr>
	  <td>'.$shwrequests["requestId"].'</td>
	  <td>'.$shwrequests["itemName"].'</td>
	  <td>'.$shwrequests["quantity"].'</td>
	  
	  <td>'.$shwrequests["requestDate"].'</td>
	  <td>'.$shwrequests["purpose"].'</td>
	  <td>'.$shwrequests["requestedBy"].'</td>
	  
	 
	  
	  
	  <td><table align=" " cellspacing="4"><tr> <td>
	   <a  href="caoeditrequistion.php?id='.$shwrequests["requestId"].' ">Edit</a></td>   
	   </tr></table></td>
	  
	  
	  
	  
	  
	  </tr>';
	  }

	echo '</table>';
	
	echo '<hr />';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<center>';
    echo '<a href="caoindex.php "><input type="button" value="Previous" class="btn btn-primary" style="width:110px;"></a>';
	echo '&nbsp;&nbsp;&nbsp';        
    echo '<a href="#" onClick="window.print();" return false; ><input type="button" value="Print" class="btn btn-primary " style="width:110px;"></a>';
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
