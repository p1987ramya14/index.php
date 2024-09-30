<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Handler</title>
    <script src="https://cdn.branch.io/branch-latest.min.js"></script>
    <script>
        // Initialize Branch
        branch.init('key_live_gBkGZZLrvcD16W3BjwujJakaFvd2knog', function(err, data) {
            if (err) {
                console.error('Branch initialization error:', err);
                return;
            }

            // Capture the URL parameter
            const urlParam = data['$url']; // or use any custom parameter you set

            // Redirect based on the captured URL
            if (urlParam) {
                window.location.href = urlParam; // Redirect to the desired URL
            } else {
                // Fallback URL if no parameter is found
                window.location.href = 'https://www.anandsweets.in/';
            }
        });
    </script>
</body>
</html>
