<?php

session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
include('phpgraphlib.php');
$graph = new PHPGraphLib(600,600);


 //Finance
             $dataf = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk"  && deadline like "2015%"  ');
                         $num_rof = mysql_num_rows($dataf);

                     //echo $num_ro."total"."<br/>";
					 
                     $resultf = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk" && status="Pending"  && deadline like "2015%" ');
                         $num_rowf = mysql_num_rows($resultf);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $pendf=$num_rowf/$num_rof* 100;	
							  //echo $try2."<br/>";
		
		
		$resultfi = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk" && status="Accomplished" && deadline like "2015%" ');
                   $num_accf = mysql_num_rows($resultfi);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
					  $acomf=$num_accf /$num_rof *100;
							  
							 // echo   $try3;
			 
 

$data = array("Accomplished" =>$acomf , "Pending" => $pendf  );

$graph->addData($data);
$graph->setTitle('Nansana Town Council Duty Anaysis For 2015');
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