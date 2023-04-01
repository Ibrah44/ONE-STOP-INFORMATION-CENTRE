<?php

// Start session
session_start();

// Check if user is logged in
if(isset($_SESSION['login_user']))
{
    // Include database connection file
    require_once 'connect.php';

    // Include PHPGraphLib library
    require_once 'phpgraphlib.php';

    // Set up graph object
    $graph = new PHPGraphLib(600, 600);

    // Get year from URL parameter, default to current year
    $year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');

    // Get duty data for year
    $stmt = $pdo->prepare('SELECT * FROM duty WHERE assignedTo = "Head Of Finance Department" AND YEAR(deadline) = :year');
    $stmt->execute(['year' => $year]);
    $duty_data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Calculate number of duties for year
    $num_duties = count($duty_data);

    // Calculate number of pending duties for year
    $stmt = $pdo->prepare('SELECT * FROM duty WHERE assignedTo = "Head Of Finance Department" AND status = "pending" AND YEAR(deadline) = :year');
    $stmt->execute(['year' => $year]);
    $num_pending = $stmt->rowCount();

    // Calculate percentage of pending duties for year
    $percent_pending = $num_pending / $num_duties * 100;

    // Calculate number of accomplished duties for year
    $stmt = $pdo->prepare('SELECT * FROM duty WHERE assignedTo = "Head Of Finance Department" AND status = "Accomplished" AND YEAR(deadline) = :year');
    $stmt->execute(['year' => $year]);
    $num_accomplished = $stmt->rowCount();

    // Calculate percentage of accomplished duties for year
    $percent_accomplished = $num_accomplished / $num_duties * 100;

    // Set data for graph
    $data = array("Pending" => $percent_pending, "Accomplished" => $percent_accomplished);

    // Add data to graph
    $graph->addData($data);

    // Set graph title
    $graph->setTitle('Performance Analysis for ' . $year . ' (Percentage)');

    // Set graph title location
    $graph->setTitleLocation('left');

    // Set graph legend title
    $graph->setLegendTitle('Duties');

    // Show graph legend
    $graph->setLegend(true);

    // Set bar color
    $graph->setBarColor('blue');

    // Create graph
    $graph->createGraph();
}
else
{
    // Redirect to login page if user is not logged in
    header('Location: ../index.php');
    exit();
}
