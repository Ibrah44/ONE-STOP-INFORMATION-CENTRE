<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include("connection.php");


if(isset($_SESSION['login_user']))
{
$year=$_POST['year'];


$shw= mysql_query("select*from duty where assignedTo='Head Of Community Development Department'");
	 while($WEduty = mysql_fetch_array($shw))
	   {
		
 if($year==2015 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:createg.php?id=2015Community");
} 

 if($year==2014 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:createg.php?id=2014Community");
} 
	
 if($year==2013 && $WEduty["assignedTo"]=="Head Of Community Development Department")
       {
	
header("Location:createg.php?id=2013Community");
  } 
  
  
if ($year==2016)  {
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
