<?php
$device = $_GET['device'];
$gclid = $_GET['gclid'];

// Log or process parameters as needed

// Final destination URL
$final_url = "https://www.jainnutsdryfruits.com/product?device=$device&gclid=$gclid&id=$id";
header("Location: $final_url");
exit;
?>
