<?php
// Start the session
session_start();

// Define the landing page URL
$landingPage = "https://www.jainnutsdryfruits.com/product";

// Check if the user is not already on the landing page
if ($_SERVER['REQUEST_URI'] !== '/landing-page') {
    // Redirect to the landing page
    header("Location: $landingPage");
    exit(); // Always exit after a redirect to stop further script execution
}
?>
