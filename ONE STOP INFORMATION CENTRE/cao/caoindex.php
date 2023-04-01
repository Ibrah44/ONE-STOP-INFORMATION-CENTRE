
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


<body>


<?php

include ('../login.php');



include ('connection.php');


if(isset($_SESSION['login_user']))
{

include ('connect.php');
echo ' <style>
	 .chat {
				/*ivan add the line below*/
				margin-left:900px;
				text-decoration:none;
				
			}
			
			#leave{
				text-decoration:none;
								color:blue;
			
	 </style>';
	



     echo '<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header" >
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
                        <a  href="caomanupulateRequistion.php"><img src="pics/viewrequests.png" width="50" height="50px"></i> Requistions</a>
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
                     <h2> Chief Administrative Officer</h2>                    </div>
                </div>
				<hr />
                 <!-- /. ROW  -->
                  ';
				  
				
				echo '<div class="chat">';
				$qry1=mysqli_query($conn,'select*from login where status="CAO"');			
while($shwduty1 = mysqli_fetch_array($qry1))
	   {	
			echo '<a href="../cao/login.php?id='.$shwduty1["status"].'"><div  id="leave">Click to chat</div></a>';	
			}
				echo '</div>';            
                echo ' <!-- /. ROW  -->';
				
				  
				   echo '    
				  
				  <table border="1" align="center" cellpadding="2" cellspacing="2" width="950px;">
		
	     <tr>
		 <td align="center"><b>Latest Requests</b></td>
       
        </tr>';
		echo '</table>';
	
				
				
				  
				
				echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">';
	
	
	
echo	'<tr>
          <td><b>Request ID</b></td>
         <td><b>Item Name</b></td>
         
		 <td><b>Requested By</b></td>
		 
		</tr> ';

//$qry = mysql_query("select duty.deadline, duty.dutyId, task.dateOfExecution, task.taskId from duty ,task  where duty.status=task.taskStatus ",$conn);	
$qry=mysqli_query($conn,'select*from request where status like "%pend%" order by requestDate limit 15');			
while($shwrequests = mysqli_fetch_array($qry))
	   {
		   
		   echo ' <tr>
	  <td>'.$shwrequests["requestId"].'</td>
	  <td>'.$shwrequests["itemName"].'</td>
	  <td>'.$shwrequests["requestedBy"].'</td></tr>';
	
	   
	      		
			
	   }
	   echo '</table>';



//latestest submitted projects
 echo '    
				  
				  <table border="1" align="center" cellpadding="2" cellspacing="2" width="950px;">
		
	     <tr>
		 <td align="center"><b>Latest Submitted Projects</b></td>
       
        </tr>';
		echo '</table>';
	
				
				
				  
				
				echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">';
	
	
	
echo	'<tr>
          <td><b>Project ID</b></td>
         <td><b>Project Name</b></td>
         
		 <td><b>Submitted By</b></td>
		 
		</tr> ';

//$qry = mysql_query("select duty.deadline, duty.dutyId, task.dateOfExecution, task.taskId from duty ,task  where duty.status=task.taskStatus ",$conn);	
$qry=mysqli_query($conn,'select*from project where status like "%pend%"  order by dateOfSubmission  limit 15');			
while($shwrequests = mysqli_fetch_array($qry))
	   {
		   
		   echo ' <tr>
	  <td>'.$shwrequests["projectId"].'</td>
	  <td>'.$shwrequests["projectName"].'</td>
	  <td>'.$shwrequests["submitedBy"].'</td></tr>';
	
	   
	      		
			
	   }
	   echo '</table>';






				  
				  
				  
                echo '<div class="row">
                     
			    </div>
                 <!-- /. ROW  -->
                <hr />
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


';

}
else
{
Header('location: ../index.php');
}
?>