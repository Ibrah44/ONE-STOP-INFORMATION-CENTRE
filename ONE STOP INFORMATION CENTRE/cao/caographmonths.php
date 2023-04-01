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

$duration=$_POST['month'];

$coverage=$_POST['section'];
 
         
 // jAN 2015


         if($period=2015 && $duration="January" && $coverage="Nansana Town Clerk" )

                  {
	
               @header("Location: nanjan2015.php");
                         } 
						 
						

                     else if ($period=2015 && $duration="February" && $coverage="Nansana Town Clerk" )  {
	                        @header("Location: nanfeb2015.php");
	
	                                 }
	
	
		else if ($period=2015 && $duration="March" && $coverage="Nansana Town Clerk" )  {
	             @header("Location: nanmar2015.php");
	
	                }
	
	             else if ($period=2015 && $duration="April" && $coverage="Nansana Town Clerk") {
		                   @header("Location: nanapril2015.php");
		                              }


                               else if($period=2015 && $duration="May" && $coverage="Nansana Town Clerk")

                                             {
	
                                             @header("Location: nanmay2015.php");
                                                          }
                                       else if($period=2015 && $duration="June" && $coverage="Nansana Town Clerk")

                                                            {
	
                                              @header("Location: nanju2015.php");
                                                                 }
                                                    else if($period=2015 && $duration="July" && $coverage="Nansana Town Clerk")

                                                                      {
	
                                                             @header("Location: nanjuiy2015.php");
                                                                                 }
                                                                     else if($period=2015 && $duration="August" && $coverage="Nansana Town Clerk")

                                                                                            {
	
                                                                                      @header("Location: nanaug2015.php");
                                                                                                    }



else if($period=2015 && $duration="September" && $coverage="Nansana Town Clerk")

{
	
@header("Location: nansept2015.php");
}


else if($period=2015 && $duration="October" && $coverage="Nansana Town Clerk")

{
	
@header("Location: nanoct2015.php");
}



else if($period=2015 && $duration="November" && $coverage="Nansana Town Clerk")

{
	
@header("Location: nannov2015.php");
}



else if($period=2015 && $duration="December" && $coverage="Nansana Town Clerk")

{
	
@header("Location: nandec2015.php");
}


/*
else if($period=2015 && $duration="April" && $coverage="Head Of Finance Department")

{
	
@header("Location: caoform.php");
}
else if($period=2015 && $duration="May" && $coverage="Head Of Finance Department")

{
	
@header("Location: caoform.php");
}
else if($period=2015 && $duration="June" && $coverage="Head Of Finance Department")

{
	
@header("Location: caoform.php");
}
else if($period=2015 && $duration="July" && $coverage="Head Of Finance Department")

{
	


else if($period=2015 && $duration="January" && $coverage="Kira Town Clerk")

{
	
@header("Location: caoform.php");
}


else if($period=2015 && $duration="February" && $coverage="Kira Town Clerk")

{
	
@header("Location: caoform.php");
}



else if($period=2015 && $duration="March" && $coverage="Kira Town Clerk")

{
	
@header("Location: caoform.php");
}
else if($period=2015 && $duration="April" && $coverage="Kira Town Clerk")

{
	
@header("Location: caoform.php");
}
else if($period=2015 && $duration="May" && $coverage="Kira Town Clerk")

{
	
@header("Location: caoform.php");
}
else if($period=2015 && $duration="June" && $coverage="Kira Town Clerk")

{
	
@header("Location: caoform.php");
}
else if($period=2015 && $duration="July" && $coverage="Kira Town Clerk")

{
	
*/


}
else
{
Header('location: ../index.php');
}




?>
</body>
</html>