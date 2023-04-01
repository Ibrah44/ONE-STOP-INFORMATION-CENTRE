<?php
session_start();
include('connection.php');

if (!isset($_SESSION['login_user'])) {
  header('Location:index.php');
  exit();
}

$username = mysqli_real_escape_string($conn, $_SESSION['login_user']);

$stmt = mysqli_prepare($conn, "SELECT password FROM login WHERE username = ?");
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $hashed_password);
mysqli_stmt_fetch($stmt);

if (!$hashed_password || !password_verify($_SESSION['login_password'], $hashed_password)) {
  mysqli_close($conn);
  header('Location:index.php');
  exit();
}

?>