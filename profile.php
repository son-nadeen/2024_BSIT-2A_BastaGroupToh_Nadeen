<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header('Location: login.php');
    exit;
}

include 'config.php';

// Fetch user information from the database
$user_id = $_SESSION['user_id'];
$sql_user = "SELECT * FROM users WHERE user_id='$user_id'";
$result_user = $conn->query($sql_user);

if ($result_user->num_rows > 0) {
    $user_info = $result_user->fetch_assoc();
} else {
    // Redirect to login page if user information is not found
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .body {
            background-image: url(image/bg2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            width: 80%;
            max-width: 600px;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            margin: 5px 0;
        }

        .order-history {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="user-info">
            <img src="image/account.png" alt="User Icon" width="24" height="24">
            <p><strong>Name:</strong> <?php echo $user_info['username']; ?></p>
            <p><strong>Email:</strong> <?php echo $user_info['email']; ?></p>
        </div>
        <h2>User Information</h2>
        
    </div>

    <div class="card order-history">
        <h2>Order History</h2>
        <?php if (!isset($_SESSION['order_history']) || empty($_SESSION['order_history'])): ?>
            <p>No orders have been made yet.</p>
            <a href="shopnow.php">Continue Shopping</a>
        <?php else: ?>
            <?php foreach ($_SESSION['order_history'] as $order): ?>
                <h3>Order ID: <?php echo $order['order_id']; ?></h3>
                <p>Date: <?php echo $order['date']; ?></p>
                <table>
                    <tr><th>Item</th><th>Quantity</th><th>Price</th><th>Subtotal</th></tr>
                    <?php foreach ($order['items'] as $item): ?>
                        <?php $subtotal = $item['item_price'] * $item['quantity']; ?>
                        <tr>
                            <td><?php echo $item['item_name']; ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td>₱<?php echo $item['item_price']; ?></td>
                            <td>₱<?php echo $subtotal; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td>₱<?php echo $order['total']; ?></td>
                    </tr>
                </table>
                <hr>
            <?php endforeach; ?>
            <a href="shopnow.php">Continue Shopping</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
