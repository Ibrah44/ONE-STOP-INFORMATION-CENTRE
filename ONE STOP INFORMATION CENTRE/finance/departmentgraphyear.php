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

//$section=$_POST['section'];



$shw= mysql_query("select*from duty where assignedTo='Head Of Finance Department'");
	 while($WEduty = mysql_fetch_array($shw))
	   {
		
 if($year==2015 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	//echo '<img src="graphyear.php">';
header("Location:createg.php?id=2015Finance");
} 

 if($year==2014 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:createg.php?id=2014Finance");
} 
	
 if($year==2013 && $WEduty["assignedTo"]=="Head Of Finance Department")
       {
	
header("Location:createg.php?id=2013Finance");
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