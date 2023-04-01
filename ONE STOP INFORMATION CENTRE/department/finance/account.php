<?php

include('connection.php');
 echo '<!DOCTYPE html>
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
     <!-- GOOGLE FONTS-->';
	 
  echo " <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>";
   echo '<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">WISCO</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> WAKISO ONE STOP INFORMATION CENTRE &nbsp; <a style="float: right" href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse ">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					<a class=""><i class="fa  fa-3x"></i> SERVICES </a>

					</li>
                  < <li>
                        <a  href="admin.html"><i class="fa fa-desktop fa-3x"></i> Home</a>
                    </li>
                    <li>
                        <a  href="account.php"><i class="fa fa-qrcode fa-3x"></i> Create Account</a>
                        </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Administarator</h2>
                        <h5>Welcome';  echo' Love to see you back. </h5>
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
										
						
echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="80%">';
	
	
	
echo	'<tr>
          <td align="center">
         <b><i>First Name</i></b></td>
         <td align="center"><b><i>Last Name</i></b></td>
         <td align="center"><b><i>Email</i></b></td>
		 <td align="center"><b><i>Status</i></b></td>
		 <td align="center"><b><i>Region</i></b></td>
		  <td align="center"><b><i>UserName</i></b></td>
         <td align="center"><b><i>Password</i></b></td>
		  <td align="center"><b><i>Operations</i></b></td>';
	
	
echo	'</tr>';

	$row=mysql_query('select * from login',$conn);
	
	
	while($shwduty = mysql_fetch_array($row))
	   {
		
	echo ' 
	  <td>'.$shwduty["FirstName"].'</td>
	  <td>'.$shwduty["LastName"].'</td>
	  <td>'.$shwduty["Email"].'</td>
	  <td>'.$shwduty["status"].'</td>
	  <td>'.$shwduty["region"].'</td>
	  <td>'.$shwduty["userName"].'</td>
	  <td>'.$shwduty["password"].'</td>
	  <td><table align="center" cellspacing="4"><tr> <td>
	  <a  href="edit.php?id='.$shwduty["userId"].'"><input type="button" value="Edit" ></a></td> <td>&nbsp;&nbsp;&nbsp;</td> <td> <a  href="delete.php?id='.$shwduty["userId"].'"><input type="button" value="Delete" ></a></td>  </tr></table></td>
	  </tr> ';
	   }
	 

	echo '</table>
			&nbsp;&nbsp;&nbsp;			
			<center><a href="index.php" class="btn btn-primary">Back</a> </center> 			
						
					
						
						
                                                   
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
  
			  
mysql_close($conn);






?>
