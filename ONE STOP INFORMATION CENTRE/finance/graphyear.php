<?php
session_start();

if (isset($_SESSION['login_user'])) {
    include('connection.php');
    include('phpgraphlib.php');

    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');

    $data = mysqli_query($connection, "SELECT * FROM duty WHERE assignedTo = 'Head Of Finance Department' AND deadline LIKE '$year%' ");
    $total_duties = mysqli_num_rows($data);

    // echo $total_duties . " total" . "<br/>";

    $pending_duties = mysqli_query($connection, "SELECT * FROM duty WHERE assignedTo = 'Head Of Finance Department' AND status = 'pending' AND deadline LIKE '$year%' ");
    $num_pending_duties = mysqli_num_rows($pending_duties);

    // echo $num_pending_duties . " pending" . "<br/>";

    //% of pending
    $percent_pending_duties = ($num_pending_duties / $total_duties) * 100;
    // echo $percent_pending_duties . "<br/>";

    $completed_duties = mysqli_query($connection, "SELECT * FROM duty WHERE assignedTo = 'Head Of Finance Department' AND status = 'Accomplished' AND deadline LIKE '$year%' ");
    $num_completed_duties = mysqli_num_rows($completed_duties);

    //echo $num_completed_duties . " done" . "<br/>";

    //% of accomplished
    $percent_completed_duties = ($num_completed_duties / $total_duties) * 100;
    //echo $percent_completed_duties;

    $graph = new PHPGraphLib(500, 650);
    $data = array("PENDING" => $percent_pending_duties, "ACCOMPLISHED" => $percent_completed_duties);
    $graph->addData($data);

    $graph->setTitle('Performance Analysis in Percentage (%) for ' . $year);
    $graph->setTitleLocation('left');
    $graph->setLegendTitle('Duties');
    $graph->setLegend(true);

    $graph->setBarColor('blue');
    $graph->createGraph();
} else {
    header('location: ../index.php');
}
?>
