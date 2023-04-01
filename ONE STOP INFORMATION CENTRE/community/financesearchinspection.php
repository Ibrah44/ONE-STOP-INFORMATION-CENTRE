<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Inspections</title>
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
include('connection.php');
echo ' <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="communityindex.php">WOSIC</a>
            </div>
   <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;">  <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp; <a style="float: right" href="../logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a  href="communityindex.php"><img src="pics/home.png" width="50" height="50px"> Home</a>
                    </li>
					  <li>
                        <a  href="viewduty.php"><img src="pics/duty.png" width="50" height="50px"> Duties</a>
                    </li>
                     <li>
                        <a  href="fasset.php"><img src="pics/asset.png" width="50" height="50px">Asset Procurement</a>
                    </li>
                    
                    <li>
                        <a  href="setask.php"><img src="pics/schedul.png" width="50" height="50px"> Schedule Task</a>
                    </li>                  
                                      
                    <li>
                        <a  href="frequisation.php"><img src="pics/requestnew.png" width="50" height="50px">Requistions</a>
						</li>
							<li>
                        <a  href="fproposal.php"><img src="pics/project.jpg" width="50" height="50px"> Propose Project</a>
                    </li>
                </ul>
            </div>
        </nav>   <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Community Development Department</h2>
                        <h5>View records of the inspections carried out</h5>
						                           <form method="POST" action=" ">
												   
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								                   <input type="text" placeholder="Search Inspection Activity" name="search">
							<input type="submit"  value= "Search"> <hr/>
							';



















//starting search engine


$result=$_POST['search'];

//,assetName,purchaseDate,Amount

	$sql="SELECT * from inspect WHERE (inspectionId) LIKE '%$result%'  or activityName LIKE '%$result%' AND doneBy='Head Of Community Development Department'";
	$aresult=mysql_query($sql) or die(mysql_error());
	
	// provide search for all columns
	
	/*$sql="SELECT * from asset WHERE (assetName) LIKE '%$result%' ";
	$bresult=mysql_query($sql) or die(mysql_error());
	
	
	$sql="SELECT * from asset WHERE (purchaseDate) LIKE '%$result%' ";
	$cresult=mysql_query($sql) or die(mysql_error());
	
	
	$sql="SELECT * from asset WHERE (Amount) LIKE '%$result%' ";
	$dresult=mysql_query($sql) or die(mysql_error());*/
	
	
	 
	
	$count=mysql_num_rows($aresult);

	  if($count > 0)
	 {
	  	
		


	echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">
	<tr>
	<td><b>Inspection ID</b></td>
	<td><b>Activity ID</b></td>
	<td><b>Activity Name</b></td>
	<td><b>Inspection Date</b></td>
	
	
	
	</tr>';
	while($row = mysql_fetch_array($aresult)){
		echo '<tr>
		<td>'.$row["inspectionId"]."</td>
		<td>".$row["activityId"]."</td>
		<td>".$row["activityName"]."</td>
		<td>".$row["inspectionDate"]."</td>
		
		
		
		</tr>";
	}
	echo '</table> &nbsp;&nbsp;&nbsp;&nbsp;			
			<center><a href="viewinspection.php" class="btn btn-primary">Back</a> </center> ';
		
		

}

	
	else
	
	{
	 echo"<h2><font color='#000000'>Search results -    
	 Asset not found:</font> <font color='C44F00'>$result</h2>";
	}
	mysql_close($conn);
	
	













echo ' </div>
                 <!-- /. ROW  -->
                
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
    </div>';
   



}
else
{
Header('location: ../index.php');
}





?>
