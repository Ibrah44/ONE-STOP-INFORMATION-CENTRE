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

include('connect.php');
$period=$_POST['year'];

//$duration=$_POST['month'];

$coverage=$_POST['section'];


if($period==2015 && $coverage=="Town Councils")

{
	
@header("Location: analysis2015.php");
} 

else if ($period==2014 && $coverage=="Town Councils")  
{
	@header("Location: analysis2014.php");
	
	}
	
	
	
	
	else if ($period==2013 && $coverage=="Town Councils") 
	{
	@header("Location: analysis2013.php");
	
	}
	
	
	else if ($period==2015 && $coverage=="All Departments")  {
	@header("Location: showalldept2015.php");
	
	}
	
	
	
	else if ($period==2014 && $coverage=="All Departments")  {
	@header("Location: showalldept2014.php");
	
	}




else if ($period==2013 && $coverage=="All Departments")  {
	@header("Location: showalldept2013.php");
	
	}

	
// for nansana	

else if ($period==2015 && $coverage=="Nansana Town Clerk")  {
	@header("Location: onlynansana2015.php");
	
	}

else if ($period==2014 && $coverage=="Nansana Town Clerk")  {
	@header("Location: onlynansana2014.php");
	
	}

else if ($period==2013 && $coverage=="Nansana Town Clerk")  {
	@header("Location: onlynansana2013.php");
	
	}
	
// for kira
else if ($period==2015 && $coverage=="Kira Town Clerk")  {
	@header("Location: onlykira2015.php");
	
	}

else if ($period==2014 && $coverage=="Kira Town Clerk")  {
	@header("Location: onlykira2014.php");
	
	}

else if ($period==2013 && $coverage=="Kira Town Clerk")  {
	@header("Location: onlykira2013.php");
	
	}
	
	// for community
	else if ($period==2015 && $coverage=="Head Of Community Department")  {
	@header("Location: onlyhodc2015.php");
	
	}

else if ($period==2014 && $coverage=="Head Of Community Department")  {
	@header("Location: onlyhodc2014.php");
	
	}

else if ($period==2013 && $coverage=="Head Of Community Department")  {
	@header("Location: onlyhodc2013.php");
	
	}

//for health
	else if ($period==2015 && $coverage=="Head Of Health Department")  {
	@header("Location: onlyhodh2015.php");
	
	}

else if ($period==2014 && $coverage=="Head Of Health Department")  {
	@header("Location: onlyhodh2014.php");
	
	}

else if ($period==2013 && $coverage=="Head Of Health Department")  {
	@header("Location: onlyhodh2013.php");
	
	}

//finance
else if ($period==2015 && $coverage=="Head Of Finance Department")  {
	@header("Location: onlyhodf2015.php");
	
	}

else if ($period==2014 && $coverage=="Head Of Finance Department")  {
	@header("Location: onlyhodf2014.php");
	
	}

else if ($period==2013 && $coverage=="Head Of Finance Department")  {
	@header("Location: onlyhodf2013.php");
	
	}

	

//for education	
	else if ($period==2015 && $coverage=="Head Of Education Department")  {
	@header("Location: onlyhode2015.php");
	
	}

else if ($period==2014 && $coverage=="Head Of Education Department")  {
	@header("Location: onlyhode2014.php");
	
	}

else if ($period==2013 && $coverage=="Head Of Education Department")  {
	@header("Location: onlyhode2013.php");
	
	}

	
	
	
	
	
	
	
	
	else{}


}
else
{
Header('location: ../index.php');
}



?>
</body>
</html>


