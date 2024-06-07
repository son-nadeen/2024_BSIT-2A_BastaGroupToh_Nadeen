<?php
session_start();

if (!isset($_GET['item_id'])) {
    echo "No item ID provided.";
    exit();
}

$item_id = $_GET['item_id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shallashop";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch order details
    $stmt = $conn->prepare("SELECT * FROM orders WHERE item_id = :item_id");
    $stmt->bindParam(':item_id', $item_id);
    $stmt->execute();
    $order_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$order_items) {
        echo "Item not found.";
        exit();
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sann's Craft | E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Order Receipt</h1>
    <h2>Item ID: <?php echo htmlspecialchars($item_id); ?></h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <?php foreach ($order_items as $item): ?>
        <tr>
            <td><?php echo htmlspecialchars($item['user_id']); ?></td>
            <td><?php echo htmlspecialchars($item['item_name']); ?></td>
            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
            <td><?php echo htmlspecialchars($item['item_price']); ?></td>
            <td><?php echo htmlspecialchars($item['item_price'] * $item['quantity']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="profile.php">See Orders</a>
</body>
</html>
