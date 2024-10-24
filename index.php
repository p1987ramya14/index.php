<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- GoTrackier Script -->
    <script src='https://static-cdn.trackier.com/js/trackier-web-sdk.js'></script>
    <script>
        // Track the URL on page load
        window.onload = function() {
            window.TrackierWebSDK.trackConvForBrand('das.gotrackier.io', '671a718a64927c86ea07228a', {
                "is_iframe": true,
                "tracked_url": "<?php echo 'https://www.jainnutsdryfruits.com/product'; ?>" // Replace with the URL you want to track
            });
        };
    </script>
</head>
<body>
    <!-- Your website content -->
</body>
</html>
