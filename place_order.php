<?php
// place_order.php
include('config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if form data is set
    if (isset($_POST['contact_number']) && isset($_POST['customer_address']) && isset($_POST['customer_email'])) {
        // Get user details (assuming user details are stored in the session)
        $user_id = $_SESSION['user_id'];
        $shipped_via = 'Standard Shipping'; // Example shipping method
        $contact_number = $_POST['contact_number'];
        $customer_address = $_POST['customer_address'];
        $customer_email = $_POST['customer_email'];

        // Calculate the total
        $total_amount = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total_amount += $item['item_price'] * $item['quantity'];
        }

        // Insert order details into orders table
        $stmt = $conn->prepare("INSERT INTO orders (item_id, item_price, quantity, date_added, item_name, image_url, user_id) VALUES (?, ?, ?, NOW(), ?, ?, ?)");
        foreach ($_SESSION['cart'] as $item) {
            $stmt->bind_param("iidissi", $item['item_id'], $item['item_price'], $item['quantity'], $item['item_name'], $item['image_url'], $user_id);
            $stmt->execute();
        }

        // Insert order details into order_details table
        $stmt = $conn->prepare("INSERT INTO order_details (user_id, item_id, date_added, shipped_via, contact_number, customer_address, shipped_date, total_amount, customer_email) VALUES (?, ?, NOW(), ?, ?, ?, NOW(), ?, ?)");
        foreach ($_SESSION['cart'] as $item) {
            $stmt->bind_param("iisssds", $user_id, $item['item_id'], $shipped_via, $contact_number, $customer_address, $total_amount, $customer_email);
            $stmt->execute();
        }
        $stmt->close();

        // Clear the cart
        $_SESSION['cart'] = array();

        // Generate a receipt
        $receipt = "Order placed successfully!\n\n";
        $receipt .= "User ID: $user_id\nTotal Amount: Php" . number_format($total_amount, 2) . "\n\nItems:\n";
        foreach ($_SESSION['cart'] as $item) {
            $receipt .= $item['item_name'] . " (x" . $item['quantity'] . ") - Php" . number_format($item['item_price'], 2) . "\n";
        }

        // Store the receipt in the session
        $_SESSION['receipt'] = $receipt;

        // Redirect to order confirmation page
        header("Location: order_confirmation.php");
        exit();
    } else {
        echo "Please fill in all required fields.";
    }
}
?>
