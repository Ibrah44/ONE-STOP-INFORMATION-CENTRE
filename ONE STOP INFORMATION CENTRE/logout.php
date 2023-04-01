
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login_user'])) {
    // Redirect to the login page if not logged in
    header("Location: index.php");
    exit();
}

// Update the user's login status in the database
include ('connection.php');
$login = $_SESSION['login_user'];
$status = "Logged out";
$sqlupdate = mysqli_query($conn, "UPDATE login SET loginStatus='$status' WHERE username='$login'");
if (!$sqlupdate) {
    // Handle any errors that occur during the update
    echo "Error updating login status: " . mysqli_error($conn);
    exit();
}

// Clear all session variables and destroy the session
session_unset();
session_destroy();

// Redirect to the login page
header("Location: index.php");
exit();
?>
