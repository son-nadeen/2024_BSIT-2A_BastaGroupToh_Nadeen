<?php
include('config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = $_POST['order_id'];
    $quantity = $_POST['quantity'];

    // Update quantity in the orders table
    $sql = "UPDATE orders SET quantity = ? WHERE order_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $quantity, $order_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Quantity updated successfully!";
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: cart.php");
    exit();
}
?>
