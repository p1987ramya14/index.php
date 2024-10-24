<?php
// Sanitize and validate input
$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
$gclid = filter_input(INPUT_GET, 'gclid', FILTER_SANITIZE_STRING);

// Set device and id variables as needed
$device = 'c'; // Replace with actual value or logic to determine it
$id = '5'; // Replace with actual value or logic to determine it

// Final destination URL
$final_url = "https://www.jainnutsdryfruits.com/product?device=" . urlencode($device) . "&gclid=" . urlencode($gclid) . "&id=" . urlencode($id);
header("Location: $final_url");
exit;
?>
