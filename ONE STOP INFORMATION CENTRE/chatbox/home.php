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
     <style>
	 #m {
		 color:#06F;
		 font-size:18px;
	 }
	#cont{
		color:#FFF;
		font-size:14px;
		
	}
	 
	 </style>
	 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
  
  <div id="wrapper" style="position:fixed;">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WOSIC</a>
            </div>
  <div style="color: white;  padding: 15px 50px 5px 50px;/*float: right;*/ font-size: 16px;"><font size="5" face="times new romans">WAKISO ONE STOP INFORMATION CENTRE &nbsp;</font> <a style="float: right" href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->

                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!--<img src="assets/img/find_user.png" class="user-image img-responsive"/>-->
					
                    <br/>
					  <li>
                        <center><b id="m">Our Mission</b> </center>
                        <div id="cont"> A transformed Wakiso district community<br/> from  semi peasantry to a modern and <br/>urbanized  district<div>
                    </li>
                        <br>
                    <li>
                        <center><b id="m"> Our Vision</b></center>
                         <div id="cont">To provide effective, efficient and <br/> coordinated services to the community <br/>
                         of Wakiso district to engender prosperity </div>
                    </li>
                    <br/>
                     <li>
                        <center><b id="m">Our Aim</b></center>
                       <div id="cont"> To promote quality and quantity of <br/> economic growth for all</div>
                    </li>
                                       
                    

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Wakiso Local Government</h2>
                        <h5>Welcome, Great to see you back. </h5>
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
                           Welcome To The Chatroom
                        </div>
                        
                                  <?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
		include('connection.php');
		
		$username = $_SESSION['user'];
		
	}
?>
<html lang="EN">
	<head>
		<meta charset="utf-8">
		<style>
			body {
				font-family:"Tahoma",Arial Narrow;
				font-size: 12px;
			}
			.holder {
				padding:3px;
				margin-left:auto;
				margin-right:auto;
				/*ivan should change the value of the top margin*/
				margin-top:1%;
				display:table;
				border:solid 1px #cccccc;
				border-width: thin;
			}
			.style {
				bottom:0px;
				border:1px solid #666;
				background-color:#FFF;
				border-radius:3px;
				-webkit-border-radius:3px;
				-moz-border-radius:3px;
				box-shadow:0 0 5px #000;			
				-moz-box-shadow:0 0 5px #000;			
				-webkit-box-shadow:0 0 5px #000;			
			}
			.alpha {
				float:right;
				width:800px;
				padding:2px;
				border:1px solid #666;
				background-color:#FFF;
				border-radius: 3px;
				}
			.refresh {
				border: 1px solid #3366FF;
				border-left: 4px solid #3366FF;
				color: green;
				font-family: tahoma;
				font-size: 12px;
				height: 225px;
				overflow: auto;
				width: 770px;
				padding:10px;
				background-color:#FFFFFF;
			}	
			#post_button{
				border: 1px solid #3366FF;
				background-color:#3366FF;
				width: 50px;
				color:#FFFFFF;
				font-weight: bold;
				margin-left: -04px; padding-top: 4px; padding-bottom: 4px;
				cursor:pointer;
			}
			#textb{
				border: 1px solid #3366FF;
				border-left: 4px solid #3366FF;
				padding-top: 5px;
				padding-bottom: 5px;
				padding-left: 5px;
				width: 220px;
			}
			#texta{
				border: 1px solid #3366FF;
				border-left: 4px solid #3366FF;
				width: 210px;
				margin-bottom: 10px;
				padding:5px;
			}
			#johnlei{
				margin-left:3px;
				color: #ffffff;
				text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
				background-color: #49afcd;
				*background-color: #2f96b4;
				background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
				background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
				background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
				background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
				background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
				background-repeat: repeat-x;
				border-color: #2f96b4 #2f96b4 #1f6377;
				border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
				filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
				float:right;
				cursor:pointer;	
				height: 70px;
				width:70px;
			}
			#johnlei:hover,
			#johnlei:active,
			#johnlei.active,
			#johnlei.disabled,
			#johnlei[disabled] {
				color: #ffffff;
				background-color: #51a351;
				*background-color: #499249;
			}
			#johnlei:active,
			#johnlei.active {
				background-color: #408140;
			}
			#johnlei:hover{
				background-color: #2f96b4;
			}
			
			.chat {
				/*ivan add the line below*/
				margin-left:843px;
				text-decoration:none;
			}
			#leave{
				text-decoration:none;
				background-color:#000;
				color:#CCC;
				
				
			
				
				
				
				
				
			}
			
			
					</style>
		<script src="js/jquery.js"></script>
	</head>
	<body>
    <?php 
	$id = $_GET['id'];
	$fi='Finance';
	//$id = $_GET['id'];
	//echo $id; 
	
echo "<div class='chat'>";	
if($id == $fi){
	

echo "<a href='../finance/departmentindex.php' id='leave'>LEAVE CHAT</a>";

}

else if ($id == 'ADMIN'){


echo"<a href='../admin/admin.php' id='leave'>LEAVE CHAT</a>";
}

else if ($id == 'Health'){


echo"<a href='../health/healthindex.php' id='leave'>LEAVE CHAT</a>";
}

else if ($id == 'Education'){


echo"<a href='../education/educationindex.php' id='leave'>LEAVE CHAT</a>";
}

else if ($id == 'Community'){


echo"<a href='../community/communityindex.php' id='leave'>LEAVE CHAT</a>";
}


else if ($id == 'Nansana'){


echo"<a href='../nansana/nanindex.php' id='leave'>LEAVE CHAT</a>";
}

else if ($id == 'CAO'){


echo"<a href='../cao/caoindex.php' id='leave'>LEAVE CHAT</a>";
}
echo "</div>";    
    ?>
	
    
	<div class="holder">
    
		<label="welcomemsg">WELCOME: </label><label for="name"><?php echo $username; ?></label>
			<div class="style">	
				<div class="alpha">
					<b align="center">You can view your chats here:</b>
					<input name="user" type="hidden" id="texta" value="<?php echo $username ?>"/>
					<div class="refresh">
					</div>
					<br/>
					<form name="newMessage" class="newMessage" action="" onSubmit="return false">
						<select name="recipient" id="recipient" style="width:270px;">
							<option>--Send Chat To--</option>
								<?php 
									$sql = "SELECT * FROM login where userName!='$username' ORDER BY userName";
									$qry = $con->prepare($sql);
									$qry->execute();
									$fetch = $qry->fetchAll();
									foreach ($fetch as $fe):
										$name = $fe['userName'];
								?>
									<option title="<?php echo $name; ?>"><?php echo $fe['userName']; ?> </option>
								<?php endforeach; ?>
						</select>
					<textarea name="textb" id="textb" style="width:720px; height:69px;">Enter your message here</textarea>
					<input name="submit" type="submit" value="SEND" id="johnlei" />
				</form>
			</div>
		</div>
		<script src="js/sendchat.js" type="text/javascript"></script>
		<script src="js/refresh.js" type="text/javascript"></script>
	</div>	
    
             <!-- /. ROW  -->
                 <hr />
               
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
   
</body>
</html>