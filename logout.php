<?php
session_start();

// Unset all of the session variables


// Destroy the session
session_destroy();

// Redirect to the login page or any other page you want after logout
header("Location: log.php");
exit;
?>
