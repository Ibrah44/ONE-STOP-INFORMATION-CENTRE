<?php
session_start();

if(isset($_SESSION['login_user']) && !empty($_SESSION['login_user']))
{
    require_once('connect.php');
    require_once('phpgraphlib.php');
    $graph = new PHPGraphLib(600,600);
    $departments = array("Head Of Education Department", "Nansana Town Clerk", "Other Department");
    $years = array("2013", "2014", "2015");
    
    foreach ($departments as $department) {
        foreach ($years as $year) {
            $stmt = $pdo->prepare("SELECT * FROM duty WHERE assignedTo = :department AND deadline LIKE :year");
            $stmt->execute(['department' => $department, 'year' => $year.'%']);
            $num_rof = $stmt->rowCount();
            
            $stmt = $pdo->prepare("SELECT * FROM duty WHERE assignedTo = :department AND status = 'Pending' AND deadline LIKE :year");
            $stmt->execute(['department' => $department, 'year' => $year.'%']);
            $num_rowf = $stmt->rowCount();
            $pendf = $num_rowf / $num_rof * 100;
            
            $stmt = $pdo->prepare("SELECT * FROM duty WHERE assignedTo = :department AND status = 'Accomplished' AND deadline LIKE :year");
            $stmt->execute(['department' => $department, 'year' => $year.'%']);
            $num_accf = $stmt->rowCount();
            $acomf = $num_accf / $num_rof * 100;
            
            $data = array("Accomplished" =>$acomf , "Pending" => $pendf  );
            
            $graph->addData($data);
            $graph->setTitle("$department Duty Analysis For $year");
            $graph->setTitleLocation('left');
            $graph->setLegendTitle('Duties');
            $graph->setLegend(true);
            $graph->setBarColor('black','blue');
            $graph->createGraph();
            
            // Clear the data for the next graph
            $graph->clearData();
        }
    }
}
else
{
    header('location: ../index.php');
    exit;
}
?>

