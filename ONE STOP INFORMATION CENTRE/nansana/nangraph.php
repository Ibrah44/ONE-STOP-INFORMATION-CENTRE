<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nansana</title>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['login_user']))
{
include("connection.php");
$period=$_POST['year'];

$duration=$_POST['month'];

//echo $period;
//echo $duration;

$xyz= mysqli_query($conn,'select * from duty where assignedTo="Nansana Town Clerk"');
while($x=mysqli_fetch_array($xyz) )

{ 


if($period==2015 && $duration==01 && $x["assignedTo"]=="Nansana Town Clerk")

{

@header("Location: nanjan2015.php");
} 



else if ($period==2015 && $duration==02 && $x["assignedTo"]=="Nansana Town Clerk")  
{
	@header("Location: nanfeb2015.php");
	
	}
	
	

	
	else if ($period==2015 && $duration==03 && $x["assignedTo"]=="Nansana Town Clerk") 
	{
	@header("Location: nanmar2015.php");
	
	}
	
	
	else if ($period==2015 && $duration==04 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanapril2015.php");
	
	}
	
	
	
	else if ($period==2015 && $duration==05 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanmay2015.php");
	
	}




else if ($period==2015 && $duration==06 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanju2015.php");
	
	}

	
	

else if ($period==2015 && $duration==07 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanjuly2015.php");
	
	}

else if ($period==2015 && $duration==08 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanaug2015.php");
	
	}

else if ($period==2015 && $duration==09 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nansept2015.php");
	
	}
	

else if ($period==2015 && $duration==10 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanoct2015.php");
	
	}

else if ($period==2015 && $duration==11 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nannov2015.php");
	
	}

else if ($period==2015 && $duration==12 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nandec2015.php");
	
	}
	
	// for 2014
	else if ($period==2014 && $duration==01 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanjan2014.php");
	
	}
else if ($period==2014 && $duration==02 && $x["assignedTo"]=="Nansana Town Clerk")  
{
	@header("Location: nanfeb2014.php");
	
	}
	
	
	
	
	else if ($period==2014 && $duration==03 && $x["assignedTo"]=="Nansana Town Clerk") 
	{
	@header("Location: nanmar2014.php");
	
	}
	
	
	else if ($period==2014 && $duration==04 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanapril2014.php");
	
	}
	
	
	
	else if ($period==2014 && $duration==05 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanmay2014.php");
	
	}




else if ($period==2014 && $duration==06 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanju2014.php");
	
	}

	
	

else if ($period==2014 && $duration==07 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanjuly2014.php");
	
	}

else if ($period==2014 &&  $duration==08 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanaug2014.php");
	
	}

else if ($period==2014 && $duration==09 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nansept2014.php");
	
	}
	

else if ($period==2014 && $duration==10 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanoct2014.php");
	
	}

else if ($period==2014 && $duration==11 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nannov2014.php");
	
	}

else if ($period==2014 && $duration==12 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nandec2014.php");
	
	}
	// 2013
	else if ($period==2013 && $duration==01 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanjan2015.php");
	
	}
else if ($period==2013 && $duration==02 && $x["assignedTo"]=="Nansana Town Clerk")  
{
	@header("Location: nanfeb2013.php");
	
	}
	
	
	
	
	else if ($period==2013 && $duration==03 && $x["assignedTo"]=="Nansana Town Clerk") 
	{
	@header("Location: nanmar2013.php");
	
	}
	
	
	else if ($period==2013 && $duration==04 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanapril2013.php");
	
	}
	
	
	
	else if ($period==2013 && $duration==05 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location: nanmay2013.php");
	
	}




else if ($period==2013 && $duration==06 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanju2013.php");
	
	}

	
	

else if ($period==2013 && $duration==07 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanjuly2013.php");
	
	}

else if ($period==2013 && $duration==08 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanaug2013.php");
	
	}

else if ($period==2013 && $duration==09 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nansept2013.php");
	
	}
	

else if ($period==2013 && $duration==10 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nanoct2013.php");
	
	}

else if ($period==2013 && $duration==11 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nannov2013.php");
	
	}

else if ($period==2013 && $duration==12 && $x["assignedTo"]=="Nansana Town Clerk")  {
	@header("Location:  nandec2013.php");
	
	}
	
	
	
else {}
	
	
}	
}
else
{
Header('location: ../index.php');
}	
?>
</body>
</html>