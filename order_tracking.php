<?php
session_start();
require 'config.php'; // Ensure this file contains your DB connection setup

if (!isset($_GET['order_id'])) {
    die("Order ID is missing.");
}

$order_id = $_GET['order_id'];

// Fetch order details
$stmt = $conn->prepare("SELECT * FROM order_details WHERE order_id = ?");
$stmt->bind_param("s", $order_id);
$stmt->execute();
$order_items = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM orders WHERE order_id = ?");
$stmt->bind_param("s", $order_id);
$stmt->execute();
$order_info = $stmt->get_result()->fetch_assoc();

// Fetch shipping info (if applicable)
$stmt = $conn->prepare("SELECT * FROM shipping_info WHERE order_id = ?");
$stmt->bind_param("s", $order_id);
$stmt->execute();
$shipping_info = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Order Tracking</h1>

    <?php if (!empty($order_info)): ?>
        <p>Order ID: <?php echo htmlspecialchars($order_info['order_id']); ?></p>
        <p>Date: <?php echo htmlspecialchars($order_info['date_added']); ?></p>
        <p>Total Amount: <?php echo htmlspecialchars($order_info['total_amount']); ?></p>
        
        <h2>Items in Order</h2>
        <table>
            <tr>
                <th>Item Name</th>
                <th>Item ID</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php while ($item = $order_items->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['item_name']); ?></td>
                    <td><?php echo htmlspecialchars($item['item_id']); ?></td>
                    <td><?php echo htmlspecialchars($item['item_price']); ?></td>
                    <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                    <td><?php echo htmlspecialchars($item['item_price'] * $item['quantity']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        
        <?php if (!empty($shipping_info)): ?>
            <h2>Shipping Information</h2>
            <p>Shipped Via: <?php echo htmlspecialchars($shipping_info['shipped_via']); ?></p>
            <p>Contact Number: <?php echo htmlspecialchars($shipping_info['contact_number']); ?></p>
            <p>Customer Address: <?php echo htmlspecialchars($shipping_info['customer_address']); ?></p>
            <p>Shipped Date: <?php echo htmlspecialchars($shipping_info['shipped_date']); ?></p>
            <p>Status: <?php echo htmlspecialchars($shipping_info['status']); ?></p>
        <?php else: ?>
            <p>Shipping information not available.</p>
        <?php endif; ?>
    <?php else: ?>
        <p>Order not found.</p>
    <?php endif; ?>

</body>
</html>
