<?php # Script 10.8 - logout.php
// This page lets the user logout.

// If no session variable exists, redirect the user:
if (!isset($_SESSION['user_id'])) {

    // Need to start the session:
    session_start();

}

// Delete the session variables:
$_SESSION = array(); // Initialize the $_SESSION array.

// Destroy the session itself:
session_destroy();

// Define the page title and include the header:
$page_title = 'Logout';
include ('includes/header.php');

// Print a customized message:
echo '<h1>Logged Out!</h1>
<p>You are now logged out!</p>';

include ('includes/footer.php');
?>