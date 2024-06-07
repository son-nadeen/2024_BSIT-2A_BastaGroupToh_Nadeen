<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$age = $_POST['age'];
$address = $_POST['address'];
$user_type = $_POST['user_type'];
$username = $_POST['username'];

$stmt = $conn->prepare("INSERT INTO users (email, password, full_name, age, address, user_type, username) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssisss", $email, $password, $full_name, $age, $address, $user_type, $username);

if ($stmt->execute() === TRUE) {
    echo "New user added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>