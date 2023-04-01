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



$shw= mysql_query("select*from duty where assignedTo='Head Of Health Department'");
	 while($WEduty = mysql_fetch_array($shw))
	   {
		
 if($year==2015 && $month==01 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2015janHealth");
} 

else if($year==2015 && $month==02 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015febHealth");
} 
	
else if($year==2015 && $month==03 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015marchHealth");
  } 
  
 else if($year==2015 && $month==04 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015aprilHealth");
} 
	
else if($year==2015 && $month==05 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015mayHealth");
  } 
  
  else if($year==2015 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015junHealth");
} 
	
else if($year==2015 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015julyHealth");
  } 
  
  else if($year==2015 && $month==08 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015augHealth");
} 
	
else if($year==2015 && $month==09 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015septHealth");
  }  
  
  else if($year==2015 && $month==10 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015octHealth");
} 
	
else if($year==2015 && $month==11 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2015novHealth");
  } 
  
  else if($year==2015 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Health Department" )
       {
	
header("Location:creategm.php?id=2015decHealth");
} 


 else if($year==2014 && $month==01 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2014janHealth");
} 

else if($year==2014 && $month==02 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014febHealth");
} 
	
else if($year==2014 && $month==03 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014marchHealth");
  } 
  
 else if($year==2014 && $month==04 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014aprilHealth");
} 
	
else if($year==2014 && $month==05 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014mayHealth");
  } 
  
  else if($year==2014 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014junHealth");
} 
	
else if($year==2014 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014julyHealth");
  } 
  
  else if($year==2014 && $month==08 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014augHealth");
} 
	
else if($year==2014 && $month==09 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014septHealth");
  }  
  
  else if($year==2014 && $month==10 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014octHealth");
} 
	
else if($year==2014 && $month==11 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2014novHealth");
  } 
  
  else if($year==2014 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Health Department" )
       {
	
header("Location:creategm.php?id=2014decHealth");
} 

 if($year==2013 && $month==01 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2013janHealth");
} 

else if($year==2013 && $month==02 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013febHealth");
} 
	
else if($year==2013 && $month==03 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013marchHealth");
  } 
  
 else if($year==2013 && $month==04 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013aprilHealth");
} 
	
else if($year==2013 && $month==05 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013mayHealth");
  } 
  
  else if($year==2013 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013junHealth");
} 
	
else if($year==2013 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013julyHealth");
  } 
  
  else if($year==2013 && $month==08 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013augHealth");
} 
	
else if($year==2013 && $month==09 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013septHealth");
  }  
  
  else if($year==2013 && $month==10 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013octHealth");
} 
	
else if($year==2013 && $month==11 && $WEduty["assignedTo"]=="Head Of Health Department")
       {
	
header("Location:creategm.php?id=2013novHealth");
  } 
  
  else if($year==2013 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Health Department" )
       {
	
header("Location:creategm.php?id=2013decHealth");
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