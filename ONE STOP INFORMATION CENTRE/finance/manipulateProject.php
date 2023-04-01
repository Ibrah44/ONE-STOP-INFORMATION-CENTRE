<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home menu</title>
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
                <a class="navbar-brand" href="index.html">Logo Image</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;">  WAKISO ONE STOP INFORMATION CENTRE &nbsp; <a style="float: right" href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse ">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					<a class="" ><i class="fa  fa-3x"></i> SERVICES</a>

					</li>


                    <li>
                        <a class=""  href="caoindex.php"></i><font color="blue" size="15"> Home</font></a>
                    </li>
                     <li>
                        <a  href="viewDistrictAssets.php"><i class="fa fa-qrcode fa-3x"></i>View District Assets</a>
                    </li>
                    
                    <li>
                        <a  href="allocateDuty.html"><i class="fa fa-dashboard fa-3x"></i>Assigned Duties</a>
                    </li>
                    
                    
                    
                    
                    
                    <li>
                        <a  href="manupulateRequistion.php "><i class="fa fa-dashboard fa-3x"></i>Requistions</a>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Wakiso Chief Administrative Officer</h2>
                        <h5>Please Confirm/Reject Project </h5>
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

include ('connect.php');

// create a page called viewTownAssets and include in the code
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="650">';
	
	
	
echo	'<tr>
          <td><b><i>Project ID</i></b></td>
         <td><b><i>Project Name</i></b></td>
		 
         <td><b><i>Summary</i></b></td>
		 <td><b><i>Submission Date</i></b></td>
		 <td><b><i>Submitted By</i></b></td>
         
		 <td><b><i>Document</i></b></td>
		 <td><b><i>Approval Status</i></b></td>
		 <td><b><i>Operation</i></b></td>';
//echo '(projectId,projectName,projectDetail,dateOfSubmission,submitedBy,document,status)'	
	
echo	'</tr>';
	$getprojects=mysql_query('select * from project',$conn);
	
	
	while($shwprojects= mysql_fetch_array($getprojects))
	   {
		
	echo ' 
	  <td>'.$shwprojects["projectId"].'</td>
	  <td>'.$shwprojects["projectName"].'</td>
	  <td>'.$shwprojects["projectDetails"].'</td>
	  
	  
	  <td>'.$shwprojects["dateOfSubmission"].'</td>
	  <td>'.$shwprojects["submitedBy"].'</td>
	  <td>'.$shwprojects["document"].'</td>
	   <td>'.$shwprojects["status"].'</td>
	  
	 
	  
	  
	  <td><table align=" " cellspacing="4"><tr> <td>
	   <a  href=" "><input type="button" value="Edit" ></a></td> <td>&nbsp;&nbsp;&nbsp;</td> </tr></table></td>
	  
	  
	  
	  
	  
	  </tr>';
	  }

	echo '</table>';
	
	echo '<hr />';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<center>';
    echo '<a href="index.php "><input type="button" value="Previous" class="btn btn-primary "></a>';
	echo '&nbsp;&nbsp;&nbsp';        
    echo '<a href="#" onClick="window.print();" return false; ><input type="button" value="Print" class="btn btn-primary "></a>';
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
   






?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
