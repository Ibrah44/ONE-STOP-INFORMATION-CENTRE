
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

include ('../login.php');

if(isset($_SESSION['login_user']))
{

include('connection.php');
//sesion_start();

 echo ' <style>
	 .chat {
				/*ivan add the line below*/
				margin-left:900px;
				text-decoration:none;
				
			}
			
			#leave{
				text-decoration:none;
								color:blue;
			}
			
	 </style>';


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
                <a class="navbar-brand" href="nanindex.php">WOSIC</a>
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
                        <a href="nantownsupervise.php"> <img src="pics/inspection.jpg" width="50" height="50px"></i> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="nangetduties.php"><img src="pics/duty.png" width="50" height="50px"></i> Duties</a>
                    </li>
                                       
                     <li>
                        <a  href="nantownRequest.php"><img src="pics/requestnew.png" width="50" height="50px"></i> Requisations</a>
                    </li>
                    <li>
                        <a  href="nantownAssets.php"><img src="pics/passet.png" width="50" height="50px"></i> Record Assets</a>
					</li>
						<li>
                        <a  href="nantownpro.php"><img src="pics/project.jpg" width="50" height="50px"></i> Propose Project</a>
                    </li>	
					
					
					
					
					<li>
                        <a class=""  href="nantownSchedule.php"><img src="pics/schedule.png" width="50" height="50px"></i> Schedule</a>
                    </li>					
                </ul>
            
		</div>	
        </nav> 
		';
		
		echo '<!-- /. NAV SIDE  -->';
        
		
		echo '
		<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Nansana Town Council</h2>
                        <h5>Welcome Town Clerk , Great to see you back. </h5>
                    </div>
                </div>
				
                 <!-- /. ROW  -->
				 
                  ';
				  
				  echo '<div class="chat">';
				  //echo 'start chat';
				  			$qry1=mysqli_query($conn,'select*from login where region="Nansana"');			
while($shwduty1 = mysqli_fetch_array($qry1))
	   {				
				echo '<a href="../nansana/login.php?id='.$shwduty1["region"].'"><div  id="leave">Click to chat</div></a>';
				  
				  
				  }
				  
				 echo '</div>'; 
				  //echo 'end chat';
				  
                
				
				
				
				
               echo '  <!-- /. ROW  -->';
			  echo ' 
			   <table border="1" align="center" cellpadding="2" cellspacing="2" width="950px">
		
	     <tr>
		 <td align="center"><b>Upcoming Events</b></td>
       
        </tr>';
		echo '</table>';
	
		
$date = date('d-m-y');
$de =  (date('d')+2);
$du =  (date('d')+5);
$da =  (date('d')+10);
$ca =  (date('d')+3);
$ce =  (date('d')+4);
$ci =  (date('d')+6);
$co =  (date('d')+7);
$cu =  (date('d')+8);
$cq =  (date('d')+9);
$di = date('m');
$do = date('Y');
$deti = $do.'-'.$di.'-'.$de;
$deta = $do.'-'.$di.'-'.$du;
$dete = $do.'-'.$di.'-'.$da;

$deca = $do.'-'.$di.'-'.$ca;
$dece = $do.'-'.$di.'-'.$ce;
$deci = $do.'-'.$di.'-'.$ci;
$deco = $do.'-'.$di.'-'.$co;
$decu = $do.'-'.$di.'-'.$cu;
$decq = $do.'-'.$di.'-'.$cq;	
//SELECT table_1.the_geom,table_1.iso_code,table_2.populationFROM table_1, table_2WHERE table_1.iso_code = table_2.is	
echo '<table border="1" width="950px%" align="center"><tr><td valign="top">';
echo '<table border="1" width="100%"> ';

//$qry = mysql_query("select duty.deadline, duty.dutyId, task.dateOfExecution, task.taskId from duty ,task  where duty.status=task.taskStatus ",$conn);	
$qry=mysqli_query($conn,'select*from duty where assignedTo="Nansana Town Clerk" ');			
while($shwduty = mysqli_fetch_array($qry))
	   {
	   
	      	if($shwduty["deadline"]==$deti)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in two days</li></ul></td></tr>';
						}
			
			
			
			if($shwduty["deadline"]==$deca)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in three days</li></ul></td></tr>';
						}
			
			
			
			if($shwduty["deadline"]==$dece)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in four days</li></ul></td></tr>';
						}
						
						
			
	      	if($shwduty["deadline"]==$deta)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in five days</li></ul></td></tr>';
						}
						
						
			
			if($shwduty["deadline"]==$deci)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in six days</li></ul></td></tr>';
						}
						
						
			if($shwduty["deadline"]==$deco)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in seven days</li></ul></td></tr>';
						}	
						
			if($shwduty["deadline"]==$decu)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in eight days</li></ul></td></tr>';
						}
						
			if($shwduty["deadline"]==$decq)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in nine days</li></ul></td></tr>';
						}								
												
						
			
	      	if($shwduty["deadline"]==$dete)
		        
							{				
						echo '<tr> <td> <ul><li>Dealine of Duty '.$shwduty["dutyId"].' in ten days</li></ul></td></tr>';
						}			
							
			
			}			
	 
			
				
			echo '</tr></table>';	
			echo '</td>';	
				
				
				
			echo '<td valign="top">';	
			echo '<table border="1" width="100%" > ';

//$qry = mysql_query("select duty.deadline, duty.dutyId, task.dateOfExecution, task.taskId from duty ,task  where duty.status=task.taskStatus ",$conn);	
$qry1=mysqli_query($conn,'select*from task where taskScheduler="Nansana Town Clerk"');			
while($shwduty1 = mysqli_fetch_array($qry1))
	   {
	   
	      	if($shwduty1['dateOfExecution']==$deti)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in two days</li></ul></td></tr>';
						}
						
						
						
			if($shwduty1['dateOfExecution']==$deca)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in three days</li></ul></td></tr>';
						}			
						
			if($shwduty1['dateOfExecution']==$dece)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in four days</li></ul></td></tr>';
						}			
						
						
						
			if($shwduty1['dateOfExecution']==$deta)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in five days</li></ul></td></tr>';
						}
						
			if($shwduty1['dateOfExecution']==$deci)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in six days</li></ul></td></tr>';
						}			
						
			if($shwduty1['dateOfExecution']==$deco)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in seven days</li></ul></td></tr>';
						}			
						
						
			if($shwduty1['dateOfExecution']==$decu)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in eight days</li></ul></td></tr>';
						}	
								
			if($shwduty1['dateOfExecution']==$decq)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in nine days</li></ul></td></tr>';
						}			
						
						
			if($shwduty1['dateOfExecution']==$dete)
		        
							{				
						echo '<tr> <td> <ul><li>Upcoming task &nbsp;'.$shwduty1["taskId"].' in ten days</li></ul></td></tr>';
						}			
			
			
			}	echo '</tr></table>';				
				
			echo '</td></tr></table>';
				
			   
			   
			   
			   
				 echo '
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
    
   
</body>
</html>
';







}
else
{
Header('location: ../index.php');
}


?>