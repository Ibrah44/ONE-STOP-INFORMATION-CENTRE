<?php
    $dsn = 'mysql:host=localhost;dbname=osic';
    $username = 'root';
    $password = '';

    try {
        $con = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/err.php');
        exit();
    }
?>