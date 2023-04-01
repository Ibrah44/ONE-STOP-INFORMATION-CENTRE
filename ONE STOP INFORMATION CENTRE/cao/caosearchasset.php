<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Results</title>
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
 echo '<div id="wrapper" >
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header"  >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="caoindex.php">WOSIC</a>
            </div>
  <div class="onestop" id="one" ><img src="pics/wakisoemb.png" width="80" height="70px"><font size="5" face="times new romans"> WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp;       
  
  <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse " id="no-print">
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
                        <h5>List Of District Assets </h5>
                    </div>
					
                </div> 
				<div class="no-print">
				<form method="post" action="caosearchasset.php">
				
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					
					
					<input type="text" name="search" placeholder="eg Nansana">
					
					<input type="submit" value="search" />
					</form>  </div>          
                 <!-- /. ROW  -->
                  <hr />
				  
					
                <div class="row" >
                   <!-- <div class="col-md-3 col-sm-6 col-xs-6">-->

                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-6">

                    </div>';
  
/* display assets of the town council*/




$result=$_POST['search'];

//if(isset($result))
//{
$sql="SELECT * from asset WHERE (purchasedBy)  LIKE '%$result%' or assetName LIKE '%$result%' or assetId LIKE '%$result%' order by purchaseDate ";
	$aresult=mysql_query($sql) or die(mysql_error());
	
	
	
	
	
	
	
	
	
	
	//if(!$sql)
	// provide search for all columns
	
	/*$sql="SELECT * from asset WHERE (assetName) LIKE '%$result%' ";
	$bresult=mysql_query($sql) or die(mysql_error());
	elseif(!$sql1)
	
	$sql="SELECT * from asset WHERE (purchaseDate) LIKE '%$result%' ";
	$cresult=mysql_query($sql) or die(mysql_error());
	
	elseif(!$sql2)
	$sql="SELECT * from asset WHERE (Amount) LIKE '%$result%' ";
	$dresult=mysql_query($sql) or die(mysql_error());
	
	
	else
	{
	 echo"<h2><font color='#000000'>Search results -    
	 Asset not found:</font> <font color='C44F00'>$result</h2>";
	}
	
	
	*/
	
	
	 
	
	$count=mysql_num_rows($aresult);

	  if($count > 0)
	 {
	  	
		


	echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="950px">
	
	<tr>
	<td>Search Results</td>
	</tr>
	<tr>
	<td><b>ASSET ID</b></td>
	<td><b>ASSET NAME</b></td>
	<td><b>PURCHASE DATE</b></td>
	
	<td><b>AMOUNT</b></td>
	
	
	</tr>';
	while($row = mysql_fetch_array($aresult)){
		echo '<tr>
		<td>'.$row["assetId"]."</td>
		<td>".$row["assetName"]."</td>
		<td>".$row["purchaseDate"]."</td>
		<td>".$row["Amount"]."</td>
		
		
		</tr>";
	}
	echo '</table>';
	echo '<hr/>';
	echo '<center>';
    echo '<a href="caoviewDistrictAssets.php "><input type="button" value="View All Assets" class="btn btn-primary " style="width:130px;"></a>';
	
		echo '<center/>';
	
	//header:Location('caoviewDistrictAssets.php');	
		

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
     <!-- /. WRAPPER  -->';
     

echo '
 <div id="footer" style="background-color: #4D4D4D;" class="no-print">
      <div class="container" class="no-print">
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
