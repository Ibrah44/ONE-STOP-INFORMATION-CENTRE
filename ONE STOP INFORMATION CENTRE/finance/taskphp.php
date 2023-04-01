<?php
session_start();
include('connect.php');

$vdate = date('Y-m-d');
$compareDate = $pdo->query('SELECT taskDate FROM task');
while ($shwdatetasks = $compareDate->fetch(PDO::FETCH_ASSOC)) {
    if ($vdate == $shwdatetasks["taskDate"]) {
        $seltask = $pdo->query('SELECT taskId, taskName, taskDetails FROM task');

        echo '<table border="1" align="center" cellpadding="2" cellspacing="0">
        <tr>
            <td><b>Task ID</b></td>
            <td><b>Task name</b></td>
            <td><b>Task Details</b></td>
        </tr>';
        while ($shwtasks = $seltask->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td>{$shwtasks["taskId"]}</td>
                <td>{$shwtasks["taskName"]}</td>
                <td>{$shwtasks["taskDetails"]}</td>
            </tr>";
        }
        echo '</table>';
    } else {
        // do something else if the dates don't match
    }
}
?>
