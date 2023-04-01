<?php

session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
include('phpgraphlib.php');
$graph = new PHPGraphLib(500,400);


 //for january 2015..finance
             $data = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department"  ');
                         $num_ro = mysql_num_rows($data);

                    // echo $num_ro."total"."<br/>";
					 
                     $result2n = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Pending"  ');
                         $num_rows = mysql_num_rows($result2n);
						 
						 //echo $num_rows."pending"."<br/>";
						 //% of pending
                              $try2=$num_rows/$num_ro* 100;	
							 // echo $try2."<br/>";
							    $result3 = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Accomplished"  ');
                                   $num_acc = mysql_num_rows($result3);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
							           $try3=$num_acc /$num_ro *100;
							  //echo   $try3;
			 //manipulation..community
			 
			$resultf = mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" ');
                 
 				 $num_rowf = mysql_num_rows($resultf);
				 
				 //echo $num_rowf."total duties"."<br/>";
                      
					$result2f = mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" && status="Pending" ');
                        
						$num_rof = mysql_num_rows($result2f);
						
						//echo $num_rof."pending"."<br/>";
						 //% of pending
                              $trykp=$num_rof/$num_rowf * 100;	
							  //echo $tryf."<br/>";
							  
							  
							  
							    $result3f= mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" && status="Accomplished"  ');
                                   $num_accf = mysql_num_rows($result3f);
					  //echo $num_accf."done"."<br/>";
							  //% of accomplished
							  
							           $tryka= $num_accf /$num_rowf *100;
									   //echo  $tryka."<br/>"; 
 
 //Education
 $resulte = mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" ');
                 
 				 $num_rowe = mysql_num_rows($resulte);
				 
				 //echo $num_rowf."total duties"."<br/>";
                      
					$result2e = mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" && status="Pending" ');
                        
						$num_roe = mysql_num_rows($result2e);
						
						//echo $num_rof."pending"."<br/>";
						 //% of pending
                              $tryep=$num_roe/$num_rowe * 100;	
							  //echo $tryf."<br/>";
							  
							  
							  
							    $educ= mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" && status="Accomplished"  ');
                                   $num_acce = mysql_num_rows($educ);
					  //echo $num_accf."done"."<br/>";
							  //% of accomplished
							  
							           $tryea= $num_acce /$num_rowe *100;
									   //echo  $tryka."<br/>"; 
 
 
 
 
 
 
 //Health
 $resulth = mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" ');
                 
 				 $num_rowh = mysql_num_rows($resulth);
				 
				 //echo $num_rowf."total duties"."<br/>";
                      
					$resulthf = mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" && status="Pending" ');
                        
						$num_rofh = mysql_num_rows($resulthh);
						
						//echo $num_rof."pending"."<br/>";
						 //% of pending
                              $tryhp=$num_rofh/$num_rowh * 100;	
							  //echo $tryf."<br/>";
							  
							  
							  
							    $resulthf= mysql_query('SELECT * FROM duty where assignedTo="Head Of Community Department" && status="Accomplished"  ');
                                   $num_acch = mysql_num_rows($resulthf);
					  //echo $num_accf."done"."<br/>";
							  //% of accomplished
							  
							           $tryha= $num_acch /$num_rowh *100;
									   //echo  $tryka."<br/>"; 
 
 
//Begin Graph
//FIRST ROW for duties..ACCOMPLISHED
$data = array("Finance" =>$try3, "Community" =>$tryka,"Education" =>$tryea, "Health" =>$tryha);

//middle ROW for duties...PENDING
$data2 = array("f" =>$try2, "c" =>$trykp,"e" =>$tryep , "h" =>$tryhp);


$graph->addData($data, $data2);
$graph->setTitle('Head Of Department Duty Anaylsis For 2015');
$graph->setTitleLocation('left');
$graph->setLegendTitle('Accomplished', 'Pending');
$graph->setLegend(true);

$graph->setBarColor('black','blue');
$graph->createGraph();



}
else
{
Header('location: ../index.php');
}


?>