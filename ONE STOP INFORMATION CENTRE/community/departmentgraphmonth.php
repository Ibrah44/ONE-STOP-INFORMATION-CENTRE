<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['login_user']))
{
include("connection.php");
$year=$_POST['year'];

$month=$_POST['month'];



$shw= mysql_query("select*from duty where assignedTo='Head Of Community Development Department'");
	 while($WEduty = mysql_fetch_array($shw))
	   {
		
 if($year==2015 && $month==01 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2015janCommunity");
} 

else if($year==2015 && $month==02 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015febCommunity");
} 
	
else if($year==2015 && $month==03 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015marchCommunity");
  } 
  
 else if($year==2015 && $month==04 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015aprilCommunity");
} 
	
else if($year==2015 && $month==05 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015mayCommunity");
  } 
  
  else if($year==2015 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015junCommunity");
} 
	
else if($year==2015 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015julyCommunity");
  } 
  
  else if($year==2015 && $month==08 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015augCommunity");
} 
	
else if($year==2015 && $month==09 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015septCommunity");
  }  
  
  else if($year==2015 && $month==10 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015octCommunity");
} 
	
else if($year==2015 && $month==11 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2015novCommunity");
  } 
  
  else if($year==2015 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Community Development Department" )
       {
	
header("Location:creategm.php?id=2015decCommunity");
} 


 else if($year==2014 && $month==01 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2014janCommunity");
} 

else if($year==2014 && $month==02 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014febCommunity");
} 
	
else if($year==2014 && $month==03 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014marchCommunity");
  } 
  
 else if($year==2014 && $month==04 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014aprilCommunity");
} 
	
else if($year==2014 && $month==05 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014mayCommunity");
  } 
  
  else if($year==2014 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014junCommunity");
} 
	
else if($year==2014 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014julyCommunity");
  } 
  
  else if($year==2014 && $month==08 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014augCommunity");
} 
	
else if($year==2014 && $month==09 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014septCommunity");
  }  
  
  else if($year==2014 && $month==10 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014octCommunity");
} 
	
else if($year==2014 && $month==11 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2014novCommunity");
  } 
  
  else if($year==2014 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Community Development Department" )
       {
	
header("Location:creategm.php?id=2014decCommunity");
} 

 if($year==2013 && $month==01 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2013janCommunity");
} 

else if($year==2013 && $month==02 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013febCommunity");
} 
	
else if($year==2013 && $month==03 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013marchCommunity");
  } 
  
 else if($year==2013 && $month==04 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013aprilCommunity");
} 
	
else if($year==2013 && $month==05 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013mayCommunity");
  } 
  
  else if($year==2013 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013junCommunity");
} 
	
else if($year==2013 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013julyCommunity");
  } 
  
  else if($year==2013 && $month==08 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013augCommunity");
} 
	
else if($year==2013 && $month==09 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013septCommunity");
  }  
  
  else if($year==2013 && $month==10 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013octCommunity");
} 
	
else if($year==2013 && $month==11 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:creategm.php?id=2013novCommunity");
  } 
  
  else if($year==2013 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Community Development Department" )
       {
	
header("Location:creategm.php?id=2013decCommunity");
} 



	
else if ($year==2016)  {
 header("Location:nodata.php");
    } 
   
  
  
}

}
else
{
Header('location: ../index.php');
}
?>
</body>
</html>