<?php
// Example PHP code to set an image URL
$imageUrl = "https://www.amazon.com/stores/Goranbon/page/10BE3DED-07AD-4AA4-A8D8-4E386444C963"; // Change to your image URL
$redirectUrl = "https://www.jainnutsdryfruits.com/product"; // Change to your target URL
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Clickable Image</title>
    <script>
        // Function to redirect to the target URL
        function autoClick() {
            window.location.href = "<?php echo $redirectUrl; ?>";
        }

        // Set a timeout to call the autoClick function after 5 seconds
        window.onload = function() {
            setTimeout(autoClick, 5000); // 5000 milliseconds = 5 seconds
        };
    </script>
</head>
<body>
    <a href="<?php echo $redirectUrl; ?>" id="clickable-image">
        <img src="<?php echo $imageUrl; ?>" alt="Clickable Image" style="width: 300px; height: auto;">
    </a>
</body>
</html>
