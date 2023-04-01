<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
include('phpgraphlib.php');

                         $data = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" AND deadline like "2013-04%" ');
                         $num_ro = mysql_num_rows($data);

                   // echo $num_ro."total"."<br/>";
					 
                     $result2n = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" AND status="pending" AND deadline like "2013-04%" ');
                         $num_rows = mysql_num_rows($result2n);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $try2=$num_rows/$num_ro* 100;	
							 // echo $try2."<br/>";
							    $result3 = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" AND status="Accomplished" AND deadline like "2013-04%"');
                                   $num_acc = mysql_num_rows($result3);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
							           $try3=$num_acc /$num_ro *100;
							 //echo   $try3;
		 						   //echo  $tryf."<br/>";




$graph = new PHPGraphLib(500,650);
$data = array("PENDING"=>$try2,"ACCOMPLISHED"=> $try3);
$graph->addData($data);



$graph->setTitle('Performance Anaylsis in Percentage(%)');
$graph->setTitleLocation('left');
$graph->setLegendTitle('Duties');
$graph->setLegend(true);

$graph->setBarColor('blue');
$graph->createGraph();
//}

}
else
{
Header('location: ../index.php');
}
?>