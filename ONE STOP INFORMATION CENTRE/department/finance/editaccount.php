<?php
session_start(); 
if(isset($_SESSION['login_user']))
{
include('connection.php');

$id = $_GET['id'];

$row=mysql_query("SELECT * FROM login WHERE userId = '$id'",$conn);
while($shwduty = mysql_fetch_array($row))
	   {
echo '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   
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
                <a class="navbar-brand" href="departmentindex.php">WOSIC</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTER </font>&nbsp; <a style="float: right" href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					    <a class="" ><i class="fa  fa-3x"></i> <img src="pics/service.png" width="200" height="50px"></a>
					    </li>
						 <li>
                        <a  href="admin.html"><i class="fa fa-desktop fa-3x"></i> Home</a>
                    </li>
                               <li>
                        <a href="createaccount.html"> <i class="fa fa-dashboard fa-3x"></i>Create Account</a>
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
                      <h2>Wakiso Home</h2>
                        <h5>Enter edit details</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
               <!--12 increases the size of the form area-->
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Make changes using the form below
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!--figure in the class reduces/increase the actual form/inputs-->
                                <div class="col-md-9">
                                   
                                    <form action="" method="post">
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">User Id</span>
                                            <input type="text" class="form-control" placeholder="UserId" name="UserId" value='.$shwduty["userId"].' />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><label>First Name</label></span>
                                            <input type="text" class="form-control" placeholder="First Name" name="FirstName" value='.$shwduty["FirstName"].'>
                                        </div>
                                     
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><label><b>Last Name</b></label></span>
                                            <input type="text" class="form-control" placeholder="Last Name" name="LastName" value='.$shwduty["LastName"].'>
                                        </div>
                                        
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><label><b>Region</b> &nbsp;&nbsp;&nbsp;&nbsp;</label></span>
                                            <select name="region" row="4"> <option value='.$shwduty["region"].'>---------select status---------</option> 
			    <option value="Nansana">Nansana</option> <option value="Kakiri">Kakiri</option> <option value="Kira">Kira</option> <option value="Wakiso">Wakiso</option> </select>                 
                                        </div>
										
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><label>User Name</label></span>
                                            <input type="text" class="form-control"name="userName" value='.$shwduty["userName"].'>
                                        </div>
										
										                      
               <div class="form-group input-group">
                <span class="input-group-addon"><b>Status</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <select name="status" row="4"> <option value='.$shwduty["status"].'>---------select status---------</option> 
			    <option value="TownClerk">Town Clerk</option> <option value="CAO">CAO</option> <option value="HeadOfDepartment">Head Of Department</option> <option value="ADMIN">ADMIN</option></select>                 
             </div>
			  <div class="form-group input-group">
                <span class="input-group-addon"><b>Department</b></span> <select name="department" row="4"> <option value='.$shwduty["status"].'>-----select Department-----</option> 
			    <option value="Finance">Finance</option> <option value="Production">Production</option> <option value="NaturalResource">Natural Resource</option> 
				<option value="CommunityDevelopment">Community Development</option> <option value="Engineering">Engineering</option> <option value="Health">Health</option> <option value="Education">Education</option></select>                 
             </div>
										
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><label>Email</label></span>
                                            <input type="text" class="form-control"name="Email" value='.$shwduty["Email"].'>
                                        </div>
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><label>Password</label></span>
                                            <input type="text" class="form-control"name="password" value='.$shwduty["password"].'>
                                        </div>
                                                <div>
                                                <input type="submit" name="editaccount" value="Update" />
                                                  </div>
                                    </form>
                                 
                                </div>
                                
                                <div class="col-md-3">

';


	  if(isset($_POST['editaccount']))
	  {
	  $userId = $_POST['userId'];
	  $FirstName = $_POST['FirstName'];
	  $LastName = $_POST['LastName'];
	  $region = $_POST['region'];
	  $userName = $_POST['userName'];
	  $status = $_POST['status'];
	  $Email = $_POST['Email'];
	  $password = $_POST['password'];
	  $department = $_POST['department'];
	  
	 // $gt1 ='UPDATE task set taskName=';
	  
 $gt= "update login set FirstName ='$FirstName', LastName='$LastName', region='$region', userName='$userName', status='$status', Email='$Email', password='$password' department='$department' where userId ='$userId'";
	  
	$qw=mysql_query($gt,$conn);
	if(!isset($qw)){
	echo 'An Error has Occured';
		}
	else {
	echo 'Successfully Updated';
	header('location:account.php');
	}
	  
	  }
	  



echo '
                                  

                                </div>
                            </div>
                        </div>
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
    
   
</body>
</html>';
}
	  mysql_close($conn);
	  
	  }
else
{
Header('location: ../index.php');
}
	  ?>
