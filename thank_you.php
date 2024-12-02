<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Add any additional CSS or meta tags as needed -->
</head>
<body>
    <div class="container">
        <h1>Thank You for Your Booking!</h1>
        <p>Your booking has been successfully completed.</p>
        <?php
        // Display PayPal transaction ID if passed in URL
        $orderId = $_GET['orderId'] ?? '';
        if (!empty($orderId)) {
            echo '<p>PayPal Transaction ID: ' . $orderId . '</p>';
        }
        ?>
        <!-- You can add additional details or links here -->
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>
