<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
echo'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Record Asset</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
   
   function checkNum()
{
 
if ((event.keyCode > 64 && event.keyCode < 91) || (event.keyCode > 96 && event.keyCode < 123) || event.keyCode == 8)
   return true;
else
   {
       alert("Please enter only char");
       return false;
   }
 
}
   
   
   
   
   
   
   
   
   function isNumber(evt) {

    evt = (evt) ? evt : window.event;

    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {


        alert ("Enter only numbers for Amount");
        return false;

    }

    return true;

}

 
  </script>

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
                <a class="navbar-brand" href="healthindex.php">WOSIC</a>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"> <font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTER</font> &nbsp; <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					    <a class="" ><img src="pics/service.png" width="200" height="50px"></a>
					    </li>
                          <li>
                        <a href="healthindex.php"> <img src="pics/home.png" width="50" height="50px"></i>Home</a>
                    </li>
                        <li>
                        <a href="finspection.php"> <img src="pics/inspection.jpg" width="50" height="50px"> Inspect Activities</a>
                    </li>
                     <li>
                        <a  href="viewduty.php"><img src="pics/duty.png" width="50" height="50px"> Duties</a>
                    </li>
                                     
                     <li>
                        <a  href="frequisation.php"><img src="pics/requestnew.png" width="50" height="50px"> Requisations</a>
                    </li>
                    <li>
                        <a  href="stask.php"><img src="pics/schedul.png" width="50" height="50px">Schedule Task</a>
                        </li>
                        <li>
                        <a  href="fproposal.php"><img src="pics/project.jpg" width="50" height="50px"> Propose Project</a>
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
                      <h2>Health Department</h2>
                        <h5>Please Record Purchased Assets</h5>
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
                           Fill Assets Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!--figure in the class reduces/increase the actual form/inputs-->
                                <div class="col-md-9">
                                   
                                    <form role="form" action="financesubmitAsset.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>';
											
											
$row=mysql_query('SELECT assetId from asset where purchasedBy="Head Of Health Department" order by assetId desc LIMIT 1',$conn);
	
	
	while($shwduty = mysql_fetch_array($row))
	   {
				$id = $shwduty["assetId"];	
				$ans = 	++$id;				
											
                              echo '<input type="text" class="form-control" placeholder="'.$ans.'" name="AssetId" value="'.$ans.'" readonly />
                                 </div>';
										
					}
						
											
                                         
                                        echo '<div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Asset Name" name="AssetName" required/>
                                        </div>
                                     
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Quantity" name="qty" required/>
                                        </div>
                                        
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" onKeypress="return isNumber(event)"class="form-control" placeholder="Amount(UGX)" name="amount" required/>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Purpose" name="pur" required/>
                                        </div>
                                        
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Head Of Health Department" name="PurchasedBy" value="Head Of Health Department" readonly/>
                                        </div>
                                        
                                        
                                        <div class="form-group input-group">
                                            <input type="date" class="form-control" name="purchasedate"> <!-- date(d/m/y) -->
                                            <span class="input-group-addon">Date Of Purchase</span>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="form-group input-group"><span class="input-group-addon">Attach Document</span>
                                            <input type="file" class="form-control" name="assetdoc">
                                            
                                        </div>
                                        
                                        
                                           
                                       <input type="submit" class="btn btn-primary" value="Record Asset"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                           <input type="reset" value="Reload"  class="btn btn-primary "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                          <a href="viewdepartmentasset.php" class="btn btn-primary ">View Assets</a>
                                    </form>
                                 
                                </div>
                                
                                     <div class="col-md-3">

                                 <h3>Wakiso District </h3>
                                   <h5>P.O.Box 7218</h5>
                                   <h5>Kampala</h5>
                                   <h5>Uganda</h5>
                                  <h5>Phone: +256 752 696230</h5>
                                  <h5> Email: info@wakiso.go.ug</h5>

                                  

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
else
{
Header('location: ../index.php');
}
?>