<?php
session_start();
include('config.php'); // Assuming you have a file to handle DB configuration

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Establish database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the search query
    $stmt = $conn->prepare("SELECT item_name, price, image_url FROM items WHERE item_name LIKE ?");
    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    $searchTerm = "%" . $query . "%";
    $stmt->bind_param("s", $searchTerm);

    // Execute the statement
    if (!$stmt->execute()) {
        die("Statement execution failed: " . $stmt->error);
    }

    // Get the result
    $result = $stmt->get_result();
    if (!$result) {
        die("Getting result failed: " . $stmt->error);
    }

    // Fetch results and store in session
    $search_results = [];
    while ($row = $result->fetch_assoc()) {
        $search_results[] = $row;
    }

    $_SESSION['search_results'] = $search_results;

    // Close connection
    $stmt->close();
    $conn->close();
}

header('Location: search_result.php');
exit();
?>
