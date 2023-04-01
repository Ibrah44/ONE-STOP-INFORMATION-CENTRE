<?php
session_start();
if(isset($_SESSION['login_user']))
{
include('connection.php');
include('phpgraphlib.php');
$graph = new PHPGraphLib(600,600);


 //nansana aspects
             $data = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk"  && deadline like "2013-02%"  ');
                         $num_ro = mysql_num_rows($data);

                     //echo $num_ro."total"."<br/>";
					 
                     $result2n = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk" && status="Pending"  && deadline like "2013-02%" ');
                         $num_rows = mysql_num_rows($result2n);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $try2=$num_rows/$num_ro* 100;	
							  //echo $try2."<br/>";
		
		
		$result3 = mysql_query('SELECT * FROM duty where assignedTo="Nansana Town Clerk" && status="Accomplished" && deadline like "2013-02%" ');
                   $num_acc = mysql_num_rows($result3);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
					  $try3=$num_acc /$num_ro *100;
							  
							 // echo   $try3;
			 
 
 

 
//$data = array("Accomplished" =>$try3, "Pending" =>$try2);
//FIRST ROW for duties..ACCOMPLISHED
$data = array("Accomplished" =>$try3, "Pending" => $try2);

//middle ROW for duties...PENDING
//$data2 = array("nan" =>$try2, "k" =>$trykp);


$graph->addData($data);
$graph->setTitle('Nansana Town Council Duty Anaysis For February 2013(%)');
$graph->setTitleLocation('left');
$graph->setLegendTitle('Duties');
$graph->setLegend(true);

$graph->setBarColor('black');
$graph->createGraph();




}
else
{
Header('location: ../index.php');
}

?>