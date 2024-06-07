<?php 

$conn = new mysqli("localhost", "root", "", "bgt_sannscraft");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if $_GET['user'] is set
if(isset($_GET['user'])) {
    $username = $_GET['user'];

    // Debug output to see the value of $_GET['user']
    echo "Debug: User parameter provided: " . htmlspecialchars($username) . "<br>";

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);

    // Check for errors in query execution
    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }

    $result = $stmt->get_result();
    
    // Check if the user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Close the prepared statement
        $stmt->close();
    } else {
        die("User not found");
    }
} else {
    die("User parameter not provided");
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($user['full_name']); ?></h2>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Username: <?php echo htmlspecialchars($user['username']); ?></p>
    <p>Age: <?php echo htmlspecialchars($user['age']); ?></p>
    <p>Address: <?php echo htmlspecialchars($user['address']); ?></p>
    <p>User Type: <?php echo htmlspecialchars($user['user_type'] == 'A' ? 'Admin' : 'Customer'); ?></p>
</body>
</html>
