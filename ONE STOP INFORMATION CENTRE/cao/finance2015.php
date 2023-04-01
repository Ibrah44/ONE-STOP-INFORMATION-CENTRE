<?php
session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
include('phpgraphlib.php');
$graph = new PHPGraphLib(600,600);


 //Finance
             $dataf = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department"  && deadline like "2013%"  ');
                         $num_rof = mysql_num_rows($dataf);

                     //echo $num_ro."total"."<br/>";
					 
                     $resultf = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Pending"  && deadline like "2013%" ');
                         $num_rowf = mysql_num_rows($resultf);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $pendf=$num_rowf/$num_rof* 100;	
							  //echo $try2."<br/>";
		
		
		$resultfi = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Accomplished" && deadline like "2013%" ');
                   $num_accf = mysql_num_rows($resultfi);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
					  $acomf=$num_accf /$num_rof *100;
							  
							 // echo   $try3;
			 
 

$data = array("Accomplished" =>$acomf , "Pending" => $pendf  );

$graph->addData($data);
$graph->setTitle('Finance Department Duty Anaysis For 2013');
$graph->setTitleLocation('left');
$graph->setLegendTitle('Duties');
$graph->setLegend(true);

$graph->setBarColor('black','blue');
$graph->createGraph();




}
else
{
Header('location: ../index.php');
}




?>