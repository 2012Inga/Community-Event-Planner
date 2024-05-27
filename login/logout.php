<?php
// Start the session
session_start();

// Clear all session data
$_SESSION = array();

// Destroy the session
session_destroy();

// Clear the user cookie
setcookie("user_email", "", time() - 3600, "/");

// Redirect to the home page
header("Location: ../index.php");
exit; // Stop further execution
?>
