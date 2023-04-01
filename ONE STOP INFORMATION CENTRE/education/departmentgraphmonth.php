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



$shw= mysql_query("select*from duty where assignedTo='Head Of Education Department'");
	 while($WEduty = mysql_fetch_array($shw))
	   {
		
 if($year==2015 && $month==01 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2015janEducation");
} 

else if($year==2015 && $month==02 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015febEducation");
} 
	
else if($year==2015 && $month==03 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015marchEducation");
  } 
  
 else if($year==2015 && $month==04 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015aprilEducation");
} 
	
else if($year==2015 && $month==05 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015mayEducation");
  } 
  
  else if($year==2015 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015junEducation");
} 
	
else if($year==2015 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015julyEducation");
  } 
  
  else if($year==2015 && $month==08 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015augEducation");
} 
	
else if($year==2015 && $month==09 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015septEducation");
  }  
  
  else if($year==2015 && $month==10 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015octEducation");
} 
	
else if($year==2015 && $month==11 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2015novEducation");
  } 
  
  else if($year==2015 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Education Department" )
       {
	
header("Location:creategm.php?id=2015decEducation");
} 


 else if($year==2014 && $month==01 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2014janEducation");
} 

else if($year==2014 && $month==02 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014febEducation");
} 
	
else if($year==2014 && $month==03 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014marchEducation");
  } 
  
 else if($year==2014 && $month==04 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014aprilEducation");
} 
	
else if($year==2014 && $month==05 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014mayEducation");
  } 
  
  else if($year==2014 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014junEducation");
} 
	
else if($year==2014 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014julyEducation");
  } 
  
  else if($year==2014 && $month==08 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014augEducation");
} 
	
else if($year==2014 && $month==09 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014septEducation");
  }  
  
  else if($year==2014 && $month==10 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014octEducation");
} 
	
else if($year==2014 && $month==11 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2014novEducation");
  } 
  
  else if($year==2014 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Education Department" )
       {
	
header("Location:creategm.php?id=2014decEducation");
} 

 if($year==2013 && $month==01 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:creategm.php?id=2013janEducation");
} 

else if($year==2013 && $month==02 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013febEducation");
} 
	
else if($year==2013 && $month==03 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013marchEducation");
  } 
  
 else if($year==2013 && $month==04 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013aprilEducation");
} 
	
else if($year==2013 && $month==05 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013mayEducation");
  } 
  
  else if($year==2013 && $month==06 &&  $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013junEducation");
} 
	
else if($year==2013 &&  $month==07 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013julyEducation");
  } 
  
  else if($year==2013 && $month==08 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013augEducation");
} 
	
else if($year==2013 && $month==09 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013septEducation");
  }  
  
  else if($year==2013 && $month==10 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013octEducation");
} 
	
else if($year==2013 && $month==11 && $WEduty["assignedTo"]=="Head Of Education Department")
       {
	
header("Location:creategm.php?id=2013novEducation");
  } 
  
  else if($year==2013 &&  $month==12 &&$WEduty["assignedTo"]=="Head Of Education Department" )
       {
	
header("Location:creategm.php?id=2013decEducation");
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