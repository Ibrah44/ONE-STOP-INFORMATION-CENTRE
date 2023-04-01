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



$shw= mysql_query("select*from duty where assignedTo='Head Of Finance Department'");
	 while($WEduty = mysql_fetch_array($shw))
	   {
		
 if($year==2015 && $month==01 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2015janFinance");
} 

else if($year==2015 && $month==02 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015febFinance");
} 
	
else if($year==2015 && $month==03 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015marchFinance");
  } 
  
 else if($year==2015 && $month==04 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015aprilFinance");
} 
	
else if($year==2015 && $month==05 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015mayFinance");
  } 
  
  else if($year==2015 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015junFinance");
} 
	
else if($year==2015 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015julyFinance");
  } 
  
  else if($year==2015 && $month==08 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015augFinance");
} 
	
else if($year==2015 && $month==09 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015septFinance");
  }  
  
  else if($year==2015 && $month==10 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015octFinance");
} 
	
else if($year==2015 && $month==11 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2015novFinance");
  } 
  
  else if($year==2015 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Finance Department" )
       {
	
header("Location:creategm.php?id=2015decFinance");
} 


 else if($year==2014 && $month==01 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2014janFinance");
} 

else if($year==2014 && $month==02 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014febFinance");
} 
	
else if($year==2014 && $month==03 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014marchFinance");
  } 
  
 else if($year==2014 && $month==04 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014aprilFinance");
} 
	
else if($year==2014 && $month==05 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014mayFinance");
  } 
  
  else if($year==2014 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014junFinance");
} 
	
else if($year==2014 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014julyFinance");
  } 
  
  else if($year==2014 && $month==08 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014augFinance");
} 
	
else if($year==2014 && $month==09 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014septFinance");
  }  
  
  else if($year==2014 && $month==10 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014octFinance");
} 
	
else if($year==2014 && $month==11 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2014novFinance");
  } 
  
  else if($year==2014 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Finance Department" )
       {
	
header("Location:creategm.php?id=2014decFinance");
} 

 if($year==2013 && $month==01 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2013janFinance");
} 

else if($year==2013 && $month==02 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013febFinance");
} 
	
else if($year==2013 && $month==03 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013marchFinance");
  } 
  
 else if($year==2013 && $month==04 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013aprilFinance");
} 
	
else if($year==2013 && $month==05 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013mayFinance");
  } 
  
  else if($year==2013 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013junFinance");
} 
	
else if($year==2013 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013julyFinance");
  } 
  
  else if($year==2013 && $month==08 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013augFinance");
} 
	
else if($year==2013 && $month==09 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013septFinance");
  }  
  
  else if($year==2013 && $month==10 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013octFinance");
} 
	
else if($year==2013 && $month==11 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:creategm.php?id=2013novFinance");
  } 
  
  else if($year==2013 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Finance Department" )
       {
	
header("Location:creategm.php?id=2013decFinance");
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