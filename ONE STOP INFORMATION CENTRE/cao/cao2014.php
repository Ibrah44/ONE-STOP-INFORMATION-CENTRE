<?php

session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
include('phpgraphlib.php');
$graph = new PHPGraphLib(700,600);


 //nansana aspects
             $data = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk"  && deadline like "2014%" ');
                         $num_ro = mysql_num_rows($data);

                    // echo $num_ro."total"."<br/>";
					 
                     $result2n = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk" && status="Pending"  && deadline like "2014%" ');
                         $num_rows = mysql_num_rows($result2n);
						 
						 //echo $num_rows."pending"."<br/>";
						 //% of pending
                              $try2=$num_rows/$num_ro* 100;	
							 // echo $try2."<br/>";
							    $result3 = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk" && status="Accomplished" && deadline like "2014%" ');
                                   $num_acc = mysql_num_rows($result3);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
							           $try3=$num_acc /$num_ro *100;
							  //echo   $try3;
			 //manipulation of Kira town clerk
			 
			$resultf = mysql_query('SELECT * FROM duty where assignedTo="kira Town Clerk" && deadline like "2014%" ');
                 
 				 $num_rowf = mysql_num_rows($resultf);
				 
				 //echo $num_rowf."total duties"."<br/>";
                      
					$result2f = mysql_query('SELECT * FROM duty where assignedTo="kira Town Clerk" && status="Pending" && deadline like "2014%"');
                        
						$num_rof = mysql_num_rows($result2f);
						
						//echo $num_rof."pending"."<br/>";
						 //% of pending
                              $trykp=$num_rof/$num_rowf * 100;	
							  //echo $tryf."<br/>";
							  
							  
							  
							    $result3f= mysql_query('SELECT * FROM duty where assignedTo="kira Town Clerk" && status="Accomplished" && deadline like "2014%" ');
                                   $num_accf = mysql_num_rows($result3f);
					  //echo $num_accf."done"."<br/>";
							  //% of accomplished
							  
							           $tryka= $num_accf /$num_rowf *100;
									   //echo  $tryka."<br/>"; 
 
 
 
 
 
 
 
 
 
 

//FIRST ROW for duties..ACCOMPLISHED
$data = array("Nansana" =>$try3, "Kira" =>$tryka);

//middle ROW for duties...PENDING
$data2 = array("nan" =>$try2, "k" =>$trykp);


$graph->addData($data, $data2);
$graph->setTitle('Town Council Duty Anaysis For 2014');
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