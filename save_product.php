<?php
include 'config.php';

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$stmt = $conn->prepare("INSERT INTO products (name, description, price) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $name, $description, $price);

if ($stmt->execute() === TRUE) {
    echo "New product created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>