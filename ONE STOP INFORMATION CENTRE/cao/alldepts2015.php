<?php

session_start();
if(isset($_SESSION['login_user']))
{

include('connect.php');
include('phpgraphlib.php');
$graph = new PHPGraphLib(600,600);


 //Finance
             $dataf = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department"  && deadline like "2015%"  ');
                         $num_rof = mysql_num_rows($dataf);

                     //echo $num_ro."total"."<br/>";
					 
                     $resultf = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Pending"  && deadline like "2015%" ');
                         $num_rowf = mysql_num_rows($resultf);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $pendf=$num_rowf/$num_rof* 100;	
							  //echo $try2."<br/>";
		
		
		$resultfi = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Accomplished" && deadline like "2015%" ');
                   $num_accf = mysql_num_rows($resultfi);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
					  $acomf=$num_accf /$num_rof *100;
							  
							 // echo   $try3;
			 
 //community
  $datac = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department"  && deadline like "2015%"  ');
                         $num_roc = mysql_num_rows($datac);

                     //echo $num_ro."total"."<br/>";
					 
                     $resultc = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Pending"  && deadline like "2015%" ');
                         $num_rowc = mysql_num_rows($resultc);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $pendc=$num_rowc/$num_roc* 100;	
							  //echo $try2."<br/>";
		
		
		$resultfc = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Accomplished" && deadline like "2015%" ');
                   $num_accc = mysql_num_rows($resultfc);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
					  $acomc=$num_accc /$num_roc *100;
							  
							 // echo   $try3;
			
 
 
 
 
 
 
 
 //health
 
  $datah = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department"  && deadline like "2015%"  ');
                         $num_roh = mysql_num_rows($datah);

                     //echo $num_ro."total"."<br/>";
					 
                     $resulth = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Pending"  && deadline like "2015%" ');
                         $num_rowh = mysql_num_rows($resulth);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $pendh=$num_rowh/$num_roh* 100;	
							  //echo $try2."<br/>";
		
		
		$resultfh = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Accomplished" && deadline like "2015%" ');
                   $num_acch = mysql_num_rows($resultfh);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
					  $acomh=$num_acch /$num_roh *100;
							  
							 // echo   $try3;
			
 
 
 
 
 //education
 
 
  $datae = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department"  && deadline like "2015%"  ');
                         $num_roe = mysql_num_rows($datae);

                     //echo $num_ro."total"."<br/>";
					 
                     $resulte = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Pending"  && deadline like "2015%" ');
                         $num_rowe = mysql_num_rows($resulte);
						 
						// echo $num_rows."pending"."<br/>";
						 //% of pending
                              $pende=$num_rowe/$num_roe* 100;	
							  //echo $try2."<br/>";
		
		
		$resultfe = mysql_query('SELECT * FROM duty where assignedTo="Head Of Finance Department" && status="Accomplished" && deadline like "2015%" ');
                   $num_acce = mysql_num_rows($resultfe);
					//echo  $num_acc."done"."<br/>";
							  //% of accomplished
							  
					  $acome=$num_acce /$num_roe *100;
							  
							 // echo   $try3;
			
 

 
//$data = array("Accomplished" =>$try3, "Pending" =>$try2);
//FIRST ROW for duties..ACCOMPLISHED
//$data = array("Finance" => $acomf, "Education" => $acome , "Community" => $acomc, "Health" =>$acomh );

//middle ROW for duties...PENDING
//$data2 = array("F" =>$pendf, "E" =>$pende,"C" =>$pendc, "H" =>$pendh);


$data = array("Finance" =>$acomf , "Education" => $acome , "Community" => $acomc, "Health" =>$acomh );

//middle ROW for duties...PENDING
$data2 = array("F" =>$pendf, "E" =>$pende,"C" =>$pendc, "H" =>$pendh);
$graph->addData($data, $data2);
$graph->setTitle('Town Council Duty Anaysis For 2013');
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