<?php 
session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
 echo '<!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requistions</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->';
	 
  echo " <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>";
   echo '<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">WOSIC</a>
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
                        <a href="kiraindex.php"> <img src="pics/home.png" width="50" height="50px"></i> Home</a>
                    </li>
                     

                    <li>
                        <a href="kiratownsuper.php"> <img src="pics/inspection.jpg" width="50" height="50px"></i> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="kiragetduties.php"><img src="pics/duty.png" width="50" height="50px"></i> Duties</a>
                    </li>
                         
                    <li>
                        <a  href="kiratownassets.php"><img src="pics/asset.png" width="50" height="50px"></i> Record Assets</a>
					</li>
						<li>
                        <a  href="kiratownpro.php"><img src="pics/project.jpg" width="50" height="50px"></i> Propose Project</a>
                    </li>	
					
					
					
					
					<li>
                        <a class=""  href="kiratownsch.php"><img src="pics/schedule.png" width="50" height="50px"></i> Shedule</a>
                    </li>					
                </ul>
            </div>
        </nav><!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Kira Town Council</h2>
                        <h5>Welcome';  echo' Great to see you back. </h5>
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
										
						
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">';
	
	
	
echo	'<tr>
          <td>
         <b>Requisation Id</b></td>
         <td><b>Item Name</b></td>
         
		 <td><b>Quantity</b></td>
		 <td><b>Date of Requistion</b></td>
		 <td><b>Purpose</b></td>
		 <td><b>Requisation Status</b></td>
		 
         <td><b>Download Document</b></td>';
	
	
echo	'</tr>';
	$row=mysql_query("select requestId,itemName,quantity,requestDate,
	purpose,status,downloadApproval from request where requestedBy='kira Town Clerk'  order by requestDate",$conn);
	
	
	while($shwrequest = mysql_fetch_array($row))
	   {
	//echo $shwrequest["downloadApproval"];	
	echo ' 
	  <td>'.$shwrequest["requestId"].'</td>
	  <td>'.$shwrequest["itemName"].'</td>
	  <td>'.$shwrequest["quantity"].'</td>
	  <td>'.$shwrequest["requestDate"].'</td>
	  <td>'.$shwrequest["purpose"].'</td>
	  
	  <td>'.$shwrequest["status"].'</td>
	  
	  
	  <td> <a href = '.$shwrequest["downloadApproval"].' />Download</a></td>
	  
	  </tr> ';
	   }
	 

	echo '</table>';
	
	echo $shwrequest["downloadApproval"];
		
		
		echo '	&nbsp;&nbsp;&nbsp;&nbsp;			
			<center><a href="kiratownreq.php" class="btn btn-primary" style="width:120px;">Back</a> </center> 			
						
					
						
						
                                                   
			    </div>
                 <!-- /. ROW  -->
                <hr />';
                
                    
		echo '			  
             </div>
         </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

    <div id="footer" style="background-color: #4D4D4D;">
      <div class="container">
        <p class="text-muted credit" style="text-align: center">@ copyright property of wakiso district</p>
      </div>
    </div>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
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
