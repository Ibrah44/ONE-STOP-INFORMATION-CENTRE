<?php

session_start();
include ('connection.php');

if (isset($_POST['submit']))
 {
 
    if(empty ($_POST['password']))
	  {
	   echo '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log in</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
   
</head>
<body bgcolor="#000000">
    <div class="container"> 
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> One Stop Information Centre: Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading" align="center">
                        <strong><font color="#FF0000"> You have not entered a password</font></strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="login.php" method="post" name="login" >
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="userName" required/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" name="password" required/>
                                        </div>
                                    <div class="form-group">
                                            
                                           
                                        </div>
                                     
                                     <input type="submit" value="submit" name="submit" />
                                    <hr />
                                   <center><span>Please contact admin if you Forget password</span></center>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


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
</html>
';
	   }
	   
	 else if(empty ($_POST['userName']))
	   {
	   echo '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log in</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
   
</head>
<body bgcolor="#000000">
    <div class="container"> 
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> One Stop Information Centre: Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading" align="center">
                        <strong><font color="#FF0000">  You have not entered a username </font></strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="login.php" method="post" name="login" >
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="userName" required/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" name="password" required/>
                                        </div>
                                    <div class="form-group">
                                            
                                           
                                        </div>
                                     
                                     <input type="submit" value="submit" name="submit" />
                                    <hr />
                                   <center><span>Please contact admin if you Forget password</span></center>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


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
</html>
';
	   } 
	   
	 else {
	      $username = $_POST['userName'];
		  $password = $_POST['password'];  
		  
		  $sql = mysqli_query($conn,"select*from login where userName='$username' AND password='$password' ");
	   
          $row = mysqli_num_rows($sql);
		         if($row == 1)
				    {
					 $_SESSION['login_user'] = $username;
                   //header("Location: finance/departmentindex.php");
                    
					$qw = mysqli_query($conn,'select * from login'); 
                             while($row = mysqli_fetch_array($qw))
                              {
	
	                    if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'HeadOfDepartment' && $row['department'] == 'Finance')
                           {
                         header("Location: finance/departmentindex.php");
					        }
			 
			 
	                    else if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'ADMIN')
                            {			 
                          header("Location: admin/admin.php");
                              }			 
			 
	                     else if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'CAO')
                              {			 
                          header("Location: cao/caoindex.php");
          
                               }	 		 
			 
	                    else if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'HeadOfDepartment' && $row['department'] == 'Education')
                                {
                              header("Location: education/educationindex.php");
          
                                }	
	                    else if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'HeadOfDepartment' && $row['department'] == 'Health')
                                {
                             header("Location: health/healthindex.php");
                                 }	

		
	                   else if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'HeadOfDepartment' && $row['department'] == 'Community')
                                {
                             header("Location: community/communityindex.php");
          
                                 }	
		
	                    else if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'TownClerk' && $row['region'] == 'Nansana')
                                 {
                                header("Location: nansana/nanindex.php");
         
                                  }
			 
	                       else if($password == $row['password'] &&  $username == $row['userName'] && $row['status'] == 'TownClerk' && $row['region'] == 'Kira')
                                  {
                              header("Location: kira/kiraindex.php");
          
                                   }
								   
								   
							}	
        
		              

                    
                  $login = $_SESSION['login_user'];
				  $status = "Logged In";
				  $sqlupdate = mysqli_query($conn,"update login set loginStatus='$status' where username='$login'");
				  
						}  
				  
				  
				  else {
				        echo'
						
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log in</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
   
</head>
<body bgcolor="#000000">
    <div class="container"> 
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> One Stop Information Centre: Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading" align="center">
                        <strong><font color="#FF0000">  Invalid Password or Username<br/>Please enter correct credentials</font></strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="login.php" method="post" name="login" >
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="userName" required/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" name="password" required/>
                                        </div>
                                    <div class="form-group">
                                            
                                           
                                        </div>
                                     
                                     <input type="submit" value="submit" name="submit" />
                                    <hr />
                                   <center><span>Please contact admin if you Forget password</span></center>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


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
</html>
';
				        }

          }
		  
	}	  










?>