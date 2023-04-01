<?php 

include ('../login.php');


if(isset($_SESSION['login_user']))
{


include ('connection.php');
echo 
'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin home</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">WOSIC</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTRE</font> &nbsp; <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					    <a class="" > <img src="pics/service.png" width="200" height="50px"></a>
					    </li>
                          <li>
                        <a href="createaccount1.php"> <i class="fa fa-dashboard fa-3x"></i>Create Account</a>
                    </li>
                        <li>
                        <a href="account.php"> <i class="fa fa-desktop fa-3x"></i> Manage Account</a>
                    </li>
                            
                   </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                <!--extend wakiso inside or outside, the one below-->
                    <div class="col-md-12">
                      <h2>Wakiso Local Government</h2>
                        <h5>Welcome you are logged in as the administrator</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />';
                 			echo '<div class="chat" align="right">';
				$qry1=mysqli_query($conn,'select*from login where status="ADMIN"');			
while($shwduty1 = mysqli_fetch_array($qry1))
	   {	
			echo '<a href="../admin/login.php?id='.$shwduty1["status"].'"><div  id="leave">Click to chat</div></a>';	
			}
				echo '</div>';  
             echo '  <div class="row">
               <!--12 increases the size of the form area-->
                <div class="col-md-12">
                    <!-- Form Elements -->';
                    					
						
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="80%">';
	
	
	
echo	'<tr>
          <td align="center">
         <b>First Name</b></td>
         <td align="center"><b>Last Name</b></td>
         <td align="center"><b>Email</b></td>
		 <td align="center"><b>Status</b></td>
		 <td align="center"><b>Region</b></td>
		  <td align="center"><b>UserName</b></td>
         <td align="center"><b>Password</b></td>
		 <td align="center"><b>Login Status</b></td>
		  ';
	
	
echo	'</tr>';

	$row=mysqli_query($conn,'select * from login');
	
	
	while($shwduty = mysqli_fetch_array($row))
	   {
		
	echo ' 
	  <td>'.$shwduty["FirstName"].'</td>
	  <td>'.$shwduty["LastName"].'</td>
	  <td>'.$shwduty["Email"].'</td>
	  <td>'.$shwduty["status"].'</td>
	  <td>'.$shwduty["region"].'</td>
	  <td>'.$shwduty["userName"].'</td>
	  <td>'.$shwduty["password"].'</td>
	  <td>'.$shwduty["loginStatus"].'</td>
	  	  </tr> ';
	   }
	 

	echo '</table>
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
    
'; 

mysqli_close($conn);
}
else
{
Header('location: ../index.php');
}
?>
