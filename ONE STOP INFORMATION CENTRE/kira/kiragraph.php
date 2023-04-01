<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kira</title>
</head>

<body>
<?php
if(isset($_SESSION['login_user']))
{
include('connect.php');

$period=$_POST['year'];

$duration=$_POST['month'];

//echo $period;
//echo $duration;

$xyz= mysql_query('select * from duty where assignedTo="Kira Town Clerk"');
while($x=mysql_fetch_array($xyz) )

{ 


if($period==2015 && $duration==01 && $x["assignedTo"]=="Kira Town Clerk")

{

@header("Location: kirajan2015.php");
} 



else if ($period==2015 && $duration==02 && $x["assignedTo"]=="Kira Town Clerk")  
{
	@header("Location: kirafeb2015.php");
	
	}
	
	

	
	else if ($period==2015 && $duration==03 && $x["assignedTo"]=="Kira Town Clerk") 
	{
	@header("Location: kiramar2015.php");
	
	}
	
	
	else if ($period==2015 && $duration==04 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kiraapril2015.php");
	
	}
	
	
	
	else if ($period==2015 && $duration==05 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kiramay2015.php");
	
	}




else if ($period==2015 && $duration==06 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraju2015.php");
	
	}

	
	

else if ($period==2015 && $duration==07 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kirajuly2015.php");
	
	}

else if ($period==2015 && $duration==08 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraaug2015.php");
	
	}

else if ($period==2015 && $duration==09 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kirasept2015.php");
	
	}
	

else if ($period==2015 && $duration==10 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraoct2015.php");
	
	}

else if ($period==2015 && $duration==11 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiranov2015.php");
	
	}

else if ($period==2015 && $duration==12 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiradec2015.php");
	
	}
	
	// for 2014
	else if ($period==2014 && $duration==01 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kirajan2014.php");
	
	}
else if ($period==2014 && $duration==02 && $x["assignedTo"]=="Kira Town Clerk")  
{
	@header("Location: kirafeb2014.php");
	
	}
	
	
	
	
	else if ($period==2014 && $duration==03 && $x["assignedTo"]=="Kira Town Clerk") 
	{
	@header("Location: kiramar2014.php");
	
	}
	
	
	else if ($period==2014 && $duration==04 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kiraapril2014.php");
	
	}
	
	
	
	else if ($period==2014 && $duration==05 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kiramay2014.php");
	
	}




else if ($period==2014 && $duration==06 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraju2014.php");
	
	}

	
	

else if ($period==2014 && $duration==07 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kirajuly2014.php");
	
	}

else if ($period==2014 &&  $duration==08 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraaug2014.php");
	
	}

else if ($period==2014 && $duration==09 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kirasept2014.php");
	
	}
	

else if ($period==2014 && $duration==10 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraoct2014.php");
	
	}

else if ($period==2014 && $duration==11 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiranov2014.php");
	
	}

else if ($period==2014 && $duration==12 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiradec2014.php");
	
	}
	// 2013
	else if ($period==2013 && $duration==01 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kirajan2015.php");
	
	}
else if ($period==2013 && $duration==02 && $x["assignedTo"]=="Kira Town Clerk")  
{
	@header("Location: kirafeb2013.php");
	
	}
	
	
	
	
	else if ($period==2013 && $duration==03 && $x["assignedTo"]=="Kira Town Clerk") 
	{
	@header("Location: kiramar2013.php");
	
	}
	
	
	else if ($period==2013 && $duration==04 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kiraapril2013.php");
	
	}
	
	
	
	else if ($period==2013 && $duration==05 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location: kiramay2013.php");
	
	}




else if ($period==2013 && $duration==06 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraju2013.php");
	
	}

	
	

else if ($period==2013 && $duration==07 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kirajuly2013.php");
	
	}

else if ($period==2013 && $duration==08 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraaug2013.php");
	
	}

else if ($period==2013 && $duration==09 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kirasept2013.php");
	
	}
	

else if ($period==2013 && $duration==10 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiraoct2013.php");
	
	}

else if ($period==2013 && $duration==11 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiranov2013.php");
	
	}

else if ($period==2013 && $duration==12 && $x["assignedTo"]=="Kira Town Clerk")  {
	@header("Location:  kiradec2013.php");
	
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