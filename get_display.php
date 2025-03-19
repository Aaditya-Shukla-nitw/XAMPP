<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET Method - Data Display</title>
</head>
<body>
    <h2>Data Received (GET Method)</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Capture data from GET parameters
        $name = $_GET['name'] ?? 'N/A';
        $email = $_GET['email'] ?? 'N/A';
        $phone = $_GET['phone'] ?? 'N/A';

        // Display captured data safely
        echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>";
    }
    ?>
</body>
</html>