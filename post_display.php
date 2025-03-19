<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST Method - Data Display</title>
</head>
<body>
    <h2>Data Received (POST Method)</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture data from GET parameters
        $name = $_POST['name'] ?? 'N/A';
        $destination = $_POST['destination'] ?? 'N/A';

        // Display captured data safely
        echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Destination:</strong> " . htmlspecialchars($destination) . "</p>";
        if($destination == "USA"){
            echo "Visa required for most applicants.";
        }else if($destination == "Canada"){
            echo "Visa required unless you have an eTA."; 
        }else if($destination == "India"){
            echo "Visa required before travel"; 
        }else if($destination == "UK"){
            echo "Visa depends on the duration of stay."; 
        }else if($destination == "Aus"){
            echo "eVisa available for eligible travelers"; 
        }
    }
    ?>
</body>
</html>